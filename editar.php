<?php 
$mysqli = new mysqli("localhost","root","","encomienda");
$id = $_GET['id'];
$query = "SELECT * from encomienda where cod_encomienda = $id";
$result = $mysqli->query($query);
$record = $result->fetch_assoc(); 
     ?>

<head>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Servicio encomiendas</h1>
    <form class="form" name="frmContact" method="post" action="actualizar.php">
    <fieldset>
    <legend>Registro de encomienda</legend>
    <div class="field">
    
<div class="field">
    <label for="telefono_rem">Telf de remitente</label>
    <input type="text" class="input-text" name="telefono_rem" id="telefono_rem" value="<?php echo $record['telefono_rem'];?>">
</div>
<div class="field">
    <label for="telefono_dest">Telf de destinatario</label>
    <input type="text" class="input-text" name="telefono_dest" id="telefono_dest"  value="<?php echo $record['telefono_dest'];?>"></input>
</div>
<div class="field">
    <label for="descripcion">Descripcion</label>
    <input type="text" class="input-text" name="descripcion" id="descripcion" value="<?php echo $record['descripcion'];?>"></input>
</div>
<div class="field">
    <label for="estado">Estado</label>
    <input type="text" class="input-text" name="estado" id="estado" value="<?php echo $record['estado'];?>"></input>
</div>

    <input type="hidden" name="id" value="<?php echo $record['cod_encomienda'];?>"></input>
    <div class="enviar">
        <input class="boton" type="submit" name="submit" id="submit" value="Guardar">
    </div>
    </fieldset>
    </form>
