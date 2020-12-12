<?php
//session_start(); 

if (!isset($_SESSION['name'])) {
  $_SESSION['msg'] = "You must log in first" ;
  header('location:../login/');
}
?>
<?php
$db=mysqli_connect('localhost','root','','my_portfolio');
if(isset($_POST['submit'])){
  
  // $name=uniqid(time());
  // $extension =pathinfo($_FILES['pr']['name'],PATHINFO_EXTENSION);
  // $fileName= $name.".". $extension;
  $fileName=$_FILES['pr']['name'];
  $hasFileUploaded =move_uploaded_file($_FILES['pr']['tmp_name'],'img/'.$fileName);
  // $name1=uniqid(time());
  // $extension =pathinfo($_FILES['resume']['name'],PATHINFO_EXTENSION);
  // $fileName_1= $name1.".". $extension;
  $fileName_1=$_FILES['resume']['name'];
  $hasFileUploaded_1 =move_uploaded_file($_FILES['resume']['tmp_name'],'img/'.$fileName_1);
 if($fileName=''&&$fileName_1=''){ $fileName=$_POST['img'];
  $fileName_1=$_POST['rs'];

  $query="UPDATE `social_link` SET `image1`='$fileName',`resume`='$fileName_1'WHERE 1";
  // if($fileName=''){   
  //   $query="UPDATE `social_link` SET `image1`='$pr'WHERE 1";
  //  //echo $query;    
  //  $run=mysqli_query($db,$query);
  // }elseif($fileName_1=''){
  //   $query="UPDATE `social_link` SET `resume`='$rs'WHERE 1";
  //   //echo $query;    
  //   $run=mysqli_query($db,$query);

  // }
  echo $query;    
  $run=mysqli_query($db,$query);
      header("location:../?editpr=true&msg=updated");
   
    
  
  
  
    // if($run){
    //   // if ($hasFileUploaded) {
    //   //   $pr_1=$_POST['img'];
    //   //   unlink('img/'. $pr_1);
    //   // }
    //   // if ($hasFileUploaded_1) {
    //   //   $rs_1=$_POST['rs'];
    //   //   unlink('img/'. $rs_1);
    //   // }
    //     header("location:../?editpr=true&msg=updated");
    // }
  }
  $query="UPDATE `social_link` SET `image1`='$fileName',`resume`='$fileName_1'WHERE 1";
  // if($fileName=''){   
  //   $query="UPDATE `social_link` SET `image1`='$pr'WHERE 1";
  //  //echo $query;    
  //  $run=mysqli_query($db,$query);
  // }elseif($fileName_1=''){
  //   $query="UPDATE `social_link` SET `resume`='$rs'WHERE 1";
  //   //echo $query;    
  //   $run=mysqli_query($db,$query);

  // }
  echo $query;    
  $run=mysqli_query($db,$query);
  if($run){
     if ($hasFileUploaded) {
       $pr_1=$_POST['img'];
     unlink('img/'. $pr_1);
    }
    if ($hasFileUploaded_1) {
      $rs_1=$_POST['rs'];
      unlink('img/'. $rs_1);
    }
      header("location:../?editpr=true&msg=updated");
   
    
  }
  
  
  
}
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title></title>
    </head>
    <body>
    <h2>Edit Picture & Resume Section</h2>
        <?php
         if(isset($_GET['msg'])){
             
  if($_GET['msg']=='updated'){
      ?>
      <div class="alert alert-success text-center" role="alert">
  Successfully Updated !
</div>
      <?php
  }  
 } 
?> 
<form action="php/pr.php" method="post" enctype="multipart/form-data">
                 <div class="form-row">
                     <div class="form-group col-md-5">
                     <div class="custom-file">
    <input type="file" name="pr" class="form-control custom-file-input" id="website" placeholder="PHP" >
    <label for="sn" class="custom-file-label">Profile Picture</label>
    <input type="text" name="img" value="<?=$data['image1']?>">
    </div>
    <div class="form-group col-md-5 pt-5">
    <img src="php/img/<?=$data['image1']?>" alt="" width="400" height="300"srcset="">
    </div>
  </div>
  <div class="form-group col-md-5">
  <div class="custom-file">
    <input type="file" name="resume" class="form-control custom-file-input" id="website" placeholder="100" >
    <label for="website" class="custom-file-label">Resume & C/V</label>
    <input type="text" name="rs" value="<?=$data['resume']?>">

    </div>
    <div class="form-group col-md-5 pt-5">
    <iframe src="php/img/<?= $data['resume']?>" alt="" width="500" height="300"></iframe>
    </div>
   <div class="form-group  ">
     <label class="text-white">submit</label>
      <input type="submit" name="submit" class="btn btn-primary form-control" value="update"> 
   </div>
  </div>
                
    </div>
         </form>
         
<script>swal({
  title: "Good job!",
  text: "You clicked the button!",
  icon: "success",
});</script>