<?php
function trimsData($data){
    $data = trim($data);
    return $data;
}

$conn = mysqli_connect("localhost","root","","globe_database");
$sql = "";
$filename = "";


$status = trimsData($_POST['status']);
	if (isset($status) && $status == "dispatchs") {
        $filename = "DISPATCH";
		$sql = "SELECT tech_name,bar_no,item_desc,job_order,status_data FROM client_barcode_input WHERE status_data = 'Dispatch'"; 
	}else if (isset($status) && $status == "receives") {
        $filename = "RECEIVE";
        $sql = "SELECT tech_name,bar_no,item_desc,job_order,status_data FROM client_barcode_input WHERE status_data = 'Receive'"; 
  	}else if (isset($status) && $status == "completes") {
        $filename = "COMPLETE";
        $sql = "SELECT tech_name,bar_no,item_desc,job_order,status_data FROM client_barcode_input WHERE status_data = 'Complete'"; 
  	}else if (isset($status) && $status == "migrations") {
        $filename = "MIGRATION";
		$sql = "SELECT tech_name,bar_no,item_desc,job_order,status_data FROM client_barcode_input WHERE status_data = 'Migration'"; 
	}else if (isset($status) && $status == "repairs") {
        $filename = "REPAIR";
		$sql = "SELECT tech_name,bar_no,item_desc,job_order,status_data FROM client_barcode_input WHERE status_data = 'Repair'"; 
	}else if (isset($status) && $status == "installs") {
        $filename = "INSTALL";
        $sql = "SELECT tech_name,bar_no,item_desc,job_order,status_data FROM client_barcode_input WHERE status_data = 'Install'"; 
  	}else if (isset($status) && $status == "easy_installs") {
        $filename = "EC_INSTALL";
		$sql = "SELECT tech_name,bar_no,item_desc,job_order,status_data FROM client_barcode_input WHERE status_data = 'E.C Install'"; 
	}else if(isset($status) && $status == "others"){
        $filename = "OTHERS";
        $sql = "SELECT tech_name,bar_no,item_desc,job_order,status_data FROM client_barcode_input WHERE status_data != 'Dispatch' AND status_data != 'Receive' AND status_data != 'Complete' AND status_data != 'Migration' AND status_data != 'Repair' AND status_data != 'Install' AND status_data != 'E.C Install'"; 
  	}else{
        $filename = "ALL_DATA";
		$sql = "SELECT tech_name,bar_no,item_desc,job_order,status_data FROM client_barcode_input";
	}

$date = date_format(date_create(),"F");
$date_data = "DATE: "."\t".date("m/d/Y");  

    if (!$result = mysqli_query($conn,$sql)) {
       exit(mysqli_error($conn,$sql));
    }else{
        $user = array();
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $user[] = $row;
            }
        }else{

        }
        header("Content-type: text/csv");
        header("Content-Disposition: attachment; filename = Globe_Data_".$date."_".date("Y")."_".$filename.".csv");
        $output = fopen("php://output","w");
        fputcsv($output, array("Technician Name\t","Barcode No\t","Item Description\t","Job Order/RID\t","Status\t"));
            if (count($user)> 0) {
                foreach($user as $row){
                    fputcsv($output,$row);
                }
            }
    }








 /* while ($rec = mysqli_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  
    
    header("expires = 0");
    echo ucwords($date_data."\n"."\n".$columnHeader. "\n" .$setData);*/

?>