DROP TABLE  if exists equipa cascade;
DROP TABLE  if exists escalao cascade;
DROP TABLE  if exists equipa_escalao cascade;
DROP TABLE  if exists confirmacao cascade;
DROP TABLE  if exists organizacao cascade;

DROP SCHEMA abp CASCADE;

CREATE SCHEMA abp;

create table equipa (
  equipa_id SERIAL PRIMARY KEY,
  username VARCHAR NOT NULL UNIQUE,
  nome VARCHAR NOT NULL,
  password varchar not null
);

CREATE table escalao (
  escalao_id SERIAL PRIMARY KEY,
  nome       VARCHAR NOT NULL
);

CREATE table equipa_escalao (
  equipa_id  INTEGER,
  escalao_id INTEGER,
  PRIMARY KEY (equipa_id, escalao_id),
  FOREIGN KEY (equipa_id) REFERENCES equipa(equipa_id),
  FOREIGN KEY (escalao_id) REFERENCES escalao (escalao_id)

);

CREATE table confirmacao (
  confirmacao_id   SERIAL PRIMARY KEY,
  confirmacao_data DATE DEFAULT CURRENT_DATE,
  equipa_id        INTEGER,
  FOREIGN KEY (equipa_id) REFERENCES equipa (equipa_id),
  UNIQUE (confirmacao_data, equipa_id)
);

CREATE TABLE organizacao (
  organizacao_id   SERIAL PRIMARY KEY,
  organizacao_data DATE DEFAULT CURRENT_DATE UNIQUE ,
  equipa_id        INTEGER,
  FOREIGN key (equipa_id) REFERENCES equipa(equipa_id)
);

INSERT INTO equipa(username,nome,password) VALUES ('guifoes','Guifoes Sport Clube','79ec5b2abcbafe118d23f4f945407c506215b2d9');
INSERT INTO equipa(username,nome,password) VALUES ('dragonforce','Dragon Force Futebol Clube','a299337801b0d95d881020ace714245417aac3cc');

INSERT into escalao(nome) VALUES ('Mini 8');
INSERT into escalao(nome) VALUES ('Mini 10');
INSERT into escalao(nome) VALUES ('Mini 12');

INSERT INTO equipa_escalao VALUES ('1','1');
INSERT INTO equipa_escalao VALUES ('1','2');
INSERT INTO equipa_escalao VALUES ('2','2');
INSERT INTO equipa_escalao VALUES ('2','3');

INSERT INTO confirmacao(confirmacao_data,equipa_id) VALUES('2016-05-10','1');
INSERT INTO confirmacao(confirmacao_data,equipa_id) VALUES('2016-05-10','2');
INSERT INTO confirmacao(confirmacao_data,equipa_id) VALUES('2016-05-11','1');


