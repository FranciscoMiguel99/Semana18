<? php
session_start ();
include_once  './class/Connection.php' ;
include_once  './class/Users.php' ;
include_once  './class/UsersDAO.php' ;
$ error = 1 ;
si ( $ _POST ):
    $ con = Conexión :: getInstance ();
    $ usuario = nuevos  usuarios ( $ _POST [ 'usuario' ], md5 ( $ _POST [ 'contraseña' ]));
    $ userDAO = nuevos  UsersDAO ( $ con );
    $ filas = $ userDAO -> checkAcces ( $ usuario );
    si ( $ filas ):
	$ _SESSION [ "loggin" ] = "Aceptar" ;
        $ usuario -> initSession ();
        encabezado ( "ubicación: bienvenida.php" );
    otra cosa :
        $ error = 2 ;
    endif ;
endif ;
?>
<! doctype html >
< html  lang = " es " >
    < cabeza >
        < meta  name = " viewport " content = " width = device-width, initial-scale = 1 " >
        < título > Mi registro de integración de Bootstrap </ título >
        < link  rel = " stylesheet " href = " assets / bower_components / bootstrap / dist / css / bootstrap.min.css " />
        < link  rel = " stylesheet " href = " assets / bower_components / bootstrap / dist / css / bootstrap-theme.min.css " />
        < script  src = " assets / bower_components / jquery / dist / jquery.min.js " > </ script >
        < style  rel = " hoja de estilo " >   
            . jumbotron {
                ancho máximo :  550 px ;
                margen :  0 automático;
                margen superior :  25 px ;
            }
            # botones {
                alineación de texto : centro;
            }
            # botones  >  botón {
                margen :  5 px ;
            }
        </ estilo >
    </ cabeza >
    < cuerpo >
        < div  class = " contenedor " >
            <? php
            si ( $ error = 2 ):
            ?>
                < div  id = " mensaje " class = " alert alert-danger " > El usuario y / o contraseña es incorrecta </ div >
            <? php  endif ; ?>
            < div  class = " jumbotron " >
                < form  class = " form-signin " role = " form " method = " post " >
                    < h2  class = " form-signin-header " > Inicia sesión </ h2 >
                    < input  type = " text " name = " user " class = " form-control " placeholder = " Dirección de correo electrónico " required = "" autofocus = "" >
                    < input  type = " password " name = " pass " class = " form-control " placeholder = " Password " required = "" >
                    < div  id = " botones " class = " grupo-entrada-bloque-central " >
                        < input  class = " btn btn-primary " type = " submit " value = " Enviar " />
                        < button  class = " btn btn-danger " type = " reset " > Cancelar </ button >
                    </ div >
                </ formulario >
            </ div >
        </ div >
    </ cuerpo >
</ html >
