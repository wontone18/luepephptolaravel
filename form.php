<?php

// auto load

require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if($_SERVER['REQUEST_METHOD']=="POST"){
    /// validate the form
    /**
     * Rule be sure to care your form from injection 
     * validate all your form fields in server side and client side
     * use CSRF if need it
     */
    // name if its set or not
    $error="";
    if(!(empty($_POST['txtname']))){
         // We only need a characters here
         // for that i will pregex
         $name=$_POST['txtname'];
         if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
     
           $error="Only letters and white space allowed <br>";
          
            
          }
     }
     else{
      
        $error="Name is required. <br>";
        
    }

   
    // same email address is set or not
    if(!empty($_POST['txtemail'])){

        // validate the email address
        // we will use filter_var , it filter a variable with some specified values
        

        $email=$_POST['txtemail'];
        if(!(filter_var($email, FILTER_VALIDATE_EMAIL))){
            $error.="Invalid email address <br>";
          
        }
    }
    else{
       $error.="Email address is required. <br>";
   }

    // same phone is set or not
    if(!empty($_POST['txtphone'])){
        // if its number or
       if(!(is_numeric($_POST['txtphone']))){
           $error.="Please type the number in the phone number field. <br>";
        
        }
        else{

            $number=$_POST['txtphone'];
        }
    }
    else{
        $error.="Please enter the phone number.<br>";
        
   }

   // message validaton request

   if(!empty($_POST['txtmsg'])){

    $msg=$_POST['txtmsg'];
        }

        else{

    $error.="Message is required. <br>";
        }
        
        
        
        ///
        if($error==""){

     // Email code comes here
      $from="saju.g@wontonetech.com";
       $to="saju.g@wontonetech.com";
       $subject="One Application has been submitted for approval";

       $mail = new PHPMailer(true);  
	   try {

		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'email-smtp.us-east-1.amazonaws.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'AKIAJ7TKXODF66GY2HAA';                 // SMTP username
		$mail->Password = 'AhRFVQAUey8MGvXmt5q3auPB0LKxUuc6FqZy2CrapzMR';                           // SMTP password
		$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 587;                   
	  
		$mail->setFrom($from, 'Luepe coding academy');
		$mail->addAddress($to, 'Luepe coding academy');     // Add a recipient
		 //Content
		$mail->isHTML(true);                                  // Set email format to HTML
		$mail->Subject = $subject;

        // message
        $mail->msgHTML(
            "Details are as follows:<br>
             Name :". $_POST['txtname'].
             "<br>Email address : ".$_POST['txtemail'].
             "<br>Phone number : ".$_POST['txtphone'].
             "<br>Message : ".$_POST['txtmsg']);

		$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail->send();
        
        echo("Details has been successfully send to your email address.");
	
 } catch (Exception $e) {
	 echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
 }
           

        }
        else{

          echo($error);
        }
}

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Simple php form</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div>
            <form method="post" action="form.php" name="form">
            <h1> Simple Query Form </h1>
            <label>Name :</label> <input type="text" name="txtname" value="" > <br><br>
            <label>Email address :</label> <input type="text" name="txtemail" value=""><br><br>
            <label>Phone number :</label> <input type="text" name="txtphone" value=""><br><br>
            <label>Message :</label> <textarea name="txtmsg" ></textarea><br><br>
            <input type="submit" value="Send email">
            <input type="reset" Value="Reset form">
            </form>

</div>
        <script src="" async defer></script>
    </body>
</html>