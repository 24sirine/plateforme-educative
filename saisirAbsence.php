<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCO-ENICAR Saisir Absence</title>
    <!-- Bootstrap core CSS -->
<link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap core JS-JQUERY -->
<script src="./assets/dist/js/jquery.min.js"></script>
<script src="./assets/dist/js/bootstrap.bundle.min.js"></script>
 <!--inclure le fichier .css -->
 <link rel="stylesheet" type="text/css" href="./mesStyles.css">
    <!-- Custom styles for this template -->
    <link href="./assets/jumbotron.css" rel="stylesheet">
<style>
 
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
.jumbotron{
background-color: transparent !important;
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
	color: #17a2b8;
	font-size: 2em;
	font-family: 'Open Sans',sans-serif;
}
.swipe .s-card:hover {
	box-shadow: 0 0 50px rgba(255,255,255,0.8);
	transform: translateY(-10px);
}

.btn-primary {
    color: #fff;
    background-color: #17a2b8;
    border-color: #17a2b8;
    width: 55%;
    margin-left: 200px;
}
label{
  font-weight:bold;
}
   body
        {
          overflow-y:scroll;
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
        <div class="swipe">
		<a ><div class="s-card"><p>Signaler l'absence pout tout un groupe</p></div></a>
  
            </div>
          </div>
          </div>

<div class="container">
<form id="myform" method="GET" action="saisirAbsence1.php" >
<div class="form-group">
  <label for="dateAbs">Choisir une semaine:</label><br>
  <input id="dateAbs" type="date" name="dateAbs" size="10" class="datepicker"/>
</div>

<div class="form-group">
     <label for="classe">Classe:</label><br>
     <input type="text" id="classe" name="classe" class="form-control" required pattern="INFO[1-3]{1}-[A-E]{1}"
     title="Pattern INFOX-X. Par Exemple: INFO1-A, INFO2-E, INFO3-C">
</div>
  <div class="form-group">
     <label   for="module">module:</label><br>
     <input type="text" id="module" name="module" class="form-control" >
</div>


<button  type="submit" class="btn btn-primary btn-block" onclick="valider()">Valider</button>
<div id="demo"></div>
<script>
    function valider()
    {
        var xmlhttp = new XMLHttpRequest();
        var url="http://localhostsirine/mini_project/saisirAbsence1.php";
        
        //Envoie Req
        xmlhttp.open("POST",url,true);

        form=document.getElementById("myForm");
        formdata=new FormData(form);

        xmlhttp.send(formdata);

        //Traiter Res

        xmlhttp.onreadystatechange=function()
            {   
                if(this.readyState==4 && this.status==200){
                // alert(this.responseText);
                    if(this.responseText=="OK")
                    {
                        document.getElementById("demo").innerHTML="L'action a été bien effectué";
                        document.getElementById("demo").style.backgroundColor="green";
                    }
                    else
                    {
                        document.getElementById("demo").innerHTML="La date existe déja";
                        document.getElementById("demo").style.backgroundColor="#fba";
                    }
                }
            }
        
        
    }
    </script>
<script  src="./assets/dist/js/inscrire.js"></script>
</form>
</div>  
</main>

<footer class="container">
    <p>&copy; ENICAR 2021-2022</p>
  </footer>
 

</body>
</html>
