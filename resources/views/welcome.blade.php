<!DOCTYPE html>
<html lang="en">

<head>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .custom-section {
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 10px;
            margin-bottom: 40px;
        }

        .custom-section h3, .custom-section h4 {
            color: #007bff;
        }

        .custom-section p {
            margin-bottom: 20px;
        }

        .custom-section img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1" />
    <title>Travelino</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,500;0,600;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/frontend/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="/frontend/css/owl.carousel.min.css">
    <link type="text/css" rel="stylesheet" href="/frontend/css/owl.theme.default.min.css">
    <link type="text/css" rel="stylesheet" href="/frontend/css/style.css">
    <link rel="stylesheet" href="/frontend/css/GuideUserstyle.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>


</head>

<body>
    <div id="arrow">
        <i class="fa fa-arrow-up"></i>
    </div>
    <nav>
        <div class="container">
            <div class="menu-par">
                <div class="logo-par">
                    <a href="/">
                        <h2>Travelino</h2>
                    </a>
                </div>
                <div class="nav">
                    <ul>
                        <li><a class="menu-hover" href="">Accueil</a></li>
                        <li><a class="menu-hover" href="{{route('destinations.showDestinations')}}">Destinations</a></li>
                        <li><a class="menu-hover" href="{{route('showMessageForContact')}}">Contactez-nous</a></li>
                        <li><a class="menu-hover" href="{{route('feedbacks.index')}}">Feedback</a></li>

                        <li><a class="menu-hover" href="{{route('showlogin')}}">Login</a></li>
                    </ul>
                </div>
                <div id="toggle-btn">
                    <i class="fa fa-bars"></i>
                </div>
            </div>
        </div>
    </nav>

    <header>
        <div class="container">
            <div class="header-info-par">
                <h1 class="typewrite" data-period="2000" data-type='["Le bonheur est plus proche que vous ne le pensez","L’aventure vous attend, allez le trouver.","Ne soyez pas un touriste, soyez un voyageur."]'>
                </h1>
                <p>Plongez dans un monde de couleurs, de saveurs et de traditions en explorant les ruelles animées des médinas, en traversant les vastes étendues du désert du Sahara, ou en vous imprégnant de l'atmosphère envoûtante des souks. Le Maroc vous réserve une multitude d'aventures et de découvertes qui feront de votre voyage une expérience inoubliable.</p>
                <a href="{{route('destinations.showDestinations')}}" class="a">Commencez Maintenant</a>
            </div>

            <div class="video">
                <video id="video" autoplay loop muted>
                    <source src="/frontend/images/travel-video.mp4" type="video/mp4" />
                </video>
            </div>
        </div>
    </header>
    <!-- Second Slides Section -->
    <section id="welcome-text">
        <div class="container">
            <h2>Les 10 villes les plus visitées</h2>
        </div>
    </section>
    <!-- Slides Section Start-->
    <section id="slides-par">
        <div class="container">
            <div class="slides">
                <div class="slide-container">
                    <div class="slide_1 slide_2">
                        <div class="slide-info">
                            <p>Marrakesh </p>
                            <a href="#" onclick="showVideoPopup('/frontend/images/travel-video-marakech.mp4')">Voir vidéo</a>
                        </div>
                    </div>
                </div>
                <div class="slide-container">
                    <div class="slide_1 slide_3">
                        <div class="slide-info">
                            <p>Casablanca</p>
                            <a href="#" onclick="showVideoPopup('/frontend/images/travel-video-casablanca.mp4')">voir vidéo</a>

                        </div>
                    </div>
                </div>
                <div class="slide-container">
                    <div class="slide_1 slide_4">
                        <div class="slide-info">
                            <p>Essaouira</p>
                            <a href="#" onclick="showVideoPopup('/frontend/images/travel-video-essaouira.mp4')">voir vidéo</a>

                        </div>
                    </div>
                </div>
                <div class="slide-container">
                    <div class="slide_1 slide_5">
                        <div class="slide-info">
                            <p>Fès</p>
                            <a href="#" onclick="showVideoPopup('/frontend/images/travel-video-fes.mp4')">voir vidéo</a>

                        </div>
                    </div>
                </div>
                <div class="slide-container">
                    <div class="slide_1 slide_6">
                        <div class="slide-info">
                            <p>Tanger</p>
                            <a href="#" onclick="showVideoPopup('/frontend/images/travel-video-tanger.mp4')">voir vidéo</a>

                        </div>
                    </div>
                </div>
                <div class="slide-container">
                    <div class="slide_1 slide_7">
                        <div class="slide-info">
                            <p>Rabat</p>
                            <a href="#" onclick="showVideoPopup('/frontend/images/travel-video-rabat.mp4')">voir vidéo</a>

                        </div>
                    </div>
                </div>
                <div class="slide-container">
                    <div class="slide_1 slide_8">
                        <div class="slide-info">
                            <p>Agadir</p>
                            <a href="#" onclick="showVideoPopup('/frontend/images/travel-video-agadir.mp4')">voir vidéo</a>

                        </div>
                    </div>
                </div>
                <div class="slide-container">
                    <div class="slide_1 slide_9">
                        <div class="slide-info">
                            <p>Meknès</p>
                            <a href="#" onclick="showVideoPopup('/frontend/images/travel-video-meknes.mp4')">voir vidéo</a>

                        </div>
                    </div>
                </div>
                <div class="slide-container">
                    <div class="slide_1 slide_10">
                        <div class="slide-info">
                            <p>Ouarzazate</p>
                            <a href="#" onclick="showVideoPopup('/frontend/images/travel-video-ourzazate.mp4')">voir vidéo</a>

                        </div>
                    </div>
                </div>
                <div class="slide-container">
                    <div class="slide_1 slide_11">
                        <div class="slide-info">
                            <p>Chefchaouen</p>
                            <a href="#" onclick="showVideoPopup('/frontend/images/travel-video-chefchaoun.mp4')">voir vidéo</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <div id="videoModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeVideoPopup()">&times;Fermer</span>
            <video id="videoPlayer" controls width="100%" height="100%">
                <!-- La source de la vidéo sera ajoutée dynamiquement via JavaScript -->
            </video>
        </div>
    </div>


    <!-- Slides Section Start-->



    <script src="/frontend/js/jquery-3.1.1.min.js"></script>
    <script src="/frontend/js/owl.carousel.min.js"></script>
    <script src="/frontend/js/extrenaljq.js"></script>
    <script src="/frontend/js/showVideos.js"></script>

    <section id="welcome-text">
        <div class="container">
            <h2>Guide de l'utilisateur</h2>
        </div>
    </section>
    <div class="guideUser" style="display: flex;justify-content:space-evenly;margin-bottom:10px">
        <!--3D flip card start-->
        <div class="wrapper">

            <!--front-face of the card start-->
            <div class="card front-face">
                <!--image for the front-face of the card-->
                <h2>Explorer les Destinations :</h2><br>
                <img src="/frontend/images/destinations.webp" alt="none" width="80%" height="80%">

            </div>
            <!--front-face of the card end-->

            <!--back-face of the card start-->
            <div class="card back-face">
                <!--image for the back-face of the card-->
                <div class="info">
                    <p> <strong>Commencez</strong> par parcourir notre sélection de destinations. <br><br> - <strong>Utilisez</strong> la barre de recherche pour trouver des destinations spécifiques ou explorez nos catégories populaires telles que "Plages Paradisiaques", "Aventures en Montagne" et "Villes Historiques".
                        <br><br>- <strong>Cliquez</strong> sur une destination pour découvrir des informations détaillées, des photos inspirantes et des offres spéciales.
                    </p>
                    <a href="{{route('destinations.showDestinations')}}" class="button-50" role="button">Destinations</a>

                </div>

            </div>
            <!--back-face of the card end-->
        </div>
        <!--3D flip card end-->
        <!--3D flip card start-->
        <div class="wrapper">

            <!--front-face of the card start-->
            <div class="card front-face">
                <!--image for the front-face of the card-->
                <h2 style="text-align: center;">Contactez-nous:</h2><br>
                <img src="/frontend/images/contactUS.jpg" alt="none" width="80%" height="80%">

            </div>
            <!--front-face of the card end-->

            <!--back-face of the card start-->
            <div class="card back-face">
                <!--image for the back-face of the card-->
                <div class="info">
                    <p>Si vous <strong>rencontrez</strong> des problèmes lors de la navigation sur notre site ou si vous avez des questions concernant votre réservation, n'hésitez pas à nous contacter. <br><br>- <strong>Utilisez</strong> notre formulaire de contact pour nous envoyer un message ou consultez nos coordonnées pour nous appeler directement.</p>
                    <a href="{{route('showMessageForContact')}}" class="button-50" role="button">Contactez-nous</a>



                </div>

            </div>
            <!--back-face of the card end-->
        </div>
        <!--3D flip card end-->
        <!--3D flip card start-->
        <div class="wrapper">

            <!--front-face of the card start-->
            <div class="card front-face">
                <!--image for the front-face of the card-->
                <h2>Partagez votre Expérience:</h2><br>
                <img src="/frontend/images/feedback.jpg" alt="none" width="80%" height="80%">

            </div>
            <!--front-face of the card end-->

            <!--back-face of the card start-->
            <div class="card back-face">
                <!--image for the back-face of the card-->
                <div class="info">
                    <p>Partagez vos expériences de voyage avec la communauté <strong>Travelino</strong>. <br><br>-Utilisez notre fonctionnalité de feedback pour laisser des commentaires, des évaluations de vos voyages.
                        <br><br>-Votre avis est précieux pour nous aider à améliorer nos services et à inspirer d'autres voyageurs.
                    </p>
                    <a href="{{route('feedbacks.index')}}" class="button-50" role="button">Feedback</a>

                </div>

            </div>
            <!--back-face of the card end-->
        </div>
        <!--3D flip card end-->


    </div>
    <section id="welcome-text">
        <div class="container">
            <h2>Aliments connus au Maroc</h2>
        </div>
    </section>
    <div class="container">
    <section class="custom-section">  
<h3>Manger au Maroc</h3>
<h2>Que manger au Maroc ? Voici la liste des meilleurs plats et aliments&nbsp;traditionnels marocains:&nbsp;</h2>
<p>&nbsp;</p>
<h3>Sellou (Sfouf):&nbsp;</h3>
<p>&nbsp;Le <a href="https://www.sellou-shop.com/" target="_blank" rel="noopener">Sfouf ou Sellou marocain</a>&nbsp;est le plat emblématique du Maroc, on l’appelle également&nbsp; Zameta. Ce dessert est particulièrement apprécié pendant le Ramadan, à base de blé et de miel. A l’origine, le sellou marocain était préparé pour les longs voyages en caravane dans le désert, et son grand apport calorique permettait de ne pas avoir faim. Le sellou marocain est désormais une tradition culinaire lors des fêtes religieuses.</p>
<p><img src="https://tasteofmaroc.com/wp-content/uploads/2018/05/sellou-picturepartners-bigstock-Traditional-Moroccan-dish-with-124901411-1-600x400.jpg" style="transform:translateX(50%);border-radius:22px" /></p>
<h3>Khobz - Pain marocain</h3>
<p><span><span>En parcourant n'importe quelle médina au Maroc, il est clair à quel point le pain est important pour l'alimentation.&nbsp;</span><span>Traditionnellement, chaque quartier de la médina aurait un four à pain de quartier.&nbsp;</span><span>Les femmes ou les filles apportaient leurs propres pains non cuits au four communautaire pour cuire le pain.&nbsp;</span><span>Ils le faisaient deux fois par jour.</span></span></p>
<p><img src="https://tse3.mm.bing.net/th?id=OIP.15czOkvfM4OrAOnpu-u-hwAAAA&pid=Api&P=0&h=220" alt="pain marocain khobz" style="transform:translateX(50%);border-radius:22px"/></p>
<p><span><span>Maintenant, beaucoup de gens achètent du pain ou font de plus grands pains à la maison.&nbsp;</span><span>Nous avons cependant vu quelques fours communautaires.&nbsp;</span><span>Le pain marocain traditionnel est appelé khobz.&nbsp;</span><span>Il est composé de farine, de levure, d'eau, de blé, de sel et de&nbsp;</span></span><a href="https://www.bobsredmill.com/blog/baking-101/what-is-semolina/"><span><span>semoule</span></span></a><span><span>&nbsp;.&nbsp;</span><span>Normalement, il y a de la semoule saupoudrée sur le dessus, ce qui lui donne une belle texture et une saveur supplémentaire.&nbsp;</span></span></p>
<p><span><span>Soyez prêt à voir du khobz à presque tous les repas, sauf lorsque vous servez du couscous.&nbsp;</span><span>Le couscous est fait de farine et le servir avec du pain doublerait les féculents.&nbsp;</span><span>Le Khobz peut être utilisé pour manger des salades avec vos mains et aussi pour éponger les sauces laissées au fond d'un tajine.&nbsp;</span></span></p>

<h3>Olives, huile d'olive et harissa</h3>
<p><span><span>Il existe quelques éléments communs à la culture culinaire marocaine.&nbsp;</span><span>En parcourant le Maroc, il est impossible de manquer tous les oliviers qui bordent la campagne.&nbsp;</span><span>Il en résulte une huile d'olive incroyable, qui est utilisée dans de nombreux plats inclus dans cette liste.&nbsp;</span></span></p>
<p><img src="https://tse2.mm.bing.net/th?id=OIP.peSaTqnouIW2fEbYeoETQQHaE8&pid=Api&P=0&h=220" alt="Olives marocains" style="transform:translateX(50%);border-radius:22px"/></p>
<p><span><span>Cela signifie également que les olives occupent une place importante sur chaque table marocaine et peuvent être trouvées en grande quantité sur tous les marchés alimentaires et dans chaque médina.&nbsp;</span><span>Si vous aimez les olives, le Maroc est un grand pays à visiter.&nbsp;</span></span></p>
<p><span><span>Une autre chose qui figure fortement sur les tables est la harissa, une pâte de piment épicée.&nbsp;</span><span>Il peut être ajouté à toutes sortes de plats savoureux, mais pas épicés.&nbsp;</span><span>Mon préféré était quand ces deux étaient réunis - des olives mélangées à de la harissa.&nbsp;</span><span>Recherchez les olives avec une pâte rouge vif mélangée.&nbsp;</span></span></p>
<div id="image_1975139852" class="img has-hover x md-x lg-x y md-y lg-y" data-slot-rendered-dynamic="true">
<h3>Petit déjeuner marocain</h3>
<p><span><span>Lorsque vous séjournez dans un hôtel touristique typique, le petit-déjeuner peut être, eh bien, un petit-déjeuner international typique.&nbsp;</span><span>Si votre hôtel ou maison d'hôtes n'offre pas quelque chose de local, demandez-leur un café ou un café local pour essayer un petit-déjeuner marocain plus traditionnel.</span></span></p>
<p><span><span>Il est plus probable que vous trouverez des aliments authentiques pour le petit-déjeuner marocain dans une maison d'hôtes ou chez l'habitant (appelé&nbsp;</span></span><a href="https://www.anrdoezrs.net/links/9019934/type/dlg/sid/FDDMoroccoFood/https://www.intrepidtravel.com/adventures/morocco-accommodation-guide/"><span><span>gîte</span></span></a><span><span>&nbsp;).&nbsp;</span><span>Normalement, le petit-déjeuner comprendra un ou plusieurs types de pain marocain ainsi que diverses confitures, de l'huile et du miel.</span></span></p>
<h4>M'smen</h4>
<p><span><span>Ce petit-déjeuner marocain m'a rappelé des roti à la malaisienne.&nbsp;</span><span>C'est un pain en couches, fait avec du beurre entre les couches.&nbsp;</span><span>M'smen est servi avec de l'huile d'olive, de la confiture ou du miel.&nbsp;</span><span>Il est courant de trouver cela dans de nombreux restaurants locaux pour le petit-déjeuner, mais plusieurs hôtels et maisons d'hôtes l'ont également servi.</span></span></p>
<p><img src="https://tse1.mm.bing.net/th?id=OIP.pyzRqRMWEtwM4QFnyoUTIgHaHX&pid=Api&P=0&h=220" alt="petit déjeuner marocain mssemen" style="transform:translateX(50%);border-radius:22px"/></p>
<h4><b><span><span>Harcha</span></span></b></h4>
<p><span><span>Un autre type de pain servi pour le petit déjeuner au Maroc est Harcha, qui est beaucoup plus épais et plus dense que M'smen.&nbsp;</span><span>Il est fait de semoule.&nbsp;</span><span>Nous l'avons vu moins fréquemment dans les hôtels et les maisons d'hôtes, mais certains l'avaient.&nbsp;</span><span>Harcha et M'smen se trouvent également dans les médinas, vendus comme nourriture de rue toute la journée.</span></span></p>
<p><img src="https://tse2.mm.bing.net/th?id=OIP.EwshdTRAfYXJ0QJPWzFYuAHaE7&pid=Api&P=0&h=220" alt="harcha marocain pour petit déjeuner" style="transform:translateX(50%);border-radius:22px"/></p>
<p>&nbsp;</p>
<h4><b><span><span>Amlou</span></span></b></h4>
<p><span><span>Un homme berbère m'a dit qu'Amlou est comme le Nutella berbère.&nbsp;</span><span>Mais vu que je ne suis pas fan des produits de la marque Nutella, j'ai adoré <a href="https://www.pause-au-naturelle.com/cat%C3%A9gorie-produit/alimentation-saine/amlou/">Amlou</a>.</span></span></p>
<p><span><span>Au lieu du chocolat et des noisettes, Amlou est une pâte faite d'amandes, d'arachides, d'huile d'olive et&nbsp;</span></span><span><span>d</span></span><a href="https://www.healthline.com/nutrition/argan-oil"><span><span>'</span></span></a><span><span>huile d'</span><span>argan</span><span>&nbsp;.&nbsp;</span><span>Il est normalement servi sur le côté de l'un des pains marocains pour le petit-déjeuner.&nbsp;</span></span></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<h3><b><span><span>Dchicha - Soupe marocaine à l'orge concassée</span></span></b></h3>
<p><span><span>Dchicha est une soupe de petit-déjeuner apparemment fade avec une base d'orge et de lait.&nbsp;</span><span>Il est assaisonné de thym.&nbsp;</span><span>Mes premières gorgées étaient très passives, pensant que la soupe manquait vraiment de saveur.</span></span></p>
<p><span><span><img src="https://tse4.mm.bing.net/th?id=OIP.du5S6Zmn_IPIATruHqAnvwHaEw&pid=Api&P=0&h=220" style="transform:translateX(50%);border-radius:22px" alt="Amlou et dchicha marocains pour déjeuner" /></span></span></p>
<p><span><span>Plus je l'ai mangé, plus j'ai commencé à apprécier la subtilité de la saveur.&nbsp;</span><span>Je peux imaginer que ce soit un plat copieux pour commencer la journée.&nbsp;</span><span>Quelques-uns de nos hôtels ont proposé le Dchicha au buffet du petit-déjeuner, ce qui était une bonne façon d'apporter des saveurs marocaines à un petit-déjeuner occidental typique.</span></span></p>
<h2>Soupes et ragoûts marocains</h2>
<p><span><span>Certains des meilleurs aliments marocains que nous avons mangés étaient des lentilles et des&nbsp;</span></span><a href="https://pulses.org/what-are-pulses"><span><span>légumineuses</span></span></a><span><span>&nbsp;, qui sont des haricots et des légumineuses.&nbsp;</span><span>La plupart d'entre eux ont été servis comme entrées marocaines, mais peuvent également être un plat principal, en particulier pour les habitants.</span></span></p>
<p><span><span>Les lentilles et les haricots étaient souvent aromatisés à la tomate, l'oignon, le cumin et la coriandre.&nbsp;</span><span>N'hésitez pas à utiliser une cuillère ou du pain marocain pour savourer toute la saveur délicieuse!&nbsp;</span></span></p>
<h3>Harira</h3>
<p><span><span>Harira est probablement l'une des soupes les plus couramment trouvées dans un menu de cuisine marocaine.&nbsp;</span><span>Cette soupe est faite de pois chiches et de lentilles.&nbsp;</span><span>En utilisant des tomates comme base, la soupe prend parfois une saveur plus «tomate».</span></span></p>
<p><img src="https://tse4.mm.bing.net/th?id=OIP.UdeeiAgcM66CRVAD7PCb0wHaE8&pid=Api&P=0&h=220" alt="harira marocaine" style="transform:translateX(50%);border-radius:22px"/></p>
<p><span><span>De meilleures versions prennent les saveurs des assaisonnements, comme la coriandre et le cumin.&nbsp;</span><span>Certaines versions incluent des pois chiches entiers ainsi que de petites nouilles à la vermicelle ou du riz cassé.</span></span></p>
<p><span><span>Bien que quelques versions utilisent du bouillon de bœuf ou d'agneau comme base, il est également possible de les trouver en utilisant des légumes comme base.&nbsp;</span><span>Si vous êtes végétarien, n'hésitez pas à demander.&nbsp;</span></span></p>
<p><a href="/recettes/entrees-et-accompagnements/232-harira-express-de-choumicha">Harira express de choumicha</a></p>
<p><a href="/ahlam/choumicha-recette-harira-express">Recette harira Marocaine (Vidéo)</a>&nbsp;</p>
<h3>Bissara</h3>
<p><span><span>Avec l'utilisation fréquente de pois chiches dans de nombreux plats marocains, la bissara nous a pris par surprise.&nbsp;</span><span>Il s'agit d'une soupe à base de fèves ou de fèves, d'ail et d'eau et garnie d'huile d'olive et de cumin.</span></span></p>
<p><img src="https://tse4.mm.bing.net/th?id=OIP.pjVJ90PO5cH1m-yohaF2IAHaE9&pid=Api&P=0&h=220" style="transform:translateX(50%);border-radius:22px" alt="bissara marocaine" /></p>
<p><span><span>En raison de sa couleur, chaque gorgée que je prenais me faisait penser que je mangeais des pois chiches, mais la soupe avait une saveur différente, presque amère.&nbsp;</span><span>Je l'ai aimé encore plus quand j'ai utilisé du pain marocain pour le couper.&nbsp;</span></span></p>
<p><span><span>Bissara est plus communément trouvé dans le nord et l'est du Maroc.&nbsp;</span><span>La meilleure version que nous avons mangée de cette spécialité marocaine était chez une famille à Chefchaouen.&nbsp;</span><span>Il peut également être trouvé sur les menus des restaurants au Maroc.&nbsp;</span><span>Les Marocains mangent souvent du Bissara pour le petit déjeuner.</span></span></p>
<p><a href="/recettes/entrees-et-accompagnements/108-recette-biysara-soupe-aux-petits-pois"></a><a href="/recettes/entrees-et-accompagnements/108-recette-biysara-soupe-aux-petits-pois">Recette biysara (soupe aux petits pois)</a></p>
<h3>Lentilles marocaines</h3>
<p><span><span>J'ai du mal avec le nom de ce plat car je ne parle pas l'arabe marocain, mais il était toujours répertorié sur un menu marocain sous forme de lentilles en anglais ou lentejas en espagnol.&nbsp;</span><span>C'est un plat de lentilles simple, fait de coriandre et de cumin.</span></span></p>
<p><img src="https://tse1.mm.bing.net/th?id=OIP.Psm2B4_LghXSLzz-dap2MwHaLH&pid=Api&P=0&h=220" alt="lentielles marocaines" style="transform:translateX(50%);border-radius:22px"/></p>
<p>&nbsp;</p>
</div>
<div>&nbsp;
<h3>Loubia</h3>
<p><span><span>Chez nous en Espagne, nous essayons d'augmenter la quantité de lentilles et de légumineuses que nous mangeons, alors j'ai adoré que bon nombre des meilleurs plats marocains comprennent des haricots et des lentilles.</span></span></p>
<p><img src="https://tse3.mm.bing.net/th?id=OIP.ML15XMvv1YkTFBEtNnb0tAHaLH&pid=Api&P=0&h=220" alt="plat loubia marocaine" style="transform:translateX(50%);border-radius:22px"/></p>
<p><span><span>Loubia est un ragoût de haricots blancs à base de tomates, d'ail, d'épices comme le cumin et parfois un peu de piment épicé.&nbsp;</span><span>Il peut être trouvé sur les menus des restaurants marocains, mais peut aussi parfois être trouvé comme un aliment de rue, en particulier par temps froid.</span></span></p>
<p>&nbsp;<a href="/recettes/plats-principaux/209-loubia-%E2%80%93-haricots-blancs">Recette Loubia (haricots blancs)</a></p>
<h4 style="padding-left: 30px;"><strong><span><span>Conseil de la <a href="/cuisine/cuisine-marocaine">gastronomie marocaine</a></span></span></strong></h4>
<p style="padding-left: 30px;"><span><span>Je me sens un peu comme un record battu en décrivant la nourriture à manger au Maroc.&nbsp;</span><span>La nourriture du Maroc est relativement simple, avec beaucoup de saveurs complexes.&nbsp;</span><span>Mais, de nombreux plats reposent sur les mêmes ingrédients de base et assaisonnements.&nbsp;</span><span>Il est difficile de trouver un plat marocain sans cumin.&nbsp;</span><span>D'autres épices courantes comprennent le sel, le poivre noir, le curcuma, le gingembre, l'oignon, la tomate, la coriandre et le persil.&nbsp;</span><span>Les plats marocains les plus populaires comprennent la plupart sinon la totalité de ces épices de base.&nbsp;</span></span></p>
<p>&nbsp;</p>
<h2>Plats principaux marocains</h2>
<p><span><span>Jusqu'à présent, je me suis concentré sur les entrées et les soupes.&nbsp;</span><span>En ce qui concerne les plats principaux marocains, préparez-vous à manger de façon familiale, avec de grands plateaux partagés au centre de la table.&nbsp;</span><span>Cela est particulièrement vrai lorsque vous mangez dans des familles d'accueil et même dans certains restaurants touristiques.&nbsp;</span></span></p>
<p><span><span>La vérité est, cependant, que vous mangerez beaucoup de tajine lorsque vous voyagez au Maroc car il est sur presque tous les menus.&nbsp;</span><span>C'est pourquoi j'ai été ravi de participer à une&nbsp;</span></span><a href="https://fooddrinkdestinations.com/intrepid-travel-morocco-food-tour-real-food-adventure/"><span><span>tournée gastronomique au Maroc</span></span></a><span><span>&nbsp;, qui nous a spécialement organisé pour essayer de nombreux plats locaux différents.</span></span></p>
<p><span><span>Cela nous a donné plus d'informations sur la culture culinaire marocaine que nous ne le ferions autrement en ne mangeant que dans des restaurants touristiques servant du tajine.</span></span></p>
<h3>Tajine - Le plat national du Maroc</h3>
<p><span><span>Si les voyageurs au Maroc ont entendu parler d'un plat marocain avant d'arriver, ce devrait être du tajine.&nbsp;</span><span>Un tajine est un repas cuit dans un pot en argile, également connu sous le nom de tajine. C'est un <a href="/cuisine/plats-marocains-preferes-pour-les-marocains-au-ramadan">plat&nbsp; marocain</a> tradionnel.</span></span></p>
<p><img src="https://tse2.mm.bing.net/th?id=OIP.uEuM-wcK24xmMtEPRVhBJwHaE7&pid=Api&P=0&h=220" alt="Tajine - Le plat national du Maroc" style="transform:translateX(50%);border-radius:22px"/></p>
<h3>Couscous <b><span><span>marocain</span></span></b></h3>
<p><span><span>C'est un autre plat typique d'Afrique du Nord, mais la culture berbère au Maroc l'appelle la leur.&nbsp;</span><span>J'ai appris un fait sur le couscous que je trouvais intéressant.&nbsp;</span><span>En Catalogne, le riz est généralement consommé le jeudi, normalement pour le déjeuner.&nbsp;</span><span>On ne m'a jamais expliqué pourquoi à part dire «c'est la tradition».</span></span></p>
<p><img src="https://tse3.mm.bing.net/th?id=OIP.uy-QWdLETMlzLAWvL1n9UgHaFj&pid=Api&P=0&h=220" style="transform:translateX(50%);border-radius:22px" alt="Couscous marocain" /></p>
<p><span><span>La même chose semble aller pour le couscous marocain, qui est traditionnellement consommé le vendredi, jour saint des musulmans.&nbsp;</span><span>Dans certains cas, il peut être difficile de trouver sur le menu des restaurants marocains locaux les autres jours de la semaine.&nbsp;</span></span></p>
<p><span><span>Le couscous est fait de farine de blé ou d'orge.&nbsp;</span><span>Il est cuit à la vapeur et servi avec des viandes ou des légumes.&nbsp;</span><span>Fait intéressant, de toutes les épices ajoutées à la cuisine marocaine, le cumin est rarement ajouté au couscous car il est utilisé dans de nombreux autres plats marocains traditionnels.&nbsp;</span><span>Soyez également prêt à manger du couscous avec vos mains, bien que dans les restaurants plus touristiques, une fourchette et une cuillère soient souvent fournies.</span></span></p>
</div>
</section>
    </div>
</body>
</html>