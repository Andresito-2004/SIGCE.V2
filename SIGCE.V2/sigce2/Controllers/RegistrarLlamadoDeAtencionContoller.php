<?php
require ('../Model/conexion.php');
$Gravedad = $_POST['Gravedad'];
$Articulo = $_POST['Articulo'];
$Fecha  = $_POST['Fecha'];
$IdeAPrendiz  = $_POST['IdeAPrendiz'];
$IdeInstructor  = $_POST['IdeInstructor'];

$insertar = "INSERT INTO citacion (FK_id_Gra,Art_Cit,fec_cit,FK_ide_Apr,FK_ide_ins) VALUES('$Gravedad','$Articulo','$Fecha','$IdeAPrendiz','$IdeInstructor');";

$query = mysqli_query(conectar(), $insertar);

if($query){
  echo "<script> alert('correcto');
   location.href = '../index.php';
  </script>";

}else{
   echo "<script> alert('incorrecto, vuelve a intentarlo');
   location.href = '../Views/RegistrarLlamadoDeAtencion/RegistrarLlamadoDeAtencionContoller.php';
   </script>";
}