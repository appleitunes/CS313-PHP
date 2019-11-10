-- heroku pg:psql

DROP TABLE IF EXISTS Accounts;

CREATE TABLE Accounts (
    account_id      SERIAL              NOT NULL        PRIMARY KEY
,   username        VARCHAR(64)         NOT NULL
,   pass            VARCHAR(64)         NOT NULL
,   code            VARCHAR(10)         NOT NULL
,   CONSTRAINT      UC_Account          UNIQUE (code)
);