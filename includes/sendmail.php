<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Create an instance; passing `true` enables exceptions

function sendmail($name, $pnumber, $email, $category, $package, $date)
{
    require '../PHPMailer/src/Exception.php';
    require '../PHPMailer/src/PHPMailer.php';
    require '../PHPMailer/src/SMTP.php';

    $mail = new PHPMailer(true);

    try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->SMTPAuth = true;                                   //Enable SMTP authentication

        $mail->Host = 'mail.esaistudio.com';                     //Set the SMTP server to send through
        $mail->Username = 'chat@esaistudio.com';                     //SMTP username
        $mail->Password = '.$T$8gKvA}txasw3r';                               //SMTP password

        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //ENCRYPTION_STARTTLS 465   Enable implicit TLS encryption
        $mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients 
        $mail->setFrom('chat@esaistudio.com', 'Esai Studio Website');
        $mail->addAddress($email, $name);               //Name is optional
        $mail->addAddress('chat@esaistudio.com', 'Esai Studio');     //Add a recipient

        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Photoshoot Booking Alert!';
        $mail->Body = '
            <!DOCTYPE html>
                <html lang="en">

                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <title>Email Template</title>
                    <style>
                        body {
                            margin: 0;
                            padding: 0;
                            font-family: Arial, sans-serif;
                            background-color: #f4f4f4;
                        }

                        table {
                            border-spacing: 0;
                            width: 100%;
                            background-color: #ffffff;
                            max-width: 600px;
                            margin: 0 auto;
                            border-collapse: collapse;
                        }

                        img {
                            display: block;
                            max-width: 100%;
                        }

                        h1 {
                            color: #ffffff;
                            font-size: 24px;
                            padding: 40px 0;
                            text-align: center;
                            background-color: black;
                        }

                        h2 {
                            color: #666666;
                            font-size: 18px;
                            margin: 20px 0;
                            text-align: center;
                        }

                        p {
                            color: #333333;
                            font-size: 16px;
                            line-height: 24px;
                            margin: 15px;
                        }

                        .button {
                            display: block;
                            width: 200px;
                            margin: 20px auto;
                            padding: 10px 20px;
                            text-align: center;
                            background-color: #007BFF;
                            color: white;
                            text-decoration: none;
                            border-radius: 5px;
                        }

                        .button:hover {
                            background-color: #0056b3;
                        }

                        .footer {
                            text-align: center;
                            font-size: 14px;
                            padding: 20px;
                            background-color: #000000;
                        }

                        .footer p {
                            color: white;
                        }

                        .footer a {
                            color: white;
                        }

                        table.table-content {
                            width: 90%;
                            margin: 20px auto;
                        }

                        table.table-content th,
                        table.table-content td {
                            border: 1px solid #dddddd;
                            padding: 10px;
                            text-align: left;
                        }

                        @media only screen and (max-width: 600px) {

                            body {
                                /* padding: 10px; */
                            }

                            h1 {
                                font-size: 20px;
                            }

                            h2 {
                                font-size: 16px;
                            }

                            p {
                                font-size: 14px;
                            }

                            .button {
                                width: 90%;
                                padding: 15px 0;
                            }

                            table.table-content {
                                width: 90%;
                            }
                        }
                    </style>
                </head>

                <body>
                    <table>
                        <tr>
                            <td>
                                <h1>Thank You For Your Booking</h1>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-left: 20px;
                                        padding-right: 20px;">
                                <p>Hello, ' . $name . ' </p>
                                <p>We have received your booking inquiry and guarantee to capture your special moments just as you
                                    envision them.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table class="table-content">
                                    <thead>
                                        <tr>
                                            <th>Requirements</th>
                                            <th>Contact Details</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Full Name</td>
                                            <td> ' . $name . '</td>
                                        </tr>
                                        <tr>
                                            <td>Phone Number</td>
                                            <td>' . $pnumber . '</td>
                                        </tr>
                                        <tr>
                                            <td>Email Address</td>
                                            <td>' . $email . '</td>
                                        </tr>
                                        <tr>
                                            <td>Category</td>
                                            <td>' . $category . '</td>
                                        </tr>
                                        <tr>
                                            <td>Package</td>
                                            <td>' . $package . '</td>
                                        </tr>
                                        <tr>
                                            <td>Date & Time</td>
                                            <td>' . $date . '</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <h2>We will be contacting you shortly by phone for confirmation.</h2>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <a href="https://esaistudio.com/" class="button" style="margin-bottom: 40px;">Visit Esai Studio</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="footer">
                                    <p>chat@esaistudio.com | 075 511 5475</p>
                                    <p class="footer-update"> Developed by <a href="https://www.digitalpartner.com/">Digital Partner</a>
                                    </p>
                                </div>
                            </td>
                        </tr>
                    </table>
                </body>

                </html>
                        ';
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        // echo 'Message has been sent';
        exit(0);
    } catch (Exception $e) {
        header("Location: ../booking.php?booking=failed");
        exit(0);
    }
}
