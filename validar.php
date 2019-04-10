<?php
session_start();
$login=$_POST['login'];
$clave=$_POST['clave'];
include('conex.php');
include('funciones.php');

$wsql="select * from usuarios where usuario='$login' and clave='$clave'";
   		$resultado=mysql_query($wsql);
   		$row=mysql_fetch_array($resultado);
		if ($row==0)
		{
			$_SESSION['men']="Usuario no Existe";
			redirect("index.php");
		}
		else
		if ( $row['nivel']=='1' )
		{
			$_SESSION['cod1']="$login";
			$_SESSION['nivel']=$row['nivel'];
			$_SESSION['usuario']=$row['usuario'];
			redirect("index.php");

		}
		else
		if ( $row['nivel']=='2' )
		{
			$_SESSION['cod1']="$login";
			$_SESSION['nivel']=$row['nivel'];
			$_SESSION['usuario']=$row['usuario'];
			redirect("index.php");
			
			
		}



?>