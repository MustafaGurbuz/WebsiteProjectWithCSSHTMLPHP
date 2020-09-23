<?php
	if(isset($_POST['submit'])){
		$name=$_POST['uname'];
		$mailFrom=$_POST['email'];
		$message=$_POST['message'];
		
		$recieve= "mgurbuz9696@gmail.com";
		$headers="From: " .$mailFrom;
		$txt="You have recieved an e-mail from".$name.".\n\n".$message;
		mail($recieve,$txt,$headers);
		header("Location: login.php?mailsend");
	}
	
	
		
?>