create database personas;

use personas;

create table
  usuario (
    id int primary key auto_increment,
    nombre varchar(60),
    apellido varchar(60),
    edad int
  );

select
  *
from
  usuario;