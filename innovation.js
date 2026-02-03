
document.addEventListener('DOMContentLoaded', () => {
            const viewAllBtn = document.getElementById('view-all-btn');
            
            if (viewAllBtn) {
                viewAllBtn.addEventListener('click', () => {
                    // Logic: Toggle the 'md:hidden' class on the extra blogs
                    const hiddenBlogs = document.querySelectorAll('.hidden-blog');
                    
                    hiddenBlogs.forEach(blog => {
                        // If it has md:hidden, remove it (Show it on Desktop)
                        if (blog.classList.contains('md:hidden')) {
                            blog.classList.remove('md:hidden');
                            blog.classList.add('labrix-reveal', 'slide-up', 'active'); // Add animation
                        } else {
                            // If it's visible, hide it again (Collapse)
                            blog.classList.add('md:hidden');
                        }
                    });

                    // Update Button Text
                    const isExpanded = !hiddenBlogs[0].classList.contains('md:hidden');
                    viewAllBtn.innerHTML = isExpanded 
                        ? 'Show Less <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2 transform rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>'
                        : 'View All Blogs <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>';
                });
            }
        });