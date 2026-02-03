<?php

$page_title = isset($page_title) ? $page_title . ' | BUIMB Robotics' : 'BUIMB Robotics | Research Innovation & Power';

include "header.php";
?>

<?php
// --- ARTICLE HERO CONFIGURATION ---
// Ideally, this data would come from a database or a previous query
$hero_data = [
    'category'    => 'Research Insights',
    'title_1'     => 'Inside the Lab:',
    'title_2'     => 'Intelligent Machines',
    'description' => 'Bridging the gap between neural networks and mechanical engineering. A deep dive into our 2026 technical roadmap and automation goals.',
    'author_name' => 'Vinay Pathak',
    'author_role' => 'Lead Engineer',
    'author_img'  => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=150&auto=format&fit=crop',
    'date'        => 'Feb 01, 2026'
];
?>

<?php
// --- PROGRESS BAR CONFIGURATION ---
// Change these classes to customize the bar via PHP
$progress_bar_color  = "bg-buimbRed-600"; // Tailwind color class
$progress_bar_height = "h-1.5";           // Tailwind height class
$progress_bar_zindex = "z-[100]";         // Z-index to ensure it stays on top
?>

<?php
// --- BACKEND DATA CONFIGURATION ---

// 1. Article Body Content
$content = [
    'featured_image' => 'https://images.unsplash.com/photo-1581092160562-40aa08e78837?q=80&w=2000&auto=format&fit=crop',
    'status_label'   => 'Status',
    'status_text'    => 'Phase 4 Testing Active',
    'intro_quote'    => 'The future of automation isn\'t just about faster motors—it\'s about creating machines that can <span class="bg-gradient-to-r from-buimbRed-600 to-orange-500 bg-clip-text text-transparent">think, perceive, and adapt</span>.',
    
    // Section 1
    'sec1_title'     => 'The Precision Engine',
    'sec1_p1'        => 'Our primary focus remains on kinematic optimization. Every robotic arm deployed in a factory environment requires sub-millimeter precision. In our testing bays, we utilize high-speed optical tracking to monitor the deviation of 6-axis articulated robots under heavy payloads.',
    'sec1_p2'        => 'By integrating <strong>closed-loop force torque sensors</strong>, we\'ve reduced vibration dampening time by 40%, allowing for faster cycle times without compromising structural integrity.',
    
    // Highlight Quote
    'quote_text'     => '"Innovation is the bridge between a coordinate on a screen and a machine that <span class="text-buimbRed-600 font-bold bg-white/10 px-2 rounded">understands</span> its environment."',
    'quote_author'   => 'Dr. Aris Thorne, Lead Researcher',

    // Section 2
    'sec2_title'     => 'AI Perception',
    'sec2_p1'        => 'A robot is blind without computer vision. Our team is currently perfecting a <strong>Multi-Modal Sensor Fusion</strong> pipeline that combines LiDAR point clouds with real-time stereo RGB data.',
    
    // Tech Stack List
    'tech_stack'     => [
        'NVIDIA Jetson Orin Core',
        'ROS2 Humble Framework',
        'Custom YOLOv8 Engine'
    ],

    // Section 3
    'sec3_title'     => 'Soft Robotics & Bio-Mimicry',
    'sec3_p1'        => 'As we move into 2026, our research is shifting towards <strong>Soft Robotics</strong>. Unlike rigid skeletons, these bio-inspired actuators allow robots to handle delicate materials—from ripe fruit to fragile glass components—without applying excessive force.'
];

// 2. Stats Grid Data
$stats_grid = [
    [
        'type'     => 'number',
        'value'    => 98,
        'symbol'   => '%',
        'prefix'   => '',
        'label'    => 'Grip Adaptability',
        'speed'    => 2000,
        'decimals' => 0
    ],
    [
        'type'     => 'number',
        'value'    => 0.1,
        'symbol'   => 's',
        'prefix'   => '<',
        'label'    => 'Reflex Time',
        'speed'    => 1500,
        'decimals' => 1
    ],
    [
        'type'     => 'text',
        'value'    => 'Silicone',
        'label'    => 'Primary Material'
    ]
];

// 3. Comparison Table Data
$comparison_table = [
    ['metric' => 'Actuator Efficiency', 'current' => '78%', 'next' => '92%'],
    ['metric' => 'Latency',             'current' => '12ms', 'next' => '3ms'],
    ['metric' => 'Payload Capacity',    'current' => '15kg', 'next' => '25kg (Adaptive)']
];

// 4. Footer Data (Tags & Author)
$tags = ['#Automation', '#Robotics2026', '#AI_Perception'];
$author = [
    'name'  => 'Vinay Pathak',
    'image' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=400&auto=format&fit=crop',
    'bio'   => 'Engineering Lead at BUIMB Robotics. Passionate about neural architecture and its role in industrial automation. Previously led R&D at TechFlow Systems.'
];
?>
<!-- HERO SECTION -->
 
<section class="relative bg-white py-16 md:py-24 lg:py-32 overflow-hidden border-b border-gray-100">
    
    <div class="absolute inset-0 opacity-[0.03] pointer-events-none" 
         style="background-image: radial-gradient(#E31B23 0.5px, transparent 0.5px); background-size: 24px 24px;">
    </div>
    
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[300px] h-[300px] sm:w-[600px] sm:h-[400px] lg:w-[800px] lg:h-[500px] bg-red-50 rounded-full blur-3xl opacity-50 pointer-events-none"></div>

    <div class="container mx-auto px-4 sm:px-6 relative z-10 text-center">
        <div class="max-w-4xl mx-auto">
            
            <div class="labrix-reveal inline-flex items-center space-x-2 text-[10px] font-black uppercase tracking-widest text-buimbRed-600 bg-red-50 px-3 py-1.5 sm:px-4 sm:py-2 rounded-full mb-6 sm:mb-8 border border-red-100 shadow-sm hover:shadow-md transition-shadow">
                <span class="w-1.5 h-1.5 rounded-full bg-buimbRed-600 animate-pulse"></span>
                <span><?php echo $hero_data['category']; ?></span>
            </div>

            <h1 class="labrix-reveal delay-100 text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-black text-gray-900 leading-[1.1] sm:leading-tight mb-6 sm:mb-8 tracking-tight">
                <?php echo $hero_data['title_1']; ?> <br class="hidden sm:block">
                <span class="text-buimbRed-600 relative inline-block mt-2 sm:mt-0">
                    <?php echo $hero_data['title_2']; ?>
                    <svg class="absolute w-full h-2 sm:h-3 -bottom-1 left-0 text-red-100 -z-10" viewBox="0 0 100 10" preserveAspectRatio="none">
                        <path d="M0 5 Q 50 10 100 5" stroke="currentColor" stroke-width="8" fill="none" />
                    </svg>
                </span>
            </h1>
            
            <p class="labrix-reveal delay-200 text-base sm:text-lg md:text-xl text-gray-500 leading-relaxed mb-8 sm:mb-10 max-w-2xl mx-auto font-medium px-2 sm:px-0">
                <?php echo $hero_data['description']; ?>
            </p>

            <div class="labrix-reveal delay-300 flex flex-col md:flex-row items-center justify-center gap-4 md:gap-6">
                
                <div class="flex items-center gap-3 bg-white p-2 pr-5 rounded-full border border-gray-100 shadow-sm hover:border-red-100 transition-colors hover:-translate-y-1 duration-300">
                    <img src="<?php echo $hero_data['author_img']; ?>" 
                         class="w-10 h-10 rounded-full object-cover ring-2 ring-white" 
                         alt="<?php echo $hero_data['author_name']; ?>">
                    <div class="text-left">
                        <p class="text-gray-900 font-bold text-sm leading-none">
                            <?php echo $hero_data['author_name']; ?>
                        </p>
                        <p class="text-gray-400 text-[10px] font-bold uppercase tracking-wide mt-1">
                            <?php echo $hero_data['author_role']; ?>
                        </p>
                    </div>
                </div>

                <div class="hidden md:block w-px h-8 bg-gray-200"></div>

                <div class="text-gray-500 font-medium text-sm">
                    Published: <span class="text-gray-900 font-bold"><?php echo $hero_data['date']; ?></span>
                </div>

            </div>

        </div>
    </div>
</section>

<div id="progress-bar" 
     class="fixed top-0 left-0 <?php echo $progress_bar_height; ?> <?php echo $progress_bar_color; ?> <?php echo $progress_bar_zindex; ?> transition-all duration-150" 
     style="width: 0%">
</div>



<article class="py-12 lg:py-20 bg-[#b7b9bb] relative overflow-hidden">
    <div class="absolute inset-0 opacity-[0.05] pointer-events-none animate-pulse" 
         style="background-image: radial-gradient(#E31B23 0.5px, transparent 0.5px); background-size: 30px 30px;">
    </div>

    <div class="container mx-auto px-4 sm:px-6 relative z-10">
        <div class="max-w-5xl mx-auto">
            
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">
                
                <div class="hidden lg:block lg:col-span-1">
                    <div class="sticky top-32 flex flex-col items-center space-y-6">
                        <span class="text-[10px] font-bold text-gray-700 uppercase [writing-mode:vertical-lr] tracking-widest mb-4">Share Story</span>
                        
                        <a href="#" class="w-12 h-12 rounded-xl border border-gray-400 flex items-center justify-center text-gray-800 hover:bg-buimbRed-600 hover:text-white hover:border-buimbRed-600 hover:rotate-12 transition-all duration-300 shadow-sm">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                        </a>
                        <a href="#" class="w-12 h-12 rounded-xl border border-gray-400 flex items-center justify-center text-gray-800 hover:bg-buimbRed-600 hover:text-white hover:border-buimbRed-600 hover:-rotate-12 transition-all duration-300 shadow-sm">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-11">
                    
                    <div class="labrix-reveal active mb-12 lg:mb-16 relative group">
                        <div class="absolute -inset-4 border border-buimbRed-600/20 rounded-[2.5rem] scale-95 group-hover:scale-100 transition-transform duration-700 hidden sm:block"></div>
                        <div class="relative rounded-3xl lg:rounded-[2rem] overflow-hidden shadow-2xl border-4 lg:border-[6px] border-white group-hover:shadow-red-500/20 transition-all duration-500">
                            <img src="<?php echo $content['featured_image']; ?>" 
                                 alt="Featured" class="w-full h-[300px] sm:h-[400px] lg:h-[550px] object-cover transition-transform duration-[2000ms] group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-gray-900/60 via-transparent to-transparent"></div>
                            
                            <div class="absolute bottom-4 left-4 sm:bottom-8 sm:left-8 bg-gray-900/30 backdrop-blur-md border border-white/20 p-3 sm:p-4 rounded-xl text-white">
                                <p class="text-[10px] sm:text-xs uppercase tracking-widest font-bold text-red-400">
                                    <?php echo $content['status_label']; ?>
                                </p>
                                <p class="font-bold text-sm sm:text-lg">
                                    <?php echo $content['status_text']; ?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="prose prose-lg lg:prose-xl max-w-none text-gray-900 leading-relaxed space-y-8 lg:space-y-12">
                        
                        <p class="labrix-reveal delay-100 text-2xl lg:text-3xl font-bold text-gray-900 border-l-4 lg:border-l-8 border-buimbRed-600 pl-6 lg:pl-10 leading-tight">
                            <?php echo $content['intro_quote']; ?>
                        </p>

                        <div class="labrix-reveal delay-200 group">
                            <h2 class="text-3xl lg:text-4xl font-extrabold text-gray-900 mb-4 lg:mb-6 flex flex-col sm:flex-row sm:items-center group-hover:translate-x-2 transition-transform duration-300">
                                <span class="text-buimbRed-600 mr-4 text-4xl lg:text-5xl opacity-20 group-hover:opacity-100 transition-opacity">01.</span> <?php echo $content['sec1_title']; ?>
                            </h2>
                            <p class="text-base lg:text-lg">
                                <?php echo $content['sec1_p1']; ?>
                            </p>
                            <p class="mt-4 text-base lg:text-lg">
                                <?php echo $content['sec1_p2']; ?>
                            </p>
                        </div>

                        <div class="labrix-reveal delay-300 relative py-10 px-8 lg:py-12 lg:px-14 bg-gray-900 rounded-3xl overflow-hidden group hover:-translate-y-2 transition-transform duration-500 shadow-2xl">
                            <div class="absolute -right-20 -top-20 w-64 h-64 bg-buimbRed-600 rounded-full opacity-10 blur-3xl group-hover:scale-150 transition-transform duration-1000"></div>
                            <div class="absolute top-0 right-0 p-6 opacity-10 group-hover:opacity-20 transition-opacity rotate-12">
                                <svg class="w-24 h-24 lg:w-32 lg:h-32 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21L14.017 18C14.017 14.691 16.708 12 20.017 12L20.017 10C16.151 10 13.017 13.134 13.017 17L13.017 21L14.017 21ZM5.017 21L5.017 18C5.017 14.691 7.708 12 11.017 12L11.017 10C7.151 10 4.017 13.134 4.017 17L4.017 21L5.017 21Z"/></svg>
                            </div>
                            <p class="text-xl lg:text-2xl italic text-white font-light relative z-10 leading-relaxed">
                                <?php echo $content['quote_text']; ?>
                            </p>
                            <div class="flex flex-col sm:flex-row sm:items-center gap-4 mt-8">
                                <div class="w-12 h-1 border-t-2 border-buimbRed-600"></div>
                                <p class="text-buimbRed-600 font-bold uppercase tracking-widest text-xs"><?php echo $content['quote_author']; ?></p>
                            </div>
                        </div>

                        <div class="labrix-reveal delay-100 group">
                            <h2 class="text-3xl lg:text-4xl font-extrabold text-gray-900 mb-4 lg:mb-6 flex flex-col sm:flex-row sm:items-center group-hover:translate-x-2 transition-transform duration-300">
                                <span class="text-buimbRed-600 mr-4 text-4xl lg:text-5xl opacity-20 group-hover:opacity-100 transition-opacity">02.</span> <?php echo $content['sec2_title']; ?>
                            </h2>
                            <p class="text-base lg:text-lg">
                                <?php echo $content['sec2_p1']; ?>
                            </p>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 my-12 lg:my-16 labrix-reveal delay-200">
                            
                            <div class="p-6 sm:p-8 lg:p-10 rounded-3xl lg:rounded-[2rem] bg-gray-100 border border-gray-200 hover:border-buimbRed-600 hover:bg-gray-50 hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 group relative overflow-hidden">
                                <div class="absolute top-0 right-0 w-24 h-24 bg-gray-200 rounded-bl-[4rem] transition-colors group-hover:bg-red-50"></div>
                                <div class="relative z-10">
                                    <div class="w-14 h-14 lg:w-16 lg:h-16 bg-white rounded-2xl shadow-sm flex items-center justify-center mb-6 lg:mb-8 group-hover:bg-buimbRed-600 group-hover:rotate-6 transition-all duration-300">
                                        <svg class="w-6 h-6 lg:w-8 lg:h-8 text-buimbRed-600 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                                    </div>
                                    <h4 class="font-black text-gray-900 mb-4 lg:mb-6 uppercase tracking-tighter text-lg lg:text-xl group-hover:text-buimbRed-600 transition-colors">Core Tech Stack</h4>
                                    <ul class="space-y-3 lg:space-y-4 text-sm font-bold text-gray-800">
                                        <?php 
                                        $delay = 75;
                                        foreach($content['tech_stack'] as $tech): 
                                        ?>
                                            <li class="flex items-center transform group-hover:translate-x-2 transition-transform duration-300 delay-<?php echo $delay; ?>">
                                                <span class="w-2 h-2 bg-buimbRed-600 rounded-full mr-3"></span> 
                                                <?php echo $tech; ?>
                                            </li>
                                        <?php 
                                            $delay += 75; 
                                        endforeach; 
                                        ?>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="p-6 sm:p-8 lg:p-10 rounded-3xl lg:rounded-[2rem] bg-gradient-to-br from-buimbRed-600 to-red-700 text-white shadow-xl hover:shadow-red-300/50 hover:scale-[1.02] transition-all duration-500 relative overflow-hidden">
                                <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10"></div>
                                <div class="w-14 h-14 lg:w-16 lg:h-16 bg-white/10 backdrop-blur-sm rounded-2xl flex items-center justify-center mb-6 lg:mb-8 border border-white/20">
                                    <svg class="w-6 h-6 lg:w-8 lg:h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                </div>
                                <h4 class="font-black mb-4 uppercase tracking-tighter text-lg lg:text-xl">Research Hub</h4>
                                <p class="font-medium text-red-100 opacity-90 leading-relaxed text-base lg:text-lg">
                                    BUIMB Research Facility - Wing B <br> 
                                    Advanced Robotics Sector 4 <br>
                                    Global Innovation Hub
                                </p>
                            </div>
                        </div>

                        <div class="labrix-reveal delay-100 mt-16 group">
                            <h2 class="text-3xl lg:text-4xl font-extrabold text-gray-900 mb-4 lg:mb-6 flex flex-col sm:flex-row sm:items-center group-hover:translate-x-2 transition-transform duration-300">
                                <span class="text-buimbRed-600 mr-4 text-4xl lg:text-5xl opacity-20 group-hover:opacity-100 transition-opacity">03.</span> <?php echo $content['sec3_title']; ?>
                            </h2>
                            <p class="text-base lg:text-lg mb-8">
                                <?php echo $content['sec3_p1']; ?>
                            </p>
                            
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12" id="stats-section">
                                <?php foreach($stats_grid as $stat): ?>
                                    <div class="relative group p-8 rounded-3xl bg-white/20 backdrop-blur-md border border-white/30 shadow-lg hover:shadow-red-500/20 transition-all duration-500 hover:-translate-y-2 overflow-hidden">
                                        <div class="absolute inset-0 bg-gradient-to-tr from-white/40 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                                        
                                        <div class="relative z-10 text-center">
                                            <div class="text-buimbRed-600 font-black text-4xl lg:text-5xl mb-2 flex justify-center items-baseline">
                                                <?php if($stat['type'] == 'number'): ?>
                                                    <?php if(isset($stat['prefix'])) echo '<span class="text-3xl mr-1">'.$stat['prefix'].'</span>'; ?>
                                                    <span class="counter" data-target="<?php echo $stat['value']; ?>" data-speed="<?php echo $stat['speed']; ?>" data-decimals="<?php echo isset($stat['decimals']) ? $stat['decimals'] : 0; ?>">0</span>
                                                    <span class="text-3xl"><?php echo $stat['symbol']; ?></span>
                                                <?php else: ?>
                                                    <?php echo $stat['value']; ?>
                                                <?php endif; ?>
                                            </div>
                                            <div class="text-gray-800 font-bold text-xs uppercase tracking-widest group-hover:text-gray-900 transition-colors">
                                                <?php echo $stat['label']; ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <div class="overflow-x-auto rounded-2xl border border-gray-300 mb-12 shadow-sm">
                            <table class="w-full text-left border-collapse min-w-[600px]">
                                <thead>
                                    <tr class="bg-gray-200 border-b border-gray-300 text-xs uppercase tracking-widest text-gray-800">
                                        <th class="p-4 lg:p-6 font-bold">Metric</th>
                                        <th class="p-4 lg:p-6 font-bold">Current Gen (2024)</th>
                                        <th class="p-4 lg:p-6 font-bold text-buimbRed-600">Next Gen (Target 2026)</th>
                                    </tr>
                                </thead>
                                <tbody class="text-sm font-medium text-gray-900">
                                    <?php foreach($comparison_table as $row): ?>
                                    <tr class="border-b border-gray-300 hover:bg-red-50 transition-colors bg-gray-50 last:border-b-0">
                                        <td class="p-4 lg:p-6"><?php echo $row['metric']; ?></td>
                                        <td class="p-4 lg:p-6"><?php echo $row['current']; ?></td>
                                        <td class="p-4 lg:p-6 font-bold text-gray-900"><?php echo $row['next']; ?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>

                    </div>

                    <div class="mt-12 lg:mt-20 pt-8 lg:pt-12 border-t border-gray-400 labrix-reveal delay-100">
                        <div class="flex flex-col md:flex-row md:items-center justify-between gap-6 mb-12">
                            <div class="flex flex-wrap gap-2 lg:gap-3">
                                <?php foreach($tags as $tag): ?>
                                <a href="#" class="px-5 py-2 lg:px-6 bg-gray-800 border border-transparent rounded-full text-[10px] font-black uppercase text-gray-300 hover:bg-buimbRed-600 hover:text-white transition-all duration-300 shadow-sm">
                                    <?php echo $tag; ?>
                                </a>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <div class="p-8 lg:p-12 rounded-[2rem] lg:rounded-[3rem] bg-gray-900 text-white flex flex-col md:flex-row items-center gap-6 lg:gap-10 relative overflow-hidden shadow-2xl group">
                            <div class="absolute top-0 right-0 w-64 h-64 bg-buimbRed-600 rotate-45 translate-x-32 -translate-y-32 opacity-80 group-hover:translate-x-24 transition-transform duration-700"></div>
                            <div class="absolute bottom-0 left-0 w-32 h-32 bg-blue-600 rounded-full blur-3xl opacity-20 group-hover:opacity-40 transition-opacity duration-1000"></div>
                            
                            <div class="w-24 h-24 lg:w-28 lg:h-28 rounded-full overflow-hidden border-4 border-buimbRed-600 flex-shrink-0 shadow-lg relative z-10 group-hover:scale-110 transition-transform duration-500">
                                <img src="<?php echo $author['image']; ?>" alt="Author" class="w-full h-full object-cover">
                            </div>
                            
                            <div class="text-center md:text-left relative z-10">
                                <p class="text-buimbRed-600 font-black uppercase text-[10px] tracking-widest mb-2">Article By</p>
                                <h4 class="text-2xl lg:text-3xl font-bold mb-3"><?php echo $author['name']; ?></h4>
                                <p class="text-gray-400 text-sm leading-relaxed max-w-xl">
                                    <?php echo $author['bio']; ?>
                                </p>
                                <div class="mt-6 flex justify-center md:justify-start gap-4">
                                     <button class="text-xs font-bold text-white border-b border-buimbRed-600 hover:text-buimbRed-600 transition-colors">View Profile</button>
                                     <button class="text-xs font-bold text-white border-b border-buimbRed-600 hover:text-buimbRed-600 transition-colors">All Articles</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</article>



<?php include "footer.php"; ?>

<script src="robolab.js"></script>
<script src="main.js"></script>