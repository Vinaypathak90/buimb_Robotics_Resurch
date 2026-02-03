<?php

$page_title = isset($page_title) ? $page_title . ' | BUIMB Robotics' : 'BUIMB Robotics | Research Innovation & Power';

include "header.php";
?>
<?php
// --- HERO SECTION CONFIGURATION ---
$hero_bg_image        = "https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?q=80&w=2070&auto=format&fit=crop";
$hero_badge           = "Research & Development";
$hero_title_start     = "Innovating at the";
$hero_title_highlight = "Edge of Possibility";
$hero_desc            = "From autonomous navigation to human-robot collaboration, our research labs are forging the technologies that will define the next industrial revolution.";

// Buttons
$btn_primary_text     = "Research Papers";
$btn_primary_link     = "#"; // Link to papers page or section
$btn_secondary_text   = "Collaborate with Us";
$btn_secondary_link   = "contact.php";
?>


<?php
// --- CAPABILITIES CONFIGURATION ---
$capabilities_badge = "Our Capabilities";
$capabilities_heading = "Specialized <span class='text-buimbRed-600'>Robotics</span> & <br> Research Services";
$capabilities_desc = "Each research field is supported by expert engineering teams and cutting-edge technologies, ensuring precision, innovation, and industrial relevance.";

// Capabilities Data Array
$capabilities_data = [
    [
        'title' => 'Industrial Automation',
        'desc'  => 'Developing autonomous arms and conveyor systems for high-precision manufacturing.',
        'link'  => 'IndustrialAutomation.php', // Update with actual PHP link if needed
        'icon'  => 'M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z'
    ],
    [
        'title' => 'AI & Perception',
        'desc'  => 'Advanced computer vision and neural networks for real-time environmental analysis.',
        'link'  => 'AI&Perception.php',
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
        'icon'  => 'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z'
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
        'icon'  => 'M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0'
    ],
    [
        'title' => 'Soft Robotics',
        'desc'  => 'Bio-inspired compliant materials and actuators for delicate handling.',
        'link'  => 'SoftRobotics.php',
        'icon'  => 'M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z'
    ],
    [
        'title' => 'Autonomous Mobility',
        'desc'  => 'Self-driving algorithms and rugged chassis for terrestrial exploration.',
        'link'  => 'AutonomousMobility.php',
        'icon'  => 'M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0'
    ]
];
?>
<?php
// --- PROCESS SECTION CONFIGURATION ---
$process_badge = "Our Process";
$process_heading = "How our research process <br> <span class='text-transparent bg-clip-text bg-gradient-to-r from-buimbRed-600 to-red-400'>works smoothly</span>";
$process_desc = "Our streamlined R&D workflow ensures accuracy, efficiency, and reliability at every stage — from initial concept and prototyping to final deployment backed by advanced simulations.";
$process_btn_text = "Get In Touch";
$process_btn_link = "contact.php";

// Process Steps Data
$process_steps = [
    [
        'title' => 'Concept & Research',
        'desc'  => 'We begin with deep dive analysis, feasibility studies, and gathering requirements for the robotic system.',
        'icon'  => 'M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z'
    ],
    [
        'title' => 'Development & Prototyping',
        'desc'  => 'Our engineers build functional prototypes using CAD modeling, 3D printing, and initial code implementation.',
        'icon'  => 'M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4'
    ],
    [
        'title' => 'Testing & Deployment',
        'desc'  => 'Rigorous stress testing in simulated environments before final deployment and client handover.',
        'icon'  => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z'
    ]
];
?>


<?php
// --- INNOVATION SECTION CONFIGURATION ---
$innov_badge        = "Our Innovation";
$innov_heading      = "What makes our laboratory <br> <span class='relative inline-block text-buimbRed-600'> truly stand apart <svg class='absolute w-full h-3 -bottom-1 left-0 text-red-100 -z-10' viewBox='0 0 100 10' preserveAspectRatio='none'> <path d='M0 5 Q 50 10 100 5' stroke='currentColor' stroke-width='8' fill='none' /> </svg> </span>";
$innov_desc         = "We stand out through our dedication to precision engineering, neural network optimization, and scientific integrity. Our lab brings together cutting-edge LIDAR technology and adaptive AI.";

// Progress Bar Stats
$innov_stats = [
    ['label' => 'Navigation Precision', 'value' => '98%'],
    ['label' => 'AI Processing Speed',  'value' => '95%'],
    ['label' => 'Experimental Reliability', 'value' => '99%']
];

// Floating Card
$float_count_target = "250";
$float_count_label  = "Prototypes Built";
?>

<!--Custom css for image zoom effect -->
<script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        buimbRed: { 
                            50: '#FEF2F2',
                            100: '#FFE1E1',
                            600: '#E31B23', // Primary Red
                            700: '#C4121A' 
                        },
                        buimbWhite: '#FFFFFF',
                        buimbDark: '#0F172A', // Richer Dark Blue/Black
                        buimbGray: '#64748B',
                    },
                    fontFamily: { sans: ['Inter', 'sans-serif'] },
                 // YAHAN SE NAYA CODE ADD KAREIN
                animation: {
                    'float': 'float 6s ease-in-out infinite',
                    'zoom-slow': 'zoom 20s alternate infinite linear', // NEW ZOOM ANIMATION
                },
                keyframes: {
                    float: {
                        '0%, 100%': { transform: 'translateY(0)' },
                        '50%': { transform: 'translateY(-10px)' },
                    },
                    // NEW ZOOM KEYFRAMES
                    zoom: {
                        '0%': { transform: 'scale(1)' },
                        '100%': { transform: 'scale(1.15)' }, // Thoda sa zoom badhaya
                    }
                }
                }
            }
        }
    </script>
<!--hero section-->
<section class="relative w-full h-[550px] md:h-[650px] flex items-center justify-center overflow-hidden">
    
    <div class="absolute inset-0 z-0 overflow-hidden">
        <img src="<?php echo $hero_bg_image; ?>" 
             alt="Advanced Robotics Research Lab" 
             class="w-full h-full object-cover animate-zoom-slow origin-center">
        
        <div class="absolute inset-0 bg-buimbDark/85 mix-blend-multiply"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-buimbDark via-transparent to-transparent opacity-80"></div>
    </div>

    <div class="container mx-auto px-4 md:px-6 relative z-10 text-center">
        <div class="max-w-4xl mx-auto space-y-5 md:space-y-6 mt-4 md:mt-0"> 
            
            <div class="labrix-reveal slide-down inline-flex items-center px-3 py-1 md:px-4 md:py-1.5 rounded-full border border-white/20 bg-white/10 backdrop-blur-md text-white font-bold text-[10px] md:text-xs tracking-widest uppercase mb-1 md:mb-2">
                <span class="w-1.5 h-1.5 md:w-2 md:h-2 rounded-full bg-buimbRed-600 mr-2 animate-pulse"></span>
                <?php echo $hero_badge; ?>
            </div>
            
            <h1 class="labrix-reveal slide-up delay-100 text-3xl sm:text-5xl md:text-6xl lg:text-7xl font-extrabold text-white leading-[1.2] md:leading-tight drop-shadow-lg">
                <?php echo $hero_title_start; ?> <br class="hidden sm:block"> 
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-buimbRed-600 to-red-400">
                    <?php echo $hero_title_highlight; ?>
                </span>
            </h1>
            
            <p class="labrix-reveal slide-up delay-200 text-base sm:text-lg md:text-xl text-gray-200 leading-relaxed max-w-xl md:max-w-2xl mx-auto font-light drop-shadow-md px-2">
                <?php echo $hero_desc; ?>
            </p>

            <div class="labrix-reveal slide-up delay-300 pt-4 md:pt-6 flex flex-col sm:flex-row gap-3 md:gap-4 justify-center items-center w-full max-w-xs sm:max-w-none mx-auto">
                
                <a href="<?php echo $btn_primary_link; ?>" class="w-full sm:w-auto px-8 py-3.5 rounded-full bg-buimbRed-600 text-white font-bold text-sm hover:bg-red-700 transition-all shadow-[0_0_20px_rgba(227,27,35,0.4)] hover:shadow-[0_0_30px_rgba(227,27,35,0.6)] hover:-translate-y-1 text-center">
                    <?php echo $btn_primary_text; ?>
                </a>
                
                <a href="<?php echo $btn_secondary_link; ?>" class="w-full sm:w-auto px-8 py-3.5 rounded-full border border-white/30 text-white font-bold text-sm hover:bg-white hover:text-buimbDark transition-all hover:-translate-y-1 backdrop-blur-sm text-center">
                    <?php echo $btn_secondary_text; ?>
                </a>
            </div>

        </div>
    </div>
</section>


<section class="py-20 md:py-28 relative bg-[#b7b9bb]">
    
    <div class="container mx-auto px-6">

        <div class="flex flex-col lg:flex-row justify-between items-end gap-8 mb-16">
            <div class="max-w-2xl">
                <div class="labrix-reveal slide-down inline-flex items-center px-4 py-1.5 rounded-full bg-white border border-gray-200 shadow-sm text-buimbRed-600 font-bold text-xs tracking-widest uppercase mb-4">
                    <span class="w-2 h-2 rounded-full bg-buimbRed-600 mr-2 animate-pulse"></span>
                    <?php echo $capabilities_badge; ?>
                </div>
                <h2 class="labrix-reveal slide-down delay-100 text-4xl md:text-5xl font-bold text-buimbDark leading-tight">
                    <?php echo $capabilities_heading; ?>
                </h2>
            </div>

            <div class="max-w-md">
                <p class="labrix-reveal slide-up delay-200 text-buimbGray leading-relaxed font-medium">
                    <?php echo $capabilities_desc; ?>
                </p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <?php 
            $delay_counter = 100; // Start delay
            foreach ($capabilities_data as $cap): 
            ?>
                <div class="labrix-reveal slide-up delay-<?php echo $delay_counter; ?> group bg-white p-8 rounded-2xl border border-gray-100 shadow-sm hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 relative overflow-hidden">
                    
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-buimbRed-600 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>
                    
                    <div class="w-14 h-14 bg-red-50 text-buimbRed-600 rounded-xl flex items-center justify-center mb-6 group-hover:bg-buimbRed-600 group-hover:text-white transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?php echo $cap['icon']; ?>" />
                        </svg>
                    </div>

                    <h3 class="text-xl font-bold text-buimbDark mb-3 group-hover:text-buimbRed-600 transition-colors">
                        <?php echo $cap['title']; ?>
                    </h3>
                    <p class="text-sm text-buimbGray leading-relaxed mb-6">
                        <?php echo $cap['desc']; ?>
                    </p>

                    <a href="<?php echo $cap['link']; ?>" class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gray-50 text-buimbDark group-hover:bg-buimbRed-600 group-hover:text-white transition-all duration-300 group-hover:rotate-45">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M12 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            <?php 
                // Increment delay for cascade effect, reset if > 400
                $delay_counter = ($delay_counter >= 400) ? 100 : $delay_counter + 100;
            endforeach; 
            ?>

        </div>
    </div>
</section>


<!--Process Section -->

<section class="py-20 md:py-28 bg-buimbDark relative overflow-hidden">
    
    <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-buimbRed-600/5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/3 pointer-events-none"></div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-center">

            <div class="space-y-8">
                <div class="labrix-reveal slide-down inline-flex items-center px-4 py-1.5 rounded-full border border-gray-700 bg-gray-800/50 text-white font-bold text-xs tracking-widest uppercase">
                    <span class="w-2 h-2 rounded-full bg-buimbRed-600 mr-3 animate-pulse"></span>
                    <?php echo $process_badge; ?>
                </div>

                <h2 class="labrix-reveal slide-down delay-100 text-4xl md:text-5xl font-extrabold text-white leading-tight">
                    <?php echo $process_heading; ?>
                </h2>

                <p class="labrix-reveal slide-up delay-200 text-lg text-gray-400 leading-relaxed max-w-lg">
                    <?php echo $process_desc; ?>
                </p>

                <div class="labrix-reveal slide-up delay-300 pt-4">
                    <a href="<?php echo $process_btn_link; ?>" class="inline-flex items-center bg-buimbRed-600 text-white px-8 py-4 rounded-full font-bold text-sm transition-all duration-300 hover:bg-white hover:text-buimbRed-600 hover:shadow-[0_0_20px_rgba(227,27,35,0.4)] group">
                        <?php echo $process_btn_text; ?>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>
            </div>

            <div class="relative space-y-10 pl-4 md:pl-0">
                
                <div class="absolute left-[3.25rem] md:left-[3.25rem] top-8 bottom-12 w-0.5 bg-gray-800 labrix-reveal delay-500"></div>

                <?php 
                $delay = 200; // Initial delay
                foreach ($process_steps as $index => $step): 
                    $step_number = $index + 1;
                ?>
                    <div class="labrix-reveal slide-left delay-<?php echo $delay; ?> relative flex gap-8 group">
                        
                        <div class="relative flex-shrink-0">
                            <div class="w-20 h-20 bg-buimbRed-600 rounded-2xl flex items-center justify-center shadow-lg shadow-red-900/20 group-hover:scale-110 transition-transform duration-300 relative z-10">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-9 w-9 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="<?php echo $step['icon']; ?>" />
                                </svg>
                            </div>
                            <div class="absolute -top-3 -right-3 w-8 h-8 bg-white text-buimbDark rounded-full flex items-center justify-center font-bold text-sm shadow-md border-2 border-buimbDark z-20">
                                <?php echo $step_number; ?>
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
                    $delay += 100; // Increment delay for next item
                endforeach; 
                ?>

            </div>

        </div>
    </div>
</section>


<!--Innovation Section -->

<section class="py-20 md:py-28 relative overflow-hidden" id="innovation">
    
    <div class="absolute inset-0 z-0 lg:hidden">
        <img src="https://images.unsplash.com/photo-1581093458791-9f3c3900df4b?q=80&w=800&auto=format&fit=crop" 
             class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-white/90 backdrop-blur-sm"></div>
    </div>

    <div class="hidden lg:block absolute top-0 right-0 w-1/2 h-full bg-gray-50 -z-10 rounded-l-[100px]"></div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            
            <div class="order-2 lg:order-1">
                
                <div class="labrix-reveal slide-down inline-flex items-center px-4 py-1.5 rounded-full bg-red-50 border border-red-100 text-buimbRed-600 font-bold text-xs tracking-widest uppercase mb-6">
                    <span class="w-2 h-2 rounded-full bg-buimbRed-600 mr-2 animate-pulse"></span>
                    <?php echo $innov_badge; ?>
                </div>

                <h2 class="labrix-reveal slide-up delay-100 text-3xl md:text-5xl font-extrabold text-buimbDark leading-tight mb-6">
                    <?php echo $innov_heading; ?>
                </h2>

                <p class="labrix-reveal slide-up delay-200 text-buimbGray text-lg leading-relaxed mb-10">
                    <?php echo $innov_desc; ?>
                </p>

                <div class="space-y-8">
                    <?php 
                    $delay = 300; 
                    foreach ($innov_stats as $stat): 
                    ?>
                        <div class="labrix-reveal slide-up delay-<?php echo $delay; ?> progress-item">
                            <div class="flex justify-between items-end mb-2">
                                <h4 class="font-bold text-buimbDark text-lg"><?php echo $stat['label']; ?></h4>
                                <span class="font-bold text-buimbRed-600"><?php echo $stat['value']; ?></span>
                            </div>
                            <div class="w-full h-3 bg-gray-200 lg:bg-white rounded-full overflow-hidden"> 
                                <div class="progress-bar h-full bg-buimbRed-600 rounded-full w-0 transition-all duration-[1500ms] ease-out" data-width="<?php echo $stat['value']; ?>"></div>
                            </div>
                        </div>
                    <?php 
                        $delay += 100; // Increment delay
                    endforeach; 
                    ?>
                </div>
            </div>

            <div class="hidden lg:block order-1 lg:order-2 relative labrix-reveal slide-left delay-200">
                
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[120%] h-[120%] rounded-full -z-10 border border-gray-100"></div>

                <div class="relative mx-auto w-full max-w-[500px] aspect-square rounded-full overflow-hidden border-[8px] border-white shadow-2xl group cursor-zoom-in"
                     onclick="openImageModal(this.querySelector('img').src)">
                    
                    <img src="assets/ordinary-human-job-performed-by-anthropomorphic-robot.jpg" 
                         alt="Engineers working" 
                         class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110">
                    
                    <div class="absolute inset-0 bg-buimbDark/40 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-white drop-shadow-lg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                        </svg>
                    </div>
                </div>

                <div class="absolute bottom-10 left-0 md:left-10 bg-white p-4 pr-8 rounded-2xl shadow-[0_10px_40px_rgba(0,0,0,0.1)] border border-gray-100 flex items-center gap-4 animate-float" style="animation-delay: 1s;">
                    <div class="w-12 h-12 bg-buimbRed-600 rounded-full flex items-center justify-center text-white shadow-lg shadow-red-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-2xl font-extrabold text-buimbDark flex items-center">
                             <span class="count-up" data-target="<?php echo $float_count_target; ?>">0</span>+
                        </h4>
                        <p class="text-xs text-buimbGray font-bold uppercase tracking-wide">
                            <?php echo $float_count_label; ?>
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<?php
include "footer.php";
?>

<script src="resurch.js"></script>
<script src="main.js"></script>