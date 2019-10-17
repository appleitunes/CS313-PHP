DROP TABLE IF EXISTS List, Story;

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

CREATE TABLE scripture (
  id SERIAL PRIMARY KEY NOT NULL,
  book VARCHAR(80) NOT NULL,
  chapter INT NOT NULL,
  verse INT NOT NULL,
  content VARCHAR(4000) NOT NULL
);

DROP TABLE IF EXISTS scriptures;

CREATE TABLE scriptures
(   scripture_id        SERIAL          PRIMARY KEY
,   book                VARCHAR(20)     NOT NULL
,   chapter             INTEGER         NOT NULL
,   verse               INTEGER                 
,   content             TEXT            NOT NULL
);


INSERT INTO scriptures
( book
, chapter
, verse
, content
)
VALUES
( 'Doctrine & Covenants'
, 88
, 49
, 'The light shineth in darkness, and the darkness comprehendeth it not; nevertheless, the day shall come when you shall comprehend even God, being quickened in him and by him.'
);


INSERT INTO scriptures
( book
, chapter
, verse
, content)
VALUES 
( 'John'
, 1
, 5
, 'And the light shineth in darkness; and the darkness comprehended it not.'    
);


INSERT INTO scriptures
( book
, chapter
, verse
, content)
VALUES 
( 'Doctrine & Covenants'
, 93
, 28
, 'He that keepeth his commandments receiveth truth and light, until he is glorified in truth and knoweth all things.'
);


INSERT INTO scriptures
( book
, chapter
, verse
, content)
VALUES
( 'Mosiah'
, 16
, 9
, 'He is the light and the life of the world; yea, a light that is endless, that can never be darkened; yea, and also a life which is endless, that there can be no more death.'
);