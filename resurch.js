        // our innovtion 
          // Progress Bars Animation
        document.addEventListener('DOMContentLoaded', () => {
            const progressSection = document.getElementById('innovation');
            const progressBars = document.querySelectorAll('.progress-bar');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        progressBars.forEach(bar => {
                            const width = bar.getAttribute('data-width');
                            bar.style.width = width;
                        });
                    }
                });
            }, { threshold: 0.3 });

            if(progressSection) observer.observe(progressSection);
        });

        // Image Modal Logic
        function openImageModal(src) {
            const modal = document.getElementById('image-modal');
            const modalImg = document.getElementById('modal-img');
            
            modalImg.src = src;
            modal.classList.remove('hidden');
            
            // Small delay to allow display:block to apply before opacity transition
            setTimeout(() => {
                modal.classList.remove('opacity-0');
                modalImg.classList.remove('scale-95');
                modalImg.classList.add('scale-100');
            }, 10);
        }

        function closeImageModal() {
            const modal = document.getElementById('image-modal');
            const modalImg = document.getElementById('modal-img');

            modal.classList.add('opacity-0');
            modalImg.classList.remove('scale-100');
            modalImg.classList.add('scale-95');

            setTimeout(() => {
                modal.classList.add('hidden');
            }, 300);
        }
document.addEventListener('DOMContentLoaded', () => {
        
        // Select all elements with 'count-up' class
        const counters = document.querySelectorAll('.count-up');
        
        // Function to perform the counting animation
        const runCounter = (el) => {
            const target = +el.getAttribute('data-target'); // Target number (e.g. 250)
            const duration = 2000; // Animation duration in ms (2 seconds)
            const frameDuration = 1000 / 60; // 60 FPS
            const totalFrames = Math.round(duration / frameDuration);
            const increment = target / totalFrames;
            
            let currentNumber = 0;
            let frame = 0;

            const counterInterval = setInterval(() => {
                frame++;
                currentNumber += increment;
                
                if (frame >= totalFrames) {
                    el.innerText = target; // Ensure it ends exactly on target
                    clearInterval(counterInterval);
                } else {
                    el.innerText = Math.ceil(currentNumber);
                }
            }, frameDuration);
        };

        // Observer to trigger animation ONLY when visible
        const observerOptions = { threshold: 0.5 }; // Trigger when 50% visible
        
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counter = entry.target;
                    runCounter(counter);
                    observer.unobserve(counter); // Run only once
                }
            });
        }, observerOptions);

        // Start observing each counter
        counters.forEach(counter => {
            observer.observe(counter);
        });
    });