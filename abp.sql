DROP TABLE  if exists equipa cascade;
DROP TABLE  if exists escalao cascade;
DROP TABLE  if exists disponibilidade cascade;
DROP TABLE  if exists agenda cascade;

DROP SCHEMA if exists public CASCADE;

CREATE SCHEMA public;

CREATE TABLE escalao (
  escalao_id SERIAL PRIMARY KEY,
  nome       VARCHAR NOT NULL
);

CREATE TABLE equipa (
  equipa_id SERIAL PRIMARY KEY,
  username VARCHAR NOT NULL UNIQUE,
  nome VARCHAR NOT NULL,
  password VARCHAR NOT NULL,
  escalao_id INTEGER NOT NULL,
   FOREIGN KEY (escalao_id) REFERENCES escalao (escalao_id)
);



CREATE TABLE agenda (
  agenda_id   SERIAL PRIMARY KEY,
  data DATE DEFAULT CURRENT_DATE,
  horario INTEGER CHECK (horario = 1 OR horario = 2),
  CONSTRAINT restricao UNIQUE (data, horario)
);

CREATE TABLE disponibilidade (
  disponibilidade_id   SERIAL PRIMARY KEY,
  equipa_id INTEGER NOT NULL,
  agenda_id INTEGER NOT NULL,
  organizador BOOLEAN NOT NULL,
  FOREIGN key (equipa_id) REFERENCES equipa(equipa_id),
  FOREIGN key (agenda_id) REFERENCES agenda(agenda_id)
);

INSERT into escalao(nome) VALUES ('Mini 8');
INSERT into escalao(nome) VALUES ('Mini 10');
INSERT into escalao(nome) VALUES ('Mini 12');


INSERT INTO equipa(username,nome,password,escalao_id) VALUES ('guifoes','Guifoes Sport Clube','79ec5b2abcbafe118d23f4f945407c506215b2d9',1);
INSERT INTO equipa(username,nome,password,escalao_id) VALUES ('dragonforce','Dragon Force Futebol Clube','a299337801b0d95d881020ace714245417aac3cc',1);





