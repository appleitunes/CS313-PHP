-- heroku pg:psql
-- \i db/myDb.sql

DROP TABLE IF EXISTS Stories, Comment;

CREATE TABLE Stories (
    story_id        SERIAL              PRIMARY KEY
,   title           VARCHAR(612)        NOT NULL
,   story           VARCHAR(4096)       NOT NULL
,   author          VARCHAR(64)         NOT NULL
);

CREATE TABLE Comment (
    comment_id      SERIAL              PRIMARY KEY
,   comment         VARCHAR(612)        NOT NULL
,   story_id        SERIAL              REFERENCES Stories (story_id)
);