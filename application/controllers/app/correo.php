<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of correo
 *
 * @author marioeduardo
 */
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Dompdf\Dompdf;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

require_once 'dompdf/autoload.inc.php';

class correo extends CI_Controller{
    
//    public function enviar()
//    {
//        //Datos para el correo
//        $destinatario="apacan99@gmail.com";
//        $asunto="Contacto desde nuestra web";
//        
//        $carta="Prueba de envio de correos desde la web";
//        
//        //enviando mensaje
//        mail($destinatario,$asunto,$carta);
//        header($asunto);
//    }
    
    public function enviar() {
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = 0;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host = 'smtp.gmail.com';                       // Set the SMTP server to send through
            //$mail->Host = 'mail.diatel.com.mx';                       // Set the SMTP server to send through
            $mail->SMTPAuth = true;                                   // Enable SMTP authentication
            //$mail->Username = 'noreply@diatel.com.mx';                     // SMTP username
            $mail->Username = 'apacan99@gmail.com';                     // SMTP username
            $mail->Password = 'akpzbktkhirkjrvs';                               // SMTP password
            //$mail->Password = 'gdqhijrouwijwbak';                               // SMTP password
            //$mail->Password = 'Armidas2020*';                               // SMTP password
            //$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
            //Recipients
            $mail->setFrom('apacan99@gmail.com', 'Super Recarga');
            //$mail->addAddress('luisdrodiguezg@hotmail.com');     // Add a recipient
            $mail->addAddress('2016313107@uteq.edu.mx');     // Add a recipient
//            $mail->addAddress('ellen@example.com');               // Name is optional
//            $mail->addReplyTo('info@example.com', 'Information');
//            $mail->addCC('cc@example.com');
//            $mail->addBCC('bcc@example.com');

            // Attachments
            //Para archivos
//            $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//            $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Prueba 2 con HTML';
//            $mail->Body = 'This is the HTML message body <b>in bold!</b>';
            //$mail->Body = 'Correo de comprobación';
            $cuerpo='<div class="row">
                        <div class="col-xs-12" align="right">
                            <label style="font-family: sans-serif; font-size: 14px">
                                CIUDAD DE MEXICO, Ciudad De Mexico a 20 de Junio de 2020
                                <br>
                            </label>
                        </div>
                        <br>
                        <div class="col-xs-12" align="left">
                            <label style="font-family: sans-serif; font-size: 14px">
                                Empresa (el Patrón):
                                <br>
                                <br>
                            </label>
                        </div>
                        <div class="col-xs-12" align="left">
                            <label style="font-family: sans-serif; font-size: 14px">
                                Nubia Paola Montanez Martinez con CURP/RFC MOMN770815MDFNRB03 y número de celular 5611281413
(el Deudor), por así convenir a mis intereses y, conforme a lo dispuesto por el artículo 98 y 110 de la Ley
Federal del Trabajo y 2547, 2548, 2549, 2551 y 255 del Código Civil Federal, por este conducto, atento a la
relación de trabajo que tengo con el Patrón, le otorgo un mandato, para que en mi nombre y representación y,
en forma consecutiva e ininterrumpida, realice: a) el descuento a mi salario de la cantidad de $100 pesos 00
/100 M.N. (en adelante, los “Descuentos”), que se originaron a mi cargo:
<br>
<br>
                            </label>
                        </div>
                    </div>
                <div class="row">
                <table class="table" style="width:100%" border="1">

                    <!-- thead START -->
                    <thead>

                        <tr style="font-family: sans-serif; font-size: 14px">
                            <th>Telefono celular</th>
                            <th>Monto Recarga y Asistencia</th>
                        </tr>

                    </thead>
                    <!--thead END -->

                    <!--tbody START -->
                    <tbody>
                        <tr style="font-family: sans-serif; font-size: 14px">
                            <th>5611281413</th>
                            <th>$100.00</th>
                        </tr>
                    </tbody>
                    <!--tbody END -->

                </table>
                <!-- table START -->

            </div>
            <div class="col-xs-12">
                            <label style="font-family: sans-serif; font-size: 14px">
                            <br>
                            <br>
                                por la empresa DIATEL, S.A. DE C.V. (el “Acreditante” ), documentados y aceptados en los TÉRMINOS Y
CONDICIONES de su APP denominada SÚPER RECARGA; y, b) la entrega de los Descuentos mediante
descuento a mi nómina dentro de un plazo que no excederá de la fecha en que reciba mi salario. El presente
mandato se otorga al Patrón con el carácter de irrevocable, en términos del artículo 2,596 del Código Civil
Federal, por ser un medio para cumplir la obligación adquirida de pago contraída por el Deudor; y sólo podrá
revocarse conforme a los términos establecidos en los TÉRMINOS Y CONDICIONES ya mencionados. El
primer descuento para pago deberá realizarse en el siguiente periodo de pago. Por lo tanto, a partir de esta fecha
iniciarán las fechas de descuento y pago del servicio.
<br>
<br>
                            </label>
                        </div>
                        <div class="col-xs-12">
                            <label style="font-family: sans-serif; font-size: 14px">
En caso de que la relación de trabajo entre el Deudor y el Patrón se termine o rescinda por cualquier causa, y
siempre y cuando así lo indique el Deudor, el Patrón realizará, de igual forma y, en ejecución del mandato, el
descuento al importe del finiquito o de la liquidación a que tenga derecho, de la cantidad que, a esa fecha,
corresponda para efectos de extender el servicio.
                            </label>
                        </div>';
            $mail->Body = $cuerpo;
            
//            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'El mensaje se envió correctamente';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
    
    public function enviar_pdf() {
//        $contenido="<html>";
//        $contenido.="<head>";
//        $contenido.="<style>";
//        $contenido.="</style>";
//        $contenido.="</head><body>";
//        $contenido.="<h1>Ejemplo de generacio PDF</h1>";
//        $contenido.="Almacena en una variable el contenido que se quiere incorporar</br></br>";
//        $contenido.="Ejemplo lista<br>";
//        $contenido.="<ul><li>Uno</li><li>Dos</li><li>Tres</li></ul>";
//        $contenido.="</body></html>";
        $fecha=date('Y-m-d');
        $hora=date('Y-m-d H:i:s');
        $contenido='<html><head></head><body>
            <style type="text/css">
            .ui-helper-center {
    text-align: center;
}
            </style>
            <div class="row">
                        <div class="col-xs-12" align="right">
                            <label style="font-family: sans-serif; font-size: 14px">
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                CIUDAD DE MEXICO, Ciudad De Mexico a 20 de Junio de 2020 
                                <br>
                            </label>
                        </div>
                        <br>
                        <div class="col-xs-12" align="left">
                            <label style="font-family: sans-serif; font-size: 14px">
                                Empresa (el Patrón):
                                <br>
                                <br>
                            </label>
                        </div>
                        <div class="col-xs-12" align="left" style="text-align: justify;">
                            <label style="font-family: sans-serif; font-size: 14px">
                                Nubia Paola Montanez Martinez con CURP/RFC MOMN770815MDFNRB03 y número de celular 5611281413
(el Deudor), por así convenir a mis intereses y, conforme a lo dispuesto por el artículo 98 y 110 de la Ley
Federal del Trabajo y 2547, 2548, 2549, 2551 y 255 del Código Civil Federal, por este conducto, atento a la
relación de trabajo que tengo con el Patrón, le otorgo un mandato, para que en mi nombre y representación y,
en forma consecutiva e ininterrumpida, realice: a) el descuento a mi salario de la cantidad de $100 pesos 00
/100 M.N. (en adelante, los “Descuentos”), que se originaron a mi cargo:
<br>
<br>
                            </label>
                        </div>
                    </div>
                <div class="row" style="text-align: center;">
                <table class="table" style="width:100%" border="1">

                    <!-- thead START -->
                    <thead>

                        <tr style="font-family: sans-serif; font-size: 14px">
                            <th class="ui-helper-center">Telefono celular</th>
                            <th class="ui-helper-center">Monto Recarga y Asistencia</th>
                        </tr>

                    </thead>
                    <!--thead END -->

                    <!--tbody START -->
                    <tbody>
                        <tr style="font-family: sans-serif; font-size: 14px">
                            <th class="ui-helper-center">5611281413</th>
                            <th class="ui-helper-center">$100.00</th>
                        </tr>
                    </tbody>
                    <!--tbody END -->

                </table>
                <!-- table START -->

            </div>
            <div class="col-xs-12" style="text-align: justify;">
                            <label style="font-family: sans-serif; font-size: 14px">
                            <br>
                            <br>
                                por la empresa DIATEL, S.A. DE C.V. (el “Acreditante” ), documentados y aceptados en los TÉRMINOS Y
CONDICIONES de su APP denominada SÚPER RECARGA; y, b) la entrega de los Descuentos mediante
descuento a mi nómina dentro de un plazo que no excederá de la fecha en que reciba mi salario. El presente
mandato se otorga al Patrón con el carácter de irrevocable, en términos del artículo 2,596 del Código Civil
Federal, por ser un medio para cumplir la obligación adquirida de pago contraída por el Deudor; y sólo podrá
revocarse conforme a los términos establecidos en los TÉRMINOS Y CONDICIONES ya mencionados. El
primer descuento para pago deberá realizarse en el siguiente periodo de pago. Por lo tanto, a partir de esta fecha
iniciarán las fechas de descuento y pago del servicio.
<br>
<br>
                            </label>
                        </div>
                        <div class="col-xs-12" style="text-align: justify;">
                            <label style="font-family: sans-serif; font-size: 14px">
En caso de que la relación de trabajo entre el Deudor y el Patrón se termine o rescinda por cualquier causa, y
siempre y cuando así lo indique el Deudor, el Patrón realizará, de igual forma y, en ejecución del mandato, el
descuento al importe del finiquito o de la liquidación a que tenga derecho, de la cantidad que, a esa fecha,
corresponda para efectos de extender el servicio.
<br>
<br>
                            </label>
                        </div>
                        <div class="col-xs-12" align="center">
                            <label style="font-family: sans-serif; font-size: 14px">
                            <br>
                            <br>
                                <b>El deudor</b> 
                                <br>
                                <br>
                            </label>
                        </div>
                        <div class="col-xs-12" align="center">
                            <label style="font-family: sans-serif; font-size: 14px">
                            <br>
                            <br>
                            ___________________________
                            </label>
                        </div>
                        <div class="col-xs-12" align="center">
                            <label style="font-family: sans-serif; font-size: 14px">
                            Nubia Paola Montañez Martínez
                            </label>
                        </div>
                        </body></html>';
        
        $dompdf = new Dompdf();
        
        $dompdf->loadHtml($contenido);
        //$dompdf->setPaper('A4','landscape');
        $dompdf->render();
        $pdf = $dompdf->output();
        
        $rutaGuardado= base_url()."app/pdf/";
        $nombreArchivo="prueba.pdf";
        file_put_contents('static/pdf/prueba.pdf',$pdf);
        //$dompdf->stream(base_url()."app/pdf/" . $nombreArchivo);
        
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = 0;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            //$mail->Host = 'smtp.gmail.com';                       // Set the SMTP server to send through
            $mail->Host = 'mail.diatel.com.mx';                       // Set the SMTP server to send through
            $mail->SMTPAuth = true;                                   // Enable SMTP authentication
            $mail->Username = 'noresponda@diatel.com.mx';                     // SMTP username
            //$mail->Password = 'akpzbktkhirkjrvs';                               // SMTP password
            //$mail->Password = ',#*}!q@EJ!V~';                               // SMTP password
            //$mail->Password = 'W3eOg}[m25tC*';                               // SMTP password
            //$mail->Password = 'Nfd1a~8Jnft3**';                               // SMTP password
            $mail->Password = 'Armidas202020*';                               // SMTP password
            //$mail->Password = $password;                               // SMTP password
            //$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
            //Recipients
            $mail->setFrom('noresponda@diatel.com.mx', 'Super Recarga');
            //$mail->addAddress('luisdrodiguezg@hotmail.com');     // Add a recipient
            $mail->addAddress('2016313107@uteq.edu.mx');     // Add a recipient
//            $mail->addAddress('ellen@example.com');               // Name is optional
//            $mail->addReplyTo('info@example.com', 'Information');
//            $mail->addCC('cc@example.com');
//            $mail->addBCC('bcc@example.com');

            // Attachments
            //Para archivos
            $mail->addAttachment('static/pdf/prueba.pdf');         // Add attachments
//            $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Prueba de fecha 4';
//            $mail->Body = 'This is the HTML message body <b>in bold!</b>';
            //$mail->Body = 'Correo de comprobación';
            $cuerpo='<html><head></head><body style="text-align: justify;">
                <div class="row">
                        <div class="col-xs-12" align="right">
                            <label style="font-family: sans-serif; font-size: 14px">
                                CIUDAD DE MEXICO, Ciudad De Mexico a 20 de Junio de 2020
                                <br>
                            </label>
                        </div>
                        <br>
                        <div class="col-xs-12" align="left">
                            <label style="font-family: sans-serif; font-size: 14px">
                                Empresa (el Patrón):
                                <br>
                                <br>
                            </label>
                        </div>
                        <div class="col-xs-12" align="left">
                            <label style="font-family: sans-serif; font-size: 14px">
                                Nubia Paola Montanez Martinez con CURP/RFC MOMN770815MDFNRB03 y número de celular 5611281413
(el Deudor), por así convenir a mis intereses y, conforme a lo dispuesto por el artículo 98 y 110 de la Ley
Federal del Trabajo y 2547, 2548, 2549, 2551 y 255 del Código Civil Federal, por este conducto, atento a la
relación de trabajo que tengo con el Patrón, le otorgo un mandato, para que en mi nombre y representación y,
en forma consecutiva e ininterrumpida, realice: a) el descuento a mi salario de la cantidad de $100 pesos 00
/100 M.N. (en adelante, los “Descuentos”), que se originaron a mi cargo:
<br>
<br>
                            </label>
                        </div>
                    </div>
                <div class="row">
                <table class="table" style="width:100%" border="1">

                    <!-- thead START -->
                    <thead>

                        <tr style="font-family: sans-serif; font-size: 14px">
                            <th>Telefono celular</th>
                            <th>Monto Recarga y Asistencia</th>
                        </tr>

                    </thead>
                    <!--thead END -->

                    <!--tbody START -->
                    <tbody>
                        <tr style="font-family: sans-serif; font-size: 14px">
                            <th>5611281413</th>
                            <th>$100.00</th>
                        </tr>
                    </tbody>
                    <!--tbody END -->

                </table>
                <!-- table START -->

            </div>
            <div class="col-xs-12">
                            <label style="font-family: sans-serif; font-size: 14px">
                            <br>
                            <br>
                                por la empresa DIATEL, S.A. DE C.V. (el “Acreditante” ), documentados y aceptados en los TÉRMINOS Y
CONDICIONES de su APP denominada SÚPER RECARGA; y, b) la entrega de los Descuentos mediante
descuento a mi nómina dentro de un plazo que no excederá de la fecha en que reciba mi salario. El presente
mandato se otorga al Patrón con el carácter de irrevocable, en términos del artículo 2,596 del Código Civil
Federal, por ser un medio para cumplir la obligación adquirida de pago contraída por el Deudor; y sólo podrá
revocarse conforme a los términos establecidos en los TÉRMINOS Y CONDICIONES ya mencionados. El
primer descuento para pago deberá realizarse en el siguiente periodo de pago. Por lo tanto, a partir de esta fecha
iniciarán las fechas de descuento y pago del servicio.
<br>
<br>
                            </label>
                        </div>
                        <div class="col-xs-12">
                            <label style="font-family: sans-serif; font-size: 14px">
En caso de que la relación de trabajo entre el Deudor y el Patrón se termine o rescinda por cualquier causa, y
siempre y cuando así lo indique el Deudor, el Patrón realizará, de igual forma y, en ejecución del mandato, el
descuento al importe del finiquito o de la liquidación a que tenga derecho, de la cantidad que, a esa fecha,
corresponda para efectos de extender el servicio.
                            </label>
                        </div></body></html>';
            $mail->Body = $cuerpo;
            $mail->CharSet = 'UTF-8';
//            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'El mensaje se envió correctamente';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
