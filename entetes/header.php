<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>


</head>
<body class="bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 min-h-screen py-12">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            light: '#1e4b8f',
                            DEFAULT: '#153968',
                            dark: '#0c2444'
                        },
                        accent: {
                            light: '#3b82f6',
                            DEFAULT: '#2563eb',
                            dark: '#1d4ed8'
                        }
                    }
                }
            }
        }
    </script>
    <style>
        .nav-gradient {
            background: linear-gradient(135deg, #153968 0%, #1e4b8f 100%);
        }
        
        .dropdown-gradient {
            background: linear-gradient(to bottom, #ffffff 0%, #f3f4f6 100%);
        }
    </style>
</head>
<body>
    <nav class="nav-gradient fixed w-full top-0 z-50 shadow-lg mb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20">
                <div class="flex items-center">
                    <a href="index.html" class="flex-shrink-0">
                        <img class="h-16 w-auto" src="assets/img/logo/logo3.png" alt="Logo">
                    </a>
                </div>

                <div class="hidden md:flex md:items-center md:space-x-8">
                    <a href="index.html" class="text-white hover:text-accent-light transition-colors duration-200 font-medium">
                        ACCUEIL
                    </a>

                    <div class="relative" x-data="{ open: false }">
                        <button @click="open = !open" class="text-white hover:text-accent-light transition-colors duration-200 font-medium flex items-center space-x-1">
                            <span>A PROPOS</span>
                            <i class="fas fa-chevron-down text-xs transition-transform duration-200" :class="{'transform rotate-180': open}"></i>
                        </button>
                        <div x-show="open" @click.away="open = false" class="absolute left-0 w-56 mt-2 bg-white rounded-lg shadow-xl border border-gray-100 dropdown-gradient">
                            <div class="py-1">
                                <a href="#yan1" class="block px-4 py-2 text-gray-700 hover:bg-accent hover:text-white rounded-md mx-1 transition-colors duration-200">Qui sommes-nous</a>
                                <a href="#yan2" class="block px-4 py-2 text-gray-700 hover:bg-accent hover:text-white rounded-md mx-1 transition-colors duration-200">Notre vision</a>
                                <a href="#yan3" class="block px-4 py-2 text-gray-700 hover:bg-accent hover:text-white rounded-md mx-1 transition-colors duration-200">Localisation</a>
                                <a href="#yan4" class="block px-4 py-2 text-gray-700 hover:bg-accent hover:text-white rounded-md mx-1 transition-colors duration-200">Organisation</a>
                                <a href="#yan5" class="block px-4 py-2 text-gray-700 hover:bg-accent hover:text-white rounded-md mx-1 transition-colors duration-200">Equipe</a>
                                <a href="#yan7" class="block px-4 py-2 text-gray-700 hover:bg-accent hover:text-white rounded-md mx-1 transition-colors duration-200">Notre portefeuille</a>
                                <a href="#yan8" class="block px-4 py-2 text-gray-700 hover:bg-accent hover:text-white rounded-md mx-1 transition-colors duration-200">Partenariats professionnels</a>
                            </div>
                        </div>
                    </div>

                    <div class="relative" x-data="{ open: false }">
                        <button @click="open = !open" class="text-white hover:text-accent-light transition-colors duration-200 font-medium flex items-center space-x-1">
                            <span>SERVICES</span>
                            <i class="fas fa-chevron-down text-xs transition-transform duration-200" :class="{'transform rotate-180': open}"></i>
                        </button>
                        <div x-show="open" @click.away="open = false" class="absolute left-0 w-48 mt-2 bg-white rounded-lg shadow-xl border border-gray-100 dropdown-gradient">
                            <div class="py-1">
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-accent hover:text-white rounded-md mx-1 transition-colors duration-200">Conseil</a>
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-accent hover:text-white rounded-md mx-1 transition-colors duration-200">Contentieux</a>
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-accent hover:text-white rounded-md mx-1 transition-colors duration-200">Fiscalité</a>
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-accent hover:text-white rounded-md mx-1 transition-colors duration-200">Divers</a>
                            </div>
                        </div>
                    </div>


                    <div class="relative" x-data="{ open: false }">
                        <button @click="open = !open" class="text-white hover:text-accent-light transition-colors duration-200 text-sm font-medium flex items-center space-x-1">
                            <span>NOS DOMAINES</span>
                            <i class="fas fa-chevron-down text-xs transition-transform duration-200" :class="{'transform rotate-180': open}"></i>
                        </button>
                        <div x-show="open" @click.away="open = false" class="absolute left-0 w-48 mt-2 bg-white rounded-lg shadow-xl border border-gray-100 dropdown-gradient">
                            <div class="py-1">
                                <a href="#" class="block px-2 py-1 text-sm font-medium text-gray-700 hover:bg-accent hover:text-white rounded-md mx-1 transition-colors duration-200">Conseil</a>
                                <a href="#" class="block px-2 py-1 text-sm font-medium text-gray-700 hover:bg-accent hover:text-white rounded-md mx-1 transition-colors duration-200">Contentieux</a>
                                <a href="#" class="block px-2 py-1 text-sm font-medium text-gray-700 hover:bg-accent hover:text-white rounded-md mx-1 transition-colors duration-200">Fiscalité</a>
                                <a href="#" class="block px-2 py-1 text-sm font-medium text-gray-700 hover:bg-accent hover:text-white rounded-md mx-1 transition-colors duration-200">Divers</a>

                                <a class="block px-2 py-1 text-sm font-medium text-gray-700 hover:bg-accent hover:text-white rounded-md mx-1 transition-colors duration-200" href="#"  onclick="showSection('Conseil')">Règlement des différends</a>
                                                    <a class="block px-2 py-1 text-sm font-medium text-gray-700 hover:bg-accent hover:text-white rounded-md mx-1 transition-colors duration-200" href="#"  onclick="showSection('Contentieux')">Droit des affaires</a>
                                                    <a class="block px-2 py-1 text-sm font-medium text-gray-700 hover:bg-accent hover:text-white rounded-md mx-1 transition-colors duration-200" href="#" onclick="showSection('Fiscalite')">Droit et gouvernance des ressources naturelles</a>
                                                    <a class="block px-2 py-1 text-sm font-medium text-gray-700 hover:bg-accent hover:text-white rounded-md mx-1 transition-colors duration-200" href="#" onclick="showSection('Divers')">Protection du patrimoine</a>
                                                    <a class="block px-2 py-1 text-sm font-medium text-gray-700 hover:bg-accent hover:text-white rounded-md mx-1 transition-colors duration-200" href="#" onclick="showSection('Divers1')">Finance, banque et assurances</a>
                                                    <a class="block px-2 py-1 text-sm font-medium text-gray-700 hover:bg-accent hover:text-white rounded-md mx-1 transition-colors duration-200" href="#" onclick="showSection('Divers2')">Immigration et coopération internationale</a>
                                                    <a class="block px-2 py-1 text-sm font-medium text-gray-700 hover:bg-accent hover:text-white rounded-md mx-1 transition-colors duration-200" href="#" onclick="showSection('Divers3')">Droit de la famille et des personnes</a>
                                                    <a class="block px-2 py-1 text-sm font-medium text-gray-700 hover:bg-accent hover:text-white rounded-md mx-1 transition-colors duration-200" href="#" onclick="showSection('Divers4')">Emploi et protection sociale</a>
                                                    <a class="block px-2 py-1 text-sm font-medium text-gray-700 hover:bg-accent hover:text-white rounded-md mx-1 transition-colors duration-200" href="#" onclick="showSection('Divers5')">Fiscalité</a>
                                                    <a class="block px-2 py-1 text-sm font-medium text-gray-700 hover:bg-accent hover:text-white rounded-md mx-1 transition-colors duration-200" href="#" onclick="showSection('Divers6')">Droits humains et libertés fondamentales</a>
                            </div>
                        </div>
                    </div>



                    <a href="contact.html" class="text-white hover:text-accent-light transition-colors duration-200 font-medium">
                        CONTACT
                    </a>

                    <div class="relative ml-8" x-data="{ open: false }">
                        <button @click="open = !open" class="flex items-center text-white hover:text-accent-light transition-colors duration-200">
                            <i class="fas fa-globe mr-2"></i>
                            <span>FR</span>
                            <i class="fas fa-chevron-down ml-1 text-xs"></i>
                        </button>
                        <div x-show="open" @click.away="open = false" class="absolute right-0 w-24 mt-2 bg-white rounded-lg shadow-xl border border-gray-100 dropdown-gradient">
                            <div class="py-1">
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-accent hover:text-white rounded-md mx-1 transition-colors duration-200">FR</a>
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-accent hover:text-white rounded-md mx-1 transition-colors duration-200">EN</a>
                                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-accent hover:text-white rounded-md mx-1 transition-colors duration-200">DE</a>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center space-x-4 ml-8">
                        <a href="#" class="text-white hover:text-accent-light transition-colors duration-200">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-white hover:text-accent-light transition-colors duration-200">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-white hover:text-accent-light transition-colors duration-200">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="text-white hover:text-accent-light transition-colors duration-200">
                            <i class="fab fa-google-plus-g"></i>
                        </a>
                    </div>
                </div>

                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-button" class="text-white hover:text-accent-light">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Menu mobile -->
        <div id="mobile-menu" class="hidden md:hidden bg-primary-dark">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="index.html" class="block px-3 py-2 text-white hover:bg-primary-light rounded-md transition-colors duration-200">ACCUEIL</a>
                
                <div class="mobile-dropdown">
                    <button class="w-full text-left px-3 py-2 text-white hover:bg-primary-light rounded-md transition-colors duration-200 flex justify-between items-center">
                        A PROPOS
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="hidden bg-primary-light rounded-md mt-1">
                        <a href="#yan1" class="block py-2 px-4 text-white hover:bg-primary">Qui sommes-nous</a>
                        <a href="#yan2" class="block py-2 px-4 text-white hover:bg-primary">Notre vision</a>
                        <a href="#yan3" class="block py-2 px-4 text-white hover:bg-primary">Localisation</a>
                        <a href="#yan4" class="block py-2 px-4 text-white hover:bg-primary">Organisation</a>
                        <a href="#yan5" class="block py-2 px-4 text-white hover:bg-primary">Equipe</a>
                        <a href="#yan7" class="block py-2 px-4 text-white hover:bg-primary">Notre portefeuille</a>
                        <a href="#yan8" class="block py-2 px-4 text-white hover:bg-primary">Partenariats professionnels</a>
                    </div>
                </div>

                <div class="mobile-dropdown">
                    <button class="w-full text-left px-3 py-2 text-white hover:bg-primary-light rounded-md transition-colors duration-200 flex justify-between items-center">
                        SERVICES
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="hidden bg-primary-light rounded-md mt-1">
                        <a href="#" class="block py-2 px-4 text-white hover:bg-primary">Conseil</a>
                        <a href="#" class="block py-2 px-4 text-white hover:bg-primary">Contentieux</a>
                        <a href="#" class="block py-2 px-4 text-white hover:bg-primary">Fiscalité</a>
                        <a href="#" class="block py-2 px-4 text-white hover:bg-primary">Divers</a>
                    </div>
                </div>

                <a href="contact.html" class="block px-3 py-2 text-white hover:bg-primary-light rounded-md transition-colors duration-200">CONTACT</a>

                <div class="px-3 py-2">
                    <div class="flex justify-center space-x-4">
                        <a href="#" class="text-white hover:text-accent-light transition-colors duration-200"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white hover:text-accent-light transition-colors duration-200"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white hover:text-accent-light transition-colors duration-200"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="text-white hover:text-accent-light transition-colors duration-200"><i class="fab fa-google-plus-g"></i></a>
                    </div>
                </div>

                <div class="px-3 py-2">
                    <select class="w-full bg-primary-light text-white px-2 py-1 rounded-md">
                        <option value="fr">Français</option>
                        <option value="en">English</option>
                        <option value="de">Deutsch</option>
                    </select>
                </div>
            </div>
        </div>
    </nav>

    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script>
        // Toggle menu mobile
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Gestion des dropdowns mobiles
        document.querySelectorAll('.mobile-dropdown').forEach(dropdown => {
            const button = dropdown.querySelector('button');
            const content = dropdown.querySelector('div');

            button.addEventListener('click', () => {
                content.classList.toggle('hidden');
                const icon = button.querySelector('i');
                icon.classList.toggle('fa-chevron-up');
                icon.classList.toggle('fa-chevron-down');
            });
        });

        // Fermeture du menu mobile lors du clic en dehors
        document.addEventListener('click', (e) => {
            if (!mobileMenu.contains(e.target) && !mobileMenuButton.contains(e.target)) {
                mobileMenu.classList.add('hidden');
            }
        });
    </script>