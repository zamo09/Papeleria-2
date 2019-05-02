CREATE DATABASE Papeleria2;
USE Papeleria2;

CREATE TABLE usuarios(
	id_usuario INT NOT NULL AUTO_INCREMENT COMMENT 'identificador de la base de datos del usuairo',
	usuario VARCHAR(50) NOT NULL COMMENT 'Nombre de usuario para entrar',
	nombre VARCHAR(150) NOT NULL COMMENT 'nombre del Usuairo',
  	pass VARCHAR(50) NOT NULL COMMENT 'Contraseña para el usuario',
	tipo VARCHAR(4) NOT NULL COMMENT 'Tipo de permisos que tiene el usuario',
  	activo BIT NOT NULL COMMENT 'Saber si el usuario es activo o inactivo',
	PRIMARY KEY (id_usuario)
);

-- Insert de usuarios
INSERT INTO usuarios (usuario,nombre,pass,tipo,activo) VALUES ('zamo','Cesar Samuel Rodriguez Hernandez', '123','root',1);
INSERT INTO usuarios (usuario,nombre,pass,tipo,activo) VALUES ('paty','Paty Ginez','123','admi',1);
INSERT INTO usuarios (usuario,nombre,pass,tipo,activo) VALUES ('raul', 'Raul Sosa', '123', 'user', 1);