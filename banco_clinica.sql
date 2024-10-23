-- Desenvolvido por Lucas De Carvalho Praxedes --
 -- DATA 23/10/2024 -- 
 -- Professor: Luís Alberto Pires de Oliveira --
 
create database clinica_medica;
use clinica_medica;
 
create table pacientes (
    id int auto_increment primary key,
    nome varchar(50)unique,
    data_nascimento date,
    email varchar(50)unique,
    telefone varchar(50),
    endereco varchar(50),
    sexo enum('Masculino', 'Feminino','Outro')
);

 create table agendamentos (
    id_paciente int auto_increment primary key,
	nome_paciente varchar(50),
    data_consulta date,
    hora_consulta time,
    foreign key  (nome_paciente) references pacientes (nome)
);

create table administrador (
    id_adm int auto_increment primary key,
    usuario varchar(50),
    senha varchar(50) 
);
insert into administrador (usuario, senha) values ('admin', '1234567');

drop table pacientes;
drop table agendamentos;

 SELECT * FROM clinica_medica.pacientes;
  SELECT * FROM clinica_medica.agendamentos;