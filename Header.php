
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// --- CONFIGURATION ---

// 1. Set the Page Title dynamically (Default if not set)
$page_title = isset($page_title) ? $page_title . ' | BUIMB Robotics' : 'BUIMB Robotics | Innovation & Power';

// 2. Define Navigation Links (Name => Filename)
$nav_links = [
    'Home'      => 'index.php',
    'Research'  => 'research.php',
    'Blog'      => 'innovation.php',
    'About'     => 'about.php',
    'Papers'    => 'papers.php'
];

// 3. Helper function to check active state
function getLinkClass($url) {
    $current_page = basename($_SERVER['PHP_SELF']);
    // If the link matches the current page, make it RED, otherwise GRAY
    if ($current_page == $url) {
        return "text-buimbRed-600";
    } else {
        return "text-buimbGray hover:text-buimbRed-600";
    }
}
?>  

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
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
                    animation: {
                        'slow-zoom': 'slowZoom 20s linear infinite alternate',
                        'float': 'float 6s ease-in-out infinite',
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                    },
                    keyframes: {
                        slowZoom: {
                            '0%': { transform: 'scale(1)' },
                            '100%': { transform: 'scale(1.15)' },
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-15px)' },
                        }
                    }
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style> 
        body { 
            font-family: 'Inter', sans-serif; 
            overflow-x: hidden; 
        }

        /* --- CUSTOM SCROLLBAR FOR SMOOTH FEEL --- */
        ::-webkit-scrollbar { width: 10px; }
        ::-webkit-scrollbar-track { background: #f1f1f1; }
        ::-webkit-scrollbar-thumb { background: #E31B23; border-radius: 5px; }
        ::-webkit-scrollbar-thumb:hover { background: #C4121A; }
        
        /* --- LABRIX STYLE ANIMATION ENGINE --- */
        .labrix-reveal {
            opacity: 0;
            transition: all 1.2s cubic-bezier(0.16, 1, 0.3, 1); 
            will-change: transform, opacity;
        }
        .labrix-reveal.active { opacity: 1; transform: translate(0, 0) scale(1); }
        .slide-down { transform: translateY(-60px); }
        .slide-up { transform: translateY(60px); }
        .slide-left { transform: translateX(100px); }
        .delay-100 { transition-delay: 100ms; }
        .delay-200 { transition-delay: 200ms; }
        .delay-300 { transition-delay: 300ms; }
        .delay-400 { transition-delay: 400ms; }
        .delay-500 { transition-delay: 500ms; }
    </style>

</head>
<body class="bg-white text-buimbDark selection:bg-buimbRed-600 selection:text-white">

<header class="bg-white/90 sticky top-0 z-50 border-b border-gray-100 backdrop-blur-lg transition-all duration-300" id="navbar">
    <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
        
<a href="index.php" class="flex items-center space-x-3 group">
    <div class="relative">
      <img src="/BUIMBROBO/assets/blogo.png"
             alt="Logo"
             class="h-10 w-auto object-contain relative z-10 transition-transform duration-500 group-hover:rotate-6"
             onerror="this.src='https://via.placeholder.com/150?text=Logo+Missing'"/> 
             <div class="absolute inset-0 bg-buimbRed-600 blur-xl opacity-0 group-hover:opacity-20 transition-opacity duration-500"></div>
    </div>
    <span class="text-xl font-extrabold tracking-tight text-buimbDark">
        BUIMB <span class="text-buimbRed-600">Robotics</span>
    </span>
</a>


        <div class="hidden lg:flex items-center space-x-8 text-sm font-semibold">
            <?php foreach ($nav_links as $name => $url): ?>
                <a href="<?php echo $url; ?>" class="<?php echo getLinkClass($url); ?> transition-colors duration-300">
                    <?php echo $name; ?>
                </a>
            <?php endforeach; ?>
        </div>

        <div class="hidden lg:block">
            <a href="Contact.php" class="relative overflow-hidden group bg-buimbRed-600 text-white px-6 py-2.5 rounded-full text-sm font-bold transition-all duration-300 ease-out hover:bg-buimbRed-700 hover:shadow-[0_4px_20px_rgba(227,27,35,0.3)] hover:-translate-y-0.5 active:scale-95 flex items-center">
                <span class="relative z-10">Partner With Us</span>
                <div class="absolute inset-0 h-full w-full scale-0 rounded-full transition-all duration-300 group-hover:scale-100 group-hover:bg-white/10"></div>
            </a>
        </div>

        <button id="mobile-menu-btn" onclick="toggleMenu()" class="lg:hidden text-gray-600 hover:text-buimbRed-600 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>
    </nav>

    <div id="mobile-menu" class="hidden lg:hidden bg-white border-t border-gray-100 p-6 flex flex-col space-y-4 shadow-2xl absolute w-full z-50">
        <?php foreach ($nav_links as $name => $url): ?>
            <a href="<?php echo $url; ?>" class="font-medium <?php echo getLinkClass($url); ?>">
                <?php echo $name; ?>
            </a>
        <?php endforeach; ?>
        <a href="Contact.php" class="bg-buimbRed-600 text-white text-center px-4 py-3 rounded-full w-full font-bold shadow-lg">Partner With Us</a>
    </div>
</header>

<script>
    function toggleMenu() {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    }
</script>
<script src="/main.js"></script>
</body>
</html>