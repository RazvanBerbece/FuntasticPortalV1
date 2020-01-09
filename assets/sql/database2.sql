CREATE TABLE Contenders(
ID serial PRIMARY KEY,
Name varchar(255) NOT NULL,
Song varchar(255) NOT NULL,
Artist varchar(255) NOT NULL,
Other varchar(255) NOT NULL,
Score varchar(255) DEFAULT '_______'
);