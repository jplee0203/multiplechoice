

 
 CREATE TABLE qlist (
  ID int NOT NULL AUTO_INCREMENT,
  question VARCHAR(50),
  PRIMARY KEY (ID)
);
 CREATE TABLE qanswer (
  ID int NOT NULL AUTO_INCREMENT,
  correctanswer VARCHAR(50),
  answer1 VARCHAR(50),
  answer2 VARCHAR(50),
  answer3 VARCHAR(50),

  PRIMARY KEY (ID)
);