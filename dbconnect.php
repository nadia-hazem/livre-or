<!--DBCONNECT BLOC-->
<?php // connexion à la base de données

$conn = mysqli_connect('localhost', 'root', '', 'livreor'); 
/* $conn = mysqli_connect('localhost', 'nadia', '*livreor*', 'nadia-hazem_livreor');
*/
if(!$conn) {
    echo "Connexion non établie.";
    exit;
}
?>
