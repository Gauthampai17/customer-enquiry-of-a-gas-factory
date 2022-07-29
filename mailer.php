<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funda of Web IT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
 <body style="background-image: url('34146.png')">
 <?php

//if(isset($_POST['submit']))
//{
  ///  $c_name=$_POST['customer_name'];
    //$phone_no=$_POST['phone_no'];
    //$add=$_POST['add'];
    //$gi=$_POST['given_indent'];
    //$supp=$_POST['supply'];
    
    //$total = $c_name+$phone_no+$add+$gi+$supp;

//}


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$c_name=(isset($_POST['customer_name'])?$_POST['customer_name']:'');
$phone_no=(isset($_POST['phone_no'])?$_POST['phone_no']:''); 
$address=(isset($_POST['address'])?$_POST['address']:''); 
$stock=(isset($_POST['supply'])?$_POST['supply']:''); 
$m_req=(isset($_POST['given_indent'])?$_POST['given_indent']:''); 
$email=(isset($_POST['email_id'])?$_POST['email_id']:''); 
//$add=$_POST['address'];
//$gi=$_POST['given_indent'];
//$supp=$_POST['supply'];

$messagecontent ="Name of the company=" .$c_name. "<br>phone_no=".$phone_no. "<br>Address=".$address. "<br>monthy requirement =".$m_req."<br>stock required =".$stock;


$mail = new PHPMailer(true);

//$first_name = (isset($_POST['customer_name'])?$_POST['customer_name']:'');
//$last_name = (isset($_POST['address'])?$_POST['address']:''); 
//$message = $first_name . " " . $last_name . " wrote the following:";
try {
 
      
    $mail->isSMTP();                                           
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'paigautham1704@gmail.com';                    
    $mail->Password   = 'mxuryobhmhraqqtx';                             
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
    $mail->Port       = 465;                                    
  
  
    $mail->setFrom('paigautham1704@gmail.com', 'No reply');

    
    $mail->addAddress('paigautham22@gmail.com');  
    

    $mail->isHTML(true);                                 
    $mail->Subject = 'Customer enquiry no' .time();
    $mail->Body    = $messagecontent;
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    //mail($to,$subject,$message,$headers);
   $mail->send();
    echo '<h3>Mail  has been Successfully sent you will be contacted soon</h3>';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


//<label for="">Email id</label>
//<input type="text" value="email-id" class="form-control">
?>
<br>
<br><br><br>
<form method="POST" action="first page.php">
<button class="btn btn-primary">Home</button>
</form>

</body>
</html>