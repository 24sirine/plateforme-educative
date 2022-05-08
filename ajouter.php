<?php
 session_start();
 if($_SESSION["autoriser"]!="oui"){
	header("location:login.php");
	exit();
 }
else {
$cin=$_REQUEST['cin'];
$nom=$_REQUEST['nom'];
$prenom=$_REQUEST['prenom'];
$email=$_REQUEST['email'];
$adresse=$_REQUEST['adresse'];
$pwd=$_REQUEST['pwd'];
$cpwd=$_REQUEST['cpwd'];

$classe=$_REQUEST['classe'];


include("connexion.php");
         $sel=$pdo->prepare("select cin from etudiant where cin=? limit 1");
         $sel->execute(array($cin));
         $tab=$sel->fetchAll();
         if(count($tab)>0)
            $erreur="NOT OK";// Etudiant existe déja
         else{
            $req="insert into etudiant values ($cin,'$email',md5('$pwd'),md5('$cpwd'),'$nom','$prenom','$adresse','$classe')";
            if($classe=='INFO1-A')
            {$req2="insert into groupe (niveau ,classe) values (1,'A')";
               $reponse2 = $pdo->exec($req2) or die("error");
            }
            elseif($classe=='INFO1-B')
            {$req2="insert into groupe (niveau , classe) values (1,'B')";
               $reponse2 = $pdo->exec($req2) or die("error");
            }
            elseif($classe=='INFO1-C')
            {$req2="insert into groupe (niveau , classe) values (1,'C')";
               $reponse2 = $pdo->exec($req2) or die("error");
            }
            elseif($classe=='INFO1-D')
            {$req2="insert into groupe (niveau , classe) values (1,'D')";
               $reponse2 = $pdo->exec($req2) or die("error");
            }
            elseif($classe=='INFO1-E')
            {$req2="insert into groupe (niveau , classe) values (1,'E')";
               $reponse2 = $pdo->exec($req2) or die("error");
            }
            elseif($classe=='INFO2-A')
            {$req2="insert into groupe (niveau ,classe) values (2,'A')";
               $reponse2 = $pdo->exec($req2) or die("error");
            }
            elseif($classe=='INFO2-B')
            {$req2="insert into groupe (niveau , classe) values (2,'B')";
               $reponse2 = $pdo->exec($req2) or die("error");
            }
            elseif($classe=='INFO2-C')
            {$req2="insert into groupe (niveau , classe) values (2,'C')";
               $reponse2 = $pdo->exec($req2) or die("error");
            }
            elseif($classe=='INFO2-D')
            {$req2="insert into groupe (niveau , classe) values (2,'D')";
               $reponse2 = $pdo->exec($req2) or die("error");
            }
            elseif($classe=='INFO2-E')
            {$req2="insert into groupe (niveau , classe) values (2,'E')";
               $reponse2 = $pdo->exec($req2) or die("error");
            }
            elseif($classe=='INFO3-A')
            {$req2="insert into groupe (niveau ,classe) values (3,'A')";
               $reponse2 = $pdo->exec($req2) or die("error");
            }
            elseif($classe=='INFO3-B')
            {$req2="insert into groupe (niveau , classe) values (3,'B')";
               $reponse2 = $pdo->exec($req2) or die("error");
            }
            elseif($classe=='INFO3-C')
            {$req2="insert into groupe (niveau , classe) values (3,'C')";
               $reponse2 = $pdo->exec($req2) or die("error");
            }
            elseif($classe=='INFO3-D')
            {$req2="insert into groupe (niveau , classe) values (3,'D')";
               $reponse2 = $pdo->exec($req2) or die("error");
            }
            elseif($classe=='INFO3-E')
            {$req2="insert into groupe (niveau , classe) values (3,'E')";
               $reponse2 = $pdo->exec($req2) or die("error");
            }
            $reponse = $pdo->exec($req) or die("error");
            $erreur ="OK";
         }  
         echo $erreur;
         header("location:afficherEtudiants.php");
}
?>