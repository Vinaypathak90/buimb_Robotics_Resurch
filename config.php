<?php
// config.php

// Define the site name
define('SITE_NAME', 'BUIMB Robotics');

// Define Navigation Items (Name => URL)
$navItems = [
    'Home'     => 'index.php',
    'Research' => 'research.php',
    'Blog'     => 'innovation.php',
    'About'    => 'about.php',
    'Papers'   => 'papers.php'
];

/**
 * Helper function to determine if a link is active
 */
function isActive($url) {
    $current_page = basename($_SERVER['PHP_SELF']);
    return ($current_page == $url) ? true : false;
}
?>