        // 1. Mobile Menu Logic
// Function define kar rahe hain kyunki HTML mein onclick="toggleMenu()" likha hai
function toggleMenu() {
    // 1. Mobile Menu element ko dhundo
    const mobileMenu = document.getElementById('mobile-menu');

    // 2. Check karo ki element mila ya nahi
    if (mobileMenu) {
        // 3. 'hidden' class ko toggle karo (dikhao/chupao)
        mobileMenu.classList.toggle('hidden');
    } else {
        console.error("Error: 'mobile-menu' id wala element nahi mila!");
    }
}

        // 2. Main Observer (Handles BOTH Scroll Reveal & Counters)
        document.addEventListener('DOMContentLoaded', () => {
            const revealElements = document.querySelectorAll('.labrix-reveal');
            
            const observer = new IntersectionObserver((entries, obs) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        // A. Trigger CSS Reveal Animation
                        entry.target.classList.add('active');
                        
                        // B. Check if there are counters inside this specific element
                        const counters = entry.target.querySelectorAll('.count-up');
                        if(counters.length > 0) {
                            counters.forEach(counter => animateCounter(counter));
                        }
                        
                        // C. Stop observing to save performance
                        obs.unobserve(entry.target);
                    }
                });
            }, { 
                threshold: 0.15, // Trigger when 15% visible
                rootMargin: "0px 0px -50px 0px" 
            });

            revealElements.forEach(el => observer.observe(el));
        });

        // 3. Counter Animation Logic
        const animateCounter = (el) => {
            const target = +el.getAttribute('data-target');
            const duration = 2000; // 2 seconds animation
            const increment = target / (duration / 16); // 60 FPS
            
            let current = 0;
            const updateCount = () => {
                current += increment;
                if (current < target) {
                    el.innerText = Math.ceil(current);
                    requestAnimationFrame(updateCount);
                } else {
                    el.innerText = target; // Finish exactly on target
                }
            };
            updateCount();
        };
document.addEventListener('DOMContentLoaded', () => {
            
            // Function to animate the counter
            const animateCounter = (el) => {
                const target = +el.getAttribute('data-target'); // Get the target number
                const duration = 2000; // Animation duration in ms (2 seconds)
                const increment = target / (duration / 16); // Calculate increment per frame (60fps)
                
                let current = 0;

                const updateCount = () => {
                    current += increment;
                    if (current < target) {
                        el.innerText = Math.ceil(current);
                        requestAnimationFrame(updateCount);
                    } else {
                        el.innerText = target; // Ensure it ends exactly on target
                    }
                };

                updateCount();
            };

            // Observer to trigger animation when section is visible
            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const counters = entry.target.querySelectorAll('.count-up');
                        counters.forEach(counter => animateCounter(counter));
                        observer.unobserve(entry.target); // Run only once
                    }
                });
            }, { threshold: 0.5 }); // Trigger when 50% of the section is visible

            // Observe the section containing counters
            const section = document.querySelector('section');
            if(section) observer.observe(section);
        });

// --- FAQ ACCORDION LOGIC ---
   // 1. Accordion Toggle Logic (Updated for Robustness)
        function toggleFaq(button) {
            const item = button.parentElement;
            const content = item.querySelector('.faq-content');
            const icon = item.querySelector('.icon-wrapper');
            const isOpen = content.style.maxHeight && content.style.maxHeight !== '0px';

            // Close other items
            document.querySelectorAll('.faq-item').forEach(otherItem => {
                otherItem.querySelector('.faq-content').style.maxHeight = '0px';
                otherItem.querySelector('.faq-content').style.paddingBottom = '0px';
                const otherIcon = otherItem.querySelector('.icon-wrapper');
                if(otherIcon) otherIcon.classList.remove('rotate-180');
                
                // Reset styles
                otherItem.classList.remove('border-buimbRed-600', 'ring-1', 'ring-red-100');
                otherItem.classList.add('border-gray-200');
            });

            // Toggle current
            if (!isOpen) {
                content.style.maxHeight = content.scrollHeight + "px";
                content.style.paddingBottom = "24px";
                if(icon) icon.classList.add('rotate-180');
                item.classList.remove('border-gray-200');
                item.classList.add('border-buimbRed-600', 'ring-1', 'ring-red-100');
            } else {
                content.style.maxHeight = '0px';
                content.style.paddingBottom = '0px';
                if(icon) icon.classList.remove('rotate-180');
                item.classList.remove('border-buimbRed-600', 'ring-1', 'ring-red-100');
                item.classList.add('border-gray-200');
            }
        }

        // 2. View All FAQs Button Logic
        document.addEventListener('DOMContentLoaded', () => {
            const viewAllBtn = document.getElementById('view-all-faqs-btn');
            const icon = document.getElementById('view-all-icon');
            
            if (viewAllBtn) {
                viewAllBtn.addEventListener('click', (e) => {
                    e.preventDefault(); // Prevent jump to top
                    const hiddenItems = document.querySelectorAll('.faq-extra');
                    
                    // Check if items are currently hidden
                    const isHidden = hiddenItems[0].classList.contains('hidden');

                    hiddenItems.forEach(item => {
                        if (isHidden) {
                            item.classList.remove('hidden');
                            item.classList.add('slide-up'); // Add animation class if you have it
                        } else {
                            item.classList.add('hidden');
                        }
                    });

                    // Update Button Text & Icon
                    if (isHidden) {
                        viewAllBtn.innerHTML = `View Less FAQs <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2 rotate-180 transform transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7-7 7m7-7H3" /></svg>`;
                    } else {
                        viewAllBtn.innerHTML = `View All FAQs <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2 transform transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7-7 7m7-7H3" /></svg>`;
                    }
                });
            }
        });
        // 3. View All Blogs Button Logic
        

    document.addEventListener('DOMContentLoaded', () => {
        const viewAllBlogsBtn = document.getElementById('view-all-blogs-btn');
        
        if (viewAllBlogsBtn) {
            viewAllBlogsBtn.addEventListener('click', () => {
                const hiddenBlogs = document.querySelectorAll('.hidden-blog');
                const btnText = document.getElementById('blog-btn-text');
                const btnIcon = document.getElementById('blog-btn-icon');
                
                // Check if currently hidden (based on first hidden item)
                const isHidden = hiddenBlogs[0].classList.contains('md:hidden');

                hiddenBlogs.forEach(blog => {
                    if (isHidden) {
                        blog.classList.remove('md:hidden');
                        blog.classList.add('labrix-reveal', 'slide-up', 'active'); // Add animation
                    } else {
                        blog.classList.add('md:hidden');
                    }
                });

                // Update Button Text & Icon
                if (isHidden) {
                    btnText.innerText = 'Show Less';
                    btnIcon.classList.add('rotate-180');
                } else {
                    btnText.innerText = 'View All Blogs';
                    btnIcon.classList.remove('rotate-180');
                    // Optional: Scroll back to top of section
                    document.getElementById('blog-section').scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        }
    });

document.addEventListener('DOMContentLoaded', () => {
        const exploreBtn = document.getElementById('explore-studies-btn');
        const container = document.getElementById('studies-container');
        const cards = document.querySelectorAll('.study-card');
        const btnText = document.getElementById('explore-btn-text');
        const btnIcon = document.getElementById('explore-btn-icon');

        let isGridMode = false;

        if (exploreBtn && container) {
            exploreBtn.addEventListener('click', (e) => {
                e.preventDefault();
                isGridMode = !isGridMode;

                if (isGridMode) {
                    // --- SWITCH TO GRID VIEW ---
                    
                    // 1. Remove Scroll classes
                    container.classList.remove('flex', 'overflow-x-auto', 'snap-x', 'snap-mandatory', 'gap-6');
                    
                    // 2. Add Grid classes
                    container.classList.add('grid', 'grid-cols-1', 'md:grid-cols-2', 'lg:grid-cols-3', 'gap-8');
                    
                    // 3. Fix Card Widths (Remove min-w constraints so they fit grid)
                    cards.forEach(card => {
                        card.classList.remove('min-w-[85vw]', 'md:min-w-[400px]', 'snap-center');
                    });

                    // 4. Update Button Text
                    btnText.innerText = "Show Less";
                    btnIcon.classList.add('rotate-180');

                } else {
                    // --- SWITCH BACK TO SCROLL VIEW ---
                    
                    // 1. Remove Grid classes
                    container.classList.remove('grid', 'grid-cols-1', 'md:grid-cols-2', 'lg:grid-cols-3', 'gap-8');
                    
                    // 2. Add Scroll classes
                    container.classList.add('flex', 'overflow-x-auto', 'snap-x', 'snap-mandatory', 'gap-6');

                    // 3. Add Width constraints back
                    cards.forEach(card => {
                        card.classList.add('min-w-[85vw]', 'md:min-w-[400px]', 'snap-center');
                    });

                    // 4. Update Button Text
                    btnText.innerText = "Explore All Studies";
                    btnIcon.classList.remove('rotate-180');
                }
            });
        }
    });

// ==========================================
    //  MISSING PART: CASE STUDIES TOGGLE LOGIC
    // ==========================================
    document.addEventListener('DOMContentLoaded', () => {
        const exploreBtn = document.getElementById('explore-studies-btn');
        const container = document.getElementById('studies-container');
        const cards = document.querySelectorAll('.study-card');
        const btnText = document.getElementById('explore-btn-text');
        const btnIcon = document.getElementById('explore-btn-icon');

        let isGridMode = false;

        if (exploreBtn && container) {
            exploreBtn.addEventListener('click', (e) => {
                e.preventDefault();
                isGridMode = !isGridMode;

                if (isGridMode) {
                    // --- 1. SWITCH TO GRID VIEW ---
                    // Remove Scroll classes
                    container.classList.remove('flex', 'overflow-x-auto', 'snap-x', 'snap-mandatory', 'gap-6');
                    // Add Grid classes
                    container.classList.add('grid', 'grid-cols-1', 'md:grid-cols-2', 'lg:grid-cols-3', 'gap-8');
                    
                    // Remove fixed width constraints from cards so they fit the grid
                    cards.forEach(card => {
                        card.classList.remove('min-w-[85vw]', 'md:min-w-[400px]', 'snap-center');
                    });

                    // Update Button Text
                    if(btnText) btnText.innerText = "Show Less";
                    if(btnIcon) btnIcon.classList.add('rotate-180');

                } else {
                    // --- 2. SWITCH BACK TO SCROLL VIEW ---
                    // Remove Grid classes
                    container.classList.remove('grid', 'grid-cols-1', 'md:grid-cols-2', 'lg:grid-cols-3', 'gap-8');
                    // Add Scroll classes
                    container.classList.add('flex', 'overflow-x-auto', 'snap-x', 'snap-mandatory', 'gap-6');

                    // Add fixed width constraints back
                    cards.forEach(card => {
                        card.classList.add('min-w-[85vw]', 'md:min-w-[400px]', 'snap-center');
                    });

                    // Update Button Text
                    if(btnText) btnText.innerText = "Explore All Studies";
                    if(btnIcon) btnIcon.classList.remove('rotate-180');
                }
            });
        }
    });
   
    