<?php 
$mysqli = new mysqli("localhost","root","","encomienda");

?>
<head>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    
    <section>
        <h1>Encomiendas</h1>
        <form class="form" action=""  method="GET">
            <div class="field">
            <label for="codigo">Codigo de encomienda: </label>
    <input  type="text" class="input-text" name="codigo">

            </div>

    <div class="enviar">
    <input class="boton" type="submit" name="enviar" value="buscar">
    </div>
    
    </form>
    <section>
        <table>
            <tr>
                <th>N° Encomienda</th>
                <th>Remitente</th>
                <th>Destinatario</th>
                <th>Telf Remitente</th>
                <th>Telf Destinatario</th>
                <th>Descripcion</th>
                <th>Fecha</th>
                <th>Estado</th>
                <th>Ruta</th>
                <th>Oficinista</th>
                <th>Total</th>
            </tr>
            
            <?php 
              
              if(isset($_GET['enviar']))
              {
                  
                  $codigo = $_GET['codigo']; 
                  $resultado = $mysqli->query("SELECT * FROM encomienda WHERE cod_encomienda like '%$codigo%' "  ); 
                      while ($rows = $resultado->fetch_assoc()){
            ?>
            <tr>
                
                <td><?php echo $rows['cod_encomienda'];?></td>
                <td><?php echo $rows['cod_remitente'];?></td>
                <td><?php echo $rows['cod_destinatario'];?></td>
                <td><?php echo $rows['telefono_rem'];?></td>
                <td><?php echo $rows['telefono_dest'];?></td>
                <td><?php echo $rows['descripcion'];?></td>
                <td><?php echo $rows['fecha'];?></td>
                <td><?php echo $rows['estado'];?></td>
                <td><?php echo $rows['cod_ruta'];?></td>
                <td><?php echo $rows['cod_oficinista'];?></td>
                <?php  $resultado2 = $mysqli->query("SELECT total FROM pago WHERE cod_encomienda like '%$codigo%' "  ); 
                       $row = $resultado2->fetch_assoc()
                        ?>
                        <td><?php echo $row['total'];?></td>
                      
                        
                <td><a href="editar.php?id=<?php echo $rows['cod_encomienda'];?>">editar </a></td>
                <td><a href="eliminar.php?id=<?php echo $rows['cod_encomienda'];?>">eliminar </a></td>
            </tr>
            <?php
                }}
            ?>
        </table>
    </section>
</body>
<a href="index.html">Menu </a>
 
</html>