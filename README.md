## Migrar la base de datos en orden

```bash
php artisan migrate --path=/database/migrations/2022_07_11_054339_region.php
```
```bash
php artisan migrate --path=/database/migrations/2022_07_11_054026_ciudad.php
```
```bash
php artisan migrate --path=/database/migrations/2022_07_11_053740_comuna.php
```
```bash
php artisan migrate
```
## estadoCivil
1- soltero
2 - casado
3 - viudo
4 - divorciado
5 - conviviente civil

## rol
1 - notario: veo contrato y lo firmo (lo puede rechazar)
2 - conservador: veo contrato y lo firmo (lo puede rechazar)
3 - cliente: veo contrato y lo firmo (lo puede rechazar)
4 - trabajador: subo contrato, crea clientes
5 - admin: crea usuarios

## estados
1 - activo
2 - inactivo

## Regiones - provincias - comunas
Region en laravel es Region
Provincia en la bd es Ciudad de laravel
Comuna en laravel es Comuna en la bd

## Inserts
INSERT INTO `region` (`idRegion`,`nombreRegion`,`estado`)
VALUES
	(1,'Arica y Parinacota',1),
	(2,'Tarapacá',1),
	(3,'Antofagasta',1),
	(4,'Atacama',1),
	(5,'Coquimbo',1),
	(6,'Valparaiso',1),
	(7,'Metropolitana de Santiago',1),
	(8,'Libertador General Bernardo OHiggins',1),
	(9,'Maule',1),
	(10,'Biobío',1),
	(11,'La Araucanía',1),
	(12,'Los Ríos',1),
	(13,'Los Lagos',1),
	(14,'Aisén del General Carlos Ibáñez del Campo',1),
	(15,'Magallanes y de la Antártica Chilena',1);

INSERT INTO `ciudad` (`idCiudad`,`nombreCiudad`,`region_idRegion`, `estado`)
VALUES
	(1,'Arica',1,1),
	(2,'Parinacota',1,1),
	(3,'Iquique',2,1),
	(4,'El Tamarugal',2,1),
	(5,'Antofagasta',3,1),
	(6,'El Loa',3,1),
	(7,'Tocopilla',3,1),
	(8,'Chañaral',4,1),
	(9,'Copiapó',4,1),
	(10,'Huasco',4,1),
	(11,'Choapa',5,1),
	(12,'Elqui',5,1),
	(13,'Limarí',5,1),
	(14,'Isla de Pascua',6,1),
	(15,'Los Andes',6,1),
	(16,'Petorca',6,1),
	(17,'Quillota',6,1),
	(18,'San Antonio',6,1),
	(19,'San Felipe de Aconcagua',6,1),
	(20,'Valparaiso',6,1),
	(21,'Chacabuco',7,1),
	(22,'Cordillera',7,1),
	(23,'Maipo',7,1),
	(24,'Melipilla',7,1),
	(25,'Santiago',7,1),
	(26,'Talagante',7,1),
	(27,'Cachapoal',8,1),
	(28,'Cardenal Caro',8,1),
	(29,'Colchagua',8,1),
	(30,'Cauquenes',9,1),
	(31,'Curicó',9,1),
	(32,'Linares',9,1),
	(33,'Talca',9,1),
	(34,'Arauco',10,1),
	(35,'Bio Bío',10,1),
	(36,'Concepción',10,1),
	(37,'Ñuble',10,1),
	(38,'Cautín',11,1),
	(39,'Malleco',11,1),
	(40,'Valdivia',12,1),
	(41,'Ranco',12,1),
	(42,'Chiloé',13,1),
	(43,'Llanquihue',13,1),
	(44,'Osorno',13,1),
	(45,'Palena',13,1),
	(46,'Aisén',14,1),
	(47,'Capitán Prat',14,1),
	(48,'Coihaique',14,1),
	(49,'General Carrera',14,1),
	(50,'Antártica Chilena',15,1),
	(51,'Magallanes',15,1),
	(52,'Tierra del Fuego',15,1),
	(53,'Última Esperanza',15,1);

    INSERT INTO `comuna` (`idComuna`,`nombreComuna`,`ciudad_idCiudad`,`estado`)
VALUES
	(1,'Arica',1,1),
	(2,'Camarones',1,1),
	(3,'General Lagos',2,1),
	(4,'Putre',2,1),
	(5,'Alto Hospicio',3,1),
	(6,'Iquique',3,1),
	(7,'Camiña',4,1),
	(8,'Colchane',4,1),
	(9,'Huara',4,1),
	(10,'Pica',4,1),
	(11,'Pozo Almonte',4,1),
	(12,'Antofagasta',5,1),
	(13,'Mejillones',5,1),
	(14,'Sierra Gorda',5,1),
	(15,'Taltal',5,1),
	(16,'Calama',6,1),
	(17,'Ollague',6,1),
	(18,'San Pedro de Atacama',6,1),
	(19,'María Elena',7,1),
	(20,'Tocopilla',7,1),
	(21,'Chañaral',8,1),
	(22,'Diego de Almagro',8,1),
	(23,'Caldera',9,1),
	(24,'Copiapó',9,1),
	(25,'Tierra Amarilla',9,1),
	(26,'Alto del Carmen',10,1),
	(27,'Freirina',10,1),
	(28,'Huasco',10,1),
	(29,'Vallenar',10,1),
	(30,'Canela',11,1),
	(31,'Illapel',11,1),
	(32,'Los Vilos',11,1),
	(33,'Salamanca',11,1),
	(34,'Andacollo',12,1),
	(35,'Coquimbo',12,1),
	(36,'La Higuera',12,1),
	(37,'La Serena',12,1),
	(38,'Paihuaco',12,1),
	(39,'Vicuña',12,1),
	(40,'Combarbalá',13,1),
	(41,'Monte Patria',13,1),
	(42,'Ovalle',13,1),
	(43,'Punitaqui',13,1),
	(44,'Río Hurtado',13,1),
	(45,'Isla de Pascua',14,1),
	(46,'Calle Larga',15,1),
	(47,'Los Andes',15,1),
	(48,'Rinconada',15,1),
	(49,'San Esteban',15,1),
	(50,'La Ligua',16,1),
	(51,'Papudo',16,1),
	(52,'Petorca',16,1),
	(53,'Zapallar',16,1),
	(54,'Hijuelas',17,1),
	(55,'La Calera',17,1),
	(56,'La Cruz',17,1),
	(57,'Limache',17,1),
	(58,'Nogales',17,1),
	(59,'Olmué',17,1),
	(60,'Quillota',17,1),
	(61,'Algarrobo',18,1),
	(62,'Cartagena',18,1),
	(63,'El Quisco',18,1),
	(64,'El Tabo',18,1),
	(65,'San Antonio',18,1),
	(66,'Santo Domingo',18,1),
	(67,'Catemu',19,1),
	(68,'Llaillay',19,1),
	(69,'Panquehue',19,1),
	(71,'San Felipe',19,1),
	(72,'Santa María',19,1),
	(73,'Casablanca',20,1),
	(74,'Concón',20,1),
	(75,'Juan Fernández',20,1),
	(76,'Puchuncaví',20,1),
	(77,'Quilpué',20,1),
	(78,'Quintero',20,1),
	(79,'Valparaíso',20,1),
	(80,'Villa Alemana',20,1),
	(81,'Viña del Mar',20,1),
	(82,'Colina',21,1),
	(83,'Lampa',21,1),
	(84,'Tiltil',21,1),
	(85,'Pirque',22,1),
	(86,'Puente Alto',22,1),
	(87,'San José de Maipo',22,1),
	(88,'Buin',23,1),
	(89,'Calera de Tango',23,1),
	(90,'Paine',23,1),
	(91,'San Bernardo',23,1),
	(92,'Alhué',24,1),
	(93,'Curacaví',24,1),
	(94,'María Pinto',24,1),
	(95,'Melipilla',24,1),
	(96,'San Pedro',24,1),
	(97,'Cerrillos',25,1),
	(98,'Cerro Navia',25,1),
	(99,'Conchalí',25,1),
	(100,'El Bosque',25,1),
	(101,'Estación Central',25,1),
	(102,'Huechuraba',25,1),
	(103,'Independencia',25,1),
	(104,'La Cisterna',25,1),
	(105,'La Granja',25,1),
	(106,'La Florida',25,1),
	(107,'La Pintana',25,1),
	(108,'La Reina',25,1),
	(109,'Las Condes',25,1),
	(110,'Lo Barnechea',25,1),
	(111,'Lo Espejo',25,1),
	(112,'Lo Prado',25,1),
	(113,'Macul',25,1),
	(114,'Maipú',25,1),
	(115,'Ñuñoa',25,1),
	(116,'Pedro Aguirre Cerda',25,1),
	(117,'Peñalolén',25,1),
	(118,'Providencia',25,1),
	(119,'Pudahuel',25,1),
	(120,'Quilicura',25,1),
	(121,'Quinta Normal',25,1),
	(122,'Recoleta',25,1),
	(123,'Renca',25,1),
	(124,'San Miguel',25,1),
	(125,'San Joaquín',25,1),
	(126,'San Ramón',25,1),
	(127,'Santiago',25,1),
	(128,'Vitacura',25,1),
	(129,'El Monte',26,1),
	(130,'Isla de Maipo',26,1),
	(131,'Padre Hurtado',26,1),
	(132,'Peñaflor',26,1),
	(133,'Talagante',26,1),
	(134,'Codegua',27,1),
	(135,'Coínco',27,1),
	(136,'Coltauco',27,1),
	(137,'Doñihue',27,1),
	(138,'Graneros',27,1),
	(139,'Las Cabras',27,1),
	(140,'Machalí',27,1),
	(141,'Malloa',27,1),
	(142,'Mostazal',27,1),
	(143,'Olivar',27,1),
	(144,'Peumo',27,1),
	(145,'Pichidegua',27,1),
	(146,'Quinta de Tilcoco',27,1),
	(147,'Rancagua',27,1),
	(148,'Rengo',27,1),
	(149,'Requínoa',27,1),
	(150,'San Vicente de Tagua Tagua',27,1),
	(151,'La Estrella',28,1),
	(152,'Litueche',28,1),
	(153,'Marchihue',28,1),
	(154,'Navidad',28,1),
	(155,'Peredones',28,1),
	(156,'Pichilemu',28,1),
	(157,'Chépica',29,1),
	(158,'Chimbarongo',29,1),
	(159,'Lolol',29,1),
	(160,'Nancagua',29,1),
	(161,'Palmilla',29,1),
	(162,'Peralillo',29,1),
	(163,'Placilla',29,1),
	(164,'Pumanque',29,1),
	(165,'San Fernando',29,1),
	(166,'Santa Cruz',29,1),
	(167,'Cauquenes',30,1),
	(168,'Chanco',30,1),
	(169,'Pelluhue',30,1),
	(170,'Curicó',31,1),
	(171,'Hualañé',31,1),
	(172,'Licantén',31,1),
	(173,'Molina',31,1),
	(174,'Rauco',31,1),
	(175,'Romeral',31,1),
	(176,'Sagrada Familia',31,1),
	(177,'Teno',31,1),
	(178,'Vichuquén',31,1),
	(179,'Colbún',32,1),
	(180,'Linares',32,1),
	(181,'Longaví',32,1),
	(182,'Parral',32,1),
	(183,'Retiro',32,1),
	(184,'San Javier',32,1),
	(185,'Villa Alegre',32,1),
	(186,'Yerbas Buenas',32,1),
	(187,'Constitución',33,1),
	(188,'Curepto',33,1),
	(189,'Empedrado',33,1),
	(190,'Maule',33,1),
	(191,'Pelarco',33,1),
	(192,'Pencahue',33,1),
	(193,'Río Claro',33,1),
	(194,'San Clemente',33,1),
	(195,'San Rafael',33,1),
	(196,'Talca',33,1),
	(197,'Arauco',34,1),
	(198,'Cañete',34,1),
	(199,'Contulmo',34,1),
	(200,'Curanilahue',34,1),
	(201,'Lebu',34,1),
	(202,'Los Álamos',34,1),
	(203,'Tirúa',34,1),
	(204,'Alto Biobío',35,1),
	(205,'Antuco',35,1),
	(206,'Cabrero',35,1),
	(207,'Laja',35,1),
	(208,'Los Ángeles',35,1),
	(209,'Mulchén',35,1),
	(210,'Nacimiento',35,1),
	(211,'Negrete',35,1),
	(212,'Quilaco',35,1),
	(213,'Quilleco',35,1),
	(214,'San Rosendo',35,1),
	(215,'Santa Bárbara',35,1),
	(216,'Tucapel',35,1),
	(217,'Yumbel',35,1),
	(218,'Chiguayante',36,1),
	(219,'Concepción',36,1),
	(220,'Coronel',36,1),
	(221,'Florida',36,1),
	(222,'Hualpén',36,1),
	(223,'Hualqui',36,1),
	(224,'Lota',36,1),
	(225,'Penco',36,1),
	(226,'San Pedro de La Paz',36,1),
	(227,'Santa Juana',36,1),
	(228,'Talcahuano',36,1),
	(229,'Tomé',36,1),
	(230,'Bulnes',37,1),
	(231,'Chillán',37,1),
	(232,'Chillán Viejo',37,1),
	(233,'Cobquecura',37,1),
	(234,'Coelemu',37,1),
	(235,'Coihueco',37,1),
	(236,'El Carmen',37,1),
	(237,'Ninhue',37,1),
	(238,'Ñiquen',37,1),
	(239,'Pemuco',37,1),
	(240,'Pinto',37,1),
	(241,'Portezuelo',37,1),
	(242,'Quillón',37,1),
	(243,'Quirihue',37,1),
	(244,'Ránquil',37,1),
	(245,'San Carlos',37,1),
	(246,'San Fabián',37,1),
	(247,'San Ignacio',37,1),
	(248,'San Nicolás',37,1),
	(249,'Treguaco',37,1),
	(250,'Yungay',37,1),
	(251,'Carahue',38,1),
	(252,'Cholchol',38,1),
	(253,'Cunco',38,1),
	(254,'Curarrehue',38,1),
	(255,'Freire',38,1),
	(256,'Galvarino',38,1),
	(257,'Gorbea',38,1),
	(258,'Lautaro',38,1),
	(259,'Loncoche',38,1),
	(260,'Melipeuco',38,1),
	(261,'Nueva Imperial',38,1),
	(262,'Padre Las Casas',38,1),
	(263,'Perquenco',38,1),
	(264,'Pitrufquén',38,1),
	(265,'Pucón',38,1),
	(266,'Saavedra',38,1),
	(267,'Temuco',38,1),
	(268,'Teodoro Schmidt',38,1),
	(269,'Toltén',38,1),
	(270,'Vilcún',38,1),
	(271,'Villarrica',38,1),
	(272,'Angol',39,1),
	(273,'Collipulli',39,1),
	(274,'Curacautín',39,1),
	(275,'Ercilla',39,1),
	(276,'Lonquimay',39,1),
	(277,'Los Sauces',39,1),
	(278,'Lumaco',39,1),
	(279,'Purén',39,1),
	(280,'Renaico',39,1),
	(281,'Traiguén',39,1),
	(282,'Victoria',39,1),
	(283,'Corral',40,1),
	(284,'Lanco',40,1),
	(285,'Los Lagos',40,1),
	(286,'Máfil',40,1),
	(287,'Mariquina',40,1),
	(288,'Paillaco',40,1),
	(289,'Panguipulli',40,1),
	(290,'Valdivia',40,1),
	(291,'Futrono',41,1),
	(292,'La Unión',41,1),
	(293,'Lago Ranco',41,1),
	(294,'Río Bueno',41,1),
	(295,'Ancud',42,1),
	(296,'Castro',42,1),
	(297,'Chonchi',42,1),
	(298,'Curaco de Vélez',42,1),
	(299,'Dalcahue',42,1),
	(300,'Puqueldón',42,1),
	(301,'Queilén',42,1),
	(302,'Quemchi',42,1),
	(303,'Quellón',42,1),
	(304,'Quinchao',42,1),
	(305,'Calbuco',43,1),
	(306,'Cochamó',43,1),
	(307,'Fresia',43,1),
	(308,'Frutillar',43,1),
	(309,'Llanquihue',43,1),
	(310,'Los Muermos',43,1),
	(311,'Maullín',43,1),
	(312,'Puerto Montt',43,1),
	(313,'Puerto Varas',43,1),
	(314,'Osorno',44,1),
	(315,'Puero Octay',44,1),
	(316,'Purranque',44,1),
	(317,'Puyehue',44,1),
	(318,'Río Negro',44,1),
	(319,'San Juan de la Costa',44,1),
	(320,'San Pablo',44,1),
	(321,'Chaitén',45,1),
	(322,'Futaleufú',45,1),
	(323,'Hualaihué',45,1),
	(324,'Palena',45,1),
	(325,'Aisén',46,1),
	(326,'Cisnes',46,1),
	(327,'Guaitecas',46,1),
	(328,'Cochrane',47,1),
	(329,'O\'higgins',47,1),
	(330,'Tortel',47,1),
	(331,'Coihaique',48,1),
	(332,'Lago Verde',48,1),
	(333,'Chile Chico',49,1),
	(334,'Río Ibáñez',49,1),
	(335,'Antártica',50,1),
	(336,'Cabo de Hornos',50,1),
	(337,'Laguna Blanca',51,1),
	(338,'Punta Arenas',51,1),
	(339,'Río Verde',51,1),
	(340,'San Gregorio',51,1),
	(341,'Porvenir',52,1),
	(342,'Primavera',52,1),
	(343,'Timaukel',52,1),
	(344,'Natales',53,1),
	(345,'Torres del Paine',53,1);
