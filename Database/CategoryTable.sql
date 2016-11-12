CREATE TABLE CategoryTable
(
    CategoryID NUMBER(6) NOT NULL,
    CategoryDescription VARCHAR2(50) NOT NULL,

    -- Constraints --
    CONSTRAINT  CategoryID_pk PRIMARY KEY(CategoryID)
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

