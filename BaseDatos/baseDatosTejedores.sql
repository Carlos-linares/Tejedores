CREATE TABLE usuario (
	idusuario serial PRIMARY KEY,
	nombre varchar(200) NOT NULL,
	email varchar(50) NOT NULL,
	username varchar(50) NOT NULL,
	rol varchar(50) NOT NULL,
	clave varchar(50) NOT NULL
);
