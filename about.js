
        // 1. Mobile Menu
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        if (mobileMenuBtn && mobileMenu) {
            mobileMenuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }

        // 2. Scroll Reveal Animation
        document.addEventListener('DOMContentLoaded', () => {
            const revealElements = document.querySelectorAll('.labrix-reveal');
            const observer = new IntersectionObserver((entries, obs) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                        obs.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.15 });

            revealElements.forEach(el => observer.observe(el));
        });

        // 3. Counter Animation
        document.addEventListener('DOMContentLoaded', () => {
            const animateCounter = (el) => {
                const target = +el.getAttribute('data-target');
                const duration = 2000; 
                const increment = target / (duration / 16); 
                let current = 0;
                const updateCount = () => {
                    current += increment;
                    if (current < target) {
                        el.innerText = Math.ceil(current);
                        requestAnimationFrame(updateCount);
                    } else {
                        el.innerText = target;
                    }
                };
                updateCount();
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const counters = entry.target.querySelectorAll('.count-up');
                        counters.forEach(counter => animateCounter(counter));
                        observer.unobserve(entry.target); 
                    }
                });
            }, { threshold: 0.5 });

            const statsSection = document.querySelector('section.bg-buimbRed-50'); // Stats section
            if(statsSection) observer.observe(statsSection);
        });
// --- 2. NUMBER COUNTER ENGINE (0 to 15+) ---
        const counters = document.querySelectorAll('.count-up');
        
        const animateCounter = (el) => {
            const target = +el.getAttribute('data-target'); // Get target number (e.g. 15)
            const duration = 2000; // Animation lasts 2 seconds
            const increment = target / (duration / 16); // 60 FPS calculation
            
            let current = 0;
            const updateCount = () => {
                current += increment;
                if (current < target) {
                    el.innerText = Math.ceil(current);
                    requestAnimationFrame(updateCount);
                } else {
                    el.innerText = target; // Ensure exact finish
                }
            };
            updateCount();
        };

        const counterObserver = new IntersectionObserver((entries, obs) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counterEl = entry.target;
                    animateCounter(counterEl);
                    obs.unobserve(counterEl); // Run only once
                }
            });
        }, { threshold: 0.5 }); // Trigger when 50% visible

        counters.forEach(counter => counterObserver.observe(counter));
// leadership 
document.addEventListener('DOMContentLoaded', () => {
            const teamBtn = document.getElementById('view-team-btn');
            const btnText = document.getElementById('team-btn-text');
            const btnIcon = document.getElementById('team-btn-icon');
            const hiddenMembers = document.querySelectorAll('.team-hidden');
            
            let isTeamExpanded = false;

            if (teamBtn) {
                teamBtn.addEventListener('click', () => {
                    isTeamExpanded = !isTeamExpanded;

                    hiddenMembers.forEach(member => {
                        if (isTeamExpanded) {
                            // Show Members
                            member.classList.remove('md:hidden');
                            // Trigger animation
                            member.classList.add('active'); 
                        } else {
                            // Hide Members
                            member.classList.add('md:hidden');
                        }
                    });

                    // Update Button
                    if (isTeamExpanded) {
                        btnText.innerText = "Show Less Team";
                        btnIcon.classList.add('rotate-180');
                    } else {
                        btnText.innerText = "View All Team";
                        btnIcon.classList.remove('rotate-180');
                        // Scroll back to top of team section if closing
                        document.getElementById('team-section').scrollIntoView({ behavior: 'smooth' });
                    }
                });
            }
        });   
function scrollTestimonials(direction) {
            const container = document.getElementById('testimonial-scroll');
            // Adjusted scroll amount slightly for better snapping
            const scrollAmount = container.offsetWidth * 0.8; 
            if (direction === 'left') {
                container.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
            } else {
                container.scrollBy({ left: scrollAmount, behavior: 'smooth' });
            }
      
        }

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
