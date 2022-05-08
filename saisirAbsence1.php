<?php
 session_start();
 if($_SESSION["autoriser"]!="oui"){
   header("location:login.php");
   exit();
 }
else {
$dateAbs=$_REQUEST['dateAbs'];
$classe=$_REQUEST['classe'];
$module=$_REQUEST['module'];

include("connexion.php");
         $sel=$pdo->prepare("select dateAbs and classe and module from absence where dateAbs=? and classe=? and module=? limit 1");
         $sel->execute(array($dateAbs,$classe,$module));
         $tab=$sel->fetchAll();
         if(count($tab)>0)
            $erreur="NOT OK";// date existe déja
         else{
            $req="insert into absence (dateAbs,classe ,module) values ('$dateAbs','$classe','$module')";

            $reponse = $pdo->exec($req) or die("error");
            $erreur ="OK";
         }  
         echo $erreur;
         if($classe=="INFO1-A")
         header("location:info1AA.php");
         elseif($classe=="INFO1-B")
         header("location:info1BB.php");
         elseif($classe=="INFO1-C")
         header("location:info1CC.php");
         elseif($classe=="INFO1-D")
         header("location:info1DD.php");
         elseif($classe=="INFO1-E")
         header("location:info1EE.php");
         elseif($classe=="INFO2-A")
         header("location:info2AA.php");
         elseif($classe=="INFO2-B")
         header("location:info2BB.php");
         elseif($classe=="INFO2-C")
         header("location:info2CC.php");
         elseif($classe=="INFO2-D")
         header("location:info2DD.php");
         elseif($classe=="INFO2-E")
         header("location:info2EE.php");
         elseif($classe=="INFO3-A")
         header("location:info3AA.php");
         elseif($classe=="INFO3-B")
         header("location:info3BB.php");
         elseif($classe=="INFO3-C")
         header("location:info3CC.php");
         elseif($classe=="INFO3-D")
         header("location:info3DD.php");
         elseif($classe=="INFO3-E")
         header("location:info3EE.php");
}
?>