<?php
include 'connection.php';

$sql = "DELETE FROM student WHERE id='". $_GET["id"]."'";

if (mysqli_query($conn, $sql)) 
    {
    echo "Record deleted successfully";
    header('Location:read.php');
    } 
else 
    {
    echo "Error deleting record: " . mysqli_error($conn);
    }
mysqli_close($conn);
?>