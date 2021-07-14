<?php
	require "list.php";
	$obj = new Option_Choosen();
	$conn = mysqli_connect("localhost","root","","globe_database");
	$sql = "SELECT * FROM client_barcode_input WHERE id = '$_GET[id]'";
	$fetch = mysqli_query($conn,$sql);
	$data = mysqli_fetch_array($fetch);
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
</head>
<style type="text/css">
	h4{
		display: flex;
		text-align: center;
		justify-content: center;
	}
	h1{
		display: flex;
		text-align: center;
		justify-content: center;
	}
</style>
<body oncontextmenu="return false;">
	<div class="container-fluid">
		<center>
		<img src="./images/logo/logo.jpg" alt="globe">
		</center>
	</div>
	<hr>
	<div class="container-fluid">
		<h4>EDIT DATA</h4>
	</div>
<div class="container-fluid">
	<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<form action="" method="POST">
				<div class="form-group">
						<label for="tech_id">Technician Name</label>
						<input type="text" name="tech_name" id="tech_id" class="form-control" value="<?php echo $data['tech_name'];?>" required>
					</div>
					<div class="form-group">
						<label for="barcode_id">Barcode ID</label>
						<input type="text" name="bar_id" id="barcode_id" class="form-control" value="<?php echo $data['bar_no'];?>" required>
					</div>
					<div class="form-group">
						<label for="myInput autocomplete">Item Description</label>
						<input type="text" name="item_description" id="myInput" class="form-control" value="<?php echo $data['item_desc'];?>" required>
					</div>
					<div class="form-group">
						<label for="job_ord">Job Order</label>
						<input type="text" name="job_order" id="job_ord" class="form-control" value="<?php echo $data['job_order'];?>" required>
					</div>
					<label>Status</label>
					<?php
						if ($data['status_data'] == "Dispatch") {
							$obj->OptionA();
						}else if ($data['status_data'] == "Receive") {
							$obj->OptionB();
						}else if($data['status_data'] == "Complete"){
							$obj->OptionC();
						}else if($data['status_data'] == "Migration"){
							$obj->OptionD();
						}else if($data['status_data'] == "Repair"){
							$obj->OptionE();
						}else if($data['status_data'] == "Install"){
							$obj->OptionF();
						}else if($data['status_data'] == "E.C Install"){
							$obj->OptionG();
						}else{
							echo "<label>Status </label>
							<table>
								<tr>
									<td>
										<label class='form-check-label' for='dispatch'>
										<input type='radio' name='status' id='dispatch' value='dispatchs' required>Dispatch
										</label>
									</td>
								</tr>
								<tr>
									<td>
										<label class='form-check-label' for='receive'>
										<input type='radio' name='status' id='receive' value='receives' required>Receive
										</label>
									</td>
								</tr>
								<tr>
									<td>
										<label class='form-check-label' for='complete'>
										<input type='radio' name='status' id='complete' value='completes' required>Complete
										</label>
									</td>
								</tr>
								<tr>
									<td>
										<label class='form-check-label' for='migration'>
										<input type='radio' name='status' id='migration' value='migrations' required>Migration
										</label>
									</td>
								</tr>
								<tr>
									<td>
										<label class='form-check-label' for='repair'>
										<input type='radio' name='status' id='repair' value='repairs' required>Repair
										</label>
									</td>
								</tr>
								<tr>
									<td>
										<label class='form-check-label' for='install'>
										<input type='radio' name='status' id='install' value='installs' required>Install
										</label>
									</td>
								</tr>
								<tr>
									<td>
										<label class='form-check-label' for='easy_install'>
										<input type='radio' name='status' id='easy_install' value='easy_installs' required>E.C Install
										</label>
									</td>
								</tr>
								<tr>
		  						<td>
								  <label class='form-check-label' for='other'>
									<input type='radio' name='status' id='other' value='others' checked required>Other
									</label>
									<input type='text' name='other_option' id='other_options' class='form-control' value='".$data['status_data']."' style='display:block;'>
								</td>
							</tr>
							</table>";
						}
					?>
					<div class="form-group">
						<button type="submit" name="submit" id="refreshPage" class="btn btn-primary">Edit Data</button>
						<button type="reset" class="btn btn-secondary">Clear Field</button>
						<button type="button" id="cancel" class="btn btn-primary">Cancel</button>
					</div>
				</form>
			</div>
			</div>
		</div>
	</body>
	<!--CREATED BY HAZIENE AND ZUSANA-->
	<script>
	other.onclick = function (){

		var x = document.getElementById('other_options');
		x.style.display = other.checked ? "block" : "none";
	}
	

</script>
	</html>
	<script type="text/javascript">
		cancel.onclick = function (){
			window.close();

		}
	</script>
	
<?php
	function trimsData($data){
          $data = trim($data);
          return $data;
    }
	if (isset($_POST['submit'])) {
		$bar_id = $_POST['bar_id'];
		$tech_name = strtoupper($_POST['tech_name']);
   	 	$job_order = strtoupper($_POST['job_order']);
    	$item_description = strtoupper($_POST['item_description']);
  		$status = trimsData($_POST['status']);
  		$status_trim;
		  	if (isset($status) && $status == "dispatchs") {
				$status_trim = "Dispatch";
			}else if (isset($status) && $status == "receives") {
			  	$status_trim = "Receive";
	 	 	}else if (isset($status) && $status == "completes") {
				$status_trim = "Complete";
	 		}else if (isset($status) && $status == "migrations") {
				$status_trim = "Migration";
			}else if (isset($status) && $status == "repairs") {
				$status_trim = "Repair";
			}else if (isset($status) && $status == "installs") {
			 	$status_trim = "Install";
	  		}else if (isset($status) && $status == "easy_installs") {
				$status_trim = "E.C Install";
			}else if(isset($status) && $status == "others"){
			  	$status_trim = $_POST['other_option'];
	 		}else{
				$status_trim = "";
			}
  	$sqlchange = " UPDATE client_barcode_input SET tech_name = '$tech_name' ,bar_no = '$bar_id'  ,item_desc = '$item_description' ,job_order = '$job_order',status_data = '$status_trim' WHERE id = '$_GET[id]'";
  			if (mysqli_query($conn,$sqlchange)) {
  						
						echo "<script>window.location.assign('index.php');</script>";
  			}else{
  						echo "<script>alert('Data inserted unsuccessfully');</script>";
  			}
	}
?>
