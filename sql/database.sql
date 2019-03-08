CREATE DATABASE sistema;

USE sistema;

CREATE TABLE usuarios(
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    senha VARCHAR(32) NOT NULL,
    PRIMARY KEY(email)
) DEFAULT CHARSET = utf8;
