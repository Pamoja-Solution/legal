<?php  require("entetes/header.php") ?>
<div x-data="carousel(5000)" class="relative w-full h-screen overflow-hidden mt-6">
    <!-- Slides -->
    <div class="relative h-full">
        <template x-for="(slide, index) in slides" :key="index">
            <div x-show="currentSlide === index"
                 x-transition:enter="transition ease-out duration-1000"
                 x-transition:enter-start="opacity-0 transform scale-95"
                 x-transition:enter-end="opacity-100 transform scale-100"
                 x-transition:leave="transition ease-in duration-500"
                 x-transition:leave-start="opacity-100 transform scale-100"
                 x-transition:leave-end="opacity-0 transform scale-95"
                 class="absolute inset-0">
                
                <!-- Image de fond avec effets -->
                <div class="relative w-full h-full">
                    <img :src="slide.image" 
                         class="w-full h-full object-cover transform transition-all duration-1000"
                         :class="{'scale-110': currentSlide === index}"
                         alt="Slide Image">
                    
                    <!-- Overlay gradient -->
                    <div class="absolute inset-0 bg-gradient-to-r from-black/80 to-transparent"></div>
                </div>

                <!-- Contenu -->
                <div class="absolute inset-0 flex items-center justify-start px-20">
                    <div class="max-w-2xl text-white slide-content">
                        <div class="w-20 h-1 bg-gradient-to-r from-pink-500 to-purple-500 mb-8 transform translate-y-4 opacity-0 animation-delay-1"></div>
                        <h2 class="text-5xl font-bold mb-6 transform translate-y-4 opacity-0 animation-delay-2" x-text="slide.title"></h2>
                        <p class="text-xl leading-relaxed mb-8 transform translate-y-4 opacity-0 animation-delay-3" x-text="slide.text"></p>
                        <a href="/services.php" class="px-4 py-2 bg-gradient-to-r from-pink-500 to-purple-500 rounded-full text-white text-sm font-semibold 
                                   transform translate-y-4 opacity-0 animation-delay-4 
                                   hover:shadow-lg hover:scale-105 transition-all duration-300">
                            DÉCOUVRIR NOS SERVICES 
                        </a>
                    </div>
                </div>
            </div>
        </template>
    </div>

    <!-- Navigation buttons -->
    <div class="absolute inset-0 flex items-center justify-between px-4 pointer-events-none">
        <button @click="prevSlide()" 
                class="w-12 h-12 rounded-full bg-whites/10 backdrop-blur-sm text-white flex items-center justify-center
                       pointer-events-auto transform transition-all duration-300 hover:bg-whites/20 hover:scale-110">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </button>
        
        <button @click="nextSlide()"
                class="w-12 h-12 rounded-full bg-whites/10 backdrop-blur-sm text-white flex items-center justify-center
                       pointer-events-auto transform transition-all duration-300 hover:bg-whites/20 hover:scale-110">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </button>
    </div>

    <!-- Indicators -->
    <div class="absolute bottom-8 left-0 right-0 flex justify-center space-x-3">
        <template x-for="(slide, index) in slides" :key="index">
            <button @click="goToSlide(index)"
                    class="w-16 h-1 rounded-full transition-all duration-300"
                    :class="currentSlide === index ? 'bg-whites scale-100' : 'bg-whites/30 scale-75'"></button>
        </template>
    </div>
</div>

<style>
@keyframes slideUp {
    from {
        transform: translateY(20px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

.slide-content > * {
    animation: slideUp 2.8s forwards;
}

.animation-delay-1 { animation-delay: 0.4s; }
.animation-delay-2 { animation-delay: 0.6s; }
.animation-delay-3 { animation-delay: 0.8s; }
.animation-delay-4 { animation-delay: 1s; }

/* Effet de flou sur le fond pendant les transitions */
[x-cloak] { display: none; }

.backdrop-blur-sm {
    backdrop-filter: blur(4px);
}
</style>

<script>
function carousel(intervalTime) {
    return {
        slides: [
            {
                image: 'assets/img/caroussel/caroussel1.jpeg',
                title: "Excellence Juridique",
                text: "AEQUITAS LEGAL PARTNERS vous accompagne avec expertise et passion dans tous vos projets juridiques."
            },
            {
                image: 'assets/img/caroussel/caroussel2.jpeg',
                title: "Solutions Innovantes",
                text: "Notre équipe d'experts développe des stratégies personnalisées pour répondre à vos besoins spécifiques."
            },
            {
                image: 'assets/img/caroussel/caroussel3.jpeg',
                title: "20 Ans d'Expérience",
                text: "Une expertise reconnue et une approche moderne du droit au service de votre réussite."
            }
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
            this.currentSlide = (this.currentSlide + 1) % this.slides.length;
        },

        prevSlide() {
            this.currentSlide = (this.currentSlide - 1 + this.slides.length) % this.slides.length;
        },

        goToSlide(index) {
            this.currentSlide = index;
        },

        init() {
            this.startInterval();
        }
    }
}
</script>






































<section class="py-16 px-4 ">
    <h2 class="text-center text-gray-300 text-4xl mb-16">
        <span class="text-slate-300">Principaux</span>
        <span class="text-blue-600">Domaines</span>
        <span class="text-slate-300">d'Intervention</span>
    </h2>

    <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        <!-- Carte 1 -->
        <div class="card-wrapper">
            <div class="relative bg-gray-700  rounded-lg shadow-md overflow-hidden transform transition-transform duration-300 hover:-translate-y-2">
                <div class="h-48 overflow-hidden">
                    <img src="assets/nos/mine.jpeg" alt="Mines" 
                         class="w-full h-full object-cover transition-transform duration-300 ease-out hover:scale-105">
                </div>
                
                <div class="absolute top-4 left-1/2 transform -translate-x-1/2 transition-all duration-300">
                    <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center shadow-md">
                        <i class="fas fa-gem text-white text-2xl"></i>
                    </div>
                </div>

                <div class="p-6 pt-16 text-center">
                    <h3 class="text-xl font-bold mb-3">
                        <span class="text-slate-300">Mines &</span>
                        <span class="text-blue-600">Ressources</span>
                    </h3>
                    <div class="text-slate-200 overflow-hidden transition-all duration-300 ease-in-out">
                        <p>Expertise en droit minier et ressources naturelles, Nous avons une expérience avérée du domaines des mines, du pétrole et du gaz, de la foresterie,...</p>
                    </div>
                    <a href="/domains/mine.php" 
                        class="mt-4 inline-block text-indigo-600 hover:text-indigo-700">
                        Lire la suite →
                    </a>
                </div>

                <div class="absolute inset-0 bg-gradient-to-t from-blue-600/5 to-transparent opacity-0 hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
            </div>
        </div>

        <!-- Carte 2 -->
        <div class="card-wrapper">
            <div class="relative bg-gray-700 rounded-lg shadow-md overflow-hidden transform transition-transform duration-300 hover:-translate-y-2">
                <div class="h-48 overflow-hidden">
                    <img src="assets/nos/commerce.jpeg" alt="Commerce" 
                         class="w-full h-full object-cover transition-transform duration-300 ease-out hover:scale-105">
                </div>
                
                <div class="absolute top-4 left-1/2 transform -translate-x-1/2 transition-all duration-300">
                    <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center shadow-md">
                        <i class="fas fa-chart-line text-white text-2xl"></i>
                    </div>
                </div>

                <div class="p-6 pt-16 text-center">
                    <h3 class="text-xl font-bold mb-3">
                        <span class="text-slate-300">Commerce &</span>
                        <span class="text-blue-600">Industrie</span>
                    </h3>
                    <div class="text-slate-200 overflow-hidden transition-all duration-300 ease-in-out">
                        <p>Nous assistons nos clients en droit général des affaire, du travail, la sécurité sociale, la propriété intellectuelle, la fiscalité, les contrats, l'évaluation juridique et les marchés publics.</p>
                    </div>
                    <a href="/domains/commerce.php" 
                        class="mt-4 inline-block text-indigo-600 hover:text-indigo-700">
                        Lire la suite →
                    </a>
                </div>

                <div class="absolute inset-0 bg-gradient-to-t from-blue-600/5 to-transparent opacity-0 hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
            </div>
        </div>




        <!-- Carte 2 -->
        <div class="card-wrapper">
            <div class="relative bg-gray-700 rounded-lg shadow-md overflow-hidden transform transition-transform duration-300 hover:-translate-y-2">
                <div class="h-48 overflow-hidden">
                    <img src="assets/nos/energie.jpeg" alt="Commerce" 
                         class="w-full h-full object-cover transition-transform duration-300 ease-out hover:scale-105">
                </div>
                
                <div class="absolute top-4 left-1/2 transform -translate-x-1/2 transition-all duration-300">
                    <div class="w-16 h-16 bg-blue-600 rounded-full text-white flex items-center justify-center shadow-md">
                        <i class="fa-solid fa-bolt text-2xl"></i>
                    </div>
                </div>

                <div class="p-6 pt-16 text-center">
                    <h3 class="text-xl font-bold mb-3">
                        <span class="text-slate-300">Énergie &</span>
                        <span class="text-blue-600"> Infrastructure</span>
                    </h3>
                    <div class="text-slate-200 overflow-hidden transition-all duration-300 ease-in-out">
                        <p>Nous intervenons en matières juridiques relatives à l'immobilier, au foncier, aux télécommunications, aux TIC, à l'énergie électrique, ...</p>
                    </div>
                    <a href="/domains/energie.php" 
                        class="mt-4 inline-block text-indigo-600 hover:text-indigo-700">
                        Lire la suite →
                    </a>
                </div>

                <div class="absolute inset-0 bg-gradient-to-t from-blue-600/5 to-transparent opacity-0 hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
            </div>
        </div>



         <!-- Carte 2 -->
         <div class="card-wrapper">
            <div class="relative bg-gray-700 rounded-lg shadow-md overflow-hidden transform transition-transform duration-300 hover:-translate-y-2">
                <div class="h-48 overflow-hidden">
                    <img src="assets/nos/construction.jpeg" alt="Commerce" 
                         class="w-full h-full object-cover transition-transform duration-300 ease-out hover:scale-105">
                </div>
                
                <div class="absolute top-4 left-1/2 transform -translate-x-1/2 transition-all duration-300">
                    <div class="w-16 h-16 bg-blue-600 rounded-full text-white flex items-center justify-center shadow-md">
                    <i class="fa-solid fa-chart-line text-2xl"></i>
                    </div>
                </div>

                <div class="p-6 pt-16 text-center">
                    <h3 class="text-xl font-bold mb-3">
                        <span class="text-slate-300">Construction &</span>
                        <span class="text-blue-600"> Imobilier</span>
                    </h3>
                    <div class="text-slate-200 overflow-hidden transition-all duration-300 ease-in-out">
                        <p> 
        Rédaction de contrats de construction et de sous-traitance.
        Gestion des litiges liés à l'immobilier (propriété foncière, copropriété).</p>
                            </div>

                    <a href="/domains/constuction.php" 
                        class="mt-4 inline-block text-indigo-600 hover:text-indigo-700">
                        Lire la suite →
                    </a>
                </div>

                <div class="absolute inset-0 bg-gradient-to-t from-blue-600/5 to-transparent opacity-0 hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
            </div>
        </div>

        <!-- Répéter pour les autres cartes -->
    </div>


            <div class="text-center mt-12">
                <a href="/domaines.php" class="inline-flex items-center px-6 py-3 rounded-lg bg-gradient-to-r from-cyan-500 to-blue-500 text-white font-semibold hover:opacity-90 transition-opacity">
                    Voir plus
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>


</section>

<style>
.card-wrapper {
    transform-style: preserve-3d;
    backface-visibility: hidden;
}

.card-wrapper > div {
    will-change: transform;
    transform-origin: center center;
}

.card-wrapper:hover > div {
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
}

/* Optimisation des performances */
.card-wrapper > div {
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -webkit-transform: translate3d(0, 0, 0);
    -moz-transform: translate3d(0, 0, 0);
}

/* Animation douce pour l'élévation */
@media (prefers-reduced-motion: no-preference) {
    .card-wrapper > div {
        transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1),
                    box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
}
</style>



<div class="h-3 bg-gradient-to-r from-blue-600 to-purple-600 my-6"></div>








    <style>
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-5px); }
            100% { transform: translateY(0px); }
        }
        .float-animation:hover {
            animation: float 3s ease-in-out infinite;
        }
    </style>

    <section class="py-2 ">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- En-tête de la section -->
            <div class="text-center ">
                <h2 class="text-4xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-purple-600">
                    Notre Équipe
                </h2>
                

                <div class="mb-4 max-w-3xl mx-auto text-center">
                    
                    <p class="text-gray-200 leading-relaxed mb-8">
                        Aequitas Legal Partners est composée des professionnels (avocats et consultants) recrutés parmi les juristes formés dans les meilleures universités de la République Démocratique du Congo et à l'étranger et disposant d'une expérience professionnelle avérée dans les principaux domaines d'intervention du cabinet.
                    </p>
                    <p class="text-gray-200 leading-relaxed">
                        Notre équipe est constituée des professionnels qui, en plus de la langue officielle (le français) et de principales langues nationales congolaises (kikongo, lingala, swahili et tshiluba), maitrisent ensemble plusieurs langues étrangères, à savoir l'anglais, l'allemand, l'espagnol, l'italien et le néerlandais.
                    </p>
                </div>

                
            </div>

            <!-- Grille des membres -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">

            <!-- Membre 2 -->
            <div class="group float-animation">
                    <div class="relative overflow-hidden rounded-2xl shadow-lg transform transition duration-500 hover:scale-105">
                        <div class="h-72 bg-gradient-to-br from-purple-100 to-pink-100 flex items-center justify-center">
                            <div class="w-32 h-32 bg-gray-300 rounded-full"></div>
                        </div>
                        <div class="p-6 bg-white">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Mimie-Aimée Manzanza Malu</h3>
                            <p class="text-blue-600 font-medium mb-2">Associée co-fondatrice</p>
                            <p class="text-gray-600 text-sm mb-4">Droit de la famille, droit de l’immigration, droit international privé, logistique, organisation des formations.</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="inline-block px-3 py-1 text-xs font-medium bg-pink-100 text-pink-800 rounded-full">Droit international</span>
                                <span class="inline-block px-3 py-1 text-xs font-medium bg-blue-100 text-blue-800 rounded-full">Droit commercial</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Membre 1 -->
                <div class="group float-animation">
                    <div class="relative overflow-hidden rounded-2xl shadow-lg transform transition duration-500 hover:scale-105 bg-transparent">
                        <div class="h-72 bg-gradient-to-br from-blue-100 to-purple-100 flex items-center justify-center">
                            <div class="w-full h-full bg-gray-300 rounded-full "  >
                                <img src="/assets/img/gallery/yan 7.jpg" alt="">
                            </div>
                        </div>
                        <div class="p-6 bg-gray-300" >
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Prof. Yves-Junior Manzanza</h3>
                            <p class="text-blue-600 font-medium mb-2">Associé co-fondateur & Gérant</p>
                            <p class="text-gray-600 text-sm mb-4">Docteur en droit du travail | Expert en droit des affaires</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="inline-block px-3 py-1 text-xs font-medium bg-blue-100 text-blue-800 rounded-full">Droit des affaires</span>
                                <span class="inline-block px-3 py-1 text-xs font-medium bg-purple-100 text-purple-800 rounded-full">Droit du travail</span>
                            </div>
                        </div>
                    </div>
                </div>

                
            </div>

            <!-- Bouton Voir plus -->
            <div class="text-center">
                <a href="/equipes.php" class="inline-flex items-center px-8 py-3 rounded-full bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold transform transition duration-500 hover:scale-105 hover:shadow-lg">
                    <span>Découvrir toute l'équipe</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <div class="h-3 bg-blue-500 my-6"></div>


<section class=" py-20 px-4" x-data="{ activeTab: 'assurance' }">
    <div class="container mx-auto">
        <!-- En-tête -->
        <div class="mb-12">
            <span class="text-stone-400 uppercase tracking-wider text-sm">Expertise Acquise</span>
            <h2 class="text-white text-4xl md:text-5xl font-light mt-3 mb-6">
                Fort de son expérience<br>de plusieurs années.
            </h2>
        </div>

        <!-- Contenu principal -->
        <div class="grid lg:grid-cols-2 gap-8">
            <!-- Liste des domaines -->
            <div class="space-y-4">
                <button 
                    @click="activeTab = 'assurance'" 
                    class="expertise-btn group w-full text-left p-4 border-l-4 transition-all duration-300"
                    :class="activeTab === 'assurance' ? 'border-blue-500 bg-stone-800/50' : 'border-transparent hover:border-blue-500 hover:bg-stone-800/50'">
                    <span class="text-xl" :class="activeTab === 'assurance' ? 'text-white' : 'text-stone-400 group-hover:text-white'">
                        Droit des assurances et droit bancaire
                    </span>
                </button>
                
                <button 
                    @click="activeTab = 'foncier'" 
                    class="expertise-btn group w-full text-left p-4 border-l-4 transition-all duration-300"
                    :class="activeTab === 'foncier' ? 'border-blue-500 bg-stone-800/50' : 'border-transparent hover:border-blue-500 hover:bg-stone-800/50'">
                    <span class="text-xl" :class="activeTab === 'foncier' ? 'text-white' : 'text-stone-400 group-hover:text-white'">
                        Droit foncier et droit de l'environnement
                    </span>
                </button>
                
                <button 
                    @click="activeTab = 'sport'" 
                    class="expertise-btn group w-full text-left p-4 border-l-4 transition-all duration-300"
                    :class="activeTab === 'sport' ? 'border-blue-500 bg-stone-800/50' : 'border-transparent hover:border-blue-500 hover:bg-stone-800/50'">
                    <span class="text-xl" :class="activeTab === 'sport' ? 'text-white' : 'text-stone-400 group-hover:text-white'">
                        Droit des loisirs et droit de Sport
                    </span>
                </button>
                
                <button 
                    @click="activeTab = 'commerce'" 
                    class="expertise-btn group w-full text-left p-4 border-l-4 transition-all duration-300"
                    :class="activeTab === 'commerce' ? 'border-blue-500 bg-stone-800/50' : 'border-transparent hover:border-blue-500 hover:bg-stone-800/50'">
                    <span class="text-xl" :class="activeTab === 'commerce' ? 'text-white' : 'text-stone-400 group-hover:text-white'">
                        Droit de commerce international
                    </span>
                </button>
            </div>

            <!-- Carte d'information -->
            <div class="relative">
                <!-- Contenu Assurance -->
                <div x-show="activeTab === 'assurance'" 
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 transform translate-y-4"
                     x-transition:enter-end="opacity-100 transform translate-y-0"
                     class="bg-gray-700 p-8 rounded-lg shadow-xl">
                    <h3 class="text-white text-2xl mb-4">Droit des assurances et droit bancaire</h3>
                    <p class="text-stone-300 leading-relaxed">
                    DBZ-CONSEIL SCA intervient de manière experte en droit des assurances, en offrant un accompagnement stratégique sur la conformité des sociétés d'assurances ainsi que des assurés vis-à-vis des réglementations en vigueur en République Démocratique du Congo, en veillant à garantir la conformité légale, la protection des droits des assurés, et la gestion des risques dans le respect des normes et des obligations légales locales.                    </p>
                    <div class="absolute top-4 right-4 w-32 h-32 ">
                        <i class="fas fa-landmark text-6xl text-gray-600"  ></i>
                    </div>
                </div>

                <!-- Contenu Foncier -->
                <div x-show="activeTab === 'foncier'"
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 transform translate-y-4"
                     x-transition:enter-end="opacity-100 transform translate-y-0"
                     class="bg-gray-700 p-8 rounded-lg shadow-xl">
                    <h3 class="text-white text-2xl mb-4">Droit foncier et droit de l'environnement</h3>
                    <p class="text-stone-300 leading-relaxed">
                    Expertise approfondie en droit foncier et en droit de l'environnement, avec un accompagnement complet dans les procédures administratives, la gestion des risques juridiques liés à l'immobilier, ainsi que la conformité stricte aux normes environnementales nationales et internationales, garantissant une gestion durable des ressources et un respect total des réglementations en vigueur.
                    </p>
                    <div class="absolute top-4 right-4 w-32 h-32 ">
                        <i class="fas fa-tree text-6xl text-gray-600"></i>
                    </div>
                </div>

                <!-- Contenu Sport -->
                <div x-show="activeTab === 'sport'"
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 transform translate-y-4"
                     x-transition:enter-end="opacity-100 transform translate-y-0"
                     class="bg-gray-700 p-8 rounded-lg shadow-xl">
                    <h3 class="text-white text-2xl mb-4">Droit des loisirs et droit de Sport</h3>
                    <p class="text-stone-300 leading-relaxed">
                    Accompagnement juridique spécialisé des organisations sportives, incluant la gestion des contrats sportifs, la négociation des accords de partenariat, ainsi que le conseil stratégique en matière de réglementation sportive, de conformité aux normes nationales et internationales, et de gestion des risques juridiques liés aux activités sportives, afin de garantir la pérennité et la conformité des structures sportives.                    </p>
                    <div class="absolute top-4 right-4 w-32 h-32">
                        <i class="fas fa-running text-6xl text-gray-600"></i>
                    </div>
                </div>

                <!-- Contenu Commerce -->
                <div x-show="activeTab === 'commerce'"
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 transform translate-y-4"
                     x-transition:enter-end="opacity-100 transform translate-y-0"
                     class="bg-gray-700 p-8 rounded-lg shadow-xl">
                    <h3 class="text-white text-2xl mb-4">Droit de commerce international</h3>
                    <p class="text-stone-300 leading-relaxed">
                    Expertise approfondie en transactions internationales, couvrant la négociation de contrats commerciaux complexes, l'élaboration de stratégies de structuration de deals, ainsi que la résolution efficace des litiges commerciaux internationaux, en assurant la protection des intérêts de nos clients dans le cadre de la législation internationale, la médiation entre parties et l'arbitrage pour garantir des solutions rapides et adaptées.
                    </p>
                    <div class="absolute top-4 right-4 w-32 h-32 ">
                        <i class="fas fa-globe text-6xl  text-gray-600"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.expertise-btn {
    transition: all 0.3s ease-in-out;
}

.expertise-btn:hover {
    transform: translateX(8px);
}
</style>









    <style>
        .expert-card {
            backdrop-filter: blur(10px);
            background: linear-gradient(145deg, rgba(255, 255, 255, 0.05), rgba(255, 255, 255, 0.1));
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .swiper-slide {
            height: auto;
        }
    </style>

<div class="h-3 bg-blue-500 my-6"></div>

    <div class="container mx-auto px-4" id="expert">
        <h1 class="text-4xl font-bold text-white mb-12 flex items-center gap-4">
            <span>Nos</span>
            <span class="text-orange-500">Experts</span>
        </h1>

        <div class="swiper expertsSwiper">
            <div class="swiper-wrapper">
                <!-- Groupe 1 -->
                <div class="swiper-slide">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <!-- Expert 1 -->
                        <div class="expert-card rounded-xl p-4 text-white transition-all duration-300 hover:transform hover:scale-105">
                            <div class="relative mb-4">
                                <img src="assets/img/gallery/yan 1.jpg" alt="Edmond Cibamba Diata" class="w-full h-64 object-cover rounded-lg">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent rounded-lg"></div>
                            </div>
                            <h3 class="text-xl font-bold mb-2">Edmond Cibamba Diata</h3>
                            <p class="text-orange-500 font-medium mb-2">Associé Fondateur</p>
                            <p class="text-gray-300 text-sm mb-4">Bureau de Kinshasa</p>
                            <div class="flex gap-4">
                                <a href="#" class="social-icon text-gray-400 hover:text-orange-500">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"/></svg>
                                </a>
                                <a href="#" class="social-icon text-gray-400 hover:text-orange-500">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124-4.09-.193-7.715-2.157-10.141-5.126-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z"/></svg>
                                </a>
                                <a href="#" class="social-icon text-gray-400 hover:text-orange-500">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667h-3.554v-11.452h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zm-15.11-13.019c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019h-3.564v-11.452h3.564v11.452zm15.106-20.452h-20.454c-.979 0-1.771.774-1.771 1.729v20.542c0 .956.792 1.729 1.771 1.729h20.454c.978 0 1.778-.773 1.778-1.729v-20.542c0-.955-.8-1.729-1.778-1.729z"/></svg>
                                </a>
                            </div>
                        </div>


                        <div class="expert-card rounded-xl p-4 text-white transition-all duration-300 hover:transform hover:scale-105">
                            <div class="relative mb-4">
                                <img src="assets/img/gallery/yan profil.png" alt="Edmond Cibamba Diata" class="w-full h-64 object-cover rounded-lg">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent rounded-lg"></div>
                            </div>
                            <h3 class="text-xl font-bold mb-2">Edmond Cibamba Diata</h3>
                            <p class="text-orange-500 font-medium mb-2">Associé Fondateur</p>
                            <p class="text-gray-300 text-sm mb-4">Bureau de Kinshasa</p>
                            <div class="flex gap-4">
                                <a href="#" class="social-icon text-gray-400 hover:text-orange-500">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"/></svg>
                                </a>
                                <a href="#" class="social-icon text-gray-400 hover:text-orange-500">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124-4.09-.193-7.715-2.157-10.141-5.126-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z"/></svg>
                                </a>
                                <a href="#" class="social-icon text-gray-400 hover:text-orange-500">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667h-3.554v-11.452h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zm-15.11-13.019c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019h-3.564v-11.452h3.564v11.452zm15.106-20.452h-20.454c-.979 0-1.771.774-1.771 1.729v20.542c0 .956.792 1.729 1.771 1.729h20.454c.978 0 1.778-.773 1.778-1.729v-20.542c0-.955-.8-1.729-1.778-1.729z"/></svg>
                                </a>
                            </div>
                        </div>


                        <div class="expert-card rounded-xl p-4 text-white transition-all duration-300 hover:transform hover:scale-105">
                            <div class="relative mb-4">
                                <img src="assets/img/gallery/indexPhoto.jpeg" alt="Edmond Cibamba Diata" class="w-full h-64 object-cover rounded-lg">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent rounded-lg"></div>
                            </div>
                            <h3 class="text-xl font-bold mb-2">Edmond Cibamba Diata</h3>
                            <p class="text-orange-500 font-medium mb-2">Associé Fondateur</p>
                            <p class="text-gray-300 text-sm mb-4">Bureau de Kinshasa</p>
                            <div class="flex gap-4">
                                <a href="#" class="social-icon text-gray-400 hover:text-orange-500">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"/></svg>
                                </a>
                                <a href="#" class="social-icon text-gray-400 hover:text-orange-500">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124-4.09-.193-7.715-2.157-10.141-5.126-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z"/></svg>
                                </a>
                                <a href="#" class="social-icon text-gray-400 hover:text-orange-500">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667h-3.554v-11.452h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zm-15.11-13.019c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019h-3.564v-11.452h3.564v11.452zm15.106-20.452h-20.454c-.979 0-1.771.774-1.771 1.729v20.542c0 .956.792 1.729 1.771 1.729h20.454c.978 0 1.778-.773 1.778-1.729v-20.542c0-.955-.8-1.729-1.778-1.729z"/></svg>
                                </a>
                            </div>
                        </div>

                        <div class="expert-card rounded-xl p-4 text-white transition-all duration-300 hover:transform hover:scale-105">
                            <div class="relative mb-4">
                                <img src="assets/img/gallery/Homepage_testi.png" alt="Edmond Cibamba Diata" class="w-full h-64 object-cover rounded-lg">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent rounded-lg"></div>
                            </div>
                            <h3 class="text-xl font-bold mb-2">Edmond Cibamba Diata</h3>
                            <p class="text-orange-500 font-medium mb-2">Associé Fondateur</p>
                            <p class="text-gray-300 text-sm mb-4">Bureau de Kinshasa</p>
                            <div class="flex gap-4">
                                <a href="#" class="social-icon text-gray-400 hover:text-orange-500">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"/></svg>
                                </a>
                                <a href="#" class="social-icon text-gray-400 hover:text-orange-500">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124-4.09-.193-7.715-2.157-10.141-5.126-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z"/></svg>
                                </a>
                                <a href="#" class="social-icon text-gray-400 hover:text-orange-500">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667h-3.554v-11.452h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zm-15.11-13.019c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019h-3.564v-11.452h3.564v11.452zm15.106-20.452h-20.454c-.979 0-1.771.774-1.771 1.729v20.542c0 .956.792 1.729 1.771 1.729h20.454c.978 0 1.778-.773 1.778-1.729v-20.542c0-.955-.8-1.729-1.778-1.729z"/></svg>
                                </a>
                            </div>
                        </div>
                        
                        <!-- Répéter la structure pour les autres experts -->
                        <!-- Expert 2, 3, 4 avec la même structure -->
                        
                    </div>
                </div>



                 <!-- Groupe 1 -->
                 <div class="swiper-slide">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <!-- Expert 1 -->
                        <div class="expert-card rounded-xl p-4 text-white transition-all duration-300 hover:transform hover:scale-105">
                            <div class="relative mb-4">
                                <img src="assets/img/gallery/inl.jpeg" alt="Edmond Cibamba Diata" class="w-full h-64 object-cover rounded-lg">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent rounded-lg"></div>
                            </div>
                            <h3 class="text-xl font-bold mb-2">Edmond Cibamba Diata</h3>
                            <p class="text-orange-500 font-medium mb-2">Associé Fondateur</p>
                            <p class="text-gray-300 text-sm mb-4">Bureau de Kinshasa</p>
                            <div class="flex gap-4">
                                <a href="#" class="social-icon text-gray-400 hover:text-orange-500">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"/></svg>
                                </a>
                                <a href="#" class="social-icon text-gray-400 hover:text-orange-500">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124-4.09-.193-7.715-2.157-10.141-5.126-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z"/></svg>
                                </a>
                                <a href="#" class="social-icon text-gray-400 hover:text-orange-500">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667h-3.554v-11.452h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zm-15.11-13.019c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019h-3.564v-11.452h3.564v11.452zm15.106-20.452h-20.454c-.979 0-1.771.774-1.771 1.729v20.542c0 .956.792 1.729 1.771 1.729h20.454c.978 0 1.778-.773 1.778-1.729v-20.542c0-.955-.8-1.729-1.778-1.729z"/></svg>
                                </a>
                            </div>
                        </div>


                        <div class="expert-card rounded-xl p-4 text-white transition-all duration-300 hover:transform hover:scale-105">
                            <div class="relative mb-4">
                                <img src="assets/img/gallery/intl.png" alt="Edmond Cibamba Diata" class="w-full h-64 object-cover rounded-lg">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent rounded-lg"></div>
                            </div>
                            <h3 class="text-xl font-bold mb-2">Edmond Cibamba Diata</h3>
                            <p class="text-orange-500 font-medium mb-2">Associé Fondateur</p>
                            <p class="text-gray-300 text-sm mb-4">Bureau de Kinshasa</p>
                            <div class="flex gap-4">
                                <a href="#" class="social-icon text-gray-400 hover:text-orange-500">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"/></svg>
                                </a>
                                <a href="#" class="social-icon text-gray-400 hover:text-orange-500">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124-4.09-.193-7.715-2.157-10.141-5.126-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z"/></svg>
                                </a>
                                <a href="#" class="social-icon text-gray-400 hover:text-orange-500">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667h-3.554v-11.452h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zm-15.11-13.019c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019h-3.564v-11.452h3.564v11.452zm15.106-20.452h-20.454c-.979 0-1.771.774-1.771 1.729v20.542c0 .956.792 1.729 1.771 1.729h20.454c.978 0 1.778-.773 1.778-1.729v-20.542c0-.955-.8-1.729-1.778-1.729z"/></svg>
                                </a>
                            </div>
                        </div>


                        <div class="expert-card rounded-xl p-4 text-white transition-all duration-300 hover:transform hover:scale-105">
                            <div class="relative mb-4">
                                <img src="assets/img/gallery/jo.png" alt="Edmond Cibamba Diata" class="w-full h-64 object-cover rounded-lg">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent rounded-lg"></div>
                            </div>
                            <h3 class="text-xl font-bold mb-2">Edmond Cibamba Diata</h3>
                            <p class="text-orange-500 font-medium mb-2">Associé Fondateur</p>
                            <p class="text-gray-300 text-sm mb-4">Bureau de Kinshasa</p>
                            <div class="flex gap-4">
                                <a href="#" class="social-icon text-gray-400 hover:text-orange-500">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"/></svg>
                                </a>
                                <a href="#" class="social-icon text-gray-400 hover:text-orange-500">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124-4.09-.193-7.715-2.157-10.141-5.126-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z"/></svg>
                                </a>
                                <a href="#" class="social-icon text-gray-400 hover:text-orange-500">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667h-3.554v-11.452h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zm-15.11-13.019c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019h-3.564v-11.452h3.564v11.452zm15.106-20.452h-20.454c-.979 0-1.771.774-1.771 1.729v20.542c0 .956.792 1.729 1.771 1.729h20.454c.978 0 1.778-.773 1.778-1.729v-20.542c0-.955-.8-1.729-1.778-1.729z"/></svg>
                                </a>
                            </div>
                        </div>

                        <div class="expert-card rounded-xl p-4 text-white transition-all duration-300 hover:transform hover:scale-105">
                            <div class="relative mb-4">
                                <img src="assets/img/gallery/mako1.png" alt="Edmond Cibamba Diata" class="w-full h-64 object-cover rounded-lg">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent rounded-lg"></div>
                            </div>
                            <h3 class="text-xl font-bold mb-2">Edmond Cibamba Diata</h3>
                            <p class="text-orange-500 font-medium mb-2">Associé Fondateur</p>
                            <p class="text-gray-300 text-sm mb-4">Bureau de Kinshasa</p>
                            <div class="flex gap-4">
                                <a href="#" class="social-icon text-gray-400 hover:text-orange-500">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"/></svg>
                                </a>
                                <a href="#" class="social-icon text-gray-400 hover:text-orange-500">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124-4.09-.193-7.715-2.157-10.141-5.126-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z"/></svg>
                                </a>
                                <a href="#" class="social-icon text-gray-400 hover:text-orange-500">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667h-3.554v-11.452h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zm-15.11-13.019c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019h-3.564v-11.452h3.564v11.452zm15.106-20.452h-20.454c-.979 0-1.771.774-1.771 1.729v20.542c0 .956.792 1.729 1.771 1.729h20.454c.978 0 1.778-.773 1.778-1.729v-20.542c0-.955-.8-1.729-1.778-1.729z"/></svg>
                                </a>
                            </div>
                        </div>
                        
                        <!-- Répéter la structure pour les autres experts -->
                        <!-- Expert 2, 3, 4 avec la même structure -->
                        
                    </div>
                </div>

                 <!-- Groupe 1 -->
                 <div class="swiper-slide">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <!-- Expert 1 -->
                        <div class="expert-card rounded-xl p-4 text-white transition-all duration-300 hover:transform hover:scale-105">
                            <div class="relative mb-4">
                                <img src="assets/img/gallery/section_bg02.jpg" alt="Edmond Cibamba Diata" class="w-full h-64 object-cover rounded-lg">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent rounded-lg"></div>
                            </div>
                            <h3 class="text-xl font-bold mb-2">Edmond Cibamba Diata</h3>
                            <p class="text-orange-500 font-medium mb-2">Associé Fondateur</p>
                            <p class="text-gray-300 text-sm mb-4">Bureau de Kinshasa</p>
                            <div class="flex gap-4">
                                <a href="#" class="social-icon text-gray-400 hover:text-orange-500">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"/></svg>
                                </a>
                                <a href="#" class="social-icon text-gray-400 hover:text-orange-500">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124-4.09-.193-7.715-2.157-10.141-5.126-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z"/></svg>
                                </a>
                                <a href="#" class="social-icon text-gray-400 hover:text-orange-500">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667h-3.554v-11.452h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zm-15.11-13.019c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019h-3.564v-11.452h3.564v11.452zm15.106-20.452h-20.454c-.979 0-1.771.774-1.771 1.729v20.542c0 .956.792 1.729 1.771 1.729h20.454c.978 0 1.778-.773 1.778-1.729v-20.542c0-.955-.8-1.729-1.778-1.729z"/></svg>
                                </a>
                            </div>
                        </div>


                        <div class="expert-card rounded-xl p-4 text-white transition-all duration-300 hover:transform hover:scale-105">
                            <div class="relative mb-4">
                                <img src="assets/img/gallery/t1.png" alt="Edmond Cibamba Diata" class="w-full h-64 object-cover rounded-lg">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent rounded-lg"></div>
                            </div>
                            <h3 class="text-xl font-bold mb-2">Edmond Cibamba Diata</h3>
                            <p class="text-orange-500 font-medium mb-2">Associé Fondateur</p>
                            <p class="text-gray-300 text-sm mb-4">Bureau de Kinshasa</p>
                            <div class="flex gap-4">
                                <a href="#" class="social-icon text-gray-400 hover:text-orange-500">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"/></svg>
                                </a>
                                <a href="#" class="social-icon text-gray-400 hover:text-orange-500">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124-4.09-.193-7.715-2.157-10.141-5.126-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z"/></svg>
                                </a>
                                <a href="#" class="social-icon text-gray-400 hover:text-orange-500">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667h-3.554v-11.452h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zm-15.11-13.019c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019h-3.564v-11.452h3.564v11.452zm15.106-20.452h-20.454c-.979 0-1.771.774-1.771 1.729v20.542c0 .956.792 1.729 1.771 1.729h20.454c.978 0 1.778-.773 1.778-1.729v-20.542c0-.955-.8-1.729-1.778-1.729z"/></svg>
                                </a>
                            </div>
                        </div>


                        <div class="expert-card rounded-xl p-4 text-white transition-all duration-300 hover:transform hover:scale-105">
                            <div class="relative mb-4">
                                <img src="assets/img/gallery/home_blog1.png" alt="Edmond Cibamba Diata" class="w-full h-64 object-cover rounded-lg">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent rounded-lg"></div>
                            </div>
                            <h3 class="text-xl font-bold mb-2">Edmond Cibamba Diata</h3>
                            <p class="text-orange-500 font-medium mb-2">Associé Fondateur</p>
                            <p class="text-gray-300 text-sm mb-4">Bureau de Kinshasa</p>
                            <div class="flex gap-4">
                                <a href="#" class="social-icon text-gray-400 hover:text-orange-500">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"/></svg>
                                </a>
                                <a href="#" class="social-icon text-gray-400 hover:text-orange-500">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124-4.09-.193-7.715-2.157-10.141-5.126-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z"/></svg>
                                </a>
                                <a href="#" class="social-icon text-gray-400 hover:text-orange-500">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667h-3.554v-11.452h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zm-15.11-13.019c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019h-3.564v-11.452h3.564v11.452zm15.106-20.452h-20.454c-.979 0-1.771.774-1.771 1.729v20.542c0 .956.792 1.729 1.771 1.729h20.454c.978 0 1.778-.773 1.778-1.729v-20.542c0-.955-.8-1.729-1.778-1.729z"/></svg>
                                </a>
                            </div>
                        </div>

                        <div class="expert-card rounded-xl p-4 text-white transition-all duration-300 hover:transform hover:scale-105">
                            <div class="relative mb-4">
                                <img src="assets/img/gallery/home_blog1.png" alt="Edmond Cibamba Diata" class="w-full h-64 object-cover rounded-lg">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent rounded-lg"></div>
                            </div>
                            <h3 class="text-xl font-bold mb-2">Edmond Cibamba Diata</h3>
                            <p class="text-orange-500 font-medium mb-2">Associé Fondateur</p>
                            <p class="text-gray-300 text-sm mb-4">Bureau de Kinshasa</p>
                            <div class="flex gap-4">
                                <a href="#" class="social-icon text-gray-400 hover:text-orange-500">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"/></svg>
                                </a>
                                <a href="#" class="social-icon text-gray-400 hover:text-orange-500">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124-4.09-.193-7.715-2.157-10.141-5.126-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z"/></svg>
                                </a>
                                <a href="#" class="social-icon text-gray-400 hover:text-orange-500">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667h-3.554v-11.452h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zm-15.11-13.019c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019h-3.564v-11.452h3.564v11.452zm15.106-20.452h-20.454c-.979 0-1.771.774-1.771 1.729v20.542c0 .956.792 1.729 1.771 1.729h20.454c.978 0 1.778-.773 1.778-1.729v-20.542c0-.955-.8-1.729-1.778-1.729z"/></svg>
                                </a>
                            </div>
                        </div>
                        
                        <!-- Répéter la structure pour les autres experts -->
                        <!-- Expert 2, 3, 4 avec la même structure -->
                        
                    </div>
                </div>
                
                <!-- Ajouter d'autres groupes similaires -->
                
            </div>
            <div class="swiper-pagination mt-8"></div>
            <div class="swiper-button-next text-white"></div>
            <div class="swiper-button-prev text-white"></div>
        </div>

        <div class="text-center mt-3">
                <a href="/equipes.php" class="inline-flex items-center px-8 py-3 rounded-full bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold transform transition duration-500 hover:scale-105 hover:shadow-lg">
                    <span>Découvrir toute l'équipe</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper(".expertsSwiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            loop: true,
            speed: 1000,
        });
    </script>

<?php require("entetes/footer.php") ?>