function mostrarFormularioMed() {
    $("#frmMedico").dialog('open');
}

function insertarMedico() {
    var MedIdentificacion = $("#MedIdentificacion").val();
    var MedNombres = $("#MedNombres").val();
    var MedApellidos = $("#MedApellidos").val();

    $.post("index.php?accion=ingresarMedico",{
        MedIdentificacion,
        MedNombres,
        MedApellidos
    },
        function () {
            $("#frmMedico").dialog('close');
        });

    consultarMedico();

    $("#MedIdentificacion").val("");
    $("#MedNombres").val("");
    $("#MedApellidos").val("");

    // queryString = $("#agregarMedico").serialize();
    // url = "index.php?accion=ingresarMedico&" + queryString;
    // $("#medico").load(url);
    // $("#frmMedico").dialog('close');
}

function cancelar() {
    $(this).dialog('close');
}

$(document).ready(function () {
    $("#frmMedico").dialog({
        autoOpen: false,
        height: 310,
        width: 400,
        modal: true,
        buttons: {
            "Insertar": insertarMedico,
            "Cancelar": cancelar
        }
    });
});

function consultarMedico() {
    var url = "index.php?accion=consultarMedico";
    $("#medico").load(url, function () {
    });
}