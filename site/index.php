<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Accueil</title>
</head>
<body>
    <h1>Bienvenue sur notre mini site</h1>
    <?php if (isset($_SESSION['user'])): ?>
        <p>Vous êtes connecté en tant que <?php echo htmlspecialchars($_SESSION['user']); ?>.</p>
        <a href="logout.php">Déconnexion</a>
    <?php else: ?>
        <a href="login.php">Connexion</a>
    <?php endif; ?>
</body>
</html>