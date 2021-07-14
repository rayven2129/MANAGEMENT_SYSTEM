<?php
    function trimsData($data){
          $data = trim($data);
          return $data;
    }
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  	
    $conn = mysqli_connect("localhost","root","","client_database");
	$last_name = mysqli_real_escape_string($conn,strtoupper($_POST['l_name']));
    $first_name = mysqli_real_escape_string($conn,strtoupper($_POST['f_name']));
	$age = mysqli_real_escape_string($conn,$_POST['age']);
	$contact_number = mysqli_real_escape_string($conn,$_POST['contact_number']);
  	$status = trimsData($_POST['gender']);
  	$status_trim;
	  		if (isset($status) && $status == "male") {
					$status_trim = "Male";
			}else if (isset($status) && $status == "female") {
  					$status_trim = "Female";
  			}else{
				$status_trim = "";
			}
  	$status_escape_string = mysqli_real_escape_string($conn,$status_trim);			
  	$sql = "INSERT INTO client_sample_tables (last_name,first_name,age,contact_no,gender) VALUES ('$last_name','$first_name','$age','$contact_number','$status_escape_string')";
  			if (mysqli_query($conn,$sql)) {
  						echo "<script>alert('Data inserted successfully');</script>";
  			}else{
  						echo "<script>alert('Data inserted successfully');</script>";
  			}
        echo "<script>window.location.assign('index.php');</script>";

 }
?>