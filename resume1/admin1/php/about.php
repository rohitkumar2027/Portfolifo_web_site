<?php

if (!isset($_SESSION['name'])) {
  $_SESSION['msg'] = "You must log in first" ;
  header('location:../login/');
}
?>
 <?php
      
        if(isset($_GET['msg'])){
             
          if($_GET['msg']=='updated'){
              
              include ('../include/db.php');
          } 
          
         } 
         

      $db=mysqli_connect('localhost','root','','my_portfolio');  
  
  if(isset($_POST['save'])){        
  $heading=mysqli_real_escape_string($db,$_POST['name']);
  $subheading=mysqli_real_escape_string($db,$_POST['discription']);
  $phone=mysqli_real_escape_string($db,$_POST['phone']);
  $longdesc=mysqli_real_escape_string($db,$_POST['aboutme']);  
  $dob=mysqli_real_escape_string($db,$_POST['dob']);  
  $website=mysqli_real_escape_string($db,$_POST['website']);  
  $email=mysqli_real_escape_string($db,$_POST['email']); 
  $query="UPDATE `basic_setup` SET `name`='$heading',`discription`='$subheading',
  `age`='$dob',`website`='$website',`phone`='$phone',`email`='$email',`about_me`='$longdesc' WHERE 1";
  echo $query;    
  $queryrun=mysqli_query($db,$query);
  if($queryrun){
      header("location:../?editabout=true&msg=updated");
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
    <h2>Edit About Section</h2>
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
    <form method="post" action="php/about.php">
         <div class="form-row">
         
             <div class="form-group col-md-12">
    <label for="ptitle">Name </label>
    <input type="text" name="name" value="I'm Rohit kumar" class="form-control" id="ptitle" placeholder="Web Developer/PHP Developer">
  </div>
        <div class="form-group col-md-12">
    <label for="psubtitle">Subheading</label>
    <input type="text" name="discription" value="<?=$data['discription']?>" class="form-control" id="psubtitle" placeholder="Currently Working at Hedkey Pvt. Ltd.">
  </div>
    <div class="form-group col-md-6">
    <label for="exampleFormControlTextarea1">Phone</label>
    <input type="text" name="phone" value="<?=$data['phone']?>" class="form-control" id="psubtitle" placeholder="Currently Working at Hedkey Pvt. Ltd.">

  </div>
  <div class="form-group col-md-6">
    <label for="exampleFormControlTextarea1">Email</label>
    <input type="text" name="email" value="<?=$data['email']?>" class="form-control" id="psubtitle" placeholder="Currently Working at Hedkey Pvt. Ltd.">

  </div>
        <div class="form-group col-md-12">
    <label for="exampleFormControlTextarea1">Long Description About You (You can Use Html Code)</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="aboutme" placeholder="I am a person who 
    is positive about every aspect of life. There are many things I like to do, to see, and to experience.
     I like to see the sunrise in the morning, I like to see the moonlight at night; I like to feel
      the music flowing on my face, I like to smell the wind coming from the ocean. I like to look at 
      the clouds in the sky with a blank mind, I like to do thought experiment when I cannot sleep in the 
        the flat cornfield in Champaign. I like delicious food and comfortable shoes; I like good books and 
        romantic movies. I like the land and the nature, I like people. And, I like to laugh."><?=$data['about_me'];?>
    </textarea>
  </div>    
        
        <div class="form-group col-md-6">
    <label for="bd">age</label>
    <input type="text" name="dob" value="<?=$data['age']?>" class="form-control" id="dob" placeholder="14 July, 1999">
  </div>
        
        <div class="form-group col-md-6">
    <label for="website">Website</label>
    <input type="text" name="website" value="<?=$data['website']?>" class="form-control" id="website" placeholder="https://www.devninja.com">
  </div>
         </div>
         <input type="submit" name="save" class="btn btn-primary" value="Save Changes">
         </form>

    </body>
    </html>