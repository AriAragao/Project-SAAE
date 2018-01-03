SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema saae
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `saae` DEFAULT CHARACTER SET utf8 ;
USE `saae` ;

-- -----------------------------------------------------
-- Table `saae`.`Administrador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `saae`.`Administrador` (
  `adm_codigo` INT NOT NULL AUTO_INCREMENT,
  `adm_usuario` VARCHAR(100) NOT NULL,
  `adm_senha` VARCHAR(8) NOT NULL,
  `adm_mestre` CHAR(1) NOT NULL, -- S ou N
  PRIMARY KEY (`adm_codigo`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `saae`.`Cursos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `saae`.`Cursos` (
  `curso_codigo` INT NOT NULL AUTO_INCREMENT,
  `curso_nome` VARCHAR(100) NOT NULL,
  `curso_modalidade` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`curso_codigo`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `saae`.`Empresas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `saae`.`Empresas` (
  `emp_codigo` INT NOT NULL AUTO_INCREMENT,
  `emp_nome` VARCHAR(100) NOT NULL,
  `emp_tel` VARCHAR(15) NOT NULL,
  `emp_responsavel` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`emp_codigo`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `saae`.`Estagiarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `saae`.`Estagiarios` (
  `est_matricula` INT NOT NULL,
  `est_nome` VARCHAR(100) NOT NULL,
  `est_dtnascimento` DATE NOT NULL,
  `est_cpf` VARCHAR(11) NOT NULL,
  `est_pis` VARCHAR(11) NOT NULL,
  `est_email` VARCHAR(250) NOT NULL,
  `est_tel` VARCHAR(15) NOT NULL,
  PRIMARY KEY (`est_matricula`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `saae`.`Enderecos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `saae`.`Enderecos` (
  `end_codigo` INT NOT NULL AUTO_INCREMENT,
  `end_logradouro` VARCHAR(100) NOT NULL,
  `end_cidade` VARCHAR(100) NOT NULL,
  `end_estado` CHAR(2) NOT NULL,
  `Estagiarios_est_matricula` INT NOT NULL,
  PRIMARY KEY (`end_codigo`),
  INDEX `fk_Enderecos_Estagiarios_idx` (`Estagiarios_est_matricula` ASC),
  CONSTRAINT `fk_Enderecos_Estagiarios`
    FOREIGN KEY (`Estagiarios_est_matricula`)
    REFERENCES `saae`.`Estagiarios` (`est_matricula`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `saae`.`Professores`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `saae`.`Professores` (
  `prof_codigo` INT NOT NULL AUTO_INCREMENT,
  `prof_nome` VARCHAR(100) NOT NULL,
  `prof_cpf` VARCHAR(11) NOT NULL,
  `prof_tel` VARCHAR(15) NOT NULL,
  `prof_email` VARCHAR(100) NOT NULL,
  `prof_area` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`prof_codigo`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `saae`.`Estagios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `saae`.`Estagios` (
  `est_codigo` INT NOT NULL AUTO_INCREMENT,
  `est_inicio` DATE NOT NULL,
  `est_termino` DATE NOT NULL,
  `est_ano` DATE NOT NULL,
  `est_rel` LONGTEXT NULL,
  `Estagiarios_est_matricula` INT NOT NULL,
  `Empresas_emp_codigo` INT NOT NULL,
  `Professores_prof_codigo` INT NOT NULL,
  `Cursos_curso_codigo` INT NOT NULL,
  `Administrador_adm_codigo` INT NOT NULL,
  PRIMARY KEY (`est_codigo`),
  INDEX `fk_Estagios_Estagiarios1_idx` (`Estagiarios_est_matricula` ASC),
  INDEX `fk_Estagios_Empresas1_idx` (`Empresas_emp_codigo` ASC),
  INDEX `fk_Estagios_Professores1_idx` (`Professores_prof_codigo` ASC),
  INDEX `fk_Estagios_Cursos1_idx` (`Cursos_curso_codigo` ASC),
  INDEX `fk_Estagios_Administrador1_idx` (`Administrador_adm_codigo` ASC),
  CONSTRAINT `fk_Estagios_Estagiarios1`
    FOREIGN KEY (`Estagiarios_est_matricula`)
    REFERENCES `saae`.`Estagiarios` (`est_matricula`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Estagios_Empresas1`
    FOREIGN KEY (`Empresas_emp_codigo`)
    REFERENCES `saae`.`Empresas` (`emp_codigo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Estagios_Professores1`
    FOREIGN KEY (`Professores_prof_codigo`)
    REFERENCES `saae`.`Professores` (`prof_codigo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Estagios_Cursos1`
    FOREIGN KEY (`Cursos_curso_codigo`)
    REFERENCES `saae`.`Cursos` (`curso_codigo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Estagios_Administrador1`
    FOREIGN KEY (`Administrador_adm_codigo`)
    REFERENCES `saae`.`Administrador` (`adm_codigo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
