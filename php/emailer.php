
<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require_once '../PHPMailer/Exception.php';
    require_once '../PHPMailer/PHPMailer.php';
    require_once '../PHPMailer/SMTP.php';

    $mail = new PHPMailer(true);

    $alert = '';

    if(isset($_POST["submit"])){
        
     
        $email = $_POST['email'];
        $subj = $_POST['subject'];
        $message = $_POST['message'];

        try{
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'alvanbernal@gmail.com'; //MY GMAIL ACCOUNT-USERNAME
            $mail->Password = 'qbnusfsarwviuxbo'; //MY GMAIL APP PASSWORD!!!
            $mail->SMTPSecure = 'tls';
            $mail->Port = '587';

            $mail->setFrom('alvanbernal@gmail.com'); //MY GMAIL ACCOUNT-USERNAME
            $mail->addAddress('johnalvanblanco.bernal@bicol-u.edu.ph');

            $mail->isHTML(true);
            $mail->Subject = "Subject: $subj";
            $mail->Body = "<strong> Email: $email </strong> <br>  Message: $message";

            $mail->send();

            
            header("Location: ../components/contact.php?success=Your Message is Sent Successfully!.");
            

        }catch(Exception $e){
          header("Location: ../components/contact.php?error=Your Message is Sending Failed.");
          
        }
    }
?>