create database purchase ;

use purchase ;

create table usuario 
(
	id_usuario			int 			not null auto_increment,
    nome_usuario		varchar(100) 	not null,
    email_usuario		varchar(50) 	not null,
    telefone_usuario	varchar(30) 	not null,
    rua					varchar(50) 	not null,
    bairro				varchar(50) 	not null,
    cidade				varchar(50) 	not null,
    estado				varchar(02) 	not null,
    cep					varchar(10) 	not null,
    foto_blob           blob,
    foto_nome           varchar(100),
    primary key(id_usuario)
);

create table mercado 
(
	id_mercado			int 			not null auto_increment,
    nome_mercado		varchar(100) 	not null,
    rua					varchar(50) 	not null,
    bairro				varchar(50) 	not null,
    cidade				varchar(50) 	not null,
    estado				varchar(02) 	not null,
    cep					varchar(10) 	not null,
    foto_blob           blob,
    foto_nome           varchar(100),
    
    primary key(id_mercado)
);

create table compra
(
	id_compra			int				not null auto_increment,
	data_compra 		datetime 		NOT NULL ,
	descricao_compra	varchar(300) 	not null,
	-- chave estrangeira com código do mercado onde foi realizada a compra
	qtd_produtos   		int   			not null, 
	valor_compra 		double 			not null,
	nota_fiscal_foto 	blob 			not null,
    primary key(id_compra)
);

create table produto 
(
	data_inicial		date 			not null ,
	data_final			date 			not null ,
    valor 				double			not null,
    quantidade   		int 			not null,
    marca 				varchar(50)		not null,
    primary key(data_inicial, data_final)
);

create table listas
(
	id_lista			int 			not null auto_increment,
    nome_lista			varchar(100) 	not null,
    data_criacao 		datetime 		NOT NULL DEFAULT CURRENT_TIMESTAMP,
    qtd_produtos   		int   			not null, -- será feito a partir de um script que contará a quantidade de produtos que a lista contém. 
    primary key(id_lista)
);

  -- Provavelmente há necessidade de criar também um item tipo vetor que armazenará o código dos vários produtos presentes em uma lista de compras, mas não sei como isso funcionaria ainda.

