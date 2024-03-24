<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            if($result->num_rows > 0){
        ?>
        <table>
            <tr>
                <th>Identificación</th><th>Nombre</th><th>Apellido</th>
            </tr>
                <?php
                    while($fila=$result->fetch_object()){
                ?>
            <tr>
                <td><?php echo $fila->MedIdentificacion;?></td>
                <td><?php echo $fila->MedNombres;?></td>
                <td><?php echo $fila->MedApellidos;?></td>
            </tr>
            <?php
                }
            ?>
        </table>
        <?php
            }
            else {
        ?>
        <p>El paciente no tiene citas asignadas</p>
        <?php
            }
        ?>
    </body>
</html>