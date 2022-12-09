<!--HEADER BLOC-->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS-->
    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="css/animations.css" media="screen" type="text/css" />
    <!--FONT-->
    <script src="https://kit.fontawesome.com/12c357b92c.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Allison-Regular">
    <!--TITLE-->
    <title>Livre d'or</title>
</head>
<body>
    <header class="header animleft">
        <div class="title">
            <p class="name">Nadia Hazem</p>
            <p class="job">Developpeuse web</p>
        </div>

        <nav class="nav">
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
                <div class="txtcenter text"><?php echo "Bonjour $user &nbsp;"; // connecté?>  </div>  <br>             
                <a class="nav_link" href="index.php"><i class="fa-solid fa-lg fa-home"></i>Accueil</a>
                <a class="nav_link" href="profil.php"><i class="fa-solid fa-lg fa-user"></i>Profil</a>  
                <a class="nav_link" href="livre-or.php"><i class="fa-solid fa-lg fa-book"></i>Livre d\'or</a>
                <?php echo '<a class="nav_link" href="index.php?deconnexion=true"><i class="fa-solid fa-lg fa-plug"></i>Déconnexion</a>';?> 
                <a class="nav_link" href="mailto:nadia.hazem@laplateforme.io"><i class="fa-solid fa-lg fa-envelope"></i> CONTACT</a>

            <?php
                } else { 
            ?>
                <br>
                <a class="nav_link" href="index.php"><i class="fa-solid fa-lg fa-home"></i>Accueil</a>
                <a class="nav_link" href="livre-or.php"><i class="fa-solid fa-lg fa-book"></i>Livre d\'or</a>
                <a class="nav_link" href="connexion.php"><i class="fa-solid fa-lg fa-plug"></i>Connexion</a>
                <a class="nav_link" href="inscription.php"><i class="fa-solid fa-lg fa-file-signature"></i>Inscription</a>
                <a class="nav_link" href="mailto:nadia.hazem@laplateforme.io"><i class="fa-solid fa-lg fa-envelope"></i> CONTACT</a>

            <?php
                }   
            ?>
                <div class="col folio">
                    <a class="nav_link" href="https://github.com/nadia-hazem"><img src="img/logo_github_64.png" alt="github" width="25px">GitHub</a>
                    <a class="nav_link" href=" https://nadia-hazem.students-laplateforme.io"><img src="img/logo_plesk_64.png" alt="Plesk" width="25px">Plesk</a>
                    <a class="nav_link" href="https://pictelle.com/"><img src="img/logo_pictelle_64.png" alt="Pictelle" width="25px">WordPress</a>
                </div>

        </nav>
        
    </header>