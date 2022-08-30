<?php 
	include 'includes/session.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$sql = "SELECT *,member.id As memid, member.address, khom.name_khom
        FROM member
        INNER JOIN khom ON member.khom_id = khom.khom_id
        INNER JOIN phum ON member.phum_id = phum.phum_id WHERE member.id = '$id'";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();

		echo json_encode($row);
	}
?>