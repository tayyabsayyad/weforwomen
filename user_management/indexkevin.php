<?php

if(isset($_POST['submit'])){
	
	    require_once('Phpmailer/PHPMailerAutoload.php');

	    $email = $_POST['email'];
        $mail = new PhpMailer();
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = '465';
        $mail->Username = 'yourdad090@gmail.com'; // write your account name
        $mail->Password = '44092644kevin';	// your account password
        
        // Receipients
        $mail->SetFrom('no-reply@weforwomen.com');
        $mail->AddAddress($email);	// Person who will receive the email: Address of that person
        
        // Content
        $mail->isHTML(true);
        $mail->Subject = "Forgot Password";
        $mail->Body = "Hi $email, your password is 123456 ";
        $mail->AltBody = "Hi $email, your password is 123456 ";
        
        $mail->Send();
        echo "Your password has been sent on your registered email. ";	
}



?>
    <!DOCTYPE>
    <html>

    <head>
        <title>Checking email</title>
    </head>

    <body>

        <form action="indexkevin.php" method="post">
            <label for="email">Email: </label>
            <input type="email" name="email" />

            <input type="submit" name="submit" value="Submit">
        </form>

    </body>

   <!-- $rand_password = substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789') , 0 , 10 ) -->

   
   
    </html>