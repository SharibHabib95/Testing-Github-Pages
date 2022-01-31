<?php 
if(isset($_POST['email']) && $_POST['email'] != ''){
  
    $userName = $_POST['name'];
	$userEmail = $_POST['email'];
	$messageSubject = $_POST['subject'];
	$message = $_POST['message'];


    $to = "sghauri@albany.edu"; // this is your Email address
	$body = "";
	
	$body .= "From: ".$userName. "\r\n";
	$body .= "Email: ".$userEmail. "\r\n";
	$body .= "Message: ".$message. "\r\n";
	
    mail($to,$subject,$messageSubject,$body);
    
    }
?>