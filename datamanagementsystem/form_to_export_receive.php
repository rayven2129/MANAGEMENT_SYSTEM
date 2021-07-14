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
		<img src="./images/logo/logo.jpg" alt="globe">
		</center>
	</div>
	<hr>
<div class="container-fluid">
		<div class="row">
            <div class="col-md-4"></div>
			<div class="col-md-4">
				<form action="export_return.php" method="POST">
					<div class="form-group">
						<label for="team_groups">ENTER TEAM GROUP</label>
						<input type="text" name="team_group" id="team_groups" class="form-control" placeholder="Eg: EC TEAM-2" required>
					</div>
					<div class="form-group">
						<label for="date_forms">ENTER DATE</label>
						<input type="date" name="date_form" id="date_forms" class="form-control" placeholder="Eg: 1234567890" required>
					</div>
					<div class="form-group">
						<label for="enter_fields">ENTER TECHNICIAN ID</label>
						<input type="text" name="enter_field" id="enter_fields" class="form-control" placeholder="Eg: EMV00038 / EMV00040" required>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary" name="submit">Add data</button>
						<button type="reset" id="refreshPage" class="btn btn-secondary">Clear Field</button>
                        <button type="button" id="cancel" class="btn btn-secondary">Cancel</button>
					</div>
				</form>
			</div>
        </div>
</div>
</body>
<script>
    cancel.onclick = function (){
        window.close();
    }
</script>
<!--CREATED BY HAZIENE AND ZUSANA-->
</html>