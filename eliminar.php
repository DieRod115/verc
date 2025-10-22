<?php
$con = mysqli_connect("localhost","root","","encomienda");


$id = $_GET['id'];
$query2 = mysqli_query($con, "DELETE from pago where cod_encomienda = $id");
$query = mysqli_query($con, "DELETE from encomienda where cod_encomienda = $id");
header('Location: encomiendas.php');