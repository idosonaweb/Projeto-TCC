
-- Criação de banco de dados
create database compras ;
--(database não definitiva, passível de tranferir a tabela pra outro lugar)

use compras ;

-- compras do usuário não precisam estar ligadas às demais pois a compra é algo pessoal do usuário(mas pode ser usada para comparações e sugestões de preço para produtos coletivamente ou individualmente), pode ser usada para comparações no entanto e não há necessidade de um banco de dados onde tenhamos acesso às listas dos usuários, assim, elas não precisam estar ligadas ao código do usuário e podem ficar armazenadas apenas no aparelho do mesmo. Eu acho rs


create table compra
(
	id_compra			int 			not null auto_increment,
  data_compra datetime NOT NULL ,
  descricao_compra		varchar(300) 	not null,
  --chave estrangeira com código do mercado onde foi realizada a compra
  qtd_produtos   int   not null, 
  valor_compra double not null, --não tenho certeza se é double
  nota_fiscal_foto not null --falta o formato da variável, não sei se é blob
    primary key(id_compra)
)
