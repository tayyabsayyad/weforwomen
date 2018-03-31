<?php

$con = mysqli_connect("localhost","root","") or die("Unable to connect");	
mysqli_select_db($con,'weforwomen');

if(isset($_POST['submit'])){

    $email = $_POST['email'];
    echo $email;
    $query = "select * from register where user_email = '$email'";
    echo $query;
    $query_run = mysqli_query($con,$query);
    $row = mysqli_fetch_array($query_run);
    echo $row['user_password'];

            //If mail exists in the database
        
    if( mysqli_num_rows($query_run) > 0){
        
        
        
        //If mail exists in the database
        
        require_once('Phpmailer/PHPMailerAutoload.php');

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
        $mail->Body = "Hi $email, your password is {$row['user_password']} ";
        $mail->AltBody = "Hi $email, your password is {$row['user_password']} ";
        
        $mail->Send();
        echo "Your password has been sent on your registered email. ";
    }else{
        echo "Not Found";
    }
    
}

    
?>

    <!DOCTYPE>
    <html>

    <head>
        <title>Checking email</title>
    </head>

    <body>

        <form action="forget_password.php" method="post">
            <label for="email">Email: </label>
            <input type="email" name="email" />

            <input type="submit" name="submit" value="Submit">
        </form>

    </body>

   <!-- $rand_password = substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789') , 0 , 10 ) -->

   
   
    </html>
