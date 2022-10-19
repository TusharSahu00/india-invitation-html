<?php
//get data from form  
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dateoftravel = $_POST['dateoftravel'];
    $requirement = $_POST['requirement'];

$to = "myrahulsaini1998@gmail.com";

$subject = "Mail From website";
$txt ="name = ". $name . "\r\n  email = " . $email . "\r\n Phone =" . $phone . "\r\n dateoftravel =" . $dateoftravel . "\r\n requirement =" . $requirement;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: myrahulsaini1998@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>