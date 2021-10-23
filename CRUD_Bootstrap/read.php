<?php
include("header.php");
include("connection.php");
$query = "SELECT * FROM STUDENT";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

if($total !=0)
{
?>
<html>
<head>
    <title> Display Records</title>
</head>
<body>     
    <center>
        <div class="container shadow">
            <div class="bg-warning p-1">
                <h2>Display Student Records</h2>
            </div>
        <table class="table table-hover">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Father's Name</th>
            <th>Address</th>
            <th>Contact No.</th>     
        </tr>
    </body>
</html>

<?php
    while($result = mysqli_fetch_assoc($data))
    {
        echo 
        "<tr>
        <td>".$result['id']."</td>
        <td>".$result['name']."</td>
        <td>".$result['fname']."</td>
        <td>".$result['address']."</td>
        <td>".$result['contact']."</td>
        </tr>";
    }
}
else
{
    echo "No record found";
}

?>
</table>
</center>
</div>
