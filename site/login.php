<?php
session_start();
if (isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}

// Code de traitement de la connexion
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Supposons que l'utilisateur est authentifié avec succès
    $_SESSION['user'] = $_POST['username']; // Utilise le nom d'utilisateur saisi dans le formulaire
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Connexion</title>
</head>

<body>
    <h1>Connexion</h1>
    <form method="post" action="login.php">
        <input type="text" name="username" placeholder="Nom d'utilisateur" required>
        <input type="password" name="password" placeholder="Mot de passe" required>
        <button type="submit">Se connecter</button>
    </form>
</body>

</html>