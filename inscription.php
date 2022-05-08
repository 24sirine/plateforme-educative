<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>SCO-ENICAR Inscription Enseignant</title>

    <!-- Bootstrap core CSS -->
<link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">
 <!--inclure le fichier .css -->
<link href="./mesStyles.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="./assets/dist/css/signin.css" rel="stylesheet">

    <style> 
    .h3 {
    margin-bottom: 15px;

}
    .form-signin{
      width: 100%;
    max-width: 330px;
    margin: auto;
    margin-top: -50px;
  }
.container {
 
  width: 380px;
    border-radius: 25px;
    background-color: rgba(0,0,0,0.1);
    box-shadow: 0 0 17px #333;
    height: 585px;
    margin-top: -40px;

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
         .erreur{
            color:#CC0000;
            margin-bottom:0px;
         }
         .form-signin input[type="email"] {
          margin-bottom:0px !important;
        }
        .h3
        {
          font-weight: none ;
        }
          
    </style>
  </head>

  <body class="text-center">
  <?php
include ("inscription1.php");
?>
  <div class="container"> 
<form name="fo" method="POST" action=""class="form-signin" action="login.html">
  <!--<img class="mb-4" src="./assets/brand/user-login.svg" alt="" width="72" height="72">-->
  <h1 class="h3 ">Veuillez créer votre compte</h1><!--mb-3 font-weight-normal-->
  <span>
  <input type="text" class="form-control" name="nom" placeholder="Nom" required autofocus value="<?php echo $nom?>" />
</span><br />
<span>
  <input type="text" class="form-control" name="prenom" placeholder="Prénom" required value="<?php echo $prenom?>" />
</span><br />
<span>
  <input type="email" class="form-control " id="ici" name="login" placeholder="Login" required value="<?php echo $login?>"/>
</span><br />
<span>
  <input type="password" class="form-control" name="pass" placeholder="Mot de passe" required />
</span><br />
<span>
  <input type="password" class="form-control" name="repass" placeholder="Confirmer Mot de passe" required />
</span><br />
<div class="erreur"><?php echo $erreur ?></div>
  <button class="btn btn-lg btn-primary btn-block" name="valider" type="submit">S'inscrire</button>
  <p class="mt-5 mb-3 text-muted">&copy; SOC-Enicar 2021-2022</p>
</form>
</div> 
  </body>
</html>