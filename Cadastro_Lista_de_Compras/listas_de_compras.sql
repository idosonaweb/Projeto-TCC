
-- Criação de banco de dados
create database listas_de_compra ;
--(database não definitiva, passível de tranferir a tabela pra outro lugar)

use listas_de_compra ;

-- Informações da lista de compras do usuário não precisam estar ligadas às demais pois a lista é algo pessoal do usuário(mas pode ser usada para comparações e sugestões de preço para produtos coletivamente ou individualmente), pode ser usada para comparações no entanto e não há necessidade de um banco de dados onde tenhamos acesso às listas dos usuários, assim, elas não precisam estar ligadas ao código do usuário e podem ficar armazenadas apenas no aparelho do mesmo. Eu acho rs


create table listas
(
	id_lista			int 			not null auto_increment,
    nome_lista		varchar(100) 	not null,
    data_criacao datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    qtd_produtos   int   not null, --será feito a partir de um script que contará a quantidade de produtos que a lista contém. 
    primary key(id_lista)
)

  --Provavelmente há necessidade de criar também um item tipo vetor que armazenará o código dos vários produtos presentes em uma lista de compras, mas não sei como isso funcionaria ainda.