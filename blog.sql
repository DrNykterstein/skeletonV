CREATE TABLE usuarios(
     id int(255) auto_increment not null,
     nombre varchar(100) not null,
     apellido varchar(100) not null,
     email varchar(180) not null,
     password varchar(255) not null,
     CONSTRAINT pk_usuarios PRIMARY KEY(id)
);

CREATE TABLE categoria(
    id int(255) auto_increment not null,
    nombre varchar(100) not null,
    CONSTRAINT pk_usuarios PRIMARY KEY(id)
);

CREATE TABLE entradas(
    id int(255) auto_increment not null,
    usuario_id int(255) not null,
    categoria_id int(255) not null,
    titulo varchar(255) not null,
    descripcion MEDIUMTEXT,
    fecha date not null,
    CONSTRAINT pk_usuarios PRIMARY KEY(id),
    CONSTRAINT fk_entrada_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id),
    CONSTRAINT fk_entrada_categoria FOREIGN KEY(categoria_id) REFERENCES categoria(id)

);