CREATE DATABASE pizzeria;
USE pizzeria;

CREATE TABLE droit(
	id_droit INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	nom_droit VARCHAR(50)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE ingredient(
	id_ing INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	nom_ing VARCHAR(50),
	prix_ing FLOAT
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE article(
	id_art INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	titre_art VARCHAR(50),
	contenu_art TEXT,
	img_art_1 VARCHAR(255) NULL,
	img_art_2 VARCHAR(255) NULL,
	img_art_3 VARCHAR(255) NULL,
	date_art DATETIME,
	date_mod_art DATETIME NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE type(
	id_type INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	nom_type VARCHAR(50)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE utilisateur(
   id_util INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
   nom_util VARCHAR(50),
   prenom_util VARCHAR(50),
   adresse_util VARCHAR(255),
   mail_util VARCHAR(100),
   mdp_util VARCHAR(100),
   tel_util VARCHAR(20) NULL,
   activ_util BOOLEAN DEFAULT 1, -- 1 = compte actif et 0 = compte non actif (résilier/ supprimer)
   id_droit INT DEFAULT 2
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE produit(
	id_prod INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	nom_prod VARCHAR(50),
	desc_prod TEXT,
    prix_prod FLOAT,
	img_prod VARCHAR(255) NULL,
	id_type INT
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE commentaire(
   id_com INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
   pseudo_com VARCHAR(50),
   texte_com TEXT,
   date_com DATETIME,
   id_util INT NULL,
   id_art INT
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE reservation(
   id_res INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
   nom_res VARCHAR(50),
   mail_res VARCHAR(255),
   tel_res VARCHAR(20),
   date_res DATETIME,
   nbr_couv_res INT,
   id_util INT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE commande(
   id_cmd INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
   date_cmd DATETIME,
   livraison BOOLEAN, -- 1 si le client choisi l'option livraison et 0 sinon
   id_util INT
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE composer(
   id_prod INT,
   id_ing INT,
   qtx FLOAT,
   PRIMARY KEY(id_prod, id_ing)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE concerner(
   id_cmd INT,
   id_prod INT,
   qtx_prod FLOAT,
   taille_prod VARCHAR(50) NULL,
   PRIMARY KEY(id_cmd, id_prod)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Ajout des containtes de cle étrangères --
-- table reservation
ALTER TABLE reservation
ADD CONSTRAINT fk_reserver_utilisateur
FOREIGN KEY(id_util)
REFERENCES utilisateur(id_util);

-- table utilisateur
ALTER TABLE utilisateur
ADD CONSTRAINT fk_avoir_droit
FOREIGN KEY(id_droit)
REFERENCES droit(id_droit);

-- table commande
ALTER TABLE commande
ADD CONSTRAINT fk_passer_utilisateur
FOREIGN KEY(id_util)
REFERENCES utilisateur(id_util);

-- table produit
ALTER TABLE produit
ADD CONSTRAINT fk_etre_type
FOREIGN KEY(id_type)
REFERENCES type(id_type);

-- table commentaire
ALTER TABLE commentaire
ADD CONSTRAINT fk_rediger_utilisateur
FOREIGN KEY(id_util)
REFERENCES utilisateur(id_util);

ALTER TABLE commentaire
ADD CONSTRAINT fk_publier_article
FOREIGN KEY(id_art)
REFERENCES article(id_art);

-- table association composer 
ALTER TABLE composer
ADD CONSTRAINT fk_composer_produit
FOREIGN KEY(id_prod)
REFERENCES produit(id_prod);

ALTER TABLE composer
ADD CONSTRAINT fk_composer_ingredient
FOREIGN KEY(id_ing)
REFERENCES ingredient(id_ing);

-- table association concerner 
ALTER TABLE concerner
ADD CONSTRAINT fk_concerner_commande
FOREIGN KEY(id_cmd)
REFERENCES commande(id_cmd);

ALTER TABLE concerner
ADD CONSTRAINT fk_concerner_produit
FOREIGN KEY(id_prod)
REFERENCES produit(id_prod);

-- Ajout des droits
INSERT INTO droit(nom_droit) VALUES 
("Admin"),
("Utilisateur");

-- Ajout de deux utilisateurs
INSERT INTO utilisateur(nom_util, prenom_util, adresse_util, mail_util, mdp_util, tel_util, id_droit) VALUES
("Jeff", "Pizza", "232 bis Route de Castres 31500 Toulouse", "jeff@mail.com", "$2y$10$jTdzdHStPdZ.MEJGkCjbquyWnr5rUknAiMlgooRETIUh4.5G9FRqm", "0606060606", 1), -- mdp = 251020
("Toto", "Toto", "25 Rue de machin 31000 Toulouse", "toto@mail.com", "$2y$10$jTdzdHStPdZ.MEJGkCjbquyWnr5rUknAiMlgooRETIUh4.5G9FRqm", "0101010101", 2); -- mdp = 251020

INSERT INTO type(nom_type) VALUES
("Pizzas"),
("Entrees"),
("Sauces"),
("Desserts"),
("Boissons"),
("Menus");

