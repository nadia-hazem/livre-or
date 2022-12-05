<!--INSCRIPTION PAGE-->
<?php include 'header.php';?>
<?php include 'dbconnect.php';?>    <!--connexion à la base de données-->

<main>
    <?php
        //par défaut, on affiche le formulaire
        $AfficherFormulaire=1;
        //traitement du formulaire:
        if(isset($_POST['login'],$_POST['password'])){
            $login = mysqli_real_escape_string($conn, htmlspecialchars($_POST['login']));
            $password = mysqli_real_escape_string($conn, htmlspecialchars($_POST['password']));
            
            if($_POST['login'] = ""){ // si le login est vide
                echo "<p style='color:red'>Le champ nom d'utilisateur est vide.</p>";
            } elseif(mysqli_num_rows(mysqli_query($conn,"SELECT * FROM utilisateurs WHERE login='".$_POST['login']."'"))==1){//on vérifie que ce pseudo n'est pas déjà utilisé par un autre membre
                echo "<p style='color:red'>Ce pseudo est déjà utilisé.</p>";
            } elseif($_POST['password']== "" || $_POST['password2']== ""){
                echo "<p style='color:red'>Le champs Mot de passe est vide.</p>";
            } elseif ($_POST['password'] != $_POST['password2']) { 
                echo "<p style='color:red'>Les mots de passe ne correspondent pas.</p>";
            } else {
                //toutes les vérifications sont faites, on passe à l'enregistrement dans la base de données:
                //cryptage du mot de passe
                $password = password_hash($password, PASSWORD_DEFAULT);
                if(!mysqli_query($conn,"INSERT INTO utilisateurs (login, password) values('".$login."', '".$password."')")) {
                    echo "<p style='color:red'>Une erreur s'est produite: </p>".mysqli_error($conn);
                } else {
                    echo "Vous êtes inscrit(e) avec succès!";
                    //on n'affiche plus le formulaire
                    $AfficherFormulaire=0;
                    header('Location: connexion.php'); // redirection vers la page de connexion
                }
            }
            mysqli_close($conn); // fermeture de la connexion à la base de données pour plus de propreté
        }
        if($AfficherFormulaire==1){ // si le formulaire doit être affiché
            ?>
            <div class="module2">
                <h1>Créez un compte</h1>
                <br />
                <form method="post" action="">
                    Login : <input type="text" name="login">
                    <br />
                    Mot de passe : <input type="password" name="password">
                    <br />
                    Confirmez le mot de passe : <input type="password" name="password2">
                    <input type="submit" value="Inscription">
                </form>
            </div> <!-- /module -->

            <?php
        }
    ?>
</main> <!-- /main -->

<?php include 'footer.php';?>