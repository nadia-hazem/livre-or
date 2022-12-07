<!--HEADER BLOC-->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS-->
    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
    <!--FONT-->
    <script src="https://kit.fontawesome.com/12c357b92c.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Allison-Regular">
    <!--TITLE-->
    <title>Livre d'or</title>
</head>
<body>
    <header>
        <div class="sidebar">
            <div class="title">
                <p class="name">Nadia Hazem</p>
                <p class="job">Developpeuse web</p>
            </div>
            <div class="top_form">
                <!-- tester si l'utilisateur est connecté -->
                <?php
                    session_start();
                    if (isset($_GET['deconnexion'])){
                        if($_GET['deconnexion']==true){
                            session_unset();
                            header('Location: index.php');
                        }
                    }

                    else if (isset($_SESSION['login'])) {
                        $user = $_SESSION['login'];
                        // afficher les liens menus correspondants à la session
                ?>
                <div class="col wrap php_menu">
                    <div class="php0"><?php echo "Bonjour $user &nbsp;"; // connecté?>  </div>               
                    <div class="php"><?php echo '<a href="index.php"><i class="fa-solid fa-home"></i>Accueil</a>  &nbsp;';?> </div>  
                    <div class="php"><?php echo '<a href="profil.php"><i class="fa-solid fa-user"></i>Profil</a>  &nbsp;';?> </div>  
                    <div class="php"><?php echo '<a href="livre-or.php"><i class="fa-solid fa-book"></i>Livre d\'or</a>  &nbsp;';?> </div>  
                    <div class="php"><?php echo '<a href="index.php?deconnexion=true"><i class="fa-solid fa-plug"></i>Déconnexion</a>';?> </div>  
                    <a href="mailto:nadia.hazem@laplateforme.io"><i class="fa-solid fa-envelope"></i> Contact</a>
                </div>

                <?php
                    } else { 
                ?>

                <div class="col wrap php_menu">
                    <div class="php"><?php echo '<a href="index.php"><i class="fa-solid fa-home"></i>Accueil</a>&nbsp;';?>   </div>
                    <div class="php"><?php echo '<a href="livre-or.php"><i class="fa-solid fa-book"></i>Livre d\'or</a>  &nbsp;';?>  </div>
                    <div class="php"><?php echo '<a href="connexion.php"><i class="fa-solid fa-plug"></i>Connexion</a>'; ?>  </div>
                    <div class="php"><?php echo '<a href="inscription.php"><i class="fa-solid fa-file-signature"></i>Inscription</a>';?>  </div>
                    <a href="mailto:nadia.hazem@laplateforme.io"><i class="fa-solid fa-envelope"></i> Contact</a>
                <?php
                    }   
                ?>

            </div> <!-- end top_form -->

            <div class="menu ">
                <p class="center projects">voir mes projets</p>
                <a href="https://github.com/nadia-hazem"><img src="img/logo_github_32.png" alt="github" width="16px">mon GitHub</a>
                <a href=" https://nadia-hazem.students-laplateforme.io"><img src="img/logo_plesk_32.png" alt="Plesk" width="16px">mon Plesk</a>
                <a href="https://pictelle.com/"><img src="img/logo_pictelle_32.png" alt="Pictelle" width="16px">mon WordPress</a>
            </div>
        </div> <!-- end sidebar -->
    </header>