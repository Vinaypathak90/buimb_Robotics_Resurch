
        window.onscroll = function() {
            var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            var scrolled = (winScroll / height) * 100;
            document.getElementById("progress-bar").style.width = scrolled + "%";
        };


        document.addEventListener("DOMContentLoaded", () => {
        const counters = document.querySelectorAll('.counter');
        
        // Function to animate numbers
        const animateCounter = (counter) => {
            const target = +counter.getAttribute('data-target');
            const speed = +counter.getAttribute('data-speed') || 2000; // Duration in ms
            const decimals = +counter.getAttribute('data-decimals') || 0;
            
            let startTime = null;

            const updateCount = (currentTime) => {
                if (!startTime) startTime = currentTime;
                const progress = currentTime - startTime;
                
                // Calculate current value based on progress/speed
                const current = Math.min(target, (progress / speed) * target);
                
                // Formatting (integers vs floats)
                counter.innerText = current.toFixed(decimals);

                if (progress < speed) {
                    requestAnimationFrame(updateCount);
                } else {
                    counter.innerText = target.toFixed(decimals); // Ensure final value is exact
                }
            };

            requestAnimationFrame(updateCount);
        };

        // Intersection Observer to start animation when scrolled into view
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counter = entry.target;
                    animateCounter(counter);
                    observer.unobserve(counter); // Only run once
                }
            });
        }, { threshold: 0.5 }); // Start when 50% visible

        counters.forEach(counter => {
            observer.observe(counter);
        });
    });