<header class="bg-white shadow">
        <div class="container mx-auto px-4 py-6 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-gray-800">Mini Site</h1>
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="index.php" class="text-gray-600 hover:text-gray-800">Home</a></li>
                    <?php if (isset($_SESSION['user'])): ?>
                        <li><a href="logout.php" class="text-gray-600 hover:text-gray-800">Déconnexion</a></li>
                    <?php else: ?>
                        <li><a href="login.php" class="text-gray-600 hover:text-gray-800">Connexion</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </header>