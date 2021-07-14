<?php
	$conn = mysqli_connect("localhost","root","","globe_database");
	$sql = "SELECT * FROM client_barcode_input";
	$query = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="refresh" content="60">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="fontawesome/js/all.js"></script>
	<script src="https://kit.fontawesome.com/f9a76d52b7.js" crossorigin="anonymous"></script>
</head>

<body oncontextmenu="return false;" id="mybody">
	<div class="table-responsive-md" >
		<table class="table table-hover table-borderless">
			<thead class="thead-light">
				<tr>
					<th>Technician Name.</th>
					<th>Barcode No.</th>
					<th>Item Description</th>
					<th>Job Order/RID</th>
					<th>Status</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
			</thead>
			<tbody>
				<?php
					while ($row = mysqli_fetch_array($query)) {
						echo "<tr>";
						echo "<td><p>".$row['tech_name']."</p></td>";
						echo "<td><p>".$row['bar_no']."</p></td>";
						echo "<td><p>".$row['item_desc']."</p></td>";
						echo "<td><p>".$row['job_order']."</p></td>";
						echo "<td><p>".$row['status_data']."</p></td>";
						echo "<td><a href='edit.php?id=".$row['id']."' target='_blank'><p>Edit</p></a></td>";
						echo "<td><a href='delete.php?id=".$row['id']."'><p>Delete</p></a></td>";
						echo "</tr>";
					}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>