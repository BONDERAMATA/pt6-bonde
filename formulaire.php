<?php
function afficherNomVilleParID($idVille) {
    $conn = new mysqli('localhost', 'root', '', 'voyage');

    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué : " . $conn->connect_error);
    }

    $sql = "SELECT id, nom FROM ville WHERE id = $idVille";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $idVille = $row['id'];
        $nomVille = $row['nom'];

        $conn->close();

        return $nomVille;
    } else {
        $conn->close();
        return "Aucun nom de ville n'a été trouvé dans la base de données pour l'ID spécifié.";
    }
}




function afficherImageVilleParNom($nomVille) {
    $conn = new mysqli('localhost', 'root', '', 'voyage');

    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué : " . $conn->connect_error);
    }

    $nomVille = $conn->real_escape_string($nomVille);

    $sql = "SELECT image_ville FROM ville WHERE nom_ville = '$nomVille'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $contenuImage = $row['image_ville'];

        $conn->close();

        $html = '<img src="data:image/jpeg;base64,' . base64_encode($contenuImage) . '" alt="Image ' . $nomVille . '" >';

        echo $html;
    } else {
        $conn->close();
        echo "Aucune image de ville n'a été trouvée dans la base de données pour le nom de ville spécifié.";
    }
}
function afficherDescriptionVilleParNom($nomVille) {
    $conn = new mysqli('localhost', 'root', '', 'voyage');

    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué : " . $conn->connect_error);
    }

    $nomVille = $conn->real_escape_string($nomVille);

    $sql = "SELECT description_ville FROM ville WHERE nom_ville = '$nomVille'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $descriptionVille = $row['description_ville'];

        $conn->close();

        return $descriptionVille;
    } else {
        $conn->close();
        return "Aucune description de ville n'a été trouvée dans la base de données pour le nom de ville spécifié.";
    }
}



    function afficherImageParID($idImage) {
        $conn = new mysqli('localhost', 'root', '', 'voyage');

        if ($conn->connect_error) {
            die("La connexion à la base de données a échoué : " . $conn->connect_error);
        }

        $sql = "SELECT id, image, nom_site FROM sites WHERE id = $idImage";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $idImage = $row['id'];
            $contenuImage = $row['image'];
            $nomImage = $row['nom_site'];
            $html = '<img src="data:image/jpeg;base64,' . base64_encode($contenuImage) . '" alt="Image ' . $idImage . '" >';

            $conn->close();

            return $html;
        } else {
            $conn->close();
            return "Aucune image n'a été trouvée dans la base de données pour l'ID spécifié.";
        }
    }


    function afficherDescriptionSiteParID($idSite) {
        $conn = new mysqli('localhost', 'root', '', 'voyage');

        if ($conn->connect_error) {
            die("La connexion à la base de données a échoué : " . $conn->connect_error);
        }

        $sql = "SELECT id, description, nom_site FROM sites WHERE id = $idSite";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $idSite = $row['id'];
            $description = $row['description'];
            $nomSite = $row['nom_site'];

            $conn->close();

            return $description;
        } else {
            $conn->close();
            return "Aucune description n'a été trouvée dans la base de données pour l'ID spécifié.";
        }
    }

    function afficherNomSiteParID($idSite) {
        $conn = new mysqli('localhost', 'root', '', 'voyage');

        if ($conn->connect_error) {
            die("La connexion à la base de données a échoué : " . $conn->connect_error);
        }

        $sql = "SELECT id, nom_site FROM sites WHERE id = $idSite";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $idSite = $row['id'];
            $nomSite = $row['nom_site'];

            $conn->close();

            return $nomSite;
        } else {
            $conn->close();
            return "Aucun nom de site n'a été trouvé dans la base de données pour l'ID spécifié.";
        }
    }


?>