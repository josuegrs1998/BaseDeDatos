<?php
include('../../conexion.php');
include('../../Login/iniciar.php');
	
	//recuperar las variables
	$cif=$_POST['cif'];
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$carrera=$_POST['carrera'];

	//hacemos la sentencia de sql
	$sql="INSERT into alumnos VALUES('$cif','$nombre','$apellido')";
	$sqk="INSERT into oferta_alumnos VALUES ('$carrera','$cif')";
	//verificamos la ejecucion
	if(mysqli_query($conexion, $sql) && mysqli_query($conexion, $sqk)){
		header("Location: http://localhost:8080/formulario/admin/alumnos/alumnos.php");
	}
	else{
		echo "Ya existe un alumno con ese numero de carnet";
	
		
	}
?>

