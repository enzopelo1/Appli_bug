<header class="bg-white shadow">
    <div class="container mx-auto px-4 py-6 flex justify-between items-center">
        <!-- Titre du site avec un lien vers la page d'accueil -->
        <h1 class="text-2xl font-bold text-gray-800">
            <a href="https://www.jrcan.dev/accueil/accueil.php" class="text-gray-800 hover:text-gray-600">Mini Site</a>
        </h1>
        <!-- Navigation -->
        <nav>
            <ul class="flex space-x-4">
                <!-- Lien vers la page d'accueil -->
                <li><a href="index.php" class="text-gray-600 hover:text-gray-800">Home</a></li>
                <!-- Affiche "Déconnexion" si l'utilisateur est connecté, sinon affiche "Connexion" -->
                <?php if (isset($_SESSION['pseudo_utilisateur'])): ?>
                    <li><a href="confirm_logout.php" class="text-gray-600 hover:text-gray-800">Déconnexion</a></li>
                <?php else: ?>
                    <li><a href="login.php" class="text-gray-600 hover:text-gray-800">Connexion</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</header>