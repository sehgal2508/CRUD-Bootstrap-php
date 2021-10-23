<?php
include("header.php");
include 'connection.php';

if(isset($_POST['insert']))
    {
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    
    $query=mysqli_query($conn,"INSERT INTO student(name,fname,address,contact) VALUES('$name','$fname','$address','$contact')");

    if($query)
    {
        echo "<script>alert('Data Inserted Successfully.')</script>";
    }
    else
    {
        echo "<script>alert('No Data Inserted.')</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Adding Data</title>
</head>
<body>
    <div class="container shadow m-5 p-3">
        <div class="row">
            <div class="col-sm-6">
                <div><img src="image/reg.jpg" height="400" width="500"></div>
            </div>
                <div class="col-sm-6">
                    <form method="POST">
                        <h1>Student's Registration Form</h1><br>
		                  <input type="text" name="name" placeholder="Enter the User Name" class="form-control"><br>
		                  <input type="text" name="fname" placeholder="Enter the Father's Name" class="form-control"><br>
		                  <input type="text" name="address" placeholder="Enter the Address" class="form-control"><br>
		                  <input type="text" name="contact" placeholder="Enter the Contact No." class="form-control"><br>
		                  <button type="submit" name="insert" class="btn btn-primary form-control">Submit</button>
                      </form>
                  </div>
              </div>
          </div>
      </body>
      </html>