CREATE TABLE Manga (
  id INT PRIMARY KEY,
  titre VARCHAR(255),
  auteur_id INT,
  serie_id INT,
  prix DECIMAL(10,2),
  description TEXT,
  date_publication DATE
);


CREATE TABLE Auteur (
  id INT PRIMARY KEY,
  nom VARCHAR(255),
  pays VARCHAR(255)
);

CREATE TABLE Serie (
  id INT PRIMARY KEY,
  nom VARCHAR(255),
  annee_debut INT,
  annee_fin INT
);


ALTER TABLE Manga
ADD CONSTRAINT FK_Manga_Auteur FOREIGN KEY (auteur_id)
REFERENCES Auteur (id);

ALTER TABLE Manga
ADD CONSTRAINT FK_Manga_Serie FOREIGN KEY (serie_id)
REFERENCES Serie (id);

CREATE TABLE Etudiant (
    EtudiantID INT PRIMARY KEY,
    Nom VARCHAR(50),
    DA VARCHAR(50),
    Prenom VARCHAR(50)
);
CREATE TABLE panier (
    id INT PRIMARY KEY,
    produit_id INT,
    quantite INT,
    utilisateur_id INT,
    date_ajout TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO PANIER (ID, PRODUIT_ID, UTILISATEUR_ID) VALUES (1, 'Naruto', 1);
INSERT INTO PANIER (ID, PRODUIT_ID, UTILISATEUR_ID) VALUES (2, 'HxH', 1);
INSERT INTO PANIER (ID, PRODUIT_ID, UTILISATEUR_ID) VALUES (3, 'Dragon Ball', 1);

