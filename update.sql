-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema icandy
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema icandy
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `icandy` DEFAULT CHARACTER SET utf8mb4 ;
USE `icandy` ;

-- -----------------------------------------------------
-- Table `icandy`.`admin_type`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `icandy`.`admin_type` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `admin_type` VARCHAR(30) NULL DEFAULT NULL,
  `permissions` VARCHAR(50) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `icandy`.`admin_user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `icandy`.`admin_user` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(30) NULL DEFAULT NULL,
  `password` VARCHAR(50) NULL DEFAULT NULL,
  `first_name` VARCHAR(30) NULL DEFAULT NULL,
  `last_name` VARCHAR(30) NULL DEFAULT NULL,
  `type_id` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `type_id` (`type_id` ASC) VISIBLE)
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `icandy`.`cart_item`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `icandy`.`cart_item` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `id_session` INT(11) NULL DEFAULT NULL,
  `product_id` INT(11) NULL DEFAULT NULL,
  `quantidade` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `id_session` (`id_session` ASC) VISIBLE,
  INDEX `product_id` (`product_id` ASC) VISIBLE)
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `icandy`.`categorias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `icandy`.`categorias` (
  `IDcategoria` INT(10) NOT NULL AUTO_INCREMENT,
  `categoriaNome` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`IDcategoria`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `icandy`.`estoque`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `icandy`.`estoque` (
  `estoqueID` INT(11) NULL DEFAULT NULL,
  `quantidade` INT(11) NULL DEFAULT NULL)
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `icandy`.`login`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `icandy`.`login` (
  `IDlogin` INT(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`IDlogin`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `icandy`.`order_details`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `icandy`.`order_details` (
  `orderID` INT(11) NULL DEFAULT NULL,
  `userID` INT(11) NULL DEFAULT NULL,
  `total` DECIMAL(10,0) NULL DEFAULT NULL,
  `id_payment` INT(11) NULL DEFAULT NULL,
  INDEX `userID` (`userID` ASC) VISIBLE,
  INDEX `id_payment` (`id_payment` ASC) VISIBLE)
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `icandy`.`order_items`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `icandy`.`order_items` (
  `id` INT(11) NOT NULL,
  `orderID` INT(11) NULL DEFAULT NULL,
  `IDproduto` INT(11) NULL DEFAULT NULL,
  `quantidade` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `orderID` (`orderID` ASC) VISIBLE,
  INDEX `IDproduto` (`IDproduto` ASC) VISIBLE)
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `icandy`.`product`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `icandy`.`product` (
  `IDproduto` INT(11) NOT NULL,
  `nome` VARCHAR(50) NULL DEFAULT NULL,
  `descricao` VARCHAR(100) NULL DEFAULT NULL,
  `IDcategoria` INT(11) NULL DEFAULT NULL,
  `estoqueID` INT(11) NULL DEFAULT NULL,
  `preco` DECIMAL(10,0) NULL DEFAULT NULL,
  PRIMARY KEY (`IDproduto`),
  INDEX `IDcategoria` (`IDcategoria` ASC) VISIBLE,
  INDEX `estoqueID` (`estoqueID` ASC) VISIBLE)
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `icandy`.`shopping_session`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `icandy`.`shopping_session` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `userID` INT(11) NULL DEFAULT NULL,
  `total` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `userID` (`userID` ASC) VISIBLE)
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `icandy`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `icandy`.`user` (
  `userID` INT(10) NOT NULL AUTO_INCREMENT,
  `userEmail` VARCHAR(70) NOT NULL,
  `userPassword` VARCHAR(15) NOT NULL,
  `userFirstname` INT(25) NOT NULL,
  `userLastname` INT(30) NOT NULL,
  `userCity` VARCHAR(30) NOT NULL,
  `userEstate` VARCHAR(30) NOT NULL,
  `userCountry` VARCHAR(50) NOT NULL,
  `userPhone` INT(15) NOT NULL,
  `userAddress` VARCHAR(100) NOT NULL,
  `userZIP` INT(100) NOT NULL,
  `userRegistrationDate` TIMESTAMP(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  PRIMARY KEY (`userID`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `icandy`.`user_payment`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `icandy`.`user_payment` (
  `id_payment` INT(11) NOT NULL AUTO_INCREMENT,
  `userID` INT(11) NULL DEFAULT NULL,
  `payment_type` VARCHAR(30) NULL DEFAULT NULL,
  `provider` VARCHAR(30) NULL DEFAULT NULL,
  `account_no` INT(11) NULL DEFAULT NULL,
  `expiry` DATE NULL DEFAULT NULL,
  PRIMARY KEY (`id_payment`),
  INDEX `userID` (`userID` ASC) VISIBLE)
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8mb4;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
