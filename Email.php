<?php
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;
 
 require 'PHPMailer/src/Exception.php';
 require 'PHPMailer/src/PHPMailer.php';
 require 'PHPMailer/src/SMTP.php';

 if(isset($_POST['envoie']))
 {
    $mail= new PHPMailer(true);

    $mail -> isSMTP();
    $mail -> Host = 'smtp.gmail.com';
    $mail -> SMTPAuth= true;
    $mail -> Username = 'abdueljhon@gmail.com';
    $mail -> Password= 'rtxvlvnurujagvtf';

    $mail -> SMTPSecure= 'ssl';
    $mail ->Port= 465;

    $mail ->setFrom($_POST['email'], $_POST['name']);
    
    $mail ->addAddress("abdueljhon@gmail.com");

    $mail ->isHTML(true);
    $mail ->Subject= $_POST["subject"];
    $mail ->Body= $_POST["message"];

    $mail->send();

    echo

    "
     <script>
     alert('Sent Successfully');
     document.location.href = 'index.html';
     </script>
    ";
 }
?>
