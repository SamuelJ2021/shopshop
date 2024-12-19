<!DOCTYPE html>
<?php 
// index.php
session_start();

// Si l'utilisateur est connecté, on récupère son identité via la session.
$identity = null;
if (isset($_SESSION['identity'])) {
    $identity = $_SESSION['identity'];
}
?>


<html>
    <head>
        <title>Page d'accueil</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <h1>Page d'accueil</h1>
        <?php if ($identity==null): ?>
        <a href="../../config/connexion.php">Connexion</a>
        <?php else: ?>
        <strong>Bienvenue, <?= $identity ?></strong> <a href="logout.php">Déconnexion</a>
        <?php endif; ?>
        
        <p>
            Ceci est un simple site web pour démontrer les avantages d'un framework PHP et les inconvénients du PHP "pur".
        </p>
    </body>
</html>