<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<?php include("menu.php") ?>
<body><br><br>
    



<div class="content">
    <div class="container1">
        <div class="image-container">
            <img src="in1.png" alt="Image de Connexion">
        </div>
        <div class="form-container">
            <h2>inscription</h2>
            <form action="traitement_inscription.php" method="POST">
                <div class="form-group">
                    <label for="username">Nom </label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">prenom</label>
                    <input type="password" id="prenom" name="prenom" required>
                </div>
                <div class="form-group">
                    <label for="password">adresse</label>
                    <input type="password" id="adresse" name="adresse" required>
                </div>
                <div class="form-group">
                    <label for="password">email</label>
                    <input type="password" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">mot de passe</label>
                    <input type="password" id="password" name="password" required>
                </div>
                
           
                <button type="submit">s'inscrire</button>
            </form>
            <p>deja un compte ? <a href="CONNEXION.php">connecte-vous</a></p>
            <div>
</body>
</html>