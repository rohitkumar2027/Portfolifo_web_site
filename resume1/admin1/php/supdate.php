<?php
//session_start(); 

if (!isset($_SESSION['name'])) {
  $_SESSION['msg'] = "You must log in first" ;
  header('location:../login/');
}
?>
<?php
include('../../include/db.php');
if(isset($_POST['supdate'])){
    $id=$_POST['id'];
    $skill=mysqli_real_escape_string($db,$_POST['skill']);
    $score=mysqli_real_escape_string($db,$_POST['score']);
    $query="UPDATE `skills` SET `skill`='$skill',`score`='$score' WHERE id='$id'";
    $run=mysqli_query($db,$query);
    if($run){
        $_SESSION['status']="hello";
        header("location:../?editmyskill=true");
    }
}

if(isset($_POST['addskill'])){
    $id=$_POST['id'];
    $skill=mysqli_real_escape_string($db,$_POST['skill']);
    $score=mysqli_real_escape_string($db,$_POST['score']);
    $query="INSERT INTO `skills` (`skill`,`score`) VALUES ('$skill','$score')";
    $run=mysqli_query($db,$query);
    if($run){
        header("location:../?editmyskill=true#skillsection");
    }
}

if(isset($_GET['del'])){
    $id=$_GET['del'];
    $query="DELETE FROM skills WHERE id='$id'";
    $run=mysqli_query($db,$query);
    if($run){
        header("location:../?editmyskill=true#skillsection");
    }
}