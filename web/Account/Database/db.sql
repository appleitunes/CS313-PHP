-- heroku pg:psql
-- \i Database/db.sql

DROP TABLE IF EXISTS Accounts;

CREATE TABLE Accounts (
    unique_id       SERIAL              PRIMARY KEY
,   username        VARCHAR(64)         NOT NULL
,   pass            VARCHAR(64)         NOT NULL
,   code            VARCHAR(64)         NOT NULL
);