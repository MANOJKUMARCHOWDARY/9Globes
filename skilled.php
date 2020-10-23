<?php 

$host = "localhost";
$username = "root";
$password = "";
$dbname = "skilled";
$subject = 'nineGlobal Skilled Person Details';

$name = $_POST['username'];
$phone = $_POST['phone'];
$email = $_POST['email'];

echo "<script>alert('hello')</script>";


$conn = new mysqli('localhost','root','','skilled');
if($conn==null){
    echo "connection failed";
}
else {
 
    $insertData = "INSERT INTO resister(full_name,phone_number,email) VALUES('$name','$phone','$email')";
            if($conn->query($insertData)=== TRUE){


               
            }
            else{
            echo "<script>alert('faiiled')</script>";
            }
}

$from = "9 Global Technoliges";
$webmaster = "sivavadlamuri127@gmail.com";
$to = "sivavadlamuru1997@gmail.com";

$subject = "Contact form for 9 Global";

$headers = "From: " . $from . "<" . $webmaster . ">\r\n";
$headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$headers .= "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$message = "<html><body>";
$message .= "<p>Name :" .$_POST['username'] . "</p>";
$message .= "<p>Email :" .$_POST['email'] . "</p>";
$message .= "<p>Phone Number :" .$_POST['phone'] . "</p>";
$message .= "</body></html>";

$sendMail = mail($to,$subject,$message, $headers);

  


$conn->close();

 ?>






