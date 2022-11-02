create TABLE clientes (
	id int not null AUTO_INCREMENT PRIMARY KEY,
	nombre varchar(50),
    apellido varchar(50),
    direccion varchar(50)

);

CREATE TABLE productos(
	id int not null AUTO_INCREMENT PRIMARY KEY,
	nombre varchar(50),
    cantidad int,
    precio decimal,
    foto varchar(200)

);


CREATE TABLE factura(
	id int not null AUTO_INCREMENT PRIMARY KEY,
	totalFactura decimal,
    IVA decimal,
    idCliente int,
    FOREIGN KEY (idCliente) REFERENCES clientes(id)

);

CREATE TABLE detalleFactura(
    id int not null AUTO_INCREMENT PRIMARY KEY,
    cantidad int,
    precio decimal,
    importe decimal,
    idFactura int,
    idProducto int,
    FOREIGN KEY (idFactura) REFERENCES factura(id),
    FOREIGN KEY (idProducto) REFERENCES productos(id)
);

INSERT INTO productos VALUES(null, 'Producto 1', 100, 20,'img/productos/producto_1.jpg');
INSERT INTO productos VALUES(null, 'Producto 2', 200, 30,'img/productos/producto_2.jpg');
INSERT INTO productos VALUES(null, 'Producto 3', 200, 40,'img/productos/producto_3.jpg');
INSERT INTO productos VALUES(null, 'Producto 4', 200, 50,'img/productos/producto_4.jpg');