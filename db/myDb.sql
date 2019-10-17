-- heroku pg:psql
-- \i db/myDb.sql

DROP TABLE IF EXISTS Stories, Reviews;

CREATE TABLE Stories (
    story_id        SERIAL              PRIMARY KEY
,   title           VARCHAR(255)        NOT NULL
,   story           VARCHAR(4096)       NOT NULL
,   author          VARCHAR(64)         NOT NULL
);

CREATE TABLE Reviews (
    review_id       SERIAL              PRIMARY KEY
,   rating          INTEGER             NOT NULL
,   comment         VARCHAR(255)        NOT NULL
,   story_id        SERIAL              REFERENCES Stories (story_id)
);

INSERT INTO STORIES (
    title,
    story,
    author
)
VALUES
(
    'An Alien Encounter',
    'This is a test. Nothing to see here.',
    'Shane Davenport'
);

INSERT INTO STORIES (
    story_id,
    title,
    story,
    author
)
VALUES
(
    5,
    'Adam the Volleyball Champion',
    'Hello, World.',
    'Adam Chlarson'
);

INSERT INTO reviews (
    rating,
    comment,
    story_id
)
VALUES
(
    4,
    'This is trash',
    5
);