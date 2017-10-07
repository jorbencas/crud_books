CREATE DATABASE Libros;
use Libros;
CREATE TABLE mensajes(
    id int AUTO_INCREMENT not null PRIMARY KEY,
    ISBN int,
    titulo varchar(60),
    genero varchar(100),
    tipo_de_tapa varchar(200),
    autor varchar(255),
    descripcion text,
    fecha_de_publicacion varchar(255),
    idioma varchar(255),
    hora time,
    fecha date
);
CREATE TABLE users(
    user varchar(255) not null PRIMARY KEY,
    password varchar(255)
);
