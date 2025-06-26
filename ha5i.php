<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Portfolio - TEA Steven</title>
</head>

<body>
    <header>
        <div class="mt-5">
            <ul class="flex justify-around">
                <li>
                    <a class="font-bold text-2xl" href="./index.php">_TS</a>
                </li>
                <li>
                    <a class="text-lg text-black-500 hover:underline mr-4" href="./à_propos.php">À propos</a>
                    <a class="text-lg text-black500 hover:underline" href="./contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </header>
    <div>
        <p class="txt-defilant">
            MY_H5AI MY_H5AI MY_H5AI MY_H5AI MY_H5AI MY_H5AI MY_H5AI MY_H5AI MY_H5AI MY_H5AI
        </p>
    </div>
    <div class="scroll-container">
        <section class="container mx-auto px-4 py-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h2 class="text-2xl font-bold mb-4 text-gray-400">Technologies utilisées</h2>
                    <ul class="list-disc list-inside text-gray-700 space-y-4">
                            <span class="font-bold text-lg text-black-400 flex justify-center mb-2">Frontend</span>
                            <ul class="list-disc list-inside ml-6 text-gray-600 text-left">
                                <li><span class="font-semibold">PUG/TailwindCSS:</span> Interface utilisateur responsive et moderne</li>
                                <li><span class="font-semibold">JavaScript:</span> Interactions dynamiques, aperçu de fichiers, navigation</li>
                                <li><span class="font-semibold">Icons & UI:</span> Icônes personnalisées par type de fichier, favicon HTML</li>
                            </ul>
                            <div class="mt-4">
                            <span class="font-bold text-lg text-black-400 flex justify-center mb-2">Backend</span>
                            </div>
                            <ul class="list-disc list-inside ml-6 text-gray-600 text-left">
                                <li><span class="font-semibold">Serveur&nbsp;:</span> Node.js + Express</li>
                                <li><span class="font-semibold">Système de fichiers&nbsp;:</span> Parcours récursif personnalisé (sans itérateurs natifs)</li>
                            </ul>
                    </ul>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h2 class="text-2xl font-bold mb-4 text-gray-400">Fonctionnalités principales</h2>
                    <ul class="list-disc list-inside text-gray-700 space-y-4 text-left">
                            <ul class="list-disc list-inside ml-6 space-y-4">
                                <li>Navigation&nbsp;: Arborescence interactive, fil d’Ariane (breadcrumb), flèches retour/avancer</li>
                                <li>Métadonnées&nbsp;: Affichage taille des fichiers, dates de modification</li>
                                <li>Recherche &amp; Tri&nbsp;: Recherche par nom, tri par taille/date/nom</li>
                                <li>Aperçu&nbsp;: Visualisation de fichiers texte</li>
                                <li>Modules&nbsp;: Coloration syntaxique, visualiseur de médias, API REST</li>
                                <li>Performance&nbsp;: Pagination pour les gros dossiers</li>
                            </ul>
                    </ul>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h2 class="text-2xl font-bold mb-4 text-gray-400">Durée de production</h2>
                    <p class="text-gray-700 text-lg">2 semaines</p>
                </div>
            </div>
            <div class="mt-8 flex justify-center">
                <a href="https://github.com/stvntea/My_H5AI" target="_blank" class="inline-block bg-gray-800 text-white px-3 py-1 rounded-lg shadow hover:bg-gray-700 transition">
                    Voir le projet sur GitHub
                </a>
            </div>
        </section>
    </div>
    <footer class="bg-gray-400 text-white py-6">
        <p class="text-xl font-semibold text-center mb-4">_CONTACT : anthonysteven.tea@gmail.com</p>
        <div class="container mx-auto text-center">
            <div class="flex justify-center space-x-4 mt-4">
                <a href="https://github.com/stvntea" target="_blank" class="hover:text-gray-600">
                    <i class="fab fa-github"></i> GitHub
                </a>
                <a href="https://www.linkedin.com/in/steven-tea-71b20a166/" target="_blank" class="hover:text-gray-600">
                    <i class="fab fa-linkedin"></i> LinkedIn
                </a>
            </div>
        </div>
    </footer>
</body>

</html>