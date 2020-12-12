
<?php
include('../../include/db.php');
include('checkupload.php');
$query="SELECT * FROM social_link";

$queryrun=mysqli_query($db,$query);
$data=mysqli_fetch_array($queryrun);

$target_dir = "../../assets/img/";

if(isset($_POST['save'])){
    
// $profilepic=$_FILES['profile']['name'];    
// $homewallpaper=$_FILES['cover']['name'];
    
// if($profilepic==""){
//     $profilepic=$data['profilepic'];
// }else{
//     $pdone = Upload('profile',$target_dir);
// }
    
// if($homewallpaper==""){
//     $homewallpaper=$data[''];
// }else{
//     $cdone = Upload('cover',$target_dir);
// }
    
    
$name=mysqli_real_escape_string($db,$_POST['name']);
$email=mysqli_real_escape_string($db,$_POST['email']);
$twitter=mysqli_real_escape_string($db,$_POST['twitter']);
$facebook=mysqli_real_escape_string($db,$_POST['facebook']);
$linkedin=mysqli_real_escape_string($db,$_POST['linkedin']);
$github=mysqli_real_escape_string($db,$_POST['github']);
$instagram=mysqli_real_escape_string($db,$_POST['instagram']);
$address=mysqli_real_escape_string($db,$_POST['address']);
$mobile=mysqli_real_escape_string($db,$_POST['mobile']);
  
// if($pdone=="error"){
//     header("location:../?editsocial_link=true&msg=error");
// }else if($cdone=="error"){
//     header("location:../?editsocial_link=true&msg=error");
// }else{
$query="UPDATE `social_link` SET `tiwtter`='$twitter',`facebook`='$facebook',`github`='$github',
`instagram`='$instagram',`linkedel`='$linkedin',`address`='$address',`phone`='$mobile' WHERE 1";  
$queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../?editsocial_link=true&msg=updated");
}    

   
    
}
?>




