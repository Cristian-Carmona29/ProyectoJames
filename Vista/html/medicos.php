<!DOCTYPE html>
<html>

<head>
    <title>Sistema de Gestión Odontológica</title>
    <link rel="stylesheet" type="text/css" href="Vista/css/estilos.css">
    <script type="text/javascript" src="Vista/jquery/jquery-3.2.1-min.js"></script>
    <script src="Vista/jquery/jquery-ui-1.13.2/jquery-ui-1.13.2/jquery-ui.js" type="text/javascript"></script>
    <link href="Vista/jquery/jquery-ui-1.13.2/jquery-ui-1.13.2/jquery-ui.min.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="Vista/js/scriptMedico.js"></script>
</head>

<body>
    <div id="contenedor">
        <div id="encabezado">
            <h1>Sistema de Gestión Odontológica</h1>
        </div>
        <ul id="menu">
            <li><a href="index.php">inicio</a> </li>
            <li><a href="index.php?accion=asignar">Asignar</a> </li>
            <li><a href="index.php?accion=consultar">Consultar Cita</a> </li>
            <li><a href="index.php?accion=cancelar">Cancelar Cita</a> </li>
            <li class="activa"><a href="index.php?accion=medicos">Medicos</a> </li>
        </ul>
        <div id="contenido">
            <h2>Asignar Cita</h2>
            <form id="frmasignar" action="index.php?accion=guardarMedico" method="post">
                <table>
                    <tr>
                        <td colspan="2"><input type="button" name="ingMedico" id="ingMedico" value="Ingresar Nuevo Medico" onclick="mostrarFormularioMed()"></td>
                    </tr>
                </table>
            </form>
            <div id="medico"></div>
        </div>
    </div>

    <div id="frmMedico" title="Agregar Nuevo Medico">
        <form id="agregarMedico">
            <table>
                <tr>
                    <td>Documento</td>
                    <td><input type="text" name="MedIdentificacion" id="MedIdentificacion"></td>
                </tr>
                <tr>
                    <td>Nombres</td>
                    <td><input type="text" name="MedNombres" id="MedNombres"></td>
                </tr>
                <tr>
                    <td>Apellidos</td>
                    <td><input type="text" name="MedApellidos" id="MedApellidos"></td>
                </tr>
            </table>
        </form>
    </div>

    <script>consultarMedico();</script>
</body>

</html>