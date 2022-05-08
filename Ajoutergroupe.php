<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCO-ENICAR Ajouter groupe</title>
    <!-- Bootstrap core CSS -->
<link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="./mesStyles.css" rel="stylesheet">
    <!-- Bootstrap core JS-JQUERY -->
<script src="./assets/dist/js/jquery.min.js"></script>
<script src="./assets/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="./assets/jumbotron.css" rel="stylesheet">
     <style>
       textarea.form-control {
    height: 50px;
}
       body
       {
         overflow:scroll;
       }
       .form-control{
         width:90%;
       }
       .container {
        height: auto;
 width: 380px;
   border-radius: 25px;
   background-color: rgba(0,0,0,0.1);
   box-shadow: 0 0 17px #333;
 
   margin-top: -4px;

}
label
{
  font-weight:bold;
}

.container input:hover{
box-shadow: 2px 2px 5px #555;
background-color: #ddd;
}
.btn-primary {
    
    background-color: #17a2b8;
    border-color: #17a2b8;
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
.jumbotron{
background-color: transparent !important;
        }
        .swipe .s-card p {
	color: #17a2b8;
	font-size: 2em;
	font-family: 'Open Sans',sans-serif;
  margin-right:1px;
}
.swipe .s-card:hover {
	box-shadow: 0 0 50px rgba(255,255,255,0.8);
	transform: translateY(-10px);
}
.swipe .s-card {
  margin-bottom: -200px;

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
		<a ><div class="s-card"><p>Ajouter un groupe</p></div></a>
  
            </div>
          </div>
</div>


<div class="container">
 <form id="myform" method="GET" action="ajouterg.php">
 
     <!--niveau-->
     <div class="form-group">
     <label for="niveau">Niveau:</label><br>
     <input type="text" id="niveau" name="niveau" class="form-control" required pattern="[1-3]{1}" title="Pattern X. Par Exemple:1,2,3">
    </div>
     <!--classe-->
     <div class="form-group">
     <label for="classe">Classe:</label><br>
     <input type="text" id="classe" name="classe" class="form-control" required required pattern="[A-E]{1}"
     title="Pattern X. Par Exemple:A,E,C">
</div>
     <!--description-->
     <div class="form-group">
        <label for="email">Description :</label><br>
        <input type="textarea" class="form-control" required>
       </div>
<!--Bouton Ajouter-->
<button  type="submit" class="btn btn-primary btn-block" onclick="ajouter()">Ajouter</button>


 </form> 
</div>  
</main>
<div id="demo"></div>
<script>
    function ajouter()
    {
        var xmlhttp = new XMLHttpRequest();
        var url="http://localhost/mini-projet-info1/auth-php-mysql/ajouterg.php";
        
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
                        document.getElementById("demo").innerHTML="L'ajout de groupe a été bien effectué";
                        document.getElementById("demo").style.backgroundColor="green";
                    }
                    else
                    {
                        document.getElementById("demo").innerHTML="Le groupe est déjà inscrit, merci de vérifier l'id";
                        document.getElementById("demo").style.backgroundColor="#fba";
                    }
                }
            }
        
        
    }
    </script>
<script  src="./assets/dist/js/inscrire.js"></script>
</body>
</html>
