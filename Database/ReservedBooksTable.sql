CREATE TABLE ReservedBooksTable
(
    ISBN VARCHAR(50) NOT NULL,
    Username VARCHAR(50) NOT NULL,
    ReservedDate DATE NOT NULL,

    -- Constraints --
    CONSTRAINT  ISBN_pk PRIMARY KEY(ISBN)
    FOREIGN KEY(ISBN) REFERENCES BooksTable(ISBN),
	FOREIGN KEY (Username) REFERENCES UserTable(Username)
);

/* Reserved Books Table Details */
-- 1. --
INSERT INTO ReservedBooksTable(ISBN,Username,ReservedDate)
VALUES('98234-029384','joecrotty','11 OCT 2008');

-- 2. --
INSERT INTO ReservedBooksTable(ISBN,Username,ReservedDate)
VALUES('9823-98345','tommy100','11 OCT 2008');