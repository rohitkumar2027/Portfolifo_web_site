
<?php include('include/db.php'); 
$query = "SELECT * FROM basic_setup,social_link";
$runquery = mysqli_query($db,$query);
if(!$db){
    header("location:index_2.html");
}
$data = mysqli_fetch_array($runquery);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$data['name']?></title>
    <link rel="stylesheet" href="Assets/Css/booststrap.min.css">
    <link rel="stylesheet" href="Assets/Css/mystyle.css">
    <link rel="stylesheet" href="Assets/fontawesome/css/all.css">

    <style>
    
        body{
    background-color: #ccc;
}

#Header a:hover{
    color: white;
}
.img{
    background-image: url("Assets/images/images.jpeg");
    background-size: 100%;
    background-repeat: no-repeat;
    min-height: 500px;
}
#about{
    margin-top: -280px;
}
#about span{
 padding: 10px 20px 10px 20px;
}
#about hr{
    border-width: 3px;
    margin-top: 6px;
}

#skill span{
 padding: 10px 20px 10px 20px;
}
#skill hr{
    border-width: 3px;
    margin-top: 6px;
}
#experience span{
 padding: 10px 20px 10px 20px;
}
#experience hr{
    border-width: 3px;
    margin-top: 6px;
}
#experience .card{
    border-top: 03px solid red;
}
#education span{
 padding: 10px 20px 10px 20px;
}
#education hr{
    border-width: 3px;
    margin-top: 6px;
}
#education .card{
    border-top: 03px solid red;
}

#contact span{
 padding: 10px 20px 10px 20px;
}
#contact hr{
    border-width: 3px;
    margin-top: 6px;
}
#back-to-top {
  position: fixed;
  width: 40px;
  height: 40px;
  border-radius: 50px;
  right: 15px;
  bottom: 15px;
  background: ;
  color: #fff;
  display:none;
  transition: display 0.5s ease-in-out;
  z-index: 99999;
}
.circle{
    width:200px;
    height:200px;
    border-radius:50%;
}
.back-to-top i {
  font-size: 24px;
  position: absolute;
  top: 7px;
  left: 8px;
}
.scrollToTop{
    position:fixed;
    bottom:80px;
    right:50px;
    width:40px;
    line-height:40px;
    text-align:center;
    background:#0063e8;
    color:#fff;
    display:none;
    z-index:5;
}
.scrollToTop:hover
{
    background-color:#e8008a;
}



    </style>
</head>
<body data-spy='scroll' data-target=".navbar">
    <!-- navbar -->
    <div id="Header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <button class="navbar-toggler" data-toggle="collapse" data-target="#Navbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a href="#" class="navbar-brand"><h3>My Portfolio</h3></a>
                <div class="collapse navbar-collapse" id="Navbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a href="#about" class="nav-link">About me</a></li>
                        <li class="nav-item"><a href="#skill" class="nav-link">Skills</a></li>
                        <li class="nav-item"><a href="#education" class="nav-link">Education</a></li>
                        <li class="nav-item"><a href="#experience" class="nav-link">Experiance</a></li>
                        <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
                        <li class="nav-item"><a href="Admin1/php/img/<?=$data['resume']?>" class="nav-link">Resume</a></li>
                        <li class="nav-item"><a href="admin1" class="nav-link">Admin</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- <a class="scrollToTop" ><h2><i class="fas fa-arrow-alt-circle-up "></i></h2></a> -->

    <!-- showcase -->
    <div class="img"></div>
    <!-- About -->
    <div id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="aboutdata">
                        <div class="card bg-white ">
                            <div class="card-title my-5">
                                <div class="media">
                                    <img src="Admin1/php/img/<?=$data['image1']?>" width="200px" height="200px" class="img-fluid rounded-top mx-5 d-none d-lg-block" alt="" srcset="">
                                    <div class="media-body">
                                    <img src="Admin1/php/img/<?=$data['image1']?>"  class="img-fluid mx-5 circle d-sm-none " alt="" srcset="">

                                        <h3 class="display-4 ml-5"><?=$data['name']?></h3>
                                        <p class="text-muted ml-5"><?=$data['discription']?></p>
                                        <div class="container">
                                            <div class="table">
                                            <table class="table table-responsive ml-4">
                                                <tr>
                                                    <td class="text-bold" style="font-size:14px;">Age</td>
                                                    <td style="font-size:13px;">: <?=$data['age']?></td>

                                                </tr>
                                                <tr>
                                                    <td class="text-bold" style="font-size:14px;">Email</td>
                                                    <td style="font-size:12px;">:<a href="email:<?=$data['email']?>"><?=$data['email']?></a></td>

                                                </tr>
                                                <tr>
                                                    <td class=""style="font-size:14px;">website</td>
                                                    <td style="font-size:12px;">: <a href="http://<?=$data['website']?>"><?=$data['website']?></a></td>

                                                </tr>
                                                <tr>
                                                    <td class=""style="font-size:14px;">Phone</td>
                                                    <td style="font-size:12px;" >:<a href="tel:8447402937"> 8447402937</a></td>

                                                </tr>
                                            </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-danger ">
                                <a href="http://<?=$data['facebook']?>"><i class="fab fa-facebook fa-2x text-white mx-2"></i></a>
                                <a href="http://<?=$data['instagram']?>"><i class="fab fa-instagram fa-2x text-white mx-2"></i></a>
                                <a href="http://<?=$data['tiwtter']?>"><i class="fab fa-twitter fa-2x text-white mx-2"></i></a>
                                <a href="http://<?=$data['github']?>"><i class="fab fa-github fa-2x text-white"></i></a>
                                <a href="http://<?=$data['linkedel']?>"><i class="fab fa-linkedin fa-2x mx-2 text-white"></i></a>
          
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col">
                    <span class="bg-danger text-white">About me</span><hr class="bg-danger">
                    <p class="lead text-justify"><?=$data['about_me']?></p>
                </div>
            </div>
        </div>
    </div>
    <a href="" class="scrollToTop"><i class="fa fa-arrow-alt-circle-up "></i></a>
    <!-- Skills -->
    <div id="skill">
        <div class="container mt-5">
            <span class="bg-primary text-white">My Skills</span><hr class="bg-primary">
            <div class="row">
                <div class="col">
                    <div class="card bg-white">
            <?php
                    $query3 = "SELECT * FROM skills";
                    $runquery3= mysqli_query($db,$query3);
     while($data3=mysqli_fetch_array($runquery3)){
            ?>                  <h3 class="ml-3 my-3"><?=$data3['skill']?></h3>
                        <div class="progress my-3 mx-2">
                            <div class=" progress-bar" style="width:<?=$data3['score']?>%;"><?=$data3['score']?>%</div>
                        </div>
            <?php } ?>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Experiance -->
    <div id="education">
        <div class="container mt-5">
            <span class="bg-success text-white">Eduction</span><hr class="bg-success">
            <div class="row mt-5">
                    <?php
                    $query4 = "SELECT * FROM resume WHERE category='e'";
                    $runquery4= mysqli_query($db,$query4);
                    while($data4=mysqli_fetch_array($runquery4)){
                        ?>
                        <div class="col-lg-6 pt-2">
                        <div class="card bg-white ">
                    
                        <h3 class="text-center text-danger"><?=$data4['title']?></h3>
                        <p class="lead text-justify mx-3"><?=$data4['ogname']?></p>
                            <span class="mx-2">Duration/year of passing:-<?=$data4['year']?></span>
                </div>
                     </div>
                                <?php
                    }
                    ?>
                        <!-- <img src="Assets/images/mysql.png" width="100" height="0px" class="img-fluid m-auto py-3" alt=""> -->
                <!-- <div class="col-lg-6">
                    <div class="card bg-white">
                         <img src="Assets/images/mysql.png" width="100" height="0px" class="img-fluid m-auto py-3" alt=""> 
                        <h3 class="text-center text-danger">Secondary Eduction</h3>
                        <p class="lead text-justify mx-3"> <div class="table"> 10th, From C.B.S.E</div></p>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
     <!-- Experiance -->
     <div id="experience">
        <div class="container mt-5">
            <span class="bg-success text-white">Experience</span><hr class="bg-success">
                        <!-- <img src="Assets/images/mysql.png" width="100" height="0px" class="img-fluid m-auto py-3" alt=""> -->
                        <?php
                    $query4 = "SELECT * FROM expriance ";
                    $runquery4= mysqli_query($db,$query4);
                    while($data4=mysqli_fetch_array($runquery4)){
                        ?>
                        <div class="row mt-3">
                        <div class="col-12 ">
                        <div class="card bg-white ">
                    
                        <h3 class=" mx-4 text-info pt-3"><?=$data4['Title']?></h3>
                        <span class="mx-2"><?=$data4['year']?></span>
                        <p class="lead text-justify mx-4"> <?=$data4['workdec']?></p>
                        </div>
                        </div>
                        </div>
                                <?php
                    }
                    ?>
                   
                
            </div>
        </div>
    </div>
     <script>swal({
  title: "Good job!",
  text: "You clicked the button!",
  icon: "success",
  button: "Aww yiss!",
});</script>
    
    <!-- contacts -->
    <div id="contact">
        <div class="container mt-5">
            <span class="text-white bg-info">Contacts</span><hr class="bg-info">
            <div class="row my-3 ">
            <div class="col-md-5 pt-2">
            <div class="card bg-white h-100">

                            <div class="address mx-4 pt-3">
                            <h4><i class="fas fa-map-marker-alt text-info h2"></i>
                                Location:</h4>
                                <p><?=$data['address']?></p>
                            </div>

                            <div class="email mx-4">
                            <h4><i class="fas fa-envelope-square text-info h2"></i>
                                Email:</h4>
                                <p><a href="mailto:<?=$data['email']?>"><?=$data['email']?></a></p>
                            </div>

                            <div class="phone mx-4">
                                
                                <h4><i class="fas fa-phone-square text-info h2 pt-2 "></i> Call:</h4>
                                <p><a href="tel:<?=$data['phone']?>"><?=$data['phone']?></a></p>
                            </div>
                        </div>

                    </div>

                <div class="col-md-7 pt-2">
                    <div class="card bg-white">
                    <div class="card-header">
                        <h4 class="my-4">Contact Me On Below</h4>
                        <form action="include/message.php" method="post">
                            <div class="form-group mt-3">
                            <input type="text" name="name" placeholder="username" class="form-control p-2" required>
                            </div>
                            <div class="form-group mt-3">
                        
                            <input type="text" name="email"placeholder="Email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Subject" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" / required>
                                <div class="validate"></div>
                            </div>
                            <div class="form-group mt-3">
                            <textarea name="message" id="" rows="4"  placeholder="Write Something  here...." class="form-control" required></textarea>
                             </div>
                             
                            <div class="form-group mt-3">
                            <button type="submit" class="btn btn-success ">submit</button>
                            </div>
                        </form>  
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- footer -->
<div class="container-fluid bg-dark">
    <div class="row">
        <div class="col">
            <div class="container">
            <p class="text-white text-center my-3">Website Designed & developed By: Rohit kumar in 2020-<?php $db=date('Y'); echo $db;?></p>
        </div>
        </div>
    </div>
  <script src="Assets/js/sweetalert.min.js"></script>

  <script src="Assets/js/jquery.min.js"></script>
  <script src="Assets/js/popper.js"></script>
  <script src="Assets/js/bootstrap.min.js"></script>  
</div>
<script>
$(document).ready(function(){
    $(window).scroll(function(){
        if($(this).scrollTop() >200){
            $('.scrollToTop').fadeIn();
        }else{
            $('.scrollToTop').fadeOut();

        }
    });
    $(".scrollToTop").click(function(){
        $('html,body').animate({scrollTop :0}, 1000);
    });
    
});
</script>
<script>swal({
  title: "Good job!",
  text: "You clicked the button!",
  icon: "success",
  button: "Aww yiss!",
});</script>
</body>
</html>