<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    include("db.php");
    
    if (isset($_POST['register'])) {

        if ( strlen($_POST['name']) >= 1 && strlen($_POST['lastname']) >= 1 ) {

            $name = trim($_POST['name']);
            $lastname = trim($_POST['lastname']);
            $age = $_POST['age'];
            $email = trim($_POST['email']);
            $address = trim($_POST['address']);
            $azucar = $_POST['azucar'];
            $hemoglobina = $_POST['hemoglobina'];
            $colesterol = $_POST['colesterol'];
            $trigliceridos = $_POST['trigliceridos'];

            $consulta1 = "INSERT INTO `clients`(`name`, `lastname`, `age`, `email`, `address`, `azucar`, `hemoglobina`, `colesterol`, `trigliceridos`) 
                        VALUES ('$name','$lastname','$age','$email','$address','$azucar','$hemoglobina','$colesterol','$trigliceridos')";

            $resultado1 = mysqli_query($conexion, $consulta1);

            if ($resultado1) {

                require_once __DIR__ . '/vendor/autoload.php';

                // Tomar las variables del formulario

                    // Crear una instancia PDF

                        $mpdf = new \Mpdf\Mpdf();

                    // Crear un PDF

                        $data = '';

                        $data .= '<h1 class="text-center">Laboratorio Suarez</h1> <br>
                                    <h3 class="text-center">Sus Resultados</h3>';

                    // Añadir data

                        $data .= '<strong>Nombre: </strong>'.$name.'<br />';
                        $data .= '<strong>Apellido: </strong>'.$lastname.'<br />';
                        $data .= '<strong>Edad: </strong>'.$age.'<br />';
                        $data .= '<strong>Niveles de Azúcar: </strong>'.$azucar.'<br />';
                        $data .= '<strong>Niveles de Hemoglobina: </strong>'.$hemoglobina.'<br />';
                        $data .= '<strong>Niveles de Colesterol: </strong>'.$colesterol.'<br />';
                        $data .= '<strong>Niveles de Trigliceridos: </strong>'.$trigliceridos.'<br />';

                    // Escribir el PDF

                        $mpdf ->WriteHTML($data);

                    // Convertirlo en String

                      $pdf = $mpdf->Output('', 'S');

                      $enquirydata = [

                        'name' => $name,
                        'lastname' => $lastname,
                        'age' => $age,
                        'azucar' => $azucar,
                        'hemoglobina' => $hemoglobina,
                        'colesterol' => $colesterol,
                        'trigliceridos' => $trigliceridos,

                      ];

                      

                      function sendEmail($pdf, $enquirydata) {

                        $name = trim($_POST['name']);
                        $lastname = trim($_POST['lastname']);
                        $email = trim($_POST['email']);


                        $emailBody = '';

                        $emailBody .= '<h1>Hola '.$enquirydata['name'].' aqui estan tus resultados!';

                        $mail = new PHPMailer(true);

                            try {
                                //Server settings
                                $mail->SMTPDebug = false;                      //Enable verbose debug output
                                $mail->isSMTP();                                            //Send using SMTP
                                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                                $mail->Username   = 'demo.codecall@gmail.com';                     //SMTP username
                                $mail->Password   = 'codecall123';                               //SMTP password
                                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                                $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

                                //Recipients
                                $mail->setFrom('laboratorio_suarez@pw.com', 'Laboratorio Suarez');
                                $mail->addAddress($email, $name.' '.$lastname);     //Add a recipient


                                // Add attachment

                                $mail->addStringAttachment($pdf, 'resultados.pdf');


                                //Content
                                $mail->isHTML(true);                                  //Set email format to HTML
                                $mail->Subject = 'Resultados de Laboratorio Suarez';
                                $mail->Body    = $emailBody;
                                $mail->AltBody = strip_tags($emailBody);

                                $mail->send();
                                
                                header('Location:thanks.php?name=' . $enquirydata['name'] );

                            } catch (Exception $e) {
                                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                            }

                      }

                      sendEmail($pdf, $enquirydata);
                ?>
                <h3 class="ok">Usuario ingresado correctamente</h3>
                <?php
            } else {
                ?>
                <h3 class="bad">Ha ocurrido un error.</h3>
                <?php
            }

        } else {

                ?>
                <h3 class="bad">Por favor complete los campos</h3>
                <?php
        }


    }

    
    
?>