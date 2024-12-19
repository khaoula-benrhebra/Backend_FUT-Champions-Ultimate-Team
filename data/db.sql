CREATE DATABASE players;

CREATE TABLE club(
id INT AUTO_INCREMENT PRIMARY KEY,
    club VARCHAR(70),
    logo VARCHAR(70)
);


CREATE TABLE nationnality(
id INT AUTO_INCREMENT PRIMARY KEY,
    nationnality VARCHAR(70),
    flag VARCHAR (70)
);

CREATE TABLE  player(
id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(70),
    photo VARCHAR(70),
    postion VARCHAR(70),
    rating INT ,
    status ENUM('reserve','On the field'),
    nationnality_id INT ,
    club_id INT,
    FOREIGN KEY (nationnality_id) REFERENCES nationnality(id),
    FOREIGN KEY (club_id) REFERENCES club(id)
);



CREATE TABLE GK_Player (
id INT PRIMARY KEY AUTO_INCREMENT,
    diving INT,
    handling INT,
    kicking INT,
    reflexes INT,
    speed INT,
    positioning INT,
    player_id INT,
    FOREIGN KEY (player_id) REFERENCES player(id)
);


CREATE TABLE Normal_player(
id INT PRIMARY KEY AUTO_INCREMENT,
    pace INT,
    shooting INT ,
    passing INT ,
    dribbling INT,
    defending INT,
    physical INT ,
    player_id INT ,
    FOREIGN KEY (player_id) REFERENCES player(id)
);
