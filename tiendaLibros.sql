create table clientes(
	id_cliente int not null primary key,
	nombre varchar(40) not null,
	apellido varchar(40) not null,
	ciudad varchar(40) not null,
	celular varchar(40) not null,
	direccion varchar(40) not null,
	email varchar(40) not null,
	password varchar(40) not null,
        tipoUsuario varchar (40) not null
);
create table ciudad(
	id_ciudad  int not null auto_increment primary key,
	nombre varchar(40) not null
);
create table categorias(
	id_categoria  int not null auto_increment primary key,
	nombre varchar(40) not null
);
create table libros(
	id_libro int not null auto_increment primary key,
	id_categoria int not null,
	nombre_libro  varchar(100) not null,
	editorial varchar(40) not null,
	autor varchar(40) not null,
	precio varchar(40) not null,
	cantidad varchar(40) not null,
	resumen varchar(1500) not null,
	imagen varchar(40) not null,
	foreign key (id_categoria) references categorias (id_categoria)
	on delete cascade on update cascade 
);
create table carrito(
	id_venta int not null auto_increment primary key,
        id_libro int not null,
	foreign key (id_libro) references libros (id_libro)
	on delete cascade on update cascade
);
create table detalle(
	id_venta int not null,
	id_libro int not null,
	foreign key (id_venta) references carrito (id_venta)
	on delete cascade on update cascade ,
	foreign key (id_libro) references libros (id_libro)
	on delete cascade on update cascade 
);
create table factura(
	id_compra int not null auto_increment primary key,
	id_venta int not null,
	id_cliente int not null,
	id_libro int not null,
	nombre_libro  varchar(40) not null,
	foreign key (id_cliente) references clientes (id_cliente)
	on delete cascade on update cascade 
);
create table favoritos(
	id_favoritos int not null auto_increment primary key,
	id_cliente int not null,
	id_libro int not null,
	foreign key (id_cliente) references clientes (id_cliente)
	on delete cascade on update cascade 
);
create table recomendaciones(
	id_recomendacion int not null auto_increment primary key,
	id_libro int not null,
	foreign key (id_libro) references libros (id_libro)
	on delete cascade on update cascade
);
create table datos(
	id_cliente int not null,
	id_favoritos int not null,
	foreign key (id_cliente) references clientes (id_cliente)
	on delete cascade on update cascade ,
	foreign key (id_favoritos) references favoritos (id_favoritos)
	on delete cascade on update cascade 
);
	
	





