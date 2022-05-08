<?php 
include "connexion.php";
$sql = "SELECT * FROM etudiant where Classe ='INFO1DA'";
$result = $pdo->query($sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCO-ENICAR Afficher Etudiants</title>
    <!-- Bootstrap core CSS -->
<link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap core JS-JQUERY -->
<script src="./assets/dist/js/jquery.min.js"></script>
<script src="./assets/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="./assets/jumbotron.css" rel="stylesheet">
<!--inclure le fichier .css -->
<link rel="stylesheet" type="text/css" href="./mesStyles.css">

<style>
    .btn-outline-success {
  
  color: #17a2b8;
  border-color: #17a2b8;
}
.btn-primary:not(:disabled):not(.disabled).active, .btn-primary:not(:disabled):not(.disabled):active, .show>.btn-primary.dropdown-toggle {
  color: #fff;
  background-color: #17a2b8;
  border-color: #17a2b8;
  margin-left right: 2;
  width: 55%;
  margin-left: 200px;
}
      
      body
      {
        overflow-y:scroll;
      }
        .hh {
            color: #17a2b8;
            font-size: 30px;
            text-align: center;
        }
        .swipe {
	display: flex;
	flex-wrap: wrap;
	justify-content: center;
	align-items: center;
	background-size: cover;
	background-attachment: fixed;
}
.swipe .s-card img {
	width: 100px;
}
.swipe a {
	padding: 0;
	margin: 40px 10px;
}
.swipe .s-card {
  margin-bottom: -200px;
    margin-right: 50px;
	display: flex;
	justify-content: space-around;
	padding: 10px;
	align-items: center;
	text-align: center;
	box-shadow: inset 0 0 20px rgba(255,255,255,0.05),
					0 0 50px rgba(0,0,0,0.8);
	border-radius: 5px;
	cursor: pointer;
	transition-duration: .5s;
}
.swipe .s-card p {
	color: #17a2b8;;
	font-size: 2em;
	font-family: 'Open Sans',sans-serif;
}
.swipe .s-card:hover {
	box-shadow: 0 0 50px rgba(255,255,255,0.8);
	transform: translateY(-10px);
}
.jumbotron{
background-color: transparent !important;
        }

        </style>
</head>

<body onload="refresh()">

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">SCO-Enicar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
        
            <li class="nav-item active">
        <a class="nav-link" href="afficherEtudiantsParClasse.php">Gestion des Groupes <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="afficherEtudiants.php">Gestion des Etudiants <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
               <a class="nav-link" href="saisirAbsence.php">Gestion des absences <span class="sr-only">(current)</span></a>
      </li>

      
            <li class="nav-item active">
              <a class="nav-link" href="deconnexion.php">Se Déconnecter <span class="sr-only">(current)</span></a>
            </li>
      
          </ul>
        
      
         
        </div>
      </nav>
      
<main role="main">
        <div class="jumbotron">
      
            <div class="container">
            <div class="swipe">
		<a ><div class="s-card"><p>LES ETUDIANTS DE INFO1-D</p></div></a>
  
            </div>
                     </div>
          </div>

<div class="container">
<div class="row">
<div class="table-responsive"> 
 <table class="table table-striped table-hover">
     <!--Ligne Entete-->
     <tr>
         <th>
             CIN
         </th>
         <th>
             Nom
         </th>
         <th>
             Prénom
         </th>
         <th>
             Email
         </th>
         <th>
           adresse
        </th>

         <th>
             Classe
         </th>
         <th>
           Actions
        </th>
        <tbody> 

<?php
if ($result->rowCount() > 0){
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
$cin = $row['cin'];
$nom = $row['nom'];
$prenom = $row['prenom'];
$email = $row['email'];
$adresse=$row['adresse'];
$Classe = $row['Classe'];
?>

            <tr>
            <td><?php echo $cin ?></td>
            <td><?php echo $nom ?></td>
            <td><?php echo $prenom ?></td>
            <td><?php echo $email ?></td>
            <td><?php echo $adresse ?></td>
            <td><?php echo $Classe ?></td>

            <td><a class="btn btn-info" href="update.php?cin=<?php echo $cin ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?cin=<?php echo $cin ?>">Delete</a></td>

            </tr>                       

<?php       }

    }

?>                

</tbody>
     </table>
     
     <br>
 </div>
 <button  type="button" class="btn btn-primary btn-block active" onclick="refresh()">Actualiser</button>
 <a type="button" class="btn btn-primary btn-block active" href="AjouterEtudiant.php"> Ajouter Etudiants<span class="sr-only">(current)</span></a>
</div>
</div>

</main>


<footer class="container">
    <p>&copy; ENICAR 2021-2022</p>
  </footer>
</body>

</html>