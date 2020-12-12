<?php
//session_start(); 

if (!isset($_SESSION['name'])) {
  $_SESSION['msg'] = "You must log in first" ;
  header('location:../login/');
}
?>
<?php
include('../../include/db.php');
if(isset($_POST['addtoresume'])){        
$ogname=mysqli_real_escape_string($db,$_POST['title']);
$year=mysqli_real_escape_string($db,$_POST['year']);
$workdesc=mysqli_real_escape_string($db,$_POST['workdesc']);   
 $query="INSERT INTO `expriance`(`Title`, `workdec`, `year`) VALUES ('$ogname','$year','$workdesc')";
$run=mysqli_query($db,$query);
if($run){
    header("location:../?editexpriance=true&msg=updated");
}    

}    
    

if(isset($_POST['rupdate'])){
    $id=$_POST['id'];
$ogname=mysqli_real_escape_string($db,$_POST['title']);
$year=mysqli_real_escape_string($db,$_POST['year']);
$workdesc=mysqli_real_escape_string($db,$_POST['workdesc']); 
 $query="UPDATE `expriance` SET `Title`='$ogname',`workdec`='$workdesc',`year`='$year' WHERE `id`='$id'";
    $run=mysqli_query($db,$query);
    if($run){
        header("location:../?editexpriance=true#rlist");
    }
}

if(isset($_GET['del'])){
    $id=$_GET['del'];
    $query="DELETE FROM expriance WHERE id='$id'";
    $run=mysqli_query($db,$query);
    if($run){
        header("location:../?editresume=true#rlist");
    }
}
?>