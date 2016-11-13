CREATE TABLE UserTable
(
    Username VARCHAR,
    Password VARCHAR(100) NOT NULL,
    FirstName VARCHAR(50) NOT NULL,
    Surname VARCHAR(50) NOT NULL,
    AddressLine1 VARCHAR(50) NOT NULL,
    AddressLine2 VARCHAR(50),
    City VARCHAR(50),
    Telephone INT(30),
    Mobile INT(30),

    -- Constraints --
    CONSTRAINT Username_pk PRIMARY KEY(Username),
    CONSTRAINT Users_Telephone_Num_chk CHECK (ISNUMERIC(Telephone)),
    CONSTRAINT Users_Telephone_Size_chk CHECK (LEN(Telephone) = 10),
    CONSTRAINT Users_Mobile_Num_chk CHECK (ISNUMERIC(Mobile)),
    CONSTRAINT Users_Mobile_Size_chk CHECK (LEN(Mobile) = 10)
);



/* UserTable Details */
-- 1. --
INSERT INTO UserTable(Username,Password,FirstName,Surname,AddressLine1,AddressLine2,City,Telephone,Mobile)
VALUES('alanjmckenna','t1234s','Alan','McKenna','38 Carnley Road','Fairview','Dublin',9998377,856625567);

-- 2. --
INSERT INTO UserTable(Username,Password,FirstName,Surname,AddressLine1,AddressLine2,City,Telephone,Mobile)
VALUES('joecrotty','kj7899','Joseph','Crotty','Apt 5 Clyde Road','Donnybrook','Dublin',8887889,8767338782);

-- 3. --
INSERT INTO UserTable(Username,Password,FirstName,Surname,AddressLine1,AddressLine2,City,Telephone,Mobile)
VALUES('tommy100','123456','Tom','Behan','14 Hyde Road','Dalkey','Dublin',9983747,876738782);