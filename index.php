<?php
    //affiche les erreurs
    // ini_set('error_reporting', E_ALL);

    // // dÃ©marre la session
    // session_start();

    // // charge le fichier des fonctions PHP
    // // require_once 'model/model.php';

    // // Liste blanche, c'est notre routing qui correspont Ã  nos pages
    // $routing = [
    //     'home' => [
    //         'controller' => 'home',
    //         'secure' => false,
    //         ],
    //     'inscription' => [
    //         'controller' => 'subscription',
    //         'secure' => false,
    //         ],
    //     'login' => [
    //         'controller' => 'login',
    //         'secure' => false,
    //         ],
    //     'profil' => [
    //         'controller' => 'profil',
    //         'secure' => true,
    //         ],
    //     'message' => [
    //         'controller' => 'message',
    //         'secure' => false,
    //         ],
    //     'logout' => [
    //         'controller' => 'logout',
    //         'secure' => false,
    //         ],
    //     '404' => [
    //         'controller' => '404',
    //         'secure' => false,
    //         ],
    // ];

    // // verifions la pertinance de la page en GET
    // if (isset($_GET['page'])) {
    //     $page = $_GET['page'];
    //     if (!isset($routing[$page])) {
    //         // la page n'existe pas
    //         $page = '404';
    //     }
    // } else {
    //     //page par defaut
    //     $page = 'home';
    // }
    
?>
<!doctype html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui.js"></script>
        <script type="text/javascript" src="js/jquery.carouFredSel-6.2.1.js"></script>
        <title>Yanis Sahnoune - CV 2015</title>
    </head>
    <body>
        <nav id="nav-left">
            <div class="navigation" id="info-nav-left">
                <ul id="ul-nav">
                    <li class="nav-title" id="accueil"><a href="www.facebook.fr" class="link-nav" id="link-accueil"><img src="css/img/icone-accueil.png" class="icone-nav">Accueil</a></li>
                    <li class="nav-title" id="travaux"><a href="" class="link-nav" id="link-work"><img src="css/img/icone-travaux.png" class="icone-nav">Travaux</a></li>
                    <li class="nav-title" id="contact"><a href="" class="link-nav" id="link-contact"><img src="css/img/icone-contact.png" class="icone-nav">Contact</a></li>
                </ul>
            </div>
            <div class="socialNtework" id="social-nav-left">
                <a class="link-socialNetwork" href="https://www.linkedin.com/profile/view?id=397558767&trk=nav_responsive_tab_profile_pic"><div class="socialNet" id="linkedIn"><p class="txt-social-network">In<p></div></a>
                <a class="link-socialNetwork" href=""><div class="socialNet" id="gitHub"><p class="txt-social-network">Git<p></div></a>
            </div>
        </nav>
        <div class="contener" id="right">
            <div class="content">
            </div>
        </div>
</html>