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
                    <li class="nav-title" id="contact"><a href="#dev" class="link-nav" id="link-contact"><img src="css/img/icone-contact.png" class="icone-nav">Contact</a></li>
                </ul>
            </div>
            <div class="socialNtework" id="social-nav-left">
                <a class="link-socialNetwork" href="https://www.linkedin.com/profile/view?id=397558767&trk=nav_responsive_tab_profile_pic"><div class="socialNet" id="linkedIn"><p class="txt-social-network">In<p></div></a>
                <a class="link-socialNetwork" href="https://github.com/SNYdev"><div class="socialNet" id="gitHub"><p class="txt-social-network">Git<p></div></a>
            </div>
            <div class="draWork">
                <h1 class="creationNavLeft">CREATIONS</h1>
                <div class="diapo">
                    <div id="carousel">
                        <img src="css/img/diapo1.jpg" width="220" />
                        <img src="css/img/diapo2.jpg" width="220" />
                        <img src="css/img/diapo3.jpg" width="220" />
                        <img src="css/img/diapo4.jpg" width="220" />
                        <img src="css/img/diapo5.jpg" width="220" />
                    </div>
                </div>
            </div>
            <!-- Pour cours javascript -->
            <!-- <input type="color" id="changeColor"> -->
        </nav>
        <div class="contener" id="right">
            <div id="imgNav" alt=""></div>
            <div class="main">
                <div class="info-content">
                    <div class="img-info">
                    </div>
                    <h1 class="info-txt" id="information">Sahnoune Yanis</h1>
                    <p class="info-txt" id="phone">06 16 22 06 93</p>
                </div>
                <div class="formation-block">
                    <div class="Fblock" id="Fleft">
                        <h3 class="title-formation">2014/2017</h3>
                        <p class="content-txt-formation">Bachelor en developpement des technologies du web @ sup'internet</p>
                    </div>
                    <div class="Fblock" id="Fright">
                        <h3 class="title-formation">2013/2014</h3>
                        <p class="content-txt-formation">Creation de mon auto-entreprise: Webdesign, creations</p>
                    </div>
                    <div class="Fblock" id="Fleft">
                        <h3 class="title-formation">2010/2013</h3>
                        <p class="content-txt-formation">Formation en alternance au CFA COM avec la société GAD</p>
                    </div>
                    <div class="Fblock" id="Fright">
                        <h3 class="title-formation">2009/2010</h3>
                        <p class="content-txt-formation">Formation chez Graphisme & communication de maquette</p>
                    </div>
                </div>
                <div class="competences" id="dev">
                    <div class="title-txtDG">
                        <h2 class="title-txt" id="competences">COMPETENCES - </h2>
                        <h3 class="title-txt" id="dev-title">DEV</h3>
                        <div class="content-competenceDev">
                            <div class="content-txt-competenceDev" id="BlocHtml">
                                <img src="css/img/iconeHTML.jpg" width="70px" class="title-informationContent" id="html-bloc"/>
                                <p class="decription-infoCompetence" id="txt-html-bloc">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tincidunt magna tincidunt sem lacinia, vel sagittis diam varius. Praesent non vestibulum felis.
                                </p>
                            </div>
                            <div class="content-txt-competenceDev" id="BlocPhp">
                                <img src="css/img/iconePHP.jpg" width="70px" class="title-informationContent" id="php-bloc">
                                <p class="decription-infoCompetence" id="txt-php-bloc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tincidunt magna tincidunt sem lacinia, vel sagittis diam varius. Praesent non vestibulum felis.</p>
                            </div>
                            <div class="content-txt-competenceDev" id="BlocJavascript">
                                <img src="css/img/iconeJS.jpg" width="70px" class="title-informationContent" id="javascript-bloc">
                                <p class="decription-infoCompetence" id="txt-javascript-bloc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tincidunt magna tincidunt sem lacinia, vel sagittis diam varius. Praesent non vestibulum felis.</p>
                            </div>
                            <div class="content-txt-competenceDev" id="BlocSQL">
                                <img src="css/img/iconeSQL.jpg" width="70px" class="title-informationContent" id="sql-bloc">
                                <p class="decription-infoCompetence" id="txt-sql-bloc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tincidunt magna tincidunt sem lacinia, vel sagittis diam varius. Praesent non vestibulum felis.</p>
                            </div>
                            <div class="content-txt-competenceDev" id="BlocGit">
                                <img src="css/img/iconeGIT.jpg" width="70px" class="title-informationContent" id="blocgit-bloc">
                                <p class="decription-infoCompetence" id="txt-git-bloc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tincidunt magna tincidunt sem lacinia, vel sagittis diam varius. Praesent non vestibulum felis.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="competences" id="graphisme">
                    <div class="title-txtDG">
                        <h2 class="title-txt" id="competences">COMPETENCES - </h2>
                        <h3 class="title-txt" id="dev-title">GRAPH'</h3>
                    </div>
                </div>
                <div class="contactForm">
                    <div class="title-txt" id="formTitle">INSCRIPTION</div>
                    <!-- à remplacer avec un formulaire de contact normal -->
                    <form class="form-horizontal" name="formInscription">
                        <fieldset>
                            <input id="nameUser" name="nameUser" type="text" placeholder="Saisir votre nom" class="input-xlarge">
                            <input id="firstnameUser" name="firstnameUser" type="text" placeholder="Saisir votre prenom" class="input-xlarge">
                            <input id="mailUser" name="mailUser" type="text" placeholder="Saisir votre adresse mail" class="input-xlarge">
                            <input id="locationUser" name="locationUser" type="text" placeholder="Saisir votre adresse" class="input-xlarge">
                            <input id="ageUser" name="ageUser" type="text" placeholder="Saisir votre age" class="input-xlarge">
                            <input id="passwordUser" name="passwordUser" type="password" placeholder="Saisir votre password" class="input-xlarge">
                            <input id="verifPasswordUser" name="verifPasswordUser" type="password" placeholder="Saisir à nouveau votre password" class="input-xlarge">
                            <input id="submitButton" name="submitButton" type="submit" class="buttonSub" value="Inscription">
                        </fieldset>
                        <div id="error-inscription">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
    <script>
        $(function(){

                function testEmail(email){
                        var regEmail = new RegExp('^[0-9a-z._-]+@{1}[0-9a-z.-]{2,}[.]{1}[a-z]{2,5}$','i');
                        return regEmail.test(email);
                }

                var mail = $(this).find('input[name="mailUser"]');

                mail.change(function () {
                        var userEmail = this.value;
                        if(userEmail == '' || testEmail(userEmail)){
                            $('#error-inscription').html('');
                        }
                        else if(testEmail(userEmail) === false){
                             $('#error-inscription').html('Adresse non valide');
                        }
                });

                $('#imgNav').click(function(){
                    $('#nav-left').animate({
                            width : '0px'
                    }, 1000);
                    $('.contener').animate({
                            marginLeft : '0px'
                    }, 1000);
                });

                $('#changeColor').change(function() {
                        $('#nav-left').animate({
                            backgroundColor: $(this).val()
                        }, 2000);
                        
                        $('.main').animate({
                            backgroundColor: $(this).val()
                        }, 2000);
                });

                $('form[name="formInscription"]').submit(function(){

                        $('.error-inscription').html('');
                        var name = $(this).find('input[name="nameUser"]').val();
                        var firstName = $(this).find('input[name="firstnameUser"]').val();
                        var mail = $(this).find('input[name="mailUser"]');
                        var location = $(this).find('input[name="locationUser"]').val();
                        var age = $(this).find('input[name="ageUser"]').val();
                        var password = $(this).find('input[name="passwordUser"]').val();
                        var verifPass = $(this).find('input[name="verifPasswordUser"]').val();
                        var formValid = true;
                        var response = "Pseudo trop court";

                        if (name.length < 5) {
                            $('#error-inscription').html(response);
                            return false;
                        };
                        
                        if (name.length == "") {
                            response = "Veuillez saisir un nom";
                            $('#error-inscription').html(response);
                            return false;
                        };

                        if (firstName.length == "" || firstName.length < 5) {
                            response = "Veuillez sasir un prenom";
                            $('#error-inscription').html(response);
                            return false;
                        };

                        if (password.length == "" || verifPass.length == "") {
                            response = "Veuillez saisir un mot de passe";
                            $('#error-inscription').html(response);
                            return false;
                        };

                        if (password != verifPass) {
                            response = "Mot de passe non identiques";
                            $('#error-inscription').html(response);
                            return false;
                        };

                        if (!isNaN(age) === true) {
                            response = "Veuillez entrer un entier pour votre age";
                            $('#error-inscription').html(response);
                            return false;
                        };
                        
                        return false;
                });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            // Using custom configuration
            $('#carousel').carouFredSel({
                items                : 1,
                direction            : "up",
                scroll : {
                    items            : 1,
                    easing            : "elastic",
                    duration        : 1000,
                    pauseOnHover    : true
                }
            });
        });
    </script>
</html>