<?php

//Initialisation de la variable $resultats
$resultats = "";

//traitement de la requête
if (isset($_POST['search']) && !empty ($_POST['search'])) {
//on vérifie si l'utilisateur a entré des termes à rechercher, et on traite sa requête

include("connexion.php");

$query = $_POST['search'];

//Requête de sélection MySQL
$req = $pdo->prepare("SELECT * FROM etudiant  WHERE prenom LIKE ?");

$req->execute(array('%' . $query . '%'));

//On compte les résultats
$count = $req->rowCount();

//On traite les résultats
if ($count >= 1) {
  $resultats .= "$count résultats trouvés pour <strong> '$query' </strong> <br />";

  while ($data = $req->fetch(PDO::FETCH_OBJ)) {
    $resultats .= "<br /> nom :" . $data->nom. ", prenom:" . $data->prenom . ",cin : " . $data->cin . ", adresse:" . $data->adresse . ", email:" . $data->email ;
  }
} else {
  $resultats .= "\n <hr /> Aucun résultat trouvé pour <strong> '$query' </strong>";
}

}
?>

    <?php echo "\n" . $resultats ?>