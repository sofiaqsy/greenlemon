CREATE TABLE `greenlemon`.`usuario` (
  `idusuario` INT NOT NULL AUTO_INCREMENT,
  `correo` VARCHAR(100) NULL,
  `contrasena` VARCHAR(45) NULL,
  PRIMARY KEY (`idusuario`));


  INSERT INTO `greenlemon`.`usuario` (`correo`, `contrasena`) VALUES ('admin@greenlemon.com', 'admin');
