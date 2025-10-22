
<?php

$con = mysqli_connect("localhost","root","","encomienda");

#Ruta

$txtSalida = $_POST['txtSalida'];
$txtDestino = $_POST['txtDestino'];
$txtBus = $_POST['txtBus'];

$sql = "INSERT INTO `ruta` 
( `salida`, `destino`, `bus`) 
VALUES ( '$txtSalida', '$txtDestino', '$txtBus')";

$rs = mysqli_query($con, $sql);

header('Location: index.html');
exit;
?>