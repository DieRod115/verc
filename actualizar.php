<?php
$con = mysqli_connect("localhost","root","","encomienda");


$txtTelf1 = $_POST['telefono_rem'];
$txtTelf2 = $_POST['telefono_dest'];
$txtDesc = $_POST['descripcion'];

$txtEst = $_POST['estado'];

$id = $_POST['id'];
$query = mysqli_query($con, "UPDATE encomienda set  telefono_rem = '$txtTelf1', 
telefono_dest = '$txtTelf2', descripcion ='$txtDesc', estado = '$txtEst' 
where cod_encomienda = $id");
header('Location: index.html');
