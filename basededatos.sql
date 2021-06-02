CREATE TABLE usuario(
codeUsuario INT NOT NULL AUTO_INCREMENT,
nombreUsuario VARCHAR(50),
apellidoUsuario VARCHAR(50),
emailUsuario VARCHAR(50)NOT NULL,
contrasena VARCHAR(20)NOT NULL,
estado INT NOT NULL,
CONSTRAINT fk_Usuario
PRIMARY KEY (codeUsuario)
);

INSERT INTO usuario(nombreUsuario,apellidoUsuario,emailUsuario,contrasena,estado)
VALUES ('nico','chaves','nicolaschaves97@gmail.com','1234',1);

SELECT*FROM proyecto.usuario;

