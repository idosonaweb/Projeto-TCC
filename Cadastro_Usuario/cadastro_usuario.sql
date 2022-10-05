create database cadastro_usuario ;

use cadastro_usuario ;

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
)