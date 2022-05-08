<?php 
include "connexion.php"; 

if (isset($_GET['Classe'])) {
    $Classe = $_GET['Classe']; 
    for (var i)
    $sql = "INSERT INTO groupe(niveau, classe) SELECT , col2 FROM table";
    $result = $pdo->query($sql); 

    if ($result->rowCount() > 0){
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {

            $nom = $row['nom'];
            $prenom = $row['prenom'];
            $email = $row['email'];
            $adresse = $row['adresse'];
            $Classe= $row['Classe'];
            $cin= $row['cin'];


        } 