INSERT INTO Client (Nom, Prenom,Identifiant,Mdp) VALUES ("Guily", "Thomas","ThomasG","mydatabaseisfat");
INSERT INTO Client (Nom, Prenom,Identifiant,Mdp) VALUES ("Delehouzée", "Mathis","MathisD","mydatabaseisfat");
INSERT INTO Client (Nom, Prenom,Identifiant,Mdp) VALUES ("Magaña Lopez", "Gustavo","GustavoM","mydatabaseisfat");
INSERT INTO Client (Nom, Prenom,Identifiant,Mdp) VALUES ("Duboquet", "Florent","FlorentD","mydatabaseisfat");

INSERT INTO Commande (ID_client,commentaire) VALUES (1,"j'ai hate de recevoir ce lait !");
INSERT INTO Commande (ID_client,commentaire) VALUES (1,"deuxième commande réalisée jus de fruits!");
INSERT INTO Commande (ID_client,commentaire) VALUES (3,"commande tomates");

INSERT INTO Commentaire (ID_client,Note,Texte) VALUES (1,5,"très beau site !");
INSERT INTO Commentaire (ID_client,Note,Texte) VALUES (3,5,"Magnifique base de donnée !");

INSERT INTO Marchand (Nom,Prenom,Specialite,Email,gsm,Enseigne,Image_Marchand) VALUES ("Planet","Bio","Aliments Biologiques","info@bio-planet.be","065842909","Bio-Planet",1);
INSERT INTO Marchand (Nom,Prenom,Specialite,Email,gsm,Enseigne,Image_Marchand) VALUES ("Sain","Copro","Comptoir Fermier","info@coprosain.be","065346650","Comptoir Fermier-Coprosain",2);
INSERT INTO Marchand (Nom,Prenom,Specialite,Email,gsm,Enseigne,Image_Marchand) VALUES ("Huchette","La","Produits et Conseils","infos@huchette.be","065315210","La Huchette",3);
INSERT INTO Marchand (Nom,Prenom,Specialite,Email,gsm,Enseigne,Image_Marchand) VALUES ("Comptoir","BB","Comptoir zéro déchet","lebbcomptoir@gmail.com","065842909","BB Comptoir",4);

INSERT INTO Type_Produit (Conseils,Peremption,Allergenes,Nom_typeproduit,Image_Type) VALUES ("A manger avant date de peremption","1 - 2 semaines","!Allergie viande rouge","Viandes/Poissons/Oeufs",1);
INSERT INTO Type_Produit (Conseils,Peremption,Allergenes,Nom_typeproduit,Image_Type) VALUES ("A manger avant date de peremption","1 semaine","!Multiples allergies","Fruits et Legumes",2);
INSERT INTO Type_Produit (Conseils,Peremption,Allergenes,Nom_typeproduit,Image_Type) VALUES ("A manger avant date de peremption","1 mois","!lactoses","Produits Laitiers",3);
INSERT INTO Type_Produit (Conseils,Peremption,Allergenes,Nom_typeproduit,Image_Type) VALUES ("A manger avant date de peremption","6 - 12 mois","!céréales","Céréales",4);
INSERT INTO Type_Produit (Conseils,Peremption,Allergenes,Nom_typeproduit,Image_Type) VALUES ("A manger avant date de peremption","6 - 12 mois","!glucose","Boissons",5);


INSERT INTO Produit (ID_marchand,ID_typeproduit,Prix,Stock,Nom_produit,Image_Produit) VALUES (1,1,1.5,2000,"Saucisse 100g",1);
INSERT INTO Produit (ID_marchand,ID_typeproduit,Prix,Stock,Nom_produit,Image_Produit) VALUES (3,5,2,1000,"Jus de fruit 1L",2);
INSERT INTO Produit (ID_marchand,ID_typeproduit,Prix,Stock,Nom_produit,Image_Produit) VALUES (2,3,1,500,"Lait 1L",3);
INSERT INTO Produit (ID_marchand,ID_typeproduit,Prix,Stock,Nom_produit,Image_Produit) VALUES (4,4,1.5,1500,"Boite Céréales 500g",4);
INSERT INTO Produit (ID_marchand,ID_typeproduit,Prix,Stock,Nom_produit,Image_Produit) VALUES (1,2,3,2500,"Bannanes Wallones 500g",5);
INSERT INTO Produit (ID_marchand,ID_typeproduit,Prix,Stock,Nom_produit,Image_Produit) VALUES (1,2,2.5,3400,"Tomates 500g",6);

INSERT INTO Detail_Commande (ID_produit,ID_commande,Quantite) VALUES (3,1,10);
INSERT INTO Detail_Commande (ID_produit,ID_commande,Quantite) VALUES (2,2,6);
INSERT INTO Detail_Commande (ID_produit,ID_commande,Quantite) VALUES (6,3,5);
