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

CREATE TABLE papeleria(
	id_papeleria INT NOT NULL AUTO_INCREMENT COMMENT 'Identificador de la papeleria',
	nombre VARCHAR(150) NOT NULL COMMENT 'Nombre de la papeleria',
	direccion VARCHAR(200) NOT NULL COMMENT 'Ubicacion donde se encuentra la papeleria',
	activo BIT NOT NULL COMMENT 'Saber si esta activa o no la papeleria',
	id_usuario INT NOT NULL COMMENT 'Usuario que agrego la papeleria',
	PRIMARY KEY (id_papeleria),
	FOREIGN KEY (id_usuario) REFERENCES usuarios (id_usuario)
); 

CREATE TABLE productos(
	id_producto INT NOT NULL AUTO_INCREMENT COMMENT 'Identificador del producto',
	nombre VARCHAR(150) NOT NULL COMMENT 'nombre del producto',
	marca VARCHAR(150) NOT NULL COMMENT 'Marca del producto',
	id_papeleria INT NOT NULL COMMENT 'Papeleria donde se compra',
	activo BIT NOT NULL COMMENT 'Saber si el producto esta activo o no',
	id_usuario INT NOT NULL COMMENT 'Usuario que agrego ese producto',
	PRIMARY KEY (id_producto),
	FOREIGN KEY (id_papeleria) REFERENCES papeleria (id_papeleria),
	FOREIGN KEY (id_usuario) REFERENCES usuarios (id_usuario)
); 