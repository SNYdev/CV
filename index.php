<?php
    //affiche les erreurs
    ini_set('error_reporting', E_ALL);

    // dÃ©marre la session
    session_start();

    // charge le fichier des fonctions PHP
    // require_once 'model/model.php';

    // Liste blanche, c'est notre routing qui correspont Ã  nos pages
    $routing = [
        'home' => [
            'controller' => 'home',
            'secure' => false,
            ],
        'inscription' => [
            'controller' => 'subscription',
            'secure' => false,
            ],
        'login' => [
            'controller' => 'login',
            'secure' => false,
            ],
        'profil' => [
            'controller' => 'profil',
            'secure' => true,
            ],
        'message' => [
            'controller' => 'message',
            'secure' => false,
            ],
        'logout' => [
            'controller' => 'logout',
            'secure' => false,
            ],
        '404' => [
            'controller' => '404',
            'secure' => false,
            ],
    ];

    // verifions la pertinance de la page en GET
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        if (!isset($routing[$page])) {
            // la page n'existe pas
            $page = '404';
        }
    } else {
        //page par defaut
        $page = 'home';
    }
    
?>
<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="jquery-ui.js"></script>
    <title>Yanis Sahnoune - CV 2015</title>
</head>
<body>
<div class="nav-center">     
    <ul class="nav">
        <li class="li-nav"><a href="?page=home" title="home">Home</a></li>
        <li class="li-nav"><a href="?page=message" title="message">Message</a></li>
        <li class="li-nav"><a href="?page=inscription" title="inscription">inscription</a></li>
        <?php
        // if (isset($_SESSION['name'])) {
        //     echo '<li class="li-nav"><a href="?page=logout" title="logout">logout</a></li>';
        //     echo '<li class="li-nav"><a href="?page=profil" title="profil">Mon profil</a></li>';
        // } else {
        //     echo '<li class="li-nav"><a href="?page=login" title="login">login</a></li>';
        // }
        ?>
    </ul>
</div> 

<?php


    // Affiche les flashBag : des messages informatif du genre "votre message a bien Ã©tÃ© envoyÃ©"
    if (isset($_SESSION['flashBag'])) {
        foreach ($_SESSION['flashBag'] as $type => $flash) {
            foreach ($flash as $key => $message) {
                echo '<div class="'.$type.'" role="'.$type.'" >'.$message.'</div>';
                // un fois affichÃ© le message doit Ãªtre supprimÃ©
                unset($_SESSION['flashBag'][$type][$key]);
            }
        }
    }

    // Charge la page demandÃ©e
    $fileController = 'page/'.$routing[$page]['controller'].'.php';
    if (file_exists($fileController)) {
        require $fileController;
    } else {
        echo 'File is missing';
    }
die;
?>
</body>
</html>