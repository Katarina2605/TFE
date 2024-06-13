<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Sergey Pozhilov (GetTemplate.com)">


    <title>Crédits - Respons'adopt</title>

    <link rel="shortcut icon" href="assets/images/gt_favicon.png">

    <!-- Importing Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>

<body class="bg-gray-100">

<!-- Fixed navbar -->
<div class="fixed top-0 w-full bg-gray-800 text-white shadow-lg z-50">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between py-3">
            <div class="flex items-center">
                <a class="ml-4" href="index">
                    <img src="https://zupimages.net/up/24/24/8p9g.png" alt="Respons'adopt logo" class="h-12">
                </a>
            </div>
            <div class="md:flex md:items-center">
                <ul class="hidden md:flex space-x-6">
                    <li><a href="/index" class="hover:underline text-white">Accueil</a></li>
                    <li><a href="/refuges" class="hover:underline text-white">Refuges</a></li>
                    <li><a href="/legislations" class="hover:underline text-white">Législations</a></li>
                    <li><a href="/contact" class="hover:underline text-white">Contact</a></li>
                    <li><a class="btn bg-blue-500 text-white px-3 py-2 rounded-md" href="/register">S'inscrire</a></li>
                </ul>
            </div>

            <!-- Menu hamburger pour les petites tailles d'écran -->
            <div class="md:hidden flex items-center">
                <button id="mobile-menu-button" class="text-gray-500 hover:text-gray-900 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>

            <!-- Menu déroulant pour les petites tailles d'écran -->
            <div id="mobile-menu" class="hidden md:hidden">
                <ul class="flex flex-col mt-2 space-y-2">
                    <li><a href="/index" class="block px-4 py-2 text-sm text-white hover:text-black hover:bg-gray-100">Accueil</a></li>
                    <li><a href="/refuges" class="block px-4 py-2 text-sm text-white hover:text-black hover:bg-gray-100">Refuges</a></li>
                    <li><a href="/legislations" class="block px-4 py-2 text-sm text-white hover:text-black hover:bg-gray-100">Législations</a></li>
                    <li><a href="/contact" class="block px-4 py-2 text-sm text-white hover:text-black hover:bg-gray-100">Contact</a></li>
                    <li><a href="/register" class="block px-4 py-2 text-sm text-white hover:text-black hover:bg-gray-100">S'inscrire</a></li>
                </ul>
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    const mobileMenuButton = document.getElementById('mobile-menu-button');
                    const mobileMenu = document.getElementById('mobile-menu');

                    mobileMenuButton.addEventListener('click', function () {
                        mobileMenu.classList.toggle('hidden');
                    });
                });
            </script>

        </div>
    </div>
</div>

<header id="head" class="bg-gray-200 h-32"></header>

<!-- container -->
<div class="container mx-auto px-4 mt-20">

    <nav class="bg-white py-3 rounded mb-4 shadow">
        <ol class="list-reset flex">
            <li><a href="index" class="text-blue-500">Accueil</a></li>
            <li class="text-gray-500 mx-2">/</li>
            <li class="text-gray-500">Crédits</li>
        </ol>
    </nav>

    <div class="flex flex-wrap">

        <!-- Sidebar -->
        <aside class="w-full md:w-1/3 lg:w-1/4 mb-4 md:mb-0">

            <div class="bg-white p-4 rounded shadow mb-4">
                <h4 class="font-bold mb-2">Remerciements</h4>
                <p>Afin de mener à bien la créations de ce site web, différents site web ont été utilisés et nous tenons à leur apporter le crédit lié à leur travail.</p>
            </div>
            <div class="bg-white p-4 rounded shadow mb-4">
                <h4 class="font-bold mb-2">Chats, chiens, lapins...</h4>
                <img src="https://cdn.pixabay.com/photo/2017/08/07/12/35/cat-2603395_1280.jpg" alt="">
            </div>

        </aside>
        <!-- /Sidebar -->

        <!-- Article main content -->
        <article class="w-full md:w-2/3 lg:w-3/4">

            <div class="bg-white p-4 rounded shadow mb-4">
                <header class="mb-4">
                    <h1 class="text-2xl font-bold">Crédits</h1>
                </header>
                <h2 class="text-xl font-bold mt-4">Le template</h2>
                <p>Le template utilisé lors de la créations du site Respons'adopt provient du site <a href="https://www.gettemplate.com">Gettemplates</a> et est libre d'usage professionnel. Nous remercions sincèrement son créateur pour le travail effectué. L'organisation et l'apparence des pages a été modifiée pour s'adapter à mon projet.</p>


                <h3 class="text-lg font-bold mt-4">Les images</h3>
                <p>Les diverses images présentes sur le site, incluant le header qui se situe sur la page d'accueil, ont toutes été trouvée sur le site <a href="https://pixabay.com/">Pixabay</a> qui propose des images en libre usage professionnel.</p>
                <!--<p>La favicon utilisée à l'effigie de la tête de chat qui est visible sur les divers onglets du site a été prise sur <a href="https://favicon.io/emoji-favicons/cat-face/">Favicon</a>.</p>-->
                <p>L'icon servant de marqueur dans la page "Refuges" a été trouvée sur le site de <a href="https://cdn-icons-png.flaticon.com/512/2229/2229675.png">Flaticon</a>.</p>

                <h3 class="text-lg font-bold mt-4">Divers</h3>
                <p>La carte provient du site <a href="https://leafletjs.com/">Leaflet</a> qui est une librairie JavaScript Opensource.</p>
                <p>Afin de générer la palette de couleurs nécessaire à la construction du site, j'ai fais appel à <a href="https://toolki.com/fr/image-palette">Toolki</a></p>
                <p>Toutes les fonts présentes sur le site proviennent du site <a href="https://fonts.google.com/">Google Font</a>.</p>
                <br>
                <p>Nous tenons donc à remercier chacun de ces sites web qui m'ont permise de mener à bien la création de mon site web.</p>
            </div>

        </article>
        <!-- /Article -->

    </div>
</div>
<!-- /container -->

<footer id="footer" class="bg-gray-900 text-white py-8 mt-8">
    <div class="container mx-auto">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full md:w-1/3 px-4">
                <h3 class="text-lg font-semibold">Contact</h3>
                <div class="mt-4">
                    <p>010 22 20 26<br>
                        <a href="mailto:katarina.gerlage@ifosup.wavre.be">katarina.gerlage@ifosup.wavre.be</a><br>
                        <br>
                        Rue de la limite 6, 1300 Wavre.
                    </p>
                </div>
            </div>
            <div class="w-full md:w-1/3 px-4">
                <h3 class="text-lg font-semibold">Retrouvez-moi...</h3>
                <div class="mt-4">
                    <div class="flex space-x-4">
                        <a href="#" class="text-white"><i class="fab fa-twitter fa-lg"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-facebook fa-lg"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-whatsapp fa-lg"></i></a>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/3 px-4">
                <h3 class="text-lg font-semibold">Quelques informations</h3>
                <div class="mt-4">
                    <p>Ce site web a été créé de manière purement bénévole et il a pour but de vous aider dans vos diverses démarches, reprenant en un seul site diverses informations importantes, la liste des refuges,...</p>
                    <p>Afin de savoir d'où proviennent les sources, différents liens ont été intégrés au sein du site. Une page de crédit est également accessible afin de remercier tous les créateurs. Toute forme de plagiat du contenu du site, partielle ou complète, est formellement interdite.</p>
                </div>
            </div>
        </div>
        <div class="mt-8 border-t border-gray-700 pt-8">
            <div class="flex flex-wrap justify-between">
                <div class="w-full md:w-1/2">
                    <p class="text-sm">
                        <a href="#" class="hover:underline">Accueil</a> |
                        <a href="contact" class="hover:underline">Contact</a> |
                        <a href="legislations" class="hover:underline">Legislation</a> |
                        <a href="refuges" class="hover:underline">Refuges</a> |
                        <a href="mentions" class="hover:underline">Mentions légales</a> |
                        <a href="credits" class="hover:underline">Crédits</a> |
                        <b><a href="login" class="hover:underline">Se connecter</a></b>
                    </p>
                </div>
                <div class="w-full md:w-1/2 text-right">
                    <p class="text-sm">
                        Copyright &copy; 2024, Katarina. Template créé par <a href="http://gettemplate.com/" class="text-blue-500 hover:underline" rel="designer">gettemplate</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
