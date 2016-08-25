DROP TABLE  if exists equipa cascade;
DROP TABLE  if exists escalao cascade;
DROP TABLE  if exists disponibilidade cascade;
DROP TABLE  if exists agenda cascade;

DROP SCHEMA if exists public CASCADE;

CREATE SCHEMA public;

CREATE TABLE escalao (
  escalao_id SERIAL PRIMARY KEY,
  nome       INTEGER NOT NULL
);

CREATE TABLE equipa (
  equipa_id SERIAL PRIMARY KEY,
  username VARCHAR NOT NULL UNIQUE,
  nome VARCHAR NOT NULL,
  password VARCHAR NOT NULL
);


CREATE TABLE equipaEscalao (
  equipaescalao_id SERIAL PRIMARY KEY,
  equipa_id INTEGER,
  escalao_id INTEGER,
  FOREIGN KEY (equipa_id) REFERENCES equipa (equipa_id),
  FOREIGN KEY (escalao_id) REFERENCES escalao (escalao_id),
  CONSTRAINT equipa_escalao UNIQUE (equipa_id, escalao_id)
  );


CREATE TABLE agenda (
  agenda_id   SERIAL PRIMARY KEY,
  data DATE DEFAULT CURRENT_DATE,
  horario INTEGER CHECK (horario = 0 OR horario = 1),
  CONSTRAINT restricao_agenda UNIQUE (data, horario)
);

CREATE TABLE disponibilidade (
  disponibilidade_id   SERIAL PRIMARY KEY,
  equipaEscalao_id INTEGER NOT NULL,
  agenda_id INTEGER NOT NULL,
  organizador BOOLEAN NOT NULL,
  FOREIGN key (equipaescalao_id) REFERENCES equipaEscalao(equipaescalao_id),
  FOREIGN key (agenda_id) REFERENCES agenda(agenda_id),
  CONSTRAINT restricao_disponibilidade UNIQUE (equipaEscalao_id, agenda_id)
);

INSERT into escalao(nome) VALUES ('8');
INSERT into escalao(nome) VALUES ('10');
INSERT into escalao(nome) VALUES ('12');




INSERT INTO equipa(username,nome,password) VALUES ('guifoes','Guifoes Sport Clube','79ec5b2abcbafe118d23f4f945407c506215b2d9');
INSERT INTO equipa(username,nome,password) VALUES ('dragonforce','Dragon Force Futebol Clube','a299337801b0d95d881020ace714245417aac3cc');

INSERT INTO equipaEscalao(equipa_id,escalao_id) VALUES ('1','1');
INSERT INTO equipaEscalao(equipa_id,escalao_id) VALUES ('1','2');
INSERT INTO equipaEscalao(equipa_id,escalao_id) VALUES ('1','3');
INSERT INTO equipaEscalao(equipa_id,escalao_id) VALUES ('2','1');
INSERT INTO equipaEscalao(equipa_id,escalao_id) VALUES ('2','2');



