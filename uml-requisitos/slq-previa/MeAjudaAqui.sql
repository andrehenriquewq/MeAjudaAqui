CREATE DATABASE meajudaaqui
DEFAULT CHARACTER SET utf8
DEFAULT COLLATE utf8_general_ci;
USE meajudaaqui;

CREATE TABLE usuario(
  id_usuario INT(11) NOT NULL AUTO_INCREMENT,
  nome VARCHAR(30) NOT NULL,
  email VARCHAR(30) NOT NULL,
  senha VARCHAR(32) NOT NULL,
  tipo_usuario INT(11) NOT NULL,
  PRIMARY KEY (id_usuario)
  )
 DEFAULT CHARSET = utf8;

CREATE TABLE problema (
  id_problema INT(11) NOT NULL AUTO_INCREMENT,
  tipo_problema INT(11) NOT NULL,
  data_solicitacao DATETIME NOT NULL,
  descricao_texto VARCHAR(256),
  usuario_id_usuario INT(11) NOT NULL,
  PRIMARY KEY (id_problema),
  CONSTRAINT fk_problema_usuario1
    FOREIGN KEY (usuario_id_usuario)
    REFERENCES usuario (id_usuario)
    )
  DEFAULT CHARSET = utf8;



CREATE TABLE atendimento (
  id_atendimento INT(11) NOT NULL AUTO_INCREMENT,
  data_atendimento DATETIME NOT NULL,
  prazo_estabelecido DATE NOT NULL,
  status_conserto INT(11) NOT NULL,
  descricao_atendimento VARCHAR(256) NULL,
  problema_id_problema INT(11) NOT NULL,
  PRIMARY KEY (id_atendimento),
  CONSTRAINT fk_atendimento_problema1
    FOREIGN KEY (problema_id_problema)
    REFERENCES problema (id_problema)
    )
   DEFAULT CHARSET = utf8;

  CREATE TABLE tecnico (
  id_tecnico INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(60) NOT NULL,
  tipo_tecnico VARCHAR(20) NOT NULL,
  ocupado TINYINT NOT NULL,
  PRIMARY KEY (id_tecnico)
  )
  DEFAULT CHARSET = utf8;

  CREATE TABLE atendimento_tecnico (
  atendimento_id_atendimento INT(11) NOT NULL,
  tecnico_id_tecnico INT NOT NULL,
  PRIMARY KEY (atendimento_id_atendimento, tecnico_id_tecnico),
  CONSTRAINT fk_atendimento_tecnico_atendimento1
    FOREIGN KEY (atendimento_id_atendimento)
    REFERENCES atendimento (id_atendimento),
  CONSTRAINT fk_atendimento_has_tecnico_tecnico1
    FOREIGN KEY (tecnico_id_tecnico)
    REFERENCES tecnico (id_tecnico)
   )
  DEFAULT CHARSET = utf8;
