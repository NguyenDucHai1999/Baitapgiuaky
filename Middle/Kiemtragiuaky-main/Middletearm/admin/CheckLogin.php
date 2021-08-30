<?php 
	include("./config/db.php")
    if(isset($_POST['submit'])){
		$email = $_POST['email'];
		$pass =  $_POST['password'];	

		$conn = mysqli_connect('localhost','root','','dhtl');
		mysqli_set_charset($conn, 'UTF8');
		if (!$conn) {
			die("ERROR".mysqli_connect_error());
		}else{
			$sql = "select * from tbl_admin where email='".$email."'";
			$result = mysqli_query($conn, $sql);
			if(mysqli_num_rows($result)>0){
				$row = mysqli_fetch_assoc($result);
				if ($pass == $row["password"]) {					
					header("Location: http://localhost/MiddleTearm/admin/Home.php");
				}
				else{
					header("Location: http://localhost/MiddleTearm/admin/Index.php");
				}
			}
		}
    
    }
	
 ?>