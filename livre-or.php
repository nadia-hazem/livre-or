<?php include 'header.php';?>
<?php include 'dbconnect.php';?> <!--connexion à la base de données-->

<div class="container">
    <?php
    
        $request = "SELECT commentaires.commentaire, DATE_FORMAT(commentaires.date,'%d/%m/%Y') as date_fr , utilisateurs.login FROM commentaires INNER JOIN utilisateurs ON commentaires.id_utilisateur = utilisateurs.id";
        $exec_request = $conn->query($request);
    ?>

<div class="container">
    
    <?php 
        if (isset($_SESSION['loginOK'] ) && $_SESSION['loginOK'] == true) 
        {
            echo '<a href="commentaire.php">Laissez un commentaire</a>';
        }
        else {
            echo '<a href="connexion.php">Connectez-vous pour laisser un commentaire</a>';
        }

    ?>


    <?php


    ?>  
        <table> 
            <thead>
                <tr>
                    <th>date</th>
                    <th>login</th>
                    <th>commentaire</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $exec_request->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $row['date_fr']; ?></td>
                        <td><?php echo $row['login']; ?></td>
                        <td><?php echo $row['commentaire']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>           
        </table>  

    <?php        


        mysqli_close($conn); // on ferme la connexion à MySQL  
    ?>  

</div>

<?php include('footer.php'); ?>