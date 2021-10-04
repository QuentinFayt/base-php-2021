-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema CRUD01
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `CRUD01` ;

-- -----------------------------------------------------
-- Schema CRUD01
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `CRUD01` DEFAULT CHARACTER SET utf8mb4 ;
USE `CRUD01` ;

-- -----------------------------------------------------
-- Table `CRUD01`.`user`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `CRUD01`.`user` ;

CREATE TABLE IF NOT EXISTS `CRUD01`.`user` (
  `iduser` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `userlogin` VARCHAR(80) NOT NULL,
  `userpwd` VARCHAR(255) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_bin' NOT NULL,
  `usermail` VARCHAR(150) NOT NULL,
  PRIMARY KEY (`iduser`))
ENGINE = InnoDB;

CREATE UNIQUE INDEX `user_login_UNIQUE` ON `CRUD01`.`user` (`userlogin` ASC);

CREATE UNIQUE INDEX `usermail_UNIQUE` ON `CRUD01`.`user` (`usermail` ASC);


-- -----------------------------------------------------
-- Table `CRUD01`.`article`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `CRUD01`.`article` ;

CREATE TABLE IF NOT EXISTS `CRUD01`.`article` (
  `idarticle` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `articletitle` VARCHAR(160) NOT NULL,
  `articletext` TEXT NOT NULL,
  `articledate` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
  `user_iduser` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`idarticle`),
  CONSTRAINT `fk_article_user`
    FOREIGN KEY (`user_iduser`)
    REFERENCES `CRUD01`.`user` (`iduser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_article_user_idx` ON `CRUD01`.`article` (`user_iduser` ASC);


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
