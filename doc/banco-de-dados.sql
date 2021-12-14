CREATE TABLE `produto` (
	`id_produto` INT NOT NULL AUTO_INCREMENT,
	`nome_produto` varchar(255) NOT NULL,
	`peso_liquido` varchar(30) int NOT NULL,
	`validade` DATE NOT NULL,
	`lote` varchar(200) NOT NULL UNIQUE,
	PRIMARY KEY (`id_produto`)
);

CREATE TABLE `nutricional` (
	`id_nutricional` INT NOT NULL AUTO_INCREMENT,
	`nome_nutricional` varchar(200) NOT NULL,
	`valor_nutricional` varchar(200) NOT NULL,
	`produto_id_produto` INT NOT NULL,
	PRIMARY KEY (`id_nutricional`)
);

ALTER TABLE `nutricional` ADD CONSTRAINT `nutricional_fk0` FOREIGN KEY (`produto_id_produto`) REFERENCES `produto`(`id_produto`);



