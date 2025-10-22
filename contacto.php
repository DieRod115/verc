
<?php

$con = mysqli_connect("localhost","root","","encomienda");

#Usuario

$txtCed = $_POST['txtCed'];
$txtName = $_POST['txtName'];
$txtApellido = $_POST['txtApellido'];
$txtPwrd = $_POST['txtPwrd'];
$txtRol = $_POST['txtRol'];

$sql = "INSERT INTO `usuario` 
(`cod_usuario`, `nombre`, `apellido`, `contrasena`, `rol`) 
VALUES ('$txtCed', '$txtName', '$txtApellido', '$txtPwrd', '$txtRol')";

$rs = mysqli_query($con, $sql);

header('Location: index.html');
exit;
?>