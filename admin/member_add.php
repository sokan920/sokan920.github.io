<?php
	include 'includes/session.php';
	if(isset($_POST['add'])){
		$member_id = $_POST['member_id'];
		$name = $_POST['name'];
        $gender = $_POST['gender'];
        $date = $_POST['birthdate'];
		$phone = $_POST['phone'];
        $address = $_POST['address'];
        $khom = $_POST['khom'];
		$phum = $_POST['phum'];
		$lifein = $_POST['life_in'];
		$membership = $_POST['active_member'];
		$filename = $_FILES['photo']['name'];
		if(!empty($name)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
		}
        $sql = "SELECT member_id FROM member WHERE member_id='$member_id'";
        $rs = $conn->query($sql);
        if($rs->num_rows >0){
            $_SESSION['error'] = 'លេខសម្គាល់សមាជិកមានរួច';
        }else{
            $sql = "INSERT INTO member (member_id, name, gender, date, phone_number, address, khom_id, phum_id, life_in, active_member, photo) VALUES ('$member_id', '$name', '$gender', '$date', '$phone', '$address','$khom','$phum','$lifein','$membership','$filename')";
            $conn->query($sql);
            $_SESSION['success'] = 'មន្ថែមសមាជិកជោគជ័យ';

        }

	}
	else{
		$_SESSION['error'] = 'សូមពិនិត្យម្ដងទៀត!!';
	}

	header('location: member.php');
?>