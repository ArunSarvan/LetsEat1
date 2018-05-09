<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Colorlib">
    <meta name="description" content="#">
    <meta name="keywords" content="#">

    <title>Dine in</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
   
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet">
   
    <link rel="stylesheet" href="css/simple-line-icons.css">
    
    <link rel="stylesheet" href="css/themify-icons.css">
   
    <link rel="stylesheet" href="css/set1.css">
   
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
       <div class="dark-bg sticky-top">
        <div class="container-fluid">
            <div class="row">
               <div class="col-md-4"><img src="img/logo-spaced.png" alt="logo" width="300px"  style="padding:20px 20px" 
                        class="responsive" /></div>
                    <div class="col-md-4">
                     
                    </div>
            
                    <div class="col-md-4"></div>
            </div>
        </div>
    </div>
  
    

      <section class="main-block light-bg">
        <div class="container">
            <div class="row justify-content-center">

               
            </div>
            <div class="row">
              
                <?php
                         $host="localhost"; 
                         $user="root";
                         $pass="";
                         $db_name="resturants";
                         $conn=new mysqli($host,$user,$pass,$db_name);
                         if($conn->connect_error)
                         {
                         die("connection failed:" .$conn->connect_error);
                         }
                         
                        $search =   $_POST['search'];
                        $location = $_POST['location'];
                         
                         if($search == "")
                         {
                        $query = "select * from rdetails where res_city='$location' or res_name='$search'";
                        } 
                        else
                        {
                             $query = "select * from rdetails where res_city='$location' and res_name='$search'";
                        }
                        $result= $conn->query($query);
                         
                        if($result->num_rows!=0)
                        {
                       while($row = $result->fetch_assoc())  
                       {
                        ?>

                <div class="col-md-4 featured-responsive">
                    <div class="featured-place-wrap">
                        <a href="detail.php ?id=<?php echo $row['id'];?>">

                            <img src="images/featured1.jpg" class="img-fluid" alt="#">
                            <span class="featured-rating-orange"><?php echo $row['res_rate']; ?></span>
                            <div class="featured-title-box">
                                <h6><?php echo $row['res_name']; ?></h6>
                                <p>Restaurant </p> <span>• </span>
                                <p><?php echo $row['res_city']; ?></p> <span> </span>
                                
                                <ul>
                                    <li><span class="icon-location-pin"></span>
                                        <p><?php echo $row['res_address']; ?></p>
                                    </li>
                                    <li><span class="icon-screen-smartphone"></span>
                                        <p><?php echo $row['res_num']; ?></p>
                                    </li>
                                    <li><span class="icon-link"></span>
                                        <p><?php echo $row['res_link']; ?></p>
                                    </li>

                                </ul>
                                <div class="bottom-icons">
                                    <div class="closed-now"><?php echo $row['res_timing']; ?></div>
                                    <span class="ti-heart"></span>
                                    <span class="ti-bookmark"></span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <?php
                 }
   }
   ?>
            </div>
        </div>
    </section>


 <footer class="main-block dark-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        
                        <p>For Gobumpr  <i class="ti-heart" aria-hidden="true"></i> by <a target="_blank"> Arun </a></p>
                        
                        <ul>
                            <li><a href="#"><span class="ti-facebook"></span></a></li>
                            <li><a href="#"><span class="ti-twitter-alt"></span></a></li>
                            <li><a href="#"><span class="ti-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>


   
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script>
        $(window).scroll(function() {
           

            if ($(window).scrollTop() > 100) {

                $('.fixed').addClass('is-sticky');

            } else {

                $('.fixed').removeClass('is-sticky');

            };
        });
    </script>
</body>

</html>
