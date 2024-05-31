<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil - Mon Site de Bandes Dessinées</title>
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
        <h2>Bienvenue sur mon site de bandes dessinées !</h2>
        <div>
            <h3>Naruto</h3>
            <p>Auteur: Masashi Kishimoto</p>
            <p>Prix: 9.99</p>
            <button onclick="ajouterAuPanier('Naruto')">Ajouter au panier</button>
        </div>
        <div>
            <h3>Hunter x Hunter</h3>
            <p>Auteur: Yoshihiro Togashi</p>
            <p>Prix: 9.99</p>
            <button onclick="ajouterAuPanier('Hunter x Hunter')">Ajouter au panier</button>
        </div>
        <div>
            <h3>Dragon Ball</h3>
            <p>Auteur: Akira Toriyama</p>
            <p>Prix: 9.99</p>
            <button onclick="ajouterAuPanier('Dragon Ball')">Ajouter au panier</button>
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>
