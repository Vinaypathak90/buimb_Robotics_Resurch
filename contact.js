// 3. Form Submission Handler with Smart Debugging
const contactForm = document.getElementById('contactForm');
const successMessage = document.getElementById('successMessage');

if (contactForm) {
    contactForm.addEventListener('submit', (e) => {
        e.preventDefault(); 
        
        const btn = contactForm.querySelector('button');
        const originalBtnText = btn.innerHTML;

        // 1. Show Loading State
        btn.innerHTML = '<span class="animate-pulse">Sending...</span>';
        btn.disabled = true;
        btn.classList.add('opacity-75', 'cursor-not-allowed');

        const formData = new FormData(contactForm);

        // 2. Send Data
        fetch('process_contact.php', {
            method: 'POST',
            body: formData
        })
        .then(async response => {
            const text = await response.text(); // Get raw text first
            try {
                return JSON.parse(text); // Try to parse as JSON
            } catch (err) {
                // If it fails, it means PHP returned an HTML error (Crash)
                console.error("PHP Error Output:", text); // Log exact error to console
                throw new Error("Server Error. Check Console (F12) for details."); 
            }
        })
        .then(data => {
            if (data.status === 'success') {
                // Success
                contactForm.style.display = 'none';
                successMessage.classList.remove('hidden');
                successMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });
                contactForm.reset(); 
            } else {
                // Database Error (handled by PHP)
                alert("Error: " + data.message);
                resetButton(btn, originalBtnText);
            }
        })
        .catch(error => {
            // Crash or Network Error
            console.error('Final Error:', error);
            alert(error.message); // Show the actual error message
            resetButton(btn, originalBtnText);
        });
    });
}

function resetButton(btn, originalText) {
    btn.innerHTML = originalText;
    btn.disabled = false;
    btn.classList.remove('opacity-75', 'cursor-not-allowed');
}