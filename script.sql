CREATE DATABASE blog_dp;

CREATE TABLE blog_dp.postagem(
	id INT NOT NULL AUTO_INCREMENT,
	titulo VARCHAR(100),
	conteudo TEXT,
	PRIMARY KEY(id)
);