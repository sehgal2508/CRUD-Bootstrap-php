<?php
include("header.php");
include_once 'connection.php';

if(count($_POST)>0) 
{
mysqli_query($conn,"UPDATE student set 
        id='" . $_POST['id'] . "', 
        name='" . $_POST['name'] . "', 
        fname='" . $_POST['fname'] . "', 
        address='" . $_POST['address'] . "' ,
        contact='" . $_POST['contact'] . "' WHERE id='" . $_POST['id'] . "'");

$message = "Record Modified Successfully";
header('Location:read.php');
}

$result = mysqli_query($conn,"SELECT * FROM student WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Employee Data</title>
</head>
<body>
       <div class="container shadow p-3">
        <div class="row">
            <div class="col-sm-3"></div>
                <div class="col-sm-6">  
                 <div class="bg-warning p-1">
                    <h2>Update Student Records</h2>
                </div>  <br>
                <form method="POST">
                <div><?php if(isset($message)) { echo $message; } ?></div>
                
                <label>ID : </label><br>
                <input type="hidden" name="id" class="txtField form-control" value="<?php echo $row['id']; ?>">
                    <input type="text" name="id"  value="<?php echo $row['id']; ?>"><br><br>
                <label>Name:</label>
                    <input type="text" name="name" class="txtField form-control" value="<?php echo $row['name']; ?>"><br>
                <label>Father's Name :</label>
                    <input type="text" name="fname" class="txtField form-control" value="<?php echo $row['fname']; ?>"><br>
                <label>Address:</label>
                    <input type="text" name="address" class="txtField form-control" value="<?php echo $row['address']; ?>"><br>
                <label>Contact :</label>
                    <input type="text" name="contact" class="txtField form-control" value="<?php echo $row['contact']; ?>"><br>
                <button type="submit" name="submit"  class="btn btn-success form-control"> Update Data</button>
            </form>
        </div>
    </div>
</div>
</center>
</body>
</html>
