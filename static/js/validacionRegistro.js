/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//Otro cambio
jQuery(document).ready(function ($) {
    $('.solo-numero').keyup(function (){
        this.value = (this.value + '').replace(/[^0-9]/g, '');
    });
    
    $('#correoEnviado').click(function () {
        //var correo = document.getElementById("email").value;
//        var tel1=document.getElementById("telefono1").value;
//        tel1.value = (this.value + '').replace(/[^0-9]/g, '');
//        $("#telefono1").val(tel1);
//        var tel2=document.getElementById("telefono2").value;
//        tel2.value = (this.value + '').replace(/[^0-9]/g, '');
//        $("#telefono2").val(tel2);
        if (validar('email')==false || validar('empresa')==false || validar('numeroempleado')==false || validar('apellido1')==false || validar('apellido2')==false || validar('telefono1') == false || validar('telefono2')==false || validar('rfccurp')==false) {

            swal({
                title: "Alerta",
                text: "Sus campos no estan validados.",
                type: "warning"
            });

            return false;

        } else {

//            swal({
//                title: "Registro",
//                text: "Se le enviara un correo a: "+correo+" con su contraseña para acceder, para terminar el proceso presione OK",
//                type: "success"
//            },
//            function () {
//                $('#form').submit();
//            }
//            );
            addcuenta();
            return false;
        }

    });
    
    $("#email").keyup(function () {
        validar('email');
    });
    
    $("#empresa").keyup(function () {
        validar('empresa');
    });
    
    $("#numeroempleado").keyup(function () {
        validar('numeroempleado');
    });
    
    $("#nombre").keyup(function () {
        validar('nombre');
    });
    
    $("#apellido1").keyup(function () {
        validar('apellido1');
    });
    
    $("#apellido2").keyup(function () {
        validar('apellido2');
    });
    
    $("#telefono1").keyup(function () {
        validar('telefono1');
    });
    
    $("#telefono2").keyup(function () {
        var valorinput = $('#telefono2').val().toUpperCase();
        $('#telefono2').val(valorinput);
        if ($("#telefono2").val().length > 0) {
            validar('telefono2');
        }

        else {
            $("#telefono2").parent().removeClass('has-error');
            $("#telefono2").parent().removeClass('has-feedback');
        }
    });
    
    $("#rfccurp").keyup(function () {
        var valorinput = $('#rfccurp').val().toUpperCase();
        $('#rfccurp').val(valorinput);
        validar('rfccurp');
    });
    
    function validar(input){
        
        if (input === 'email') {
            var correo1 = document.getElementById("email").value;
            if (!(/^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i.test(correo1)) && correo1.length > 0) {
                $("#iconotexto").remove();
                $("#email").parent().parent().attr("class", "form-group has-error has-feedback");
                $("#email").parent().children("span").text("Ingresar un correo valido").show();
                $("#email").parent().append("<span id='iconotexto' class='glyphicon glyphicon-remove form-control-feedback' style='text-align-last: left;'></span>");
                return false;
            }
            else if (correo1.length === 0 || correo1 == "") {
                $("#iconotexto").remove();
                $("#email").parent().parent().attr("class", "form-group has-error has-feedback");
                $("#email").parent().children("span").text("Ingresar correo").show();
                $("#email").parent().append("<span id='iconotexto' class='glyphicon glyphicon-remove form-control-feedback' style='text-align-last: left;'></span>");
                return false;
            }
            else {
                $("#iconotexto").remove();
                $("#email").parent().parent().attr("class", "form-group has-success has-feedback");
                $("#email").parent().children("span").text("").hide();
                $("#email").parent().append("<span id='iconotexto' class='glyphicon glyphicon-ok form-control-feedback' style='text-align-last: left;'></span>");

                return true;
            }
        }
        
        if (input === 'empresa') {
            var empresa = document.getElementById("empresa").value;
            if (empresa === null || empresa.length == 0 || /^\s+$/.test(empresa) || empresa == "") {
                $("#iconotexto").remove();
                $("#empresa").parent().parent().attr("class", "form-group has-error has-feedback");
                $("#empresa").parent().children("span").text("Debe ingresar el nombre.").show();
                $("#empresa").parent().append("<span id='iconotexto' class='glyphicon glyphicon-remove form-control-feedback' style='text-align-last: left;'></span>");
                return false;
            }
            ///^(?=.{1,50}$)[a-z]+(?:['_.\s][a-z]+)*$/i
            ///^\w+$/i

            else {
                var espacever=empresa.charAt(empresa.length-1);
                if(espacever==' '){
                    $("#iconotexto").remove();
                    $("#empresa").parent().parent().attr("class", "form-group has-error has-feedback");
                    $("#empresa").parent().children("span").text("Existe un espacio al final.").show();
                    $("#empresa").parent().append("<span id='iconotexto' class='glyphicon glyphicon-remove form-control-feedback' style='text-align-last: left;'></span>");
                    return false;
                }
                else{
                    $("#iconotexto").remove();
                    $("#empresa").parent().parent().attr("class", "form-group has-success has-feedback");
                    $("#empresa").parent().children("span").text("").hide();
                    $("#empresa").parent().append("<span id='iconotexto' class='glyphicon glyphicon-ok form-control-feedback' style='text-align-last: left;'></span>");

                    return true; 
                }
            }
        }
        
        if(input==="numeroempleado"){
            var numeroempleado = document.getElementById("numeroempleado").value;
            if (numeroempleado === null || numeroempleado.length == 0 || /^\s+$/.test(numeroempleado) || numeroempleado == "") {
                $("#iconotexto").remove();
                $("#numeroempleado").parent().parent().attr("class", "form-group has-error has-feedback");
                $("#numeroempleado").parent().children("span").text("Debe ingresar el número de empleado").show();
                $("#numeroempleado").parent().append("<span id='iconotexto' class='glyphicon glyphicon-remove form-control-feedback' style='text-align-last: left;'></span>");
                return false;
            }
            else if (isNaN(numeroempleado)) {
                $("#iconotexto").remove();
                $("#numeroempleado").parent().parent().attr("class", "form-group has-error has-feedback");
                $("#numeroempleado").parent().children("span").text("No se aceptan letras o caracteres especiales.").show();
                $("#numeroempleado").parent().append("<span id='iconotexto' class='glyphicon glyphicon-remove form-control-feedback' style='text-align-last: left;'></span>");
                return false;
            }
            else {
                $("#iconotexto").remove();
                $("#numeroempleado").parent().parent().attr("class", "form-group has-success has-feedback");
                $("#numeroempleado").parent().children("span").text("").hide();
                $("#numeroempleado").parent().append("<span id='iconotexto' class='glyphicon glyphicon-ok form-control-feedback' style='text-align-last: left;'></span>");

                return true;
            }
        }
        
        if (input === 'nombre') {
            var nombre = document.getElementById("nombre").value;
            if (nombre === null || nombre.length == 0 || /^\s+$/.test(nombre) || nombre == "") {
                $("#iconotexto").remove();
                $("#nombre").parent().parent().attr("class", "form-group has-error has-feedback");
                $("#nombre").parent().children("span").text("Debe ingresar el nombre.").show();
                $("#nombre").parent().append("<span id='iconotexto' class='glyphicon glyphicon-remove form-control-feedback' style='text-align-last: left;'></span>");
                return false;
            }
            ///^(?=.{1,50}$)[a-z]+(?:['_.\s][a-z]+)*$/i
            ///^\w+$/i
            ///^[a-z\d\-_\s]+$/i
            if (!/^(?=.{1,50}$)[a-z]+(?:['_.\s][a-z]+)*$/i.test(nombre)) {
                $("#iconotexto").remove();
                $("#nombre").parent().parent().attr("class", "form-group has-error has-feedback");
                $("#nombre").parent().children("span").text("No se aceptan caracteres especiales.").show();
                $("#nombre").parent().append("<span id='iconotexto' class='glyphicon glyphicon-remove form-control-feedback' style='text-align-last: left;'></span>");
                return false;
            }

            else {
                var espacever=nombre.charAt(nombre.length-1);
                if(espacever==' '){
                    $("#iconotexto").remove();
                    $("#nombre").parent().parent().attr("class", "form-group has-error has-feedback");
                    $("#nombre").parent().children("span").text("Existe un espacio al final.").show();
                    $("#nombre").parent().append("<span id='iconotexto' class='glyphicon glyphicon-remove form-control-feedback' style='text-align-last: left;'></span>");
                    return false;
                }
                else{
                    $("#iconotexto").remove();
                    $("#nombre").parent().parent().attr("class", "form-group has-success has-feedback");
                    $("#nombre").parent().children("span").text("").hide();
                    $("#nombre").parent().append("<span id='iconotexto' class='glyphicon glyphicon-ok form-control-feedback' style='text-align-last: left;'></span>");

                    return true; 
                }
            }
        }
        
        if (input === 'apellido1') {
            var apellido1 = document.getElementById("apellido1").value;
            if (apellido1 === null || apellido1.length == 0 || /^\s+$/.test(apellido1) || apellido1 == "") {
                $("#iconotexto").remove();
                $("#apellido1").parent().parent().attr("class", "form-group has-error has-feedback");
                $("#apellido1").parent().children("span").text("Debe ingresar el nombre.").show();
                $("#apellido1").parent().append("<span id='iconotexto' class='glyphicon glyphicon-remove form-control-feedback' style='text-align-last: left;'></span>");
                return false;
            }
            ///^(?=.{1,50}$)[a-z]+(?:['_.\s][a-z]+)*$/i
            ///^\w+$/i
            ///^[a-z\d\-_\s]+$/i
            if (!/^(?=.{1,50}$)[a-z]+(?:['_.\s][a-z]+)*$/i.test(apellido1)) {
                $("#iconotexto").remove();
                $("#apellido1").parent().parent().attr("class", "form-group has-error has-feedback");
                $("#apellido1").parent().children("span").text("No se aceptan caracteres especiales.").show();
                $("#apellido1").parent().append("<span id='iconotexto' class='glyphicon glyphicon-remove form-control-feedback' style='text-align-last: left;'></span>");
                return false;
            }

            else {
                var espacever=apellido1.charAt(apellido1.length-1);
                if(espacever==' '){
                    $("#iconotexto").remove();
                    $("#apellido1").parent().parent().attr("class", "form-group has-error has-feedback");
                    $("#apellido1").parent().children("span").text("Existe un espacio al final.").show();
                    $("#apellido1").parent().append("<span id='iconotexto' class='glyphicon glyphicon-remove form-control-feedback' style='text-align-last: left;'></span>");
                    return false;
                }
                else{
                    $("#iconotexto").remove();
                    $("#apellido1").parent().parent().attr("class", "form-group has-success has-feedback");
                    $("#apellido1").parent().children("span").text("").hide();
                    $("#apellido1").parent().append("<span id='iconotexto' class='glyphicon glyphicon-ok form-control-feedback' style='text-align-last: left;'></span>");

                    return true; 
                }
            }
        }
        
        if (input === 'apellido2') {
            var apellido2 = document.getElementById("apellido2").value;
            if (apellido2 === null || apellido2.length == 0 || /^\s+$/.test(apellido2) || apellido2 == "") {
                $("#iconotexto").remove();
                $("#apellido2").parent().parent().attr("class", "form-group has-error has-feedback");
                $("#apellido2").parent().children("span").text("Debe ingresar el nombre.").show();
                $("#apellido2").parent().append("<span id='iconotexto' class='glyphicon glyphicon-remove form-control-feedback' style='text-align-last: left;'></span>");
                return false;
            }
            ///^(?=.{1,50}$)[a-z]+(?:['_.\s][a-z]+)*$/i
            ///^\w+$/i
            ///^[a-z\d\-_\s]+$/i
            if (!/^(?=.{1,50}$)[a-z]+(?:['_.\s][a-z]+)*$/i.test(apellido2)) {
                $("#iconotexto").remove();
                $("#apellido2").parent().parent().attr("class", "form-group has-error has-feedback");
                $("#apellido2").parent().children("span").text("No se aceptan caracteres especiales.").show();
                $("#apellido2").parent().append("<span id='iconotexto' class='glyphicon glyphicon-remove form-control-feedback' style='text-align-last: left;'></span>");
                return false;
            }

            else {
                var espacever=apellido2.charAt(apellido2.length-1);
                if(espacever==' '){
                    $("#iconotexto").remove();
                    $("#apellido2").parent().parent().attr("class", "form-group has-error has-feedback");
                    $("#apellido2").parent().children("span").text("Existe un espacio al final.").show();
                    $("#apellido2").parent().append("<span id='iconotexto' class='glyphicon glyphicon-remove form-control-feedback' style='text-align-last: left;'></span>");
                    return false;
                }
                else{
                    $("#iconotexto").remove();
                    $("#apellido2").parent().parent().attr("class", "form-group has-success has-feedback");
                    $("#apellido2").parent().children("span").text("").hide();
                    $("#apellido2").parent().append("<span id='iconotexto' class='glyphicon glyphicon-ok form-control-feedback' style='text-align-last: left;'></span>");

                    return true; 
                }
            }
        }
        //Pendiente del RFC y CURP
        
        if(input==="telefono1"){
            var telefono1 = document.getElementById("telefono1").value;
            if (telefono1 === null || telefono1.length == 0 || /^\s+$/.test(telefono1) || telefono1 == "") {
                $("#iconotexto").remove();
                $("#telefono1").parent().parent().attr("class", "form-group has-error has-feedback");
                $("#telefono1").parent().children("span").text("Debe ingresar el telefono").show();
                $("#telefono1").parent().append("<span id='iconotexto' class='glyphicon glyphicon-remove form-control-feedback' style='text-align-last: left;'></span>");
                return false;
            }
            else if (isNaN(telefono1)) {
                $("#iconotexto").remove();
                $("#telefono1").parent().parent().attr("class", "form-group has-error has-feedback");
                $("#telefono1").parent().children("span").text("No se aceptan letras o caracteres especiales.").show();
                $("#telefono1").parent().append("<span id='iconotexto' class='glyphicon glyphicon-remove form-control-feedback' style='text-align-last: left;'></span>");
                return false;
            }
            else if (telefono1.length != 10) {
                $("#iconotexto").remove();
                $("#telefono1").parent().parent().attr("class", "form-group has-error has-feedback");
                $("#telefono1").parent().children("span").text("El telefono debe ser de 10 digitos").show();
                $("#telefono1").parent().append("<span id='iconotexto' class='glyphicon glyphicon-remove form-control-feedback' style='text-align-last: left;'></span>");
                return false;
            }


            else {
                $("#iconotexto").remove();
                $("#telefono1").parent().parent().attr("class", "form-group has-success has-feedback");
                $("#telefono1").parent().children("span").text("").hide();
                $("#telefono1").parent().append("<span id='iconotexto' class='glyphicon glyphicon-ok form-control-feedback' style='text-align-last: left;'></span>");

                return true;
            }
        }
        
        if(input==="telefono2"){
            var telefono1 = document.getElementById("telefono1").value;
            var telefono2 = document.getElementById("telefono2").value;
            if (telefono2 === null || telefono2.length == 0 || /^\s+$/.test(telefono2) || telefono2 == "") {
                $("#iconotexto").remove();
                $("#telefono2").parent().parent().attr("class", "form-group has-error has-feedback");
                $("#telefono2").parent().children("span").text("Debe ingresar el telefono").show();
                $("#telefono2").parent().append("<span id='iconotexto' class='glyphicon glyphicon-remove form-control-feedback' style='text-align-last: left;'></span>");
                return false;
            }
            else if (isNaN(telefono2)) {
                $("#iconotexto").remove();
                $("#telefono2").parent().parent().attr("class", "form-group has-error has-feedback");
                $("#telefono2").parent().children("span").text("No se aceptan letras o caracteres especiales.").show();
                $("#telefono2").parent().append("<span id='iconotexto' class='glyphicon glyphicon-remove form-control-feedback' style='text-align-last: left;'></span>");
                return false;
            }
            else if (telefono2.length != 10) {
                $("#iconotexto").remove();
                $("#telefono2").parent().parent().attr("class", "form-group has-error has-feedback");
                $("#telefono2").parent().children("span").text("El telefono debe ser de 10 digitos").show();
                $("#telefono2").parent().append("<span id='iconotexto' class='glyphicon glyphicon-remove form-control-feedback' style='text-align-last: left;'></span>");
                return false;
            }
            else if (telefono1 !== telefono2) {
                $("#iconotexto").remove();
                $("#telefono2").parent().parent().attr("class", "form-group has-error has-feedback");
                $("#telefono2").parent().children("span").text("Los números telefonicos deben ser iguales").show();
                $("#telefono2").parent().append("<span id='iconotexto' class='glyphicon glyphicon-remove form-control-feedback' style='text-align-last: left;'></span>");
                return false;
            }
            else if (telefono1 == telefono2) {
                $("#iconotexto").remove();
                $("#telefono2").parent().parent().attr("class", "form-group has-success has-feedback");
                $("#telefono2").parent().children("span").text("").hide();
                $("#telefono2").parent().append("<span id='iconotexto' class='glyphicon glyphicon-ok form-control-feedback' style='text-align-last: left;'></span>");

                return true;
            }
        }
        
        if (input === 'rfccurp') {
            var rfccurp = document.getElementById("rfccurp").value;
            if (rfccurp === null || rfccurp.length == 0 || /^\s+$/.test(rfccurp) || rfccurp == "") {
                $("#iconotexto").remove();
                $("#rfccurp").parent().parent().attr("class", "form-group has-error has-feedback");
                $("#rfccurp").parent().children("span").text("Debe ingresar el RFC.").show();
                $("#rfccurp").parent().append("<span id='iconotexto' class='glyphicon glyphicon-remove form-control-feedback' style='text-align-last: left;'></span>");
                return false;
            }
            ///^(?=.{1,50}$)[a-z]+(?:['_.\s][a-z]+)*$/i
            ///^\w+$/i
            ///^[a-z\d\-_\s]+$/i
            if (!/^([A-ZÑ\x26]{3,4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])([A-Z]|[0-9]){2}([A]|[0-9]){1})?$/.test(rfccurp)) {
                $("#iconotexto").remove();
                $("#rfccurp").parent().parent().attr("class", "form-group has-error has-feedback");
                $("#rfccurp").parent().children("span").text("Formato no valido.").show();
                $("#rfccurp").parent().append("<span id='iconotexto' class='glyphicon glyphicon-remove form-control-feedback' style='text-align-last: left;'></span>");
                return false;
            }

            else {
                var espacever=rfccurp.charAt(rfccurp.length-1);
                if(espacever==' '){
                    $("#iconotexto").remove();
                    $("#rfccurp").parent().parent().attr("class", "form-group has-error has-feedback");
                    $("#rfccurp").parent().children("span").text("Existe un espacio al final.").show();
                    $("#rfccurp").parent().append("<span id='iconotexto' class='glyphicon glyphicon-remove form-control-feedback' style='text-align-last: left;'></span>");
                    return false;
                }
                else{
                    $("#iconotexto").remove();
                    $("#rfccurp").parent().parent().attr("class", "form-group has-success has-feedback");
                    $("#rfccurp").parent().children("span").text("").hide();
                    $("#rfccurp").parent().append("<span id='iconotexto' class='glyphicon glyphicon-ok form-control-feedback' style='text-align-last: left;'></span>");

                    return true; 
                }
            }
        }
    }
    
    function addcuenta() {
        var correo = document.getElementById("email").value;
        var telefono = document.getElementById("telefono1").value;
        $.ajax({
            //url: "http://localhost/SuperRecargaMeta/registro/registro_post",
            url: "http://superrecarga.website/SuperRecargaMeta/registro/registro_post",
            type: "post",
            dataType: "json",
            data: $("#form").serialize(),
            success: function (json) {
                swal({
                    title: "Registro",
                    text: "Se le enviara un correo a: "+correo+" con su contraseña para acceder, por favor revise la bandeja de entrada o la de spam",
                    type: "success",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    cancelButtonColor: "#687DF7",
                    confirmButtonText: "Reenviar",
                    cancelButtonText: "Recibido",
                    closeOnConfirm: false,
                    closeOnCancel: false},
                    function (isConfirm) {
                        if(isConfirm){
                            //location.href = "../usuario/beneficiario/eliminar/"+elem.attr('data-id');
                            $.ajax({
                                //url: "http://localhost/SuperRecargaMeta/registro/reenviarcorreo",
                                url: "http://superrecarga.website/SuperRecargaMeta/registro/reenviarcorreo",
                                type: "post",
                                dataType: "json",
                                data: {
                                    correo: correo,
                                    telefono: telefono
                                },
                                success: function (json) {
                                    alert("Se ha reenviado un correo a: "+correo+", por favor revise la bandeja de entrada o la de spam");
//                                    swal({
//                                        title: "Reenviado",
//                                        text: "",
//                                        type: "success"
//                                    });
                                },
                                error: function (a,b,c){
                                    alert("No funciono " + c);
                                }
                            });
                        }
                        else{
                            //location.href = "http://localhost/SuperRecargaMeta/login";
                            location.href = "http://superrecarga.website/SuperRecargaMeta/login";
                        }
                });
            },
            error: function (a,b,c){
                //alert("No Agregado " + c);
                swal({
                    title: "Alerta",
                    text: "Es posible que el número que intenta ingresar ya este registrado, por favor verifique los datos",
                    type: "warning"
                });
            }
        });
    }
});
