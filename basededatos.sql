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

CREATE TABLE PRODUCTO(
	codpro int not null AUTO_INCREMENT,
	nompro varchar(50) null,
	despro varchar(100) null,
	prepro varchar(100) null,
	estado int null,
    rutimapro varchar(100) null,
	CONSTRAINT pk_producto
	PRIMARY KEY (codpro)
);

 
/* gabinete*/
INSERT INTO PRODUCTO (nompro,despro,prepro,estado,rutimapro)
VALUES ('Gabinete AeroCool','Gabinete de formato Itx  con ventilacion RGB ','260 000',1,'Gabinete1.PNG'),

('Gabinete Thermatalke','Gabinete Mid-Tower con cristal templado y kit de 4 Fans ARGB','480 000',1,'Gabinete2.PNG'),
 
 ('Gabinete AeroCool','Gabinete de formato Itx  con ventilacion RGB con dimensiones de 50 cm de alto
 x 60 cm de largo x 25 cm de ancho','260 000',1,'Gabinete3.PNG'),
 
 ('Gabinete Deep Cool ','Gabinete de formato Itx con ventiladores rojos','300 000',1,'Gabinete4.PNG'),

 ('Gabinete Cooler Master','Un gabinete con dimensiones de 50 cm de alto
 x 60 cm de largo x 25 cm de ancho con kit de 2 ventiladores ARGB','250 000',1,'Gabinete5.PNG');
 
 
 
 /*ram*/
 INSERT INTO PRODUCTO (nompro,despro,prepro,estado,rutimapro)
VALUES ('Memoria RAM ddr4 8Gb',' Memoria ram a 2660mhz','220 000',2,'Ram1.PNG'),

 ('Memoria RAM ddr4 16Gb',' Memoria ram a 2660mhz','350 000',2,'Ram2.PNG'),

('Memoria RAM ddr4 32Gb',' Memoria ram a 4000mhz','520 000',2,'Ram3.PNG'),

 ('Memoria RAM ddr4 64Gb',' Memoria ram a 4600mhz','880 000',2,'Ram4.PNG');
 
 
 /*Almacenamineto*/
 INSERT INTO PRODUCTO (nompro,despro,prepro,estado,rutimapro)
VALUES ('HDD 500gb',' Disco duro de 500gb a 7200rpm','150 000',3,'hdd1.PNG'),
('HDD 1tb',' Disco duro de 1tb a 7200rpm','250 000',3,'hdd2.PNG'),
('HDD 2tb',' Disco duro de 2tb a 7200rpm','420 000',3,'hdd3.PNG'),

('SSD SATA 500gb',' Unidad de estado sólido de 500gb de tipo SATA','250 000',3,'ssd1.PNG'),
('SSD SATA 1tb',' Unidad de estado sólido de 1tb de tipo SATA','480 000',3,'ssd2.PNG'),
('SSD SATA 2tb',' Unidad de estado sólido de 2tb de tipo SATA','760 000',3,'ssd3.PNG'),

('SSD m.2 500gb',' Unidad de estado sólido de 500gb de tipo nvme','360 000',3,'m21.PNG'),
('SSD m.2 1tb',' Unidad de estado sólido de 1tb de tipo nvme','740 000',3,'m22.PNG'),
('SSD m.2 2tb',' Unidad de estado sólido de 2tb de tipo nvme','1 120 000',3,'m23.PNG');


/*Cpu*/
INSERT INTO PRODUCTO (nompro,despro,prepro,estado,rutimapro)
VALUES ('Ryzen 3 ',' Ryzen de 5ta generacion con 4 nucleos y 8 hilos de trabajo sin gráficos integrados','150 000',4,'ryzen3.PNG'),
('Ryzen 5 ',' Ryzen de 5ta generacion con 6 nucleos y 12 hilos de trabajo sin gráficos integrados','150 000',4,'ryzen5.PNG'),
('Ryzen 7 ',' Ryzen de 5ta generacion con 8 nucleos y 16 hilos de trabajo sin gráficos integrados','150 000',4,'ryzen7.PNG'),
('Ryzen 9 ',' Ryzen de 5ta generacion con 12 nucleos y 24 hilos de trabajo sin gráficos integrados','150 000',4,'ryzen9.PNG'),


('Intel i3 ',' Intel de 11va generacion con 4 nucleos y 8 hilos de trabajo con gráficos integrados','150 000',4,'intel3.PNG'),
('Intel i5 ',' Intel de 11va generacion con 6 nucleos y 12 hilos de trabajo con gráficos integrados','150 000',4,'intel5.PNG'),
('Intel i7 ',' Intel de 11va generacion con 8 nucleos y 16 hilos de trabajo con gráficos integrados','150 000',4,'intel7.PNG'),
('Intel i9 ',' Intel de 11va generacion con 8 nucleos y 16 hilos de trabajo con gráficos integrados','150 000',4,'intel9.PNG');

/*gpu*/
INSERT INTO PRODUCTO (nompro,despro,prepro,estado,rutimapro)
VALUES ('Gráfica Nvidia gt 710 ',' Tarjeta gráfica de uso de infomatica con 1gb de vram  ','150 000',5,'nvidia1.PNG'),
 ('Gráfica Nvidia gtx 1650 super ',' Tarjeta gráfica de uso de juegos con 4gb de vram  ','150 000',5,'nvidia2.PNG'),
 ('Gráfica Nvidia gtx 1660ti ',' Tarjeta gráfica de uso de juegos con 6gb de vram  ','150 000',5,'nvidia3.PNG'),
 ('Gráfica Nvidia RTX 3070 ',' Tarjeta gráfica de uso de juegos con 8gb de vram  ','150 000',5,'nvidia4.PNG'),
 ('Gráfica Nvidia RTX 3090 ',' Tarjeta gráfica de uso de juegos con 24gb de vram  ','150 000',5,'nvidia5.PNG'),
 
 ('Gráfica AMD Radeon rx 460 ',' Tarjeta gráfica de uso de infomatica con 4gb de vram  ','150 000',5,'amd1.PNG'),
 ('Gráfica AMD Radeon rx 590 ',' Tarjeta gráfica de uso de juegos con 8gb de vram  ','150 000',5,'amd2.PNG'),
 ('Gráfica AMD Radeon rx 5600XT ',' Tarjeta gráfica de uso de juegos con 8gb de vram  ','150 000',5,'amd3.PNG'),
 ('Gráfica AMD Radeon rx 6800XT ',' Tarjeta gráfica de uso de juegos con 16gb de vram  ','150 000',5,'amd4.PNG'),
 ('Gráfica AMD Radeon rx 6900XT ',' Tarjeta gráfica de uso de juegos con 16gb de vram  ','150 000',5,'amd5.PNG');

/*Mother*/
INSERT INTO PRODUCTO (nompro,despro,prepro,estado,rutimapro)
VALUES ('Mother Msi b450m PRO-m2 MAX ',' Tarjeta madre de chipset b450 con socket am4 preparado para la 2da generación de ryzen en adelante'
,'150 000',6,'amd1.PNG'),
('Mother GIGABYTE X570 UD ',' Tarjeta madre de chipset x570 con socket am4 preparado para la 3ra generación de ryzen en adelante'
,'150 000',6,'amd2.PNG'),
('Mother GIGABYTE b550 GAMING X V2 ',' Tarjeta madre de chipset b550 con socket am4 preparado para la 3ra generación de ryzen en adelante'
,'150 000',6,'amd3.PNG'),
('Mother AOURUS ELITE b450 ',' Tarjeta madre de chipset b450 con socket am4 preparado para la 2da generación de ryzen en adelante'
,'150 000',6,'amd4.PNG'),
('Mother MSI X570 Gaming Pro Carbon WiFi ',' Tarjeta madre de chipset x570 con socket am4 preparado para la 3ra generación de ryzen en adelante'
,'150 000',6,'amd5.PNG'),

('Mother GIGABYTE b460 HD3 ',' Tarjeta madre de chipset b460 con socket LGA 1151 preparado para la 9na y 10ma generación de intel'
,'150 000',6,'intel1.PNG'),
('Mother ASUS TUF gaming b460-plus',' Tarjeta madre de chipset b460 con socket LGA 1151 preparado para la 9na y 10ma generación de intel'
,'150 000',6,'intel2.PNG'),
('Mother ASUS PRIME b560-PLUS',' Tarjeta madre de chipset b560 con socket LGA 1200 preparado para la 11va generación de intel'
,'150 000',6,'intel3.PNG'),
('Mother AOURUS B560 AOURUS PRO AX ',' Tarjeta madre de chipset b560 con socket LGA 1200 preparado para la 11va generación de intel'
,'150 000',6,'intel4.PNG'),
('Mother ASROCK B560 PRO4 ',' Tarjeta madre de chipset b560 con socket LGA 1200 preparado para la 11va generación de intel'
,'150 000',6,'intel5.PNG');

/*psu*/
INSERT INTO PRODUCTO (nompro,despro,prepro,estado,rutimapro)
VALUES ('EVGA 500w','Fuente de poder de 500w con certificación 80plus Bronze ','150 000',7,'psu1.PNG'),
('EVGA BR 600w','Fuente de poder de 600w con certificación 80plus Bronze ','150 000',7,'psu2.PNG'),
('Gamemax 750w','Fuente de poder de 750w con certificación 80plus Gold ','150 000',7,'psu3.PNG'),
('EVGA 850w','Fuente de poder de 850w con certificación 80plus Bronze ','150 000',7,'psu4.PNG'),
('Seasonic Prime Gold 1000w','Fuente de poder de 1000w con certificación 80plus Gold ','150 000',7,'psu5.PNG');

/*Refrigeracion*/
INSERT INTO PRODUCTO (nompro,despro,prepro,estado,rutimapro)
VALUES ('Kit de ventilacion ARGB','Ventilador de 120mm con controlador ARGB','150 000',8,'kit1.PNG'),
('Kit de ventilacion ','Ventilador de 120mm ','150 000',8,'kit2.PNG'),
('Kit de 3 ventiladores ARGB','3 ventiladores de 120mm con controlador ARGB','150 000',8,'kit3.PNG'),

(' Cooler master Hyper 212 Evo','Disipador por aire para cpu de 120mm ','150 000',8,'aire1.PNG'),
(' Noctua Nh-d15','Disipador por aire para cpu con 2 ventiladores de 120mm ','150 000',8,'aire2.PNG'),
(' Thermatalke ','Disipador por aire para cpu intel de 80mm ','150 000',8,'aire3.PNG'),

(' Golden Field sf120rgb ','Refrigeración liquida de 120mm para cpu ','150 000',8,'liquida1.PNG'),
(' TCorsair Hydro series h100 ','Refrigeración liquida de 240mm para cpu ','150 000',8,'liquida2.PNG'),
(' TCorsair Hydro series h80i ','Refrigeración liquida de 120mm para cpu ','150 000',8,'liquida3.PNG');


SELECT*FROM proyecto.PRODUCTO;






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