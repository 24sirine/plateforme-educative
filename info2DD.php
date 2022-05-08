<?php 
include "connexion.php";
$sql = "SELECT * FROM etudiant where Classe ='INFO2-D'";
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

  margin-left: 55px;
}
.swipe {
	display: flex;
	flex-wrap: wrap;
	justify-content: center;
	align-items: center;
	background-size: cover;
	background-attachment: fixed;
}
p{
  font-weight:bold;
  color :red;
  text-align:center;
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

      body
      {
        overflow-y:scroll;
      }
        .hh {
            color: #17a2b8;
            font-size: 30px;
            text-align: center;
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
		<a ><div class="s-card"><p>LES ABSENCES DES ETUDIANTS DE INFO2-D</p></div></a>
            </div>
            </div>
          </div>

<div class="container">
<div class="row">
<div class="table-responsive"> 
 <table class="table table-striped table-hover">
     <!--Ligne Entete-->
 
         <th >
             CIN
         </th>
         <th>
             Nom
         </th>
         <th >
             Prénom
         </th>


         <th colspan="2"  width="100px" style="padding-left: 5px; padding-right: 5px;">Lundi</th>
<th colspan="2" width="100px" style="padding-left: 5px; padding-right: 5px;">Mardi</th>
<th colspan="2" width="100px" style="padding-left: 5px; padding-right: 5px;">Mercredi</th>
<th colspan="2" width="100px" style="padding-left: 5px; padding-right: 5px;">Jeudi</th>
<th colspan="2" width="100px" style="padding-left: 5px; padding-right: 5px;">Vendredi</th>
<th colspan="2" width="100px" style="padding-left: 5px; padding-right: 5px;">Samedi</th>
<th colspan="2" width="100px" style="padding-left: 5px; padding-right: 5px;"></th>

</tr><tr><td>&nbsp;</td>
<th></th>
<th></th>
<?php 

$sql1 = "SELECT * FROM absence where Classe ='INFO2-D'";
$result1 = $pdo->query($sql1);
if ($result1->rowCount() > 0){
  while ($row = $result1->fetch(PDO::FETCH_ASSOC)) {
  $dateAbs = $row['dateAbs'];}}

  $date = new DateTime($dateAbs);
  $date->modify('+1 day');
 
  $date1 = new DateTime($dateAbs);
  $date1->modify('+2 day');
  
  $date2 = new DateTime($dateAbs);
  $date2->modify('+3 day');

  $date3 = new DateTime($dateAbs);
  $date3->modify('+4 day');

  $date4 = new DateTime($dateAbs);
  $date4->modify('+5 day');


?>

<th colspan="2" width="100px" style="padding-left: 5px; padding-right: 5px;"><?php echo $dateAbs ?></th>
<th colspan="2" width="100px" style="padding-left: 5px; padding-right: 5px;"><?php echo $date->format('Y-m-d')  ?></th>
<th colspan="2" width="100px" style="padding-left: 5px; padding-right: 5px;"><?php echo $date1->format('Y-m-d')  ?></th>
<th colspan="2" width="100px" style="padding-left: 5px; padding-right: 5px;"><?php echo $date2->format('Y-m-d')  ?></th>
<th colspan="2" width="100px" style="padding-left: 5px; padding-right: 5px;"><?php echo $date3->format('Y-m-d')  ?></th>
<th colspan="2" width="100px" style="padding-left: 5px; padding-right: 5px;"><?php echo $date4->format('Y-m-d')  ?></th>
            
</tr><tr><td>&nbsp;</td>
<th></th><th></th><th>AM</th><th>PM</th><th>AM</th><th>PM</th><th>AM</th><th>PM</th><th>AM</th><th>PM</th><th>AM</th><th>PM</th><th>AM</th><th>PM</th>
</tr>


<?php
if ($result->rowCount() > 0){
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
$cin = $row['cin'];
$nom = $row['nom'];
$prenom = $row['prenom'];

?>

            <tr>

            <td><?php echo $cin ?></td>
            <td><?php echo $nom ?></td>
            <td><?php echo $prenom ?></td>

            <form action="" method="post" >
            
<td><input type="checkbox" name="1" value="value1" </td>
<td><input type="checkbox" name="2" value="value2"</td>
<td><input type="checkbox" name="3" value="value3"</td>
<td><input type="checkbox"name="4" value="value4"</td>
<td><input type="checkbox"name="5" value="value5"></td>
<td><input type="checkbox"name="6" value="value6"></td>
<td><input type="checkbox"name="7" value="value7"></td>
<td><input type="checkbox"name="8" value="value8"></td>
<td><input type="checkbox"name="9" value="value9"></td>
<td><input type="checkbox"name="10" value="value10"></td>
<td><input type="checkbox"name="11" value="value11"></td>
<td><input type="checkbox"name="12" value="value12"></td>

<td><button  type="submit" value="Submit" class="btn btn-primary btn-block active" >submit</button></td>

</form> 
</tr>
            </tr>                        
<?php       }
    }
?>  
  
<p><?php
$nbabs= 0 ;

for ($i=0 ;$i <12 ; $i++) {
if(isset($_POST[$i])){
    $nbabs++;
}
}
echo "le nombre des absences de cet etudiant est :" . $nbabs;
?>       </p>        
  </tbody>
     </table>
     <br>
 </div>
</div>
</div>
</main>
<footer class="container">
    <a>&copy; ENICAR 2021-2022</a>
  </footer>
</body>

</html>