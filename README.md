#### Para criar o banco de dados
* create database escalademo;

### para criar a tabela
create table dados(
    id int(2) PRIMARY KEY AUTO_INCREMENT,
	name varchar(255) not null,
    email varchar(255) not null,
    message varchar(255) not null
);