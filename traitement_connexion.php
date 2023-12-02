<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $serveur = "localhost";
    $utilisateur = "root";
    $mot_de_passe = "";
    $base_de_donnees = "voyage";

    $connexion = new mysqli($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

    if ($connexion->connect_error) {
        die("La connexion à la base a échoué : " . $connexion->connect_error);
    }

$verif_req = "SELECT user.*, roles.nom_role
              FROM user
              INNER JOIN roles ON user.id_role = roles.id_role
              WHERE nom_user = ?";
$requete = $connexion->prepare($verif_req);
$requete->bind_param("s", $username);
$requete->execute();
$result = $requete->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    
    $role = $row["nom_role"];

        $_SESSION['username'] = $username;

        if ($role === 'administrateur') {
        
            header("Location: admin.php");
            exit();
        } elseif ($role === 'utilisateur') {
            header("Location: index.php");
            exit();
        }
        
    } else {
       
        header("Location: index.php");
        exit();
    }
 


    $connexion->close();
}
?>
