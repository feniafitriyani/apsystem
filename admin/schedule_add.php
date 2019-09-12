<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$mata_pelajaran = $_POST['mata_pelajaran'];
		$hari = $_POST['hari'];
		$time_in = $_POST['time_in'];
		$time_in = date('H:i:s', strtotime($time_in));
		$time_out = $_POST['time_out'];
		$time_out = date('H:i:s', strtotime($time_out));

		$sql = "INSERT INTO schedules (mata_pelajaran, hari, time_in, time_out) VALUES ('$mata_pelajaran', '$hari', '$time_in', '$time_out')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Schedule added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}	
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: schedule.php');

?>