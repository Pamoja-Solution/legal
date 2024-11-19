<?php require("entetes/header.php") ?>





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
                        <a href="#portefeuille" class="px-8 py-4 bg-gradient-to-r from-pink-500 to-purple-500 rounded-full text-white text-lg font-semibold 
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
                image: 'assets/img/gallery/yan 5-1.png',
                title: "Excellence Juridique",
                text: "Notre cabinet accompagne particuliers et entreprises dans toutes leurs démarches juridiques, en proposant des solutions stratégiques et adaptées."
            },
            {
                image: 'assets/img/gallery/yan 7.jpg',
                title: "Solutions Innovantes",
                text: "Nous offrons des services juridiques innovants et sur mesure pour vous guider dans les défis juridiques d’aujourd’hui."
            },
            {
                image: 'assets/img/gallery/yan profil.png',
                title: "20 Ans d'Expérience",
                text: "En tant que partenaires de confiance, nous travaillons à vos côtés pour trouver des solutions juridiques pragmatiques et durables."
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















<section class="bg-white py-16">
  <div class="container mx-auto px-6 lg:px-12">
    <!-- Titre de la section -->
    <header class="text-center mb-12">
      <h2 class="text-sm font-semibold text-gray-500 uppercase tracking-wide">Nos valeurs</h2>
      <h1 class="text-4xl font-bold text-gray-800">Ce qui nous définit</h1>
      <p class="text-gray-600 mt-4">
        Nous nous engageons à respecter les principes fondamentaux qui guident notre travail
        et nos relations avec nos clients.
      </p>
    </header>

    <!-- Grille des valeurs -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
      <!-- Carte Valeur -->
      <div class="group border border-gray-200 rounded-lg p-6 hover:shadow-lg transition">
        <div class="flex items-center justify-center w-16 h-16 bg-blue-500 text-white rounded-full mx-auto">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6l4 2" />
          </svg>
        </div>
        <h3 class="text-xl font-semibold text-gray-800 mt-6 text-center">Engagement</h3>
        <p class="text-gray-600 mt-4 text-center">
          Nous mettons un point d'honneur à fournir des solutions adaptées aux besoins uniques
          de nos clients, avec rigueur et dévouement.
        </p>
      </div>

      <!-- Carte Valeur -->
      <div class="group border border-gray-200 rounded-lg p-6 hover:shadow-lg transition">
        <div class="flex items-center justify-center w-16 h-16 bg-green-500 text-white rounded-full mx-auto">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
          </svg>
        </div>
        <h3 class="text-xl font-semibold text-gray-800 mt-6 text-center">Transparence</h3>
        <p class="text-gray-600 mt-4 text-center">
          Nous opérons avec honnêteté et intégrité, en garantissant des communications claires
          et une gestion transparente.
        </p>
      </div>

      <!-- Carte Valeur -->
      <div class="group border border-gray-200 rounded-lg p-6 hover:shadow-lg transition">
        <div class="flex items-center justify-center w-16 h-16 bg-yellow-500 text-white rounded-full mx-auto">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
        </div>
        <h3 class="text-xl font-semibold text-gray-800 mt-6 text-center">Excellence</h3>
        <p class="text-gray-600 mt-4 text-center">
          Nous visons toujours l'excellence dans nos prestations, en veillant à surpasser les
          attentes et à offrir un travail de haute qualité.
        </p>
      </div>
    </div>
  </div>
</section>







<section class="bg-gray-100 py-16" id="vision">
  <div class="container mx-auto px-6 lg:px-12">
    <!-- Titre de la section -->
    <header class="text-center mb-12">
      <h2 class="text-sm font-semibold text-gray-500 uppercase tracking-wide">Nos visions</h2>
      <h1 class="text-4xl font-bold text-gray-800">Un avenir guidé par des principes forts</h1>
      <p class="text-gray-600 mt-4">
        Nous nous efforçons de bâtir un avenir solide en mettant l'accent sur la justice, la stratégie, et un impact durable pour nos clients.
      </p>
    </header>

    <!-- Grille des visions -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
      <!-- Vision 1 -->
      <div class="flex flex-col items-center text-center">
        <div class="w-16 h-16 bg-blue-600 text-white flex items-center justify-center rounded-full shadow-lg">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 0a3 3 0 110-6h6a3 3 0 110 6m-6 0a3 3 0 110 6h6a3 3 0 110-6" />
          </svg>
        </div>
        <h3 class="text-xl font-semibold text-gray-800 mt-6">Équité et Justice</h3>
        <p class="text-gray-600 mt-4">
          Nous croyons en une application rigoureuse des principes de justice pour garantir des solutions équitables et durables.
        </p>
      </div>

      <!-- Vision 2 -->
      <div class="flex flex-col items-center text-center">
        <div class="w-16 h-16 bg-green-600 text-white flex items-center justify-center rounded-full shadow-lg">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4.354 4.354 0 110 8.708M12 4.354v8.708m0-8.708a4.354 4.354 0 110 8.708m0 0v3.94m-4.354-3.94h8.708" />
          </svg>
        </div>
        <h3 class="text-xl font-semibold text-gray-800 mt-6">Stratégie innovante</h3>
        <p class="text-gray-600 mt-4">
          Nous développons des solutions juridiques et fiscales en phase avec les besoins évolutifs de nos partenaires.
        </p>
      </div>

      <!-- Vision 3 -->
      <div class="flex flex-col items-center text-center">
        <div class="w-16 h-16 bg-yellow-600 text-white flex items-center justify-center rounded-full shadow-lg">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c3.31 0 6 2.69 6 6a6 6 0 11-12 0c0-3.31 2.69-6 6-6zm0 0V5m0 0a3 3 0 100 6m0 0h5" />
          </svg>
        </div>
        <h3 class="text-xl font-semibold text-gray-800 mt-6">Impact durable</h3>
        <p class="text-gray-600 mt-4">
          Nous visons un impact à long terme en renforçant la résilience de nos clients dans un environnement complexe.
        </p>
      </div>
    </div>
  </div>
</section>






<section class="" id="contact">
     <!-- Section Carte Améliorée -->
     <div id="map" class="container mx-auto px-4 py-16">
            <div class="map-container">
                <div class="map-overlay">
                    <h2 class="text-3xl font-bold text-gray-300 mb-4">Comment nous trouver ?</h2>
                    <p class="text-gray-100 mb-4">Suivez ces étapes simples pour nous rendre visite :</p>
                    
                    <div class="direction-steps mb-3">
                        <div class="flex items-center gap-4 mb-3">
                            <div class="bg-blue-600 text-gray-200 rounded-full w-8 h-8 flex items-center justify-center">1</div>
                            <p class="text-gray-300" >Localisez le bureau le plus proche de chez vous sur la carte</p>
                        </div>
                        <div class="flex items-center gap-4 mb-3">
                            <div class="bg-blue-600 text-gray-200 rounded-full w-8 h-8 flex items-center justify-center">2</div>
                            <p class="text-gray-300">Cliquez sur le marqueur pour voir l'adresse exacte</p>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="bg-blue-600 text-gray-200 rounded-full w-8 h-8 flex items-center justify-center">3</div>
                            <p class="text-gray-300">Utilisez le bouton "Obtenir l'itinéraire" pour le trajet détaillé</p>
                        </div>
                    </div>
                </div>

                <div class="relative pt-[400px] rounded rounded-lg ">
                    <iframe 
                        class="absolute top-0 left-0 w-full h-full rounded rounded-lg"
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

        
</section>


















<div class="max-w-6xl mx-auto px-4 py-12" id="portefeuille">
    <div class="bg-white rounded-2xl shadow-lg p-8">
        <!-- Header Section -->
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Notre Portefeuille Clients</h1>

        <!-- Description Section -->
        <p class="text-gray-600 mb-8 leading-relaxed">
            Notre portefeuille client est composé principalement des entreprises et institutions exerçant diverses activités, notamment les activités commerciales et industrielles, les travaux de génie, les œuvres à caractère philanthropique, la coopération internationale au développement, les services consulaires et diplomatiques, la radiodiffusion, les prestations des services, la sous-traitance dans le secteur privé, la consultance, etc.
        </p>

        <!-- Clients Section -->
        <div>
            <h2 class="text-xl font-semibold text-gray-700 mb-4">Nos références clients :</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="bg-blue-50 p-4 rounded-lg hover:bg-blue-100 transition duration-300 flex items-center space-x-4">
                    <img src="assets/nos/dw.webp" alt="Deutsche Welle Logo" class="w-32 h-32 rounded-full">
                    <a href="#" class="text-blue-600 hover:text-blue-800">Deutsche Welle (DW)</a>
                </div>
                <div class="bg-blue-50 p-4 rounded-lg hover:bg-blue-100 transition duration-300 flex items-center space-x-4">
                    <img src="assets/nos/ambassade.jpeg" alt="Ambassade d'Allemagne Logo" class="w-32 h-32 rounded-full">
                    <a href="#" class="text-blue-600 hover:text-blue-800">Ambassade de la République Fédérale d'Allemagne en RDC</a>
                </div>
                <div class="bg-blue-50 p-4 rounded-lg hover:bg-blue-100 transition duration-300 flex items-center space-x-4">
                    <img src="assets/nos/friendr.png" alt="Fondation Friedrich Ebert Logo" class="w-32 h-32 rounded-full">
                    <a href="#" class="text-blue-600 hover:text-blue-800">Fondation Friedrich Ebert</a>
                </div>
                <div class="bg-blue-50 p-4 rounded-lg hover:bg-blue-100 transition duration-300 flex items-center space-x-4">
                    <img src="assets/nos/patrick.jpeg" alt="Particip GmbH Logo" class="w-32 h-32 rounded-full">
                    <a href="#" class="text-blue-600 hover:text-blue-800">Particip GmbH</a>
                </div>
                <div class="bg-blue-50 p-4 rounded-lg hover:bg-blue-100 transition duration-300 flex items-center space-x-4">
                    <img src="assets/nos/rtm.png" alt="RTM Construct Logo" class="w-32 h-32 rounded-full">
                    <a href="#" class="text-blue-600 hover:text-blue-800">RTM Construct Sarl</a>
                </div>
                <div class="bg-blue-50 p-4 rounded-lg hover:bg-blue-100 transition duration-300 flex items-center space-x-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-32 w-32 text-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M7 17.9l8.9-8.9c-.7-1.1-1.9-1.8-3.2-1.8-2.1 0-3.9 1.7-3.9 3.9 0 1.3.7 2.5 1.8 3.2l-3.6 3.6zm7.6-12.7c.9-.9 2.1-1.4 3.4-1.4s2.5.5 3.4 1.4l.1.1c.9.9 1.4 2.1 1.4 3.4s-.5 2.5-1.4 3.4l-8.9 8.9c-1.3 1.3-3.1 2.1-5 2.1s-3.7-.8-5-2.1l-.1-.1c-1.3-1.3-2.1-3.1-2.1-5s.8-3.7 2.1-5l8.9-8.9z"/>
                            </svg>
                    <a href="#" class="text-blue-600 hover:text-blue-800">MFG Business Sarlu</a>
                </div>
            </div>
        </div>
    </div>
</div>




<section class="bg-gray-100 py-16" id="portefeuille" >
  <div class="container mx-auto px-6 lg:px-12">
    <!-- Titre de la section -->
    <header class="text-center mb-12">
      <h2 class="text-sm font-semibold text-gray-500 uppercase tracking-wide">Notre Portefeuille</h2>
      <h1 class="text-4xl font-bold text-gray-800">Nos Domaines d'Expertise</h1>
      <p class="text-gray-600 mt-4">
        Découvrez les domaines dans lesquels nous offrons des services juridiques d’excellence.
      </p>
    </header>

    <!-- Grille des domaines -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Droit des affaires -->
      <div class="relative overflow-hidden rounded-lg shadow-lg bg-white group">
        <div class="p-6">
          <h3 class="text-xl font-semibold text-gray-800 mb-4">Droit des affaires</h3>
          <ul class="list-disc list-inside text-gray-600 space-y-2">
            <li>
              <strong>Création et enregistrement d’une entreprise :</strong> Accompagner un client dans la constitution de sa société, rédaction des statuts, dépôt de documents auprès des autorités locales.
            </li>
            <li>
              <strong>Fusions et acquisitions :</strong> Conseiller une entreprise lors d'une acquisition ou fusion, rédiger les contrats et effectuer les audits juridiques.
            </li>
            <li>
              <strong>Gestion des litiges commerciaux :</strong> Représenter une entreprise dans un conflit avec un fournisseur ou un client.
            </li>
          </ul>
        </div>
      </div>

      <!-- Droit immobilier -->
      <div class="relative overflow-hidden rounded-lg shadow-lg bg-white group">
        <div class="p-6">
          <h3 class="text-xl font-semibold text-gray-800 mb-4">Droit immobilier</h3>
          <ul class="list-disc list-inside text-gray-600 space-y-2">
            <li>
              <strong>Négociation de contrats de location :</strong> Rédaction ou révision de baux commerciaux ou résidentiels.
            </li>
            <li>
              <strong>Gestion de litiges immobiliers :</strong> Défendre un propriétaire dans une affaire d’expulsion ou de non-paiement de loyer.
            </li>
            <li>
              <strong>Vente ou acquisition immobilière :</strong> Assister un client dans l’achat ou la vente d’un bien immobilier.
            </li>
          </ul>
        </div>
      </div>

      <!-- Droit social et du travail -->
      <div class="relative overflow-hidden rounded-lg shadow-lg bg-white group">
        <div class="p-6">
          <h3 class="text-xl font-semibold text-gray-800 mb-4">Droit social et du travail</h3>
          <ul class="list-disc list-inside text-gray-600 space-y-2">
            <li>
              <strong>Rédaction de contrats de travail :</strong> Élaboration de contrats adaptés aux lois locales pour une entreprise embauchant des employés.
            </li>
            <li>
              <strong>Gestion de conflits employés-employeurs :</strong> Représenter une entreprise dans une affaire de licenciement abusif.
            </li>
            <li>
              <strong>Mise en conformité légale :</strong> Accompagner une entreprise dans l’implémentation de politiques respectant les lois.
            </li>
          </ul>
        </div>
      </div>

      <!-- Droit pénal -->
      <div class="relative overflow-hidden rounded-lg shadow-lg bg-white group">
        <div class="p-6">
          <h3 class="text-xl font-semibold text-gray-800 mb-4">Droit pénal</h3>
          <ul class="list-disc list-inside text-gray-600 space-y-2">
            <li>
              <strong>Défense pénale :</strong> Assurer la défense d’un client accusé de fraude ou d’autres infractions.
            </li>
            <li>
              <strong>Représentation des victimes :</strong> Soutenir une victime dans une procédure judiciaire pour obtenir réparation.
            </li>
          </ul>
        </div>
      </div>

      <!-- Droit de la famille -->
      <div class="relative overflow-hidden rounded-lg shadow-lg bg-white group">
        <div class="p-6">
          <h3 class="text-xl font-semibold text-gray-800 mb-4">Droit de la famille</h3>
          <ul class="list-disc list-inside text-gray-600 space-y-2">
            <li>
              <strong>Procédure de divorce :</strong> Aider un couple à organiser un divorce amiable ou contentieux.
            </li>
            <li>
              <strong>Succession et héritage :</strong> Rédaction de testaments, médiation dans des litiges familiaux.
            </li>
          </ul>
        </div>
      </div>

      <!-- Projets spécifiques -->
      <div class="relative overflow-hidden rounded-lg shadow-lg bg-white group">
        <div class="p-6">
          <h3 class="text-xl font-semibold text-gray-800 mb-4">Projets spécifiques</h3>
          <ul class="list-disc list-inside text-gray-600 space-y-2">
            <li>
              <strong>Médiation juridique pour conflits communautaires :</strong> Intervention dans des conflits impliquant des groupes locaux ou des entreprises.
            </li>
            <li>
              <strong>Formation juridique :</strong> Organisation de formations pour des entreprises sur le droit des contrats.
            </li>
            <li>
              <strong>Conseil pour startups technologiques :</strong> Assistance dans la rédaction des CGU ou politiques de confidentialité.
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>





<div class="container mx-auto px-4 mt-6" id="partenariat">
        <h1 class="text-4xl font-bold text-white mb-12 flex items-center gap-4">
            <span>Nos</span>
            <span class="text-orange-500">Partenaires</span>
        </h1>



        <div class="swiper partnersSwiper">
            <div class="swiper-wrapper">
                <!-- Groupe 1 -->
                <div class="swiper-slide">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <!-- Partenaire 1 -->
                        <div class="partner-card rounded-xl p-4 bg-white text-gray-800 transition-all duration-300 hover:transform hover:scale-105 shadow-md">
                            <div class="relative mb-4">
                                <img src="assets/nos/image.png" alt="Partenaire 1" class="w-full h-40 object-contain rounded-lg bg-gray-100 p-2">
                            </div>
                            <h3 class="text-lg font-semibold mb-2">CESCIC-Canada International </h3>
                            <p class="text-sm mb-4">cabinet de consultation en immigration qui a pour mission d'aider et d'accompagner les gens à travers le monde à réaliser leur projet d'immigration au Canada</p>
                            <div class="flex gap-4">
                                <a href="https://cescic.com/" class="social-icon text-gray-400 hover:text-blue-500">
                                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.213 9.787a3.391 3.391 0 0 0-4.795 0l-3.425 3.426a3.39 3.39 0 0 0 4.795 4.794l.321-.304m-.321-4.49a3.39 3.39 0 0 0 4.795 0l3.424-3.426a3.39 3.39 0 0 0-4.794-4.795l-1.028.961"/>
                                </svg>

                                </a>
                                
                            </div>
                        </div>
                        <!-- Partenaire 2 -->
                        <div class="partner-card rounded-xl p-4 bg-white text-gray-800 transition-all duration-300 hover:transform hover:scale-105 shadow-md">
                            <div class="relative mb-4">
                                <img src="assets/img/gallery/brand2.png" alt="Partenaire 2" class="w-full h-40 object-contain rounded-lg bg-gray-100 p-2">
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Deutsch-Kongolesische Juristenvereinigung (DKoJV e.V.)</h3>
                            <p class="text-sm mb-4">Association Germano-Congolaise des juristes .</p>
                            <div class="flex gap-4">
                                <a href="https://www.dkojv.org/" class="social-icon text-gray-400 hover:text-blue-500">
                                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.213 9.787a3.391 3.391 0 0 0-4.795 0l-3.425 3.426a3.39 3.39 0 0 0 4.795 4.794l.321-.304m-.321-4.49a3.39 3.39 0 0 0 4.795 0l3.424-3.426a3.39 3.39 0 0 0-4.794-4.795l-1.028.961"/>
                                </svg>

                                </a>
                                
                            </div>
                        </div>





                        <div class="partner-card rounded-xl p-4 bg-white text-gray-800 transition-all duration-300 hover:transform hover:scale-105 shadow-md">
                            <div class="relative mb-4">
                                <img src="assets/nos/image copy.png" alt="Partenaire 2" class="w-full h-40 object-contain rounded-lg bg-gray-100 p-2">
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Hamann Rechtsanwälte</h3>
                            <p class="text-sm mb-4"></p>
                            <div class="flex gap-4">
                                <a href="https://hamann-legal.de/index_fr.html" class="social-icon text-gray-400 hover:text-blue-500">
                                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.213 9.787a3.391 3.391 0 0 0-4.795 0l-3.425 3.426a3.39 3.39 0 0 0 4.795 4.794l.321-.304m-.321-4.49a3.39 3.39 0 0 0 4.795 0l3.424-3.426a3.39 3.39 0 0 0-4.794-4.795l-1.028.961"/>
                                </svg>

                                </a>
                                
                            </div>
                        </div>



                        <div class="partner-card rounded-xl p-4 bg-white text-gray-800 transition-all duration-300 hover:transform hover:scale-105 shadow-md">
                            <div class="relative mb-4">
                                <img src="assets/nos/image copy 2.png" alt="Partenaire 2" class="w-full h-40 object-contain rounded-lg bg-gray-100 p-2">
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Intelligence Consulting DRC Sarl</h3>
                            <p class="text-sm mb-4"></p>
                            <!--div class="flex gap-4">
                                <a href="https://www.dkojv.org/" class="social-icon text-gray-400 hover:text-blue-500">
                                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.213 9.787a3.391 3.391 0 0 0-4.795 0l-3.425 3.426a3.39 3.39 0 0 0 4.795 4.794l.321-.304m-.321-4.49a3.39 3.39 0 0 0 4.795 0l3.424-3.426a3.39 3.39 0 0 0-4.794-4.795l-1.028.961"/>
                                </svg>

                                </a>
                                
                            </div-->
                        </div>


                        <div class="partner-card rounded-xl p-4 bg-white text-gray-800 transition-all duration-300 hover:transform hover:scale-105 shadow-md">
                            <div class="relative mb-4">
                                <img src="assets/nos/image copy 3.png" alt="Partenaire 1" class="w-full h-40 object-contain rounded-lg bg-gray-100 p-2">
                            </div>
                            <h3 class="text-lg font-semibold mb-2">Smart & Sustainable Business Solutions (SSBS Sarl)</h3>
                            <p class="text-sm mb-4">est une société de droit congolais, qui offre des services aussi bien aux particuliers qu'à d'autres entreprises</p>
                            <div class="flex gap-4">
                                <a href="https://ssbs-sarl.com/" class="social-icon text-gray-400 hover:text-blue-500">
                                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.213 9.787a3.391 3.391 0 0 0-4.795 0l-3.425 3.426a3.39 3.39 0 0 0 4.795 4.794l.321-.304m-.321-4.49a3.39 3.39 0 0 0 4.795 0l3.424-3.426a3.39 3.39 0 0 0-4.794-4.795l-1.028.961"/>
                                </svg>

                                </a>
                                
                            </div>
                        </div>



                    </div>


                </div>





            </div>
        </div>
        </div>
        </div>
        </div>
        </div>


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper(".partnersSwiper", {
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