<?php 	
if(isset($_POST["submit"]))
{
	extract($_POST);
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$dateoftravel = $_POST['dateoftravel'];
	$requirement = $_POST['requirement'];
	
	$msgbody = '<table><tr><td colspan="2"><h3 style="text-align:left; color:#000; padding:0; margin:0 0 10px 0; font-weight:bolder;">Enquiry</h3></td></tr><tr><td>Name</td><td><strong>'.$name.'</strong></td></tr><tr><td>Contact No.</td><td><strong>'.$email.'</strong></td></tr><tr><td>Email</td><td><strong>'.$phone.'</strong></td></tr><tr><td>Product</td><td><strong>'.$dateoftravel.'</strong></td></tr><tr><td>Message</td><td><strong>'.$requirement.'</strong></td></tr></table>';

	

	
	$to = "myrahulsaini1998@gmail.com, manojchadha2949@gmail.com";
$subject = "Duty Guys.in Enquiry";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <webmaster@dutyguys.in>' . "\r\n";

if(mail($to,$subject,$msgbody,$headers) == true){
    header("location:index.php?s=1");
}
else{
    header("location:index.php?s=0");
}
	
}	
?>	