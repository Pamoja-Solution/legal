<?php require("entetes/header.php") ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AEQUITAS LEGAL PARTNERS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>

<div x-data="{ currentSlide: 0 }" class="relative w-full h-screen">
    <!-- Slides -->
    <div class="relative h-full overflow-hidden">
        <!-- Slide 1 -->
        <div x-show="currentSlide === 0" 
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 transform translate-x-full"
             x-transition:enter-end="opacity-100 transform translate-x-0"
             x-transition:leave="transition ease-in duration-300"
             x-transition:leave-start="opacity-100 transform translate-x-0"
             x-transition:leave-end="opacity-0 transform -translate-x-full"
             class="absolute inset-0">
            <div class="relative w-full h-full">
                <!-- Image de fond avec overlay -->
                <div class="absolute inset-0 bg-black/50">
                    <img src="votre-image.jpg" class="w-full h-full object-cover" alt="Background">
                </div>
                
                <!-- Contenu -->
                <div class="relative z-10 flex flex-col justify-center h-full px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
                    <div class="space-y-4">
                        <div class="w-1 h-16 bg-pink-500"></div>
                        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white leading-tight">
                            Bienvenue chez<br>AEQUITAS LEGAL<br>PARTNERS
                        </h1>
                        <button class="mt-8 px-6 py-3 bg-pink-500 text-white text-sm uppercase tracking-wider font-semibold hover:bg-pink-600 transition-colors duration-200">
                            NOS SERVICES
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation buttons -->
        <button @click="currentSlide = (currentSlide - 1 + 3) % 3" 
                class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white/10 hover:bg-white/20 text-white rounded-full p-2 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </button>
        
        <button @click="currentSlide = (currentSlide + 1) % 3"
                class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white/10 hover:bg-white/20 text-white rounded-full p-2 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </button>
    </div>

    <!-- Indicators -->
    <div class="absolute bottom-4 left-0 right-0 flex justify-center space-x-2">
        <button @click="currentSlide = 0" 
                :class="{'bg-pink-500': currentSlide === 0, 'bg-white/50': currentSlide !== 0}"
                class="w-2 h-2 rounded-full transition-colors duration-200"></button>
        <button @click="currentSlide = 1"
                :class="{'bg-pink-500': currentSlide === 1, 'bg-white/50': currentSlide !== 1}"
                class="w-2 h-2 rounded-full transition-colors duration-200"></button>
        <button @click="currentSlide = 2"
                :class="{'bg-pink-500': currentSlide === 2, 'bg-white/50': currentSlide !== 2}"
                class="w-2 h-2 rounded-full transition-colors duration-200"></button>
    </div>
</div>

</body>
</html>
<main style="width: 100%; height: 900px; padding:300px">
    locale_accept_from_http
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum nihil vero veniam error, dicta quae sequi esse molestiae totam assumenda ea, maxime consectetur accusamus. Praesentium omnis eaque dignissimos iure modi!
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima sequi blanditiis magnam, reiciendis quibusdam optio quidem corporis quam nemo officia debitis natus mollitia voluptatibus, quas, autem quo officiis est at!
    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi magnam officiis modi consequatur nulla maiores explicabo provident neque dignissimos inventore id alias assumenda cumque sit culpa, quo distinctio eaque eveniet.

</main>


<?php require("footer.php") ?>