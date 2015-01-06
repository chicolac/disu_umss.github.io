<?php
//CREAR UNA TABLA DE COMENTARIOS-----------------------------------------------------------
//Conexion---------------------------------
//$conexion = sqlite_open('comentarios.db') or die('Ha sido imposible establecer la conexion');
/*
 * mi conexion con mysql
 */
//Crear tabla---------------------------------
require "conexion.rts";
$bd = new BD;

$consulta = 
<<<SQL

CREATE TABLE comentarios(

usuario Char(40) Not Null,
contrasena Char(40) Not Null,
comentario Char (250) Not Null,
nombre Char (65) Not Null,
correo Char (75) Not Null

);

SQL;
//Insertar contenido en la tabla--------------------
$resultado = mysql_query($consulta);
//Cerrar la conexion---------------------------------
//sqlite_close($conexion);
/*
 * no estoy poniendo el close me lo salto
 */
//CONTENIDO DE PRUEBA PARA LA TABLA DE FAVORITOS--------------------------------------
//Establecer
//$conexion = sqlite_open('favoritos.db') or die('Ha sido imposible establecer la conexion');
/*
 * me estoy saltando esta conexion
 */
//Preparar
$consulta = 
<<<SQL
INSERT INTO comentarios VALUES ('invitado','invitado','Gracias igualmente para ti, feliz año nuevo que dios te bendiga con mucha salud prosperidad y mucho éxito ,por favor saluda a toda la familia de mi parte besos y abrazos en la distancia','dennis','asdf@hotmail.com'), ('invitado','invitado','Feliz Año nuevo querida Giancarla. Que este 2015 sea de prosperidad y llena de bendiciones. Un fuerte abrazo. Tqm.','juan','milcar@gmail.com');

SQL;
//Insertar
$resultado = mysql_query($consulta);
//Cerrar
//sqlite_close($conexion);
/*
 * me voy a saltar este close
 */
//CREAR UNA TABLA DE USUARIOS------------------------------------------------------------
//Conexion---------------------------------
//$conexion = sqlite_open('favoritos.db') or die('Ha sido imposible establecer la conexion');
/*
 * no voy a hacer esta conexion trabajaré con la de arriba
 */
//Crear tabla---------------------------------
$consulta = 
<<<SQL

CREATE TABLE usuarios(

usuario Char(40) Not Null,
contrasena Char(40) Not Null,
nombre Char(40) Not Null,
apellido Char(100) Not Null,
edad Int,
permisos Int


);

SQL;
//Insertar contenido en la tabla--------------
$resultado = mysql_query($consulta);
//Cerrar la conexion--------------------------
//sqlite_close($conexion);
/*
 * me salto este close
 */

//CONTENIDO DE PRUEBA PARA LA TABLA DE USUARIOS--------------------------------------
//Establecer
//$conexion = sqlite_open('favoritos.db') or die('Ha sido imposible establecer la conexion');
/*
 * no voy a trabajar con esta conexion
 */
//Preparar
$consulta = 
<<<SQL
INSERT INTO usuarios VALUES ('invitado', 'invitado', 'global', 'para todos', 2015, 1);

SQL;
//Insertar
$resultado = mysql_query($consulta);
//Cerrar
//sqlite_close($conexion);
/*
 * no utilizo este cierre
 */


//CREAR UNA TABLA DE LOGS------------------------------------------------------------
//Conexion---------------------------------
//$conexion = sqlite_open('favoritos.db') or die('Ha sido imposible establecer la conexion');
/*
 * voy a saltarme la conexion
 */
//Crear tabla---------------------------------
$consulta = 
<<<SQL

CREATE TABLE logs(

utc Int,
anio Int,
mes Int,
dia Int,
hora Int,
minuto Int,
segundo Int,
ip Char(50),
navegador Char(100),
usuario Char(40),
contrasena Char(40)



);

SQL;
//Insertar contenido en la tabla--------------
$resultado = mysql_query($consulta);
//Cerrar la conexion--------------------------
//sqlite_close($conexion);
/*
 * sin cerrar la conexion
 */

//CONTENIDO DE PRUEBA PARA LA TABLA DE USUARIOS--------------------------------------
//Establecer
//$conexion = sqlite_open('favoritos.db') or die('Ha sido imposible establecer la conexion');
/*
 * voy a ir directo a la consulta
 */
//Preparar
$consulta = 
<<<SQL
INSERT INTO logs VALUES (000000000,2015,01,01,23,21,00,'127.0.0.1','chrome','invitado','invitado');

SQL;
//Insertar
$resultado = mysql_query($consulta);
//Cerrar
$bd->cerrar();
?>
