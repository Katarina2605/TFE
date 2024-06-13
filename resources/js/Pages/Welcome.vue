<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
  isLoggedIn: {
    type: Boolean,
    required: true,
  },
});

</script>

<template>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Sergey Pozhilov (GetTemplate.com)">

    <title>Respons'adopt</title>

    <link rel="shortcut icon" href="https://www.zupimages.net/up/24/24/a9t8.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
  </head>

  <body class="home bg-gray-100 font-sans text-justify">
  <!-- Fixed navbar -->
  <div class="fixed top-0 w-full bg-gray-800 text-white shadow-lg z-50">
    <div class="container mx-auto px-4">
      <div class="flex items-center justify-between py-3">
        <div class="flex items-center">
            <a class="ml-4" href="index">
                <img src="https://zupimages.net/up/24/24/8p9g.png" alt="Respons'adopt logo" class="h-12">
            </a>
        </div>
        <div class="hidden md:flex md:items-center">
          <ul class="flex space-x-6">
            <li class="active"><a href="index" class="hover:underline">Accueil</a></li>
            <li><a href="refuges" class="hover:underline">Refuges</a></li>
            <li><a href="legislations" class="hover:underline">Législations</a></li>
            <li><a href="contact" class="hover:underline">Contact</a></li>

            <!-- Utilisation de la directive v-if pour conditionner l'affichage -->
            <template v-if="isLoggedIn">
              <li><a class="btn bg-blue-500 text-white px-3 py-2 rounded-md" href="dashboard">Dashboard</a></li>
            </template>

            <template v-else>
              <!-- Redirection vers la page d'inscription -->
              <li><a class="btn bg-blue-500 text-white px-3 py-2 rounded-md" href="register">S'inscrire</a></li>
            </template>

          </ul>
        </div>
      </div>
    </div>
  </div>




<!-- /.navbar -->

    <!-- Header -->
    <header id="head" class="h-screen flex items-center justify-center bg-cover bg-center" style="background-image: url('https://zupimages.net/up/24/24/4bqg.jpg');">

    <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold text-white">Respons'adopt</h1>
            <p class="text-lg text-gray-200 mt-4">Notre site aura pour but de vous aider à connaître les législatives concernant l'adoption d'un animal de façon légale et responsable..<br> Nous vous aiderons également à connaître les SPA les plus proches de chez vous.</p>
            <p class="mt-6"><a class="btn bg-blue-500 text-white px-6 py-3 rounded-md" role="button" href="View/contact.php">Nous contacter</a></p>
        </div>
    </header>
    <!-- /Header -->

    <!-- Intro -->
    <div class="container mx-auto text-center py-16">
        <h2 class="text-2xl font-semibold">Pourquoi avoir créé ce site ?</h2>
        <p class="text-gray-700 mt-4">Nous avons créé ce site afin de faciliter les adoptions des animaux de compagnie au sein de la Wallonie. En effet, différentes lois existent à ce sujet.<br> Nôtre but est donc de vous informer un maximum, de mettre à vôtre disposition toutes les ressources nécessaires, mais également de vous permettre de savoir vers où vous tourner pour pouvoir adopter.</p>
    </div>
    <!-- /Intro-->

    <!-- Highlights -->
    <div class="bg-gray-100 py-16">
        <div class="container mx-auto">
            <h3 class="text-center text-2xl font-semibold">Les raisons de faire appel à nous</h3>

          <div class="flex flex-wrap mt-8">
            <div class="w-full md:w-1/4 p-4 flex-grow">
              <div class="bg-white shadow-md rounded-md p-6 text-center h-full">
                <div class="text-blue-500 mb-4">
                  <i class="fa fa-location-arrow fa-2xl" aria-hidden="true"></i>
                </div>
                <h4 class="font-semibold">Proche de chez vous</h4>
                <p class="mt-2">Grâce à notre page "refuges", vous aurez la possibilité de consulter les différents refuges présents au sein de la Wallonie pour pouvoir trouver facilement le refuge qui sera le plus proche de chez vous.</p>
              </div>
            </div>
            <div class="w-full md:w-1/4 p-4 flex-grow">
              <div class="bg-white shadow-md rounded-md p-6 text-center h-full">
                <div class="text-blue-500 mb-4">
                  <i class="fa fa-plus fa-2x"></i>
                </div>
                <h4 class="font-semibold">Responsable</h4>
                <p class="mt-2">Une adoption se doit d'être un acte responsable. Via l'onglet "Législations", nous vous proposons de prendre connaissance des diverses lois qui sont d'application.</p>
              </div>
            </div>
            <div class="w-full md:w-1/4 p-4 flex-grow">
              <div class="bg-white shadow-md rounded-md p-6 text-center h-full">
                <div class="text-blue-500 mb-4">
                  <i class="fa fa-heart fa-2x"></i>
                </div>
                <h4 class="font-semibold">L'amour des animaux</h4>
                <p class="mt-2">Un animal est un engagement qui durera le long de sa vie mais qui vous donnera beaucoup d'amour. C'est un être humain à part entière et une adoption doit se prendre très au sérieux.</p>
              </div>
            </div>
            <div class="w-full md:w-1/4 p-4 flex-grow">
              <div class="bg-white shadow-md rounded-md p-6 text-center h-full">
                <div class="text-blue-500 mb-4">
                  <i class="fa fa-handshake fa-2x" aria-hidden="true"></i>
                </div>
                <h4 class="font-semibold">Aider à sauver les animaux</h4>
                <p class="mt-2">Chaque année, beaucoup d'animaux subissent un abandon. Pourtant, sauver un animal équivaut à en sauver deux : un qui trouvera un nid douillet à vie et l'autre qui aura une place libre dans un refuge.</p>
              </div>
            </div>
          </div> <!-- /row  -->
        </div>
    </div>
    <!-- /Highlights -->

    <!-- container -->
    <div class="container mx-auto py-16">
        <h2 class="text-center text-2xl font-semibold">Frequently Asked Questions</h2>
        <br>

        <div class="flex flex-wrap">
            <div class="w-full md:w-1/2 p-4">
                <h3 class="text-xl font-semibold">D'où est venue l'idée de ce site ?</h3>
                <p class="text-gray-700 mt-2">Lors de recherche pour adopter un animal, j'ai pu me rendre à l'évidence qu'il était parfois compliqué d'accéder aux données nécessaires pou pouvoir se lancer dans l'adoption, notamment au niveau des lois. J'ai donc personnellement tenu à créer un site web regroupant toutes ces informations.</p>
            </div>
            <div class="w-full md:w-1/2 p-4">
                <h3 class="text-xl font-semibold">D'où proviennent les informations ?</h3>
                <p class="text-gray-700 mt-2">Les diverses informations que vous pourrez retrouver dans la partie "législations" proviennent de sites officiels. La liste des refuges est aussi complètes que possible et ont été trouvés lors de recherches que j'ai pu effectuer.</p>
            </div>
        </div> <!-- /row -->

        <div class="flex flex-wrap mt-8">
            <div class="w-full md:w-1/2 p-4">
                <h3 class="text-xl font-semibold">Pourquoi favoriser l'adoption ?</h3>
                <p class="text-gray-700 mt-2">Favoriser l'adoption, c'est aussi donner une seconde chance à un animal qui n'en a pas beaucoup eu dans sa vie. C'est lui donner la possibilité de connaître l'amour, la chaleur d'un foyer tout en faisant les choses correctement d'un point de vue légal.</p>
            </div>
            <div class="w-full md:w-1/2 p-4">
                <h3 class="text-xl font-semibold">Quels animaux puis-je trouver en refuge ?</h3>
                <p class="text-gray-700 mt-2">Tout dépendra du refuge concerné. Certains vous proposeront des chiens, des chats, d'autres proposeront des lapins... Mais nous veillons à vous proposer un maximum de refuge, vous pourrez certainement y trouver vôtre bonheur.</p>
            </div>
        </div> <!-- /row -->

        <div class="bg-blue-100 py-8 px-4 mt-8 rounded-md">
            <h4 class="text-center text-lg">Certaines questions restent en suspens ? Vous avez besoin de réponses supplémentaires afin de vous lancer dans une adoption ? N'hésitez surtout pas à prendre contact avec nous. Si vôtre question concerne un animal, le refuge concerné sera apte à répondre à vos questions.</h4>
            <p class="text-center mt-4"><a class="btn bg-blue-500 text-white px-6 py-3 rounded-md" href="View/contact.php">Contactez-nous »</a></p>
        </div>

    </div>	<!-- /container -->

    <!-- Social links -->
    <section id="social" class="bg-gray-800 text-white py-8">
        <div class="container mx-auto text-center">
            <div class="inline-flex space-x-6">
                <a href="#" class="text-blue-500"><i class="fa fa-facebook-f fa-2x"></i></a>
                <a href="#" class="text-blue-400"><i class="fa fa-twitter fa-2x"></i></a>
                <a href="#" class="text-blue-600"><i class="fa fa-linkedin fa-2x"></i></a>
                <a href="#" class="text-red-600"><i class="fa fa-google-plus fa-2x"></i></a>
            </div>
        </div>
    </section>
    <!-- /social links -->

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
</template>
