<?php require("entetes/header.php"); ?>


    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
<style>
        .hero-bg {
            background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), 
                            url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="%230099ff" fill-opacity="0.5" d="M0,160L48,165.3C96,171,192,181,288,181.3C384,181,480,171,576,186.7C672,203,768,245,864,234.7C960,224,1056,160,1152,138.7C1248,117,1344,139,1392,149.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>');
            background-size: cover;
            background-position: center;
        }

        @keyframes typewriter {
            from { width: 0; }
            to { width: 100%; }
        }

        .typing-text {
            overflow: hidden;
            white-space: nowrap;
            animation: typewriter 4s steps(44) infinite;
        }

        .map-container {
            position: relative;
            background: #f8fafc;
            border-radius: 1rem;
            overflow: hidden;
            box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
        }

        .map-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            background: linear-gradient(180deg, rgba(255,255,255,0.9) 0%, rgba(255,255,255,0) 100%);
            padding: 2rem;
            z-index: 10;
        }

        .direction-steps {
            background: white;
            border-radius: 0.5rem;
            padding: 1rem;
            margin: 1rem 0;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body class="bg-gray-50">
    <main>
        <!-- Hero Section Amélioré -->
        <div class="hero-bg min-h-[600px] relative flex items-center justify-center">
            <div class="container mx-auto px-4 text-center text-white">
                <h1 class="text-5xl md:text-6xl font-bold mb-8">Nous Localiser</h1>
                
                <!-- Textes qui défilent -->
                <div class="space-y-4 mb-12">
                    <p class="typing-text text-xl md:text-2xl">Bienvenue chez Aequilex Partners</p>
                    <p class="typing-text text-xl md:text-2xl">Nous sommes présents dans plusieurs villes</p>
                    <p class="typing-text text-xl md:text-2xl">Trouvez le bureau le plus proche de chez vous</p>
                </div>

                <div class="flex flex-wrap justify-center gap-4">
                    <a href="#map" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-full transition duration-300 flex items-center">
                        <i class="icon ion-md-map mr-2"></i>
                        Voir la carte
                    </a>
                    <a href="#contact" class="bg-white hover:bg-gray-100 text-blue-600 px-8 py-3 rounded-full transition duration-300 flex items-center">
                        <i class="icon ion-md-call mr-2"></i>
                        Nous contacter
                    </a>
                </div>
            </div>
        </div>

        <!-- Section Carte Améliorée -->
        <div id="map" class="container mx-auto px-4 py-16">
            <div class="map-container">
                <div class="map-overlay">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Comment nous trouver ?</h2>
                    <p class="text-gray-600 mb-4">Suivez ces étapes simples pour nous rendre visite :</p>
                    
                    <div class="direction-steps">
                        <div class="flex items-center gap-4 mb-3">
                            <div class="bg-blue-600 text-white rounded-full w-8 h-8 flex items-center justify-center">1</div>
                            <p>Localisez le bureau le plus proche de chez vous sur la carte</p>
                        </div>
                        <div class="flex items-center gap-4 mb-3">
                            <div class="bg-blue-600 text-white rounded-full w-8 h-8 flex items-center justify-center">2</div>
                            <p>Cliquez sur le marqueur pour voir l'adresse exacte</p>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="bg-blue-600 text-white rounded-full w-8 h-8 flex items-center justify-center">3</div>
                            <p>Utilisez le bouton "Obtenir l'itinéraire" pour le trajet détaillé</p>
                        </div>
                    </div>
                </div>

                <div class="relative pt-[600px]">
                    <iframe 
                        class="absolute top-0 left-0 w-full h-full"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.8587677916214!2d15.3120183!3d-4.3115287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a6a33a428e3b6c3%3A0x2f23b6d8f6d63f0!2sAvenue%20Colonel%20Ebeya%2C%20Kinshasa%2C%20Democratic%20Republic%20of%20the%20Congo!5e0!3m2!1sen!2s!4v1652893456789!5m2!1sen!2s"
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

                <!-- Légende de la carte -->
                <div class="bg-white p-4 border-t">
                    <div class="flex flex-wrap gap-4 justify-center">
                        <div class="flex items-center gap-2">
                            <div class="w-4 h-4 rounded-full bg-blue-600"></div>
                            <span>Siège principal</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <div class="w-4 h-4 rounded-full bg-green-600"></div>
                            <span>Bureaux régionaux</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <div class="w-4 h-4 rounded-full bg-yellow-600"></div>
                            <span>Points de service</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        

    </main>

    <script>
        // Animation des textes qui défilent
        const texts = [
            "Bienvenue chez Aequilex Partners",
            "Nous sommes présents dans plusieurs villes",
            "Trouvez le bureau le plus proche de chez vous"
        ];
        let currentText = 0;

        function animateText() {
            const typingTexts = document.querySelectorAll('.typing-text');
            typingTexts.forEach(text => text.style.opacity = '0');
            typingTexts[currentText].style.opacity = '1';
            currentText = (currentText + 1) % texts.length;
        }

        setInterval(animateText, 4000);
    </script>



<body class="bg-gray-50">
    <main>

        <!-- Wave Divider -->
        <div class="wave-divider bg-white">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#f3f4f6" fill-opacity="1" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,112C672,96,768,96,864,106.7C960,117,1056,139,1152,144C1248,149,1344,139,1392,133.3L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
        </div>

        <!-- Section Contact -->
        <section id="contact" class="bg-gray-100 py-20">
            <div class="container mx-auto px-4">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-800 mb-4">Contactez-nous</h2>
                    <p class="text-gray-600 max-w-2xl mx-auto">Nous sommes là pour répondre à toutes vos questions. Choisissez le moyen de communication qui vous convient le mieux.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                    <!-- Carte Contact Direct -->
                    <div class="contact-card bg-white rounded-lg shadow-lg p-8 text-center">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                            <i class="icon ion-md-call text-2xl text-blue-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-4">Appelez-nous</h3>
                        <p class="text-gray-600 mb-4">Nous sommes disponibles du lundi au vendredi de 8h à 18h</p>
                        <a href="tel:+243000000000" class="text-blue-600 font-semibold hover:text-blue-800">+243 00 000 00 00</a>
                    </div>

                    <!-- Carte Email -->
                    <div class="contact-card bg-white rounded-lg shadow-lg p-8 text-center">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                            <i class="icon ion-md-mail text-2xl text-blue-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-4">Envoyez-nous un email</h3>
                        <p class="text-gray-600 mb-4">Nous vous répondrons dans les plus brefs délais</p>
                        <a href="mailto:contact@aequilex.com" class="text-blue-600 font-semibold hover:text-blue-800">contact@aequilex.com</a>
                    </div>

                    <!-- Carte Réseaux Sociaux -->
                    <div class="contact-card bg-white rounded-lg shadow-lg p-8 text-center">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                            <i class="icon ion-md-globe text-2xl text-blue-600"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-4">Réseaux sociaux</h3>
                        <p class="text-gray-600 mb-4">Suivez-nous pour rester informé</p>
                        <div class="flex justify-center space-x-4">
                            <a href="#" class="social-icon text-gray-600 hover:text-blue-600">
                                <i class="icon ion-logo-facebook text-2xl"></i>
                            </a>
                            <a href="#" class="social-icon text-gray-600 hover:text-blue-600">
                                <i class="icon ion-logo-twitter text-2xl"></i>
                            </a>
                            <a href="#" class="social-icon text-gray-600 hover:text-blue-600">
                                <i class="icon ion-logo-linkedin text-2xl"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Formulaire de Contact -->
                <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-8 bg-blue-600">
                            <h3 class="text-2xl font-bold text-white mb-4">Envoyez-nous un message</h3>
                            <p class="text-blue-100 mb-6">Remplissez le formulaire ci-contre et nous vous répondrons dans les plus brefs délais.</p>
                            <div class="space-y-4 text-blue-100">
                                <div class="flex items-center space-x-4">
                                    <i class="icon ion-md-pin text-xl"></i>
                                    <span>123 Avenue Colonel Ebeya, Kinshasa</span>
                                </div>
                                <div class="flex items-center space-x-4">
                                    <i class="icon ion-md-time text-xl"></i>
                                    <span>Lun-Ven: 8h-18h</span>
                                </div>
                            </div>
                        </div>
                        <div class="p-8">
                            <form class="space-y-6">
                                <div>
                                    <label class="block text-gray-700 mb-2" for="name">Nom complet</label>
                                    <input type="text" id="name" class="form-input w-full px-4 py-3 rounded-lg border border-gray-300" required>
                                </div>
                                <div>
                                    <label class="block text-gray-700 mb-2" for="email">Email</label>
                                    <input type="email" id="email" class="form-input w-full px-4 py-3 rounded-lg border border-gray-300" required>
                                </div>
                                <div>
                                    <label class="block text-gray-700 mb-2" for="message">Message</label>
                                    <textarea id="message" rows="4" class="form-input w-full px-4 py-3 rounded-lg border border-gray-300" required></textarea>
                                </div>
                                <button type="submit" class="w-full bg-blue-600 text-white py-3 px-6 rounded-lg hover:bg-blue-700 transition duration-300">
                                    Envoyer le message
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script>
        // Animation des textes qui défilent
        const texts = [
            "Bienvenue chez Aequilex Partners",
            "Nous sommes présents dans plusieurs villes",
            "Trouvez le bureau le plus proche de chez vous"
        ];
        let currentText = 0;

        function animateText() {
            const typingTexts = document.querySelectorAll('.typing-text');
            typingTexts.forEach(text => text.style.opacity = '0');
            typingTexts[currentText].style.opacity = '1';
            currentText = (currentText + 1) % texts.length;
        }

        setInterval(animateText, 4000);

        // Animation formulaire
        const formInputs = document.querySelectorAll('.form-input');
        formInputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('focused');
            });
            input.addEventListener('blur', function() {
                this.parentElement.classList.remove('focused');
            });
        });
    </script>
</body>
</html>



<?php require_once("entetes/footer.php"); ?>