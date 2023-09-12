create database bd_magcine;
use bd_magcine;
Create table Aluguel (
    id_alu int primary key auto_increment,
    Nome_alu varchar(100),
    Sobrenome_alu varchar(100),
    Telefone_alu varchar(100),
    CPF_alu varchar(100),
    Numero_do_cartao_alu varchar(100),
    Data_de_validade_alu date,
    Codigo_de_seguranca varchar(100),
    Forma_de_pagamento varchar(100)
);
create table Usuario (
    id_usu int primary key auto_increment,
    nome_usu varchar(50),
    cpf_usu varchar(50),
    sexo_usu varchar(50),
    data_nascimento date,
    celular_usu varchar(50),
    email_usu varchar(50),
    endereco_usu varchar(50),
    senha_usu varchar(50),
    id_alu_fk int,
    foreign key (id_alu_fk) references Aluguel (id_alu)
);
create table Filmes (
    id_fil int primary key auto_increment,
    titulo_fil varchar(50),
    produtor_fil varchar(50),
    ano_fil varchar(50),
    categoria_fil varchar(50),
    duracao_fil time,
    classificacao_fil varchar(50),
    elenco_fil varchar(100),
    sinopse_fil varchar(100),
    id_alu_fk int,
    foreign key (id_alu_fk) references Aluguel (id_alu)
);
Create table Funcionarios (
    Id_fun int primary key auto_increment,
    Nome_fun varchar(100),
    Email_fun varchar(100),
    Telefone_fun varchar(100),
    Sexo_fun varchar(100),
    Data_de_nascimento date,
    Cidade_fun varchar(100),
    Estado_fun varchar(100),
    Endereco_fun varchar(200)
);
create table Contato (
    id_cont int primary key auto_increment,
    nome_completo_cont varchar(200),
    email_cont varchar(200),
    celular_cont varchar(150),
    data_de_nascimento_cont datetime,
    sexo_cont varchar(200),
    assunto_cont varchar(250),
    sua_mensagem_cont varchar(500),
    tipo_mensagem_cont varchar(100)
);
create table Serie (
    id_seri int primary key auto_increment,
    nome_seri varchar(200),
    temporada_seri varchar(100),
    episodios_seri varchar(200),
    data_de_lancamento_seri datetime,
    classificacao_seri varchar(100),
    categoria_seri varchar(50),
    elenco_seri varchar(100),
    sinopse_seri varchar (800),
    id_alu_fk int,
    foreign key (id_alu_fk) references Aluguel (id_alu)
);