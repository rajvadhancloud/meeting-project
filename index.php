<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meeting Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <section class="vh-100 bg-image"
        style="background-color:antiquewhite;">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">Verify via otp</h2>

                                <form action="index.php" method="POST">

                                    <div class="form-outline mb-4">
                                        <input type="text" id="name" class="form-control form-control-lg" name="name" required />
                                        <label class="form-label" for="name">Your Name</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="number" id="phone" class="form-control form-control-lg" name="phone" required />
                                        <label class="form-label" for="phone">Your Phone No</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="email" id="email" class="form-control form-control-lg" name="email" required />
                                        <label class="form-label" for="email">Your Email</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <select name="industry" id="industry" class="form-control form-control-lg" required>
                                            <option value="" disabled selected>--Select Industry--</option>
                                            <option value="banking">Banking</option>
                                            <option value="finance">Finance</option>
                                            <option value="wealth">Wealth Management</option>
                                        </select>
                                        <label class="form-label" for="industry">Select Industry</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="text" id="message" class="form-control form-control-lg" name="message" />
                                        <label class="form-label" for="message">Message</label>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <button type="submit" name="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" aria-label="Send OTP">Send OTP</button>
                                    </div>

                                </form>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';
//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $otp = 0;
    $otp = $otp * 10 + rand(1, 9);
    $otp = $otp * 10 + rand(1, 9);
    $otp = $otp * 10 + rand(1, 9);
    $otp = $otp * 10 + rand(1, 9);
    $otp = $otp * 10 + rand(1, 9);
    $otp = $otp * 10 + rand(1, 9);
    $_SESSION['otp'] = $otp;
    $mailfrom = $_POST["email"];
    $_SESSION["mail"] = $mailfrom;
    $_SESSION["name"] = $_POST["name"];
    $_SESSION["phone"] = $_POST["phone"];
    $industry = $_POST['industry'];
    $_SESSION["industry"] = $industry;
    $msg = "Your otp for verification is : " . $otp;
    try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'rajvardhansingh605@gmail.com';                     //SMTP username
        $mail->Password   = 'lfqchyuclzybcgir';                               //SMTP password 
        $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom($mailfrom);
        $mail->addAddress($mailfrom);     //Add a recipient


        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Meeting OTP verification ' . $mailfrom;
        $mail->Body    = $msg;

        $mail->send();
        echo '<script>alert("Message has been sent")</script>';
        // echo $_SESSION["industry"];
        @header("Location:otpverify.php");
        exit();
    } catch (Exception $e) {
        echo '<script>alert("error occured")</script>';
        // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    // echo '<script>alert("Please give some inputs")</script>';
}
?>