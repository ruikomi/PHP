

INSERT INTO tipo_usuario (nome)
VALUES ('admin');

INSERT INTO tipo_usuario (nome)
VALUES ('professor'), ('aluno');

SELECT * FROM tipo_usuario;

ALTER TABLE usuarios
CHANGE cpf cpf BIGINT; /* ALTERA TIPO DO CAMPO */

INSERT INTO usuarios (nome, email, senha, cpf, foto, tipo_usuario_fk)
VALUES ('Hendy', 'hendy@email.com', '123', 12345678901, 'foto.png', 2);

INSERT INTO usuarios (nome, email, senha, cpf, foto, tipo_usuario_fk)
VALUES ('Hendylane', 'hendylane@email.com', '123', 10987654321, 'fotolane.png', 1);

INSERT INTO usuarios (nome, email, senha, cpf, foto, tipo_usuario_fk)
VALUES ('Endylene', 'endylene@email.com', '123', 11223344556, 'endylene.png', 1);

INSERT INTO usuarios (nome, email, senha, cpf, foto, tipo_usuario_fk)
VALUES ('Dylene', 'dylene@email.com', '123', 67788990011, 'dylene.png', 1);

INSERT INTO usuarios (nome, email, senha, cpf, foto, tipo_usuario_fk)
VALUES ('Ylene', 'ylene@email.com', '123', 22233344455, 'Ylene.png', 1);

INSERT INTO usuarios (nome, email, senha, cpf, foto, tipo_usuario_fk)
VALUES ('Lene', 'lene@email.com', '123', 56667778889, 'lene.png', 1);

INSERT INTO usuarios (nome, email, senha, cpf, foto, tipo_usuario_fk)
VALUES ('Lele', 'lele@email.com', '123', 99000111222, 'lele.png', 3);

SELECT *
FROM usuarios;

SELECT nome, email, tipo_usuario_fk
FROM usuarios;

SELECT *
FROM usuarios
WHERE tipo_usuario_fk = 2;

SELECT *
FROM usuarios
WHERE nome LIKE ('L%');

SELECT *
FROM usuarios
WHERE nome LIKE ('L%') AND tipo_usuario_fk = 1;

SELECT *
FROM usuarios
WHERE nome LIKE ('L%') OR tipo_usuario_fk = 1;

SELECT *
FROM usuarios
WHERE nome IN ('Dylene','Lene','Lele');

SELECT nome, email
FROM usuarios
ORDER BY nome DESC;

SET sql_safe_updates = 0; /* DESABILITA O MODO DE ATUALIZAÇÃO */
UPDATE usuarios
SET email = 'dylene.dylene@email.com'
where nome = 'Dylene';
SET sql_safe_updates = 1; /* HABILITA O MODO DE ATUALIZAÇÃO */

UPDATE usuarios
SET email = 'lele.lele@email.com'
WHERE id_usuario = 8; /* SE FOR PK, NÃO PRECISA DESABILITAR MODO DE ATUALIZACAO */

DELETE FROM usuarios
WHERE nome = 'Hendylane'; /* SÓ FUNCINA QUANDO MODO DE SEGURANÇA ESTÁ DESATIVADO */

DELETE FROM usuarios
WHERE id_usuario = 5; /* SE FOR PK,  NÃO PRECISA DESABILITAR MODO DE ATUALIZACAO */

/* BOTÃO DIREITO DO MOUSE, SELECIONAR "Send to SQL Editor" > "Insert Statement" */
INSERT INTO `projeto_cursos`.`usuarios`
(`nome`,
`email`,
`senha`,
`cpf`,
`foto`,
`tipo_usuario_fk`)
VALUES
('Didi', 'didi@email.com', 321, 34576890001, 'didi.png', 3);


