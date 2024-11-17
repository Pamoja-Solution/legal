<?php require("entetes/header.php"); ?>



<!DOCTYPE html>
<html lang="fr">
<head>
   
    <style>
        .section-title {
            font-size: 2.5rem;
            margin-bottom: 2rem;
            color: #2d3092;
        }

        .card-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            opacity: 0;
            transform: translateY(50px);
            transition: all 0.8s ease-out;
        }

        .card-container.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .card {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .card-icon {
            font-size: 2.5rem;
            color: #2d3092;
            margin-bottom: 1rem;
        }

        .card h3 {
            color: #2d3092;
            margin-bottom: 1rem;
        }

        .about-details-cap {
            padding: 4rem 0;
            opacity: 0;
            transform: translateY(50px);
            transition: all 0.8s ease-out;
        }

        .about-details-cap.visible {
            opacity: 1;
            transform: translateY(0);
        }

        @media (max-width: 768px) {
            .card-container {
                grid-template-columns: 1fr;
            }
        }

        /* Animation de progression */
        .progress-indicator {
            position: fixed;
            top: 0;
            left: 0;
            width: 0;
            height: 4px;
            background: #2d3092;
            z-index: 1000;
            transition: width 0.3s ease;
        }
    </style>
</head>
<body>
    <div class="progress-indicator"></div>
    <!-- Votre HTML existant reste le même -->

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Observer pour les animations au défilement
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, {
                threshold: 0.1
            });

            // Observer tous les éléments avec la classe about-details-cap
            document.querySelectorAll('.about-details-cap').forEach(section => {
                observer.observe(section);
            });

            // Observer tous les éléments avec la classe card-container
            document.querySelectorAll('.card-container').forEach(container => {
                observer.observe(container);
            });

            // Barre de progression
            const progressBar = document.querySelector('.progress-indicator');
            window.addEventListener('scroll', () => {
                const windowHeight = window.innerHeight;
                const documentHeight = document.documentElement.scrollHeight - windowHeight;
                const scrolled = window.scrollY;
                const progress = (scrolled / documentHeight) * 100;
                progressBar.style.width = `${progress}%`;
            });
        });
    </script>
</body>
</html>




<?php require("entetes/footer.php"); ?>