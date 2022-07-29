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
<table><tr><td>
<form method="POST" action="delivery addition.php">
      <button class="btn btn-primary">Add-Details</button>
      
      </form> </td>
      <td></td>
      
<td><form method="POST" action="first page.php">
<button class="btn btn-primary">Home</button>
</form></td></tr>
</table>
<br><br><br><br>
    <div class="container" style="background-color:#ADEFD1FF">
        <div class="row justify-content-center">
            <div class="col-md-7">

                <div class="card mt-5">
                    <div class="card-header text-center">
                        <h4>CUSTOMER DETAILS FORM </h4>
                    </div>
                    <div class="card-body">

                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-md-8">
                                    <input type="text" name="customer_name" value="<?php if(isset($_POST['customer_name'])){echo $_POST['customer_name'];} ?>" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                                
                            </div>
                            
                        </form>

                        <div class="row">
                            <div class="col-md-12">
                                <hr>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","gautham");

                                    if(isset($_POST['customer_name']))
                                    {
                                        $cust_name = $_POST['customer_name'];

                                        $query = "SELECT * FROM delivery_plan WHERE customer_name='$cust_name' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $row)
                                            {
                                                ?>
                                               <form method="POST" action="mailer.php">
      <button class="btn btn-primary">Mail intimation</button>

                                                <div class="form-group mb-3">
                                                    <label for="">customer name</label>
                                                    <input type="text" name="customer_name" value="<?= $row['customer_name']; ?>" class="form-control" readonly>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">phone no</label>
                                                    <input type="text" name="phone_no" value="<?= $row['phone_no']; ?>" class="form-control" readonly>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Address</label>
                                                    <input type="text" name="address" value="<?= $row['address']; ?>" class="form-control" readonly>
                                                </div>
<div class="form-group mb-3">
                                                    <label for="">Monthly requirement</label>
                                                    <input type="text" name="given_indent" value="<?= $row['given_indent']; ?>" class="form-control" readonly>
<div class="form-group mb-3">
                                                    <label for="">required cylinders at site </label>
                                                    <input type="text" name="supply" value="<?= $row['supply']; ?>" class="form-control" readonly>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">email id</label>
                                                    <input type="text" name="email_id" value="<?= $row['email_id']; ?>" class="form-control" >
                                                    
                                                </div>
</form>
                                            

                                                
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            echo "No Record Found";
                                        }
                                    }
                                   
                                ?>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
   

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

    
    <div class="container" style="background-color:#ADEFD1FF">
        <div class="row justify-content-center">

   
      
</form>
</div>
</div>

     
                                



</div>




   
   






</body>
</html>