create database hr;
create table login (name varchar(100),password varchar(100));
create table applicant_details(id int primary key AUTO_INCREMENT,firstName varchar(100),lastName varchar(100),age int,gender varchar(10),phone varchar(12),email varchar(100));
create table applicant_edu(id int unique not null,firstName varchar(100),school varchar(100),school_grade int,pu varchar(100),pu_grade int,ug varchar(100),ug_grade int,pg varchar(100),pg_grade int);
create table info(phone varchar(100),firstName varchar(100),field varchar(100),why varchar(1000),experience varchar(1000),contribution varchar(1000),project varchar(1000),other varchar(1000),time varchar(500));
