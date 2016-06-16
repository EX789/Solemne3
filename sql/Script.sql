-- Generado por Oracle SQL Developer Data Modeler 4.0.3.853
--   en:        2016-06-02 13:34:53 CLT
--   sitio:      Oracle Database 11g
--   tipo:      Oracle Database 11g


SET NAMES utf8;

SET SQL_MODE='';

create database if not exists `bd_arriendo`;

USE `bd_arriendo`;

CREATE
  TABLE Arriendo_Juego
  (
    Cliente_rut    VARCHAR(20) NOT NULL ,
    Juego_codigo   VARCHAR (10) NOT NULL ,
    valor_arriendo INTEGER NOT NULL ,
    fecha_arriendo DATE NOT NULL
  ) ;
ALTER TABLE Arriendo_Juego ADD CONSTRAINT Arriendo_Juego_PK PRIMARY KEY (
Cliente_rut, Juego_codigo ) ;

CREATE
  TABLE Cliente
  (
    rut              VARCHAR(20) NOT NULL ,
    nombre           VARCHAR (60) NOT NULL ,
    fecha_nacimiento DATE NOT NULL
  ) ;
ALTER TABLE Cliente ADD CONSTRAINT Cliente_PK PRIMARY KEY ( rut ) ;

CREATE
  TABLE Juego
  (
    codigo      VARCHAR (10) NOT NULL ,
    nombre      VARCHAR (20) NOT NULL ,
    restriccion CHAR (1) NOT NULL ,
    valor       INTEGER NOT NULL
  ) ;
ALTER TABLE Juego ADD CONSTRAINT Juego_PK PRIMARY KEY ( codigo ) ;

ALTER TABLE Arriendo_Juego ADD CONSTRAINT FK_ASS_1 FOREIGN KEY ( Cliente_rut )
REFERENCES Cliente ( rut ) ;

ALTER TABLE Arriendo_Juego ADD CONSTRAINT FK_ASS_2 FOREIGN KEY ( Juego_codigo )
REFERENCES Juego ( codigo ) ;


-- Informe de Resumen de Oracle SQL Developer Data Modeler: 
-- 
-- CREATE TABLE                             3
-- CREATE INDEX                             0
-- ALTER TABLE                              5
-- CREATE VIEW                              0
-- CREATE PACKAGE                           0
-- CREATE PACKAGE BODY                      0
-- CREATE PROCEDURE                         0
-- CREATE FUNCTION                          0
-- CREATE TRIGGER                           0
-- ALTER TRIGGER                            0
-- CREATE COLLECTION TYPE                   0
-- CREATE STRUCTURED TYPE                   0
-- CREATE STRUCTURED TYPE BODY              0
-- CREATE CLUSTER                           0
-- CREATE CONTEXT                           0
-- CREATE DATABASE                          0
-- CREATE DIMENSION                         0
-- CREATE DIRECTORY                         0
-- CREATE DISK GROUP                        0
-- CREATE ROLE                              0
-- CREATE ROLLBACK SEGMENT                  0
-- CREATE SEQUENCE                          0
-- CREATE MATERIALIZED VIEW                 0
-- CREATE SYNONYM                           0
-- CREATE TABLESPACE                        0
-- CREATE USER                              0
-- 
-- DROP TABLESPACE                          0
-- DROP DATABASE                            0
-- 
-- REDACTION POLICY                         0
-- 
-- ERRORS                                   0
-- WARNINGS                                 0
