// Tableau pour stocker les produits du panier
let panier = [];

// Fonction pour ajouter un produit au panier
function ajouterAuPanier(produit) {
    panier.push(produit);
    alert(produit + " a été ajouté au panier !");
    afficherPanier();
}

// Fonction pour afficher les produits dans le panier
function afficherPanier() {
    let articlesPanier = document.getElementById("articlesPanier");
    articlesPanier.innerHTML = ""; // Efface le contenu précédent

    if (panier.length === 0) {
        articlesPanier.innerHTML = "<p>Aucun produit dans le panier pour le moment.</p>";
    } else {
        let ul = document.createElement("ul");

        for (let i = 0; i < panier.length; i++) {
            let li = document.createElement("li");
            li.textContent = panier[i];
            ul.appendChild(li);
        }

        articlesPanier.appendChild(ul);
    }
    
}



afficherPanier();
