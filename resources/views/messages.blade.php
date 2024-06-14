<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages reçus - Respons'adopt</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">

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
            <li class="ml-2"><a href="index" class="text-blue-500">Accueil</a></li>
            <li class="text-gray-500 mx-2">/</li>
            <li class="ml-2 text-gray-500">Messages reçus</li>
        </ol>
    </nav>

    <div class="bg-white p-6 rounded shadow mb-4">
        <h1 class="text-2xl font-bold mb-4">Messages reçus</h1>
        <table class="min-w-full bg-white">
            <thead>
            <tr>
                <th class="py-2 px-4 bg-gray-200">Email</th>
                <th class="py-2 px-4 bg-gray-200">Message</th>
                <th class="py-2 px-4 bg-gray-200">Reçu le</th>
            </tr>
            </thead>
            <tbody>
            @foreach($contacts as $contact)
                <tr>
                    <td class="border px-4 py-2">{{ $contact->email }}</td>
                    <td class="border px-4 py-2">{{ $contact->message }}</td>
                    <td class="border px-4 py-2">{{ $contact->created_at }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
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
