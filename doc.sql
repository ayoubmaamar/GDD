-- Table des étudiants
CREATE TABLE Student (
    ID_student INT PRIMARY KEY,
    nom VARCHAR(50),
    dernier_formation VARCHAR(50),
    date_nais DATE,
    prenom VARCHAR(50),
    adress VARCHAR(50),
    tele VARCHAR(20),
    ID_user_c INT,
    ID_identity_student INT,
    ID_langue INT,
    ID_tuteur INT,
    ID_school_level INT,
    ID_list_documents INT,
    FOREIGN KEY (ID_user_c) REFERENCES User_c (ID_user_c),
    FOREIGN KEY (ID_identity_student) REFERENCES Identity_student (ID_identity_student),
    FOREIGN KEY (ID_langue) REFERENCES Langue (ID_langue),
    FOREIGN KEY (ID_tuteur) REFERENCES Tuteur (ID_tuteur),
    FOREIGN KEY (ID_school_level) REFERENCES School_level (ID_school_level),
    FOREIGN KEY (ID_list_documents) REFERENCES List_documents (ID_list_documents)
);

-- Table des utilisateurs (remarque c est avec itentification google on vas pas ajouter cette table)
CREATE TABLE User_c (
    ID_user_c INT PRIMARY KEY,
    ID_type_user INT,
    ID_google VARCHAR(50),
    email VARCHAR(50),
    FOREIGN KEY (ID_type_user) REFERENCES Type_user (ID_type_user)
);

-- Table des types d'utilisateurs
CREATE TABLE Type_user (
    ID_type_user INT PRIMARY KEY,
    type_user VARCHAR(50)
);

-- Table de l'identité de l'étudiant
CREATE TABLE Identity_student (
    ID_identity_student INT PRIMARY KEY,
    identity_student VARCHAR(50)
);

-- Table des langues
CREATE TABLE Langue (
    ID_langue INT PRIMARY KEY,
    langue VARCHAR(50)
);

-- Table des tuteurs
CREATE TABLE Tuteur (
    ID_tuteur INT PRIMARY KEY,
    lien_familial VARCHAR(50),
    Nom VARCHAR(50),
    Prenom VARCHAR(50),
    adress VARCHAR(50),
    email VARCHAR(50)
);

-- Table des niveaux d'école
CREATE TABLE School_level (
    ID_school_level INT PRIMARY KEY,
    school_level VARCHAR(50)
);

--Table des listes de documents
CREATE TABLE List_documents (
    ID_list_documents INT PRIMARY KEY,
    Nom VARCHAR(50),
    path_file VARCHAR(50)
);

-- Table des services
CREATE TABLE Service (
    ID_service INT PRIMARY KEY,
    Nom_service VARCHAR(50),
    Description VARCHAR(50),
    prix DECIMAL(10, 2)
);

-- Table des packs
CREATE TABLE Pack (
    ID_Pack INT PRIMARY KEY,
    nom VARCHAR(50),
    Description VARCHAR(50)
);

-- Table de liaison entre Pack et Service
CREATE TABLE Pack_Service (
    ID_Pack_Service INT PRIMARY KEY,
    ID_Pack INT,
    ID_service INT,
    FOREIGN KEY (ID_Pack) REFERENCES Pack (ID_Pack),
    FOREIGN KEY (ID_service) REFERENCES Service (ID_service)
);
