<?php 

            $host = "localhost";
            $username = "root";
            $password = "";
            $dbname = "skilled";
            $subject = 'nineGlobal Skilled Person Details';


            $name = $_POST['username'];
            $phoneNumber = $_POST['phone'];
            $email = $_POST['email'];
            $userMessage = $_POST['message'];
            require 'PHPMailerAutoload.php';
            require 'credential.php';
            $mail = new PHPMailer;

			//  $mail->SMTPDebug = 4;                               // Enable verbose debug output

			$mail->isSMTP();                                      // Set mailer to use SMTP
			$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = EMAIL;                 // SMTP username
			$mail->Password = PASS;                           // SMTP password
			$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 587;                                    // TCP port to connect to

			$mail->setFrom(EMAIL, '9 Global Technologies');
			$mail->addAddress(EMAIL);     // Add a recipient

            $mail->addReplyTo($email);
             $subject = 'Get Skilled With Us';
			$mail->isHTML(true);                                  // Set email format to HTML

			$mail->Subject = $subject;
			$mail->Body    = "<div> <h3> Name :  $name \r\n </h3> <h3> Phone : $phoneNumber \r\n </h3>  <h3> Email id: $email \r\n </h3 <h3> User Message : $userMessage \r\n </h3></div>";
			// $mail->AltBody = $_POST['message'];

			if(!$mail->send()) {
			    echo 'Message could not be sent.';
			    echo 'Mailer Error: ' . $mail->ErrorInfo;
			} else {
			    echo 'Message has been sent';
			}


// echo "<script>alert('hello')</script>";


$conn = new mysqli('localhost','root','','skilled');
if($conn==null){
    echo "<script>alert('We are facing some issue with serve please try again')</script>";
}
else {
 
    $insertData = "INSERT INTO resister(full_name,email,phone_number) VALUES('$name','$email','$phoneNumber')";
            if($conn->query($insertData)=== TRUE){


               
            }
            else{
            echo "<script>alert('faiiled')</script>";
            }
}

$conn->close();

 ?>






