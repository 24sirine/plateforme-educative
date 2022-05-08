<?php 

include "connexion.php"; 

if (isset($_GET['cin'])) {
    $cin = $_GET['cin'];
    $sql = "DELETE FROM `etudiant` WHERE `cin`='$cin'";
     $result = $pdo->query($sql);
     if ($result == TRUE) {
        header('Location: afficherEtudiants.php');;
    }else{
        echo "Error:" . $sql . "<br>" . $pdo->error;
    }

} 

?>
