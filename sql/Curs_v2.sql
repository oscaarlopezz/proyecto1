

/* Creació de les taules*/ 


CREATE TABLE IF NOT EXISTS tbl_professor(
	id_professor int(4) NOT NULL AUTO_INCREMENT,
	nom_prof varchar (20) NOT NULL,
	cognom1_prof varchar (20) NULL,
	cognom2_prof varchar (20) NULL,
	email_prof varchar(50) NULL,
	telf varchar (4) NULL, /* Son les extensions, per exemple: 32256*/
	dept int(4) NULL,
	constraint pk_professor PRIMARY KEY (id_professor)
);

CREATE TABLE IF NOT EXISTS tbl_classe (
	id_classe int(4) NOT NULL AUTO_INCREMENT,
	codi_classe varchar(4) NOT NULL,
	nom_classe varchar(25) NULL,
	tutor int(4) NULL,
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
	classe int(4) NULL,
	constraint pk_alumne PRIMARY KEY (id_alumne)
);

CREATE TABLE IF NOT EXISTS tbl_dept(
	id_dept int(4) NOT NULL AUTO_INCREMENT,
	codi_dept varchar(4) NOT NULL,
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

INSERT INTO `tbl_alumne` (`dni_alu`, `nom_alu`, `cognom1_alu`, `cognom2_alu`, `telf_alu`, `email_alu`, `classe`) VALUES ('47864649Q', 'Oscar', 'Lopez', 'Moreno', '636925502', 'oscarlopez@gmail.com', 1);

INSERT INTO `tbl_dept` (`codi_dept`, `nom_dept`) VALUES ('31243','Prueba');

INSERT INTO `tbl_professor` (`nom_prof`, `cognom1_prof`,`cognom2_prof`,`email_prof`,`telf`,`dept`) VALUES ('Danny','Larrea','Nomelose','danny.orobitg@fje.edu','6734','1');

INSERT INTO `tbl_classe` (`codi_classe`, `nom_classe`, `tutor`) VALUES ('ASIX1','Aula312','1');

delete from tbl_alumne where id_alumne=1;



CREATE TABLE IF NOT EXISTS tbl_admin(
	id_admin int(4) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	email_admin varchar(50) NOT NULL,
	pass_admin varchar(20) NOT NULL
);

INSERT INTO `tbl_admin` (`email_admin`, `pass_admin`) VALUES ( 'sergi@gmail.com','00zn754n');
INSERT INTO `tbl_admin` (`email_admin`, `pass_admin`) VALUES ( 'tosky@gmail.com','1234');
INSERT INTO `tbl_admin` (`email_admin`, `pass_admin`) VALUES ( 'oscar@gmail.com','1234');


INSERT INTO `tbl_alumne` (`dni_alu`, `nom_alu`, `cognom1_alu`, `cognom2_alu`, `telf_alu`, `email_alu`, `classe`) VALUES ('34564649Q', 'Austin', 'Baby', 'Ou', '697354856', 'austinbaby@gmail.com', 1);


--ALUMNOS;
INSERT INTO `tbl_alumne` (`dni_alu`, `nom_alu`, `cognom1_alu`, `cognom2_alu`, `telf_alu`, `email_alu`, `classe`) VALUES ('47866649Q', 'Juan Carlos', 'Gundin', 'Lopez', '767856673', 'jgundin@gmail.com', 4);
INSERT INTO `tbl_alumne` (`dni_alu`, `nom_alu`, `cognom1_alu`, `cognom2_alu`, `telf_alu`, `email_alu`, `classe`) VALUES ('44677998S', 'Cristian', 'Garcia', 'Moreno', '7676456673', 'cgarcia@gmail.com', 4);
INSERT INTO `tbl_alumne` (`dni_alu`, `nom_alu`, `cognom1_alu`, `cognom2_alu`, `telf_alu`, `email_alu`, `classe`) VALUES ('4378998S', 'Shasha', 'Banks', 'Lamaja', '567890122', 'sbanks@gmail.com', 4);
INSERT INTO `tbl_alumne` (`dni_alu`, `nom_alu`, `cognom1_alu`, `cognom2_alu`, `telf_alu`, `email_alu`, `classe`) VALUES ('67123673T', 'Guillem', 'Machacón', 'Cosmico', '676534232', 'gmachacon@gmail.com', 4);
INSERT INTO `tbl_alumne` (`dni_alu`, `nom_alu`, `cognom1_alu`, `cognom2_alu`, `telf_alu`, `email_alu`, `classe`) VALUES ('45678998S', 'Lucas', 'Huerta', 'Sierra', '545982453', 'lhuerta@gmail.com', 4);
INSERT INTO `tbl_alumne` (`dni_alu`, `nom_alu`, `cognom1_alu`, `cognom2_alu`, `telf_alu`, `email_alu`, `classe`) VALUES ('45677698S', 'Jorge', 'Plateado', 'Dorado', '098765432', 'jdorado@gmail.com', 4);
INSERT INTO `tbl_alumne` (`dni_alu`, `nom_alu`, `cognom1_alu`, `cognom2_alu`, `telf_alu`, `email_alu`, `classe`) VALUES ('46678998S', 'Marc', 'Garcia', 'Cuevas', '567190122', 'mcuevas@gmail.com', 4);
INSERT INTO `tbl_alumne` (`dni_alu`, `nom_alu`, `cognom1_alu`, `cognom2_alu`, `telf_alu`, `email_alu`, `classe`) VALUES ('45678998S', 'Victor', 'Garcia', 'Patxi', '987654456', 'vgarcia@gmail.com', 4);
INSERT INTO `tbl_alumne` (`dni_alu`, `nom_alu`, `cognom1_alu`, `cognom2_alu`, `telf_alu`, `email_alu`, `classe`) VALUES ('45678998S', 'Marc', 'Ortiz', 'Simple', '598890122', 'Mortiz@gmail.com', 4);
INSERT INTO `tbl_alumne` (`dni_alu`, `nom_alu`, `cognom1_alu`, `cognom2_alu`, `telf_alu`, `email_alu`, `classe`) VALUES ('45678998R', 'Daniel', 'Garcia', 'Contreras', '567890922', 'dgarcia@gmail.com', 4);
INSERT INTO `tbl_alumne` (`dni_alu`, `nom_alu`, `cognom1_alu`, `cognom2_alu`, `telf_alu`, `email_alu`, `classe`) VALUES ('44678998P', 'Raul', 'Garcia', 'Ole', '878986543', 'rgarcia@gmail.com', 4);
INSERT INTO `tbl_alumne` (`dni_alu`, `nom_alu`, `cognom1_alu`, `cognom2_alu`, `telf_alu`, `email_alu`, `classe`) VALUES ('44673998S', 'Ruben', 'Ortega', 'Champion', '769746673', 'rortega@gmail.com', 4);
INSERT INTO `tbl_alumne` (`dni_alu`, `nom_alu`, `cognom1_alu`, `cognom2_alu`, `telf_alu`, `email_alu`, `classe`) VALUES ('44678998L', 'Carlos', 'Sanchez', 'Gonzalez', '769646673', 'csanchez@gmail.com', 4);
INSERT INTO `tbl_alumne` (`dni_alu`, `nom_alu`, `cognom1_alu`, `cognom2_alu`, `telf_alu`, `email_alu`, `classe`) VALUES ('44678998Q', 'Enrique', 'Trevijando', 'Garcia', '767429673', 'egarcia@gmail.com', 4);
INSERT INTO `tbl_alumne` (`dni_alu`, `nom_alu`, `cognom1_alu`, `cognom2_alu`, `telf_alu`, `email_alu`, `classe`) VALUES ('44678998S', 'Modesto', 'Mena', 'Voxista', '867645673', 'mmena@gmail.com', 4);
INSERT INTO `tbl_alumne` (`dni_alu`, `nom_alu`, `cognom1_alu`, `cognom2_alu`, `telf_alu`, `email_alu`, `classe`) VALUES ('24678998S', 'Santiago', 'Abascal', 'Conde', '76425928', 'sabascal@gmail.com', 4);
INSERT INTO `tbl_alumne` (`dni_alu`, `nom_alu`, `cognom1_alu`, `cognom2_alu`, `telf_alu`, `email_alu`, `classe`) VALUES ('54678998O', 'Pablo', 'Iglesias', 'Chepas', '967646673', 'piglesias@gmail.com', 4);
INSERT INTO `tbl_alumne` (`dni_alu`, `nom_alu`, `cognom1_alu`, `cognom2_alu`, `telf_alu`, `email_alu`, `classe`) VALUES ('44678998S', 'Sergio', 'Merino', 'Saceda', '467646673', 'smerino@gmail.com', 4);
--POR INSERTAR;
INSERT INTO `tbl_alumne` (`dni_alu`, `nom_alu`, `cognom1_alu`, `cognom2_alu`, `telf_alu`, `email_alu`, `classe`) VALUES ('43478998S', 'Helena', 'Villacampa', 'Lay', '467896673', 'hvillacampa@gmail.com', 4);
INSERT INTO `tbl_alumne` (`dni_alu`, `nom_alu`, `cognom1_alu`, `cognom2_alu`, `telf_alu`, `email_alu`, `classe`) VALUES ('43478978S', 'Holi', 'Palanca', 'Aireising', '652867932', 'hpalanca@gmail.com', 4);
INSERT INTO `tbl_alumne` (`dni_alu`, `nom_alu`, `cognom1_alu`, `cognom2_alu`, `telf_alu`, `email_alu`, `classe`) VALUES ('43478648S', 'Pedro', 'Sanchez', 'Cruz', '982867932', 'psanchez@gmail.com', 4);
-- FALTAN 10 MÁS;
INSERT INTO `tbl_alumne` (`dni_alu`, `nom_alu`, `cognom1_alu`, `cognom2_alu`, `telf_alu`, `email_alu`, `classe`) VALUES ('23478548S', 'Albert', 'Fenoi', 'Holaa', '982867987', 'afenoi@gmail.com', 4);
INSERT INTO `tbl_alumne` (`dni_alu`, `nom_alu`, `cognom1_alu`, `cognom2_alu`, `telf_alu`, `email_alu`, `classe`) VALUES ('23478648S', 'Alex', 'Toscano', 'Toksyno', '872867987', 'atoscano@gmail.com', 4);
INSERT INTO `tbl_alumne` (`dni_alu`, `nom_alu`, `cognom1_alu`, `cognom2_alu`, `telf_alu`, `email_alu`, `classe`) VALUES ('23478748S', 'Victor', 'Malaret', 'Malaretus', '987867987', 'vmalaret@gmail.com', 4);
INSERT INTO `tbl_alumne` (`dni_alu`, `nom_alu`, `cognom1_alu`, `cognom2_alu`, `telf_alu`, `email_alu`, `classe`) VALUES ('23478848S', 'Eric', 'Olmos', 'Ruíz', '567867987', 'eolmos@gmail.com', 4);
INSERT INTO `tbl_alumne` (`dni_alu`, `nom_alu`, `cognom1_alu`, `cognom2_alu`, `telf_alu`, `email_alu`, `classe`) VALUES ('23378642O', 'Marc', 'Gonzalez', 'Pradas', '272867987', 'mgonzalez@gmail.com', 4);
INSERT INTO `tbl_alumne` (`dni_alu`, `nom_alu`, `cognom1_alu`, `cognom2_alu`, `telf_alu`, `email_alu`, `classe`) VALUES ('23478642O', 'Isaac', 'ortiz', 'Rius', '572867987', 'iortiz@gmail.com', 4);
INSERT INTO `tbl_alumne` (`dni_alu`, `nom_alu`, `cognom1_alu`, `cognom2_alu`, `telf_alu`, `email_alu`, `classe`) VALUES ('23578642O', 'Joan', 'Martin', 'Suarez', '333867987', 'jmartin@gmail.com', 4);
INSERT INTO `tbl_alumne` (`dni_alu`, `nom_alu`, `cognom1_alu`, `cognom2_alu`, `telf_alu`, `email_alu`, `classe`) VALUES ('23678642O', 'Ignasi', 'Gonzalez', 'Javasripct', '787654234', 'igonzalez@gmail.com', 4);
INSERT INTO `tbl_alumne` (`dni_alu`, `nom_alu`, `cognom1_alu`, `cognom2_alu`, `telf_alu`, `email_alu`, `classe`) VALUES ('23778642O', 'Aurelio', 'Ramas', 'Pino', '656762534', 'aramas@gmail.com', 4);
INSERT INTO `tbl_alumne` (`dni_alu`, `nom_alu`, `cognom1_alu`, `cognom2_alu`, `telf_alu`, `email_alu`, `classe`) VALUES ('23878642O', 'Vicente', 'Toritlla', 'Cebollista', '902867987', 'vtortilla@gmail.com', 4);
INSERT INTO `tbl_alumne` (`dni_alu`, `nom_alu`, `cognom1_alu`, `cognom2_alu`, `telf_alu`, `email_alu`, `classe`) VALUES ('67478642O', 'Pedro', 'Galisteo', 'Monsalve', '672867987', 'pgalisteo@gmail.com', 4);
