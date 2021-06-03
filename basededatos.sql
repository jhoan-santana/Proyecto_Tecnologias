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


CREATE TABLE administrador(
codeAdmin INT NOT NULL AUTO_INCREMENT,
emailAdmin VARCHAR(50)NOT NULL,
contrasenaAdmin VARCHAR(20)NOT NULL,
CONSTRAINT fk_Administrador
PRIMARY KEY (codeAdmin)
);

INSERT INTO administrador(emailAdmin,contrasenaAdmin)
VALUES ('1234@gmail.com','12345');

SELECT*FROM proyecto.administrador;



INSERT INTO usuario(nombreUsuario,apellidoUsuario,emailUsuario,contrasena,estado)
VALUES ('nico','chaves','nicolaschaves97@gmail.com','1234',1);

SELECT*FROM proyecto.usuario;

INSERT INTO usuario(nombreUsuario,apellidoUsuario,emailUsuario,contrasena,estado)
VALUES ('yo','yo','ola','1234',1);

SELECT*FROM proyecto.usuario;

CREATE TABLE producto(
codeProducto INT NOT NULL AUTO_INCREMENT,
nombreProducto VARCHAR(50) NULL,
descripcionProducto VARCHAR(100) NULL,
enlaceProducto VARCHAR(50) NULL,
estado INT NULL,
CONSTRAINT pk_Producto
PRIMARY KEY (codeProducto)
);

alter table producto add rutaimagenProducto VARCHAR(100) NULL;

INSERT INTO `proyecto`.`producto`
(`nombreProducto`,
`descripcionProducto`,
`enlaceProducto`,
`estado`,
`rutaimagenProducto`)
VALUES
('cuarto_producto',
'Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, 
when an unknown printer took a galley of type and scrambled',
'https://lipsum.com/',1,'tarjeta.png');


SELECT*FROM proyecto.producto;
