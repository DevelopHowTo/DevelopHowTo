<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 1;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = '';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = '';                 // SMTP username
    $mail->Password = '';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;
    $name = "Aakash";
    $pass ="pass";                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('support@spartanshub.com', 'Spartans Hub');
    $mail->addAddress('aakashsingh1999@gmail.com');     // Add a recipient
    $body = '<html>
    <head>
    <title>Spartans Hub</title>
    </head>
    <body>
      <center><img src="https://www.spartanshub.com/Logo-gif.gif" /></center>
      <center><h2 style="color:black;">Congratulation on joining Spartans Hub.</h2></center>
    <center><h4 style="color:#333;">Please Do not reply on this mail as we will not get notified.</h2></center>
    <center><p>This Page Contains the Employee login Credentials of Spartans Hub.</p><p>Visit <a href="http://employee.spartanshub.com">Employee Login Page</a> and login with the below given details</p></center>
    <center><table>
    <tr>
    <th>Username</th>
    <th>Password</th>
    </tr>
    <tr>
    <td>'.$name.'</td>
    <td>'.$pass.'</td>
    </tr>
    </table>
    <p style="color:#654">Spartans Hub 2018</p></center>
    </body>
    </html>';

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = $body;
    $mail->AltBody = strip_tags($body);

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>
