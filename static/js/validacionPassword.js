/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
jQuery(document).ready(function ($) {
    
    $('#correoEnviado').click(function () {
        
        if (validar('password1') == false || validar('password2')==false) {

            swal({
                title: "Alerta",
                text: "Sus campos no estan validados.",
                type: "warning"
            });

            return false;

        } else {

            swal({
                title: "Registro",
                text: "Su contraseña ha sido actualizada",
                type: "success"
            },
            function () {
                $('#form').submit();
            }
            );
            return false;
        }
    });
    
    $("#password1").keyup(function () {
        validar('password1');
    });
    
    $("#password2").keyup(function () {
        $('#password2').val();
        if ($("#password2").val().length > 0) {
            validar('password2');
        }

        else {
            $("#password2").parent().removeClass('has-error');
            $("#password2").parent().removeClass('has-feedback');
        }
    });
    
    function validar(input){
        
        if(input==="password1"){
            var password1 = document.getElementById("password1").value;
            if (password1 === null || password1.length == 0 || /^\s+$/.test(password1) || password1 == "") {
                $("#iconotexto").remove();
                $("#password1").parent().parent().attr("class", "form-group has-error has-feedback");
                $("#password1").parent().children("span").text("Debe ingresar una contraseña").show();
                $("#password1").parent().append("<span id='iconotexto' class='glyphicon glyphicon-remove form-control-feedback' style='text-align-last: left;'></span>");
                return false;
            }
            else if (password1.length < 9) {
                $("#iconotexto").remove();
                $("#password1").parent().parent().attr("class", "form-group has-error has-feedback");
                $("#password1").parent().children("span").text("La contraseña debe ser de mínimo de 9 caracteres").show();
                $("#password1").parent().append("<span id='iconotexto' class='glyphicon glyphicon-remove form-control-feedback' style='text-align-last: left;'></span>");
                return false;
            }

            else {
                $("#iconotexto").remove();
                $("#password1").parent().parent().attr("class", "form-group has-success has-feedback");
                $("#password1").parent().children("span").text("").hide();
                $("#password1").parent().append("<span id='iconotexto' class='glyphicon glyphicon-ok form-control-feedback' style='text-align-last: left;'></span>");

                return true;
            }
        }
        if(input==="password2"){
            var password1 = document.getElementById("password1").value;
            var password2 = document.getElementById("password2").value;
            if (password2 === null || password2.length == 0 || /^\s+$/.test(password2) || password2 == "") {
                $("#iconotexto").remove();
                $("#password2").parent().parent().attr("class", "form-group has-error has-feedback");
                $("#password2").parent().children("span").text("Debe ingresar su contraseña").show();
                $("#password2").parent().append("<span id='iconotexto' class='glyphicon glyphicon-remove form-control-feedback' style='text-align-last: left;'></span>");
                return false;
            }
            else if (password2.length < 9) {
                $("#iconotexto").remove();
                $("#password2").parent().parent().attr("class", "form-group has-error has-feedback");
                $("#password2").parent().children("span").text("La contraseña debe ser de mínimo de 9 caracteres").show();
                $("#password2").parent().append("<span id='iconotexto' class='glyphicon glyphicon-remove form-control-feedback' style='text-align-last: left;'></span>");
                return false;
            }
            else if (password1 !== password2) {
                $("#iconotexto").remove();
                $("#password2").parent().parent().attr("class", "form-group has-error has-feedback");
                $("#password2").parent().children("span").text("La contraseña debe coincidir").show();
                $("#password2").parent().append("<span id='iconotexto' class='glyphicon glyphicon-remove form-control-feedback' style='text-align-last: left;'></span>");
                return false;
            }
            else if (password1 == password2) {
                $("#iconotexto").remove();
                $("#password2").parent().parent().attr("class", "form-group has-success has-feedback");
                $("#password2").parent().children("span").text("").hide();
                $("#password2").parent().append("<span id='iconotexto' class='glyphicon glyphicon-ok form-control-feedback' style='text-align-last: left;'></span>");

                return true;
            }
        }
    }
});