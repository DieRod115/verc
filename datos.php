<?php 
$mysqli = new mysqli("localhost","root","","encomienda");
$sql = " SELECT * FROM usuario ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<head>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <section>
        <h1>Usuarios</h1>
        
        <table>
            <tr>
                <th>Cedula</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Rol</th>
            </tr>
            
            <?php 
              
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                
                <td><?php echo $rows['cod_usuario'];?></td>
                <td><?php echo $rows['nombre'];?></td>
                <td><?php echo $rows['apellido'];?></td>
                <td><?php echo $rows['rol'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </section>
</body>
<a href="index.html">Menu </a>
</html>