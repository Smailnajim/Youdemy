CREATE TABLE Role(
  id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  name varchar(100) NOT NULL;
);

CREATE TABLE Enseignant (
  id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  FirstName varchar(100) NOT NULL,
  LastName varchar(100) NOT NULL,
  id_role int NOT NULL,
  Foreign Key (id_role) REFERENCES Role(id)
);

CREATE TABLE Etudiant (
  id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  FirstName varchar(100) NOT NULL,
  LastName varchar(100) NOT NULL,
  id_role int NOT NULL,
  Foreign Key (id_role) REFERENCES Role(id)
);

CREATE TABLE Categorie(
  id int PRIMARY KEY not null AUTO_INCREMENT,
  name varchar(100) NOT NULL
);

CREATE TABLE Cours(
  id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  titre varchar(100) NOT NULL,
  description varchar(255) NOT NULL,
  video varchar(255) NOT NULL,
  document varchar(255) NOT NULL,
  id_enseignant int NOT NULL,
  id_Categorie int NOT NULL,
  Foreign KEY (id_enseignant) REFERENCES Enseignant(id),
  Foreign key (id_Categorie) REFERENCES Categorie(id)
);

CREATE TABLE Cours_Etudiant(
  id_etudiant int NOT NULL,
  id_cours int NOT NULL,
  Foreign Key (id_cours) REFERENCES Cours(id),
  Foreign Key (id_etudiant) REFERENCES Etudiant(id)
);

CREATE TABLE Tag(
  id int PRIMARY KEY not null AUTO_INCREMENT,
  name varchar(100) NOT NULL
);

CREATE TABLE Cours_Tag(
  id_tag int NOT NULL,
  id_cours int NOT NULL,
  Foreign Key (id_cours) REFERENCES Cours(id),
  Foreign Key (id_tag) REFERENCES Tag(id)
);
