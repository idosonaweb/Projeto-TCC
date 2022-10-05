create database login ;

use login ;

create table usuarios 
(
	id			int 			not null auto_increment,
    nome 		varchar(100)	null,
    email		varchar(50) 	not null,
    senha		varchar(20) 	not null,
    primary key(id)
)