CREATE TABLE Utilisateur(
    id              INT NOT NULL,
    mail            VARCHAR(50),
    mdp             VARCHAR(25),
    nom             VARCHAR(20),
    prenom          VARCHAR(20),
    profil          INT NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE Profil(
    id              INT NOT NULL,
    intitule        VARCHAR(20),
    PRIMARY KEY (id)
);

ALTER TABLE Utilisateur 
ADD CONSTRAINT FK_Utilisateur FOREIGN KEY (profil) REFERENCES Profil (id);

INSERT INTO Profil VALUES (0, 'Administrateur');
INSERT INTO Utilisateur VALUES (0, 'f.l@gmail.com', 'lalanne', 'Lalanne', 'Francis', 0);