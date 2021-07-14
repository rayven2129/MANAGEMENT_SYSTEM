<?php
	$conn = mysqli_connect("localhost","root","","globe_database");
	$sql = "DELETE FROM client_barcode_input WHERE id = '$_GET[id]'";
	if (mysqli_query($conn,$sql)) {
		echo "<script>alert('Data Deleted successfully!!');</script>";
	}else{
		echo "<script>alert('Data Deleted unsuccessfully!!');</script>";
	}
	header("location: index.php");
?>