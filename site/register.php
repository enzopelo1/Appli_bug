<?php
session_start();
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupère et sécurise les données du formulaire
    $username = htmlspecialchars($_POST['username']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Vérifie si les mots de passe correspondent
    if ($password !== $confirm_password) {
        $error = 'Les mots de passe ne correspondent pas.';
    } else {
        try {
            // Insère le nouvel utilisateur dans la base de données
            $sql = "INSERT INTO users (username, password) VALUES (:username, :password)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':username', $username, PDO::PARAM_STR);
            $stmt->bindParam(':password', $password, PDO::PARAM_STR);
            $stmt->execute();

            // Initialise les variables de session pour l'utilisateur connecté
            $_SESSION['logged_in'] = true;
            $_SESSION['user'] = $username;
            $_SESSION['pseudo_utilisateur'] = $username;
            $_SESSION['id'] = $pdo->lastInsertId();
            $_SESSION['login_success'] = true;

            // Redirige l'utilisateur vers la page d'accueil
            header('Location: index.php');
            exit();
        } catch (PDOException $e) {
            // En cas d'erreur, affiche un message d'erreur
            $error = "Erreur : " . $e->getMessage();
        }
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <form action="register.php" method="post" class="bg-white p-6 rounded shadow-md w-full max-w-sm">
        <h2 class="text-2xl font-bold mb-4">Inscription</h2>
        <div class="mb-4">
            <label for="username" class="block text-gray-700">Nom d'utilisateur :</label>
            <input type="text" id="username" name="username" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>
        <div class="mb-4">
            <label for="password" class="block text-gray-700">Mot de passe :</label>
            <input type="password" id="password" name="password" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>
        <div class="mb-4">
            <label for="confirm_password" class="block text-gray-700">Confirmez le mot de passe :</label>
            <input type="password" id="confirm_password" name="confirm_password" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>
        <button type="submit" class="w-full bg-indigo-500 text-white py-2 px-4 rounded-md hover:bg-indigo-600">S'inscrire</button>
        <?php
        if (isset($error)) {
            echo '<p class="mt-4 text-red-500">' . $error . '</p>';
        }
        ?>
    </form>
</body>
</html>