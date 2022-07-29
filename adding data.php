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

// php code to Insert data into mysql database from input text
if(isset($_POST['insert']))
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "gautham";
    
    // get values form input text and number

   $c_name=(isset($_POST['customer_name'])?$_POST['customer_name']:"");
   $phone_no=(isset($_POST['phone_no'])?$_POST['phone_no']:"");
   $address=(ISSET($_POST['address'])?$_POST['address']:"");
   $given_indent=(isset($_POST['given_indent'])?$_POST['given_indent']:"");
   $supplied_quantity=(isset($_POST['supply'])?$_POST['supply']:"");
   $mail_id=(isset($_POST['email_id'])?$_POST['email_id']:"");
    
    // connect to mysql database using mysqli

    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    
    // mysql query to insert data

    $query = "INSERT INTO `delivery_plan`(`customer_name`, `phone_no`, `address`,`given_indent`,`supply`,`email_id`) VALUES ('$c_name','$phone_no','$address','$given_indent','$supplied_quantity','$mail_id')";
    
    $result = mysqli_query($connect,$query);
    
    // check if mysql query successful

    if($result)
    {
        echo '<h3>SUCCESSFULLY ADDED PLEASE PRESS CONFORMATION PAGE TO REVIEW THE DETAILS AND SEND THE MAIL <h3>';
    }
    
    else{
        echo 'Data Not Inserted';
    }
    
    
    #mysqli_free_result($result);
    mysqli_close($connect);
}


?>
<br><br><br><br>
<form method="POST" action="index4.php" >
    Click here to go to conformation Page <br><br>
      <button class="btn btn-primary">Conformation Page</button><br>
</form></td>
</body>
</html>