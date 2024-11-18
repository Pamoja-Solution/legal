<?php require("entetes/header.php"); ?>






    <style>
        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .hover-scale {
            transition: transform 0.3s ease;
        }
        
        .hover-scale:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body class="bg-gradient-to-br from-gray-900 via-blue-900 to-purple-900 min-h-screen">
    
    <!-- En-tête -->
    <header class="relative h-[40vh] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 bg-black/50"></div>
        <div class="relative z-10 text-center">
            <h1 class="text-5xl font-bold text-white mb-4 tracking-wider">
                Nos Domaines d'Intervention
            </h1>
            <div class="w-24 h-1 bg-blue-500 mx-auto rounded-full"></div>
        </div>
    </header>

    <!-- Contenu Principal -->
    <main class="container mx-auto px-4 -mt-20">
        <div class="glass-effect rounded-xl p-8 shadow-2xl">
            <!--div class="text-white max-w-3xl mx-auto mb-12">
                <h2 class="text-3xl font-bold mb-6 text-blue-400">Droit des Ressources Naturelles</h2>
                <p class="text-gray-300 leading-relaxed">
                    L'exploration et l'exploitation des ressources naturelles attirent de plus en plus d'investisseurs internationaux. Notre expertise couvre tous les aspects juridiques et réglementaires des secteurs minier, pétrolier, forestier, agricole et des ressources hydrauliques.
                </p>
            </div-->

            <!-- Grille des services -->


            












            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">


            <div class="glass-effect rounded-lg p-6 hover-scale">
                    <!-- Titre principal -->
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 rounded-full bg-blue-500 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-label="Balance de justice">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v2m0 4v12m0-16a2 2 0 11-4 0 2 2 0 114 0zm6 8a2 2 0 11-4 0 2 2 0 114 0zm-6 0a2 2 0 01-4 0M6 12h12"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-white">Règlement des différends</h3>
                    </div>

                    <!-- Liste des sous-éléments -->
                    <ul class="mt-4 space-y-2 text-slate-300">
                        <li class="flex items-start space-x-2">
                            <span class="text-blue-500">⚖️</span>
                            <p>Arbitrage</p>
                        </li>
                        <li class="flex items-start space-x-2">
                            <span class="text-blue-500">📜</span>
                            <p>Contentieux civils et commerciaux</p>
                        </li>
                        <li class="flex items-start space-x-2">
                            <span class="text-blue-500">🏛️</span>
                            <p>Contentieux administratif et constitutionnel</p>
                        </li>
                    </ul>

                    
                </div>

                            
                <!-- Droit des affaires -->
                <div class="glass-effect rounded-lg p-6 hover-scale">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 rounded-full bg-green-500 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v18m9-9H3" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-white">Droit des affaires</h3>
                    </div>
                    <ul class="mt-4 space-y-2 text-slate-300">
                        <li>◦ Droit des investissements</li>
                        <li>◦ Droit des sociétés, y compris les entreprises en difficultés</li>
                        <li>◦ Droit des marchés publics</li>
                        <li>◦ Droit commercial général</li>
                        <li>◦ Sous-traitance dans le secteur privé</li>
                    </ul>
                </div>

                <!-- Droit et gouvernance des ressources naturelles -->
                <div class="glass-effect rounded-lg p-6 hover-scale">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 rounded-full bg-yellow-500 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M9 21V3m6 0v18" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-white">Droit et gouvernance des ressources naturelles</h3>
                    </div>
                    <ul class="mt-4 space-y-2 text-slate-300">
                        <li>◦ Droit minier et des hydrocarbures</li>
                        <li>◦ Droit de l’environnement</li>
                        <li>◦ Responsabilité sociale des entreprises (RSE) et développement communautaire</li>
                        <li>◦ Etudes d’impacts environnementaux</li>
                    </ul>
                </div>

                <!-- Protection du patrimoine -->
                <div class="glass-effect rounded-lg p-6 hover-scale">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 rounded-full bg-blue-500 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3v18h18V3H3zm9 9H3m0 0h9v9m-9-9v9h9" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-white">Protection du patrimoine</h3>
                    </div>
                    <ul class="mt-4 space-y-2 text-slate-300">
                        <li>◦ Droit foncier et immobilier</li>
                        <li>◦ Droit de la propriété intellectuelle et des innovations technologiques</li>
                        <li>◦ Droit des sûretés et recouvrement des créances</li>
                    </ul>
                </div>

                <!-- Finance, banque et assurances -->
                <div class="glass-effect rounded-lg p-6 hover-scale">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 rounded-full bg-purple-500 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M9 21V3m6 0v18" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-white">Finance, banque et assurances</h3>
                    </div>
                    <ul class="mt-4 space-y-2 text-slate-300">
                        <li>◦ Droit bancaire</li>
                        <li>◦ Droit des assurances privées</li>
                        <li>◦ Mécanismes des financements innovants</li>
                    </ul>
                </div>

                <!-- Immigration et coopération internationale -->
                <div class="glass-effect rounded-lg p-6 hover-scale">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 rounded-full bg-orange-500 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h18v18H3V3zm6 6h6m0 6H9" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-white">Immigration et coopération internationale</h3>
                    </div>
                    <ul class="mt-4 space-y-2 text-slate-300">
                        <li>◦ Droit de l’immigration</li>
                        <li>◦ Négociation des accords-cadres avec le Gouvernement congolais</li>
                    </ul>
                </div>

    <!-- Autres sections -->
    <!-- Répétez la même structure avec les autres catégories et leurs sous-éléments -->


















            

                <!-- Mines -->
                <div class="glass-effect rounded-lg p-6 hover-scale">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 rounded-full bg-yellow-500 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-white">Mines</h3>
                    </div>
                    <div class="mt-4">
                        <a href="/domains/mine.php" class="text-blue-400 hover:text-blue-300 flex items-center">
                            En savoir plus
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Hydrocarbures -->
                <div class="glass-effect rounded-lg p-6 hover-scale">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 rounded-full bg-blue-500 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-white">Hydrocarbures</h3>
                    </div>
                    <div class="mt-4">
                        <a href="/domains/hydrocarbures.php" class="text-blue-400 hover:text-blue-300 flex items-center">
                            En savoir plus
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Foresterie -->
                <div class="glass-effect rounded-lg p-6 hover-scale">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 rounded-full bg-green-500 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M7 17.9l8.9-8.9c-.7-1.1-1.9-1.8-3.2-1.8-2.1 0-3.9 1.7-3.9 3.9 0 1.3.7 2.5 1.8 3.2l-3.6 3.6zm7.6-12.7c.9-.9 2.1-1.4 3.4-1.4s2.5.5 3.4 1.4l.1.1c.9.9 1.4 2.1 1.4 3.4s-.5 2.5-1.4 3.4l-8.9 8.9c-1.3 1.3-3.1 2.1-5 2.1s-3.7-.8-5-2.1l-.1-.1c-1.3-1.3-2.1-3.1-2.1-5s.8-3.7 2.1-5l8.9-8.9z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-white">Foresterie</h3>
                    </div>
                    <div class="mt-4">
                        <a href="/domains/foresteir.php" class="text-blue-400 hover:text-blue-300 flex items-center">
                            En savoir plus
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>


<?php require("entetes/footer.php"); ?>