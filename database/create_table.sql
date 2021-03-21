CREATE TABLE Product (
    ID INTEGER NOT NULL PRIMARY KEY,
    Name TEXT NOT NULL,
    Description Text,
    Price REAL DEFAULT 0.00,
    Picture TEXT DEFAULT "default.png"
);