<?php 
include 'conn.php'; 

$khom_id =   $_POST['khom_data'];

$state = "SELECT * FROM phum WHERE khom_id = $khom_id";

$state_qry = mysqli_query($conn, $state);
// $output="";
$output = '<option value="">Select Phum</option>';
while ($state_row = mysqli_fetch_assoc($state_qry)) {
    $output .= '<option value="' . $state_row['phum_id'] . '">' . $state_row['name_phum'] . '</option>';
}
echo $output;



?>