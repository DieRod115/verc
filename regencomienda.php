<?php
$con = mysqli_connect("localhost","root","","encomienda");
#Encomienda
if(isset($_POST['submit'])){
$txtCed1 = $_POST['txtCed1'];
$txtCed2 = $_POST['txtCed2'];
$txtCodruta = $_POST['txtCodruta'];
$txtTelf1 = $_POST['txtTelf1'];
$txtTelf2 = $_POST['txtTelf2'];
$txtDesc = $_POST['txtDesc'];
$txtFecha = date('Y/m/d');
$txtEst = $_POST['txtEst'];
$txtOfc = $_POST['txtOfc'];
$query = mysqli_query($con, "INSERT INTO `encomienda` 
( `cod_remitente`, `cod_destinatario`,
`telefono_rem`, `telefono_dest`, `descripcion`,`estado`,`cod_oficinista`, `cod_ruta`,`fecha`) 
VALUES ( '$txtCed1', '$txtCed2','$txtTelf1', '$txtTelf2', '$txtDesc', '$txtEst','$txtOfc', '$txtCodruta','$txtFecha')");
header('Location: pago.html');
exit;
#$rs = mysqli_query($con, $sql);
}

?>
<head>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Servicio encomiendas</h1>
    <form class="form" name="frmContact" method="post" >
    <fieldset>
    <legend>Registro de encomienda</legend>
    <div class="field">
    <label for="cod_remitente">Cedula de remitente </label>
    <input type="text" class="input-text" name="txtCed1" id="txtCed1">
</div>
<div class="field">
    <label for="cod_destinatario">Cedula de destinatario </label>
    <input type="text" class="input-text" name="txtCed2" id="txtCed2">
</div>
<div class="field">
    <label for="telefono_rem">Telf de remitente</label>
    <input type="text" class="input-text" name="txtTelf1" id="txtTelf1">
</div>
<div class="field">
    <label for="telefono_dest">Telf de destinatario</label>
    <input type="text" class="input-text" name="txtTelf2" id="txtTelf2"></input>
</div>
<div class="field">
    <label for="descripcion">Descripcion</label>
    <input type="text" class="input-text" name="txtDesc" id="txtDesc"></input>
</div>
<div class="field">
    <label for="estado">Estado</label>
    <input type="text" class="input-text" name="txtEst" id="txtEst"></input>
</div>
<div class="field">
    <label for="cod_oficinista">Oficinista</label>
    <input type="text" class="input-text" name="txtOfc" id="txtOfc"></input>
</div>
<div class="field">
    <label for="cod_ruta">Ruta</label>
    <select class="input-text" name="txtCodruta">
    <?php
    $rutas = mysqli_query($con, "select * from ruta");
    while($c=mysqli_fetch_array($rutas)){
    ?>
    <option value="<?php echo $c["cod_ruta"]?>"><?php echo $c['salida']."-".$c['destino']?>
   <?php }
    ?> 
    </select>
    </div>
    
    <div class="enviar">
        <input class="boton" type="submit" name="submit" id="submit" value="Enviar">
    </div>
    </fieldset>
    </form>
    <br>
    <nav class="nav-down">
        <a href="datos.php">Usuarios </a>
        <a href="index.html">Menu </a>
    </nav>

    
    </body>

    