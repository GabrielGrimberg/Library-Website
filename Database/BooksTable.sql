CREATE TABLE BookTable
(
    ISBN VARCHAR2(50),
    BookTitle VARCHAR2(50) NOT NULL,
    Author VARCHAR2(50) NOT NULL,
    Edition NUMBER(10) NOT NULL,
    Year NUMBER(10) NOT NULL,
    Category NUMBER(10),
    Reserved VARCHAR2(5),

    -- Constraints --
    CONSTRAINT Reserved_pk PRIMARY KEY(Reserved)
);

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