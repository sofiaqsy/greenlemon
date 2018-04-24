-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.39 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for cms
CREATE DATABASE IF NOT EXISTS `greenlemon` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci */;
USE `greenlemon`;

-- Dumping structure for table cms.archivo
CREATE TABLE IF NOT EXISTS `archivo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL DEFAULT '0',
  `Tipo` varchar(50) COLLATE utf8_spanish_ci NOT NULL DEFAULT '0' COMMENT '1 Imagen 2 Otros',
  `Peso` varchar(50) COLLATE utf8_spanish_ci NOT NULL DEFAULT '0',
  `Fecha` varchar(20) COLLATE utf8_spanish_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Dumping data for table cms.archivo: ~3 rows (approximately)
/*!40000 ALTER TABLE `archivo` DISABLE KEYS */;
INSERT INTO `archivo` (`id`, `Nombre`, `Tipo`, `Peso`, `Fecha`) VALUES
	(1, '140514041351.jpg', '1', '13068', '2014-05-14 04:13:51'),
	(2, '180414082812.jpg', '1', '13068', '14-04-2018 08:28:12'),
	(3, '180415030328.jpg', '1', '21148', '15-04-2018 03:03:28');
/*!40000 ALTER TABLE `archivo` ENABLE KEYS */;

-- Dumping structure for table cms.categoria
CREATE TABLE IF NOT EXISTS `categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Dumping data for table cms.categoria: ~7 rows (approximately)
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` (`id`, `Nombre`) VALUES
	(1, 'Novedades'),
	(2, 'Procesadores'),
	(3, 'MotherBoards'),
	(4, 'DiscosDuros'),
	(5, 'Memorias'),
	(6, 'Otros'),
	(7, 'Monitores');
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;

-- Dumping structure for table cms.entrada
CREATE TABLE IF NOT EXISTS `entrada` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Eliminado` tinyint(4) NOT NULL DEFAULT '0',
  `Tipo` tinyint(4) NOT NULL COMMENT '1 Blog 2 Paginas',
  `Nombre` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Contenido` text COLLATE utf8_spanish_ci,
  `Tags` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Fecha` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Lectura` int(11) DEFAULT '0',
  `Imagen` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Dumping data for table cms.entrada: ~15 rows (approximately)
/*!40000 ALTER TABLE `entrada` DISABLE KEYS */;
INSERT INTO `entrada` (`id`, `Eliminado`, `Tipo`, `Nombre`, `Descripcion`, `Contenido`, `Tags`, `Fecha`, `Lectura`, `Imagen`) VALUES
	(1, 0, 1, 'Nosotros', 'DescripciÃ³n de nuestra organizaciÃ³n.', '<p>Somos una empresa peruana conformada por profesionales con capacidad y experiencia quienes ofrecemos productos y servicios con un alto est&aacute;ndar de calidad a trav&eacute;s de un asesoramiento &iacute;ntegro con propuestas coherentes y viables que coadyuven a la satisfacci&oacute;n del cliente.</p>\n\n<p>Desde el primer momento, apostamos por la venta online de inform&aacute;tica, algo que hace a&ntilde;os era todav&iacute;a dif&iacute;cil de asimilar. La idea principal era, y sigue siendo a d&iacute;a de hoy, poder ofrecer a todos los amantes de la inform&aacute;tica, productos espec&iacute;ficos a precios accesibles sin renunciar a la calidad. Manteniendo la esencia del peque&ntilde;o comercio, estando cerca de los clientes y ofreciendo un trato especializado y personalizado.</p>\n\n<p>Si tienes preguntas o deseas recibir informaci&oacute;n sobre alguno de nuestros productos, puedes contactar con nosotros en nuestra p&aacute;gina web. Recibir&aacute;s una atenci&oacute;n totalmente personalizada &iexcl;y sin esperas! por parte de un equipo de profesionales altamente calificados.</p>\n\n<p>Tenemos a tu disposici&oacute;n uno de los mejores equipos log&iacute;sticos del Per&uacute; para garantizar el env&iacute;o seguro y a tiempo dentro de la fecha estipulada por su asesor. Procedemos al env&iacute;o de los pedidos sin demora, normalmente un d&iacute;a despu&eacute;s de que realizas el pedido si los art&iacute;culos pedidos est&aacute;n en stock.</p>\n\n<p>Gracias a nuestro esfuerzo diario, al trato personal y directo, y a nuestro servicio postventa, nuestra meta es posicionarnos como la tienda online Peruana de inform&aacute;tica y tecnolog&iacute;a m&aacute;s visitada.</p>\n', 'nosotros, quienes somos', '2014-05-14 04:14:25', 22, '180414082812.jpg'),
	(2, 0, 2, 'Mainboard MSI A68HM-E33 V2 FM2+ DDR3, USB 3.0', 'La Mainboard modelo A68HM-E33 V2 de MSI, le ofrece fundamentos de clase militar, lo cual le permite ProtecciÃ³n total. AsÃ­ mismo es compatible con los procesadores AMD A-Series SFM2 y AMD Athlon X4', '<p>La Mainboard modelo A68HM-E33 V2 de MSI, le ofrece fundamentos de clase militar, lo cual le permite Protecci&oacute;n total. As&iacute; mismo es compatible con los procesadores AMD A-Series SFM2 y AMD Athlon X4 SFM2. Tiene un tipo de memoria DDR3, adem&aacute;s, de una capacidad m&aacute;xima de 32 GB.</p>\r\n\r\n<p>Descripci&oacute;n r&aacute;pida: - Tipo de Socket: FM2+ AMD. - Expansi&oacute;n de Memoria: 32 GB. - Factor de forma: micro ATX. - Modelo: A68HM-E33 V2.</p>\r\n\r\n<p>Procesadores Compatibles: - Procesador AMD A-Series SFM2. - Procesador AMD Athlon X4 SFM2.</p>\r\n', '', '2017-05-14 04:15:15', 102, '2018001.jpg'),
	(3, 0, 2, 'Mainboard Intel SERVER S1400FP2', 'Una corriente principal de una tabla de zÃ³calo que admite un procesador Intel Xeon E5-2400 de la familia, seis mÃ³dulos DIMM, 14 a bordo de los puertos SATA / SAS y dos tarjetas de red.', '<p>Tarjeta de servidor de un socket de entrada de bajo costo para peque&ntilde;as empresas. La familia de la placa de servidor S1400FP es la placa de servidor de menor costo de Intel que admite Intelamp y Xeonamp, familia de productos del procesador E5-2400. La familia de placas Intel Server Board S1400FP ofrece ventajas reales de servidor que incluyen cinco ranuras PCIs para expansi&oacute;n de E / S, 14 puertos SATA incorporados para flexibilidad de almacenamiento, conectividad de servidor b&aacute;sico y administraci&oacute;n a trav&eacute;s del BMC integrado, adem&aacute;s de 6 ranuras de memoria registradas / sin b&uacute;fer. La familia de placas de servidor Intel S1400FP es ideal como servidor de nivel de entrada para peque&ntilde;as empresas o para implementaciones de almacenamiento donde la minimizaci&oacute;n de costos es imprescindible.</p>\r\n\r\n<p>Descripci&oacute;n r&aacute;pida: - Compatible: Procesador Intel Xeon E5-2400 v2 Familia de Productos. - puertos USB 2.0 x 6. - Factor de forma: ATX.</p>\r\n\r\n<p>Procesadores Compatibles: Procesador Intel Xeon E5-2400 v2 Familia de Productos.</p>\r\n', '', '2017-05-14 04:41:57', 1, '2018002.jpg'),
	(4, 0, 2, 'Procesador AMD A10-9700 10 Nucleos 3.50GHz 2MB L2, 65W', 'El avanzado procesador AMD Serie A estÃ¡ diseÃ±ado para aumentar la productividad, mejorar los contenidos multimedia y proporcionar una experiencia de juego de primera clase.', '<p>El avanzado procesador AMD Serie A est&aacute; dise&ntilde;ado para aumentar la productividad, mejorar los contenidos multimedia y proporcionar una experiencia de juego de primera clase, con una plataforma orientada al futuro que est&aacute; preparada para actualizarse cuando t&uacute; lo est&aacute;s. Empieza a jugar con el procesador AMD Serie A. Las tarjetas gr&aacute;ficas RadeonTM proporcionan el rendimiento que necesitas para jugar hoy en la plataforma orientada al futuro AM4, que est&aacute; preparada para actualizarse cuando t&uacute; est&aacute;s preparado para hacerte profesional.</p>\r\n\r\n<p>Descripci&oacute;n r&aacute;pida: - Modelo AMD A10-9700 10 n&uacute;cleos. - Socket AM4 AMD. - A-Series. - Velocidad 3.50 GHz.</p>\r\n\r\n<p>Tecnolog&iacute;as Avanzadas: - AMD Virtualization. - AVX2. - Compatible con AES. - FMA4.</p>\r\n', '', '2017-05-14 04:42:49', 4, '2018003.jpg'),
	(5, 0, 2, 'Procesador Intel Core I9-7900X Serie X S2066 10 Nucleos 3.30 GHz, 140W', 'Con un procesador Intel Core serie X, puede editar videos, realizar efectos 3D y componer una pista de sonido de manera simultÃ¡nea sin comprometer el desempeÃ±o de la computadora.', '<p>La familia de procesadores Intel Core serie X est&aacute; desbloqueada para proporcionar capacidades adicionales. Pase m&aacute;s tiempo creando y menos tiempo esperando. El procesador Intel Core serie X puede controlar la carga de trabajo m&aacute;s exigente. Cargue y edite sus videos en 360 grados r&aacute;pidamente y disfrute de la experiencia de videos en RV, todo en una impresionante calidad 4K. No hay l&iacute;mites para lo que puede crear en su nueva computadora. Cuando crea su mejor trabajo, necesita contar con la tecnolog&iacute;a de mayor respuesta para controlar varias tareas intensivas de la CPU el mismo tiempo. Con un procesador Intel Core serie X, puede editar videos, realizar efectos 3D y componer una pista de sonido de manera simult&aacute;nea sin comprometer el desempe&ntilde;o de la computadora. Aumente la potencia de procesamiento de su computadora. Disponible en procesadores Intel Core serie X, la tecnolog&iacute;a Intel Turbo Boost Max 3.0 permite identificar los dos n&uacute;cleos m&aacute;s r&aacute;pidos de su procesador y controlar sus cargas de trabajo m&aacute;s importantes. Gracias a un desempe&ntilde;o de subproceso &uacute;nico mejorado, obtiene el mejor desempe&ntilde;o posible fuera de la computadora.</p>\r\n\r\n<p>Descripci&oacute;n r&aacute;pida: - Modelo Intel Core i9-7900X 10 n&uacute;cleos. - Socket LGA2066. - Serie X. - Velocidad 3.30 GHz.</p>\r\n', '', '2017-05-14 04:47:34', 2, '2018004.jpg'),
	(6, 0, 2, 'Disco duro Toshiba L200 1TB, 5400rpm', 'El disco duro interno de Toshiba, estÃ¡ diseÃ±ado para usuarios profesionales que buscan mejorar el rendimiento de su PC.', '<p>El disco duro interno de Toshiba, est&aacute; dise&ntilde;ado para usuarios profesionales que buscan mejorar su PC. Asegura una grabaci&oacute;n estable que hace que la mayor parte del espacio del disco duro. Promueven el almacenamiento seguro con un dise&ntilde;o de carga de rampa que previene el da&ntilde;o en movimiento, as&iacute; como un sensor de choque manteniendo los contenidos multimedia almacenados seguro e intacto.</p>\r\n\r\n<p>Descripci&oacute;n r&aacute;pida: - Capacidad de almacenamiento: 1TB. - Interfaz: SATA 6.0 Gb/s. - Factor de forma: 2.5&quot;. - Velocidad de Giro: 5400 rpm. - Modelo: L200.</p>\r\n', '', '2017-05-14 05:19:09', 3, '2018005.jpg'),
	(7, 0, 2, 'Disco Duro Western Digital Red 6TB 5400rpm', 'El disco Duro de 6 TB Western Digital, ofrece un trabajo mÃ¡s completo de soluciones NAS y de Red Pro Red que abarca un total de 1 a 16 bahÃ­as.', '<p>Hay un disco WD Red para cada sistema NAS compatible, que le ayudar&aacute; a cubrir sus necesidades de almacenamiento de datos. Con discos de hasta 10 TB, WD Red ofrece una amplia gama de soluciones para los clientes que quieren crear una soluci&oacute;n de almacenamiento NAS de alto rendimiento. Creado para sistemas NAS de 1 a 8 compartimentos, WD Red tiene la capacidad de almacenar sus valiosos datos en una unidad eficiente. Con WD Red, est&aacute; preparado para cualquier tarea.</p>\r\n', '', '2017-05-14 05:19:41', 4, '2018006.jpg'),
	(8, 0, 2, 'Memoria Ram Crucial Ballistix Sport 4GB DDR3, 1600 MHz', 'Memoria interna de 4 GB, Tipo de memoria interna: DDR3, Velocidad de memoria del reloj: 1600 MHz.', '<p>Si eres nuevo en gaming y te gusta lo que Ballistix tiene para ofrecer, la memoria RAM Crucial Ballistix Sport es un gran lugar para comenzar. Esta l&iacute;nea fue creada para usuarios primerizos en el mundo gamer y entusiastas en general. Cuentan con difusores de calor para un buen rendimiento t&eacute;rmico, junto con los tiempos y tensiones est&aacute;ndar, lo que hace que este m&oacute;dulo fiable y de calidad sea ideal para una estabilidad y compatibilidad m&aacute;ximas.</p>\r\n', '', '2017-05-14 05:20:43', 3, '2018007.jpg'),
	(9, 0, 2, 'Memoria Ram Kingston HyperX Fury, 16 GB DDR4, 2133 MHz', 'Esta memoria cuenta con un elegante disipador de calor negro asimÃ©trico que brinda una mayor disipaciÃ³n tÃ©rmica para mantener baja la temperatura.', '<p>Con HyperX FURY DDR4 ganar&aacute; hasta la batalla m&aacute;s dura. Reconoce autom&aacute;ticamente su plataforma y realiza overclocking a la frecuencia m&aacute;s alta publicada (hasta 2666MHz). Esto te permitir&aacute; causar estragos! FURY DDR4 funciona a 1,2 V, incluso a 2666MHz, lo cual te ayuda a mantenerte fr&iacute;o mientras juegas. No necesitar&aacute;s alterar el voltaje para alcanzar velocidades m&aacute;s altas; lo cual significa que tendr&aacute;s liberada m&aacute;s potencia para la utilizaci&oacute;n de otro hardware en el sistema. El elegante disipador de calor negro asim&eacute;trico brinda una mayor disipaci&oacute;n t&eacute;rmica para mantener baja la temperatura y a su vez, destacarte por encima de todos.</p>\r\n\r\n<p>Descripci&oacute;n r&aacute;pida: - Capacidad: 16 GB. - Tipo: DDR4. - Voltaje: 1.2 V.</p>\r\n', '', '2017-05-14 05:20:49', 11, '2018008.jpg'),
	(10, 0, 2, 'Tarjeta de Video Asus ROG STRIX-GTX1070-O8G-GAMING 8GB 8008MHz', 'Esta tarjeta permitirÃ¡ a los jugadores disfrutar fÃ¡cilmente de las experiencias de realidad virtual.', '<p>ROG Strix GeoForce GTX 1070 viene con tecnolog&iacute;as exclusivas de ASUS, incluyendo DirectCU III Tecnolog&iacute;a que hace que su equipo sea un 30% m&aacute;s fresco y 3X m&aacute;s silencioso, del mismo modo el Aura RGB de iluminaci&oacute;n permite una personalizaci&oacute;n del sistema de juego. El HDMI VR permite a los jugadores disfrutar f&aacute;cilmente de las experiencias de realidad virtual.</p>\r\n\r\n<p>Para ofrecer una disipaci&oacute;n m&aacute;s eficiente, el disipador de la ASUS STRIX-GTX1070-O8G-GAMING ocupa 2 ranuras, comprueba el espacio disponible en tu equipo antes de adquirir este producto.</p>\r\n', '', '2017-06-14 05:20:49', 9, '2018009.jpg'),
	(11, 0, 2, 'Disco SÃ³lido Samsung 850 EVO 500GB', 'Proporcionan un rendimiento constante mejorado de hasta el 30% a pesar de la degradaciÃ³n, demostrando ser una de las unidades SSD mÃ¡s fiables del mercado', '<p>La exclusiva e innovadora arquitectura Samsung 3D V-NAND supone una revoluci&oacute;n en el mundo de las memorias flash en t&eacute;rminos de densidad, rendimiento y resistencia. Las memorias 3D V-NAND se fabrican apilando verticalmente 32 capas de celdas. As&iacute;, se consigue mayor densidad y rendimiento con un menor consumo energ&eacute;tico.</p>\r \r <p>La tecnolog&iacute;a TurboWrite te ofrece una &oacute;ptima experiencia de usuario gracias a su gran rendimiento de lectura / escritura. La unidad SSD 850 EVO de Samsung proporciona una velocidad secuencial de lectura de 540 MB/s y de escritura de 520 MB/s, las m&aacute;s altas dentro de su categor&iacute;a. Adem&aacute;s, mejorar&aacute; el rendimiento general en todos los QD de tu ordenador. Disfruta de una experiencia de usuario un 10% m&aacute;s satisfactoria* que con la anterior SSD 840 EVO, as&iacute; como un 1,9x m&aacute;s r&aacute;pida que en los anteriores modelos de 120 / 250 GB.</p>\r ', '', '2018-04-14 05:32:03', 51, '180414053203.jpg'),
	(12, 0, 1, 'Nuestros valores', 'Valores de nuestra empresa', '<p><strong>Trabajo en equipo</strong>: Es la causa com&uacute;n que debe prevalecer en todas nuestras actividades, incluyendo las relaciones con todos los integrantes de la organizaci&oacute;n, para efecto de lograr los objetivos de la empresa.</p>\n\n<p>&nbsp;</p>\n\n<p><strong>Colaboraci&oacute;n</strong>: Nos integramos con nuestros proveedores y clientes para mejorar d&iacute;a a d&iacute;a la calidad con los mismos para satisfacer sus necesidades.</p>\n\n<p>&nbsp;</p>\n\n<p><strong>Transparencia</strong>: La implicaci&oacute;n y compromiso del personal no ser&iacute;a posible sin una absoluta transparencia en los procesos, disponiendo el personal de la m&aacute;xima informaci&oacute;n de la empresa. Nos esforzamos para que nuestros colaboradores conozcan estos valores y sean capaces de transmitirlos al exterior.</p>\n\n<p>&nbsp;</p>\n\n<p><strong>Innovaci&oacute;n</strong>: Respondiendo a las necesidades presentes y futuras de nuestros clientes, a efecto de ofrecerles las tecnolog&iacute;as de vanguardia.</p>\n\n<p>&nbsp;</p>\n\n<p><strong>Servicio</strong>: Cumplimos con nuestros compromisos y nos hacemos responsables de nuestro rendimiento en todas nuestras decisiones y acciones, bas&aacute;ndonos en una gran voluntad de servicio por y para nuestros clientes.</p>\n', '', '2018-04-14 05:34:03', 27, '140527045654.png'),
	(13, 0, 1, 'VisiÃ³n y MisiÃ³n', 'VisiÃ³n y MisiÃ³n de nuestra empresa', '<p><strong>Nuestra Misi&oacute;n</strong></p>\n\n<p>Ofrecer un gran servicio en la comercializaci&oacute;n de soluciones inform&aacute;ticas de alta calidad, a trav&eacute;s de un excelente equipo de trabajo con el fin de satisfacer con rapidez, amabilidad, cortes&iacute;a y de manera integral las necesidades de nuestros clientes.</p>\n\n<p>&nbsp;</p>\n\n<p><strong>Nuestra Visi&oacute;n</strong></p>\n\n<p>Ser reconocidos como una empresa l&iacute;der del mercado inform&aacute;tico, consolidando y ampliando nuestra presencia a nivel nacional, brindando soluciones integrales para el mercado peruano apoyados en una gesti&oacute;n que se anticipe y adapte al cambio constante, innovando e incorporando las nuevas tecnolog&iacute;as disponibles, logrando ser una empresa rentable y s&oacute;lida.</p>\n', '', '2018-04-14 05:36:03', 21, '140527045516.jpg'),
	(14, 0, 2, 'Monitor Samsung LS19F355HNLXPE 18.5"', 'Monitor elegante de pantalla super delgada.', '<p>Con una incre&iacute;ble profundidad de 10 mm, delgado como un bol&iacute;grafo, el panel de una sola pieza es m&aacute;s que solo la mitad de profundidad que los monitores est&aacute;ndares de Samsung y con un soporte circular sencillo complementa la pantalla super delgada de manera elegante.</p>\r\n\r\n<p>Perfil incre&iacute;blemente delgado y dise&ntilde;o contempor&aacute;neo elegante. Panel curvo s&uacute;perdelgado: Con una incre&iacute;ble profundidad de 10 mm, delgado como un bol&iacute;grafo, el panel de una sola pieza es m&aacute;s que solo la mitad de profundidad que los monitores est&aacute;ndares de Samsung. Soporte circular sencillo: Un soporte circular sencillo complementa la pantalla super delgada de manera elegante. Panel posterior modelado: El patr&oacute;n horizontal en el panel trasero proporciona un acabado elegante y contempor&aacute;neo</p>\r\n', '', '15-04-2018 02:42:43', 2, '180415024340.jpg'),
	(15, 0, 1, 'Nuestros locales', 'Tenemos un local cerca de ti!!!', '<p>En todos nuestros locales, te brindaremos una atenci&oacute;n personalizada y de calidad:</p>\n\n<p><strong>** Lima **</strong></p>\n\n<p>Torre Tecnol&oacute;gica: Av. Arequipa 265.</p>\n\n<p>Lima Campus Lima Norte: Av. Alfredo Mendiola 6377, Los Olivos.</p>\n\n<p>Campus SJL: Av. El Sol cuadra 2, San Juan de Lurigancho.</p>\n\n<p>Campus Lima Sur: Carretera Panamericana Sur km 16, Villa El Salvador.</p>\n\n<p>Campus Ate: Carretera Central km 11.6 (A una cuadra del Real Plaza Santa Clara, Ate).</p>\n\n<p>&nbsp;</p>\n\n<p><strong>** Arequipa **</strong></p>\n\n<p>Av. Tacna y Arica 160, Arequipa.</p>\n\n<p>&nbsp;</p>\n\n<p><strong>** Chiclayo **</strong></p>\n\n<p>Esquina Prol. Augusto B. Legu&iacute;a con Av. Herman Meiner, Chiclayo.</p>\n', '', '15-04-2018 05:04:39', 1, NULL);
/*!40000 ALTER TABLE `entrada` ENABLE KEYS */;

-- Dumping structure for table cms.entradacategoria
CREATE TABLE IF NOT EXISTS `entradacategoria` (
  `Entrada_id` int(11) NOT NULL DEFAULT '0',
  `Categoria_id` int(11) NOT NULL DEFAULT '0',
  UNIQUE KEY `entrada_categoria` (`Entrada_id`,`Categoria_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Dumping data for table cms.entradacategoria: ~13 rows (approximately)
/*!40000 ALTER TABLE `entradacategoria` DISABLE KEYS */;
INSERT INTO `entradacategoria` (`Entrada_id`, `Categoria_id`) VALUES
	(2, 3),
	(3, 3),
	(4, 2),
	(5, 2),
	(6, 4),
	(7, 4),
	(8, 5),
	(9, 5),
	(10, 6),
	(11, 1),
	(11, 4),
	(14, 1),
	(14, 7);
/*!40000 ALTER TABLE `entradacategoria` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
