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

CREATE TABLE PRODUCTO1(
	codpro int not null AUTO_INCREMENT,
	nompro varchar(50) null,
	despro varchar(100) null,
	prepro numeric(6,2) null,
	estado int null,
	CONSTRAINT pk_producto
	PRIMARY KEY (codpro)
);

<<<<<<< HEAD
alter table PRODUCTO1 add rutimapro varchar(100) null;

INSERT INTO PRODUCTO1 (nompro,despro,prepro,estado,rutimapro)
VALUES ('gabinete azul con ventilacion','Un gabinete con dimensiones de 50 cm de alto x 60 cm de largo x 25 cm de ancho','160 000',1,'gabineteazul.PNG');

SELECT*FROM proyecto.PRODUCTO1;
=======


alter table GABINETE add  rutimapro varchar(100) null;
INSERT INTO GABINETE (nompro,despro,prepro,estado,rutimapro)
VALUES ('pipo','Un gabinete con dimensiones de 50 cm de alto x 60 cm de largo x 25 cm de ancho','160 000',1,'gabineteazul.PNG')
;

SELECT*FROM proyecto.GABINETE;
>>>>>>> 4f215441816b48722b2813b6e0e0152a90a037bf

CREATE TABLE USUARIO(
	codusu int not null AUTO_INCREMENT,
	nomusu varchar(50) ,
	apeusu varchar(50) ,
	emausu varchar(50) not null,
	pasusu varchar(20) not null,
	estado int not null,
	CONSTRAINT pk_usuario
	PRIMARY KEY (codusu)
);

INSERT INTO USUARIO (nomusu,apeusu,emausu,pasusu,estado)
VALUES ('Usuario','Demo','correo@example.com','123456',1);

create table PEDIDO(
	codped int not null AUTO_INCREMENT,
	codusu int not null,
	codpro int not null,
	fecped datetime not null,
	estado int not null,
	dirusuped varchar(50) not null,
	telusuped varchar(12) not null,
	PRIMARY KEY (codped)
);