-- heroku pg:psql

DROP TABLE IF EXISTS Accounts, Comments;

CREATE TABLE Accounts (
    account_id      SERIAL              NOT NULL        PRIMARY KEY
,   username        VARCHAR(64)         NOT NULL
,   pass            VARCHAR(64)         NOT NULL
,   code            VARCHAR(64)         NOT NULL
,   CONSTRAINT      UC_Account          UNIQUE (code)
);

CREATE TABLE Comments (
    comment_id      SERIAL              NOT NULL        PRIMARY KEY
,   account_id      SERIAL              NOT NULL        REFERENCES Accounts (account_id)
,   account_code    VARCHAR(64)         NOT NULL        REFERENCES Accounts (code)
,   comment         VARCHAR(612)        NOT NULL
);