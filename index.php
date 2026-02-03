<?php

$page_title = isset($page_title) ? $page_title . ' | BUIMB Robotics' : 'BUIMB Robotics | Innovation & Power';

include "header.php";

?>
<?php


// --- HERO SECTION CONFIGURATION ---

// 1. Background Image
$hero_image = "/BUIMBROBO/assets/ordinary-human-job-performed-by-anthropomorphic-robot.jpg";

// 2. Badge Text (Small red tag)
$hero_badge = "Future of Automation";

// 3. Heading Content
// We split this to allow the red color highlight on specific words
$heading_start = "Pioneering";
$heading_highlight = "Robotics Research"; // This will be RED
$heading_end = "for a Smarter Future.";

// 4. Description Paragraph
$hero_description = "At BUIMB, we combine power, precision, and trusted methodologies to develop next-generation autonomous systems. Our mission is to drive industrial innovation through advanced robotics.";

// 5. Buttons
$btn_primary_text = "Explore Innovations";
$btn_primary_link = "research.php";

$btn_secondary_text = "View Documentation";
$btn_secondary_link = "papers.php";

// 6. Features (Bottom Grid)
$features = [
    ['icon' => 'AI', 'label' => 'AI Integration'], 
    ['icon' => 'Precision', 'label' => 'Precision'], 
    ['icon' => 'Data', 'label' => 'Data Labs']
];
?>

<?php
// --- ABOUT SECTION CONFIGURATION ---

// 1. Images
// Note: You can change these to local paths like '/assets/about.jpg' later
$about_main_image = "https://images.unsplash.com/photo-1581092334651-ddf26d9a09d0?q=80&w=800&auto=format&fit=crop";
$ceo_image        = "https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=200&auto=format&fit=crop";

// 2. Main Content
$about_badge       = "About BUIMB Research";
$about_heading_1   = "Pioneering";
$about_highlight   = "Robotics"; // This word will be Red
$about_heading_2   = "for a Smarter Era.";

$about_desc_1      = "At the core of our mission is a deep commitment to advancing autonomous systems. Through AI-driven precision and cutting-edge mechanical engineering, we empower industries to build the future with confidence.";
$about_desc_2      = "We are not just building robots; we are forging reliable partnerships. Our dedicated labs and expert teams ensure that every solution is tested for real-world resilience.";

// 3. Statistics (The numbers that count up)
$years_experience = "20";
$stat_projects    = "250";
$stat_patents     = "50";
$stat_retention   = "98"; // percent

// 4. CEO Profile
$ceo_name  = "Dr. Akashat. Bisht";
$ceo_title = "CEO";
$read_more_link = "about.php";
?>


<?php
// --- RESEARCH SECTION CONFIGURATION ---

// 1. Section Header Info
$res_badge = "Our Capabilities";
$res_title_start = "Specialized";
$res_title_red   = "Robotics";
$res_title_end   = "& Research Services";
$res_desc = "Each research field is supported by expert engineering teams and cutting-edge technologies, ensuring precision, innovation, and industrial relevance.";

// 2. Services Cards Data (Array of Services)
// Note: SVG paths are stored here to keep HTML clean. Links converted to .php
$research_services = [
    [
        'title' => 'Industrial Automation',
        'desc'  => 'Developing autonomous arms and conveyor systems for high-precision manufacturing.',
        'link'  => 'IndustrialAutomation.php',
        'icon'  => 'M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z'
    ],
    [
        'title' => 'AI & Perception',
        'desc'  => 'Advanced computer vision and neural networks for real-time environmental analysis.',
        'link'  => 'ai&perception.php',
        'icon'  => 'M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z'
    ],
    [
        'title' => 'Aerial Robotics',
        'desc'  => 'Next-gen drone swarms and autonomous aerial vehicles for surveillance and logistics.',
        'link'  => 'aerial.php',
        'icon'  => 'M12 19l9 2-9-18-9 18 9-2zm0 0v-8'
    ],
    [
        'title' => 'Humanoid R&D',
        'desc'  => 'Creating adaptive robots capable of safe and efficient collaboration with humans.',
        'link'  => 'HumanoidR&D.php',
        'icon'  => 'M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z'
    ],
    [
        'title' => 'Micro-Robotics',
        'desc'  => 'Medical nanobots and precision instruments for microscopic interventions.',
        'link'  => 'Micro-Robotics.php',
        'icon'  => 'M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7'
    ],
    [
        'title' => 'Sensor Systems',
        'desc'  => 'High-fidelity LIDAR and sensor arrays for mapping and navigation.',
        'link'  => 'sensors.php',
        'icon'  => 'M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z'
    ]
];

// 3. CTA Card Configuration (The big card at the end)
$cta_title = "Ready to Discover the Science of Robotics?";
$cta_desc  = "Explore cutting-edge research and advanced prototypes designed to uncover the root of industrial challenges.";
$cta_btn   = "View All Services";
$cta_link  = "research.php";
?>


<?php
// --- WHY CHOOSE US CONFIGURATION ---

// 1. Header Info
$wcu_badge       = "Why Choose Us";
$wcu_title_line1 = "Reliable Robotics Solutions";
$wcu_title_line2 = "You Can";
$wcu_highlight   = "Trust";

// 2. Center Image
$wcu_image_url   = "https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=800&auto=format&fit=crop";

// 3. LEFT SIDE FEATURES (White Background, Dark Text)
$left_features = [
    [
        'title' => 'Accurate Precision',
        'desc'  => 'Delivering 99.9% precise calibration results for confident decision-making.',
        'icon'  => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z', // Checkmark Circle
        'bg_class' => 'bg-buimbRed-600', // Icon Background
        'text_class' => 'text-white'     // Icon Color
    ],
    [
        'title' => 'Expert Engineers',
        'desc'  => 'A certified team dedicated to solving complex automation challenges.',
        'icon'  => 'M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z',
        'bg_class' => 'bg-buimbRed-50',
        'text_class' => 'text-buimbRed-600'
    ],
    [
        'title' => 'Advanced Tech',
        'desc'  => 'Utilizing next-gen neural networks and sensor arrays.',
        'icon'  => 'M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z',
        'bg_class' => 'bg-buimbRed-50',
        'text_class' => 'text-buimbRed-600'
    ]
];

// 4. RIGHT SIDE FEATURES (Red Background, White Text)
$right_features = [
    [
        'title' => 'Fast Turnaround',
        'desc'  => 'Rapid prototyping and testing to accelerate your project timeline.',
        'icon'  => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z', // Clock
        'icon_bg' => 'bg-white/20',
        'icon_color' => 'text-white'
    ],
    [
        'title' => 'Reliable Analysis',
        'desc'  => 'Data-driven insights ensuring robust and scalable robotic systems.',
        'icon'  => 'M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z',
        'icon_bg' => 'bg-white',
        'icon_color' => 'text-buimbRed-600'
    ],
    [
        'title' => 'Trusted by Leaders',
        'desc'  => 'Partnered with top industrial firms for reliable automation.',
        'icon'  => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z',
        'icon_bg' => 'bg-white/20',
        'icon_color' => 'text-white'
    ]
];
?>
<!--Our Process -->
<?php
// --- PROCESS SECTION CONFIGURATION ---

// 1. Left Side Content
$proc_badge     = "Our Process";
$proc_title     = "How our research process";
$proc_highlight = "works smoothly"; // Gradient Text
$proc_desc      = "Our streamlined R&D workflow ensures accuracy, efficiency, and reliability at every stage — from initial concept and prototyping to final deployment backed by advanced simulations.";
$proc_btn_text  = "Get In Touch";
$proc_btn_link  = "contact.php";

// 2. Process Steps Data (Right Side)
$process_steps = [
    [
        'step'  => '1',
        'title' => 'Concept & Research',
        'desc'  => 'We begin with deep dive analysis, feasibility studies, and gathering requirements for the robotic system.',
        'icon'  => 'M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z'
    ],
    [
        'step'  => '2',
        'title' => 'Development & Prototyping',
        'desc'  => 'Our engineers build functional prototypes using CAD modeling, 3D printing, and initial code implementation.',
        'icon'  => 'M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4' // Code Brackets Icon
    ],
    [
        'step'  => '3',
        'title' => 'Testing & Deployment',
        'desc'  => 'Rigorous stress testing in simulated environments before final deployment and client handover.',
        'icon'  => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z' // Checkmark Badge Icon
    ]
    
];
?>


<?php
// --- CASE STUDIES SECTION CONFIGURATION ---

// 1. Header Info
$cs_badge           = "Our Case Studies";
$cs_heading         = "Innovative solutions backed <br> by <span class='text-buimbRed-600'>scientific rigor</span>";
$cs_view_all_text   = "Explore All Studies";
$cs_view_all_link   = "innovation.php"; // Link for the top button

// 2. Case Studies Data (Add as many as you want here)
$case_studies = [
    [
        'category' => 'Genomics',
        'title'    => 'Genomic Research Unlocks Drought-Resistant Crop Varieties',
        'image'    => 'https://images.unsplash.com/photo-1576086213369-97a306d36557?q=80&w=800&auto=format&fit=crop',
        'link'     => 'genomics.php'
    ],
    [
        'category' => 'Environment',
        'title'    => 'Detecting Water Contaminants Using Advanced Spectroscopy',
        'image'    => 'https://images.unsplash.com/photo-1532187863486-abf9dbad1b69?q=80&w=800&auto=format&fit=crop',
        'link'     => 'environment.php'
    ],
    [
        'category' => 'Healthcare',
        'title'    => 'Accelerating Vaccine Development with Rapid Antigen Testing',
        'image'    => 'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?q=80&w=800&auto=format&fit=crop',
        'link'     => 'healthcare.php'
    ],
    [
        'category' => 'Automation',
        'title'    => 'Optimizing Assembly Lines with AI-Driven Robotic Arms',
        'image'    => 'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?q=80&w=800&auto=format&fit=crop',
        'link'     => 'automation.php'
    ],
    [
        'category' => 'Nanotech',
        'title'    => 'Precision Micro-Surgery Using Magnetic Nanobots',
        'image'    => 'https://images.unsplash.com/photo-1516216628859-9bccecab13ca?q=80&w=800&auto=format&fit=crop',
        'link'     => 'nanotech.php'
    ],
    [
        'category' => 'Agritech',
        'title'    => 'Autonomous Drone Swarms for Large-Scale Crop Monitoring',
        'image'    => 'https://images.unsplash.com/photo-1530836369250-ef72a3f5cda8?q=80&w=800&auto=format&fit=crop',
        'link'     => 'agritech.php'
    ]
];

// 3. Last CTA Card (The "Ready to Discover?" card)
$cs_cta_title = "Ready to Discover?";
$cs_cta_desc  = "Explore cutting-edge research and advanced prototypes designed to uncover the root of industrial challenges.";
$cs_cta_btn   = "View All Services";
$cs_cta_link  = "innovation.php";
?>

<?php
// --- CTA SECTION CONFIGURATION ---

// 1. Text Content
$cta_badge       = "Join the Revolution";
$cta_heading_1   = "Ready to Build the";
$cta_heading_red = "Future of Robotics?"; // Gradient Text
$cta_desc        = "Whether you need a custom automation solution or want to partner on groundbreaking research, our team is ready to deploy.";

// 2. Buttons
$cta_primary_btn = "Contact Us Now";
$cta_primary_link = "contact.php";
$cta_secondary_btn = "Book a Consultation";
$cta_secondary_link = "contact.php"; // Adjust if needed

// 3. Images
$cta_bg_image    = "https://images.unsplash.com/photo-1556761175-5973dc0f32e7?q=80&w=1000&auto=format&fit=crop";
$cta_circle_img  = "https://images.unsplash.com/photo-1556761175-5973dc0f32e7?q=80&w=1000&auto=format&fit=crop";

// 4. Checklist Items (Array)
$cta_features = [
    "24/7 Lab Support",
    "Tailored Solutions",
    "Global Team"
];
?>


<?php
// --- FAQ CONFIGURATION ---

// 1. FAQ Data Array (Add as many questions as you want)
$faq_items = [
    [
        'q' => 'What industries does BUIMB Robotics serve?',
        'a' => 'We specialize in industrial automation, healthcare robotics, agricultural monitoring (Agritech), and environmental sensing. Our solutions are tailored to high-precision sectors requiring custom R&D.'
    ],
    [
        'q' => 'Do you offer custom prototyping services?',
        'a' => 'Yes, rapid prototyping is core to our process. We utilize 3D printing, CNC machining, and custom PCB design to bring concepts to life within weeks, not months.'
    ],
    [
        'q' => 'Are your research findings publicly available?',
        'a' => 'We publish select white papers and case studies on our website. However, client-specific IP and proprietary industrial solutions remain strictly confidential under NDA.'
    ],
    // --- Items below this will be hidden initially ---
    [
        'q' => 'How can we partner for a joint venture?',
        'a' => 'We welcome academic and industrial partnerships. Please reach out via our contact form or email our partnership team directly to discuss collaboration opportunities.'
    ],
    [
        'q' => 'What is the typical timeline for a robotics project?',
        'a' => 'Timelines vary by complexity. A proof of concept might take 4-8 weeks, while a full industrial deployment can take 6-12 months.'
    ]
];

// 2. Images & Links
$faq_engineer_img = "https://images.unsplash.com/photo-1581092580497-e0d23cbdf1dc?q=80&w=600&auto=format&fit=crop";
$faq_lab_img      = "assets/smarte-roboter-im-labor-fuer-automatisiertes-roboterhandling-item-blog-artikelbild.jpg"; // Check local path
$contact_link     = "contact.php";
?>

<?php
// --- BLOG SECTION CONFIGURATION ---

// 1. Header Info
$blog_badge = "Our Blog";
$blog_heading = "Stay updated with the latest in <br> <span class='text-buimbRed-600'>robotics research & innovation</span>";
$blog_btn_text = "View All Blogs";

// 2. Blog Data Array
$blog_posts = [
    [
        'title' => 'Inside a Robotics Research Lab: Building Intelligent Machines',
        'date'  => 'Sep 12, 2025',
        'image' => 'assets/roboticslab.jpg', // Ensure correct path
        'link'  => 'robolab.php'
    ],
    [
        'title' => 'Artificial Intelligence in Autonomous Robotic Systems',
        'date'  => 'Oct 05, 2025',
        'image' => 'https://images.unsplash.com/photo-1581092160562-40aa08e78837?q=80&w=800&auto=format&fit=crop',
        'link'  => '#'
    ],
    [
        'title' => 'Industrial Robotics and the Future of Smart Factories',
        'date'  => 'Nov 20, 2025',
        'image' => 'assets/industrial.jpg', // Ensure correct path
        'link'  => '#'
    ],
    // --- Hidden Blogs (Initially) ---
    [
        'title' => 'Autonomous Navigation: How Robots Understand the World',
        'date'  => 'Dec 01, 2025',
        'image' => 'assets/autonomus.jpg', // Ensure correct path
        'link'  => '#'
    ],
    [
        'title' => 'Medical Robotics: Precision Technology in Healthcare',
        'date'  => 'Dec 15, 2025',
        'image' => 'https://images.unsplash.com/photo-1580983218765-f663bec07b37?q=80&w=800&auto=format&fit=crop',
        'link'  => '#'
    ],
    [
        'title' => 'Emerging Trends in Robotics and Industrial Automation',
        'date'  => 'Jan 10, 2026',
        'image' => 'https://images.unsplash.com/photo-1518152006812-edab29b069ac?q=80&w=800&auto=format&fit=crop',
        'link'  => '#'
    ]
];
?>


<!-- --- HERO SECTION --- -->

<main class="relative w-full lg:min-h-screen flex items-center overflow-hidden bg-gray-50">
    
    <div class="absolute inset-0 z-0 lg:hidden">
        <img src="<?php echo $hero_image; ?>" class="w-full h-full object-cover opacity-100" alt="Mobile Background">
        <div class="absolute inset-0 bg-white/90 backdrop-blur-[2px]"></div>
    </div>

    <div class="hidden lg:block absolute inset-0 z-0">
         <img src="<?php echo $hero_image; ?>" alt="Robotics Lab Desktop" class="w-full h-full object-cover animate-slow-zoom" />
         <div class="absolute inset-0 bg-gradient-to-r from-white via-white/95 to-transparent"></div>
    </div>

    <div class="container mx-auto px-6 py-16 md:py-32 relative z-10">
        <div class="max-w-3xl space-y-8">
            
            <div class="labrix-reveal slide-down inline-flex items-center px-3 py-1 rounded-full bg-red-50 border border-red-100">
                <span class="w-2 h-2 bg-buimbRed-600 rounded-full mr-2 animate-pulse"></span>
                <span class="text-xs font-bold text-buimbRed-600 tracking-wider uppercase">
                    <?php echo $hero_badge; ?>
                </span>
            </div>

            <h1 class="text-5xl md:text-6xl font-extrabold leading-tight text-buimbDark">
                <?php echo $heading_start; ?> 
                <span class="text-buimbRed-600"><?php echo $heading_highlight; ?></span> 
                <?php echo $heading_end; ?>
            </h1>

            <p class="text-lg text-gray-600 md:pr-12 leading-relaxed">
                <?php echo $hero_description; ?>
            </p>

            <div class="labrix-reveal slide-up delay-300 pt-2 flex flex-wrap gap-4">
                <a href="<?php echo $btn_primary_link; ?>" class="inline-flex items-center bg-buimbRed-600 text-white px-8 py-4 rounded-full font-bold text-base transition-all duration-300 ease-in-out hover:bg-buimbRed-700 hover:shadow-[0_10px_30px_-5px_rgba(227,27,35,0.4)] hover:-translate-y-1 active:scale-95 group">
                    <?php echo $btn_primary_text; ?>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 transform transition-transform duration-300 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                </a>
                
                <a href="<?php echo $btn_secondary_link; ?>" class="inline-flex items-center px-8 py-4 rounded-full font-bold text-buimbDark border border-gray-200 bg-white/50 backdrop-blur-sm hover:border-buimbRed-600 hover:text-buimbRed-600 transition-all duration-300">
                    <?php echo $btn_secondary_text; ?>
                </a>
            </div>
            
            <div class="labrix-reveal slide-up delay-400 grid grid-cols-3 gap-6 pt-10 border-t border-gray-200/60 w-full max-w-xl">
                
                <div class="group">
                    <div class="text-buimbRed-600 mb-2 group-hover:scale-110 transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" /></svg>
                    </div>
                    <span class="text-sm font-bold text-buimbDark block"><?php echo $features[0]['label']; ?></span>
                </div>

                <div class="group">
                    <div class="text-buimbRed-600 mb-2 group-hover:scale-110 transition-transform duration-300">
                       <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" /></svg>
                    </div>
                    <span class="text-sm font-bold text-buimbDark block"><?php echo $features[1]['label']; ?></span>
                </div>

                <div class="group">
                    <div class="text-buimbRed-600 mb-2 group-hover:scale-110 transition-transform duration-300">
                       <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" /></svg>
                    </div>
                    <span class="text-sm font-bold text-buimbDark block"><?php echo $features[2]['label']; ?></span>
                </div>
            </div>
            
        </div>
    </div>
</main>


<!--About Section-->

<section class="py-20 md:py-32 relative overflow-hidden bg-[rgb(193,193,193)]/10"> 
    
    <div class="absolute -left-20 top-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-red-50/50 rounded-full blur-3xl -z-10 pointer-events-none"></div>

    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

            <div class="relative group">
                <div class="relative rounded-[2.5rem] overflow-hidden shadow-2xl border-[6px] border-white">
                    <img src="<?php echo $about_main_image; ?>" 
                         alt="BUIMB Robotics Laboratory" 
                         class="w-full h-[500px] lg:h-[650px] object-cover transform transition-transform duration-[2000ms] group-hover:scale-105">
                    <div class="absolute inset-0 bg-white/20 backdrop-blur-[2px] opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none"></div>
                </div>
                
                <div class="absolute -bottom-8 -right-4 md:-right-8 bg-buimbRed-600 text-white p-8 rounded-[2rem] shadow-[0_30px_60px_-15px_rgba(227,27,35,0.4)] z-10 max-w-[220px] border-4 border-white">
                    <div class="flex items-center justify-between mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white/90" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                        <div class="text-4xl font-extrabold tracking-tighter flex">
                            <span class="count-up" data-target="<?php echo $years_experience; ?>">0</span>+
                        </div>
                    </div>
                    <p class="text-sm font-bold leading-tight text-white/95 uppercase tracking-wide">Years of Excellence</p>
                </div>
            </div>

            <div class="space-y-10 mt-10 lg:mt-0 pl-0 lg:pl-10">
                
                <div class="inline-flex items-center px-4 py-1.5 rounded-full bg-red-50 text-buimbRed-600 font-bold text-xs tracking-widest uppercase">
                    <span class="w-2 h-2 rounded-full bg-buimbRed-600 mr-2 animate-pulse"></span>
                    <?php echo $about_badge; ?>
                </div>

                <h2 class="text-4xl md:text-5xl font-bold text-buimbDark leading-[1.15]">
                    <?php echo $about_heading_1; ?> 
                    <span class="relative inline-block">
                        <span class="relative z-10 text-buimbRed-600"><?php echo $about_highlight; ?></span>
                        <span class="absolute bottom-2 left-0 w-full h-3 bg-red-100 -z-0 opacity-60"></span>
                    </span> <br> 
                    <?php echo $about_heading_2; ?>
                </h2>

                <div class="space-y-4">
                    <p class="text-lg text-buimbGray leading-relaxed">
                        <?php echo $about_desc_1; ?>
                    </p>
                    <p class="text-lg text-buimbGray leading-relaxed font-medium">
                        <?php echo $about_desc_2; ?>
                    </p>
                </div>

                <div class="grid grid-cols-3 gap-4 py-6 border-t border-b border-gray-200/50">
                    <div>
                        <h4 class="text-3xl md:text-4xl font-extrabold text-buimbRed-600 flex">
                            <span class="count-up" data-target="<?php echo $stat_projects; ?>">0</span>+
                        </h4>
                        <p class="text-sm font-bold text-buimbDark uppercase tracking-wider mt-1">Projects</p>
                    </div>
                    <div>
                        <h4 class="text-3xl md:text-4xl font-extrabold text-buimbRed-600 flex">
                            <span class="count-up" data-target="<?php echo $stat_patents; ?>">0</span>+
                        </h4>
                        <p class="text-sm font-bold text-buimbDark uppercase tracking-wider mt-1">Patents</p>
                    </div>
                    <div>
                        <h4 class="text-3xl md:text-4xl font-extrabold text-buimbRed-600 flex">
                            <span class="count-up" data-target="<?php echo $stat_retention; ?>">0</span>%
                        </h4>
                        <p class="text-sm font-bold text-buimbDark uppercase tracking-wider mt-1">Retention</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                    <div class="flex gap-4 group">
                        <div class="w-12 h-12 rounded-xl bg-white border border-gray-200 shadow-lg flex items-center justify-center text-gray-400 group-hover:text-white group-hover:bg-buimbRed-600 transition-all duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-buimbDark text-lg">Precision Eng.</h4>
                            <p class="text-sm text-buimbGray mt-1">99.9% Accuracy in tasks</p>
                        </div>
                    </div>
                    <div class="flex gap-4 group">
                        <div class="w-12 h-12 rounded-xl bg-white border border-gray-200 shadow-lg flex items-center justify-center text-gray-400 group-hover:text-white group-hover:bg-buimbRed-600 transition-all duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" /></svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-buimbDark text-lg">Neural Networks</h4>
                            <p class="text-sm text-buimbGray mt-1">Self-learning algorithms</p>
                        </div>
                    </div>
                </div>

                <div class="pt-6 border-t border-gray-200 flex flex-col sm:flex-row gap-6 items-center sm:justify-between">
                    <div class="flex items-center gap-4">
                        <div class="p-1 border-2 border-dashed border-red-200 rounded-full">
                            <img src="<?php echo $ceo_image; ?>" class="w-12 h-12 rounded-full object-cover">
                        </div>
                        <div>
                            <h5 class="font-bold text-buimbDark"><?php echo $ceo_name; ?></h5>
                            <p class="text-xs text-buimbRed-600 font-bold uppercase"><?php echo $ceo_title; ?></p>
                        </div>
                    </div>
                    <a href="<?php echo $read_more_link; ?>" class="group flex items-center gap-2 text-buimbDark font-bold hover:text-buimbRed-600 transition-colors">
                        More About Us
                        <span class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center group-hover:bg-buimbRed-600 group-hover:text-white transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                        </span>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- --- RESEARCH SERVICES SECTION --- -->

<section class="py-20 md:py-28 relative bg-[#b7b9bb]">
    
    <div class="container mx-auto px-6">

        <div class="flex flex-col lg:flex-row justify-between items-end gap-8 mb-16">
            <div class="max-w-2xl">
                <div class="labrix-reveal slide-down inline-flex items-center px-4 py-1.5 rounded-full bg-white border border-gray-200 shadow-sm text-buimbRed-600 font-bold text-xs tracking-widest uppercase mb-4">
                    <span class="w-2 h-2 rounded-full bg-buimbRed-600 mr-2 animate-pulse"></span>
                    <?php echo $res_badge; ?>
                </div>
                
                <h2 class="labrix-reveal slide-down delay-100 text-4xl md:text-5xl font-bold text-buimbDark leading-tight">
                    <?php echo $res_title_start; ?> <span class="text-buimbRed-600"><?php echo $res_title_red; ?></span> & <br> <?php echo $res_title_end; ?>
                </h2>
            </div>

            <div class="max-w-md">
                <p class="labrix-reveal slide-up delay-200 text-buimbGray leading-relaxed font-medium">
                    <?php echo $res_desc; ?>
                </p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

            <?php 
            // Loop through the services array to generate cards dynamically
            $delay_counter = 100; // Start delay
            foreach ($research_services as $service): 
            ?>
                <div class="labrix-reveal slide-up delay-<?php echo $delay_counter; ?> group bg-white p-8 rounded-2xl border border-gray-100 shadow-sm hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-buimbRed-600 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>
                    
                    <div class="w-14 h-14 bg-red-50 text-buimbRed-600 rounded-xl flex items-center justify-center mb-6 group-hover:bg-buimbRed-600 group-hover:text-white transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?php echo $service['icon']; ?>" />
                        </svg>
                    </div>

                    <h3 class="text-xl font-bold text-buimbDark mb-3 group-hover:text-buimbRed-600 transition-colors">
                        <?php echo $service['title']; ?>
                    </h3>
                    <p class="text-sm text-buimbGray leading-relaxed mb-6">
                        <?php echo $service['desc']; ?>
                    </p>

                    <a href="<?php echo $service['link']; ?>" class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gray-50 text-buimbDark group-hover:bg-buimbRed-600 group-hover:text-white transition-all duration-300 group-hover:rotate-45">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M12 5l7 7-7 7" /></svg>
                    </a>
                </div>
            <?php 
                // Increment delay for staggered animation effect
                $delay_counter = ($delay_counter >= 400) ? 100 : $delay_counter + 100;
            endforeach; 
            ?>

            <div class="labrix-reveal slide-up delay-300 col-span-1 lg:col-span-2 group bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-2xl transition-all duration-300 relative overflow-hidden flex flex-col items-center justify-center text-center p-10">
                
                <div class="absolute inset-0 bg-gradient-to-br from-white to-red-50 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                
                <div class="relative z-10">
                    <div class="w-16 h-16 bg-buimbRed-600 text-white rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg shadow-red-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                    </div>

                    <h3 class="text-2xl font-bold text-buimbDark mb-3"><?php echo $cta_title; ?></h3>
                    <p class="text-buimbGray leading-relaxed mb-8 max-w-md mx-auto">
                        <?php echo $cta_desc; ?>
                    </p>

                    <a href="<?php echo $cta_link; ?>" class="inline-flex items-center px-8 py-3.5 rounded-full bg-buimbRed-600 text-white font-bold transition-all duration-300 hover:bg-buimbDark hover:shadow-lg hover:-translate-y-1">
                        <?php echo $cta_btn; ?>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- --- WHY CHOOSE US SECTION --- -->

<section class="py-20 md:py-28 bg-white relative overflow-hidden">
    <div class="container mx-auto px-6">
        
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
            <div class="labrix-reveal slide-down inline-flex items-center px-4 py-1.5 rounded-full bg-gray-50 border border-gray-200 shadow-sm text-buimbRed-600 font-bold text-xs tracking-widest uppercase">
                <span class="w-2 h-2 rounded-full bg-buimbRed-600 mr-2 animate-pulse"></span>
                <?php echo $wcu_badge; ?>
            </div>
            <h2 class="labrix-reveal slide-up delay-100 text-4xl md:text-5xl font-bold text-buimbDark leading-tight">
                <?php echo $wcu_title_line1; ?> <br> <?php echo $wcu_title_line2; ?> <span class="text-buimbRed-600"><?php echo $wcu_highlight; ?></span>
            </h2>
        </div>

        <div class="labrix-reveal slide-up delay-200 relative rounded-[3rem] shadow-2xl overflow-hidden bg-white border border-gray-100">
            
            <div class="absolute inset-0 hidden lg:flex">
                <div class="w-1/2 bg-white"></div> <div class="w-1/2 bg-buimbRed-600"></div> 
            </div>

            <div class="relative z-10 grid grid-cols-1 lg:grid-cols-3">

                <div class="p-8 md:p-12 lg:pr-0 bg-white lg:bg-transparent space-y-10 flex flex-col justify-center">
                    <?php foreach ($left_features as $feature): ?>
                        <div class="flex items-start gap-5 group">
                            <div class="w-14 h-14 rounded-2xl <?php echo $feature['bg_class']; ?> <?php echo $feature['text_class']; ?> flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300 flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?php echo $feature['icon']; ?>" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-buimbDark group-hover:text-buimbRed-600 transition-colors">
                                    <?php echo $feature['title']; ?>
                                </h4>
                                <p class="text-sm text-buimbGray mt-2 leading-relaxed">
                                    <?php echo $feature['desc']; ?>
                                </p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="hidden lg:flex items-end justify-center relative h-full min-h-[500px]">
                    <img src="<?php echo $wcu_image_url; ?>" 
                         alt="Lead Engineer" 
                         class="absolute bottom-0 h-[110%] w-auto object-cover max-w-none transform transition-transform duration-500 hover:scale-105"
                         style="mask-image: linear-gradient(to top, black 80%, transparent 100%); -webkit-mask-image: linear-gradient(to top, black 90%, transparent 100%);">
                </div>

                <div class="p-8 md:p-12 lg:pl-0 bg-buimbRed-600 lg:bg-transparent space-y-10 flex flex-col justify-center lg:items-end lg:text-right">
                    <?php foreach ($right_features as $feature): ?>
                        <div class="flex items-start gap-5 lg:flex-row-reverse group">
                            <div class="w-14 h-14 rounded-2xl <?php echo $feature['icon_bg']; ?> <?php echo $feature['icon_color']; ?> flex items-center justify-center backdrop-blur-sm group-hover:bg-white group-hover:text-buimbRed-600 transition-all duration-300 flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?php echo $feature['icon']; ?>" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-white">
                                    <?php echo $feature['title']; ?>
                                </h4>
                                <p class="text-sm text-red-100 mt-2 leading-relaxed">
                                    <?php echo $feature['desc']; ?>
                                </p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </div>
    </div>
</section>

  <!--Our Process -->


<section class="py-20 md:py-28 bg-buimbDark relative overflow-hidden">
    
    <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-buimbRed-600/5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/3 pointer-events-none"></div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-center">

            <div class="space-y-8">
                <div class="labrix-reveal slide-down inline-flex items-center px-4 py-1.5 rounded-full border border-gray-700 bg-gray-800/50 text-white font-bold text-xs tracking-widest uppercase">
                    <span class="w-2 h-2 rounded-full bg-buimbRed-600 mr-3 animate-pulse"></span>
                    <?php echo $proc_badge; ?>
                </div>

                <h2 class="labrix-reveal slide-down delay-100 text-4xl md:text-5xl font-extrabold text-white leading-tight">
                    <?php echo $proc_title; ?> <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-buimbRed-600 to-red-400">
                        <?php echo $proc_highlight; ?>
                    </span>
                </h2>
                

                <p class="labrix-reveal slide-up delay-200 text-lg text-gray-400 leading-relaxed max-w-lg">
                    <?php echo $proc_desc; ?>
                </p>

                <div class="labrix-reveal slide-up delay-300 pt-4">
                    <a href="<?php echo $proc_btn_link; ?>" class="inline-flex items-center bg-buimbRed-600 text-white px-8 py-4 rounded-full font-bold text-sm transition-all duration-300 hover:bg-white hover:text-buimbRed-600 hover:shadow-[0_0_20px_rgba(227,27,35,0.4)] group">
                        <?php echo $proc_btn_text; ?>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>
            </div>

            <div class="relative space-y-10 pl-4 md:pl-0">
                
                <div class="absolute left-[3.25rem] md:left-[3.25rem] top-8 bottom-12 w-0.5 bg-gray-800 labrix-reveal delay-500"></div>

                <?php 
                $delay = 200; // Animation delay counter
                foreach ($process_steps as $step): 
                ?>
                    <div class="labrix-reveal slide-left delay-<?php echo $delay; ?> relative flex gap-8 group">
                        
                        <div class="relative flex-shrink-0">
                            <div class="w-20 h-20 bg-buimbRed-600 rounded-2xl flex items-center justify-center shadow-lg shadow-red-900/20 group-hover:scale-110 transition-transform duration-300 relative z-10">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-9 w-9 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="<?php echo $step['icon']; ?>" />
                                </svg>
                            </div>
                            <div class="absolute -top-3 -right-3 w-8 h-8 bg-white text-buimbDark rounded-full flex items-center justify-center font-bold text-sm shadow-md border-2 border-buimbDark z-20">
                                <?php echo $step['step']; ?>
                            </div>
                        </div>

                        <div class="pt-2">
                            <h3 class="text-xl font-bold text-white mb-2 group-hover:text-buimbRed-600 transition-colors">
                                <?php echo $step['title']; ?>
                            </h3>
                            <p class="text-gray-400 text-sm leading-relaxed">
                                <?php echo $step['desc']; ?>
                            </p>
                        </div>
                    </div>
                <?php 
                    $delay += 100; // Increase delay for the next item
                endforeach; 
                ?>

            </div>

        </div>
    </div>
</section>
<!--case studies-->
<section class="py-20 md:py-28 bg-white relative overflow-hidden">
    <div class="container mx-auto px-6">
        
        <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6">
            <div class="max-w-2xl">
                <div class="labrix-reveal slide-down inline-flex items-center px-4 py-1.5 rounded-full bg-gray-50 border border-gray-200 shadow-sm text-buimbRed-600 font-bold text-xs tracking-widest uppercase mb-4">
                    <span class="w-2 h-2 rounded-full bg-buimbRed-600 mr-2 animate-pulse"></span>
                    <?php echo $cs_badge; ?>
                </div>
                
                <h2 class="labrix-reveal slide-down delay-100 text-4xl md:text-5xl font-extrabold text-buimbDark leading-tight">
                    <?php echo $cs_heading; ?>
                </h2>
            </div>

            <div class="labrix-reveal slide-left delay-200 flex items-center gap-4">
                <a href="#" id="explore-studies-btn" class="inline-flex items-center bg-buimbRed-600 text-white px-6 py-3 rounded-full font-bold text-sm transition-all duration-300 hover:bg-buimbDark hover:shadow-lg hover:-translate-y-1 group">
                    <span id="explore-btn-text"><?php echo $cs_view_all_text; ?></span>
                    <svg id="explore-btn-icon" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
            </div>
        </div>

        <div id="studies-container" class="labrix-reveal slide-up delay-300 flex overflow-x-auto gap-6 pb-10 snap-x snap-mandatory scrollbar-hide transition-all duration-500" style="scrollbar-width: none; -ms-overflow-style: none;">
            
            <?php foreach ($case_studies as $study): ?>
                <a href="<?php echo $study['link']; ?>" class="study-card min-w-[85vw] md:min-w-[400px] snap-center group block transition-all duration-500">
                    <div class="relative overflow-hidden rounded-2xl mb-5 shadow-lg border border-gray-100">
                        <img src="<?php echo $study['image']; ?>" 
                             alt="<?php echo $study['category']; ?>" 
                             class="w-full h-64 object-cover transform transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-buimbDark/10 group-hover:bg-buimbDark/0 transition-colors duration-300"></div>
                        <div class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm text-buimbRed-600 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wide shadow-sm">
                            <?php echo $study['category']; ?>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-buimbDark leading-snug group-hover:text-buimbRed-600 transition-colors duration-300">
                        <?php echo $study['title']; ?>
                    </h3>
                </a>
            <?php endforeach; ?>

            <div class="study-card min-w-[85vw] md:min-w-[400px] snap-center group bg-gray-50 rounded-2xl border border-gray-200 shadow-sm hover:shadow-2xl transition-all duration-300 relative overflow-hidden flex flex-col items-center justify-center text-center p-8">
                <div class="absolute inset-0 bg-gradient-to-br from-white to-red-100 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="relative z-10">
                    <div class="w-16 h-16 bg-buimbRed-600 text-white rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg shadow-red-200 group-hover:scale-110 transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" /></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-buimbDark mb-3"><?php echo $cs_cta_title; ?></h3>
                    <p class="text-buimbGray text-sm leading-relaxed mb-8 max-w-xs mx-auto">
                        <?php echo $cs_cta_desc; ?>
                    </p>
                    <a href="<?php echo $cs_cta_link; ?>" class="inline-flex items-center px-8 py-3.5 rounded-full bg-buimbRed-600 text-white font-bold transition-all duration-300 hover:bg-buimbDark hover:shadow-lg hover:-translate-y-1 shadow-md shadow-red-600/30">
                        <?php echo $cs_cta_btn; ?>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!--Call to action section-->

<section class="py-20 relative overflow-hidden bg-buimbDark">
    
    <div class="absolute inset-0 z-0 lg:hidden">
        <img src="<?php echo $cta_bg_image; ?>" 
             alt="Team Background" 
             class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-buimbDark/90"></div>
    </div>

    <div class="hidden lg:block">
        <div class="absolute inset-0 opacity-10 pointer-events-none" 
             style="background-image: radial-gradient(#E31B23 1px, transparent 1px); background-size: 30px 30px;">
        </div>
        <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-buimbRed-600/10 rounded-full blur-[100px] -translate-y-1/2 translate-x-1/2 pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-buimbRed-600/5 rounded-full blur-[80px] translate-y-1/2 -translate-x-1/3 pointer-events-none"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

            <div class="space-y-8 text-center lg:text-left">
                
                <div class="labrix-reveal slide-down inline-flex items-center px-4 py-1.5 rounded-full border border-gray-700 bg-gray-800/50 text-white font-bold text-xs tracking-widest uppercase">
                    <span class="w-2 h-2 rounded-full bg-buimbRed-600 mr-2 animate-pulse"></span>
                    <?php echo $cta_badge; ?>
                </div>

                <h2 class="labrix-reveal slide-up delay-100 text-4xl md:text-6xl font-extrabold text-white leading-tight">
                    <?php echo $cta_heading_1; ?> <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-buimbRed-600 to-red-400">
                        <?php echo $cta_heading_red; ?>
                    </span>
                </h2>

                <p class="labrix-reveal slide-up delay-200 text-lg text-gray-300 lg:text-gray-400 leading-relaxed max-w-xl mx-auto lg:mx-0">
                    <?php echo $cta_desc; ?>
                </p>

                <div class="labrix-reveal slide-up delay-300 flex flex-wrap justify-center lg:justify-start gap-4 md:gap-8 text-sm font-medium text-gray-200 lg:text-gray-300">
                    <?php foreach ($cta_features as $feature): ?>
                        <div class="flex items-center gap-2">
                            <span class="w-5 h-5 rounded-full bg-buimbRed-600 flex items-center justify-center text-white text-xs">✓</span>
                            <?php echo $feature; ?>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="labrix-reveal slide-up delay-400 flex flex-col sm:flex-row gap-4 justify-center lg:justify-start pt-4">
                    <a href="<?php echo $cta_primary_link; ?>" class="inline-flex items-center justify-center bg-buimbRed-600 text-white px-8 py-4 rounded-full font-bold text-base transition-all duration-300 hover:bg-white hover:text-buimbRed-600 hover:shadow-[0_0_25px_rgba(227,27,35,0.5)] hover:-translate-y-1">
                        <?php echo $cta_primary_btn; ?>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                    <a href="<?php echo $cta_secondary_link; ?>" class="inline-flex items-center justify-center px-8 py-4 rounded-full font-bold text-white border border-gray-700 hover:border-buimbRed-600 hover:text-buimbRed-600 transition-all duration-300 bg-buimbDark/50 lg:bg-transparent">
                        <?php echo $cta_secondary_btn; ?>
                    </a>
                </div>
            </div>

            <div class="labrix-reveal slide-left delay-300 relative lg:h-[500px] hidden lg:flex items-center justify-center">
                
                <div class="relative w-[350px] h-[350px] md:w-[450px] md:h-[450px] rounded-full overflow-hidden border-4 border-gray-800/50 shadow-2xl relative z-10 group">
                    <img src="<?php echo $cta_circle_img; ?>" 
                         alt="BUIMB Team" 
                         class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110 grayscale hover:grayscale-0">
                </div>
                
                <div class="absolute bottom-10 left-0 bg-white p-4 rounded-xl shadow-xl z-20 animate-float">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center text-green-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 font-bold uppercase">System Status</p>
                            <p class="text-buimbDark font-bold">100% Operational</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<!--Faq -->
<section class="py-20 md:py-28 bg-gray-50 relative overflow-hidden" id="faqs">
    
    <div class="absolute top-0 left-0 w-[500px] h-[500px] bg-red-100/40 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2 pointer-events-none"></div>

    <div class="container mx-auto px-6 relative z-10">
        
        <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
            <div class="max-w-2xl">
                <div class="labrix-reveal slide-down inline-flex items-center px-4 py-1.5 rounded-full bg-white border border-gray-200 shadow-sm text-buimbRed-600 font-bold text-xs tracking-widest uppercase mb-4">
                    <span class="w-2 h-2 rounded-full bg-buimbRed-600 mr-2 animate-pulse"></span>
                    Common Queries
                </div>
                <h2 class="labrix-reveal slide-down delay-100 text-4xl md:text-5xl font-extrabold text-buimbDark leading-tight">
                    Got questions? Find your <br> <span class="text-buimbRed-600">answers</span> right here.
                </h2>
            </div>
            
            <div class="labrix-reveal slide-left delay-200">
                <a href="javascript:void(0)" id="view-all-faqs-btn" class="inline-flex items-center justify-center px-6 py-3 rounded-full font-bold text-buimbDark border border-gray-200 bg-white hover:border-buimbRed-600 hover:text-buimbRed-600 transition-all duration-300 shadow-sm">
                    View All FAQs
                    <svg id="view-all-icon" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">

            <div class="lg:col-span-5 relative labrix-reveal slide-left delay-100">
                <div class="grid grid-cols-2 gap-4">
                    <div class="relative rounded-3xl overflow-hidden shadow-xl border-4 border-white h-[400px] mt-8">
                        <img src="<?php echo $faq_engineer_img; ?>" alt="Engineer Working" class="w-full h-full object-cover">
                    </div>
                    <div class="relative rounded-3xl overflow-hidden shadow-xl border-4 border-white h-[320px]">
                        <img src="<?php echo $faq_lab_img; ?>" 
                             onerror="this.src='https://via.placeholder.com/400'"
                             alt="Robotics Lab" 
                             class="w-full h-full object-cover">
                    </div>
                </div>
                <div class="absolute bottom-10 left-6 right-6 bg-buimbRed-600 text-white p-6 rounded-2xl shadow-2xl animate-float z-20">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" /></svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg leading-tight mb-1">Still have questions?</h4>
                            <p class="text-red-100 text-sm mb-3">Can't find the answer you're looking for? Please chat with our friendly team.</p>
                            <a href="<?php echo $contact_link; ?>" class="text-xs font-bold uppercase tracking-wider underline hover:text-red-200">Get in touch -></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-7 space-y-4" id="faq-list">
                
                <?php 
                $delay = 200;
                foreach ($faq_items as $index => $item): 
                    // 1. Open First Item Logic
                    $isOpen = ($index === 0);
                    
                    // 2. Hide items after index 2 (Shows only top 3)
                    $extraClass = ($index > 2) ? 'hidden faq-extra' : '';

                    // 3. Styling Logic
                    $activeClass = $isOpen ? 'border-buimbRed-600 ring-1 ring-red-100 active' : 'border-gray-200';
                    $iconClass   = $isOpen ? 'rotate-180 bg-red-50 text-buimbRed-600' : 'bg-gray-50 text-gray-400';
                    $contentStyle = $isOpen ? 'max-height: 200px; padding-bottom: 24px;' : 'max-height: 0px; padding-bottom: 0px;';
                ?>
                    <div class="labrix-reveal slide-up delay-<?php echo $delay; ?> group border bg-white rounded-2xl overflow-hidden transition-all duration-300 hover:border-red-200 hover:shadow-md faq-item <?php echo $activeClass . ' ' . $extraClass; ?>">
                        <button class="w-full flex justify-between items-center p-6 text-left focus:outline-none" onclick="toggleFaq(this)">
                            <span class="text-lg font-bold text-buimbDark group-hover:text-buimbRed-600 transition-colors">
                                <?php echo $item['q']; ?>
                            </span>
                            <span class="w-8 h-8 rounded-full flex items-center justify-center group-hover:bg-red-50 group-hover:text-buimbRed-600 transition-all icon-wrapper transform <?php echo $iconClass; ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                            </span>
                        </button>
                        <div class="faq-content px-6 text-buimbGray leading-relaxed overflow-hidden transition-all duration-500" style="<?php echo $contentStyle; ?>">
                            <?php echo $item['a']; ?>
                        </div>
                    </div>
                <?php 
                    $delay += 100;
                endforeach; 
                ?>

            </div>

        </div>
    </div>
</section>


<!--Blog Section-->
<section class="py-20 md:py-28 bg-white relative overflow-hidden" id="blog-section">
    <div class="container mx-auto px-6">
        
        <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6">
            <div class="max-w-2xl">
                <div class="labrix-reveal slide-down inline-flex items-center px-4 py-1.5 rounded-full bg-gray-50 border border-gray-200 shadow-sm text-buimbRed-600 font-bold text-xs tracking-widest uppercase mb-4">
                    <span class="w-2 h-2 rounded-full bg-buimbRed-600 mr-2 animate-pulse"></span>
                    <?php echo $blog_badge; ?>
                </div>
                <h2 class="labrix-reveal slide-down delay-100 text-4xl md:text-5xl font-extrabold text-buimbDark leading-tight">
                    <?php echo $blog_heading; ?>
                </h2>
            </div>

            <div class="labrix-reveal slide-left delay-200 hidden md:block">
                <button id="view-all-blogs-btn" class="inline-flex items-center bg-buimbRed-600 text-white px-6 py-3 rounded-full font-bold text-sm transition-all duration-300 hover:bg-buimbDark hover:shadow-lg hover:-translate-y-1 group">
                    <span id="blog-btn-text"><?php echo $blog_btn_text; ?></span>
                    <svg id="blog-btn-icon" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </button>
            </div>

            <div class="md:hidden text-buimbGray text-sm font-bold animate-pulse">
                Swipe to explore ->
            </div>
        </div>

        <div id="blog-container" class="labrix-reveal slide-up delay-300 flex overflow-x-auto pb-10 gap-6 snap-x snap-mandatory scrollbar-hide md:grid md:grid-cols-3 md:pb-0 md:overflow-visible" style="scrollbar-width: none;">

            <?php foreach ($blog_posts as $index => $post): 
                // Logic: Items after index 2 (4th item onwards) get the hidden classes
                $extraClass = ($index > 2) ? 'hidden-blog md:hidden' : '';
            ?>
                <div class="min-w-[85vw] snap-center md:min-w-0 group cursor-pointer <?php echo $extraClass; ?>">
                    <div class="relative overflow-hidden rounded-2xl mb-5 shadow-sm border border-gray-100">
                        <img src="<?php echo $post['image']; ?>"
                             onerror="this.src='https://via.placeholder.com/600x400?text=Blog+Image'"
                             alt="<?php echo $post['title']; ?>"
                             class="w-full h-64 object-cover transform transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm text-buimbDark px-3 py-1 rounded-full text-xs font-bold shadow-sm">
                            <?php echo $post['date']; ?>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-buimbDark leading-snug mb-3 group-hover:text-buimbRed-600 transition-colors">
                        <?php echo $post['title']; ?>
                    </h3>
                    <a href="<?php echo $post['link']; ?>" class="inline-flex items-center text-buimbRed-600 font-bold text-sm hover:underline">
                        Read More
                    </a>
                </div>
            <?php endforeach; ?>

        </div>

    </div>
</section>
<script src="main.js"></script>

<?php
include "footer.php";
?>



