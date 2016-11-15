/* Creating Tables */

CREATE TABLE CategoryTable
(
	CategoryID INT  PRIMARY KEY,
	CategoryDescription VARCHAR(20)
);

CREATE TABLE UsersTable
(
  Username VARCHAR(20) PRIMARY KEY,
  Password VARCHAR(100) NOT NULL,
  FirstName VARCHAR(20) NOT NULL,
  Surname VARCHAR(20) NOT NULL,
  AddressLine1 VARCHAR(50) NOT NULL,
  AddressLine2 VARCHAR(50) NOT NULL,
  City VARCHAR(20) NOT NULL,
  Telephone VARCHAR(20) NOT NULL,
  Mobile VARCHAR(20) NOT NULL,
  
  CONSTRAINT Users_Telephone_Num_chk CHECK ( ISNUMERIC(Telephone)),
  CONSTRAINT Users_Telephone_Len_chk CHECK ( LEN(Telephone) = 10),
  CONSTRAINT Users_Mobile_Num_chk CHECK ( ISNUMERIC(Mobile)),
  CONSTRAINT Users_Mobile_Len_chk CHECK (LEN (Mobile) = 10)
);

CREATE TABLE BookTable
(
	ISBN VARCHAR(20) PRIMARY KEY,
	BookTitle VARCHAR(50) NOT NULL,
	Author VARCHAR(40) NOT NULL,
	Edition INT,
	Year INT,
	Category INT,
	Reserved BOOLEAN,
	
	FOREIGN KEY (Category) REFERENCES CategoryTable(CategoryID)
);


CREATE TABLE BookReserve
(
	ISBN VARCHAR(20),
	Username VARCHAR(20),
	ReservedDate DATE,
	
	PRIMARY KEY (ISBN, Username),
	FOREIGN KEY(ISBN) REFERENCES BookTable(ISBN),
	FOREIGN KEY (Username) REFERENCES UsersTable(Username)
);

/* Category Table Details */
-- 1. --
INSERT INTO CategoryTable(CategoryID,CategoryDescription)
VALUES(001,'Health');

-- 2. --
INSERT INTO CategoryTable(CategoryID,CategoryDescription)
VALUES(002,'Business');

-- 3. --
INSERT INTO CategoryTable(CategoryID,CategoryDescription)
VALUES(003,'Biography');

-- 4. --
INSERT INTO CategoryTable(CategoryID,CategoryDescription)
VALUES(004,'Technology');

-- 5. --
INSERT INTO CategoryTable(CategoryID,CategoryDescription)
VALUES(005,'Travel');

-- 6. --
INSERT INTO CategoryTable(CategoryID,CategoryDescription)
VALUES(006,'Self-Help');

-- 7. --
INSERT INTO CategoryTable(CategoryID,CategoryDescription)
VALUES(007,'Cookery');

-- 8. --
INSERT INTO CategoryTable(CategoryID,CategoryDescription)
VALUES(008,'Fiction');

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


/* Book Table Details */
-- 1. --
INSERT INTO BookTable(ISBN,BookTitle,Author,Edition,Year,Category,Reserved)
VALUES('093-403992','Computers in Business','Alicia Oneill',3,1997,003,'N');

-- 2. --
INSERT INTO BookTable(ISBN,BookTitle,Author,Edition,Year,Category,Reserved)
VALUES('23472-8792','Exploring Peru','Stephanie Birchi',4,2005,005,'N');

-- 3. --
INSERT INTO BookTable(ISBN,BookTitle,Author,Edition,Year,Category,Reserved)
VALUES('237-34823','Business Strategy','Joe Peppard',2,2002,002,'N');

-- 4. --
INSERT INTO BookTable(ISBN,BookTitle,Author,Edition,Year,Category,Reserved)
VALUES('23u8-923849','A Guide to Nutrition','John Thorpe',2,1997,001,'N');

-- 5. --
INSERT INTO BookTable(ISBN,BookTitle,Author,Edition,Year,Category,Reserved)
VALUES('2983-3494','Cooking For Children','Anabelle Sharper',1,2003,007,'N');

-- 6. --
INSERT INTO BookTable(ISBN,BookTitle,Author,Edition,Year,Category,Reserved)
VALUES('82n8-308','Computers for Idiots','Susan Oneill',5,1998,004,'N');

-- 7. --
INSERT INTO BookTable(ISBN,BookTitle,Author,Edition,Year,Category,Reserved)
VALUES('9823-23984','My Life in Picture','Kevin Graham',8,2004,001,'N');

-- 8. --
INSERT INTO BookTable(ISBN,BookTitle,Author,Edition,Year,Category,Reserved)
VALUES('9823-2403-0','DaVinci Code','Dan Brown',1,2003,008,'N');

-- 9. --
INSERT INTO BookTable(ISBN,BookTitle,Author,Edition,Year,Category,Reserved)
VALUES('98234-029384','My Ranch in Texas','George Bush',1,2005,001,'Y');

-- 10. --
INSERT INTO BookTable(ISBN,BookTitle,Author,Edition,Year,Category,Reserved)
VALUES('9823-98345','How to Cook Italian Food','Jamie Oliver',2,2005,007,'Y');

-- 11. --
INSERT INTO BookTable(ISBN,BookTitle,Author,Edition,Year,Category,Reserved)
VALUES('9823-98487','Optimising Your Business','Cleo Blair',1,2001,002,'N');

-- 12. --
INSERT INTO BookTable(ISBN,BookTitle,Author,Edition,Year,Category,Reserved)
VALUES('988745-234','Tara Road','Maeve Binchy',4,2002,008,'N');

-- 13. --
INSERT INTO BookTable(ISBN,BookTitle,Author,Edition,Year,Category,Reserved)
VALUES('993-004-00','My Life in Bits','John Smith',1,2001,001,'N');

-- 14. --
INSERT INTO BookTable(ISBN,BookTitle,Author,Edition,Year,Category,Reserved)
VALUES('9987-0039882','Shooting History','Jon Snow',1,2003,001,'N');

/* Reserved Books Table Details */
-- 1. --
INSERT INTO BookReserve(ISBN,Username,ReservedDate)
VALUES('98234-029384','joecrotty','11 OCT 2008');

-- 2. --
INSERT INTO BookReserve(ISBN,Username,ReservedDate)
VALUES('9823-98345','tommy100','11 OCT 2008');
