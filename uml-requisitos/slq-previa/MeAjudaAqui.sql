create database meajudaaqui;
create table usuario(
id_usuario int not null auto_increment,
nome varchar(30),
email varchar(30),
senha varchar(32),
tipo_usuario int,
primary key(id_usuario)
);
create table problema(
id_problema int not null auto_increment,
tipo_problema int not null,
data_solicitacao datetime,
descricao_texto varchar(256),
primary key(id_problema)
);
create table atendimento(
id_atendimento int not null auto_increment,
data_atendimento datetime,
prazo_estabelecido date,
status_conserto int,
descricao_atendimento varchar(256),
primary key(id_atendimento)
);