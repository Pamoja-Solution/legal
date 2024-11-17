
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-- Bouton Scroll-To-Top -->
<button
  id="scrollToTopBtn"
  class="fixed bottom-6 right-6 bg-blue-500 text-white p-3 rounded-full shadow-lg opacity-0 invisible transition-opacity duration-300 hover:bg-blue-600"
  onclick="scrollToTop()"
  title="Retour en haut"
>
  <!-- Icône -->
  <svg
    xmlns="http://www.w3.org/2000/svg"
    fill="none"
    viewBox="0 0 24 24"
    stroke-width="2"
    stroke="currentColor"
    class="w-6 h-6"
  >
    <path stroke-linecap="round" stroke-linejoin="round" d="M19 14l-7-7m0 0l-7 7m7-7v18" />
  </svg>
</button>

<script>
  // Obtenir le bouton
  const scrollToTopBtn = document.getElementById("scrollToTopBtn");

  // Fonction pour montrer ou cacher le bouton
  window.addEventListener("scroll", () => {
    if (window.scrollY > 300) {
      scrollToTopBtn.classList.remove("opacity-0", "invisible");
      scrollToTopBtn.classList.add("opacity-100", "visible");
    } else {
      scrollToTopBtn.classList.remove("opacity-100", "visible");
      scrollToTopBtn.classList.add("opacity-0", "invisible");
    }
  });

  // Fonction pour défiler jusqu'au sommet
  function scrollToTop() {
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  }
</script>





<footer class="bg-primary-dark text-white mt-6">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Section Contact -->
        <div>
            <img class="h-16 mb-4 rounded rounded-lg" src="assets/img/logo/logo3.jpeg" alt="Elite Law Firm Logo">
            <h2 class="text-accent font-semibold mb-2">Siège Principal:</h2>
            <p class="mb-1">195, Avenue Colonel Ebeya</p>
            <p class="mb-1">Immeuble La Référence, App. 302</p>
            <p class="mb-1">Commune de Gombe</p>
            <p class="mb-1">Ville de Kinshasa, République Démocratique du Congo</p>
            <p class="mb-1">Tél: +243 821056899</p>
            <p class="mb-1">
                E-Mail: 
                <a href="mailto:info@aequilex-partners.com" class="text-accent hover:underline">info@aequilex-partners.com</a>
            </p>
        </div>

        <!-- Section Services -->
        <div>
            <h3 class="text-accent font-semibold mb-4">SERVICES</h3>
            <ul class="space-y-2">
                <li><a href="#" class="hover:text-accent-light">Conseil</a></li>
                <li><a href="#" class="hover:text-accent-light">Contentieux</a></li>
                <li><a href="#" class="hover:text-accent-light">Fiscalité</a></li>
                <li><a href="#" class="hover:text-accent-light">Divers</a></li>
            </ul>
        </div>

        <!-- Section À propos -->
        <div>
            <h3 class="text-accent font-semibold mb-4">A PROPOS</h3>
            <ul class="space-y-2">
                <li><a href="#" class="hover:text-accent-light">Qui Sommes-Nous?</a></li>
                <li><a href="#" class="hover:text-accent-light">Notre vision</a></li>
                <li><a href="#" class="hover:text-accent-light">Localisation</a></li>
                <li><a href="#" class="hover:text-accent-light">Organisation</a></li>
                <li><a href="#" class="hover:text-accent-light">Equipe</a></li>
                <li><a href="#" class="hover:text-accent-light">Notre portefeuille</a></li>
                <li><a href="#" class="hover:text-accent-light">Partenariats professionnels</a></li>
            </ul>
            <h3 class="text-accent font-semibold mt-6 mb-2">Nous suivre:</h3>
            <div class="flex space-x-4">
                <a href="#" class="text-white hover:text-accent-light"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-white hover:text-accent-light"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-white hover:text-accent-light"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" class="text-white hover:text-accent-light"><i class="fab fa-google-plus-g"></i></a>
            </div>
        </div>
    </div>

    <!-- Copyright -->
    <div class="bg-primary-light py-4 text-center text-sm">
        Copyright © 2024 - Aequitas Legal Partners
    </div>
</footer>



</body>
</html>


       