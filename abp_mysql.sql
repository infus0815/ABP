SET FOREIGN_KEY_CHECKS = 0;
DROP TABLE  if exists equipa;
DROP TABLE  if exists escalao;
DROP TABLE  if exists disponibilidade;
DROP TABLE  if exists agenda;
DROP TABLE  if exists equipaEscalao;
DROP TABLE  if exists disabledMonth;

DROP SCHEMA if exists public;
SET FOREIGN_KEY_CHECKS = 1;

CREATE SCHEMA public;

CREATE TABLE escalao (
  escalao_id INTEGER AUTO_INCREMENT NOT NULL PRIMARY KEY,
  nome       INTEGER NOT NULL
);

CREATE TABLE equipa (
  equipa_id INTEGER AUTO_INCREMENT NOT NULL PRIMARY KEY,
  username VARCHAR(191) NOT NULL UNIQUE,
  nome VARCHAR(191) NOT NULL,
  password VARCHAR(191) NOT NULL
);


CREATE TABLE equipaEscalao (
  equipaescalao_id INTEGER AUTO_INCREMENT NOT NULL PRIMARY KEY,
  equipa_id INTEGER,
  escalao_id INTEGER,
  nome VARCHAR(191) NOT NULL DEFAULT '',
  FOREIGN KEY (equipa_id) REFERENCES equipa (equipa_id) ON DELETE CASCADE,
  FOREIGN KEY (escalao_id) REFERENCES escalao (escalao_id) ON DELETE CASCADE,
  CONSTRAINT equipa_escalao UNIQUE (equipa_id, escalao_id, nome)
  );


CREATE TABLE agenda (
  agenda_id   INTEGER AUTO_INCREMENT NOT NULL PRIMARY KEY,
  data DATE NOT NULL,
  horario INTEGER,
  CONSTRAINT horario_check CHECK (horario = 0 OR horario = 1),
  CONSTRAINT restricao_agenda UNIQUE (data, horario)
);

CREATE TABLE disponibilidade (
  disponibilidade_id   INTEGER AUTO_INCREMENT NOT NULL PRIMARY KEY,
  equipaescalao_id INTEGER NOT NULL,
  agenda_id INTEGER NOT NULL,
  organizador BOOLEAN NOT NULL,
  FOREIGN key (equipaescalao_id) REFERENCES equipaEscalao(equipaescalao_id) ON DELETE CASCADE,
  FOREIGN key (agenda_id) REFERENCES agenda(agenda_id) ON DELETE CASCADE,
  CONSTRAINT restricao_disponibilidade UNIQUE (equipaescalao_id, agenda_id)
);

CREATE TABLE disabledMonth (
  disabledmonth_id INTEGER AUTO_INCREMENT NOT NULL PRIMARY KEY,
  month INTEGER NOT NULL,
  year INTEGER NOT NULL,
  CONSTRAINT restricao_disabledmonth UNIQUE (month, year)
);

INSERT into escalao(nome) VALUES ('8');
INSERT into escalao(nome) VALUES ('10');
INSERT into escalao(nome) VALUES ('12');



INSERT INTO equipa(username,nome,password) VALUES ('guifoes','Guifoes Sport Clube','79ec5b2abcbafe118d23f4f945407c506215b2d9');
INSERT INTO equipa(username,nome,password) VALUES ('dragonforce','Dragon Force Futebol Clube','a299337801b0d95d881020ace714245417aac3cc');
INSERT INTO equipa(username,nome,password) VALUES ('academico','Académico Futebol Clube','170221e3153d19f790b4ef5409793a1378129dda');
INSERT INTO equipa(username,nome,password) VALUES ('5basket','Clube 5Basket','716d638e99633a576d5045af343b0ea6001dbdd7');
INSERT INTO equipa(username,nome,password) VALUES ('propaganda','Clube Propaganda de Natação','7d128be512582563e41759338f21cecd215f396e');
INSERT INTO equipa(username,nome,password) VALUES ('clubegaia','Futebol Clube de Gaia','6a7aa4e489f94a341f2e7bcbb738407672a5519f');
INSERT INTO equipa(username,nome,password) VALUES ('fcporto','F. C. Porto','348ccdc1172910da257304fa9893d69b444f0843');
INSERT INTO equipa(username,nome,password) VALUES ('admin','admin','dd94709528bb1c83d08f3088d4043f4742891f4f');


INSERT INTO equipaEscalao(nome, equipa_id,escalao_id) VALUES ('A','1','1');
INSERT INTO equipaEscalao(nome, equipa_id,escalao_id) VALUES ('B','1','1');
INSERT INTO equipaEscalao(equipa_id,escalao_id) VALUES ('1','2');
INSERT INTO equipaEscalao(equipa_id,escalao_id) VALUES ('1','3');
INSERT INTO equipaEscalao(equipa_id,escalao_id) VALUES ('2','1');
INSERT INTO equipaEscalao(equipa_id,escalao_id) VALUES ('2','2');
INSERT INTO equipaEscalao(equipa_id,escalao_id) VALUES ('3','1');
INSERT INTO equipaEscalao(equipa_id,escalao_id) VALUES ('3','2');
INSERT INTO equipaEscalao(equipa_id,escalao_id) VALUES ('3','3');
INSERT INTO equipaEscalao(equipa_id,escalao_id) VALUES ('4','1');
INSERT INTO equipaEscalao(nome, equipa_id,escalao_id) VALUES ('A','4','2');
INSERT INTO equipaEscalao(nome, equipa_id,escalao_id) VALUES ('B','4','2');
INSERT INTO equipaEscalao(equipa_id,escalao_id) VALUES ('4','3');
INSERT INTO equipaEscalao(equipa_id,escalao_id) VALUES ('5','1');
INSERT INTO equipaEscalao(equipa_id,escalao_id) VALUES ('6','1');
INSERT INTO equipaEscalao(equipa_id,escalao_id) VALUES ('6','3');
INSERT INTO equipaEscalao(equipa_id,escalao_id) VALUES ('7','1');
INSERT INTO equipaEscalao(equipa_id,escalao_id) VALUES ('7','2');
INSERT INTO equipaEscalao(equipa_id,escalao_id) VALUES ('7','3');
INSERT INTO equipaEscalao(equipa_id,escalao_id) VALUES ('8','1');
INSERT INTO equipaEscalao(equipa_id,escalao_id) VALUES ('8','2');
INSERT INTO equipaEscalao(equipa_id,escalao_id) VALUES ('8','3');
