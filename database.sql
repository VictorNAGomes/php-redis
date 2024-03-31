create database if not exists blog;

USE blog;

create table if not exists posts (
  id int not null primary key auto_increment,
  title varchar(100) not null,
  descricao varchar(255) not null,
  conteudo text not null,
  img varchar(255) not null,
  status int default 0
);