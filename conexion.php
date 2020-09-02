<?php
    /* define('_HOST_NAME','localhost');
     define('_DATABASE_NAME','bdfacturacion');
     define('_DATABASE_USER_NAME','root');
     define('_DATABASE_PASSWORD','');*/

 	$servidor='localhost';
    $basedatos='gimnasio';
    $usuario='root';
    $contrasena='';
     /*$MySQLiconn = new MySQLi(_HOST_NAME,_DATABASE_USER_NAME,_DATABASE_PASSWORD,_DATABASE_NAME);*/
     $MySQLiconexion = new MySQLi($servidor,$usuario,$contrasena,$basedatos);
  
     if($MySQLiconexion->connect_errno) //Sino se conecta al servidor (Error)
     {
       die("ERROR: -> ".$MySQLiconexion->connect_error);
     }
/*
$cn=mysql_connect("localhost","root","")or die("Error en Conexion");
$db=mysql_select_db("bdfacturacion")or die("Error en la conexión a la base de datos");
return($cn);
return($db);*/

?>