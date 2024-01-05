drop database if EXISTS pawi2;

CREATE DATABASE pawi2;

USE pawi2;

CREATE TABLE `cursos` (  `id_curso` int unsigned NOT NULL AUTO_INCREMENT,  `cod` int unsigned NOT NULL,  `nome_curso` tinytext,  PRIMARY KEY (`id_curso`) );

INSERT INTO `cursos` (`id_curso`, `cod`, `nome_curso`) VALUES
(1, 316, 'Sistemas de Informações'),
(2, 310, 'Ciência da Computação'),
(3, 320, 'Engenharia da Computação');

CREATE TABLE `alunos` (  `id` int unsigned NOT NULL AUTO_INCREMENT,  `curso_id` int unsigned NOT NULL DEFAULT '316',  `rga` varchar(20) DEFAULT NULL,  `nome` varchar(120) DEFAULT NULL,  PRIMARY KEY (`id`),  KEY `curso_id` (`curso_id`),  CONSTRAINT `alunos_ibfk_1` FOREIGN KEY (`curso_id`) REFERENCES `cursos` (`id_curso`) );