<?php 
include "connexion.php"; 

    if (isset($_POST['update'])) {

        $nom = $_POST['nom'];
        $user_cin=$_POST['user_cin'];
        $prenom= $_POST['prenom'];
        $email = $_POST['email'];
        $adresse = $_POST['adresse']; 
        $Classe = $_POST['Classe']; 
        $sql = "UPDATE `etudiant` SET `nom`='$nom',`prenom`='$prenom',`email`='$email',`adresse`='$adresse',`Classe`='$Classe' WHERE `cin`='$user_cin'"; 
        $result = $pdo->query($sql); 
        if ($result == TRUE) {
            header('Location: afficherEtudiants.php');
        }else{
            echo "Error:" . $sql . "<br>" . $pdo->error;
        }

    } 

if (isset($_GET['cin'])) {
    $user_cin = $_GET['cin']; 
    $sql = "SELECT * FROM `etudiant` WHERE `cin`='$user_cin'";
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

    ?>
    <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>MODIFICATION DES INFORMATIONS</title>
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <!--inclure le fichier .css -->
    <link rel="stylesheet" type="text/css" href="./mesStyles.css">
    <!-- Bootstrap core CSS -->
<link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">



    <style>
       .erreur{
            color:#CC0000;
            margin-bottom:10px;}

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

.container {
width: 380px;
margin:7% auto;
border-radius: 25px;
background-color: rgba(0,0,0,0.1);
box-shadow: 0 0 17px #333; 
}
button, input, optgroup, select, textarea {
 
 color: white;

}
[type=button], [type=reset], [type=submit], button {
    
    background-color: #17a2b8;
    border-color: #17a2b8;
}
.container input:hover{
box-shadow: 2px 2px 5px #555;
background-color: #ddd;
}
*{
            font-family:arial;
         }
         body{
            margin:20px;
         }
         input{
            border:solid 1px #2222AA;
            margin-bottom:10px;
            padding:16px;
            outline:none;
            border-radius:6px;
         }
         
         }
         a{
            font-size:12pt;
            color:#EE6600;
            text-decoration:none;
            font-weight:normal;
         }
         a:hover{
            text-decoration:underline;
         }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="./assets/dist/css/signin.css" rel="stylesheet">
  </head>
  <body onLoad="document.fo.afficherEtudiants.focus()" class="text-center">
  <div class="container">

        <form id="myForm" name="fo" method="post"class="form-signin" action="">

          <fieldset>

            <legend classe="h3">Information personnelle:</legend>
          <input type="text" class="form-control" name="nom" placeholder="Nom" required autofocus value="<?php echo $nom?>" />
          </span><br />
          <input type="hidden" name="user_cin" value="<?php echo $cin; ?>">
          <span>
          <input type="text" class="form-control" name="prenom" placeholder="Prénom" required value="<?php echo $prenom?>" />
          </span><br />
          <span>
          <input type="email" class="form-control" name="email" placeholder="Login" required value="<?php echo $email?>"/>
          </span><br />
          <span>

          <input type="text" class="form-control" name="adresse" placeholder="adresse" required value="<?php echo $adresse?>"/>
          </span><br />
          <span>
          <input type="text" class="form-control" name="Classe" placeholder="Classe" required value="<?php echo $Classe?>"/>
          </span><br />
             <span>
            <input type="submit" value="Update" name="update">
            </span>
          </fieldset>

        </form> 

        </body>

        </html> 

    <?php

    } else{ 

        header('Location: afficherEtudiants.php');

    } 

}

?>