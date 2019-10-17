-- heroku pg:psql

DROP TABLE IF EXISTS Stories;

CREATE TABLE Stories (
    story_id        SERIAL              NOT NULL PRIMARY KEY
,   numRatings      INTEGER             NOT NULL
,   totalRating     VARCHAR(255)        NOT NULL
,   title           VARCHAR(255)        NOT NULL
,   story           VARCHAR(4096)       NOT NULL
,   author          VARCHAR(64)         NOT NULL
,   created_date    TIMESTAMP           DEFAULT NOW()    
);

INSERT INTO STORIES (
    numRatings,
    totalRating,
    title,
    story,
    author
)
VALUES
(
    0,
    0,
    'An Alien Encounter',
    'This is a test. Nothing to see here.',
    'Shane Davenport'
);