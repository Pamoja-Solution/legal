<?php require("entetes/header.php"); ?>

<main class="relative overflow-hidden">
    <!-- Hero Start -->
    <div class="relative bg-gray-800 text-white py-20">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-4">Nos services</h2>
            <p class="text-lg max-w-3xl mx-auto">
                Les prestations juridiques d’Aequitas Legal Partners couvrent tous les secteurs d’activités.
                Elles sont regroupées en quatre axes principaux : 
                <span class="font-semibold">
                    <a href="#Conseil" class="hover:text-yellow-300 transition duration-300">Conseil</a>, 
                    <a href="#Contentieux" class="hover:text-yellow-300 transition duration-300">Contentieux</a>, 
                    <a href="#Fiscalite" class="hover:text-yellow-300 transition duration-300">Fiscalité</a> & 
                    <a href="#Divers" class="hover:text-yellow-300 transition duration-300">Divers</a>.
                </span>
            </p>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Sections -->
    <div class="space-y-20 py-20 bg-gray-800">
        <!-- Conseil Section -->
        <section id="Conseil" class="container mx-auto p-8 bg-gray-700 rounded-lg shadow-lg transform transition duration-500 hover:scale-105">
            <h3 class="text-3xl font-bold text-white mb-6">Conseil</h3>
            <ul class="space-y-4">
                <li class="flex items-start space-x-4">
                    <span class="text-2xl text-yellow-500">📋</span>
                    <p class="text-slate-300">Assistance lors des formalités d’enregistrement ou d’installation en RDC.</p>
                </li>
                <li class="flex items-start space-x-4">
                    <span class="text-2xl text-yellow-500">💡</span>
                    <p class="text-slate-300">Conseils sur divers aspects liés à l’exercice d’activités économiques ou philanthropiques.</p>
                </li>
                <li class="flex items-start space-x-4">
                    <span class="text-2xl text-yellow-500">✍️</span>
                    <p class="text-slate-300">Conception et rédaction des actes juridiques divers.</p>
                </li>
                <!-- Autres éléments ici -->
            </ul>
        </section>

        <!-- Contentieux Section -->
        <section id="Contentieux" class="container mx-auto p-8 bg-gray-200 rounded-lg shadow-lg transform transition duration-500 hover:scale-105">
            <h3 class="text-3xl font-bold text-gray-800 mb-6">Représentation Légale</h3>
            <ul class="space-y-4">
                <li class="flex items-start space-x-4">
                    <span class="text-2xl text-yellow-500">⚖️</span>
                    <p>Assistance et représentation devant les cours et tribunaux.</p>
                </li>
                <li class="flex items-start space-x-4">
                    <span class="text-2xl text-yellow-500">🏛️</span>
                    <p>Représentation devant les juridictions arbitrales.</p>
                </li>
                <!-- Autres éléments ici -->
            </ul>
        </section>

        <!-- Fiscalite Section -->
        <section id="Fiscalite" class="container mx-auto p-8 bg-gray-700 rounded-lg shadow-lg transform transition duration-500 hover:scale-105">
            <h3 class="text-3xl font-bold text-white mb-6">Fiscalité</h3>
            <ul class="space-y-4">
                <li class="flex items-start space-x-4">
                    <span class="text-2xl text-yellow-500">✔️</span>
                    <p class="text-slate-300">Compliance et assistance lors des contrôles fiscaux.</p>
                </li>
                <li class="flex items-start space-x-4">
                    <span class="text-2xl text-yellow-500">📊</span>
                    <p class="text-slate-300">Revues fiscales et consultations diverses.</p>
                </li>
                <!-- Autres éléments ici -->
            </ul>
        </section>

        <!-- Divers Section -->
        <section id="Divers" class="container mx-auto p-8 bg-gray-200 rounded-lg shadow-lg transform transition duration-500 hover:scale-105">
            <h3 class="text-3xl font-bold text-gray-800 mb-6">Services Complémentaires</h3>
            <ul class="space-y-4">
                <li class="flex items-start space-x-4">
                    <span class="text-2xl text-yellow-500">🌍</span>
                    <p>Immigration : obtention de visas et cartes de travail.</p>
                </li>
                <li class="flex items-start space-x-4">
                    <span class="text-2xl text-yellow-500">🎓</span>
                    <p>Formation et renforcement des capacités des professionnels.</p>
                </li>
                <!-- Autres éléments ici -->
            </ul>
        </section>
    </div>
</main>




<?php require_once("entetes/footer.php"); ?>
 