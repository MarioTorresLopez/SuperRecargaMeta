/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
jQuery(document).ready(function ($) {

    $('.eliminacion').click(function () {

        var elem = $(this);

        swal({
            title: "¿Seguro que desea eliminarlo?",

            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Sí, eliminar",
            cancelButtonText: "No, cancelar",
            closeOnConfirm: false,
            closeOnCancel: false},
                function (isConfirm) {
                    if (isConfirm) {

                        location.href = "../usuario/beneficiario/eliminar/"+elem.attr('data-id');
                        //alert(elem.attr('data-id'));
                        //var hola = $(this).attr('data-id');
                        //alert ($hola);
                        
                    } else {
                        swal("Cancelado", "");

                    }
                });
    });
});
