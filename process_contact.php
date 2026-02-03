<?php
// 1. Error Reporting Band karein (Taaki HTML warnings JSON ko break na karein)
error_reporting(0);
ini_set('display_errors', 0);

// 2. JSON Header Set karein
header('Content-Type: application/json; charset=utf-8');

// 3. Database Credentials
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "buimbrobo_db"; // <-- Aapka sahi database name

// 4. Connection (Error suppression '@' ke saath)
$conn = @new mysqli($servername, $username, $password, $dbname);

// 5. Connection Check
if ($conn->connect_error) {
    echo json_encode(["status" => "error", "message" => "Database Connection Failed: " . $conn->connect_error]);
    exit();
}

// 6. Request Method Check
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Inputs ko sanitize aur clean karein
    // '??' ka matlab hai agar value nahi mili toh empty string use karega (Error se bachne ke liye)
    $full_name = htmlspecialchars(strip_tags(trim($_POST['full_name'] ?? '')));
    $phone     = htmlspecialchars(strip_tags(trim($_POST['phone'] ?? '')));
    $email     = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
    $subject   = htmlspecialchars(strip_tags(trim($_POST['subject'] ?? '')));
    $message   = htmlspecialchars(strip_tags(trim($_POST['message'] ?? '')));

    // Validation: Check karein ki required fields khali toh nahi hain
    if (empty($full_name) || empty($email) || empty($message)) {
        echo json_encode(["status" => "error", "message" => "Please fill in all required fields."]);
        exit();
    }

    // SQL Prepare Statement (SQL Injection se bachne ke liye)
    $stmt = $conn->prepare("INSERT INTO contact_inquiries (full_name, phone, email, subject, message) VALUES (?, ?, ?, ?, ?)");
    
    if ($stmt) {
        // Parameters bind karein (s = string)
        $stmt->bind_param("sssss", $full_name, $phone, $email, $subject, $message);
        
        if ($stmt->execute()) {
            echo json_encode(["status" => "success", "message" => "Message sent successfully!"]);
        } else {
            echo json_encode(["status" => "error", "message" => "Database Error: " . $stmt->error]);
        }
        $stmt->close();
    } else {
        echo json_encode(["status" => "error", "message" => "SQL Preparation Error: " . $conn->error]);
    }

    $conn->close();

} else {
    echo json_encode(["status" => "error", "message" => "Invalid Request Method"]);
}
?>