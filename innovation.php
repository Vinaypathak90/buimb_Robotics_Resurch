<?php

$page_title = isset($page_title) ? $page_title . ' | BUIMB Robotics' : 'BUIMB Robotics | BLOG Innovation & Power';

include "header.php";

?>
<?php
// --- BLOG SECTION CONFIGURATION ---
$blog_badge   = "Our Blog";
$blog_heading = "Stay updated with the latest in <br> <span class='text-buimbRed-600'>robotics research & innovation</span>";
$view_all_btn = "View All Blogs";

// Blog Posts Data
$blog_posts = [
    [
        'title' => 'Inside a Robotics Research Lab: Building Intelligent Machines',
        'date'  => 'Sep 12, 2025',
        'image' => 'assets/roboticslab.jpg', // Local image
        'link'  => 'robolab.php',
        'fallback' => 'https://images.unsplash.com/photo-1581094794320-c9146e01e7f8?q=80&w=800&auto=format&fit=crop'
    ],
    [
        'title' => 'Artificial Intelligence in Autonomous Robotic Systems',
        'date'  => 'Oct 05, 2025',
        'image' => 'https://images.unsplash.com/photo-1581092160562-40aa08e78837?q=80&w=800&auto=format&fit=crop',
        'link'  => 'ai-autonomous.php',
        'fallback' => ''
    ],
    [
        'title' => 'Industrial Robotics and the Future of Smart Factories',
        'date'  => 'Nov 20, 2025',
        'image' => 'assets/industrial.jpg',
        'link'  => 'industrial-future.php',
        'fallback' => 'https://images.unsplash.com/photo-1565514020176-892eb83b9c24?q=80&w=800&auto=format&fit=crop'
    ],
    // --- Posts below (Index 3+) are hidden initially ---
    [
        'title' => 'Autonomous Navigation: How Robots Understand the World',
        'date'  => 'Dec 01, 2025',
        'image' => 'assets/autonomus.jpg',
        'link'  => 'navigation.php',
        'fallback' => 'https://images.unsplash.com/photo-1485827404703-89b55fcc595e?q=80&w=800&auto=format&fit=crop'
    ],
    [
        'title' => 'Medical Robotics: Precision Technology in Healthcare',
        'date'  => 'Dec 15, 2025',
        'image' => 'https://images.unsplash.com/photo-1580983218765-f663bec07b37?q=80&w=800&auto=format&fit=crop',
        'link'  => 'medical-robotics.php',
        'fallback' => ''
    ],
    [
        'title' => 'Emerging Trends in Robotics and Industrial Automation',
        'date'  => 'Jan 10, 2026',
        'image' => 'https://images.unsplash.com/photo-1518152006812-edab29b069ac?q=80&w=800&auto=format&fit=crop',
        'link'  => 'trends.php',
        'fallback' => ''
    ]
];
?>

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
                <button id="view-all-btn" class="inline-flex items-center bg-buimbRed-600 text-white px-6 py-3 rounded-full font-bold text-sm transition-all duration-300 hover:bg-buimbDark hover:shadow-lg hover:-translate-y-1 group">
                    <?php echo $view_all_btn; ?>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
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
                // Logic: Hide posts after the 3rd one (Index 3, 4, 5...)
                // 'hidden-blog' is a marker for JS. 'md:hidden' hides them on desktop initially.
                $extraClass = ($index >= 3) ? 'hidden-blog md:hidden' : ''; 
            ?>
                <div class="min-w-[85vw] snap-center md:min-w-0 group cursor-pointer <?php echo $extraClass; ?>">
                    
                    <div class="relative overflow-hidden rounded-2xl mb-5 shadow-sm border border-gray-100">
                        <img src="<?php echo $post['image']; ?>"
                             onerror="this.src='<?php echo $post['fallback']; ?>'"
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


<?php
include "footer.php";
?>

<script src="innovation.js"></script>
<script src="main.js"   ></script>