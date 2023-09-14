CREATE TABLE notes (
    id int NOT NULL AUTO_INCREMENT,
    uuid varchar(100) NOT NULL UNIQUE,
    title varchar(100) NOT NULL,
    content text NOT NULL,
    updated date NOT NULL,
    PRIMARY KEY (id)
);