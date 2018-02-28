CREATE TABLE IF NOT EXISTS `items` (
  ID         INT AUTO_INCREMENT NOT NULL,
  categoryID INT                NOT NULL,
  itemName   VARCHAR(80)        NOT NULL,
  PRIMARY KEY (ID)
);

CREATE TABLE IF NOT EXISTS `images` (
  ID        INT AUTO_INCREMENT NOT NULL,
  itemId    INT                NOT NULL,
  imagePath TEXT               NOT NULL,
  PRIMARY KEY (ID)
);

CREATE TABLE IF NOT EXISTS `barracks` (
  ID       INT        NOT NULL AUTO_INCREMENT,
  userId   INT        NOT NULL,
  itemData MEDIUMTEXT NOT NULL,
  PRIMARY KEY (ID)
);
CREATE TABLE IF NOT EXISTS `category` (
  ID       INT  NOT NULL AUTO_INCREMENT,
  category TEXT NOT NULL,
  PRIMARY KEY (ID)
);
