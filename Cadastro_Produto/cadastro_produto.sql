create database cadastro_produto ;

use cadastro_produto ;

create table produto 
(
	data_inicial		date 			not null ,
	data_final			date 			not null ,
    valor 				double			not null,
    quantidade   		int 			not null,
    marca 				varchar(50)		not null,
    primary key(data_inicial, data_final)
)