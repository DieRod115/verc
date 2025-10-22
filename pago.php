<?php

$con = mysqli_connect("localhost","root","","encomienda");
$Ced = $_POST['Ced'];
$metodo = $_POST['metodo'];
$total = $_POST['total'];
$fecha = date('Y/m/d');
$sql2 = " SELECT max(cod_encomienda) from encomienda";
$rs2 = mysqli_query($con, $sql2);
while($c=mysqli_fetch_array($rs2)){
$codEnco = $c[0];}
$sql = "INSERT INTO `pago` 
( `metodo`, `total`, `fecha`, `cod_usuario`, `cod_encomienda`) 
VALUES ( '$metodo', '$total', '$fecha','$Ced','$codEnco')";

$rs = mysqli_query($con, $sql);

header('Location: index.html');
exit;
?>