<?php
	$conn = mysqli_connect("localhost","root","","client_database");
	$bar_no = $_POST['bar_no'];
	$sql = "SELECT * FROM client_sample_tables WHERE id = '$bar_no'";
	$query = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Globe LAN DATABASE</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="./images/logo/icon.png">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="fontawesome/js/all.js"></script>
	<script src="https://kit.fontawesome.com/f9a76d52b7.js" crossorigin="anonymous"></script>
</head>
<body oncontextmenu="return false;">
	<div class="container-fluid">
		<center>
		<!--<img src="./images/logo/logo.jpg" alt="globe">-->
		</center>
	</div>
	<hr>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4">
				<form action="insert.php" method="POST">
					<div class="form-group">
						<label for="last_name">Last Name</label>
						<input type="text" name="l_name" id="last_name" class="form-control" placeholder="" required>
					</div>
					<div class="form-group">
						<label for="first_name">First Name</label>
						<input type="text" name="f_name" id="first_name" class="form-control" placeholder="" required>
					</div>
					<div class="form-group">
						<label for="age_input">Age</label>
						<input type="number" name="age" id="age_input" class="form-control" placeholder="" required>
					</div>
					<div class="form-group">
						<label for="contact_no">Contact Number</label>
						<input type="text" name="contact_number" id="contact_no" class="form-control" placeholder="" required>
					</div>
					<label>Gender</label>
						<table>
							<tr>
								<td>
									<label class="form-check-label" for="male">
									<input type="radio" name="gender" id="male" value="male" required>Male
									</label>
								</td>
								<td>
									<label class="form-check-label" for="female">
									<input type="radio" name="gender" id="female" value="female" required>Female
									</label>
								</td>
							</tr>
						</table>
					<div class="form-group">
						<button type="submit" class="btn btn-primary" name="submit">Submit data</button>
						<button type="reset" id="refreshPage" class="btn btn-secondary">Clear Field</button>
					</div>
				</form>
			</div>
			<div class="col-md-6">
			<form action="search.php" method="POST">
					<div class="input-group mb-3">
						<input type="search" name="bar_no" class="form-control" placeholder="Search Data by Serial Code ...">
						<div class="input-group-append">
						<button type="submit" class="btn btn-primary button-design input-group-text"><i class="fa fa-search"></i></button>
						<input type="button" name="" class="btn btn-primary button-design input-group-text" value="&times" onclick="window.location.assign('index.php')">
						</div>
					</div>
				</form>
	<div class="table-responsive-md">
	<table class="table table-hover table-borderless">
			<thead class="thead-light">
				<tr>
					<th>ID</th>
					<th>Last Name</th>
					<th>First Name</th>
					<th>Age</th>
					<th>Contact Number</th>
					<th>Gender</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
			</thead>
			<tbody>
				<?php
					while ($row = mysqli_fetch_array($query)) {
						echo "<tr>";
						echo "<td><p>".$row['id']."</p></td>";
						echo "<td><p>".$row['last_name']."</p></td>";
						echo "<td><p>".$row['first_name']."</p></td>";
						echo "<td><p>".$row['age']."</p></td>";
						echo "<td><p>".$row['gender']."</p></td>";
						echo "<td><p>".$row['contact_no']."</p></td>";
						echo "<td><a href='edit.php?id=".$row['id']."' target='_blank'><p>Edit</p></a></td>";
						echo "<td><a href='delete.php?id=".$row['id']."' id='delete_data'><p>Delete</p></a></td>";
						echo "</tr>";
					}
				?>
			</tbody>
		</table>
		<div class="input-group-append">
		<button type="button" onclick="window.open('select_data_to_download.php','','width=500; height=500');" class="btn btn-primary button-design input-group-text" title="Export Data to Excel"><i class="fas fa-download"></i>Save as Excel</button>
				<button type="button" onclick="window.open('form_to_export_dispatch.php','','width=500; height=500');" class="btn btn-primary button-design input-group-text" title="Print Dispatch Data"><i class="fas fa-print"></i>Dispatch</button>
				<button type="button" onclick="window.open('form_to_export_receive.php','','width=500; height=500');" class="btn btn-primary button-design input-group-text" title="Print Return Data"><i class="fas fa-print"></i>Receive</button>
				<a href="delete_database.php"><button type="button" class="btn btn-primary button-design input-group-text" id="delete"><i class="fas fa-trash"></i>Delete All Data</button></a>
		</div>
	</div>
</body>
<script src="script/autocomplete.js"></script>
<script>
var x  = document.querySelector("#delete");
	x.onclick =  function () {
		if (confirm("Delete all Data in database?")) {
			return true;
		} else {
			return false;
		}
	}
	
</script>
<script>
	var x = document.querySelector('#delete_data');
		x.onclick = function (){
			if (confirm("Delete Selected Data?")) {
				return true;
			} else {
				return false;
			}
		}
	

</script>
<!--CREATED BY HAZIENE AND ZUSANA-->
</html>