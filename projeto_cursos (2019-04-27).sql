
SELECT *
FROM usuarios;

SELECT COUNT(*)
FROM usuarios;

SELECT COUNT(*)
FROM usuarios
WHERE tipo_usuario_fk = 3;

SELECT *
FROM cursos;

SELECT AVG(preco)
FROM cursos;

SELECT SUM(preco)
FROM cursos;

SELECT MIN(preco)
FROM cursos;

SELECT MIN(preco) AS minino, MAX(preco) AS maximo, AVG(preco) AS media, MAX(preco) AS maximo
FROM cursos;

SELECT COUNT(*)
FROM cursos;

SELECT MAX(preco)
FROM cursos;

SELECT COUNT(id_curso)
FROM cursos;

SELECT COUNT(id_curso) AS total
FROM cursos
WHERE professor_fk = 1;

SELECT tipo_usuario_fk, COUNT(*)
FROM usuarios
GROUP BY tipo_usuario_fk;

/* inner join */
SELECT u.nome AS usuario, t.nome AS tipo
FROM usuarios AS u INNER JOIN tipo_usuario AS t ON u.tipo_usuario_fk = t.id_tipo_usuario;

SELECT *
FROM cursos;
SELECT *
FROM usuarios;

/* inner join curso prof */
SELECT C.nome AS curso, U.nome AS professor
FROM cursos C INNER JOIN usuarios U ON C.professor_fk = U.id_usuario;

/* insert curso sem prof */
INSERT INTO cursos (nome, descricao, preco, tag, image)
VALUES ('Drinks Maneiros','Aprenda a fazer drinks sensacionais',3000,'drinks', 'happyhour.png');

SELECT cursos.nome AS curso, usuarios.nome AS professor
FROM cursos LEFT JOIN usuarios ON cursos.professor_fk = usuarios.id_usuario;

SELECT cursos.nome AS curso, usuarios.nome AS professor
FROM cursos RIGHT JOIN usuarios ON cursos.professor_fk = usuarios.id_usuario;


