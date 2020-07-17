SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre_producto` varchar(50) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `precio_compra` int(11) NOT NULL,
  `precio_venta` int(11) NOT NULL,
  `id_marca` int(11) NOT NULL,
  `id_proveedor` int(11) NOT NULL,
  `id_ubicacion` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `detalle_factura1` (
  `id` int(11) NOT NULL,
  `id_factura` int(11) NOT NULL,
  `id_inventario` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `inventarios` (
  `id_inventario` int(20) NOT NULL,
  `cantidad` varchar(191) DEFAULT NULL,
  `precio_compra` int(11) NOT NULL,
  `precio_venta` int(11) NOT NULL,
  `fecha_ingreso` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `estado` varchar(191) NOT NULL,
  `id_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;



CREATE TABLE `tiendas` (
  `id_tienda` int(11) NOT NULL,
  `nit` varchar(50) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `capacidad` varchar(50) NOT NULL,
  `id_ubicacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


ALTER TABLE `detalle_factura1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_detPr` (`id_producto`);
  ALTER TABLE `inventarios`
  
  ADD PRIMARY KEY (`id_inventario`),
  ADD KEY `fk` (`id_producto`);


