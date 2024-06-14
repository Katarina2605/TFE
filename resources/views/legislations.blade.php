<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Sergey Pozhilov (GetTemplate.com)">

    <title>Législations - Respons'adopt</title>

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
                    <li><a class="btn bg-blue-500 text-white px-3 py-2 rounded-md hover:bg-blue-600 transition duration-300" href="/register">S'inscrire</a></li>
                </ul>
            </div>

            <!-- Menu hamburger pour les petites tailles d'écran -->
            <div class="md:hidden flex items-center">
                <button id="mobile-menu-button" class="text-gray-500 hover:text-gray-300 focus:outline-none transition duration-300">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>

            <!-- Menu déroulant pour les petites tailles d'écran -->
            <div id="mobile-menu" class="hidden md:hidden">
                <ul class="flex flex-col mt-2 space-y-2">
                    <li><a href="/index" class="block px-4 py-2 text-sm text-white hover:text-black hover:bg-gray-100 transition duration-300">Accueil</a></li>
                    <li><a href="/refuges" class="block px-4 py-2 text-sm text-white hover:text-black hover:bg-gray-100 transition duration-300">Refuges</a></li>
                    <li><a href="/legislations" class="block px-4 py-2 text-sm text-white hover:text-black hover:bg-gray-100 transition duration-300">Législations</a></li>
                    <li><a href="/contact" class="block px-4 py-2 text-sm text-white hover:text-black hover:bg-gray-100 transition duration-300">Contact</a></li>
                    <li><a href="/register" class="block px-4 py-2 text-sm text-white hover:text-black hover:bg-gray-100 transition duration-300">S'inscrire</a></li>
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

<header id="head" class="bg-gray-200 h-32 mt-16"></header>

<!-- container -->
<div class="container mx-auto px-4 mt-20">

    <nav class="bg-white py-3 rounded mb-4 shadow">
        <ol class="list-reset flex">
            <li class="ml-2"><a href="index" class="text-blue-500">Accueil</a></li>
            <li class="text-gray-500 mx-2">/</li>
            <li class="ml-2 text-gray-500">Legislations</li>
        </ol>
    </nav>


    <div class="flex flex-wrap md:flex-nowrap">

        <!-- Sidebar -->
        <aside class="w-full md:w-1/3 lg:w-1/4 mb-4 md:mb-0 md:mr-4">

            <div class="bg-white p-4 rounded-lg shadow-lg mb-4">
                <h4 class="font-bold mb-2">Adopter ? Oui, mais quelles sont les lois ?</h4>
                <p>Afin d'adopter un animal, il est important que vous puissiez prendre connaissance des divers lois en vigueur en Wallonie.</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-lg mb-4">
                <h4 class="font-bold mb-2">Chats, chiens, lapins...</h4>
                <img src="https://cdn.pixabay.com/photo/2017/07/10/23/49/club-2492011_1280.jpg" alt="" class="rounded-lg">
            </div>
            <div class="bg-white p-4 rounded-lg shadow-lg">
                <h4 class="font-bold mb-2">Tous sont concernés.</h4>
                <img src="https://cdn.pixabay.com/photo/2017/09/26/18/12/kittens-2789622_1280.jpg" alt="" class="rounded-lg mb-2">
                <p>Nous voulons vous aider à prendre connaissance des lois qui sont d'application pour adopter un animal en Wallonie. C'est pour cette raison que nous désirons mettre toutes les ressources à votre disposition.</p>
            </div>

        </aside>
        <!-- /Sidebar -->

        <!-- Article main content -->
        <article class="w-full md:w-2/3 lg:w-3/4">

            <div class="bg-white p-6 rounded-lg shadow-lg mb-4">
                <header class="mb-4">
                    <h1 class="text-3xl font-bold">Législations</h1>
                </header>
                <p>Lorsqu'il s'agit d'adopter un animal, la Wallonie possède des règles, des lois mises en vigueur que chaque citoyen se doit de respecter afin de pouvoir mener à bien une adoption. Ces lois sont régulièrement mises à jour afin de placer le bien être de l'animal en priorité.</p>
                <p>Il va de soi que ces lois ont été pensées pour les animaux, afin de limiter les abandons mais aussi les adoptions impulsives d'un animal qui n'en reste pas moins un être humain.</p>

                <h2 class="text-2xl font-bold mt-4">Sur quels sites puis-je me rendre ?</h2>
                <p>Afin de prendre connaissance des dernières lois mises en place concernant les animaux, je vous invite à consulter <a href="https://www.wallonie.be/fr/vivre-en-wallonie/environnement-et-agriculture/bien-etre-animal" class="text-blue-500 underline hover:text-blue-700 transition duration-300">cette page web</a> ainsi que <a href="http://bienetreanimal.wallonie.be/home/legislation.html" class="text-blue-500 underline hover:text-blue-700 transition duration-300">celle-ci</a> qui sont deux liens menant au site officiel du bien-être animal en Wallonie.</p>
                <p>Ces deux pages sont régulièrement mises à jour. La première page vous donnera accès aux dernières actualités concernant les animaux tel que, par exemple, la fin des colliers électriques ou la mise en place du permis de détention. Le second lien concerne purement la législation mise en place en Wallonie.</p>
                <p>Pour tout renseignement officiel, il sera toujours préférable de consulter ce site. Il sera toujours le premier à parler des lois en vigueur puisque le but de leur site web est exclusivement de parler du bien-être animal dans son ensemble. Si notre but est de vous sensibiliser sur le bien-être animal ainsi que l'adoption dans les refuges, leur site propose bien davantage de contenu qui sera très intéressant à prendre en compte.</p>

                <h3 class="text-xl font-bold mt-4">Besoin de plus de renseignements</h3>
                <p>Si vous avez besoin de davantage d'informations concernant le bien-être animal, vous pourrez certainement les trouver dans <a href="https://www.wallonie.be/sites/default/files/2019-04/code_wallon_bea.pdf" class="text-blue-500 underline hover:text-blue-700 transition duration-300">le code Wallon du bien-être animal</a> qui contient énormément d'informations complémentaires aux législations mises en place.</p>
                <p>Par conséquent, même si cela ne concerne pas uniquement les législations mises en place en Wallonie, il est donc intéressant d'en prendre connaissance avant même de se lancer dans l'adoption d'un animal de compagnie quel qu'il soit.</p>
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
                        <a href="mailto:katarina.gerlage@ifosup.wavre.be" class="text-blue-500 hover:text-blue-700 transition duration-300">katarina.gerlage@ifosup.wavre.be</a><br>
                        <br>
                        Rue de la limite 6, 1300 Wavre.
                    </p>
                </div>
            </div>
            <div class="w-full md:w-1/3 px-4">
                <h3 class="text-lg font-semibold">Retrouvez-moi...</h3>
                <div class="mt-4">
                    <div class="flex space-x-4">
                        <a href="#" class="text-white hover:text-gray-400 transition duration-300"><i class="fab fa-twitter fa-lg"></i></a>
                        <a href="#" class="text-white hover:text-gray-400 transition duration-300"><i class="fab fa-facebook fa-lg"></i></a>
                        <a href="#" class="text-white hover:text-gray-400 transition duration-300"><i class="fab fa-google fa-lg"></i></a>
                        <a href="#" class="text-white hover:text-gray-400 transition duration-300"><i class="fab fa-whatsapp fa-lg"></i></a>
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
                        Copyright &copy; 2024, Katarina. Template créé par <a href="http://gettemplate.com/" class="text-blue-500 hover:underline transition duration-300" rel="designer">gettemplate</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

</body>

</html>
