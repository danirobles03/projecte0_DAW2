SET NAMES utf8mb4;

CREATE DATABASE IF NOT EXISTS Proyecto0
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

GRANT ALL PRIVILEGES ON Proyecto0.* TO 'usuari';
FLUSH PRIVILEGES;

USE Proyecto0;


CREATE TABLE preguntes (
    id INT PRIMARY KEY AUTO_INCREMENT,
    imagen VARCHAR(500),
    answer1 VARCHAR(100),
    answer2 VARCHAR(100),
    answer3 VARCHAR(100),
    answer4 VARCHAR(100),
    correct_answer INT
);

BEGIN;

INSERT INTO preguntes (id, imagen, answer1, answer2, answer3, answer4, correct_answer) VALUES
(1, 'img/france.png', 'France', 'Italy', 'Germany', 'Spain', 1),
(2, 'img/germany.png', 'Belgium', 'Germany', 'Austria', 'Netherlands', 2),
(3, 'img/italy.png', 'Mexico', 'Hungary', 'Italy', 'Ireland', 3),
(4, 'img/spain.png', 'Portugal', 'Spain', 'Colombia', 'Romania', 2),
(5, 'img/japan.png', 'China', 'South Korea', 'Japan', 'Vietnam', 3),
(6, 'img/brazil.png', 'Argentina', 'Brazil', 'Peru', 'Chile', 2),
(7, 'img/canada.png', 'Canada', 'USA', 'UK', 'Australia', 1),
(8, 'img/australia.png', 'New Zealand', 'Australia', 'UK', 'South Africa', 2),
(9, 'img/india.png', 'Pakistan', 'Bangladesh', 'India', 'Nepal', 3),
(10, 'img/china.png', 'China', 'Japan', 'Taiwan', 'South Korea', 1),
(11, 'img/uk.png', 'Ireland', 'UK', 'Scotland', 'Wales', 2),
(12, 'img/usa.png', 'USA', 'Canada', 'Mexico', 'Cuba', 1),
(13, 'img/mexico.png', 'Spain', 'Mexico', 'Italy', 'Brazil', 2),
(14, 'img/argentina.png', 'Uruguay', 'Argentina', 'Paraguay', 'Bolivia', 2),
(15, 'img/russia.png', 'Russia', 'Czech Republic', 'Slovakia', 'Poland', 1),
(16, 'img/south_korea.png', 'Japan', 'South Korea', 'China', 'Thailand', 2),
(17, 'img/netherlands.png', 'Luxembourg', 'Netherlands', 'France', 'Belgium', 2),
(18, 'img/sweden.png', 'Norway', 'Finland', 'Sweden', 'Denmark', 3),
(19, 'img/norway.png', 'Iceland', 'Norway', 'Sweden', 'Denmark', 2),
(20, 'img/finland.png', 'Finland', 'Sweden', 'Estonia', 'Latvia', 1),
(21, 'img/portugal.png', 'Spain', 'Italy', 'Portugal', 'Brazil', 3),
(22, 'img/poland.png', 'Poland', 'Austria', 'Germany', 'Czech Republic', 1),
(23, 'img/romania.png', 'Romania', 'Moldova', 'Ukraine', 'Bulgaria', 1),
(24, 'img/ukraine.png', 'Russia', 'Ukraine', 'Belarus', 'Georgia', 2),
(25, 'img/greece.png', 'Cyprus', 'Greece', 'Italy', 'Turkey', 2),
(26, 'img/turkey.png', 'Turkey', 'Iran', 'Iraq', 'Syria', 1),
(27, 'img/egypt.png', 'Morocco', 'Egypt', 'Tunisia', 'Algeria', 2),
(28, 'img/south_africa.png', 'South Africa', 'Kenya', 'Nigeria', 'Ghana', 1),
(29, 'img/thailand.png', 'Thailand', 'Vietnam', 'Malaysia', 'Indonesia', 1),
(30, 'img/vietnam.png', 'Cambodia', 'Vietnam', 'Laos', 'Myanmar', 2);


COMMIT;