<?php

$idConn = mysql_connect("localhost","inter_root","isatt03p3n");

   if (!$idConn){
   die("No se conecto al servidor:" . mysql_error());
   }
   
   $dbSelect = mysql_select_db("inter_administracion",$idConn);
   if (!$dbSelect) {
   	die('No se pudo seleccionar la BD: ' . mysql_error()); 
   }

/*
$idConn = mysql_connect("localhost","cp000107_root","Isatt03p3n");

   if (!$idConn){
   die("No se conecto al servidor:" . mysql_error());
   }
   
   $dbSelect = mysql_select_db("cp000107_sisco",$idConn);
   if (!$dbSelect) {
   	die('No se pudo seleccionar la BD: ' . mysql_error()); 
   }
*/
?>
