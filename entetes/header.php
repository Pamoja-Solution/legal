<?php
// Définir une constante pour la racine
define('BASE_URL', '/');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if(isset($titre)){echo ($titre);}else{echo("Aequitas Legal Partners");} ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="shortcut icon" href="<?=  BASE_URL; ?>assets/img/logo3.ico" type="image/x-icon">
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

<style>
    @import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap');

body {
    font-family: 'DM Sans', sans-serif; /* Définir la police comme police par défaut */
}

</style>

</head>
<body class="bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 min-h-screen py-6">
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
    <nav class="bg-gradient-to-r from-blue-600 to-purple-600 fixed w-full top-0 z-50 shadow-lg mb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20">
                <div class="flex items-center">
                    <a href="<?= BASE_URL ?>index.php" class="flex-shrink-0">
                    <img class="h-16 w-auto rounded rounded-xl" src="<?php echo BASE_URL; ?>assets/img/logo/logo3.jpeg" alt="Logo">

                    </a>
                </div>

                <div class="hidden md:flex md:items-center md:space-x-8">
                    <a href="<?= BASE_URL ?>index.php" class="text-white hover:text-accent-light transition-colors duration-200 font-medium">
                        ACCUEIL
                    </a>

                    <div class="relative" x-data="{ open: false }">
                        <button @click="open = !open" class="text-white hover:text-accent-light transition-colors duration-200 font-medium flex items-center space-x-1">
                            <span>A PROPOS</span>
                            <i class="fas fa-chevron-down text-xs transition-transform duration-200" :class="{'transform rotate-180': open}"></i>
                        </button>
                        <div x-show="open" @click.away="open = false" class="absolute left-0 w-56 mt-2 bg-white rounded-lg shadow-xl border border-gray-100 dropdown-gradient">
                            <div class="py-1">
                                <a href="apropos.php#yan1" class="block px-4 py-2 text-gray-700 hover:bg-accent hover:text-white rounded-md mx-1 transition-colors duration-200">Qui sommes-nous</a>
                                <a href="apropos.php#vision" class="block px-4 py-2 text-gray-700 hover:bg-accent hover:text-white rounded-md mx-1 transition-colors duration-200">Notre vision</a>
                                <a href="apropos.php#contact" class="block px-4 py-2 text-gray-700 hover:bg-accent hover:text-white rounded-md mx-1 transition-colors duration-200">Localisation</a>
                                <a href="apropos.php#organisation" class="block px-4 py-2 text-gray-700 hover:bg-accent hover:text-white rounded-md mx-1 transition-colors duration-200">Organisation</a>
                                <a href="/equipes.php" class="block px-4 py-2 text-gray-700 hover:bg-accent hover:text-white rounded-md mx-1 transition-colors duration-200">Equipe</a>
                                <a href="apropos.php#portefeuille" class="block px-4 py-2 text-gray-700 hover:bg-accent hover:text-white rounded-md mx-1 transition-colors duration-200">Notre portefeuille</a>
                                <a href="apropos.php#partenariat" class="block px-4 py-2 text-gray-700 hover:bg-accent hover:text-white rounded-md mx-1 transition-colors duration-200">Partenariats professionnels</a>
                            </div>
                        </div>
                    </div>




                    <div class="relative" x-data="{ open: false }">
                    <!-- Bouton principal pour Services -->
                    <button 
                        @click="open = !open" 
                        class="text-white hover:text-accent-light transition-colors duration-200 font-medium flex items-center space-x-1"
                    >
                        <span>SERVICES</span>
                        <i class="fas fa-chevron-down text-xs transition-transform duration-200" :class="{'transform rotate-180': open}"></i>
                    </button>

                    <!-- Menu déroulant -->
                    <div 
                        x-show="open" 
                        @click.away="open = false" 
                        class="absolute left-0 w-48 mt-2 bg-white rounded-lg shadow-xl border border-gray-100 dropdown-gradient"
                    >
                        <div class="py-1">
                            <!-- Sous-sections avec des liens directs -->
                            <a href="/services.php#Conseil" class="block px-4 py-2 text-gray-700 hover:bg-accent hover:text-white rounded-md mx-1 transition-colors duration-200">
                                Conseil
                            </a>
                            <a href="/services.php#Contentieux" class="block px-4 py-2 text-gray-700 hover:bg-accent hover:text-white rounded-md mx-1 transition-colors duration-200">
                                Contentieux
                            </a>
                            <a href="/services.php#Fiscalite" class="block px-4 py-2 text-gray-700 hover:bg-accent hover:text-white rounded-md mx-1 transition-colors duration-200">
                                Fiscalité
                            </a>
                            <a href="/services.php#Divers" class="block px-4 py-2 text-gray-700 hover:bg-accent hover:text-white rounded-md mx-1 transition-colors duration-200">
                                Divers
                            </a>
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
                               
                                <a class="block px-2 py-1 text-sm font-medium text-gray-700 hover:bg-accent hover:text-white rounded-md mx-1 transition-colors duration-200" href="<?= BASE_URL?>tous.php#different"  onclick="showSection('Conseil')">Règlement des différends</a>
                                <a class="block px-2 py-1 text-sm font-medium text-gray-700 hover:bg-accent hover:text-white rounded-md mx-1 transition-colors duration-200" href="<?= BASE_URL?>tous.php#affaires"  onclick="showSection('Contentieux')">Droit des affaires</a>
                                <a class="block px-2 py-1 text-sm font-medium text-gray-700 hover:bg-accent hover:text-white rounded-md mx-1 transition-colors duration-200" href="<?= BASE_URL?>tous.php#gouv" onclick="showSection('Fiscalite')">Droit et gouvernance des ressources naturelles</a>
                                <a class="block px-2 py-1 text-sm font-medium text-gray-700 hover:bg-accent hover:text-white rounded-md mx-1 transition-colors duration-200" href="<?= BASE_URL?>tous.php#protection" onclick="showSection('Divers')">Protection du patrimoine</a>
                                <a class="block px-2 py-1 text-sm font-medium text-gray-700 hover:bg-accent hover:text-white rounded-md mx-1 transition-colors duration-200" href="<?= BASE_URL?>tous.php#finance" onclick="showSection('Divers1')">Finance, banque et assurances</a>
                                <a class="block px-2 py-1 text-sm font-medium text-gray-700 hover:bg-accent hover:text-white rounded-md mx-1 transition-colors duration-200" href="<?= BASE_URL?>tous.php#immigration" onclick="showSection('Divers2')">Immigration et coopération internationale</a>
                                <a class="block px-2 py-1 text-sm font-medium text-gray-700 hover:bg-accent hover:text-white rounded-md mx-1 transition-colors duration-200" href="<?= BASE_URL?>tous.php#famille" onclick="showSection('Divers3')">Droit de la famille et des personnes</a>
                                <a class="block px-2 py-1 text-sm font-medium text-gray-700 hover:bg-accent hover:text-white rounded-md mx-1 transition-colors duration-200" href="<?= BASE_URL?>tous.php#emploi" onclick="showSection('Divers4')">Emploi et protection sociale</a>
                                <a class="block px-2 py-1 text-sm font-medium text-gray-700 hover:bg-accent hover:text-white rounded-md mx-1 transition-colors duration-200" href="<?= BASE_URL?>tous.php#fisccalite" onclick="showSection('Divers5')">Fiscalité</a>
                                <a class="block px-2 py-1 text-sm font-medium text-gray-700 hover:bg-accent hover:text-white rounded-md mx-1 transition-colors duration-200" href="<?= BASE_URL?>tous.php#humains" onclick="showSection('Divers6')">Droits humains et libertés fondamentales</a>
                            </div>
                        </div>
                    </div>



                    <a href="contact.php" class="text-white hover:text-accent-light transition-colors duration-200 font-medium">

                    <a href="contact.php" class="text-white hover:text-accent-light transition-colors duration-200 font-medium">
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
                <a href="index.php" class="block px-3 py-2 text-white hover:bg-primary-light rounded-md transition-colors duration-200">ACCUEIL</a>
                
                <div class="mobile-dropdown">
                    <button class="w-full text-left px-3 py-2 text-white hover:bg-primary-light rounded-md transition-colors duration-200 flex justify-between items-center">
                        A PROPOS
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="hidden bg-primary-light rounded-md mt-1">
                        <a href="apropos.php#yan1" class="block py-2 px-4 text-white hover:bg-primary">Qui sommes-nous</a>
                        <a href="apropos.php#vision"  class="block py-2 px-4 text-white hover:bg-primary">Notre vision</a>
                        <a href="apropos.php#contact"  class="block py-2 px-4 text-white hover:bg-primary">Localisation</a>
                        <a href="apropos.php#organisation" class="block py-2 px-4 text-white hover:bg-primary">Organisation</a>
                        <a href="/equipes.php"  class="block py-2 px-4 text-white hover:bg-primary">Équipe</a>
                        <a href="apropos.php#portefeuille" class="block py-2 px-4 text-white hover:bg-primary">Notre portefeuille</a>
                        <a href="apropos.php#partenariat"  class="block py-2 px-4 text-white hover:bg-primary">Partenariats professionnels</a>
                    </div>
                </div>



                        <div class="mobile-dropdown">
                            <!-- Bouton principal pour les services -->
                            <button href="/services.php" class="w-full text-left px-3 py-2 text-white hover:bg-primary-light rounded-md transition-colors duration-200 flex justify-between items-center">
                                SERVICES
                                <i class="fas fa-chevron-down"></i>
                            </button>
                            <!-- Menu déroulant -->
                            <div class="hidden bg-primary-light rounded-md mt-1">
                                <!-- Sous-sections avec ancres -->
                                <a href="/services.php#Conseil" class="block py-2 px-4 text-white hover:bg-primary">Conseil</a>
                                <a href="/services.php#Contentieux" class="block py-2 px-4 text-white hover:bg-primary">Contentieux</a>
                                <a href="/services.php#Fiscalite" class="block py-2 px-4 text-white hover:bg-primary">Fiscalité</a>
                                <a href="/services.php#Divers" class="block py-2 px-4 text-white hover:bg-primary">Divers</a>
                            </div>
                        </div>


                    



                      

                    <div class="mobile-dropdown" id="dropdown-domains">
                        <a 
                            id="dropdown-toggle" 
                            class="w-full text-left px-3 py-2 text-white hover:bg-primary-light rounded-md transition-colors duration-200 flex justify-between items-center">
                            NOS DOMAINES
                            <i class="fas fa-chevron-down"></i>
                        </a>
                        <div id="dropdown-content" class="hidden bg-primary-light rounded-md mt-1">
                           
                            <a class="block py-1 text-sm px-2 text-white hover:bg-primary" href="/domaines.php"  >Règlement des différends</a>
                            <a class="block py-1 text-sm px-2 text-white hover:bg-primary" href="/domaines.php" >Droit des affaires</a>
                            <a class="block py-1 text-sm px-2 text-white hover:bg-primary" href="/domaines.php" >Droit et gouvernance </a>
                            <a class="block py-1 text-sm px-2 text-white hover:bg-primary" href="/domaines.php" >Protection du patrimoine</a>
                            <a class="block py-1 text-sm px-2 text-white hover:bg-primary" href="/domaines.php" >Finance, banque </a>
                            <a class="block py-1 text-sm px-2 text-white hover:bg-primary" href="/domaines.php" >Immigration </a>
                            <a class="block py-1 text-sm px-2 text-white hover:bg-primary" href="/domaines.php" >Droit de la famille</a>
                            <a class="block py-1 text-sm px-2 text-white hover:bg-primary" href="/domaines.php" >Emploi</a>
                            <a class="block py-1 text-sm px-2 text-white hover:bg-primary" href="/domaines.php" >Fiscalité</a>
                            <a class="block py-1 text-sm px-2 text-white hover:bg-primary" href="/domaines.php" >Droits humains </a>
                        </div>
                    </div>


<script>

// Gestion des dropdowns spécifiques
const dropdownToggle = document.getElementById('dropdown-toggle');
const dropdownContent = document.getElementById('dropdown-content');

// Toggle affichage du dropdown
dropdownToggle.addEventListener('click', (e) => {
    e.preventDefault(); // Empêche le scroll vers le haut
    dropdownContent.classList.toggle('hidden');
    
    // Gérer l'icône de chevron
    const icon = dropdownToggle.querySelector('i');
    icon.classList.toggle('fa-chevron-up');
    icon.classList.toggle('fa-chevron-down');
});

// Fermer le dropdown si clic en dehors
document.addEventListener('click', (e) => {
    if (!document.getElementById('dropdown-domains').contains(e.target)) {
        dropdownContent.classList.add('hidden');
        const icon = dropdownToggle.querySelector('i');
        icon.classList.add('fa-chevron-down');
        icon.classList.remove('fa-chevron-up');
    }
});

</script>







                <a href="contact.php" class="block px-3 py-2 text-white hover:bg-primary-light rounded-md transition-colors duration-200">CONTACT</a>

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