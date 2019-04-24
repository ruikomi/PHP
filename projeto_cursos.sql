CREATE DATABASE projeto_cursos;

CREATE TABLE usuarios (
	id_usuario INT NOT NULL PRIMARY KEY UNIQUE auto_increment,
    nome VARCHAR(65) NOT NULL,
    email VARCHAR(65) NOT NULL UNIQUE,
    senha VARCHAR(65) NOT NULL,
    cpf INT,
    foto VARCHAR(65),
    tipo_usuario INT
);

CREATE TABLE tipo_usuario (
	id_tipo_usuario INT NOT NULL PRIMARY KEY UNIQUE AUTO_INCREMENT,
    nome VARCHAR(65) NOT NULL
);

CREATE TABLE cursos (
	id_curso INT NOT NULL PRIMARY KEY UNIQUE AUTO_INCREMENT,
    nome VARCHAR(65) NOT NULL,
    descricao VARCHAR(1000),
	preco FLOAT DEFAULT 0.0,
    tag VARCHAR(65),
    image VARCHAR(1000),
    professor INT
);

CREATE TABLE professor (
	id_professor INT NOT NULL PRIMARY KEY UNIQUE AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL
);

/******************************/
/*** RENOMEIA NOME DO CAMPO ***/
/******************************/
ALTER TABLE usuarios
CHANGE tipo_usuario tipo_usuario_fk INT;

ALTER TABLE cursos
CHANGE professor professor_fk INT;

/*******************/
/*** Adiciona FK ***/
/*******************/
ALTER TABLE usuarios
ADD FOREIGN KEY (tipo_usuario_fk) REFERENCES tipo_usuario(id_tipo_usuario);

ALTER TABLE cursos
ADD FOREIGN KEY (professor_fk) REFERENCES professor(id_professor);


