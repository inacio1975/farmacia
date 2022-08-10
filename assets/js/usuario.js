$(document).ready(function() {
    const id_usuario = $('#id_usuario').val();
    let funcion = "";

    buscarUsuario(id_usuario);

    function buscarUsuario(dato) {
        funcion = "buscar_usuario";
        $.post('../controller/UsuarioController.php', {dato, funcion}, (response) => {
            const usuario = JSON.parse(response);

            let nombre = `${usuario.nombre}`;
            let apellidos = `${usuario.apellidos}`;
            let edad = `${usuario.edad}`;
            let dni = `${usuario.dni}`;
            let tipo = `${usuario.tipo}`;
            let telefono = `${usuario.telefono}`;
            let residencia = `${usuario.residencia}`;
            let correo =  `${usuario.correo}`;
            let sexo =  `${usuario.sexo}`;
            let adicional = `${usuario.adicional}`;

            $("#nombre_us").html(nombre);
            $("#apellido_us").html(apellidos);
            $("#edad").html(edad);
            $("#dni_us").html(dni);
            $("#us_tipo").html(tipo);
            $("#telefono_us").html(telefono);
            $("#residencia_us").html(residencia);
            $("#correo_us").html(correo);
            $("#sexo_us").html(sexo);
            $("#adicional_us").html(adicional);
        });
    }

    var edit = false;
    $(document).on("click", ".edit", function(e) {
        funcion = "capturar_datos";
        edit = true;
        let dato = id_usuario;
        $.post('../controller/UsuarioController.php', {funcion, dato}, function(response) {
            const usuario = JSON.parse(response);
            $("#telefone").val(`${usuario.telefono} `);
            $("#endereco").val(`${usuario.residencia}`);
            $("#email").val(`${usuario.correo}`);
            $("#sexo").val(`${usuario.sexo}`);
            $("#info").val(`${usuario.adicional}`);
        });
    });

    $("#form-edit-usuario").submit(function(event) {
        event.preventDefault();
        if(edit){
            funcion = "editar_usuario";
           
            const telefone =  $("#telefone").val();
            const endereco =  $("#endereco").val();
            const email =  $("#email").val();
            const sexo =  $("#sexo").val();
            const adicional =  $("#info").val();

            const dato = {id_usuario, telefone, endereco, email, sexo, adicional};
            $.post('../controller/UsuarioController.php',{dato, funcion}, function(response){
                const resposta = JSON.parse(response);
                if(resposta.codigo){
                   showAlert("editado");
                    $("#form-edit-usuario").trigger('reset');

                   buscarUsuario(id_usuario);
                   edit = false;
                }
            });
        }else{
            showAlert("noeditado");
        }
    });

    function showAlert(alertId, time = 3000){
        $("#" + alertId).hide("slow");
        $("#" + alertId).show();
        setTimeout(function(){
            $("#" + alertId).hide(2000);
        }, time);
    }
});

