<!--CONNEXION PAGE-->
<?php include 'header.php';?>
<?php include 'dbconnect.php';?> <!-- connecxion à la base de données -->

<div class="container">       
    <div class="col">
        <form action="verification.php" method="POST"> <!-- redirection vers la page de vérification -->
            <h1 class="blue txtcenter">Bonjour</h1>
            <h3 class=" blue txtcenter">Connectez-vous pour accéder à votre profil</h3>
            <h1 class="title1">Connexion</h1>
            <label>Login</label>
            <input type="text" placeholder="Entrer le nom d'utilisateur" name="login" required>

            <label>Mot de passe</label>
            <input type="password" placeholder="Entrer le mot de passe" name="password" required>

            <input type="submit" id='submit' value='Connexion' >

            <?php

            if(isset($_GET['erreur'])){
                $err = $_GET['erreur'];
                if($err==1 || $err==2)
                    echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
            }
            
            ?>
        </form>
    </div> <!-- /col -->
</div> <!-- /container -->

<?php include 'footer.php';?>
