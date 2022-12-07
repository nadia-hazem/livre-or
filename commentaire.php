<?php include 'header.php';?>
<?php include 'dbconnect.php';?> <!--connexion à la base de données-->
<?php
    $id = $_SESSION['id'];
?>

<div class="container">
    <?php
    if (isset($_POST['go']) && $_POST['go']=='Signer') 
    {

        if (isset($_POST['commentaire'])) {

            if ((!empty($_POST['commentaire']))) {
                $commentaire = mysqli_real_escape_string($conn, htmlspecialchars($_POST['commentaire']));
                $date = date("Y/m/d");
                // on prepare notre requête d'insertion des données
                $sql = "INSERT INTO commentaires (commentaire, id_utilisateur, date ) VALUES('".$commentaire."', '".$id."','".$date."')";

                // on lance la requête
                $exec_sql= mysqli_query($conn, $sql) or die('Erreur SQL !'.$sql.'<br />'.mysqli_error($conn));

                // on ferme la connexion à la base de données
                mysqli_close($conn);

                // on redirige le visiteur vers l'accueil du livre d'or
                header('location: livre-or.php');

                // on termine le script courant
                exit();
                }
                else {
                $erreur = 'saisie invalide.';
                }
            }
            else {
                $erreur = 'Au moins un des champs est vide.';
            }
    }

    ?>


        <h2>Laissez un commentaire</h2>
        <form action="" method="post">
            <textarea name="commentaire" cols="50" rows="10" placeholder="Merci d'avoir testé ce module !
                                                                            Votre commentaire"></textarea>
            <input type="submit" name="go" value="Signer">
        </form>

    <?php
    if (isset($erreur)) echo '<br /><br />',$erreur;
    ?>
</div> <!-- /container -->

<?php include 'footer.php';?>



