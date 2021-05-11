
create database IF NOT EXISTS curs;
use curs;

/* Creació de les taules*/ 


CREATE TABLE IF NOT EXISTS tbl_professor(
	id_professor int(5) NOT NULL AUTO_INCREMENT,
	nom_prof varchar (20) NOT NULL,
	cognom1_prof varchar (20) NULL,
	cognom2_prof varchar (20) NULL,
	email_prof varchar(50) NULL,
	telf varchar (5) NULL, /* Son les extensions, per exemple: 32256*/
	dept int(5) NOT NULL,
	constraint pk_professor PRIMARY KEY (id_professor)
);

CREATE TABLE IF NOT EXISTS tbl_classe (
	id_classe int(5) NOT NULL AUTO_INCREMENT,
	codi_classe varchar(5) NOT NULL,
	nom_classe varchar(25) NULL,
	tutor int(5) NOT NULL,
	constraint pk_consta PRIMARY KEY (id_classe)
);

CREATE TABLE IF NOT EXISTS tbl_alumne(
	id_alumne int(10) NOT NULL AUTO_INCREMENT,
	dni_alu varchar(9) NULL,
	nom_alu varchar(20) NOT NULL,
	cognom1_alu varchar(20) NULL,
	cognom2_alu varchar(20) NULL,
	telf_alu varchar(9) NULL,
	email_alu varchar(50) NULL,
	classe int(5) NULL,
	constraint pk_alumne PRIMARY KEY (id_alumne)
);

CREATE TABLE IF NOT EXISTS tbl_dept(
	id_dept int(5) NOT NULL AUTO_INCREMENT,
	codi_dept varchar(5) NOT NULL,
	nom_dept varchar(25) NULL,
	constraint pk_imparteix PRIMARY KEY (id_dept)
);

/* Modificacions de les taules per cració de les FK*/

ALTER TABLE tbl_alumne
    ADD CONSTRAINT alumne_classe_fk FOREIGN KEY (classe)
    REFERENCES tbl_classe(id_classe);
	
ALTER TABLE tbl_classe
    ADD CONSTRAINT classe_prof_fk FOREIGN KEY (tutor)
    REFERENCES tbl_professor(id_professor);

ALTER TABLE tbl_professor
    ADD CONSTRAINT prof_dept_fk FOREIGN KEY (dept)
    REFERENCES tbl_dept(id_dept);


/* INSERTS PRIMERS USUARIS
$sql="INSERT INTO tbl_alumne 
(dni_alu, nom_alu, cognom1_alu, cognom2_alu, telf_alu, email_alu, classe) 
VALUES ('47864649Q','Oscar','Lopez','Moreno','647474823','oscarlopez@gmail.com','Asix1')";
*/

INSERT INTO IF `tbl_alumne` (`dni_alu`, `nom_alu`, `cognom1_alu`, `cognom2_alu`, `telf_alu`, `email_alu`) VALUES ('47864649Q', 'Oscar', 'Lopez', 'Moreno', '636925502', 'oscarlopez@gmail.com');

INSERT INTO IF NOT `tbl_dept` (`codi_dept`, `nom_dept`) VALUES ('34543','DIT');

INSERT INTO IF NOT `tbl_professor` (`nom_prof`, `cognom1_prof`,`cognom2_prof`,`email_prof`,`telf`,`dept`) VALUES ('Gerard','Orobitg','Boyer','gerard.orobitg@fje.edu','6734','1');

INSERT INTO `tbl_classe` (`codi_classe`, `nom_classe`, `tutor`) VALUES ('ASIX1','Aula312','1');