CREATE TABLE `detalle_ventas` (
  `id_venta` int(11) NOT NULL,
  `id_estoque` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `cliente_name` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `producto_venta` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `codigo` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `lote` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `descuento_venta` decimal(11,2) NOT NULL,
  `delivery` decimal(11,2) NOT NULL,
  `fecha_entrega` date NOT NULL,
  `precio_compra` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio_venta` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_venta` date NOT NULL,
  `observaciones` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_producto` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `vencimiento` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_producto` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_compra` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `seguimiento` int(2) NOT NULL,
  `user_created_in` timestamp NULL DEFAULT current_timestamp(),
  `user_cpf` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE `estoque` (
  `id_estoque` int(11) NOT NULL,
  `id_compra` int(11) NOT NULL,
  `id_producto` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `producto` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` decimal(8,2) NOT NULL,
  `fecha_compra` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vencimiento` date NOT NULL,
  `tipo_producto` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codigo` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lote` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `puntos` int(10) NOT NULL,
  `estoque_created_in` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_cpf` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `ingresos_usuario` (
  `id_ingreso` int(11) NOT NULL,
  `texto_json` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ingreso_created_in` timestamp NULL DEFAULT current_timestamp(),
  `user_cpf` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE `tb_clientes` (
  `id_cliente` int(11) NOT NULL,
  `cliente_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cliente_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cliente_phone` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cliente_cellphone` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cliente_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cliente_birth` date DEFAULT NULL,
  `tipo_piel` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favorito` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cliente_created_in` timestamp NULL DEFAULT current_timestamp(),
  `user_cpf` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DNI` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE `tb_clientes1` (
  `id_cliente` int(11) NOT NULL,
  `texto_json` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_created_in` timestamp NULL DEFAULT current_timestamp(),
  `user_cpf` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE `tb_compras` (
  `id_compra` int(11) NOT NULL,
  `fecha_compra` date DEFAULT NULL,
  `fecha_recepcion` date DEFAULT NULL,
  `descuento_compra` int(3) DEFAULT NULL,
  `precio_compra` decimal(7,2) DEFAULT NULL,
  `flete` decimal(7,2) DEFAULT NULL,
  `impuesto` decimal(7,2) NOT NULL,
  `id_producto` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_producto` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `codigo` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `lote` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `puntos` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `compra_created_in` timestamp NULL DEFAULT current_timestamp(),
  `user_cpf` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE `tb_compras1` (
  `id_compra` int(11) NOT NULL,
  `compra_json` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `compra_created_in` timestamp NULL DEFAULT current_timestamp(),
  `user_cpf` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE `tb_productos` (
  `id_producto` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipo_producto` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_price` decimal(7,2) DEFAULT NULL,
  `codigo` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `puntos` int(10) NOT NULL,
  `producto_created_in` timestamp NULL DEFAULT current_timestamp(),
  `user_cpf` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO `tb_productos` (`id_producto`, `product_name`, `tipo_producto`, `product_price`, `codigo`, `puntos`, `producto_created_in`, `user_cpf`, `status`) VALUES
(1, 'Kit TimeWise Repair Volu-Firm', 'Cuidado de la Piel', 529.00, '10126106', 354, '2021-03-17 05:31:47', '41680910', ''),
(2, 'Espuma Limpiadora Facial Volu-Firm TimeWise Repair', 'Cuidado de la Piel', 59.00, '10053074', 42, '2021-03-17 06:40:31', '41680910', ''),
(3, 'Locion Facial Efecto Reafirmante Volu-Firm TimeWise Repair Formula Avanzada', 'Cuidado de la Piel', 149.00, '10108837', 95, '2021-03-17 06:42:32', '41680910', ''),
(4, 'Crema Facial para el Dia Efecto Reparador FPS 30 Volu-Firm TimeWise Repair', 'Cuidado de la Piel', 139.00, '10120566', 80, '2021-03-17 06:55:18', '41680910', ''),
(5, 'Crema Facial Nocturna Efecto Reparador con Retinol Volu-Firm TimeWise Repair', 'Cuidado de la Piel', 139.00, '10052885', 80, '2021-03-17 06:57:10', '41680910', ''),
(6, 'Crema de Accion Renovadora para el Contorno de los Ojos Volu-Firm TimeWise Repair', 'Cuidado de la Piel', 99.00, '10047376', 62, '2021-03-17 07:10:27', '41680910', ''),
(7, 'Gel Facial Efecto Peeling Revealing Radiance TimeWise Repair', 'Cuidado de la Piel', 119.00, '10088897', 70, '2021-03-17 07:11:29', '41680910', ''),
(8, 'Crema Efecto Rellenador de Arrugas TimeWise Repair VoluFill', 'Cuidado de la Piel', 109.00, '10071883', 74, '2021-03-17 07:12:55', '41680910', ''),
(9, 'Combinacion Ideal TimeWise Age Minimize 3D - Piel Normal a Seca', 'Cuidado de la Piel', 239.00, '10146813', 175, '2021-03-17 07:15:13', '41680910', ''),
(10, 'Limpiadora Facial 4 en 1 TimeWise Age Minimize 3D - Piel Normal a Seca', 'Cuidado de la Piel', 49.00, '10173101', 36, '2021-03-17 07:16:15', '41680910', ''),
(11, 'Crema Facial para el Dia FPS 30 TimeWise Age Minimize 3D - Piel Normal a Seca', 'Cuidado de la Piel', 72.00, '10173125', 47, '2021-03-17 07:36:36', '41680910', ''),
(12, 'Crema Facial Nocturna TimeWise Age Minimize 3D- Piel Normal a Seca', 'Cuidado de la Piel', 82.00, '10173098', 47, '2021-03-17 07:37:47', '41680910', ''),
(13, 'Crema para el Contorno de Ojos TimeWise Age Minimize 3D', 'Cuidado de la Piel', 79.00, '10089008', 50, '2021-03-17 07:47:12', '41680910', ''),
(14, 'Crema Facial para el Dia TimeWise Age Minimize 3D - Piel Normal a Seca', 'Cuidado de la Piel', 72.00, '10173105', 47, '2021-03-17 07:49:51', '41680910', ''),
(15, 'Combinacion Ideal TimeWise Age Minimize 3D   - Piel Combinada a Grasa', 'Cuidado de la Piel', 239.00, '10146812', 175, '2021-03-17 07:51:32', '41680910', ''),
(16, 'Limpiadora Facial 4 en 1 TimeWise Age Minimize 3D - Piel Combinada a Grasa', 'Cuidado de la Piel', 49.00, '10088998', 36, '2021-03-17 08:01:45', '41680910', ''),
(17, 'Crema Facial para el Dia FPS 30 TimeWise Age Minimize 3D - Piel Combinada a Grasa', 'Cuidado de la Piel', 72.00, '10173097', 47, '2021-03-17 08:03:01', '41680910', ''),
(18, 'Crema Facial Nocturna TimeWise Age Minimize 3D - Piel Combinada a Grasa', 'Cuidado de la Piel', 82.00, '10173103', 47, '2021-03-17 08:03:47', '41680910', ''),
(19, 'Crema Facial para el Dia TimeWise Age Minimize 3D - Piel Combinada a Grasa', 'Cuidado de la Piel', 72.00, '10173108', 47, '2021-03-17 08:07:56', '41680910', ''),
(20, 'Sistema para Micro Exfoliacion Plus TimeWise', 'Cuidado de la Piel', 139.00, '10151790', 100, '2021-03-17 08:09:48', '41680910', ''),
(21, 'Microexfoliante Refinador TimeWise (PASO 1)', 'Cuidado de la Piel', 83.00, '10145950', 50, '2021-03-17 08:11:12', '41680910', ''),
(22, 'Minimizador de Poros TimeWise (PASO 2) ', 'Cuidado de la Piel', 83.00, '10152828', 50, '2021-03-17 08:12:13', '41680910', ''),
(23, 'Suero Corrector de Tono Facial TimeWise', 'Cuidado de la Piel', 97.00, '10150153', 66, '2021-03-17 08:14:06', '41680910', ''),
(24, 'Gel Limpiador Botanical Effects', 'Cuidado de la Piel', 35.00, '10135751', 26, '2021-03-17 08:15:44', '41680910', ''),
(25, 'Mascarilla Exfoliante Botanical Effects', 'Cuidado de la Piel', 40.00, '10084855', 28, '2021-03-17 08:16:30', '41680910', ''),
(26, 'Tonico Facial Refrescante Botanical Effects', 'Cuidado de la Piel', 35.00, '10084853', 24, '2021-03-17 08:18:09', '41680910', ''),
(27, 'Locion Humectante Facial FPS 30 Botanical Effects', 'Cuidado de la Piel', 51.00, '10084849', 30, '2021-03-17 08:18:57', '41680910', ''),
(28, 'Gel Humectante Botanical Effects', 'Cuidado de la Piel', 47.00, '10132974', 28, '2021-03-17 08:20:13', '41680910', ''),
(29, 'Agua Micelar', 'Cuidado de la Piel', 45.00, '10160886', 27, '2021-03-17 08:21:42', '41680910', ''),
(30, 'Locion Desmaquillante de Ojos Libre de Aceite', 'Cuidado de la Piel', 49.00, '10029726', 29, '2021-03-17 08:22:35', '41680910', ''),
(31, 'Mascarilla humectante en gel efecto renovador', 'Cuidado de la Piel', 49.00, '10151329', 28, '2021-03-17 08:23:26', '41680910', ''),
(32, 'Mascarilla Facial de Limpieza Profunda con Carbon Clear Proof', 'Cuidado de la Piel', 52.00, '10094148', 30, '2021-03-17 08:25:09', '41680910', ''),
(33, 'Gel Refrescante para Parpados Mary Kay', 'Cuidado de la Piel', 35.00, '10029739', 22, '2021-03-17 08:26:25', '41680910', ''),
(34, 'Parches de Hidrogel para ojos', 'Cuidado de la Piel', 119.00, '10139838', 78, '2021-03-17 08:27:11', '41680910', ''),
(35, 'Sistema para el Cuidado de la piel Skinvigorate Sonic', 'Cuidado de la Piel', 250.00, '10128064', 166, '2021-03-17 08:28:14', '41680910', ''),
(36, 'Cabezal de Masaje Facial Skinvigorate Sonic', 'Cuidado de la Piel', 55.00, '10135590', 38, '2021-03-17 08:28:54', '41680910', ''),
(37, 'Cabezales de Repuesto Skinvigorate Sonic paq./ 2 unidades', 'Cuidado de la Piel', 49.00, '10135589', 26, '2021-03-17 08:30:15', '41680910', ''),
(38, 'Set para el Cuidado de las Manos Satin Hands White Tea & Citrus', 'Cuidado de la Piel', 106.00, '10090638', 68, '2021-03-17 08:31:40', '41680910', ''),
(39, 'Crema para Manos con Karite en White Tea & Citrus', 'Cuidado de la Piel', 35.00, '10088632', 20, '2021-03-17 09:11:36', '41680910', ''),
(40, 'Mascarilla Exfoliante Labios con Karite Satin Lips', 'Cuidado de la Piel', 25.00, '10094712', 21, '2021-03-17 09:13:37', '41680910', ''),
(41, 'Humectante para Labios con KaritÃ© Satin Lips', 'Cuidado de la Piel', 25.00, '10138754', 21, '2021-03-17 09:14:14', '41680910', ''),
(42, 'Satin Body Crema Limpiadora Refrescante para Cuerpo con Karite', 'Cuidado de la Piel', 40.00, '10091502', 25, '2021-03-17 09:15:53', '41680910', ''),
(43, 'Satin Body Mascarilla Revitalizadora para Cuerpo con Karite', 'Cuidado de la Piel', 42.00, '10091504', 26, '2021-03-17 09:16:40', '41680910', ''),
(44, 'Satin Body Locion Corporal Sedosa con Karite', 'Cuidado de la Piel', 40.00, '10091493', 25, '2021-03-17 09:17:23', '41680910', ''),
(45, 'Locion Reafirmante Corporal TimeWise Targeted-Action', 'Cuidado de la Piel', 89.00, '10150072', 62, '2021-03-17 09:18:52', '41680910', ''),
(46, 'Gel Corporal Restaurador para Despues de Asolearse', 'Cuidado de la Piel', 85.00, '10050165', 50, '2021-03-17 09:20:25', '41680910', ''),
(47, 'Protector Solar FPS 50', 'Cuidado de la Piel', 89.00, '10063275', 51, '2021-03-17 09:21:18', '41680910', ''),
(48, 'Protector Solar FPS 30', 'Cuidado de la Piel', 65.00, '10049419', 39, '2021-03-17 09:22:14', '41680910', ''),
(49, 'Gel Limpiador Facial MKMen', 'Cuidado de la Piel', 49.00, '10086904', 29, '2021-03-17 09:22:58', '41680910', ''),
(50, 'Espuma para Afeitar MKMen', 'Cuidado de la Piel', 62.00, '10010336', 36, '2021-03-17 09:23:31', '41680910', ''),
(51, 'Gel Refrescante para Despues de Afeitar MKMen', 'Cuidado de la Piel', 55.00, '10010338', 32, '2021-03-17 09:24:27', '41680910', ''),
(52, 'Locion Facial Hidratante FPS 30 MKMen', 'Cuidado de la Piel', 79.00, '10060294', 46, '2021-03-17 09:25:23', '41680910', ''),
(53, 'Locion Corporal At Play Friday Feels', 'Cuidado de la Piel', 35.00, '10156438', 21, '2021-03-17 09:27:19', '41680910', ''),
(54, 'Locion Corporal At Play Weekend Vibes', 'Cuidado de la Piel', 35.00, '10156439', 21, '2021-03-17 09:28:30', '41680910', ''),
(55, 'Spray Corporal At Play Friday Feels', 'Cuidado de la Piel', 45.00, '10156314', 27, '2021-03-17 09:29:15', '41680910', ''),
(56, 'Spray Corporal At Play Weekend Vibes', 'Cuidado de la Piel', 45.00, '10156315', 27, '2021-03-17 09:29:58', '41680910', ''),
(57, 'Base para Maquillaje FPS 15', 'Maquillaje', 75.00, '10073120', 44, '2021-03-17 09:31:16', '41680910', ''),
(58, 'CC Cream Crema Correctora de Color con FPS 15 - Very Light', 'Maquillaje', 75.00, '10072826', 44, '2021-03-17 09:33:59', '41680910', ''),
(59, 'CC Cream Crema Correctora de Color con FPS 15 - Light to Medium', 'Maquillaje', 75.00, '10072827', 44, '2021-03-17 09:34:26', '41680910', ''),
(60, 'CC Cream Crema Correctora de Color con FPS 15 - Medium to Deep', 'Maquillaje', 75.00, '10072828', 44, '2021-03-17 09:34:51', '41680910', ''),
(61, 'Corrector Perfecting Concealer - Light Beige', 'Maquillaje', 38.00, '10092193', 24, '2021-03-17 09:36:07', '41680910', ''),
(62, 'Corrector Perfecting Concealer - Deep Beige', 'Maquillaje', 38.00, '10092194', 24, '2021-03-17 09:36:52', '41680910', ''),
(63, 'Corrector Iluminador para Ojos', 'Maquillaje', 38.00, '10092185', 24, '2021-03-17 09:38:54', '41680910', ''),
(64, 'Corrector para Ojos - Yellow (Natural)', 'Maquillaje', 35.00, '10125122', 21, '2021-03-17 09:39:58', '41680910', ''),
(65, 'Base TimeWise 3D - Ivory N 140 - Acabado Mate', 'Maquillaje', 59.00, '10099962', 34, '2021-03-17 09:46:57', '41680910', ''),
(66, 'Base TimeWise 3D - Ivory W 150 - Acabado Mate', 'Maquillaje', 59.00, '10099964', 34, '2021-03-17 09:47:18', '41680910', ''),
(67, 'Base TimeWise 3D - Beige C 110 - Acabado Mate', 'Maquillaje', 59.00, '10099966', 34, '2021-03-17 09:47:39', '41680910', ''),
(68, 'Base TimeWise 3D - Beige C 130 - Acabado Mate', 'Maquillaje', 59.00, '10099968', 34, '2021-03-17 09:48:03', '41680910', ''),
(69, 'Base TimeWise 3D - Beige N 150 - Acabado Mate', 'Maquillaje', 59.00, '10099970', 34, '2021-03-17 09:48:24', '41680910', ''),
(70, 'Base TimeWise 3D - Beige W 160 - Acabado Mate', 'Maquillaje', 59.00, '10099971', 34, '2021-03-17 09:49:23', '41680910', ''),
(71, 'Base TimeWise 3D - Beige W 180 - Acabado Mate', 'Maquillaje', 59.00, '10099973', 34, '2021-03-17 09:49:44', '41680910', ''),
(72, 'Base TimeWise 3D - Beige N 190 - Acabado Mate', 'Maquillaje', 59.00, '10099974', 34, '2021-03-17 09:50:09', '41680910', ''),
(73, 'Base TimeWise 3D - Beige N 210 - Acabado Mate', 'Maquillaje', 59.00, '10099976', 34, '2021-03-17 09:50:29', '41680910', ''),
(74, 'Base TimeWise 3D - Beige C 220 - Acabado Mate', 'Maquillaje', 59.00, '10099977', 34, '2021-03-17 09:50:54', '41680910', ''),
(75, 'Base TimeWise 3D - Bronze W 100 - Acabado Mate', 'Maquillaje', 59.00, '10099978', 34, '2021-03-17 09:51:15', '41680910', ''),
(76, 'Base TimeWise 3D - Bronze W 120 - Acabado Mate', 'Maquillaje', 59.00, '10099980', 34, '2021-03-17 09:51:37', '41680910', ''),
(77, 'Base TimeWise 3D - Beige C 130 - Acabado Luminoso', 'Maquillaje', 59.00, '10100023', 34, '2021-03-17 10:01:34', '41680910', ''),
(78, 'Base TimeWise 3D -Beige W 180 - Acabado Luminoso', 'Maquillaje', 59.00, '10100027', 34, '2021-03-17 10:02:41', '41680910', ''),
(79, 'Base TimeWise 3D -Beige N 190 - Acabado Luminoso', 'Maquillaje', 59.00, '10100028', 34, '2021-03-17 10:03:04', '41680910', ''),
(80, 'Polvo Rubor Compacto Chromafusion - Shy Blush', 'Maquillaje', 26.00, '10120414', 19, '2021-03-17 10:07:16', '41680910', ''),
(81, 'Polvo Rubor Compacto Chromafusion - Wineberry', 'Maquillaje', 26.00, '10120420', 19, '2021-03-17 10:07:39', '41680910', ''),
(82, 'Polvo Rubor Compacto Chromafusion - Hint of Pink', 'Maquillaje', 26.00, '10120411', 19, '2021-03-17 10:08:24', '41680910', ''),
(83, 'Polvo Rubor Compacto Chromafusion - Juicy Peach', 'Maquillaje', 26.00, '10120416', 19, '2021-03-17 10:08:49', '41680910', ''),
(84, 'Polvo para Contorno de Rostro Chromafusion - Cocoa', 'Maquillaje', 26.00, '10129761', 19, '2021-03-17 10:09:52', '41680910', ''),
(85, 'Iluminador para Rostro Chromafusion - Glazed', 'Maquillaje', 26.00, '10129762', 19, '2021-03-17 10:10:52', '41680910', ''),
(86, 'Sombra Chromafusion - Crystalline - Luminosas', 'Maquillaje', 16.00, '10107601', 10, '2021-03-17 10:14:00', '41680910', ''),
(87, 'Sombra Chromafusion - Candlelight - Luminosas', 'Maquillaje', 16.00, '10107605', 10, '2021-03-17 10:14:54', '41680910', ''),
(88, 'Sombra Chromafusion - Rose Gold - Luminosas', 'Maquillaje', 16.00, '10107622', 10, '2021-03-17 10:15:16', '41680910', ''),
(89, 'Sombra Chromafusion - Gold Status - Luminosas', 'Maquillaje', 16.00, '10107623', 10, '2021-03-17 10:16:14', '41680910', ''),
(90, 'Sombra Chromafusion - Burnished Bronze  - Luminosas', 'Maquillaje', 16.00, '10107625', 10, '2021-03-17 10:16:38', '41680910', ''),
(91, 'Sombra Chromafusion - Granite  - Luminosas', 'Maquillaje', 16.00, '10107617', 10, '2021-03-17 10:17:05', '41680910', ''),
(92, 'Sombra Chromafusion - Sunlit Rose  - Luminosas', 'Maquillaje', 16.00, '10107629', 10, '2021-03-17 10:17:25', '41680910', ''),
(93, 'Sombra Chromafusion - Golden Mauve  - Luminosas', 'Maquillaje', 16.00, '10107631', 10, '2021-03-17 10:17:45', '41680910', ''),
(94, 'Sombra Chromafusion -  Sweet Plum  - Luminosas', 'Maquillaje', 16.00, '10107634', 10, '2021-03-17 10:18:06', '41680910', ''),
(95, 'Sombra Chromafusion -  Starry Night - Luminosas', 'Maquillaje', 16.00, '10107641', 10, '2021-03-17 10:18:26', '41680910', ''),
(96, 'Sombra Chromafusion -  Sand Castle - Mate', 'Maquillaje', 16.00, '10107603', 10, '2021-03-17 10:19:05', '41680910', ''),
(97, 'Sombra Chromafusion -  Hazelnut - Mate', 'Maquillaje', 16.00, '10107606', 10, '2021-03-17 10:19:24', '41680910', ''),
(98, 'Sombra Chromafusion -  Mahogany - Mate', 'Maquillaje', 16.00, '10107608', 10, '2021-03-17 10:19:45', '41680910', ''),
(99, 'Sombra Chromafusion -  Espresso - Mate', 'Maquillaje', 16.00, '10107612', 10, '2021-03-17 10:20:03', '41680910', ''),
(100, 'Sombra Chromafusion -  Onyx - Mate', 'Maquillaje', 16.00, '10107620', 10, '2021-03-17 10:20:21', '41680910', ''),
(101, 'Sombra Chromafusion -  Blossom - Mate', 'Maquillaje', 16.00, '10107627', 10, '2021-03-17 10:20:37', '41680910', ''),
(102, 'Sombra Chromafusion -  Soft Heather - Mate', 'Maquillaje', 16.00, '10107632', 10, '2021-03-17 10:20:51', '41680910', ''),
(103, 'Sombra Chromafusion - Evening Navy - Mate', 'Maquillaje', 16.00, '10107640', 10, '2021-03-17 10:21:13', '41680910', ''),
(104, 'Perfect Palette', 'Maquillaje', 14.00, '10131348', 0, '2021-03-17 10:27:47', '41680910', ''),
(105, 'Petite Palette', 'Maquillaje', 9.00, '10123805', 0, '2021-03-17 10:28:16', '41680910', ''),
(106, 'Mascara para Pestanas Lash Love', 'Maquillaje', 35.00, '10041481', 24, '2021-03-17 10:29:20', '41680910', ''),
(107, 'Mascara para Pestanas Lash Love a Prueba de Agua', 'Maquillaje', 35.00, '10044465', 24, '2021-03-17 10:30:11', '41680910', ''),
(108, 'Mascara para Pestanas Lash Intensity', 'Maquillaje', 49.00, '10092105', 30, '2021-03-17 10:30:47', '41680910', ''),
(109, 'Lapiz Delineador para Cejas - Brunette', 'Maquillaje', 39.00, '10034731', 26, '2021-03-17 10:32:12', '41680910', ''),
(110, 'Lapiz Delineador para Ojos - Negro', 'Maquillaje', 29.00, '10090136', 20, '2021-03-17 10:33:05', '41680910', ''),
(111, 'Delineador en Gel para Ojos - Jet Black', 'Maquillaje', 49.00, '10085704', 28, '2021-03-17 10:34:13', '41680910', ''),
(112, 'Delineador Liquido en Plumon para ojos a prueba de agua - Negro', 'Maquillaje', 35.00, '10141205', 21, '2021-03-17 10:35:04', '41680910', ''),
(113, 'Maquillaje Liquido Mate - At Play - Very Light - Bases', 'Maquillaje', 36.00, '10096620', 23, '2021-03-17 10:37:10', '41680910', ''),
(114, 'Maquillaje Liquido Mate - At Play - Light to Medium - Bases', 'Maquillaje', 36.00, '10105367', 23, '2021-03-17 10:38:18', '41680910', ''),
(115, 'Maquillaje Liquido Mate - At Play - Medium - Bases', 'Maquillaje', 36.00, '10096622', 23, '2021-03-17 10:38:47', '41680910', ''),
(116, 'Maquillaje Liquido Mate - At Play - Medium to Deep - Bases', 'Maquillaje', 36.00, '10105371', 23, '2021-03-17 10:39:05', '41680910', ''),
(117, 'Maquillaje Liquido Mate - At Play -  Deep Tan - Bases', 'Maquillaje', 36.00, '10105373', 23, '2021-03-17 10:39:22', '41680910', ''),
(118, 'Crayon Iluminador de Rostro - At Play -  Rose Gold Glow', 'Maquillaje', 37.00, '10120915', 21, '2021-03-17 10:41:27', '41680910', ''),
(119, 'Crayon para Contorno de Rostro - At Play - Get Sculpted 1', 'Maquillaje', 37.00, '10120688', 21, '2021-03-17 10:42:15', '41680910', ''),
(120, 'Crayon para Contorno de Rostro - At Play - Get Sculpted 2', 'Maquillaje', 37.00, '10120690', 21, '2021-03-17 10:42:31', '41680910', ''),
(121, 'Labial LÃ­quido - At Play - Feeling Shy', 'Maquillaje', 27.00, '10105221', 24, '2021-03-17 10:43:49', '41680910', ''),
(122, 'Labial Liquido - At Play - Pink Me Up ', 'Maquillaje', 27.00, '10105222', 24, '2021-03-17 10:46:57', '41680910', ''),
(123, 'Labial Liquido - At Play - Red Alert ', 'Maquillaje', 27.00, '10105223', 24, '2021-03-17 10:47:19', '41680910', ''),
(124, 'Labial Liquido - At Play - Mad for Magenta ', 'Maquillaje', 27.00, '10115320', 24, '2021-03-17 10:47:38', '41680910', ''),
(125, 'Labial Liquido - At Play - Red Envy ', 'Maquillaje', 27.00, '10115319', 24, '2021-03-17 10:47:53', '41680910', ''),
(126, 'Labial Liquido - At Play - Plum Noir ', 'Maquillaje', 27.00, '10105224', 24, '2021-03-17 10:48:16', '41680910', ''),
(127, 'Lapiz Delineador para Ojos - At Play - Mate Black', 'Maquillaje', 14.00, '10158414', 10, '2021-03-17 10:49:35', '41680910', ''),
(128, 'Lapiz Delineador para Labios - Medium Nude ', 'Maquillaje', 29.00, '10085795', 20, '2021-03-17 10:50:51', '41680910', ''),
(129, 'Lapiz Delineador para Labios - Rose ', 'Maquillaje', 29.00, '10085797', 20, '2021-03-17 10:51:13', '41680910', ''),
(130, 'Set de Brochas con Estuche - Incluye: Estuche, Brocha para Polvo, Brocha para Rubor, Brocha para Sombras, Brocha Definidora para Ojos y Brocha Difuminadora para Ojos.', 'Maquillaje', 149.00, '10107305', 85, '2021-03-17 10:54:46', '41680910', ''),
(131, 'Esponja para Base', 'Maquillaje', 27.00, '10114898', 14, '2021-03-17 10:55:55', '41680910', ''),
(132, 'Brocha Delineadora para Ojos y Cejas', 'Maquillaje', 25.00, '10122328', 14, '2021-03-17 10:56:58', '41680910', ''),
(133, 'Brocha Compacta para Polvo', 'Maquillaje', 14.00, '10134441', 9, '2021-03-17 10:57:32', '41680910', ''),
(134, 'Brocha Compacta para Rubor', 'Maquillaje', 14.00, '10134442', 9, '2021-03-17 10:57:54', '41680910', ''),
(135, 'Aplicadores de Ojos (2 por empaque)', 'Maquillaje', 7.00, '10134451', 5, '2021-03-17 10:58:35', '41680910', ''),
(136, 'Esponja CosmÃ©tica Mary KayÂ® (2 por empaque)', 'Maquillaje', 13.00, '10134452', 7, '2021-03-17 10:59:01', '41680910', ''),
(137, 'Fijador de Maquillaje en Spray', 'Maquillaje', 65.00, '10152557', 40, '2021-03-17 10:59:26', '41680910', ''),
(138, 'Rollo de Viaje', 'Maquillaje', 99.00, '10143940', 63, '2021-03-17 10:59:51', '41680910', ''),
(139, 'Mary Kay Live Fearlessly - Eau de Parfum', 'Fragrancia', 129.00, '10088517', 92, '2021-03-17 11:01:19', '41680910', ''),
(140, 'Mary Kay Love Fearlessly - Eau de Parfum', 'Fragrancia', 129.00, '10088519', 92, '2021-03-17 11:01:52', '41680910', ''),
(141, 'Mary Kay Dream Fearlessly - Eau de Parfum', 'Fragrancia', 129.00, '10088518', 92, '2021-03-17 11:02:18', '41680910', ''),
(142, 'Modern Charm - Eau de Parfum', 'Fragrancia', 109.00, '10114363', 73, '2021-03-17 11:03:03', '41680910', ''),
(143, 'True Passion - Eau de Toilette', 'Fragrancia', 99.00, '10129398', 63, '2021-03-17 11:03:40', '41680910', ''),
(144, 'True Passion Noir - Eau de Toilette', 'Fragrancia', 99.00, '10129403', 63, '2021-03-17 11:04:02', '41680910', ''),
(145, 'If you Believe - Eau de Toilette', 'Fragrancia', 95.00, '10132479', 58, '2021-03-17 11:04:31', '41680910', ''),
(146, 'Mary Kay Wish - Eau de Toilette', 'Fragrancia', 95.00, '10082847', 58, '2021-03-17 11:04:57', '41680910', ''),
(147, 'Clever Dare - Eau de Toilette', 'Fragrancia', 92.00, '10105858', 58, '2021-03-17 11:05:37', '41680910', ''),
(148, 'Clever - Eau de Toilette', 'Fragrancia', 92.00, '10075388', 55, '2021-03-17 11:06:08', '41680910', ''),
(149, 'Mary Kay At Play  - Eau de Toilette', 'Fragrancia', 69.00, '10142268', 41, '2021-03-17 11:07:23', '41680910', ''),
(150, 'Hello Brilliant - Eau de Toilette', 'Fragrancia', 79.00, '10097118', 48, '2021-03-17 11:07:57', '41680910', ''),
(151, 'Magnetic Passion - Eau de Parfum - Fragancias Masculinas', 'Fragrancia', 135.00, '10074132', 86, '2021-03-17 11:10:13', '41680910', ''),
(152, 'Magnetic Passion Edge - Eau de Parfum - Fragancias Masculinas', 'Fragrancia', 135.00, '10131288', 86, '2021-03-17 11:10:44', '41680910', ''),
(153, 'Upscale Gentleman - Eau de Parfum - Fragancias Masculinas', 'Fragrancia', 125.00, '10104971', 82, '2021-03-17 11:11:22', '41680910', ''),
(154, 'Upscale - Eau de Parfum - Fragancias Masculinas', 'Fragrancia', 125.00, '10124835', 82, '2021-03-17 11:11:42', '41680910', ''),
(155, 'Authentic Hero - Eau de Toilette - Fragancias Masculinas', 'Fragrancia', 119.00, '10092085', 80, '2021-03-17 11:12:29', '41680910', ''),
(156, 'MK High Intensity Ocean - Eau de Cologne - Fragancias Masculinas', 'Fragrancia', 125.00, '10095123', 75, '2021-03-17 11:13:18', '41680910', ''),
(157, 'MK High Intensity Sport - Eau de Cologne - Fragancias Masculinas', 'Fragrancia', 125.00, '10075680', 75, '2021-03-17 11:13:57', '41680910', ''),
(158, 'Revista Comienza Algo Hermoso', 'Accesorio', 4.50, '08185495', 0, '2021-03-17 11:17:57', '41680910', ''),
(159, 'The Look paq./ 3 unidades', 'Accesorio', 15.00, '08170494', 0, '2021-03-17 11:18:28', '41680910', ''),
(160, 'Presentacion para la Sesion de Belleza', 'Accesorio', 8.00, '08169156', 0, '2021-03-17 11:18:58', '41680910', ''),
(161, 'Folleto de Iniciacion paq./ 5 unidades', 'Accesorio', 2.00, '08187542', 0, '2021-03-17 11:19:28', '41680910', ''),
(162, 'Perfil del Cliente paq./ 15 unidades', 'Accesorio', 2.00, '08169158', 0, '2021-03-17 11:19:51', '41680910', ''),
(163, 'Guia Sesion Express - Rostro Definido', 'Accesorio', 6.00, '08151632', 0, '2021-03-17 11:20:20', '41680910', ''),
(164, 'Guia Sesion Express - Miradas de Impacto ', 'Accesorio', 0.00, '08151635', 0, '2021-03-17 11:21:09', '41680910', ''),
(165, 'Guia Sesion Express - Cobertura Ideal', 'Accesorio', 6.00, '08151638', 0, '2021-03-17 11:21:35', '41680910', ''),
(166, 'Tarjetas Descubre tu Esencia', 'Accesorio', 6.00, '08151637', 0, '2021-03-17 11:21:55', '41680910', ''),
(167, 'Tarjetas de Presentacion paq./ 30 unidades ', 'Accesorio', 5.00, '08162247', 0, '2021-03-17 11:22:25', '41680910', ''),
(168, 'Combinacion Ideal TimeWise Age Minimize 3D - Piel Combinada a Grasa (3 combinaciones ideales)', 'Muestra', 10.00, '10095606', 0, '2021-03-17 11:23:37', '41680910', ''),
(169, 'Combinacion Ideal TimeWise Age Minimize 3D - Piel Normal a Seca (3 combinaciones ideales)', 'Muestra', 10.00, '10095603', 0, '2021-03-17 11:24:22', '41680910', ''),
(170, 'Sistema para Microexfoliacion Plus TimeWise (6 pares)', 'Muestra', 8.00, '10160429', 0, '2021-03-17 11:24:57', '41680910', ''),
(171, 'Miniatura de la Crema para Manos con Karite Satin Hands en White Tea and Citrus (12 unidades)', 'Muestra', 23.00, '10097538', 0, '2021-03-17 11:26:12', '41680910', ''),
(172, 'Miniatura de la Locion Desmaquillante de Ojos Libre de Aceite', 'Muestra', 6.50, '10071716', 0, '2021-03-17 11:28:24', '41680910', ''),
(173, 'Perfumero', 'Muestra', 19.00, '8120621', 0, '2021-03-17 11:28:52', '41680910', ''),
(174, 'Bolso Loly in the Sky - Accesorios para Demostracion', 'Accesorio', 199.00, '08184382', 0, '2021-03-17 11:31:12', '41680910', ''),
(175, 'Bandejas Desechables paq./ 30 unidades - Accesorios para Demostracion', 'Accesorio', 5.50, '10164157', 0, '2021-03-17 11:31:49', '41680910', ''),
(176, 'Bandeja Cosmetica 1 unidad - Accesorios para Demostracion', 'Accesorio', 14.00, '10017364', 0, '2021-03-17 11:32:35', '41680910', ''),
(177, 'Toallas Faciales Desechables paq./ 30 unidades  - Accesorios para Demostracion', 'Accesorio', 3.50, '10149099', 0, '2021-03-17 11:33:10', '41680910', ''),
(178, 'Espejos Negros paq./ 3 unidades - Accesorios para Demostracion', 'Accesorio', 9.50, '08121704', 0, '2021-03-17 11:33:45', '41680910', ''),
(179, 'Aplicadores Desechables para Labios y Ojos, paq./ 15 unidades - Accesorios para Demostracion', 'Accesorio', 2.50, '10065200', 0, '2021-03-17 11:34:56', '41680910', ''),
(180, 'Aplicadores Desechables con Punta de Esponja, paq./ 15 unidades - Accesorios para Demostracion', 'Accesorio', 2.50, '10065100', 0, '2021-03-17 11:35:21', '41680910', ''),
(181, 'Cepillos Desechables para Mascara para PestaÃ±as, paq./ 15 unidades - Accesorios para Demostracion', 'Accesorio', 4.50, '10003370', 0, '2021-03-17 11:35:52', '41680910', ''),
(182, 'Espatulas Plasticas, paq./ 24 unidades - Accesorios para Demostracion', 'Accesorio', 4.00, '10400700', 0, '2021-03-17 11:36:28', '41680910', ''),
(183, 'Bolsa Rosa Mary Kay - Accesorios para Demostracion', 'Accesorio', 2.00, '08183327', 0, '2021-03-17 11:37:18', '41680910', ''),
(184, 'Bolsa Rosa Mary Kay (3 unidades) - Accesorios para Demostracion', 'Accesorio', 5.00, '08183328', 0, '2021-03-17 11:37:45', '41680910', ''),
(185, 'Bolsas At Play (3 unidades) - Accesorios para Demostracion', 'Accesorio', 7.00, '08145278', 0, '2021-03-17 11:38:11', '41680910', ''),
(186, 'Set Satin Lips - 15% DESCUENTO - INVIERTE & CRECE', 'Cuidado de la Piel', 50.00, '10192430', 38, '2021-03-17 23:10:32', '41680910', ''),
(187, 'Locion Facial Efecto Reafirmante VoluFirm TimeWise Repair Formula Avanzada - 20% DESCUENTO  - INVIERTE & CRECE', 'Cuidado de la Piel', 149.00, '10192431', 76, '2021-03-17 23:13:26', '41680910', ''),
(188, 'Sistema para Microexfoliacion Plus TimeWise - 40% DESCUENTO - INVIERTE & CRECE', 'Cuidado de la Piel', 139.00, '10197042', 60, '2021-03-17 23:14:42', '41680910', ''),
(189, 'Set de Crema de Manos y Balsamo Labial - Coconut Mousse - 40% DESCUENTO - INVIERTE & CRECE', 'Cuidado de la Piel', 79.00, '10192640', 31, '2021-03-17 23:16:21', '41680910', ''),
(190, 'Set de Crema de Manos y Balsamo Labial - Berry Parfait - 40% DESCUENTO - INVIERTE & CRECE', 'Cuidado de la Piel', 79.00, '10192641', 31, '2021-03-17 23:20:37', '41680910', ''),
(191, 'Set de Crema de Manos y Balsamo Labial - Citrus Sorbet - 40% DESCUENTO - INVIERTE & CRECE', 'Cuidado de la Piel', 79.00, '10192642', 31, '2021-03-17 23:21:45', '41680910', ''),
(192, 'Maquillaje en Polvo Traslucido Mineral - Beige 1 - 15% DESCUENTO - PROMOCIONES THE LOOK', 'Maquillaje', 47.00, '10188490', 24, '2021-03-17 23:24:55', '41680910', ''),
(193, 'Maquillaje en Polvo Traslucido Mineral - Beige 2 - 15% DESCUENTO - PROMOCIONES THE LOOK', 'Maquillaje', 47.00, '10188489', 24, '2021-03-17 23:25:27', '41680910', ''),
(194, 'Polvo Suelto Traslucido - 15% DESCUENTO - PROMOCIONES THE LOOK', 'Maquillaje', 69.00, '10188488', 34, '2021-03-17 23:26:25', '41680910', ''),
(195, 'Brocha para Base Liquida - 20% DESCUENTO - PROMOCIONES THE LOOK', 'Maquillaje', 33.00, '10188468', 0, '2021-03-17 23:27:35', '41680910', ''),
(196, 'Labial Mate - Rosa Fresco  - 20% DESCUENTO - PROMOCIONES THE LOOK', 'Maquillaje', 35.00, '10188483', 17, '2021-03-17 23:31:34', '41680910', ''),
(197, 'Labial Mate - Paparazzi Pink - 20% DESCUENTO - PROMOCIONES THE LOOK', 'Maquillaje', 35.00, '10188484', 17, '2021-03-17 23:32:10', '41680910', ''),
(198, 'Labial Mate - Orchid Allegro - 20% DESCUENTO - PROMOCIONES THE LOOK', 'Maquillaje', 35.00, '10188485', 17, '2021-03-17 23:32:53', '41680910', ''),
(199, 'Labial Mate - Red Amore - 20% DESCUENTO - PROMOCIONES THE LOOK', 'Maquillaje', 35.00, '10188486', 17, '2021-03-17 23:33:22', '41680910', ''),
(200, 'Labial Mate -  Roma Red  - 20% DESCUENTO - PROMOCIONES THE LOOK', 'Maquillaje', 35.00, '10188487', 17, '2021-03-17 23:33:43', '41680910', ''),
(201, 'Labial Mate -  Belissimo Nude  - 20% DESCUENTO - PROMOCIONES THE LOOK', 'Maquillaje', 35.00, '10188482', 17, '2021-03-17 23:34:04', '41680910', ''),
(202, 'Labial en Gel Semi Mate - Powerful Pink  - 20% DESCUENTO - PROMOCIONES THE LOOK', 'Maquillaje', 35.00, '10188472', 17, '2021-03-17 23:34:53', '41680910', ''),
(203, 'Labial en Gel Semi Mate - Always Apricot  - 20% DESCUENTO - PROMOCIONES THE LOOK', 'Maquillaje', 35.00, '10188473', 17, '2021-03-17 23:35:15', '41680910', ''),
(204, 'Labial en Gel Semi Mate - Midnight Red  - 20% DESCUENTO - PROMOCIONES THE LOOK', 'Maquillaje', 35.00, '10188878', 17, '2021-03-17 23:35:31', '41680910', ''),
(205, 'Labial en Gel Semi Mate - Crushed Berry  - 20% DESCUENTO - PROMOCIONES THE LOOK', 'Maquillaje', 35.00, '10188879', 17, '2021-03-17 23:35:47', '41680910', ''),
(206, 'Labial en Gel Semi Mate - Berry Famous - 20% DESCUENTO - PROMOCIONES THE LOOK', 'Maquillaje', 35.00, '10188470', 17, '2021-03-17 23:36:12', '41680910', ''),
(207, 'Labial en Gel Semi Mate - Blush Velvet - 20% DESCUENTO - PROMOCIONES THE LOOK', 'Maquillaje', 35.00, '10188471', 17, '2021-03-17 23:36:36', '41680910', ''),
(208, 'Labial en Gel Semi Mate - Stiletto Red - 20% DESCUENTO - PROMOCIONES THE LOOK', 'Maquillaje', 35.00, '10188469', 17, '2021-03-17 23:36:59', '41680910', ''),
(209, 'Labial en Gel Semi Shine - Red Smolder - 20% DESCUENTO - PROMOCIONES THE LOOK', 'Maquillaje', 35.00, '10188474', 17, '2021-03-17 23:37:55', '41680910', ''),
(210, 'Labial en Gel Semi Shine - Romantic Pink - 20% DESCUENTO - PROMOCIONES THE LOOK', 'Maquillaje', 35.00, '10188475', 17, '2021-03-17 23:38:12', '41680910', ''),
(211, 'Labial en Gel Semi Shine - Spiced Ginger - 20% DESCUENTO - PROMOCIONES THE LOOK', 'Maquillaje', 35.00, '10188476', 17, '2021-03-17 23:38:35', '41680910', ''),
(212, 'Labial en Gel Semi Shine - Apple Berry - 20% DESCUENTO - PROMOCIONES THE LOOK', 'Maquillaje', 35.00, '10188480', 17, '2021-03-17 23:38:53', '41680910', ''),
(213, 'Labial en Gel Semi Shine - Rosewood - 20% DESCUENTO - PROMOCIONES THE LOOK', 'Maquillaje', 35.00, '10188477', 17, '2021-03-17 23:39:09', '41680910', ''),
(214, 'Labial en Gel Semi Shine - Raspberry Ice - 20% DESCUENTO - PROMOCIONES THE LOOK', 'Maquillaje', 35.00, '10188478', 17, '2021-03-17 23:39:23', '41680910', ''),
(215, 'Labial en Gel Semi Shine - Love Me Pink - 20% DESCUENTO - PROMOCIONES THE LOOK', 'Maquillaje', 35.00, '10188479', 17, '2021-03-17 23:39:43', '41680910', ''),
(216, 'Labial en Gel Semi Shine -  Scarlet Red - 20% DESCUENTO - PROMOCIONES THE LOOK', 'Maquillaje', 35.00, '10188481', 17, '2021-03-17 23:39:57', '41680910', ''),
(217, 'Gel Refrescante para Parpados - 20% DESCUENTO - PROMOCIONES THE LOOK', 'Maquillaje', 35.00, '10188467', 18, '2021-03-17 23:40:35', '41680910', ''),
(218, 'For Ever Diamonds - 20% DESCUENTO - PROMOCIONES THE LOOK', 'Fragrancia', 119.00, '10188491', 64, '2021-03-17 23:41:22', '41680910', ''),
(219, 'Pink Diamonds - 20% DESCUENTO - PROMOCIONES THE LOOK', 'Fragrancia', 119.00, '10165717', 64, '2021-03-17 23:41:44', '41680910', '');

CREATE TABLE `tb_productos1` (
  `id_producto` int(11) NOT NULL,
  `texto_json` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_created_in` timestamp NULL DEFAULT current_timestamp(),
  `user_cpf` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE `tb_profiles` (
  `id_profile` int(1) NOT NULL,
  `profile_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_page` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO `tb_profiles` (`id_profile`, `profile_name`, `profile_desc`, `profile_page`) VALUES
(1, 'Administrador', 'Admin da Poha Toda', 'admin.php'),
(2, 'Cliente Master', 'Minhas clientas', 'cliente.php'),
(3, 'Super Admin', 'Cadastro de clientes', 'super_admin.php'),
(4, 'Desactivado', 'Clientes desactivados', 'desactivado.php');


CREATE TABLE `tb_users` (
  `id_user` int(11) NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_birth` date DEFAULT NULL,
  `user_cpf` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_phone` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_cellphone` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_address` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_created_in` timestamp NULL DEFAULT current_timestamp(),
  `profile_id` int(11) DEFAULT NULL,
  `user_full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `observaciones` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `tb_users` (`id_user`, `user_name`, `user_email`, `user_password`, `user_birth`, `user_cpf`, `user_phone`, `user_cellphone`, `user_address`, `user_created_in`, `profile_id`, `user_full_name`, `user_status`, `observaciones`) VALUES
(1, 'EJEMPLO', 'ejemplo@email.com', '$2y$10$5Ac.tC/syFSa.dOvpdaryOkIRTBzVoaP/laSW9MLU4o1Q9av6Rb5m', '2019-12-01', '00000000', '(85) 3099-0000', '(85) 99990-0001', 'Rua Bem Ali', '2019-12-18 13:42:21', 2, '', '', ''),
(2, 'vandreh', 'vandreh@email.com', '$2y$10$7KzkJzZJTIFw5MDpDFCR5OTkvigwQu8tZMTXDrV1UiNLIE970JOiq', '2001-01-01', '12312312312321', '(85) 0000-1111', '213123213132', 'Rua Bem Ali, 23', '2019-12-18 13:45:32', 1, '', '', ''),
(3, 'REGISTRO DE USUARIO', 'cadastro@email.com', '$2y$10$hIWBgGICVY7yZDXH5fNhl.qBiYfqYeY0e09852IDXqNI/GFgBIOq6', '2021-01-06', '000', '0', '1', 'calle 54', '2021-01-06 05:08:58', 3, '', '', ''),
(4, 'Gabriela', 'gabynh@hotmail.com', '$2y$10$MZfWZpKcQgD2FRFx5IemXuL0jPNxMkVZovHkUK2gR.ASNxHGTrAku', '1983-01-29', '41680910', '973195584', '973195642', 'Calle 54 NÂ° 109 DPTO 406, San Isidro', '2021-01-28 03:53:59', 2, '', '', '');

CREATE TABLE `tb_users1` (
  `id_user` int(11) NOT NULL,
  `texto_json` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_created_in` timestamp NULL DEFAULT current_timestamp(),
  `user_cpf` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE `tb_ventas` (
  `id_venta` int(11) NOT NULL,
  `id_estoque` int(11) NOT NULL,
  `id_compra` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `cliente_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `producto_venta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codigo` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lote` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descuento_venta` decimal(7,2) DEFAULT NULL,
  `delivery` decimal(7,2) DEFAULT NULL,
  `fecha_entrega` date DEFAULT NULL,
  `precio_compra` decimal(7,2) DEFAULT NULL,
  `precio_venta` decimal(7,2) DEFAULT NULL,
  `fecha_venta` date DEFAULT NULL,
  `observaciones` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_producto` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vencimiento` date NOT NULL,
  `id_producto` int(5) NOT NULL,
  `fecha_compra` date NOT NULL,
  `seguimiento` int(2) NOT NULL,
  `user_created_in` timestamp NULL DEFAULT current_timestamp(),
  `user_cpf` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE `tb_ventas1` (
  `id_venta` int(11) NOT NULL,
  `venta_json` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `venta_created_in` timestamp NULL DEFAULT current_timestamp(),
  `user_cpf` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

ALTER TABLE `detalle_ventas`
  ADD PRIMARY KEY (`id_venta`);

ALTER TABLE `estoque`
  ADD PRIMARY KEY (`id_estoque`);

ALTER TABLE `ingresos_usuario`
  ADD PRIMARY KEY (`id_ingreso`);

ALTER TABLE `tb_clientes`
  ADD PRIMARY KEY (`id_cliente`);

ALTER TABLE `tb_clientes1`
  ADD PRIMARY KEY (`id_cliente`);

ALTER TABLE `tb_compras`
  ADD PRIMARY KEY (`id_compra`);

ALTER TABLE `tb_compras1`
  ADD PRIMARY KEY (`id_compra`);

ALTER TABLE `tb_productos`
  ADD PRIMARY KEY (`id_producto`);

ALTER TABLE `tb_productos1`
  ADD PRIMARY KEY (`id_producto`);

ALTER TABLE `tb_profiles`
  ADD PRIMARY KEY (`id_profile`);

ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `user_email` (`user_email`),
  ADD UNIQUE KEY `user_cpf` (`user_cpf`);

ALTER TABLE `tb_users1`
  ADD PRIMARY KEY (`id_user`);

ALTER TABLE `tb_ventas`
  ADD PRIMARY KEY (`id_venta`);

ALTER TABLE `tb_ventas1`
  ADD PRIMARY KEY (`id_venta`);

ALTER TABLE `detalle_ventas`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `estoque`
  MODIFY `id_estoque` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2649;

ALTER TABLE `ingresos_usuario`
  MODIFY `id_ingreso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

ALTER TABLE `tb_clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

ALTER TABLE `tb_clientes1`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

ALTER TABLE `tb_compras`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

ALTER TABLE `tb_compras1`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

ALTER TABLE `tb_productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8941;

ALTER TABLE `tb_productos1`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `tb_profiles`
  MODIFY `id_profile` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

ALTER TABLE `tb_users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

ALTER TABLE `tb_users1`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

ALTER TABLE `tb_ventas`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=483;

ALTER TABLE `tb_ventas1`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
COMMIT;