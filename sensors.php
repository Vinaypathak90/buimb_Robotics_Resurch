<?php

$page_title = isset($page_title) ? $page_title . ' | BUIMB Robotics' : 'BUIMB Robotics | Research Innovation & Power';

include "header.php";

?>
<?php
// --- HERO SECTION CONFIGURATION ---
// 1. Background Image (Ensure this path is correct relative to your PHP file)
$hero_bg_image = "assets/mechanic-controls-robotic-arm-futuristic-production-line-generated-by-ai.jpg";

// 2. Text Content
$hero_badge_text = "Industrial Automation";
$hero_heading_1  = "Developing the";
$hero_heading_highlight = "Autonomous Factory"; // This part gets the gradient color
?>


<?php
// --- CHALLENGE SECTION CONFIGURATION ---
$challenge_title    = "The Challenge: <span class='text-buimbRed-600'>Static vs. Dynamic</span>";
$challenge_desc     = "Traditional manufacturing lines are rigid. They require costly reprogramming for every product change. In today's market, where customization is key, factories need flexibility.";

$solution_label     = "Our Solution:";
$solution_desc      = "We engineered a <strong>Self-Adapting Production Unit</strong>. Using computer vision and modular robotic arms, our system identifies products in real-time.";

$objectives_heading = "Key Objectives Achieved:";

// Objectives Data (Text + SVG Path)
$objectives_list = [
    [
        'text' => 'Reduced changeover time by 85%.',
        'icon' => 'M5 13l4 4L19 7' // Checkmark
    ],
    [
        'text' => 'Zero-error sorting using AI Vision.',
        'icon' => 'M15 12a3 3 0 11-6 0 3 3 0 016 0zM2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z' // Eye
    ],
    [
        'text' => 'Seamless integration with legacy conveyors.',
        'icon' => 'M13 10V3L4 14h7v7l9-11h-7z' // Bolt
    ]
];

$challenge_img_src  = "https://images.unsplash.com/photo-1531746790731-6c087fecd65a?q=80&w=800&auto=format&fit=crop";
?>
<?php
// --- METHODOLOGY CONFIGURATION ---
$methodology_badge = "Methodology";
$methodology_heading = "How We <span class='text-transparent bg-clip-text bg-gradient-to-r from-buimbRed-600 to-red-400'>Engineered It</span>";
$methodology_desc = "Our research follows a rigorous four-stage lifecycle to ensure industrial viability.";

// Methodology Steps Array
$methodology_steps = [
    [
        'num'   => '01',
        'title' => 'Digital Twin',
        'desc'  => 'We first built a complete replica of the factory floor in NVIDIA Omniverse to test physics without risk.'
    ],
    [
        'num'   => '02',
        'title' => 'Algorithm Training',
        'desc'  => 'Reinforcement learning models were trained on millions of synthetic scenarios to handle edge cases.'
    ],
    [
        'num'   => '03',
        'title' => 'Hardware Dev',
        'desc'  => 'Custom end-effectors (grippers) were 3D printed and CNC machined to handle delicate payloads.'
    ],
    [
        'num'   => '04',
        'title' => 'Deployment',
        'desc'  => 'Integration with PLCs and SCADA systems for real-time monitoring and control.'
    ]
];
?>

<?php
// --- ARCHITECTURE CONFIGURATION ---
$arch_heading = "System <span class='text-transparent bg-clip-text bg-gradient-to-r from-buimbRed-600 to-red-400'>Control Logic</span>";
$arch_desc    = "High-level schematic of our autonomous control loop and data flow.";
$arch_badge   = "Architecture";

// Architecture Flow Data
$arch_steps = [
    [
        'title'    => 'Perception',
        'sub'      => 'LiDAR Point Cloud <br>+ Stereo RGB Input',
        'icon'     => 'M15 12a3 3 0 11-6 0 3 3 0 016 0zM2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z',
        'active'   => false // Regular style
    ],
    [
        'title'    => 'Neural Core',
        'sub'      => 'YOLOv8 Identification <br>+ Path Planning',
        'icon'     => 'M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z',
        'active'   => true  // Highlighted style (Center)
    ],
    [
        'title'    => 'Actuation',
        'sub'      => 'Inverse Kinematics <br>+ Motor Control',
        'icon'     => 'M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z',
        'active'   => false // Regular style
    ]
];
?>
<?php
// --- DATASHEET SECTION CONFIGURATION ---

// 1. File Configuration (Yahan apni PDF file ka path dalein)
// Make sure you upload a file named 'brochure.pdf' into your 'assets' folder.
$file_path = "assets/BUIMB_Industrial_Robotics_Brochure.pdf"; 
$file_download_name = "BUIMB_Datasheet_2026.pdf"; // Ye naam user ko download hone par dikhega

// 2. Text Content
$datasheet_badge = "Datasheet";
$datasheet_heading = "Technical <span class='text-gray-400'>Specifications</span>";
$datasheet_btn_text = "Download Full Datasheet";

// 3. Technical Specs Data
$technical_specs = [
    [
        'label' => 'Degrees of Freedom',
        'value' => '6-Axis Articulated',
        'icon'  => 'M5 13l4 4L19 7' // Checkmark Icon Path
    ],
    [
        'label' => 'Payload Capacity',
        'value' => 'Up to 25kg (Dynamic)',
        'icon'  => 'M5 13l4 4L19 7'
    ],
    [
        'label' => 'Reach Radius',
        'value' => '1800mm Max Reach',
        'icon'  => 'M5 13l4 4L19 7'
    ],
    [
        'label' => 'Vision System',
        'value' => 'LiDAR + Stereo Depth',
        'icon'  => 'M5 13l4 4L19 7'
    ],
    [
        'label' => 'Connectivity',
        'value' => '5G / Ethernet / WiFi 6',
        'icon'  => 'M5 13l4 4L19 7'
    ]
];

// 4. Side Image
$system_image = "https://images.unsplash.com/photo-1581092580497-e0d23cbdf1dc?q=80&w=800&auto=format&fit=crop";
?>



<!--Hero section-->

<section class="relative w-full h-[60vh] md:h-[70vh] flex items-center justify-center overflow-hidden">
    
    <div class="absolute inset-0 z-0 overflow-hidden">
        <img src="<?php echo $hero_bg_image; ?>"
             onerror="this.src='https://images.unsplash.com/photo-1531746790731-6c087fecd65a?q=80&w=2070&auto=format&fit=crop'" 
             alt="<?php echo $hero_badge_text; ?>" 
             class="w-full h-full object-cover animate-zoom-slow origin-center">
        
        <div class="absolute inset-0 bg-buimbDark/80 mix-blend-multiply"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-white via-transparent to-transparent opacity-20"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10 pt-10 text-center">
        <div class="max-w-5xl mx-auto">
            
            <div class="flex justify-center mb-6">
                <div class="labrix-reveal slide-down inline-flex items-center px-4 py-1.5 rounded-full bg-buimbRed-600 text-white font-bold text-xs tracking-widest uppercase shadow-lg shadow-red-900/20">
                    <span class="w-2 h-2 rounded-full bg-white mr-2 animate-pulse"></span>
                    <?php echo $hero_badge_text; ?>
                </div>
            </div>

            <h1 class="labrix-reveal slide-up delay-100 text-4xl md:text-6xl lg:text-7xl font-extrabold text-white leading-tight drop-shadow-lg">
                <?php echo $hero_heading_1; ?> <br class="hidden md:block">
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-buimbRed-600 to-red-400">
                    <?php echo $hero_heading_highlight; ?>
                </span>
            </h1>

        </div>
    </div>
</section>


<!--challenge section-->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
            
            <div class="labrix-reveal slide-up">
                
                <h2 class="text-3xl md:text-4xl font-extrabold text-buimbDark mb-6">
                    <?php echo $challenge_title; ?>
                </h2>
                
                <p class="text-gray-600 text-lg leading-relaxed mb-6">
                    <?php echo $challenge_desc; ?>
                </p>
                
                <div class="p-6 bg-red-50 border-l-4 border-buimbRed-600 rounded-r-xl mb-10">
                    <h4 class="font-bold text-buimbDark mb-2"><?php echo $solution_label; ?></h4>
                    <p class="text-sm text-gray-700">
                        <?php echo $solution_desc; ?>
                    </p>
                </div>
                
                <h3 class="text-xl font-bold text-buimbDark mb-4"><?php echo $objectives_heading; ?></h3>
                
                <ul class="space-y-4" id="objective-list">
                    <?php foreach($objectives_list as $index => $item): 
                        // Logic: Highlight the first item (Index 0) by default
                        $isActive = ($index === 0);
                        
                        // Dynamic Classes based on active state
                        $liClass   = $isActive ? 'bg-red-50 border-red-200 shadow-sm active-item' : 'border-transparent';
                        $iconClass = $isActive ? 'bg-buimbRed-600 text-white' : 'bg-gray-100 text-gray-400';
                        $textClass = $isActive ? 'text-buimbDark font-bold' : 'text-gray-500 font-medium';
                    ?>
                    
                    <li class="objective-item group flex items-center gap-4 p-4 rounded-xl border transition-all duration-300 cursor-pointer hover:bg-red-50 hover:border-red-100 hover:shadow-sm <?php echo $liClass; ?>" onclick="setActiveItem(this)">
                        
                        <div class="w-10 h-10 rounded-full flex items-center justify-center group-hover:bg-buimbRed-600 group-hover:text-white transition-colors duration-300 icon-box <?php echo $iconClass; ?>">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?php echo $item['icon']; ?>" />
                            </svg>
                        </div>
                        
                        <span class="text-lg group-hover:text-buimbDark group-hover:font-bold transition-all duration-300 text-content <?php echo $textClass; ?>">
                            <?php echo $item['text']; ?>
                        </span>
                        
                    </li>
                    <?php endforeach; ?>
                </ul>

            </div>

            <div class="relative labrix-reveal slide-left delay-200 group overflow-hidden rounded-3xl shadow-2xl h-full min-h-[400px]">
                
                <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition-colors z-10 pointer-events-none"></div>
                
                <img src="<?php echo $challenge_img_src; ?>" 
                     alt="Robotic Arm Working" 
                     class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110">
                
                <div class="absolute bottom-8 right-8 z-20 bg-white p-4 rounded-xl shadow-xl flex items-center gap-3 animate-float">
                    <div class="w-12 h-12 bg-buimbRed-600 rounded-full flex items-center justify-center text-white font-bold">AI</div>
                    <div>
                        <p class="text-xs text-gray-500 uppercase font-bold">Powered By</p>
                        <p class="text-buimbDark font-bold">Neural Networks</p>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>


<!--methodology Section-->
<section class="py-20 bg-slate-50 relative overflow-hidden">
    
    <div class="absolute top-0 left-0 w-full h-full opacity-30 pointer-events-none" 
         style="background-image: radial-gradient(#E31B23 0.5px, transparent 0.5px); background-size: 24px 24px;">
    </div>

    <div class="container mx-auto px-6 relative z-10">
        
        <div class="text-center mb-16">
            <div class="labrix-reveal slide-down inline-flex items-center px-4 py-1.5 rounded-full bg-buimbRed-600 text-white font-bold text-xs tracking-widest uppercase mb-4 shadow-lg shadow-red-600/20">
                <span class="w-2 h-2 rounded-full bg-white mr-2 animate-pulse"></span>
                <?php echo $methodology_badge; ?>
            </div>
            
            <h2 class="labrix-reveal slide-up delay-100 text-3xl md:text-4xl font-extrabold text-buimbDark mt-2 leading-tight">
                <?php echo $methodology_heading; ?>
            </h2>
            
            <p class="labrix-reveal slide-up delay-200 text-gray-500 mt-4 max-w-2xl mx-auto">
                <?php echo $methodology_desc; ?>
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <?php 
            $delay = 100;
            foreach ($methodology_steps as $index => $step): 
                // First item is active by default
                $isActive = ($index === 0);
                $activeClass = $isActive ? 'active-step' : ''; // You can define .active-step styles or rely on JS
            ?>
                <div class="step-card labrix-reveal slide-up delay-<?php echo $delay; ?> group bg-white p-8 rounded-2xl border border-gray-200 shadow-sm hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 relative overflow-hidden cursor-pointer <?php echo $activeClass; ?>" onclick="activateStep(this)">
                    
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-buimbRed-600 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left active-line"></div>
                    
                    <div class="w-14 h-14 bg-red-50 text-buimbRed-600 rounded-xl flex items-center justify-center mb-6 text-xl font-extrabold group-hover:bg-buimbRed-600 group-hover:text-white transition-colors duration-300 step-icon">
                        <?php echo $step['num']; ?>
                    </div>
                    
                    <h3 class="text-xl font-bold text-buimbDark mb-3 group-hover:text-buimbRed-600 transition-colors">
                        <?php echo $step['title']; ?>
                    </h3>
                    <p class="text-sm text-buimbGray leading-relaxed">
                        <?php echo $step['desc']; ?>
                    </p>
                </div>
            <?php 
                $delay += 100; 
            endforeach; 
            ?>
        </div>

    </div>
</section>



<section class="py-20 bg-relative overflow-hidden">
    <div class="container mx-auto px-6 relative z-10">
        
        <div class="text-center mb-16">
            <div class="labrix-reveal slide-down inline-flex items-center px-4 py-1.5 rounded-full bg-buimbRed-600 text-white font-bold text-xs tracking-widest uppercase mb-4 shadow-lg shadow-red-600/20">
                <span class="w-2 h-2 rounded-full bg-white mr-2 animate-pulse"></span>
                <?php echo $arch_badge; ?>
            </div>
            
            <h2 class="labrix-reveal slide-up delay-100 text-3xl md:text-4xl font-extrabold text-buimbDark mt-2 leading-tight">
                <?php echo $arch_heading; ?>
            </h2>
            
            <p class="labrix-reveal slide-up delay-200 text-gray-500 mt-4 max-w-2xl mx-auto">
                <?php echo $arch_desc; ?>
            </p>
        </div>

        <div class="flex flex-col lg:flex-row justify-center items-center gap-6 lg:gap-0 relative">
            
            <?php 
            $delay = 100;
            foreach ($arch_steps as $index => $step): 
                $isLast = ($index === count($arch_steps) - 1);
            ?>

                <div class="labrix-reveal slide-right delay-<?php echo $delay; ?> flex flex-col items-center w-full lg:w-1/4">
                    <?php if ($step['active']): ?>
                        <div class="p-8 rounded-2xl border-2 border-buimbRed-600 bg-white shadow-2xl shadow-red-100 w-full text-center relative overflow-hidden group transform lg:-translate-y-2">
                            <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-red-400 to-buimbRed-600"></div>
                            <div class="mb-5 w-14 h-14 mx-auto bg-buimbRed-600 rounded-full flex items-center justify-center shadow-lg shadow-red-600/30">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="<?php echo $step['icon']; ?>" />
                                </svg>
                            </div>
                            <h4 class="font-bold text-buimbDark text-xl mb-2"><?php echo $step['title']; ?></h4>
                            <p class="text-sm text-gray-500 font-medium"><?php echo $step['sub']; ?></p>
                        </div>
                    <?php else: ?>
                        <div class="p-8 rounded-2xl border border-gray-200 bg-white shadow-xl shadow-gray-200/50 w-full text-center hover:border-buimbRed-600 hover:shadow-red-100/50 hover:-translate-y-1 transition-all duration-300 group">
                            <div class="mb-5 w-14 h-14 mx-auto bg-red-50 rounded-full flex items-center justify-center group-hover:bg-buimbRed-600 transition-colors duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-buimbRed-600 group-hover:text-white transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="<?php echo $step['icon']; ?>" />
                                </svg>
                            </div>
                            <h4 class="font-bold text-buimbDark text-xl mb-2"><?php echo $step['title']; ?></h4>
                            <p class="text-sm text-gray-500 font-medium"><?php echo $step['sub']; ?></p>
                        </div>
                    <?php endif; ?>
                </div>

                <?php if (!$isLast): ?>
                    <div class="hidden lg:flex items-center justify-center w-20 text-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 animate-pulse text-buimbRed-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </div>
                    <div class="lg:hidden flex items-center justify-center h-16 text-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 rotate-90 animate-pulse text-buimbRed-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </div>
                <?php endif; ?>

            <?php 
                $delay += 100;
            endforeach; 
            ?>

        </div>
    </div>
</section>


<section class="py-20 relative bg-slate-50 overflow-hidden">
    
    <div class="absolute top-0 right-0 w-1/3 h-full bg-white/50 skew-x-12 translate-x-20 z-0 hidden lg:block border-l border-gray-200"></div>
    <div class="absolute bottom-0 left-0 w-64 h-64 bg-red-500/5 rounded-full blur-3xl pointer-events-none"></div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-center">
            
            <div class="labrix-reveal slide-up order-2 lg:order-1">
                
                <div class="mb-10 text-center lg:text-left">
                    <div class="inline-flex items-center px-3 py-1.5 rounded-full bg-buimbRed-600 text-white font-bold text-xs tracking-widest uppercase mb-4 shadow-lg shadow-red-600/20">
                        <span class="w-2 h-2 rounded-full bg-white mr-2 animate-pulse"></span>
                        <?php echo $datasheet_badge; ?>
                    </div>
                    <h3 class="text-3xl md:text-4xl font-extrabold text-buimbDark leading-tight">
                        <?php echo $datasheet_heading; ?>
                    </h3>
                </div>

                <div class="flex flex-col border-t border-gray-200" style="counter-reset: spec-counter;">
                    <?php foreach($technical_specs as $spec): ?>
                    <div class="spec-row flex flex-col sm:flex-row sm:items-center justify-between py-5 border-b border-gray-200 cursor-pointer transition-all duration-300 group hover:bg-white hover:pl-4 rounded-lg" onclick="toggleSpec(this)">
                        <div class="flex items-center gap-4">
                            <span class="text-gray-400 font-mono text-sm before:content-['0'counter(spec-counter)]" style="counter-increment: spec-counter;"></span>
                            <span class="font-bold text-buimbDark text-lg group-hover:text-buimbRed-600 transition-colors">
                                <?php echo $spec['label']; ?>
                            </span>
                        </div>
                        <div class="flex items-center gap-3 mt-2 sm:mt-0">
                            <span class="font-mono font-medium text-gray-500 group-hover:text-buimbDark transition-colors">
                                <?php echo $spec['value']; ?>
                            </span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-buimbRed-600 opacity-0 transform scale-0 transition-all duration-300 check-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?php echo $spec['icon']; ?>" />
                            </svg>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                
                <div class="mt-8">
                    <a href="<?php echo $file_path; ?>" 
                       download="<?php echo $file_download_name; ?>" 
                       class="inline-flex items-center text-sm font-bold text-buimbRed-600 hover:text-buimbDark transition-colors group">
                        
                        <?php echo $datasheet_btn_text; ?>
                        
                        <span class="ml-2 w-6 h-6 rounded-full bg-red-50 flex items-center justify-center group-hover:bg-buimbDark group-hover:text-white transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </span>
                    </a>
                </div>

            </div>

            <div class="labrix-reveal slide-left delay-200 relative order-1 lg:order-2">
                <div class="relative rounded-2xl overflow-hidden shadow-2xl border border-gray-200 bg-white group">
                    
                    <div class="h-8 bg-gray-50 border-b border-gray-200 flex items-center px-4 gap-2">
                        <div class="w-2.5 h-2.5 rounded-full bg-red-500 animate-pulse"></div>
                        <div class="w-2.5 h-2.5 rounded-full bg-gray-300"></div>
                        <div class="w-2.5 h-2.5 rounded-full bg-gray-300"></div>
                        <div class="ml-auto text-[10px] text-gray-400 font-mono tracking-wider">SYSTEM_VIEW_04</div>
                    </div>

                    <div class="relative h-[400px] lg:h-[550px] overflow-hidden">
                        <img src="<?php echo $system_image; ?>" 
                             alt="Robotic System" 
                             class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        
                        <div class="absolute inset-0 bg-gradient-to-t from-buimbDark/60 via-transparent to-transparent"></div>

                        <div class="absolute bottom-0 left-0 right-0 p-6 border-t border-white/10 backdrop-blur-md bg-black/20 text-white flex justify-between items-end">
                            <div>
                                <p class="text-xs text-buimbRed-400 font-bold uppercase tracking-wider mb-1">System Status</p>
                                <h4 class="text-xl font-bold">Operational</h4>
                            </div>
                            <div class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center backdrop-blur-sm border border-white/20">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="absolute -bottom-4 -right-4 w-32 h-32 border-b-4 border-r-4 border-buimbRed-600/20 rounded-br-3xl -z-10"></div>
            </div>

        </div>
    </div>
</section>
<?php
include "footer.php";
?>

<script src="main.js"></script>
<script  src="IndustrialAutomation.js"></script>
