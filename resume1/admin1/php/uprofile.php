<?php
//session_start(); 

if (!isset($_SESSION['name'])) {
  $_SESSION['msg'] = "You must log in first" ;
  header('location:../login/');
}
?>
<?php
session_start();
include('../../include/db.php');

if(isset($_POST['uprofile'])){    
$name=mysqli_real_escape_string($db,$_POST['username']);
$password=mysqli_real_escape_string($db,$_POST['userpass']);
$email=mysqli_real_escape_string($db,$_POST['userid']);
$query="UPDATE `admin_user` SET `name`='$name',`E-mail`='$email',`password`='$password' WHERE 1";
echo $query;    
$queryrun=mysqli_query($db,$query);
if($queryrun){
    $_SESSION['name']=$name;
    header("location:../?editprofile=true&msg=updated");
}    

}    
    


