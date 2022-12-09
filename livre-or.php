<?php include 'header.php';?>
    <?php include 'dbconnect.php';?> <!--connexion à la base de données-->

    <main>
        <h1 class="animtop">Livre d'or</h1>

        <?php    
            $request = "SELECT commentaires.commentaire, DATE_FORMAT(commentaires.date,'%d/%m/%Y') as date_fr , utilisateurs.login FROM commentaires INNER JOIN utilisateurs ON commentaires.id_utilisateur = utilisateurs.id";
            $exec_request = $conn->query($request);

            if (isset($_SESSION['loginOK'] ) && $_SESSION['loginOK'] == true) 
            {
        ?>      <br><a class="row" href="commentaire.php"><i class="fa-solid fa-2x fa-arrow-right-to-bracket"></i><h3 class="yellow">Laissez un commentaire</h3></a><br>
        <?php
            }
            else {
        ?>      <br><a class="row" href="connexion.php"><i class="fa-solid fa-2x fa-arrow-right-to-bracket"></i> <h3 class="yellow">Connectez-vous pour laisser un commentaire</h3></a>
        <?php
            }
        ?>
        <div class="content animright">
            <table width="100%"> 
                <thead>
                    <tr class="row coms">
                        <th class="thcom1"><h3>date</h3></th>
                        <th class="thcom2"><h3>login</h3></th>
                        <th class="thcom3"><h3>commentaire</h3></th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $exec_request->fetch_assoc()) { ?>
                        <tr class="row coms">
                            <td class="tdcom1"><div class="com"><em><?php echo $row['date_fr']; ?></em></div></td>
                            <td class="tdcom2"><div class="com"><?php echo $row['login']; ?></div></td>
                            <td class="tdcom3 wrap"><div class="com"><?php echo $row['commentaire']; ?></div></td>
                    </tr>
                    <?php } ?>
                </tbody>           
            </table>  
        </div> <!-- /content -->
        <?php        


            mysqli_close($conn); // on ferme la connexion à MySQL  
        ?>  

    </main> <!-- /main -->

    <?php include('footer.php'); ?>