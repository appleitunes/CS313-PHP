CREATE TABLE List (
    list_id         SERIAL      PRIMARY KEY
,   story_id        SERIAL      REFERENCES Story(story_id)
);

CREATE TABLE Story (
    story_id        SERIAL              NOT NULL PRIMARY KEY
,   numRatings      INTEGER             NOT NULL
,   totalRating     VARCHAR(255)        NOT NULL
,   title           VARCHAR(255)        NOT NULL
,   story           VARCHAR(4096)
,   created_date    TIMESTAMP           DEFAULT NOW()    
);