<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="style.css">
    <title>site de voyage</title>
    
</head>
<?php include("menu.php") ?>
<body>
    



 <div class="content">
    <div class="container1">
        <div class="image-container">
            <img src="in1.png" alt="Image de Connexion">
        </div>
        <div class="form-container">
            <h2>Connexion</h2>
            <form action="traitement_connexion.php" method="POST">
                <div class="form-group">
                    <label for="username">Nom d'utilisateur</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit">Se connecter</button>
            </form>
            <p>Pas encore de compte ? <a href="inscription.php">Inscrivez-vous ici</a></p>
            <div>
            <div>
            <?php
               

                if (isset($_SESSION['messageErreur'])) {
                    echo '<div class="message-erreur">' . $_SESSION['messageErreur'] . '</div>';
                    unset($_SESSION['messageErreur']); 
                } elseif (isset($_SESSION['messageReussite'])) {
                    echo '<div class="message-reussite">' . $_SESSION['messageReussite'] . '</div>';
                    unset($_SESSION['messageReussite']);
                }
            ?>  
    </div>       
            
</div> 
  


</div>









</body>

</html>