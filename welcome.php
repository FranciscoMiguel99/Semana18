<? php
session_start ();
if ( $ _SESSION [ "loggin" ] == "OK" ) {
	echo  "<h1> Bienvenido al usuario del sitio conectado </h1>" ;
} más {
	encabezado ( "ubicación: index.php" );
}
