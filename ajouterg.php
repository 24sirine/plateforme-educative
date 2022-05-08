<?php
 session_start();
 if($_SESSION["autoriser"]!="oui"){
	header("location:login.php");
	exit();
 }
else {
$niveau=$_REQUEST['niveau'];
$classe=$_REQUEST['classe'];


include("connexion.php");
         $sel=$pdo->prepare("select niveau and classe from groupe where niveau=? and classe=?limit 1");
         $sel->execute(array($niveau,$classe));
         $tab=$sel->fetchAll();
         if(count($tab)>0)
            $erreur="NOT OK";// groupe existe déja
         else{
            $req="insert into groupe (niveau ,classe) values ($niveau,'$classe')";

            $reponse = $pdo->exec($req) or die("error");
            $erreur ="OK";
         }  
         echo $erreur;
         header("location:afficherEtudiantsParClasse.php");
}
?>