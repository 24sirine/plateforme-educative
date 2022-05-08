<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCO-ENICAR Etudiants Par CLasse</title>
    <!-- Bootstrap core CSS -->
<link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap core JS-JQUERY -->
<script src="./assets/dist/js/jquery.min.js"></script>
<script src="./assets/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="./assets/jumbotron.css" rel="stylesheet">
    <link href="./mesStyles.css" rel="stylesheet">
<style>
  .btn-outline-success {
  
  color: #17a2b8;
  border-color: #17a2b8;
}
button, input, optgroup, select, textarea {

  color: white;
 
}
h5
{
  font-weight:bold;
}
.btn-primary:not(:disabled):not(.disabled).active, .btn-primary:not(:disabled):not(.disabled):active, .show>.btn-primary.dropdown-toggle {
  color: #fff;
  background-color: #17a2b8;
  border-color: #17a2b8;
  margin-left right: 2;
  width: 55%;
  margin-left: 200px;
}
 .jumbotron{
background-color: transparent !important;
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
	width: 350px;
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

  </style>
</head>
<body>
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
		<a ><div class="s-card"><p>Affichage des liste des etudiants par groupe</p></div></a>
  
            </div>

            </div>
          </div>

<div class="container">
<form>
<div class="form-group">
<h5>NIVEAU 1 :</h5>

<select  onchange="location=this.value" id="classe" name="classe"  class="custom-select custom-select-sm custom-select-lg">
<option ></option>
<option value="info1A.php">1-INFOA</option>
    <option value="info1B.php">1-INFOB</option>
    <option value="info1C.php">1-INFOC</option>
    <option value="info1D.php">1-INFOD</option>
    <option value="info1E.php">1-INFOE</option>
</select>
<h5>NIVEAU 2:</h5>
<select onchange="location=this.value" id="classe" name="classe"  class="custom-select custom-select-sm custom-select-lg">
<option ></option>
<option value="info2A.php">2-INFOA</option>
  <option value="info2B.php">2-INFOB</option>
  <option value="info2C.php">2-INFOC</option>
  <option value="info2D.php">2-INFOD</option>
  <option value="info2E.php">2-INFOE</option>
</select>
<h5>NIVEAU 3:</h5>
<select onchange="location=this.value" id="classe" name="classe"  class="custom-select custom-select-sm custom-select-lg">
<option ></option>
<option value="info3A.php">3-INFOA</option>
  <option value="info3B.php">3-INFOB</option>
  <option value="info3C.php">3-INFOC</option>
  <option value="info3D.php">3-INFOD</option>
  <option value="info3E.php">3-INFOE</option>
</select>
</div>
</form>
<a type="button" class="btn btn-primary btn-block active" href="Ajoutergroupe.php"> Ajouter groupe<span class="sr-only">(current)</span></a>
</div>  
</main>

<footer class="container">
    <p>&copy; ENICAR 2021-2022</p>
  </footer>
</body>
</html>