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
<div x-data="carousel(5000)" class="relative w-full h-auto overflow-hidden">
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


</body>
</html>
<main style="width: 100%; height: 900px; padding:300px">
    locale_accept_from_http
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum nihil vero veniam error, dicta quae sequi esse molestiae totam assumenda ea, maxime consectetur accusamus. Praesentium omnis eaque dignissimos iure modi!
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima sequi blanditiis magnam, reiciendis quibusdam optio quidem corporis quam nemo officia debitis natus mollitia voluptatibus, quas, autem quo officiis est at!
    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi magnam officiis modi consequatur nulla maiores explicabo provident neque dignissimos inventore id alias assumenda cumque sit culpa, quo distinctio eaque eveniet.

</main>


<?php require("entetes/footer.php") ?>