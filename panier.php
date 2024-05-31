<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start(); // Démarrer la session seulement si elle n'est pas déjà démarrée
}

// Vérifier si le panier existe, sinon le créer
if (!isset($_SESSION['panier'])) {
    $_SESSION['panier'] = array();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Panier - Mon Site de Bandes Dessinées</title>
    <link rel="stylesheet" href="styles.css">
    <script src="scripts.js"></script>
</head>
<body>
    <header>
        <h1>Mon Site de Bandes Dessinées</h1>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="series.php">Séries</a></li>
                <li><a href="auteurs.php">Auteurs</a></li>
                <li><a href="panier.php">Panier</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Votre Panier</h2>
        <?php
        // Afficher le contenu du panier
        if (!empty($_SESSION['panier'])) {
            echo '<table>';
            echo '<tr><th>Produit</th><th>Quantité</th></tr>';
            foreach ($_SESSION['panier'] as $produit => $quantite) {
                echo '<tr>';
                echo '<td>' . htmlspecialchars($produit) . '</td>';
                echo '<td>' . htmlspecialchars($quantite) . '</td>';
                echo '</tr>';
            }
            echo '</table>';
        } else {
            echo '<p>Votre panier est vide.</p>';
        }
        ?>
    </main>
    <footer>
    </footer>
</body>
</html>
