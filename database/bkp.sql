create database empresaTeste;

use empresaTeste;

create table funcionario 
(
    funcional int auto_increment primary key,
    cpf char(11) not null unique,
    nome varchar(40) not null,
    telefone char(15) null,
    endereco varchar(70) not null,
    created_at datetime not null,
    updated_at datetime null,
    image_url varchar(80) null
);

set sql_safe_updates=1;

alter table funcionario add constraint uqcpf unique(cpf);

create table departamento (
    nomeDepartamento varchar(45) not null,
    codDepartamento int auto_increment not null,
    constraint uqDepto unique (nomeDepartamento),
    constraint primary key(codDepartamento),
    created_at datetime not null,
    updated_at datetime null
);

alter table funcionario add codDepartamento int not null;
    
alter table funcionario add constraint fkfuncDepto
foreign key (codDepartamento) references departamento (codDepartamento);

create table cargo 
(
    nomeCargo varchar(50) not null unique,
    salario decimal(8,2) not null,
    codCargo int auto_increment not null primary key,
    created_at datetime not null,
    updated_at datetime null
);
    
alter table funcionario add codCargo int not null;

alter table funcionario add constraint fkCargoFunc
foreign key (codCargo) references cargo (codCargo);
    


