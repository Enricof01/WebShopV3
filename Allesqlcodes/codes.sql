CREATE TABLE `allgemeines`.`logs` 
(`logid` INT NOT NULL AUTO_INCREMENT , 
`datum` DATE NOT NULL , 
`uhrzeit` TIME NOT NULL , 
`auflösung` VARCHAR(20) NOT NULL , 
`betriebssystem` VARCHAR(100) NOT NULL , PRIMARY KEY (`logid`)) ENGINE = InnoDB;

CREATE TABLE `allgemeines`.`kunde` (
`kundenid` INT NOT NULL AUTO_INCREMENT , 
`email` VARCHAR(255) NOT NULL , 
`vorname` VARCHAR(100) NOT NULL , 
`nachname` VARCHAR(100) NOT NULL , 
`passworthash` VARCHAR(128) NOT NULL , 
`google2fa_secret` VARCHAR(64) NOT NULL , 
`registriertam` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`kundenid`)) ENGINE = InnoDB;

CREATE TABLE `allgemeines`.`punkte` (
    `punkteid` INT NOT NULL AUTO_INCREMENT , 
    `kundenid` INT NULL DEFAULT NULL , 
    `punktezahl` INT NOT NULL DEFAULT '0' , 
    `letzteaenderung` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`punkteid`)) ENGINE = InnoDB;


    CREATE TABLE Produkte (
    ProduktID      INT PRIMARY KEY AUTO_INCREMENT,
    Produktname    VARCHAR(255) NOT NULL,
    Beschreibung   TEXT,
    Preis          DECIMAL(10, 2),
    Lagerbestand   INT DEFAULT 0
);

-- 5. Warenkorbkopf
CREATE TABLE WarenkorbKopf (
    WarenkorbID    INT PRIMARY KEY AUTO_INCREMENT,
    KundenID       INT,
    Erstellungsdatum DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (KundenID) REFERENCES Kunden(KundenID)
);

-- 6. Warenkorbposition
CREATE TABLE WarenkorbPosition (
    PositionID     INT PRIMARY KEY AUTO_INCREMENT,
    WarenkorbID    INT,
    ProduktID      INT,
    Menge          INT DEFAULT 1,
    FOREIGN KEY (WarenkorbID) REFERENCES WarenkorbKopf(WarenkorbID),
    FOREIGN KEY (ProduktID) REFERENCES Produkte(ProduktID)
);

-- 7. Bestellkopf
CREATE TABLE BestellKopf (
    BestellungID   INT PRIMARY KEY AUTO_INCREMENT,
    KundenID       INT,
    Bestelldatum   DATETIME DEFAULT CURRENT_TIMESTAMP,
    Status         VARCHAR(50),
    Gesamtbetrag   DECIMAL(10, 2),
    FOREIGN KEY (KundenID) REFERENCES Kunden(KundenID)
);

-- 8. Bestellpositionen
CREATE TABLE BestellPosition (
    BestellPosID   INT PRIMARY KEY AUTO_INCREMENT,
    BestellungID   INT,
    ProduktID      INT,
    Menge          INT,
    Einzelpreis    DECIMAL(10, 2),
    FOREIGN KEY (BestellungID) REFERENCES BestellKopf(BestellungID),
    FOREIGN KEY (ProduktID) REFERENCES Produkte(ProduktID)
);

-- 9. Rechnungskopf
CREATE TABLE RechnungKopf (
    RechnungID     INT PRIMARY KEY AUTO_INCREMENT,
    BestellungID   INT,
    Rechnungsdatum DATETIME DEFAULT CURRENT_TIMESTAMP,
    Gesamtbetrag   DECIMAL(10, 2),
    FOREIGN KEY (BestellungID) REFERENCES BestellKopf(BestellungID)
);

-- 10. Rechnungspositionen
CREATE TABLE RechnungsPosition (
    RechnungsPosID INT PRIMARY KEY AUTO_INCREMENT,
    RechnungID     INT,
    ProduktID      INT,
    Menge          INT,
    Einzelpreis    DECIMAL(10, 2),
    FOREIGN KEY (RechnungID) REFERENCES RechnungKopf(RechnungID),
    FOREIGN KEY (ProduktID) REFERENCES Produkte(ProduktID)
);