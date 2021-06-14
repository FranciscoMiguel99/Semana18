# Nota: Ing tomamos el modelo de su base de datos de User

- Volcado de SQL de phpMyAdmin
- versión 4.6.6deb4
- https://www.phpmyadmin.net/
-
- Anfitrión: localhost: 3306
- Tiempo de generación: 28 de septiembre de 2018 a las 02:07 a.m.
- Versión del servidor: 10.1.26-MariaDB-0 + deb9u1
- Versión de PHP: 7.0.30-0 + deb9u1

SET SQL_MODE =  " NO_AUTO_VALUE_ON_ZERO " ;
SET time_zone =  " +00: 00 " ;


/ * ! 40101 SET @OLD_CHARACTER_SET_CLIENT = @@ CHARACTER_SET_CLIENT * / ;
/ * ! 40101 SET @OLD_CHARACTER_SET_RESULTS = @@ CHARACTER_SET_RESULTS * / ;
/ * ! 40101 SET @OLD_COLLATION_CONNECTION = @@ COLLATION_CONNECTION * / ;
/ * ! 40101 ESTABLECER NOMBRES utf8mb4 * / ;

-
- Base de datos: `Loggin`
-

- ------------------------------------------------ --------

-
- Estructura de la tabla para la tabla `Usuarios`
-

CREAR  TABLA ' Usuarios ' (
  ` Usuario `  Char ( 30 ) NOT NULL ,
  ` Pase `  Char ( 128 ) DEFAULT NULL
) MOTOR = InnoDB DEFAULT CHARSET = utf8mb4;

-
- Volcado de datos para la tabla `Usuarios`
-

INSERT INTO  ` Usuarios ` ( ` usuario ` , ` paso ` ) VALORES
( ' barra ' , ' d85c695f4eb4bb476ee1bfe7490e3ac0 ' ),
( ' foo ' , ' d85c695f4eb4bb476ee1bfe7490e3ac0 ' );

-
- Índices para tablas volcadas
-

-
- Índices para la tabla `Usuarios`
-
ALTER  TABLE  ` Usuarios `
  ADD PRIMARY KEY ( ` usuario ` );

/ * ! 40101 SET CHARACTER_SET_CLIENT = @ OLD_CHARACTER_SET_CLIENT * / ;
/ * ! 40101 SET CHARACTER_SET_RESULTS = @ OLD_CHARACTER_SET_RESULTS * / ;
/ * ! 40101 SET COLLATION_CONNECTION = @ OLD_COLLATION_CONNECTION * / ;
