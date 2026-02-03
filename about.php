<?php

$page_title = isset($page_title) ? $page_title . ' | BUIMB Robotics' : 'BUIMB Robotics |About Us -Innovation & Power';

include "header.php";

?>
<?php
// --- ABOUT INTRO CONFIGURATION --->
$intro_badge        = "Who We Are";
$intro_heading_main = "Redefining the Boundaries of";
$intro_heading_grad = "Autonomous Systems"; // This text gets the gradient color
$intro_desc         = "BUIMB Robotics Research is a premier laboratory dedicated to solving complex industrial challenges through advanced AI, mechanical engineering, and precision robotics.";
?>


<?php
// --- LEGACY SECTION CONFIGURATION ---
$legacy_badge       = "Our Legacy";
$legacy_heading     = "Building the <br class='hidden md:block'> Machines of <span class='text-buimbRed-600 relative inline-block'>Tomorrow.<span class='absolute bottom-2 left-0 w-full h-3 bg-red-100 -z-10 opacity-60 rounded-sm'></span></span>";
$legacy_desc_1      = "Founded with a vision to bridge the gap between theoretical research and practical application, BUIMB has grown into a global hub for robotic excellence.";
$legacy_desc_2      = "From our headquarters in Haldwani, our team collaborates with leaders in manufacturing, healthcare, and agriculture to deploy systems that are smarter, safer, and more efficient.";

// Stats & Images
$legacy_years       = "15"; // Years of Excellence Counter
$legacy_main_img    = "assets/Industrial_Robot_Arm.jpg"; // Main Image

// Feature List
$legacy_features = [
    [
        'title' => 'ISO Certified',
        'desc'  => 'Global Safety Standards',
        'icon'  => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z'
    ],
    [
        'title' => 'Expert Team',
        'desc'  => '50+ specialized researchers',
        'icon'  => 'M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z'
    ]
];
?>


<?php
// --- OUR APPROACH CONFIGURATION ---
$approach_badge     = "Our Approach";
$approach_heading   = "Scientific integrity at <br> every stage of <span class='text-buimbRed-600'>research</span>";
$approach_desc      = "We believe in a structured, transparent, and data-driven approach to solving complex robotics challenges.";
$approach_btn_text  = "Contact Us";
$approach_btn_link  = "contact.php";

// Strategy Cards Data
$strategy_cards = [
    [
        'title' => 'Our Mission',
        'desc'  => 'Our mission is to empower businesses with innovative IT solutions, enabling growth, efficiency, and success through technology.',
        'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />',
        'theme' => 'light' // light = white bg, dark = red bg
    ],
    [
        'title' => 'Our Vision',
        'desc'  => 'Our vision is to empower businesses with innovative IT solutions, enabling growth, efficiency, and success through technology.',
        'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />',
        'theme' => 'light'
    ],
    [
        'title' => 'Our Value',
        'desc'  => 'Our value is to empower businesses with innovative IT solutions, enabling growth, efficiency, and success through technology.',
        'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />',
        'theme' => 'dark' // This makes the card red
    ]
];
?>


<?php
// --- STATS SECTION CONFIGURATION ---
$stats_data = [
    [
        'label'  => 'Projects Done',
        'target' => '250',
        'suffix' => '+',
        'icon'   => 'M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10'
    ],
    [
        'label'  => 'Global Awards',
        'target' => '18',
        'suffix' => '+',
        'icon'   => 'M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z'
    ],
    [
        'label'  => 'Patents Filed',
        'target' => '50',
        'suffix' => '+',
        'icon'   => 'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z'
    ],
    [
        'label'  => 'Satisfaction',
        'target' => '100',
        'suffix' => '%',
        'icon'   => 'M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z'
    ]
];
?>

<?php
// --- LEADERSHIP SECTION CONFIGURATION ---
$team_heading = "Meet the Minds Behind the Machines";
$team_subheading = "Our Leadership";
$team_view_all_text = "View All Team";

// Team Members Data
$team_members = [
    [
        'name' => 'Dr. Akashat. Bisht',
        'role' => 'Chief Executive Officer',
        'desc' => 'A visionary in neural robotics with over 15 years of experience leading R&D teams.',
        'img'  => 'https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=400&auto=format&fit=crop'
    ],
    [
        'name' => 'Sarah Jenkins',
        'role' => 'Head of AI Research',
        'desc' => 'Specializes in deep learning algorithms and computer vision integration.',
        'img'  => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=400&auto=format&fit=crop'
    ],
    [
        'name' => 'Rahul Verma',
        'role' => 'Lead Mechanical Engineer',
        'desc' => 'Expert in designing robust robotic chassis and sensor arrays for harsh environments.',
        'img'  => 'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?q=80&w=400&auto=format&fit=crop'
    ],
    // --- Hidden Members (Initially) ---
    [
        'name' => 'David Chen',
        'role' => 'Head of Operations',
        'desc' => 'Ensuring seamless deployment and operational efficiency across all projects.',
        'img'  => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=400&auto=format&fit=crop'
    ],
    [
        'name' => 'Emily Wong',
        'role' => 'Lead Software Architect',
        'desc' => 'Architecting scalable and secure software infrastructures for robotic control.',
        'img'  => 'https://images.unsplash.com/photo-1580489944761-15a19d654956?q=80&w=400&auto=format&fit=crop'
    ],
    [
        'name' => 'Michael Ross',
        'role' => 'Senior R&D Specialist',
        'desc' => 'Focused on emerging technologies and prototype testing for next-gen bots.',
        'img'  => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=400&auto=format&fit=crop'
    ]
];
?>
<?php
// --- TESTIMONIALS CONFIGURATION ---
$testimonials_badge   = "Testimonials";
$testimonials_heading = "Reflecting our <span class='text-buimbRed-600'>Scientific Commitment</span>";

// Testimonials Data
$testimonials_data = [
    [
        'quote'  => '"Partnering with BUIMB allowed us to access advanced instrumentation and expert insight that significantly accelerated our automation projects."',
        'author' => 'David Chen',
        'role'   => 'Manufacturing Lead',
        'img'    => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=200&auto=format&fit=crop'
    ],
    [
        'quote'  => '"The precision of their robotic arms revolutionized our assembly line efficiency. The team\'s support during integration was phenomenal."',
        'author' => 'Michael Ross',
        'role'   => 'Operations Director',
        'img'    => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=200&auto=format&fit=crop'
    ],
    [
        'quote'  => '"BUIMB\'s research into agricultural drones helped us monitor crop health with unprecedented accuracy. A true partner in agricultural innovation."',
        'author' => 'Sarah Jenkins',
        'role'   => 'AgriTech CEO',
        'img'    => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=200&auto=format&fit=crop'
    ],
    [
        'quote'  => '"Their AI algorithms for navigation are robust and reliable. We successfully deployed their tech in our warehouse logistics units."',
        'author' => 'Emily Wong',
        'role'   => 'Logistics Manager',
        'img'    => 'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?q=80&w=200&auto=format&fit=crop'
    ]
];
?>

<?php
// --- FAQ CONFIGURATION ---
$faq_badge     = "Common Queries";
$faq_heading   = "Got questions? Find your <br> <span class='text-buimbRed-600'>answers</span> right here.";
$faq_btn_text  = "View All FAQs";
$faq_btn_link  = "javascript:void(0)";

// FAQ Items Data
$faqs = [
    [
        'question' => 'What industries does BUIMB Robotics serve?',
        'answer' => 'We specialize in industrial automation, healthcare robotics, agricultural monitoring (Agritech), and environmental sensing. Our solutions are tailored to high-precision sectors requiring custom R&D.'
    ],
    [
        'question' => 'Do you offer custom prototyping services?',
        'answer' => 'Yes, rapid prototyping is core to our process. We utilize 3D printing, CNC machining, and custom PCB design to bring concepts to life within weeks, not months.'
    ],
    [
        'question' => 'Are your research findings publicly available?',
        'answer' => 'We publish select white papers and case studies on our website. However, client-specific IP and proprietary industrial solutions remain strictly confidential under NDA.'
    ],
    // --- Hidden Items (Initially) ---
    [
        'question' => 'How can we partner for a joint venture?',
        'answer' => 'We welcome academic and industrial partnerships. Please reach out via our contact form or email our partnership team directly to discuss collaboration opportunities.'
    ],
    [
        'question' => 'What is the typical timeline for a robotics project?',
        'answer' => 'Timelines vary by complexity. A proof of concept might take 4-8 weeks, while a full industrial deployment can take 6-12 months.'
    ]
];
?>

<!--Abot Intro section-->
<section class="relative bg-white py-16 md:pt-12 md:pb-24 overflow-hidden">
    
    <div class="absolute top-0 right-0 w-64 h-64 md:w-[600px] md:h-[600px] bg-red-50 rounded-full blur-[60px] md:blur-[100px] translate-x-1/3 -translate-y-1/3 pointer-events-none"></div>
    
    <div class="absolute bottom-0 left-0 w-48 h-48 md:w-[400px] md:h-[400px] bg-red-50 rounded-full blur-[50px] md:blur-[80px] -translate-x-1/3 translate-y-1/2 pointer-events-none"></div>
    
    <div class="absolute inset-0 opacity-40"></div>

    <div class="container mx-auto px-4 md:px-6 relative z-10">
        <div class="max-w-4xl mx-auto text-center space-y-4 md:space-y-6">
            
            <div class="labrix-reveal slide-down inline-flex items-center px-3 py-1 md:px-4 md:py-1.5 rounded-full border border-red-100 bg-red-50 text-buimbRed-600 font-bold text-[10px] md:text-xs tracking-widest uppercase">
                <span class="w-1.5 h-1.5 md:w-2 md:h-2 rounded-full bg-buimbRed-600 mr-2 animate-pulse"></span>
                <?php echo $intro_badge; ?>
            </div>
            
            <h1 class="labrix-reveal slide-up delay-100 text-3xl sm:text-4xl md:text-6xl font-extrabold text-buimbDark leading-tight">
                <?php echo $intro_heading_main; ?> <br class="hidden md:block"> 
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-buimbRed-600 to-red-400">
                    <?php echo $intro_heading_grad; ?>
                </span>
            </h1>
            
            <p class="labrix-reveal slide-up delay-200 text-base md:text-lg text-gray-600 leading-relaxed max-w-2xl mx-auto px-2 md:px-0">
                <?php echo $intro_desc; ?>
            </p>
        </div>
    </div>
</section>

<!--Legacy Section-->

<section class="py-16 md:py-32 bg-white relative overflow-hidden">
    
    <div class="absolute -left-20 top-1/2 -translate-y-1/2 w-[300px] h-[300px] md:w-[500px] md:h-[500px] bg-red-50/50 rounded-full blur-3xl -z-10 pointer-events-none"></div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-24 items-center">
            
            <div class="space-y-6 lg:space-y-8 lg:order-2 lg:pl-10">
                
                <div class="labrix-reveal slide-down inline-flex items-center px-4 py-1.5 rounded-full bg-red-50 border border-red-100 text-buimbRed-600 font-bold text-xs tracking-widest uppercase">
                    <span class="w-2 h-2 rounded-full bg-buimbRed-600 mr-2 animate-pulse"></span>
                    <?php echo $legacy_badge; ?>
                </div>

                <h2 class="labrix-reveal slide-up delay-100 text-4xl md:text-5xl lg:text-6xl font-extrabold text-buimbDark leading-[1.1]">
                    <?php echo $legacy_heading; ?>
                </h2>

                <div class="space-y-4">
                    <p class="labrix-reveal slide-up delay-200 text-buimbGray text-base md:text-lg leading-relaxed font-medium">
                        <?php echo $legacy_desc_1; ?>
                    </p>
                    <p class="labrix-reveal slide-up delay-300 text-buimbGray text-sm md:text-base leading-relaxed">
                        <?php echo $legacy_desc_2; ?>
                    </p>
                </div>
                
                <div class="labrix-reveal slide-up delay-400 grid grid-cols-1 sm:grid-cols-2 gap-4 pt-4 border-t border-gray-100">
                    <?php foreach ($legacy_features as $feature): ?>
                        <div class="flex items-center gap-3 group">
                            <div class="w-12 h-12 rounded-xl bg-white border border-gray-200 shadow-sm flex items-center justify-center text-gray-400 group-hover:text-buimbRed-600 group-hover:border-red-100 transition-all duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?php echo $feature['icon']; ?>" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-buimbDark text-base group-hover:text-buimbRed-600 transition-colors">
                                    <?php echo $feature['title']; ?>
                                </h4>
                                <p class="text-xs text-buimbGray"><?php echo $feature['desc']; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>

            <div class="relative labrix-reveal slide-right delay-100 group lg:order-1 mt-8 lg:mt-0">
                
                <div class="relative rounded-[2rem] overflow-hidden shadow-2xl border-[4px] border-white z-10 w-full">
                    <img src="<?php echo $legacy_main_img; ?>" 
                         alt="BUIMB Lab Environment" 
                         class="w-full h-[350px] md:h-[500px] lg:h-[600px] object-cover transform transition-transform duration-[2000ms] group-hover:scale-105">
                    
                    <div class="absolute inset-0 bg-white/10 backdrop-blur-[1px] opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none"></div>
                </div>

                <div class="absolute -bottom-6 -right-2 md:-bottom-8 md:-right-8 bg-buimbRed-600 text-white p-6 md:p-8 rounded-[1.5rem] shadow-[0_20px_40px_-10px_rgba(227,27,35,0.4)] z-20 max-w-[180px] md:max-w-[240px] border-4 border-white animate-float">
                    <div class="flex items-center justify-between mb-2 gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 md:h-10 md:w-10 text-white/90" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                        <div class="text-3xl md:text-4xl font-extrabold tracking-tighter flex">
                            <span class="count-up" data-target="<?php echo $legacy_years; ?>">0</span>+
                        </div>
                    </div>
                    <p class="text-xs md:text-sm font-bold leading-tight text-white/95 uppercase tracking-wide text-right">Years of<br>Excellence</p>
                </div>

            </div>

        </div>
    </div>
</section>

<!--Our Approcach Section-->

<section class="py-24 bg-[#F3F6FF] relative overflow-hidden">
    
    <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-blue-100/40 rounded-full blur-[120px] -translate-y-1/2 translate-x-1/3 pointer-events-none"></div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-start">
            
            <div class="space-y-8 lg:sticky lg:top-32">
                <div class="labrix-reveal slide-down inline-flex items-center px-4 py-1.5 rounded-full border border-gray-200 bg-white text-buimbRed-600 font-bold text-xs tracking-widest uppercase shadow-sm">
                    <span class="w-2 h-2 rounded-full bg-buimbRed-600 mr-2 animate-pulse"></span>
                    <?php echo $approach_badge; ?>
                </div>

                <h2 class="labrix-reveal slide-up delay-100 text-4xl md:text-5xl font-extrabold text-buimbDark leading-tight">
                    <?php echo $approach_heading; ?>
                </h2>

                <p class="labrix-reveal slide-up delay-200 text-gray-500 text-lg leading-relaxed">
                    <?php echo $approach_desc; ?>
                </p>

                <div class="labrix-reveal slide-up delay-300 pt-2">
                    <a href="<?php echo $approach_btn_link; ?>" class="inline-flex items-center bg-buimbRed-600 text-white px-8 py-4 rounded-full font-bold text-sm transition-all duration-300 hover:bg-buimbDark hover:shadow-lg hover:-translate-y-1 group">
                        <?php echo $approach_btn_text; ?> 
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>
            </div>

            <div class="space-y-6">
                
                <?php foreach ($strategy_cards as $index => $card): 
                    // Determine styles based on 'theme' key
                    if ($card['theme'] === 'dark') {
                        // Red Card Styles
                        $cardClass = 'bg-buimbRed-600 shadow-lg hover:shadow-red-200';
                        $iconWrapperClass = 'bg-white/20 text-white backdrop-blur-sm group-hover:bg-white group-hover:text-buimbRed-600';
                        $titleClass = 'text-white';
                        $descClass = 'text-red-100';
                        $lineClass = ''; // No top line for red card in original design, or you can add if needed
                    } else {
                        // White Card Styles
                        $cardClass = 'bg-white border-gray-100 shadow-sm hover:shadow-xl';
                        $iconWrapperClass = 'bg-gray-50 text-buimbDark group-hover:bg-buimbRed-600 group-hover:text-white';
                        $titleClass = 'text-buimbDark group-hover:text-buimbRed-600 transition-colors';
                        $descClass = 'text-gray-500';
                        $lineClass = '<div class="absolute top-0 left-0 w-full h-1 bg-buimbRed-600 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>';
                    }
                ?>
                
                <div class="labrix-reveal slide-left delay-<?php echo ($index + 1) * 100; ?> group p-8 rounded-2xl border <?php echo $cardClass; ?> transition-all duration-300 hover:-translate-y-1 relative overflow-hidden">
                    <?php echo $lineClass; ?>
                    
                    <div class="flex items-start gap-6">
                        <div class="w-14 h-14 rounded-xl flex items-center justify-center transition-all duration-300 flex-shrink-0 <?php echo $iconWrapperClass; ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <?php echo $card['icon']; ?>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold mb-3 <?php echo $titleClass; ?>">
                                <?php echo $card['title']; ?>
                            </h3>
                            <p class="text-sm leading-relaxed <?php echo $descClass; ?>">
                                <?php echo $card['desc']; ?>
                            </p>
                        </div>
                    </div>
                </div>

                <?php endforeach; ?>

            </div>

        </div>
    </div>
</section>

<!--Stats Section-->

<section class="py-16 md:py-24 bg-buimbDark relative overflow-hidden">
    
    <div class="absolute top-0 left-0 w-64 h-64 md:w-[500px] md:h-[500px] bg-buimbRed-600/10 rounded-full blur-[80px] md:blur-[120px] pointer-events-none -translate-x-1/2 -translate-y-1/2 md:translate-x-0 md:translate-y-0 md:left-1/4"></div>
    <div class="absolute bottom-0 right-0 w-48 h-48 md:w-[400px] md:h-[400px] bg-buimbRed-600/10 rounded-full blur-[60px] md:blur-[100px] pointer-events-none translate-x-1/2 translate-y-1/2 md:translate-x-0 md:translate-y-0 md:right-1/4"></div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <?php foreach ($stats_data as $index => $stat): 
                // Calculate staggered delay: 100, 200, 300, 400...
                $delay = ($index + 1) * 100;
            ?>
                <div class="labrix-reveal slide-up delay-<?php echo $delay; ?> group relative p-6 md:p-8 rounded-2xl border border-white/10 bg-white/5 backdrop-blur-sm hover:bg-white/10 hover:border-buimbRed-600/50 transition-all duration-300 hover:-translate-y-2">
                    
                    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-buimbRed-600 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    
                    <div class="w-12 h-12 mb-4 rounded-xl bg-buimbRed-600/20 flex items-center justify-center text-buimbRed-500 group-hover:text-white group-hover:bg-buimbRed-600 transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?php echo $stat['icon']; ?>" />
                        </svg>
                    </div>
                    
                    <h3 class="text-4xl md:text-5xl font-extrabold text-white mb-1 md:mb-2 flex items-baseline">
                        <span class="count-up" data-target="<?php echo $stat['target']; ?>">0</span>
                        <span class="text-2xl text-buimbRed-600 ml-1"><?php echo $stat['suffix']; ?></span>
                    </h3>
                    
                    <p class="text-sm font-bold text-gray-300 uppercase tracking-widest group-hover:text-white transition-colors">
                        <?php echo $stat['label']; ?>
                    </p>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>


<!--Team Section-->
<section class="py-20 md:py-28 bg-white overflow-hidden" id="team-section">
    <div class="container mx-auto px-6">
        
        <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6">
            <div class=" text-center md:text-left max-w-2xl mx-auto md:mx-0">
                <span class="text-buimbRed-600 font-bold uppercase tracking-widest text-xs">
                    <?php echo $team_subheading; ?>
                </span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-buimbDark mt-3">
                    <?php echo $team_heading; ?>
                </h2>
            </div>
            
            <div class="hidden md:block">
                <button id="view-team-btn" class="inline-flex items-center px-6 py-2.5 rounded-full border border-buimbRed-600 text-buimbRed-600 font-bold text-sm transition-all duration-300 hover:bg-buimbRed-600 hover:text-white group">
                    <span id="team-btn-text"><?php echo $team_view_all_text; ?></span>
                    <svg id="team-btn-icon" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
            </div>
            
            <div class="md:hidden w-full text-center">
                <span class="text-xs font-bold text-gray-400 uppercase tracking-widest animate-pulse">Swipe to see more -></span>
            </div>
        </div>

        <div id="team-container" class="flex overflow-x-auto gap-6 pb-10 md:pb-0 snap-x snap-mandatory scrollbar-hide md:grid md:grid-cols-3 md:gap-10 transition-all duration-500 ease-in-out" style="scrollbar-width: none;">
            
            <?php foreach($team_members as $index => $member): 
                // Logic: Members after index 2 (4th member onwards) get the hidden classes for desktop
                // On mobile, horizontal scroll shows everyone by default unless you want to limit that too.
                // Based on your previous code, you wanted them hidden on desktop initially.
                $extraClass = ($index > 2) ? 'team-hidden md:hidden' : '';
                
                // Calculate staggered delay for animation
                $delay = ($index % 3 + 1) * 100;
            ?>
            
            <div class="min-w-[85vw] snap-center md:min-w-0 labrix-reveal slide-up delay-<?php echo $delay; ?> group text-center <?php echo $extraClass; ?>">
                
                <div class="relative w-40 h-40 md:w-48 md:h-48 mx-auto rounded-full overflow-hidden mb-6 border-4 border-gray-100 group-hover:border-buimbRed-600 transition-colors duration-300 shadow-lg">
                    <img src="<?php echo $member['img']; ?>" 
                         alt="<?php echo $member['name']; ?>" 
                         class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                </div>
                
                <h3 class="text-xl font-bold text-buimbDark">
                    <?php echo $member['name']; ?>
                </h3>
                <p class="text-buimbRed-600 font-medium text-sm mb-4">
                    <?php echo $member['role']; ?>
                </p>
                <p class="text-gray-500 text-sm leading-relaxed px-4">
                    <?php echo $member['desc']; ?>
                </p>
            </div>

            <?php endforeach; ?>

        </div>
    </div>
</section>


<!--Testimonials Section-->
<section class="py-20 bg-[#F3F6FF] relative overflow-hidden" id="testimonials">
    
    <div class="absolute top-0 left-0 w-64 h-64 bg-red-100/60 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2 pointer-events-none"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-blue-100/60 rounded-full blur-3xl translate-x-1/3 translate-y-1/3 pointer-events-none"></div>

    <div class="container mx-auto px-6 relative z-10">
        
        <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6">
            <div class="max-w-2xl space-y-4">
                <div class="labrix-reveal slide-down inline-flex items-center px-4 py-1.5 rounded-full bg-white/50 backdrop-blur-md border border-white/60 shadow-sm text-buimbRed-600 font-bold text-xs tracking-widest uppercase">
                    <span class="w-2 h-2 rounded-full bg-buimbRed-600 mr-2 animate-pulse"></span>
                    <?php echo $testimonials_badge; ?>
                </div>
                <h2 class="labrix-reveal slide-down delay-100 text-3xl md:text-5xl font-extrabold text-buimbDark leading-tight">
                    <?php echo $testimonials_heading; ?>
                </h2>
            </div>

            <div class="labrix-reveal slide-left delay-200 hidden md:flex gap-3">
                <button onclick="scrollTestimonials('left')" class="w-12 h-12 rounded-full border border-white/60 bg-white/40 backdrop-blur-md text-buimbDark flex items-center justify-center hover:bg-buimbRed-600 hover:text-white hover:border-buimbRed-600 transition-all shadow-sm hover:shadow-md cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button onclick="scrollTestimonials('right')" class="w-12 h-12 rounded-full border border-white/60 bg-white/40 backdrop-blur-md text-buimbDark flex items-center justify-center hover:bg-buimbRed-600 hover:text-white hover:border-buimbRed-600 transition-all shadow-sm hover:shadow-md cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>

        <div id="testimonial-scroll" class="labrix-reveal slide-up delay-300 flex overflow-x-auto gap-8 pb-12 snap-x snap-mandatory scrollbar-hide" style="scrollbar-width: none; -ms-overflow-style: none;">
            
            <?php foreach ($testimonials_data as $t): ?>
                <div class="min-w-[85vw] md:min-w-[400px] snap-center bg-white/40 backdrop-blur-[20px] p-8 rounded-3xl border border-white/60 shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_20px_40px_rgb(0,0,0,0.08)] relative group hover:-translate-y-2 transition-all duration-500">
                    
                    <div class="absolute top-8 left-8 text-buimbRed-600 opacity-30 group-hover:opacity-100 transition-opacity duration-300">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M14.017 21L14.017 18C14.017 16.8954 14.9124 16 16.017 16H19.017C19.5693 16 20.017 15.5523 20.017 15V9C20.017 8.44772 19.5693 8 19.017 8H15.017C14.4647 8 14.017 8.44772 14.017 9V11C14.017 11.5523 13.5693 12 13.017 12H12.017V5H22.017V15C22.017 18.3137 19.3307 21 16.017 21H14.017ZM5.0166 21L5.0166 18C5.0166 16.8954 5.91203 16 7.0166 16H10.0166C10.5689 16 11.0166 15.5523 11.0166 15V9C11.0166 8.44772 10.5689 8 10.0166 8H6.0166C5.46432 8 5.0166 8.44772 5.0166 9V11C5.0166 11.5523 4.56889 12 4.0166 12H3.0166V5H13.0166V15C13.0166 18.3137 10.3303 21 7.0166 21H5.0166Z" />
                        </svg>
                    </div>

                    <div class="relative z-10 pt-10">
                        <p class="text-buimbDark/80 text-lg leading-relaxed mb-8 italic font-medium">
                            <?php echo $t['quote']; ?>
                        </p>
                        
                        <div class="flex items-center gap-4 border-t border-buimbDark/10 pt-6">
                            <div class="w-12 h-12 rounded-full overflow-hidden border-2 border-buimbRed-600 shadow-sm">
                                <img src="<?php echo $t['img']; ?>" 
                                     alt="<?php echo $t['author']; ?>" 
                                     class="w-full h-full object-cover">
                            </div>
                            <div>
                                <h4 class="font-bold text-buimbDark">
                                    <?php echo $t['author']; ?>
                                </h4>
                                <p class="text-xs text-buimbRed-600 font-bold uppercase">
                                    <?php echo $t['role']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
        
        <div class="md:hidden text-center mt-6 labrix-reveal slide-up delay-400">
            <span class="text-xs font-bold text-buimbRed-600 uppercase tracking-widest animate-pulse">Swipe to see more -></span>
        </div>

    </div>
</section>



<!--Faq Question Section-->

<section class="py-20 md:py-28 bg-gray-50 relative overflow-hidden">
    
    <div class="absolute top-0 left-0 w-[500px] h-[500px] bg-red-100/40 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2 pointer-events-none"></div>

    <div class="container mx-auto px-6 relative z-10">
        
        <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
            <div class="max-w-2xl">
                <div class="labrix-reveal slide-down inline-flex items-center px-4 py-1.5 rounded-full bg-white border border-gray-200 shadow-sm text-buimbRed-600 font-bold text-xs tracking-widest uppercase mb-4">
                    <span class="w-2 h-2 rounded-full bg-buimbRed-600 mr-2 animate-pulse"></span>
                    <?php echo $faq_badge; ?>
                </div>
                <h2 class="labrix-reveal slide-down delay-100 text-4xl md:text-5xl font-extrabold text-buimbDark leading-tight">
                    <?php echo $faq_heading; ?>
                </h2>
            </div>
            
            <div class="labrix-reveal slide-left delay-200">
                <a href="<?php echo $faq_btn_link; ?>" id="view-all-faqs-btn" class="inline-flex items-center justify-center px-6 py-3 rounded-full font-bold text-buimbDark border border-gray-200 bg-white hover:border-buimbRed-600 hover:text-buimbRed-600 transition-all duration-300 shadow-sm">
                    <?php echo $faq_btn_text; ?>
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
                        <img src="https://images.unsplash.com/photo-1581092580497-e0d23cbdf1dc?q=80&w=600&auto=format&fit=crop" alt="Engineer Working" class="w-full h-full object-cover">
                    </div>
                    <div class="relative rounded-3xl overflow-hidden shadow-xl border-4 border-white h-[320px]">
                        <img src="assets/smarte-roboter-im-labor-fuer-automatisiertes-roboterhandling-item-blog-artikelbild.jpg" onerror="this.src='https://images.unsplash.com/photo-1581093458791-9f3c3900df4b?q=80&w=600&auto=format&fit=crop'" alt="Robotics Lab" class="w-full h-full object-cover">
                    </div>
                </div>
                
                <div class="absolute bottom-10 left-6 right-6 bg-buimbRed-600 text-white p-6 rounded-2xl shadow-2xl animate-float z-20">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg leading-tight mb-1">Still have questions?</h4>
                            <p class="text-red-100 text-sm mb-3">Can't find the answer you're looking for? Please chat with our friendly team.</p>
                            <a href="contact.php" class="text-xs font-bold uppercase tracking-wider underline hover:text-red-200">Get in touch -></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-7 space-y-4" id="faq-list">
                
                <?php foreach ($faqs as $index => $item): 
                    // Open the first item (Index 0) by default
                    $isOpen = ($index === 0);
                    
                    // Logic to hide items after the 3rd one
                    $extraClass = ($index > 2) ? 'faq-extra hidden' : '';
                    
                    // Determine classes for active state
                    $activeClass = $isOpen ? 'active border-buimbRed-600 ring-1 ring-red-100' : 'border-gray-200';
                    $iconClass   = $isOpen ? 'rotate-180 bg-red-50 text-buimbRed-600' : 'bg-gray-50 text-gray-400';
                    $contentStyle = $isOpen ? 'max-height: 200px; padding-bottom: 24px;' : 'max-height: 0px; padding-bottom: 0px;';
                    
                    // Calculate animation delay
                    $delay = ($index % 3 + 2) * 100; // 200, 300, 400...
                ?>
                    <div class="labrix-reveal slide-up delay-<?php echo $delay; ?> group border bg-white rounded-2xl overflow-hidden transition-all duration-300 hover:border-red-200 hover:shadow-md faq-item <?php echo $activeClass . ' ' . $extraClass; ?>">
                        
                        <button class="w-full flex justify-between items-center p-6 text-left focus:outline-none" onclick="toggleFaq(this)">
                            <span class="text-lg font-bold text-buimbDark group-hover:text-buimbRed-600 transition-colors">
                                <?php echo $item['question']; ?>
                            </span>
                            <span class="w-8 h-8 rounded-full flex items-center justify-center group-hover:bg-red-50 group-hover:text-buimbRed-600 transition-all icon-wrapper transform <?php echo $iconClass; ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </span>
                        </button>

                        <div class="faq-content px-6 text-buimbGray leading-relaxed overflow-hidden transition-all duration-500" style="<?php echo $contentStyle; ?>">
                            <?php echo $item['answer']; ?>
                        </div>

                    </div>
                <?php endforeach; ?>

            </div>

        </div>
    </div>
</section>

<!--Footer-->
<?php
include "footer.php";
?>
<!--Scripts-->

<script src="main.js"></script>
<script src="about.js"></script>

