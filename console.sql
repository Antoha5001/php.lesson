show databases;
create database lavrik default charset utf8;

use lavrik;

show tables ;

create table users(
  users_id INT(7) not null auto_increment comment 'Id пользователя',
  name varchar(99) not null ,
  login varchar(99) not null ,
  password varchar(999) not null,
  primary key (users_id)
) comment 'Таблица с данными пользователя'

desc users;

insert into users values (null , 'Админ', 'admin', 'qwerty');

select * from users;