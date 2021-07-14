<?php
$conn = mysqli_connect("localhost","root","","globe_database");
$sql = "DROP DATABASE globe_database";
if (mysqli_query($conn,$sql)) {
    echo "<script>alert('Database deleted successfully, please wait a few seconds');</script>";
}else{
    echo "<script>alert('Database not deleted');</script>";
}
header("refresh:3; url=index.php");


?>