create database centroasclepio;
use centroasclepio;

create table clientes(id_cli int,nombre varchar(35),apellido varchar(35),dni int(8),N°tramite int(11),mail varchar(35),telefono int(10), direccion varchar(35),Fecha_nacimiento date,Localidad varchar(35),Genero boolean);

create table roles(id_roles int, administrador varchar(35),Usuario varchar(35));

create table otros_centrosVacunatorios(id_OVacu int,Direccion varchar(35));

