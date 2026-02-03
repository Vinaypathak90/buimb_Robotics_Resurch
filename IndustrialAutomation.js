
// 3. Challenge Section Interaction
        function setActiveItem(clickedItem) {
            const allItems = document.querySelectorAll('.objective-item');
            allItems.forEach(item => {
                item.classList.remove('bg-red-50', 'border-red-200', 'shadow-md');
                item.classList.add('border-transparent');
                
                const iconBox = item.querySelector('.icon-box');
                if(iconBox) {
                    iconBox.classList.remove('bg-buimbRed-600', 'text-white');
                    iconBox.classList.add('bg-gray-100', 'text-gray-400');
                }

                const text = item.querySelector('.text-content');
                if(text) {
                    text.classList.remove('text-buimbDark', 'font-bold');
                    text.classList.add('text-gray-500');
                }
            });

            clickedItem.classList.remove('border-transparent');
            clickedItem.classList.add('bg-red-50', 'border-red-200', 'shadow-md');

            const activeIcon = clickedItem.querySelector('.icon-box');
            if(activeIcon) {
                activeIcon.classList.remove('bg-gray-100', 'text-gray-400');
                activeIcon.classList.add('bg-buimbRed-600', 'text-white');
            }

            const activeText = clickedItem.querySelector('.text-content');
            if(activeText) {
                activeText.classList.remove('text-gray-500');
                activeText.classList.add('text-buimbDark', 'font-bold');
            }
        }

        // 4. Methodology Section Interaction
        function activateStep(clickedCard) {
            const allCards = document.querySelectorAll('.step-card');
            allCards.forEach(card => {
                card.classList.remove('border-buimbRed-600', 'ring-1', 'ring-red-100');
                card.classList.add('border-gray-200');
                
                const line = card.querySelector('.active-line');
                if(line) {
                    line.classList.remove('scale-x-100');
                    line.classList.add('scale-x-0');
                }

                const icon = card.querySelector('.step-icon');
                if(icon) {
                    icon.classList.remove('bg-buimbRed-600', 'text-white');
                    icon.classList.add('bg-red-50', 'text-buimbRed-600');
                }
            });

            clickedCard.classList.remove('border-gray-200');
            clickedCard.classList.add('border-buimbRed-600', 'ring-1', 'ring-red-100');

            const activeLine = clickedCard.querySelector('.active-line');
            if(activeLine) {
                activeLine.classList.remove('scale-x-0');
                activeLine.classList.add('scale-x-100');
            }

            const activeIcon = clickedCard.querySelector('.step-icon');
            if(activeIcon) {
                activeIcon.classList.remove('bg-red-50', 'text-buimbRed-600');
                activeIcon.classList.add('bg-buimbRed-600', 'text-white');
            }
        }

        // 5. Technical Specs Interaction (NEW ADDITION)
        function toggleSpec(row) {
            // Remove active class from all other rows
            document.querySelectorAll('.spec-row').forEach(r => {
                if (r !== row) {
                    r.classList.remove('bg-white', 'shadow-md', 'border-l-4', 'border-l-buimbRed-600', 'pl-4');
                    r.classList.add('border-b', 'border-gray-200');
                    
                    const checkIcon = r.querySelector('.check-icon');
                    if(checkIcon) {
                        checkIcon.classList.remove('opacity-100', 'scale-100');
                        checkIcon.classList.add('opacity-0', 'scale-0');
                    }
                }
            });

            // Toggle active class on clicked row
            if (row.classList.contains('shadow-md')) {
                // Deactivate if already active
                row.classList.remove('bg-white', 'shadow-md', 'border-l-4', 'border-l-buimbRed-600', 'pl-4');
                row.classList.add('border-b');
                
                const checkIcon = row.querySelector('.check-icon');
                if(checkIcon) {
                    checkIcon.classList.remove('opacity-100', 'scale-100');
                    checkIcon.classList.add('opacity-0', 'scale-0');
                }
            } else {
                // Activate
                row.classList.add('bg-white', 'shadow-md', 'border-l-4', 'border-l-buimbRed-600', 'pl-4');
                row.classList.remove('border-b'); 
                
                const checkIcon = row.querySelector('.check-icon');
                if(checkIcon) {
                    checkIcon.classList.remove('opacity-0', 'scale-0');
                    checkIcon.classList.add('opacity-100', 'scale-100');
                }
            }
        }
function toggleSpec(row) {
        // Remove active class from all other rows
        document.querySelectorAll('.spec-row').forEach(r => {
            if (r !== row) {
                r.classList.remove('bg-white', 'shadow-md', 'border-l-4', 'border-l-buimbRed-600', 'pl-4');
                r.classList.add('border-b', 'border-gray-200');
                
                const checkIcon = r.querySelector('.check-icon');
                if(checkIcon) {
                    checkIcon.classList.remove('opacity-100', 'scale-100');
                    checkIcon.classList.add('opacity-0', 'scale-0');
                }
            }
        });

        // Toggle active class on clicked row
        if (row.classList.contains('shadow-md')) {
            // Deactivate if already active
            row.classList.remove('bg-white', 'shadow-md', 'border-l-4', 'border-l-buimbRed-600', 'pl-4');
            row.classList.add('border-b');
            
            const checkIcon = row.querySelector('.check-icon');
            if(checkIcon) {
                checkIcon.classList.remove('opacity-100', 'scale-100');
                checkIcon.classList.add('opacity-0', 'scale-0');
            }
        } else {
            // Activate
            row.classList.add('bg-white', 'shadow-md', 'border-l-4', 'border-l-buimbRed-600', 'pl-4');
            row.classList.remove('border-b'); 
            
            const checkIcon = row.querySelector('.check-icon');
            if(checkIcon) {
                checkIcon.classList.remove('opacity-0', 'scale-0');
                checkIcon.classList.add('opacity-100', 'scale-100');
            }
        }
    }
