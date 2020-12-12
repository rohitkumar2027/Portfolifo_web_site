<?php
include('db.php');
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$query="INSERT INTO `contact`(`cname`,`cemail`,`cmessage`,`csubject`) VALUES('$name','$email','$message','$subject')";
$run = mysqli_query($db,$query);
if($run){
    ?><script> 
alert('Your message has been sent. Thank you!')
    window.open('../index.php','_self');</script><?php
}
