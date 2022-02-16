CREATE DATABASE bd_domestic;
USE bd_domestic;


CREATE TABLE profile(
	id_profile INT AUTO_INCREMENT,
	description_profile VARCHAR(100),
	PRIMARY KEY(id_profile)
)ENGINE INNODB;

CREATE TABLE users(
	id_user INT AUTO_INCREMENT,
	id_profile INT,
	nameF VARCHAR(100),
	email VARCHAR(100),
	passwords VARCHAR(100),
	enrollment_date DATETIME,
	FOREIGN KEY(id_profile)
	REFERENCES profile(id_profile),
	PRIMARY KEY(id_user)
)ENGINE INNODB;

CREATE TABLE clients(
	id_client INT AUTO_INCREMENT NOT NULL,
	id_user INT,
	email VARCHAR(100),
	nameC VARCHAR(100),
	enrollment_date DATE,
	FOREIGN KEY(id_user)
	REFERENCES users(id_user),
	PRIMARY KEY(id_client)
)ENGINE INNODB;

CREATE TABLE phones(
	id_phone INT AUTO_INCREMENT,
	id_client INT,
	id_user INT,
	type_phone VARCHAR(25),
	number_phone VARCHAR(15),
	FOREIGN KEY(id_client)
	REFERENCES clients(id_client),
	FOREIGN KEY(id_user)
	REFERENCES users(id_user),
	PRIMARY KEY(id_phone)
)ENGINE INNODB

CREATE TABLE address(
	id_address INT AUTO_INCREMENT,
	id_user INT,
	id_client INT,
	cep VARCHAR(10)NOT NULL,
	public_place VARCHAR(100),
	district VARCHAR(50),
	house_number VARCHAR(10),
	city VARCHAR(50),
	uf CHAR(2),
	FOREIGN KEY(id_user)
	REFERENCES users(id_user),
	FOREIGN KEY(id_client)
	REFERENCES clients(id_client),
	PRIMARY KEY(id_address)
)ENGINE INNODB;

CREATE TABLE services(
	id_service INT AUTO_INCREMENT,
	id_user INT,
	nameF VARCHAR(100),
	data_servico DATETIME NOT NULL,
	cleaning_time DATE,
	service_done CHAR(10),
	price_service VARCHAR(50),
	FOREIGN KEY(id_user)
	REFERENCES users(id_user),
	PRIMARY KEY(id_service)
)ENGINE INNODB;

CREATE TABLE services_clients(
	id_service_client INT AUTO_INCREMENT,
	id_service INT,
	id_client INT,
	atendente INT,
	id_address INT,
	date_service_done DATE,
	service_done CHAR(10),
	FOREIGN KEY(id_service)
	REFERENCES services(id_service),
	FOREIGN KEY (atendente)
	REFERENCES users(id_user),
	FOREIGN KEY(id_client)
	REFERENCES clients(id_client),
	FOREIGN KEY(id_address)
	REFERENCES address(id_address),
	PRIMARY KEY(id_service_client)
)ENGINE INNODB;






































