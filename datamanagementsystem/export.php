<?php
   $conn = mysqli_connect("localhost","root","","globe_database");
   $name = $_POST['enter_field'];
   $sql = "SELECT * FROM client_barcode_input WHERE status_data = 'Dispatch' AND tech_name = '$name'";
   $fetch = mysqli_query($conn,$sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preview Document</title>
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
<body class="print">
    <div class="container-fluid">
        <center>
        <table class="tg">
<thead>
  <tr>
    <th class="tg-1wig">DATE: </th>
    <th class="tg-1wig" colspan="3"><p class="p_date"><?php echo $_POST['date_form'];?></p></th>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="tg-1wig">ACTIVITY: </td>
    <td class="tg-1wig"><?php echo $_POST['team_group'];?></td>
    <td class="tg-1wig"><?php echo $_POST['enter_field'];?></td>
    <td class="tg-1wig"></td>
  </tr>
  <tr>
    <td class="tg-dyke">ITEM DESCRIPTION</td>
    <td class="tg-dyke">SERIAL NUMBER</td>
    <td class="tg-dyke">JOB ORDER/RID</td>
    <td class="tg-dyke">STATUS</td>
  </tr>
  <?php
    while ($row = mysqli_fetch_array($fetch)) {
      echo "<tr>";
        echo "<td class='tg-dyke1'>".$row['item_desc']."</td>";
        echo "<td class='tg-dyke1'>".$row['bar_no']."</td>";
        echo "<td class='tg-dyke1'>".$row['job_order']."</td>";
        echo "<td class='tg-dyke1'>".$row['status_data']."</td>";
      echo "</tr>";
    } 
  ?>
    <tr>
    <td class="tg-1wig text-center"></td>
    <td class="tg-1wig text-center"></td>
    <td class="tg-1wig text-center"></td>
    <td class="tg-1wig text-center"></td>
  </tr>
  <tr>
    <td class="tg-1wig text-center">SP</td>
    <td class="tg-1wig text-center"></td>
    <td class="tg-1wig text-center"></td>
    <td class="tg-1wig text-center"></td>
  </tr>
  <tr>
    <td class="tg-1wig text-center">ATB</td>
    <td class="tg-1wig text-center"></td>
    <td class="tg-1wig text-center"></td>
    <td class="tg-1wig text-center"></td>
  </tr>
  <tr>
    <td class="tg-1wig text-center">TAPPING CLIP</td>
    <td class="tg-1wig text-center"></td>
    <td class="tg-1wig text-center"></td>
    <td class="tg-1wig text-center"></td>
  </tr>
  <tr>
    <td class="tg-1wig text-center">F CLAMP</td>
    <td class="tg-1wig text-center"></td>
    <td class="tg-1wig text-center"></td>
    <td class="tg-1wig text-center"></td>
  </tr>
  <tr>
    <td class="tg-1wig text-center">PATCH CHORD</td>
    <td class="tg-1wig text-center"></td>
    <td class="tg-1wig text-center"></td>
    <td class="tg-1wig text-center"></td>
  </tr>
  <tr>
    <td class="tg-1wig text-center">DRIVE RING</td>
    <td class="tg-1wig text-center"></td>
    <td class="tg-1wig text-center"></td>
    <td class="tg-1wig text-center"></td>
  </tr>
  <tr>
    <td class="tg-1wig text-center">MID SPAN</td>
    <td class="tg-1wig text-center"></td>
    <td class="tg-1wig text-center"></td>
    <td class="tg-1wig text-center"></td>
  </tr>
  <tr>
    <td class="tg-1wig text-center">FIC</td>
    <td class="tg-1wig text-center"></td>
    <td class="tg-1wig text-center"></td>
    <td class="tg-1wig text-center"></td>
  </tr>
  <tr>
    <td class="tg-1wig text-center">ELECTRICAL TAPE</td>
    <td class="tg-1wig text-center"></td>
    <td class="tg-1wig text-center"></td>
    <td class="tg-1wig text-center"></td>
  </tr>
  <tr>
    <td class="tg-1wig text-center">FAT</td>
    <td class="tg-1wig text-center"></td>
    <td class="tg-1wig text-center"></td>
    <td class="tg-1wig text-center"></td>
  </tr>

  <tr>
    <td class="tg-1wig2 text-center"></td>
    <td class="tg-1wig2 text-center"></td>
    <td class="tg-1wig2 text-center"></td>
    <td class="tg-1wig2 text-center"></td>
  </tr>
  <tr>
    <td class="tg-1wig">DISPATCH BY:</td>
    <td class="tg-1wig"></td>
    <td class="tg-1wig">SIGNATURE OVER PRINTED NAME<br>WITH DATE AND TIME</td>
    <td class="tg-1wig"></td>
  </tr>
  <tr>
    <td class="tg-1wig">RECEIVE BY:</td>
    <td class="tg-1wig"></td>
    <td class="tg-1wig">SIGNATURE OVER PRINTED NAME <br>WITH DATE AND TIME</td>
    <td class="tg-1wig"></td>
  </tr>
  <tr>
    <td class="tg-1wig">RECEIVE BY:</td>
    <td class="tg-1wig"></td>
    <td class="tg-1wig">SIGNATURE OVER PRINTED NAME<br> WITH DATE AND TIME<br></td>
    <td class="tg-1wig"></td>
  </tr>
</tbody>
</table>
        </center>
    </div>  
</body>
<script>
  var x = document.querySelector('.print');
  x.onload = function (){
   window.print();
  }
</script>
<script>
 /* var d = new Date();
  var x = document.querySelector('.p_date').innerHTML = d.toDateString();
  */
</script>
<!--CREATED BY HAZIENE AND ZUSANA-->
</html>