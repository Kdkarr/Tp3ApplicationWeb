<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start(); // Démarrer la session seulement si elle n'est pas déjà démarrée
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $produit = $_POST['produit'];
    $quantite = $_POST['quantite'];

    if (!isset($_SESSION['panier'])) {
        $_SESSION['panier'] = [];
    }

    if (isset($_SESSION['panier'][$produit])) {
        $_SESSION['panier'][$produit] += $quantite;
    } else {
        $_SESSION['panier'][$produit] = $quantite;
    }

    echo "L'article $produit a été ajouté au panier avec succès !";
}
?>
