--
-- Script was generated by Devart dbForge Studio 2020 for MySQL, Version 9.0.689.0
-- Product home page: http://www.devart.com/dbforge/mysql/studio
-- Script date 07.12.2021 14:09:24
-- Server version: 8.0.27
-- Client version: 4.1
--

-- 
-- Disable foreign keys
-- 
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;

-- 
-- Set SQL mode
-- 
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- 
-- Set character set the client will use to send SQL statements to the server
--
SET NAMES 'utf8';

--
-- Set default database
--
USE countries_2;

--
-- Drop table `country`
--
DROP TABLE IF EXISTS country;

--
-- Drop table `currency`
--
DROP TABLE IF EXISTS currency;

--
-- Drop table `language`
--
DROP TABLE IF EXISTS language;

--
-- Drop table `region`
--
DROP TABLE IF EXISTS region;

--
-- Drop table `religion`
--
DROP TABLE IF EXISTS religion;

--
-- Set default database
--
USE countries_2;

--
-- Create table `religion`
--
CREATE TABLE religion (
  id_religion int NOT NULL AUTO_INCREMENT,
  religion varchar(255) DEFAULT NULL,
  PRIMARY KEY (id_religion)
)
ENGINE = INNODB,
AUTO_INCREMENT = 3,
CHARACTER SET utf8mb4,
COLLATE utf8mb4_0900_ai_ci;

--
-- Create table `region`
--
CREATE TABLE region (
  id_region int NOT NULL AUTO_INCREMENT,
  region varchar(255) DEFAULT NULL,
  PRIMARY KEY (id_region)
)
ENGINE = INNODB,
AUTO_INCREMENT = 5,
AVG_ROW_LENGTH = 5461,
CHARACTER SET utf8mb4,
COLLATE utf8mb4_0900_ai_ci;

--
-- Create table `language`
--
CREATE TABLE language (
  id_language int NOT NULL AUTO_INCREMENT,
  language varchar(255) DEFAULT NULL,
  PRIMARY KEY (id_language)
)
ENGINE = INNODB,
AUTO_INCREMENT = 4,
CHARACTER SET utf8mb4,
COLLATE utf8mb4_0900_ai_ci;

--
-- Create table `currency`
--
CREATE TABLE currency (
  id_currency int NOT NULL AUTO_INCREMENT,
  currency varchar(255) DEFAULT NULL,
  PRIMARY KEY (id_currency)
)
ENGINE = INNODB,
AUTO_INCREMENT = 5,
CHARACTER SET utf8mb4,
COLLATE utf8mb4_0900_ai_ci;

--
-- Create table `country`
--
CREATE TABLE country (
  country varchar(255) DEFAULT NULL,
  area varchar(255) DEFAULT NULL,
  population varchar(255) DEFAULT NULL,
  capital varchar(255) DEFAULT NULL,
  id_language int DEFAULT NULL,
  id_religion int DEFAULT NULL,
  id_region int DEFAULT NULL,
  id_currency int DEFAULT NULL
)
ENGINE = INNODB,
AVG_ROW_LENGTH = 5461,
CHARACTER SET utf8mb4,
COLLATE utf8mb4_0900_ai_ci;

--
-- Create foreign key
--
ALTER TABLE country
ADD CONSTRAINT FK_country_currency_id_currency FOREIGN KEY (id_currency)
REFERENCES currency (id_currency);

--
-- Create foreign key
--
ALTER TABLE country
ADD CONSTRAINT FK_country_language_id_language FOREIGN KEY (id_language)
REFERENCES language (id_language);

--
-- Create foreign key
--
ALTER TABLE country
ADD CONSTRAINT FK_country_region_id_region FOREIGN KEY (id_region)
REFERENCES region (id_region);

--
-- Create foreign key
--
ALTER TABLE country
ADD CONSTRAINT FK_country_religion_id_religion FOREIGN KEY (id_religion)
REFERENCES religion (id_religion);

-- 
-- Dumping data for table religion
--
INSERT INTO religion VALUES
(1, 'christianity'),
(2, 'buddhism');

-- 
-- Dumping data for table region
--
INSERT INTO region VALUES
(1, 'eastern europe'),
(2, 'central europe'),
(3, 'asia');

-- 
-- Dumping data for table language
--
INSERT INTO language VALUES
(1, 'Russian'),
(2, 'German'),
(3, 'Japanese');

-- 
-- Dumping data for table currency
--
INSERT INTO currency VALUES
(1, 'dollar'),
(2, 'euro'),
(3, 'jena'),
(4, 'ruble');

-- 
-- Dumping data for table country
--
INSERT INTO country VALUES
('Russia', '17 098 246 км²', '145 975 300 чел', 'Moscow', 1, 1, 1, 4),
('Germany', '357 578 км²', '83 190 556 чел', 'Berlin', 2, 1, 2, 2),
('Japan', '377 944 км²', '125 552 000 чел', 'Tokyo', 3, 2, 3, 3),
('Belgium', '30 552  км²', '11 492 641 чел', 'Brussels', 2, 1, 2, 2);

-- 
-- Restore previous SQL mode
-- 
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;

-- 
-- Enable foreign keys
-- 
/*!40014 SET FOREIGN_KEY_CHECKS = @OLD_FOREIGN_KEY_CHECKS */;