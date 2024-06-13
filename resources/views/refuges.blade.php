<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Sergey Pozhilov (GetTemplate.com)">

  <title>Refuges du Brabant Wallon - Respons'adopt</title>

  <link rel="shortcut icon" href="assets/images/gt_favicon.png">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <!-- CSS LEAFLET -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
        integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
        crossorigin=""/>

  <!-- JS LEAFLET -->
  <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
          integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
          crossorigin=""></script>

  <style>
    #map {
      height: 400px;
      width: 100%;
    }
  </style>
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
<!-- /.navbar -->

<header id="head" class="bg-gray-200 h-32 mt-12"></header>

<!-- container -->
<div class="container mx-auto px-4 py-8">

  <ol class="breadcrumb flex space-x-2">
    <li><a href="index" class="hover:underline text-blue-600">Accueil</a></li>
    <li class="text-gray-600">/ Refuges</li>
  </ol>

  <div class="flex flex-wrap -mx-4">

    <!-- Sidebar -->
    <aside class="w-full md:w-1/3 px-4">
      <div class="mb-8 p-4 bg-white rounded-lg shadow-md">
        <h4 class="font-bold mb-2">Favoriser les adoptions</h4>
        <p>Chaque année, beaucoup d'animaux subissent un abandon... Notre but ? Vous aider à trouver le refuge le plus proche de chez vous afin de vous donner toutes les cartes en main pour rendre un animal heureux.</p>
      </div>
      <div class="mb-8 p-4 bg-white rounded-lg shadow-md">
        <h4 class="font-bold mb-2">Lorem ipsum dolor sit</h4>
        <img src="https://cdn.pixabay.com/photo/2016/01/01/02/01/animal-welfare-1116203_1280.jpg" alt="" class="w-full h-48 object-cover rounded-lg">
      </div>
      <div class="mb-8 p-4 bg-white rounded-lg shadow-md">
        <h4 class="font-bold mb-2">Lorem ipsum dolor sit</h4>
        <img src="https://cdn.pixabay.com/photo/2016/01/01/02/01/animal-welfare-1116205_1280.jpg" alt="" class="w-full h-48 object-cover rounded-lg mb-2">
        <p>Le saviez-vous ? Adopter un animal, c'est en aider deux : le premier qui sera votre compagnon pour la vie, et le second sera celui qui pourra avoir une place dans un refuge grâce à la place libérée.</p>
      </div>
    </aside>
    <!-- /Sidebar -->

    <!-- Article main content -->
    <article class="w-full md:w-2/3 px-4">
      <header class="mb-4">
        <h1 class="text-3xl font-bold">Refuges situés en Wallonie</h1>
      </header>

      <div id="map" class="mb-4"></div>

      <script>
        var map = L.map('map').setView([50.71890273096661, 4.608002540534588], 13);

        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
          maxZoom: 19,
          attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        var pawIcon = L.icon({
          iconUrl: 'https://cdn-icons-png.flaticon.com/512/2229/2229675.png',
          iconSize: [30, 30],
          iconAnchor: [22, -15],
          popupAnchor: [-3, -76]
        });

        var marker = L.marker([50.625672934911115, 4.765615284390158], {icon: pawIcon}).addTo(map);
        marker.bindPopup("<b>Sans collier</b><br>Chau. de Charleroi 68<br>1360 Perwez<br>081354090");

        var marker = L.marker([50.703189354253276, 4.9966058095239125], {icon: pawIcon}).addTo(map);
        marker.bindPopup("<b>SOS Petits Museaux</b><br>Rue Cyrille Dewael 26<br>1350 Orp-Jauche");

        var marker = L.marker([50.747130738605556, 4.811446942327357], {icon: pawIcon}).addTo(map);
        marker.bindPopup("<b>Animal Behaviour Center</b><br>Rue de la Maison du Bois 108<br>1370 Jodoigne<br>0497481557");

        var marker = L.marker([50.596290683143145, 4.342780696027994], {icon: pawIcon}).addTo(map);
        marker.bindPopup("<b>Un toit pour eux</b><br>Av. du Centenaire 80<br>1400 Nivelles<br>0493773527");

        var marker = L.marker([50.67103436936168, 4.349777826719766], {icon: pawIcon}).addTo(map);
        marker.bindPopup("<b>Everyone Matters</b><br>Rue les Tiennes 51</br>1421 Braine L'alleud<br>0465881689");

        var marker = L.marker([50.67103436936168, 4.349777826719766], {icon: pawIcon}).addTo(map);
        marker.bindPopup("<b>Animal Sans Logis</b><br>Enclos Tesnière 1<br>4122 Neupré<br>043714321");

        var marker = L.marker([50.65539326626177, 5.269532237090876], {icon: pawIcon}).addTo(map);
        marker.bindPopup("<b>Animal Sans Toi...t</b><br>Rue de Huy 188<br>4317 Faimes<br>019630036");

        var marker = L.marker([50.65539326626177, 5.269532237090876], {icon: pawIcon}).addTo(map);
        marker.bindPopup("<b>La croix bleue de Belgique</b><br>Rue du Charbonnage 1<br>5150 Floreffe<br>081440660");

        var marker = L.marker([50.65496541004919, 4.163812209942694], {icon: pawIcon}).addTo(map);
        marker.bindPopup("<b>Ligue Nationale pour la Protection du Furet</b><br>1430, Chau. de Mons 26<br>1430 Rebecq<br>067336767");

        var marker = L.marker([50.673550754415146, 4.617010255800462], {icon: pawIcon}).addTo(map);
        marker.bindPopup("<b>Chiens en liberté</b><br>1430, Chau. de Mons 26<br>1430 Rebecq<br>067336767");
      </script>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, mollitia.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, perspiciatis, ea, blanditiis tenetur culpa voluptas atque facere odio aliquam eligendi corporis quae natus optio aperiam dolor voluptatem libero nesciunt ad.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, nisi.</p>
    </article>
    <!-- /Article -->
  </div>
</div>  <!-- /container -->

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
            <a href="index" class="hover:underline">Accueil</a> |
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
            Copyright &copy; 2022, Katarina. Template créé par <a href="http://gettemplate.com/" class="text-blue-500 hover:underline" rel="designer">gettemplate</a>
          </p>
        </div>

      </div>
    </div>
  </div>
</footer>
</body>
</html>
