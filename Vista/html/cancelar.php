<!DOCTYPE html>
<html>

<head>
    <title>Cancelar Cita</title>
    <link rel="stylesheet" type="text/css" href="Vista/css/estilos.css">
    <script type="text/javascript" src="Vista/jquery/jquery-3.2.1-min.js"></script>
    <script type="text/javascript" src="Vista/js/script.js"></script>
</head>

<body>
    <div id="contenedor">
        <div id="encabezado">
            <h1>Sistema de Gestión Odontológica</h1>
        </div>
        <ul id="menu">
            <li><a href="index.php">Inicio</a> </li>
            <li><a href="index.php?accion=asignar">Asignar</a> </li>
            <li><a href="index.php?accion=consultar">Consultar Cita</a> </li>
            <li class="activa"><a href="index.php?accion=cancelar">Cancelar Cita</a> </li>
            <li><a href="index.php?accion=medicos">Medicos</a> </li>
        </ul>
        <div id="contenido">
            <h2>Cancelar Cita</h2>
            <form action="" method="post" id="frmcancelar">
                <table>
                    <tr>
                        <td>Documento del Paciente </td>
                        <td><input type="text" name="cancelarDocumento" id="cancelarDocumento"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="button" value="Consultar" onclick="cancelarCita()"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div id="paciente3"></div>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>

</html>