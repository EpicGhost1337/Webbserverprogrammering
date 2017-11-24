create table Registera(ID int(8)PRIMARY KEY AUTO_INCREMENT, Username varchar(32), Password varchar(32), Firstname varchar(32), Lastname varchar(32),Email varchar(32));

ALTER TABLE Registera ADD (skapad timestamp DEFAULT CURRENT_TIMESTAMP);

ALTER TABLE Registera ADD (year int(4), month int(2), day int(2));