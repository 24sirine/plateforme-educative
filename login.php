<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>SCO-ENICAR Se Connecter</title>
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
height:540px;
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
  <body onLoad="document.fo.login.focus()" class="text-center">

  <?php
include ("login1.php");
?>
  </body>
<div class="container">

<form id="myForm" name="fo" method="post"class="form-signin" action="">
<!--action="index.html">-->
  <!-- <img class="mb-4" src="./assets/brand/user-login.svg" alt="" width="72" height="72">-->
  <h1 class="h3 ">Veuillez vous connecter</h1> <!--mb-3 font-weight-normal-->
  <div class="erreur"><?php echo $erreur ?></div>
  <span>
  <label for="inputEmail" class="sr-only">Email </label>
  <i class="fa fa-user"></i>
  <input  type="email" id="inputEmail" name = "login" class="form-control" placeholder="Email address" required autofocus>
  </span><br>
  <span>
  <label for="inputPassword" class="sr-only">Mot de Passe</label>
  <i class="fa fa-lock"></i>
  <input type="password" id="inputPassword" name="pass" class="form-control" placeholder="Password" required>
  </span> <br>
  <span>
  <button class="btn btn-lg btn-primary btn-block"  name ="valider" type="submit">Se Connecter</button>
  </span>
  <br><a href="inscription.php"> Créer un Compte</a>
  <p class="mt-5 mb-3 text-muted">&copy; SOC-Enicar 2021-2022</p>
</form>

</script>

        </div>
