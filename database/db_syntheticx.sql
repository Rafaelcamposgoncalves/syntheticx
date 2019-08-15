-- MySQL Script generated by MySQL Workbench
-- Wed Aug 14 22:44:19 2019
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema db_syntheticx
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `db_syntheticx` DEFAULT CHARACTER SET utf8 ;
USE `db_syntheticx` ;

-- -----------------------------------------------------
-- Table `db_syntheticx`.`setor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_syntheticx`.`setor` (
  `id_setor` INT NOT NULL AUTO_INCREMENT,
  `nm_setor` VARCHAR(40) NOT NULL,
  `dt_create` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dt_update` TIMESTAMP NULL,
  PRIMARY KEY (`id_setor`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_syntheticx`.`cargo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_syntheticx`.`cargo` (
  `id_cargo` INT NOT NULL AUTO_INCREMENT,
  `nm_cargo` VARCHAR(40) NOT NULL,
  `id_setor` INT NOT NULL,
  `dt_create` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dt_update` TIMESTAMP NULL,
  PRIMARY KEY (`id_cargo`),
  CONSTRAINT `fk_cargo_setor_id_setor`
    FOREIGN KEY (`id_setor`)
    REFERENCES `db_syntheticx`.`setor` (`id_setor`)
    ON DELETE NO ACTION
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_syntheticx`.`status`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_syntheticx`.`status` (
  `id_status` INT NOT NULL AUTO_INCREMENT,
  `ds_status` VARCHAR(25) NOT NULL,
  `dt_create` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dt_update` TIMESTAMP NULL,
  PRIMARY KEY (`id_status`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_syntheticx`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_syntheticx`.`usuario` (
  `id_matricula` INT NOT NULL,
  `nm_usuario` VARCHAR(50) NOT NULL,
  `id_status` INT NOT NULL,
  `id_cargo` INT NOT NULL,
  `dt_create` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dt_update` TIMESTAMP NULL,
  PRIMARY KEY (`id_matricula`),
  INDEX `fk_usuario_cargo_idx` (`id_cargo` ASC),
  INDEX `fk_usuario_status_idx` (`id_status` ASC),
  CONSTRAINT `fk_usuario_cargo_id_cargo`
    FOREIGN KEY (`id_cargo`)
    REFERENCES `db_syntheticx`.`cargo` (`id_cargo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuario_status_id_status`
    FOREIGN KEY (`id_status`)
    REFERENCES `db_syntheticx`.`status` (`id_status`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_syntheticx`.`perfil`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_syntheticx`.`perfil` (
  `id_perfil` INT NOT NULL AUTO_INCREMENT,
  `ds_perfil` VARCHAR(35) NOT NULL,
  `dt_create` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dt_update` TIMESTAMP NULL,
  PRIMARY KEY (`id_perfil`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_syntheticx`.`login`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_syntheticx`.`login` (
  `id_matricula` INT NOT NULL,
  `ds_login` VARCHAR(35) NOT NULL,
  `ps_senha` VARCHAR(40) NOT NULL,
  `id_perfil` INT NOT NULL,
  `dt_update` TIMESTAMP NULL,
  INDEX `fk_login_perfil_id_perfil_idx` (`id_perfil` ASC),
  PRIMARY KEY (`id_matricula`),
  CONSTRAINT `fk_login_usuario_id_matricula`
    FOREIGN KEY (`id_matricula`)
    REFERENCES `db_syntheticx`.`usuario` (`id_matricula`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_login_perfil_id_perfil`
    FOREIGN KEY (`id_perfil`)
    REFERENCES `db_syntheticx`.`perfil` (`id_perfil`)
    ON DELETE NO ACTION
    ON UPDATE CASCADE)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;