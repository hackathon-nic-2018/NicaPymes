-- MySQL Script generated by MySQL Workbench
-- Thu Nov 29 20:25:16 2018
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema Bdnicapymes
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema Bdnicapymes
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Bdnicapymes` DEFAULT CHARACTER SET utf8 ;
USE `Bdnicapymes` ;

-- -----------------------------------------------------
-- Table `Bdnicapymes`.`Usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Bdnicapymes`.`Usuario` (
  `Idusuario` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(25) NULL,
  `Apellido` VARCHAR(25) NULL,
  `Usuario` VARCHAR(15) NULL,
  `Contraceña` VARCHAR(45) NULL,
  `Telefono` VARCHAR(45) NULL,
  `Nombre_Empresa` VARCHAR(25) NULL,
  `Correo` VARCHAR(25) NULL,
  `Numero_empresa` INT NULL,
  `Direccion` VARCHAR(45) NULL,
  `Latitud` DECIMAL(10,2) NULL,
  `Longitud` DECIMAL(10,2) NULL,
  PRIMARY KEY (`Idusuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Bdnicapymes`.`Categoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Bdnicapymes`.`Categoria` (
  `Nombre` VARCHAR(25) NULL,
  `Descripcion` VARCHAR(300) NULL,
  `Estado` INT NULL,
  `Categoriacol` VARCHAR(45) NULL)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Bdnicapymes`.`Articulo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Bdnicapymes`.`Articulo` (
  `idAriticulos` INT NULL,
  `Idcategoria` INT NULL,
  `Nombre` VARCHAR(25) NULL,
  `Estado` INT NULL,
  `Descripcion` VARCHAR(45) NULL,
  `Foto` VARCHAR(65) NULL)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;