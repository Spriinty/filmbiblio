-- MySQL Script generated by MySQL Workbench
-- Wed Dec 18 16:58:28 2019
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`table_films`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`table_films` (
  `idfilm` INT(2) NOT NULL AUTO_INCREMENT,
  `titre` VARCHAR(24) NOT NULL,
  `description` VARCHAR(421) NOT NULL,
  `anneesortie` INT(4) NOT NULL,
  `realisateur` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`idfilm`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
ROW_FORMAT = COMPACT;


-- -----------------------------------------------------
-- Table `mydb`.`theme_genre`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`theme_genre` (
  `id_genre` INT(2) NOT NULL AUTO_INCREMENT,
  `genre` VARCHAR(19) NOT NULL,
  PRIMARY KEY (`id_genre`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
ROW_FORMAT = COMPACT;


-- -----------------------------------------------------
-- Table `mydb`.`table_films_has_theme_genre`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`table_films_has_theme_genre` (
  `table_films_idfilm` INT(2) NOT NULL,
  `theme_genre_id_genre` INT(2) NOT NULL,
  PRIMARY KEY (`table_films_idfilm`, `theme_genre_id_genre`),
  INDEX `fk_table_films_has_theme_genre_theme_genre1_idx` (`theme_genre_id_genre` ASC),
  INDEX `fk_table_films_has_theme_genre_table_films_idx` (`table_films_idfilm` ASC),
  CONSTRAINT `fk_table_films_has_theme_genre_table_films`
    FOREIGN KEY (`table_films_idfilm`)
    REFERENCES `mydb`.`table_films` (`idfilm`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_table_films_has_theme_genre_theme_genre1`
    FOREIGN KEY (`theme_genre_id_genre`)
    REFERENCES `mydb`.`theme_genre` (`id_genre`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
