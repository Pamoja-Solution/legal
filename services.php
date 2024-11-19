<?php $titre ="Servie";require("entetes/header.php"); ?>









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





<nav class="bg-gray-800 border-b border-gray-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <h1 class="text-white font-bold">CABINET D'AVOCATS</h1>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <button onclick="showContent('conseil')" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-all duration-300">Conseil</button>
                            <button onclick="showContent('contentieux')" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-all duration-300">Contentieux</button>
                            <button onclick="showContent('fiscalite')" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-all duration-300">Fiscalité</button>
                            <button onclick="showContent('divers')" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-all duration-300">Divers</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div id="conseil" class="content hidden">
            <div class="bg-gray-800 shadow-xl rounded-lg p-6 transform hover:scale-105 transition-all duration-300">
                <h2 class="text-2xl font-bold text-white mb-4">Services de Conseil</h2>
                <p class="text-gray-300">Notre cabinet propose des services de conseil juridique personnalisés pour répondre à vos besoins spécifiques. Nous vous accompagnons dans vos décisions stratégiques avec expertise et professionnalisme.</p>
                <div class="mt-4 space-y-2">
                    <div class="flex items-center text-gray-400">
                        <svg class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path>
                        </svg>
                        <span>Assistance lors des formalités d’enregistrement ou d’installation en RDC ;</span>
                    </div>
                    <div class="flex items-center text-gray-400">
                        <svg class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path>
                        </svg>
                        <span>Conseils sur divers aspects liés à l’exercice d’activités économiques, philanthropiques ou de toute autre nature sur le territoire congolais ;</span>
                    </div>

                    <div class="flex items-center text-gray-400">
                        <svg class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path>
                        </svg>
                        <span>Conception et rédaction des actes (contrats commerciaux, contrats de travail, conventions de partenariats et contrats de joint-venture, etc.) ; </span>
                    </div>
                    <div class="flex items-center text-gray-400">
                        <svg class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path>
                        </svg>
                        <span>Consultations et production des avis et études sur diverses questions de droit ;</span>
                    </div>

                    <div class="flex items-center text-gray-400">
                        <svg class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path>
                        </svg>
                        <span>Assistance et représentation devant les autorités politico-administratives en cas de nécessité ;</span>
                    </div>

                    <div class="flex items-center text-gray-400">
                        <svg class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path>
                        </svg>
                        <span>Vérification des actes ;</span>
                    </div>

                    <div class="flex items-center text-gray-400">
                        <svg class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path>
                        </svg>
                        <span>Due diligence juridique ;</span>
                    </div>

                    <div class="flex items-center text-gray-400">
                        <svg class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path>
                        </svg>
                        <span>Secrétariat juridique (préparation et organisation des réunions des assemblées générales des sociétés ; rédaction des procès-verbaux ; accomplissement des formalités administratives d’authentification et d’enregistrement des procès-verbaux des assemblées générales et des décisions des organes de gestion de la société ; Organisation de l’archivage des actes de société, etc.)</span>
                    </div>

                    


                </div>
            </div>
        </div>

        <div id="contentieux" class="content hidden">
            <div class="bg-gray-800 shadow-xl rounded-lg p-6 transform hover:scale-105 transition-all duration-300">
                <h2 class="text-2xl font-bold text-white mb-4">Contentieux</h2>
                <p class="text-gray-300">Notre équipe d'avocats expérimentés vous accompagne dans la résolution de vos litiges, que ce soit devant les tribunaux ou par voie de médiation.</p>
                <div class="mt-4 space-y-2">
                    <div class="flex items-center text-gray-400">
                        <svg class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path>
                        </svg>
                        <span>Assistance et représentation du client, en demandant ou en défendant, devant les cours et tribunaux en matière commerciale, civile, pénale, fiscale, de travail, etc.</span>
                    </div>
                    <div class="flex items-center text-gray-400">
                        <svg class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path>
                        </svg>
                        <span>Représentation devant les juridictions arbitrales ;</span>
                    </div>
                    <div class="flex items-center text-gray-400">
                        <svg class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path>
                        </svg>
                        <span>Recouvrement des créances du client par voie judiciaire.</span>
                    </div>


                </div>
            </div>
        </div>

        <div id="fiscalite" class="content hidden">
            <div class="bg-gray-800 shadow-xl rounded-lg p-6 transform hover:scale-105 transition-all duration-300">
                <h2 class="text-2xl font-bold text-white mb-4">Fiscalité</h2>
                <p class="text-gray-300">Nous vous conseillons sur tous les aspects de la fiscalité des entreprises et des particuliers pour optimiser votre situation fiscale en toute légalité.</p>
                <div class="mt-4 space-y-2">
                    <div class="flex items-center text-gray-400">
                        <svg class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path>
                        </svg>
                        <span>Compliance ;</span>
                    </div>
                    <div class="flex items-center text-gray-400">
                        <svg class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path>
                        </svg>
                        <span>Assistance lors des contrôles fiscaux, notamment en cas de redressement fiscal ;</span>
                    </div>

                    <div class="flex items-center text-gray-400">
                        <svg class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path>
                        </svg>
                        <span>Revues fiscales ;</span>
                    </div>

                    <div class="flex items-center text-gray-400">
                        <svg class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path>
                        </svg>
                        <span>Consultations diverses ;</span>
                    </div>

                    <div class="flex items-center text-gray-400">
                        <svg class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path>
                        </svg>
                        <span>Lettres d’information.</span>
                    </div>



                </div>
            </div>
        </div>

        <div id="divers" class="content hidden">
            <div class="bg-gray-800 shadow-xl rounded-lg p-6 transform hover:scale-105 transition-all duration-300">
                <h2 class="text-2xl font-bold text-white mb-4">Services Divers</h2>
                <p class="text-gray-300">Notre cabinet propose également d'autres services juridiques adaptés à vos besoins spécifiques.</p>
                <div class="mt-4 space-y-2">
                    <div class="flex items-center text-gray-400">
                        <svg class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path>
                        </svg>
                        <span>Immigration (Mobilité des travailleurs étrangers ; Obtention des visas et cartes de travail pour étrangers, assistance voyage) ;</span>
                    </div>
                    <div class="flex items-center text-gray-400">
                        <svg class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path>
                        </svg>
                        <span>Formation (renforcement des capacités des professionnels) ;</span>
                    </div>
                    <div class="flex items-center text-gray-400">
                        <svg class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path>
                        </svg>
                        <span>Lobbying.</span>
                    </div>

                </div>
            </div>
        </div>
    </main>

    <script>
        function showContent(id) {
            // Hide all content divs
            document.querySelectorAll('.content').forEach(div => {
                div.classList.add('hidden');
            });
            
            // Show the selected content div
            document.getElementById(id).classList.remove('hidden');
            
            // Add entrance animation
            document.getElementById(id).classList.add('animate-fade-in');
        }

        // Show conseil by default
        showContent('conseil');
    </script>

    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .animate-fade-in {
            animation: fadeIn 0.5s ease-out;
        }
    </style>













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
                    <p class="text-slate-300">Conseils sur divers aspects liés à l’exercice d’activités économiques, philanthropiques ou de toute autre nature sur le territoire congolais ;</p>
                </li>
                <li class="flex items-start space-x-4">
                    <span class="text-2xl text-yellow-500">✍️</span>
                    <p class="text-slate-300">Conception et rédaction des actes (contrats commerciaux, contrats de travail, conventions de partenariats et contrats de joint-venture, etc.) ; </p>
                </li>
                <li class="flex items-start space-x-4">
                    <span class="text-2xl text-yellow-500">📚</span>
                    <p class="text-slate-300">Consultations et production des avis et études sur diverses questions de droit ;</p>
                </li>
                <li class="flex items-start space-x-4">
                    <span class="text-2xl text-yellow-500">🏛️</span>
                    <p class="text-slate-300">Assistance et représentation devant les autorités politico-administratives en cas de nécessité ;</p>
                </li>
                <li class="flex items-start space-x-4">
                    <span class="text-2xl text-yellow-500">✅</span>
                    <p class="text-slate-300">Vérification des actes ;</p>
                </li>
                <li class="flex items-start space-x-4">
                    <span class="text-2xl text-yellow-500">🔍</span>
                    <p class="text-slate-300">Due diligence juridique ;</p>
                </li>
                <li class="flex items-start space-x-4">
                    <span class="text-2xl text-yellow-500">🗂️</span>
                    <p class="text-slate-300">Secrétariat juridique (préparation et organisation des réunions des assemblées générales des sociétés ; rédaction des procès-verbaux ; accomplissement des formalités administratives d’authentification et d’enregistrement des procès-verbaux des assemblées générales et des décisions des organes de gestion de la société ; organisation de l’archivage des actes de société, etc.).</p>
                </li>
            </ul>

        </section>

        <!-- Contentieux Section -->
        <section id="Contentieux" class="container mx-auto p-8 bg-gray-200 rounded-lg shadow-lg transform transition duration-500 hover:scale-105">
            <h3 class="text-3xl font-bold text-gray-800 mb-6">Contentieux</h3>
            <ul class="space-y-4">
                <li class="flex items-start space-x-4">
                    <span class="text-2xl text-yellow-500">⚖️</span>
                    <p class="">Assistance et représentation du client, en demandant ou en défendant, devant les cours et tribunaux en matière commerciale, civile, pénale, fiscale, de travail, etc.</p>
                </li>
                <li class="flex items-start space-x-4">
                    <span class="text-2xl text-yellow-500">🏛️</span>
                    <p class="">Représentation devant les juridictions arbitrales ;</p>
                </li>
                <li class="flex items-start space-x-4">
                    <span class="text-2xl text-yellow-500">💼</span>
                    <p class="">Recouvrement des créances du client par voie judiciaire.</p>
                </li>
            </ul>

        </section>

        <!-- Fiscalite Section -->
        <section id="Fiscalite" class="container mx-auto p-8 bg-gray-700 rounded-lg shadow-lg transform transition duration-500 hover:scale-105">
            <h3 class="text-3xl font-bold text-white mb-6">Fiscalité</h3>
            <ul class="space-y-4">
                <li class="flex items-start space-x-4">
                    <span class="text-2xl text-yellow-500">⚖️</span>
                    <p class="text-slate-300">Assistance et représentation du client, en demandant ou en défendant, devant les cours et tribunaux en matière commerciale, civile, pénale, fiscale, de travail, etc.</p>
                </li>
                <li class="flex items-start space-x-4">
                    <span class="text-2xl text-yellow-500">🏛️</span>
                    <p class="text-slate-300">Représentation devant les juridictions arbitrales ;</p>
                </li>
                <li class="flex items-start space-x-4">
                    <span class="text-2xl text-yellow-500">💼</span>
                    <p class="text-slate-300">Recouvrement des créances du client par voie judiciaire.</p>
                </li>
            </ul>

        </section>

        <!-- Divers Section -->
        <section id="Divers" class="container mx-auto p-8 bg-gray-200 rounded-lg shadow-lg transform transition duration-500 hover:scale-105">
            <h3 class="text-3xl font-bold text-gray-800 mb-6">Services Complémentaires</h3>
            <ul class="space-y-4">
                <li class="flex items-start space-x-4">
                    <span class="text-2xl text-yellow-500">🌍</span>
                    <p>Immigration (Mobilité des travailleurs étrangers ; Obtention des visas et cartes de travail pour étrangers, assistance voyage) ;</p>
                </li>
                <li class="flex items-start space-x-4">
                    <span class="text-2xl text-yellow-500">🎓</span>
                    <p>Formation et renforcement des capacités des professionnels.</p>
                </li>
                <li class="flex items-start space-x-4">
                    <span class="text-2xl text-yellow-500">🤝</span>
                    <p class="">Lobbying.</p>
                </li>

                <!-- Autres éléments ici -->
            </ul>
        </section>
    </div>
</main>




<?php require_once("entetes/footer.php"); ?>