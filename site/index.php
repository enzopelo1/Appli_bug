<?php
// Démarre une nouvelle session ou reprend une session existante
session_start();

// Inclut le fichier de configuration pour la connexion à la base de données
include 'config.php';
?>
<!DOCTYPE html>
<html>

<head>
    <title>Accueil</title>
    <!-- Inclut Tailwind CSS pour le style -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <!-- Inclut le fichier header.php pour l'en-tête de la page -->
    <?php include 'header.php'; ?>
    <main class="container mx-auto px-4 py-6">
        <h1 class="text-3xl font-bold text-gray-800">Bienvenue sur notre mini site</h1>
        <!-- Affiche un message de bienvenue si l'utilisateur est connecté -->
        <?php if (isset($_SESSION['user'])): ?>
            <p class="mt-4 text-gray-600">Vous êtes connecté en tant que <?php echo htmlspecialchars($_SESSION['pseudo_utilisateur']); ?>.</p>
        <?php endif; ?>
    </main>
</body>

</html>