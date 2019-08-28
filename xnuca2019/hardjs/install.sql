create database app;
use app;
create table user(
	id int primary key auto_increment,
	username varchar(18),
	password varchar(18)
);
create table html(
	id int primary key auto_increment,
	userid varchar(18),
	dom varchar(255)
);
insert into user(username,password) values('admin','flag{test}');
alter USER 'root'@'localhost' identified with mysql_native_password by 'root';