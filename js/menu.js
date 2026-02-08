        const burgerMenu = document.getElementById('burgerMenu');
        const sidebar = document.getElementById('sidebar');
        const mobileOverlay = document.getElementById('mobileOverlay');

        function toggleMenu() {
            burgerMenu.classList.toggle('active');
            sidebar.classList.toggle('active');
            mobileOverlay.classList.toggle('active');
        }

        burgerMenu.addEventListener('click', toggleMenu);
        mobileOverlay.addEventListener('click', toggleMenu);

        document.querySelectorAll('.sidebar a').forEach(link => {
            link.addEventListener('click', () => {
                if (window.innerWidth <= 768) {
                    toggleMenu();
                }
            });
        });