<?php
//session_start(); 

if (!isset($_SESSION['name'])) {
  $_SESSION['msg'] = "You must log in first" ;
  header('location:../login/');
}
?>
<h2>Edit Home Section</h2>
         <?php
         if(isset($_GET['msg'])){
             
  if($_GET['msg']=='updated'){
      ?>
      <div class="alert alert-success text-center" role="alert">
  Successfully Updated !
</div>
      <?php
  }  
  if($_GET['msg']=='error'){
      ?>
      <div class="alert alert-danger text-center" role="alert">
  something wrong with your image please check type or size !
</div>
      <?php
  } } 
?>  
 

 <form method="post" action="php/ulink.php" enctype="multipart/form-data">
  <div class="form-row">
  
   <div class="form-group col-md-6">
      <label for="name">Name</label>
      <input type="name" name="name" value="<?=$data['name']?>" class="form-control" id="name" placeholder="Mohan Goswami">
    </div>
    
   
    
    <div class="form-group col-md-6">
      <label for="email">Email</label>
      <input type="email" name="email" value="<?=$data['email']?>" class="form-control" id="email" placeholder="workwithmohan@gmail.com">
    </div>
    <div class="form-group col-md-6">
      <label for="twitter">Twitter</label>
      <input type="text" class="form-control" value="<?=$data['tiwtter']?>" name="twitter" id="twitter" placeholder="https://twitter.com/MohanGo94273231">
    </div>
    
    <div class="form-group col-md-6">
      <label for="facebook">Facebook</label>
      <input type="text" class="form-control" value="<?=$data['facebook']?>" name="facebook" id="facebook" placeholder="https://facebook.com/MohanGo94273231">
    </div>
    
    <div class="form-group col-md-6">
      <label for="instagram">Instagram</label>
      <input type="text" class="form-control" value="<?=$data['instagram']?>" name="instagram" id="instagram" placeholder="https://instagram.com/MohanGo94273231">
    </div>
    <div class="form-group col-md-6">
      <label for="linkedin">Linkedin</label>
      <input type="text" class="form-control" value="<?=$data['linkedel']?>" name="linkedin" id="linkedin" placeholder="https://linkedin.com/MohanGo94273231">
    </div>
    <div class="form-group col-md-6">
      <label for="github">Github</label>
      <input type="text" class="form-control"  value="<?=$data['github']?>" name="github" id="github" placeholder="https://github.com/MohanGo94273231">
    </div>
  <div class="form-group col-md-6">
    <label for="address">Address</label>
    <input type="text" name="address" value="<?=$data['address']?>" class="form-control" id="address" placeholder="C-537 Mahavir Enclave Part-3, New Delhi 110059">
  </div>
  </div>
   <div class="form-row">
  <!-- <div class="form-group col-md-9">
    <label for="profession">Proffesion Titles (Separate with ',' comma)</label>
    <input type="text" class="form-control" name="profession" value="" id="profession" placeholder="Web Developer,PHP Developer,Graphic Designer">
  </div> -->
  <div class="form-group col-md-3">
    <label for="mobile">Mobile No</label>
    <input type="text" class="form-control" value="<?=$data['phone']?>" name="mobile" id="mobile" placeholder="+917838403916">
  </div>
   <div class="form-group col-md-9  ">
   <div class="pt-4 float-right">
   <input type="submit" name="save" class="btn btn-primary " value="Save Changes">
   
   </div>
  </div>
     </div>
</form>