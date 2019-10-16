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

# Insert data into the new table
INSERT INTO scripture (book, chapter, verse, content)
  VALUES ('John', 1, 5, 'And the light shineth in darkness; and the darkness comprehended it not.');