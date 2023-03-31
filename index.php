<?php
if (isset($_POST['prenom']))
{

    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $objet = $_POST['objet'];
    $message = $_POST['message'];

    $contenu = "Message provenant de : " . $prenom . " " . $nom . "\n Email de contact : " . $email . " \n \n " . $message . "";

    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $to = "premiertourprod@gmail.com";
    $subject = "Formulaire : " . $objet;
    $headers = "Message du site web";
    mail($to,$subject,$contenu, $headers);

    $retourmessage = "Votre message a bien été envoyé.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Metas -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- End Metas -->
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <!-- End Styles-->
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Iso&family=Shantell+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <!-- End Fonts -->
    <!-- Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <!-- End Icons -->
    <title>SEVAC</title>
</head>
<body data-bs-spy="scroll" data-bs-target="#myNavbar">
    <nav id="myNavebar" class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="images/sevaclogo.png"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#biographie">Bio</a>
                    <a class="nav-link" href="#billetterie">Billetterie</a>
                    <a class="nav-link" href="#critiques">Critiques</a>
                    <a class="nav-link" href="#galerie">Galerie</a>
                    <a class="nav-link" href="#contact">Contact</a>
                </div>
            </div>
        </div>
    </nav>
      <!-- End Navbar -->
      <!-- Section Biographie -->
      <section id="biographie" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div id="bio">
                        <h2>Biographie</h2>
                        <p>
                            <span class='date'>1990 :</span> Naissance de Sevac, le même jour qu'Ophélie Winter, est ce un signe?<br>
                            <span class='date'>1991 :</span> 1ère... année de vie.<br>
                            <span class='date'>1998 :</span> Amitiés avec son 1er doudou.<br>
                            <span class='date'>1998 :</span> Fin de vie du doudou décapité.
                        </p>
                        <p>
                            <span class='date'>2002 :</span> Sevac apprend enfin que le Père Noël n'existe pas.<br>
                            <span class='date'>2008 :</span> Rate son BAC et son permis de coduire.<br>
                            <span class='date'>2009 :</span> Son père devient inspecteur des impôts : Sevac obtient le BAC, le permis de conduire et sa 1ère étoile.
                        </p>
                        <p>
                            <span class='date'>2010 :</span> Obtient son BTS Tourisme!<br>
                            <span class='date'>2011 :</span> Début de carrière au Club Med, Guadeloupe? Brésil? Punta Cana?... Non : Vittel.<br>
                            <span class='date'>2018 :</span> 1er one man show : Sevac en finition.
                        </p>
                        <p>
                            <span class='date'>2020 :</span> 1er sketch avec Action Discrète, puis embraye sur son 2ème one man show : "Sevac".<br>
                            <span class='date'>2022 :</span> A fait sa 1ère fois.<br>
                            <span class='date'>2023 :</span> Deviens humoriste régulier au Paname.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <img src="images/spectacle.jpg" alt="Sévac">
                    </div>
                </div>
            </div>
        </div>
      </section>
      <!-- End Section Biographie -->
      <!-- Section Billetterie -->
      <section id="billetterie">
        <div class="container">
            <div class="heading">
                <h2>Les dates à venir</h2>
            </div>
            <div class="container" style="text-align: center;">
                <div class="row">
                    <div class="col order-last">
                        <span class="enable">Reserver</span>
                    </div>
                    <div class="col">
                        <h5>Tous les mercredis</h5>
                        <p id="heure">20h00</p>
                    </div>
                    <div class="col order-first">
                        <h5>Théâtre Le Lieu</h5>
                        <p id="ville">Paris</p>
                    </div>
                </div>
            </div>
            <div class="container" style="text-align: center;">
                <div class="row">
                    <div class="col order-last">
                        <span class="enable">Reserver</span>
                    </div>
                    <div class="col">
                        <h5>Tous les samedis</h5>
                        <p id="heure">19h15</p>
                    </div>
                    <div class="col order-first">
                        <h5>Théâtre Le Lieu</h5>
                        <p id="ville">Paris</p>
                    </div>
                </div>
            </div>
            <div class="container" style="text-align: center;">
                <div class="row">
                    <div class="col order-last">
                        <span class="enable">Reserver</span>
                    </div>
                    <div class="col">
                        <h5>Vendredi 15 février 2019</h5>
                        <p id="heure">20h15</p>
                    </div>
                    <div class="col order-first">
                        <h5>Peanuts Bar</h5>
                        <p id="ville">Waterloo (Belgique)</p>
                    </div>
                </div>
            </div>
            <div class="container" style="text-align: center;">
                <div class="row">
                    <div class="col order-last">
                        <span class="enable">Reserver</span>
                    </div>
                    <div class="col">
                        <h5>Jeudi 21 février 2019</h5>
                        <p id="heure">20h30</p>
                    </div>
                    <div class="col order-first">
                        <h5>Théâtre du Tetard</h5>
                        <p id="ville">Marseille</p>
                    </div>
                </div>
            </div>
            <div class="container" style="text-align: center;">
                <div class="row">
                    <div class="col order-last">
                        <span class="enable">Reserver</span>
                    </div>
                    <div class="col">
                        <h5>Vendredi 12 avril 2019</h5>
                        <p id="heure">21h00</p>
                    </div>
                    <div class="col order-first">
                        <h5>Carré 30</h5>
                        <p id="ville">Lyon</p>
                    </div>
                </div>
            </div>
            <div class="container" style="text-align: center;">
                <div class="row">
                    <div class="col order-last">
                        <span class="enable">Reserver</span>
                    </div>
                    <div class="col">
                        <h5>Mercredi 15 décembre 2021</h5>
                        <p id="heure">20h45</p>
                    </div>
                    <div class="col order-first">
                        <h5>Cinéma Rex</h5>
                        <p id="ville">Sarlat-la-Canéda</p>
                    </div>
                </div>
            </div>
            <div class="container" style="text-align: center;">
                <div class="row">
                    <div class="col order-last">
                        <a href="https://www.billetreduc.com/308149/evt.htm?fbclid=IwAR0o_QE9VGUAng8lOv6-QklMhps1r0iDGEoYw6pEFOw4YhqVtW22pzPxsgI" target="_blank" class="button1">Reserver</a>
                    </div>
                    <div class="col">
                        <h5>Samedi 29 avril 2023</h5>
                        <p id="heure">21h00</p>
                    </div>
                    <div class="col order-first">
                        <h5>La Girafe qui se peigne</h5>
                        <p id="ville">Lyon</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Section Billetterie -->
        <!-- Section Critiques -->
        <section id="critiques">
            <div class="container">
                <div class="heading">
                    <h2>Ce que les gens pensent de moi...</h2>
                </div>
                <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" space-between="30" slides-per-view="2">                    
                    <swiper-slide style="text-align:center;"><img src="images/critique1.jpg"></swiper-slide>
                    <swiper-slide style="text-align:center;"><img src="images/critique2.jpg"></swiper-slide>
                    <swiper-slide style="text-align:center;"><img src="images/critique3.jpg"></swiper-slide>
                    <swiper-slide style="text-align:center;"><img src="images/critique4.jpg"></swiper-slide>
                    <swiper-slide style="text-align:center;"><img src="images/critique5.jpg"></swiper-slide>
                  </swiper-container>
                </div>
                <div class="noteCritique" style="text-align: center; padding-top: 10px;">
                    <h6>Note des internautes</h6>
                    <p><i>9/10</i></p>
                </div>
            </div>
        </section>
        <!-- End Section Critiques -->
        <!-- Section Galerie -->
        <section id="galerie">
            <div class="container">
                <div class="heading">
                    <h2>Galerie</h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <a href="images/sevac1.jpg" alt="Sévac" target="_blank"><img src="images/sevac1.jpg" alt="Sévac" class="img-thumbnail"></a>     
                    </div>
                    <div class="col-md-4">
                        <a href="images/sevacc.jpg" alt="Sévac" target="_blank"><img src="images/sevacc.jpg" alt="Sévac" class="img-thumbnail"></a>  
                    </div>
                    <div class="col-md-4">
                        <a href="images/sevac3.jpg" alt="Sévac" target="_blank"><img src="images/sevac3.jpg" alt="Sévac" class="img-thumbnail"></a>
                    </div>
                    </div>
                    <div class="row" style="padding-bottom: 30px;">
                        <div class="col-md-4">
                            <a href="images/sevac4.jpg" alt="Sévac" target="_blank"><img src="images/sevac4.jpg" alt="Sévac" class="img-thumbnail"></a>                    
                        </div>
                        <div class="col-md-4">
                            <a href="images/sevac5.jpg" alt="Sévac" target="_blank"><img src="images/sevac5.jpg" alt="Sévac" class="img-thumbnail"></a>
                        </div>
                        <div class="col-md-4">
                            <a href="images/sevac2.jpg" alt="Sévac" target="_blank"><img src="images/sevacj2.jpg" alt="Sévac" class="img-thumbnail"></a>
                        </div>
            </div>
        </section>
        <section id="videos">
            <div class="container" style="padding-top: 50px;">
                <div class="row" style="margin-bottom: 10px;">
                    <div class="col-md-6">    
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/aWSDSCuRjpA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="img-thumbnail"></iframe>
                    </div>
                    <div class="col-md-6">
                        <iframe src="https://www.youtube.com/embed/J1xkawQxfn8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="img-thumbnail"></iframe>
                    </div>
                </div>
                <div class="row" style="padding-bottom: 30px;">
                    <div class="col-md-6">
                        <iframe src="https://www.youtube.com/embed/UgnTpLGJjfw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="img-thumbnail"></iframe>                    
                    </div>
                    <div class="col-md-6">
                        <iframe src="https://www.youtube.com/embed/DXE9ORVdjn8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="img-thumbnail"></iframe>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Section Galerie -->
        <!-- Section Contact -->
        <section id="contact">
            <div class="heading">
                <h1>Contact</h1>
                <?php if(isset($_POST['prenom'])) { ?><p style="color: green;"><?php echo $retourmessage; ?></p><?php } ?>
            </div>
            <div class="container" style="text-align:center;">
                <form action="#contact" method="post">
                    <div class="row" style="padding-top:5px;">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Prénom" aria-label="First name" name="prenom" required>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Nom" aria-label="Last name" name="nom" required>
                        </div>
                    </div>
                    <div class="row" style="padding-top:15px;">
                        <div class="col">
                            <input type="email" class="form-control" placeholder="email@exemple.fr" aria-label="email" name="email" required>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Objet du message" aria-label="objet" name="objet" required>
                        </div>
                        <div class="mb-3" style="padding-top:15px;">
                            <label for="exampleFormControlTextarea1" class="form-label"></label>
                            <textarea class="form-control" placeholder="Votre message" id="exampleFormControlTextarea1" rows="3" name="message" required></textarea>
                        </div>
                        <div class="col-12">
                            <button class="button1" type="submit">Envoyer</button>
                        </div>
                    </div>
                </form>               
            </div>
        </section>
        <!-- End Section Contact -->
        <!-- Footer -->
        <footer class="text-center" style="border-top: 1px solid #982C29;">
            <div class="container" style="text-align:left;">
                <div class="row" style="padding-top:5px; text-align: center;">
                    <div class="reseaux">
                        <a href="https://www.instagram.com/sevac_humour/" target="_blank" class="insta"><i class="bi bi-instagram"></i></a>
                        <a href="https://www.facebook.com/sevacarto" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
                        <p>© COPYRIGHT - TOUS DROITS RÉSERVÉS - Grégory</p>
                    </div>
                </div>
            </div>
        </footer>
</body>
    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <!-- End Scripts -->
</html>