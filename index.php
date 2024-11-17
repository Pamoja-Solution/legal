<?php require("entetes/header.php") ?>

<div x-data="carousel(5000)" class="relative w-full h-screen overflow-hidden mt-6"> 
    <!-- Slides -->
    <div class="relative h-full">
        <template x-for="(slide, index) in slides" :key="index">
            <div x-show="currentSlide === index"
                 x-transition:enter="transition ease-out duration-500"
                 x-transition:enter-start="opacity-0 transform translate-x-full"
                 x-transition:enter-end="opacity-100 transform translate-x-0"
                 x-transition:leave="transition ease-in duration-500"
                 x-transition:leave-start="opacity-100 transform translate-x-0"
                 x-transition:leave-end="opacity-0 transform -translate-x-full"
                 class="absolute inset-0 flex items-center justify-center">
                <!-- Image de fond avec effets -->
                <div class="relative w-full h-full overflow-hidden">
                    <img :src="slide" 
                         class="w-full h-full object-cover transform scale-100 blur-none transition-transform duration-1000 ease-out hover:scale-105 hover:blur-sm" 
                         alt="Slide Image">
                </div>

                <!-- Contenu -->
                <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
                    <div class="text-center text-white px-4">
                        <div class="w-1 h-16 bg-pink-500 mx-auto mb-4"></div>
                        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold leading-tight">
                            Bienvenue chez<br>AEQUITAS LEGAL<br>PARTNERS
                        </h1>
                        <button class="mt-8 px-6 py-3 bg-pink-500 text-white text-sm uppercase tracking-wider font-semibold hover:bg-pink-600 transition-colors duration-300">
                            NOS SERVICES
                        </button>
                    </div>
                </div>
            </div>
        </template>
    </div>

    <!-- Navigation buttons -->
    <button @click="prevSlide()" 
            class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-black/20 hover:bg-black/40 text-white rounded-full p-2 focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
    </button>
    
    <button @click="nextSlide()"
            class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-black/20 hover:bg-black/40 text-white rounded-full p-2 focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
    </button>

    <!-- Indicators -->
    <div class="absolute bottom-4 left-0 right-0 flex justify-center space-x-2">
        <template x-for="index in slides.length" :key="index">
            <button @click="goToSlide(index - 1)"
                    :class="{'bg-pink-500': currentSlide === index - 1, 'bg-white/50': currentSlide !== index - 1}"
                    class="w-3 h-3 rounded-full transition-colors duration-200"></button>
        </template>
    </div>
</div>

<script>
    function carousel(intervalTime) {
        return {
            slides: [
                'assets/img/gallery/brand1.png',
                'assets/img/gallery/brand2.png',
                'assets/img/gallery/brand3.png'
            ],
            currentSlide: 0,
            interval: null,

            startInterval() {
                this.interval = setInterval(() => {
                    this.nextSlide();
                }, intervalTime);
            },

            stopInterval() {
                clearInterval(this.interval);
            },

            nextSlide() {
                this.stopInterval();
                this.currentSlide = (this.currentSlide + 1) % this.slides.length;
                this.startInterval();
            },

            prevSlide() {
                this.stopInterval();
                this.currentSlide = (this.currentSlide - 1 + this.slides.length) % this.slides.length;
                this.startInterval();
            },

            goToSlide(index) {
                this.stopInterval();
                this.currentSlide = index;
                this.startInterval();
            },

            init() {
                this.startInterval();
            }
        }
    }
</script>














<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cards Futuristes</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        .card-gradient {
            background: linear-gradient(135deg, rgba(21, 57, 104, 0.95), rgba(44, 82, 130, 0.95));
        }
        .swiper {
            padding: 2rem;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-12">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <!-- Card 1 -->
                <div class="swiper-slide">
                    <div class="card-gradient rounded-2xl shadow-2xl p-6 backdrop-blur-sm text-white transform hover:scale-105 transition-all duration-300">
                        <div class="flex flex-col h-full">
                            <h2 class="text-3xl font-bold mb-6">L'ÉQUITÉ AU CŒUR DU DROIT</h2>
                            <p class="text-gray-200 mb-6">Vous cherchez des solutions juridiques intelligentes et durables pour la gestion de vos activités professionnelles ?</p>
                            <p class="text-gray-200 mb-8">Nous vous offrons des services adaptés à vos besoins, marqués par un profond sens de l'équilibre et de la justice.</p>
                            <button class="mt-auto bg-blue-500 hover:bg-blue-600 text-white font-semibold py-3 px-6 rounded-lg transform hover:translate-y-[-2px] transition-all duration-300">
                                EN SAVOIR PLUS
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="swiper-slide">
                    <div class="card-gradient rounded-2xl shadow-2xl p-6 backdrop-blur-sm text-white transform hover:scale-105 transition-all duration-300">
                        <div class="flex flex-col h-full">
                            <h2 class="text-3xl font-bold mb-6">EXPERTISE JURIDIQUE</h2>
                            <p class="text-gray-200 mb-6">Une équipe d'experts dédiée à la protection de vos intérêts et au succès de vos projets.</p>
                            <p class="text-gray-200 mb-8">Solutions sur mesure pour répondre à vos besoins spécifiques.</p>
                            <button class="mt-auto bg-blue-500 hover:bg-blue-600 text-white font-semibold py-3 px-6 rounded-lg transform hover:translate-y-[-2px] transition-all duration-300">
                                DÉCOUVRIR
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="swiper-slide">
                    <div class="card-gradient rounded-2xl shadow-2xl p-6 backdrop-blur-sm text-white transform hover:scale-105 transition-all duration-300">
                        <div class="flex flex-col h-full">
                            <h2 class="text-3xl font-bold mb-6">ACCOMPAGNEMENT PERSONNALISÉ</h2>
                            <p class="text-gray-200 mb-6">Un suivi rigoureux et personnalisé pour chacun de vos dossiers.</p>
                            <p class="text-gray-200 mb-8">Excellence et professionnalisme au service de votre réussite.</p>
                            <button class="mt-auto bg-blue-500 hover:bg-blue-600 text-white font-semibold py-3 px-6 rounded-lg transform hover:translate-y-[-2px] transition-all duration-300">
                                NOUS CONTACTER
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper(".mySwiper", {
            effect: "cards",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            },
        });
    </script>
</body>
</html>
<?php require("entetes/footer.php") ?>