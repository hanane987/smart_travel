CREATE DATABASE Travelsmart;

USE Travelsmart;


CREAT TABLE Ville(
villeID INT PRIMARY KEY,

VilleName VARCHAR(50)


);


CREAT TABLE Company (

companyID INT PRIMATY KEY ,
Img VARCHAR(50),
companyName VARCHAR(50),


);






CREATE TABLE Bus (
    BusID INT PRIMARY KEY,
    NumeroBus INT ,
    PlaqueImmatriculation VARCHAR(20) ,
    Entreprise VARCHAR(50) ,
    Capacite INT ,
companyID INT ,
FOREIGNE KEY (companyID) REFERENCES Company( companyID)


);


CREATE TABLE Route (
    RouteID INT PRIMARY KEY,
    VilleDepartID VARCHAR(50) ,
    VilleDestinationID VARCHAR(50) ,
    Distance FLOAT ,
    Duree TIME ,
    villeID INT,
     FOREIGN KEY (VilleDepartID) REFERENCES Ville (VilleID),
FOREIGN KEY (VilleDestinationID) REFERENCES Ville(VilleID),
CONSTRAINT CHEKER CHECK ( VilleDepartID != VilleDestinationID)

    
);


CREATE TABLE Horaire (
    HoraireID INT PRIMARY KEY,
    Date DATE ,
    HeureDepart TIME ,
    HeureArrivee TIME ,
    SiegesDisponibles INT ,
    BusID INT,
    RouteID INT,
    FOREIGN KEY (BusID) REFERENCES Bus(BusID),
    FOREIGN KEY (RouteID) REFERENCES Route(RouteID)
);