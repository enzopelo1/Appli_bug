<?php
session_start();
include 'config.php'
?>
<!DOCTYPE html>
<html>

<head>
    <title>Accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <?php include 'header.php'; ?>
    <main class="container mx-auto px-4 py-6">
        <h1 class="text-3xl font-bold text-gray-800">Bienvenue sur notre mini site</h1>
        <?php if (isset($_SESSION['user'])): ?>
            <p class="mt-4 text-gray-600">Vous êtes connecté en tant que <?php echo htmlspecialchars($_SESSION['user']); ?>.</p>
        <?php endif; ?>
    </main>
</body>

</html>