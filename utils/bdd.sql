CREATE database pizzeria;
use pizzeria;

CREATE TABLE droit(
   id_droit int primary key not null,
   nom_droit VARCHAR(50)
);

CREATE TABLE ingredients(
   id_ing int primary key not null,
   nom_ing VARCHAR(50),
   prix_ing float
);

CREATE TABLE article(
   id_art int primary key not null,
   img_art VARCHAR(200),
   contenu_art TEXT,
   titre_art VARCHAR(50),
   date_art DATETIME,
   date_mod_art date
);

CREATE TABLE type(
   id_type int primary key not null,
   nom_type VARCHAR(50)
);

CREATE TABLE utilisateur(
   id_utilisateur int primary key not null,
   nom_util VARCHAR(50) not null,
   prenom_util VARCHAR(50) not null,
   adresse_util VARCHAR(100) not null,
   mail_util VARCHAR(100) not null,
   mdp_util VARCHAR(100) not null,
   tel_util VARCHAR(20) not null,
   id_droit int not null
);

CREATE TABLE produit(
   id_prod int primary key not null,
   nom_prod VARCHAR(50),
   desc_prod TEXT,
   img_prod VARCHAR(50),
   prix_prod float,
   id_type INT not null

);

CREATE TABLE commentaire(
   id_com int primary key not null,
   pseudo_comp VARCHAR(50) not null,
   texte_com TEXT not null,
   date_com date not null,
   id_utilisateur INT not null,
   id_art INT not null
);

CREATE TABLE reservation(
   id_res int primary key not null,
   nom_res VARCHAR(50),
   prenom_res VARCHAR(50),
   mail_res VARCHAR(50),
   tel_res VARCHAR(20),
   date_res DATETIME not null,
   nbr_couv_res float,
   id_utilisateur INT not null
);

CREATE TABLE composer(
   id_prod INT not null,
   id_ing INT not null,
   qtx float
);

CREATE TABLE commander(
   id_utilisateur INT not null,
   id_prod INT not null,
   qtx_cmd float,
   date_cmd DATETIME
);

-- table association composer 
alter table composer
add constraint fk_composer_produit
foreign key (id_prod)
references produit(id_prod);

alter table composer
add constraint fk_composer_ingredients
foreign key (id_ing)
references ingredients(id_ing);


-- table association commander 
alter table commander
add constraint fk_commander_utilisateur
foreign key (id_utilisateur)
references utilisateur(id_utilisateur);


alter table commander
add constraint fk_commander_produit
foreign key (id_prod)
references produit(id_prod);