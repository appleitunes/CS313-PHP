-- heroku pg:psql
-- \i db/myDb.sql

DROP TABLE IF EXISTS Stories, Comment;

CREATE TABLE Stories (
    story_id        SERIAL              PRIMARY KEY
,   title           VARCHAR(255)        NOT NULL
,   story           VARCHAR(4096)       NOT NULL
,   author          VARCHAR(64)         NOT NULL
,   created_date    DATE                NOT NULL
);

CREATE TABLE Comment (
    comment_id      SERIAL              PRIMARY KEY
,   comment         VARCHAR(255)        NOT NULL
,   story_id        SERIAL              REFERENCES Stories (story_id)
,   created_date    DATE                NOT NULL
);