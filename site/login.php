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
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>


<body class="bg-gray-100 flex items-center justify-center h-screen">

    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h1 class="text-2xl font-bold mb-6 text-center">Connexion</h1>
        <form method="post" action="login.php" class="space-y-4">
            <div>
                <label for="username" class="block text-sm font-medium text-gray-700">Nom d'utilisateur</label>
                <input type="text" name="username" id="username" placeholder="Nom d'utilisateur" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
                <input type="password" name="password" id="password" placeholder="Mot de passe" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div>
                <button type="submit" class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Se connecter</button>
            </div>
        </form>
    </div>
</body>

</html>