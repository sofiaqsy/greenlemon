CREATE TABLE `greenlemon`.`usuario` (
  `idusuario` INT NOT NULL AUTO_INCREMENT,
  `correo` VARCHAR(100) NULL,
  `contrasena` VARCHAR(45) NULL,
  PRIMARY KEY (`idusuario`));


  INSERT INTO `greenlemon`.`usuario` (`correo`, `contrasena`) VALUES ('admin@greenlemon.com', 'admin');


  CREATE TABLE `greenlemon`.`region` (
    `idregion` INT NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR(45) NULL,
    `descripcion` VARCHAR(45) NULL,
    PRIMARY KEY (`idregion`));


    ALTER TABLE `greenlemon`.`usuario`
    ADD COLUMN `nombre` VARCHAR(45) NULL DEFAULT NULL AFTER `contrasena`;

    UPDATE `greenlemon`.`usuario` SET `nombre`='GL ADMIN' WHERE `idusuario`='1';
