CREATE TABLE UserTable
(
    Username VARCHAR2,
    Password VARCHAR2(50) NOT NULL,
    FirstName VARCHAR2(50) NOT NULL,
    Surname VARCHAR2(50) NOT NULL,
    AddressLine1 VARCHAR2(50) NOT NULL,
    AddressLine2 VARCHAR2(50),
    City VARCHAR2(50),
    Telephone NUMBER(11),
    Mobile NUMBER(11),

    -- Constraints --
    CONSTRAINT Username_pk PRIMARY KEY(Username)
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