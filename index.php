
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
    <link rel="stylesheet" href="css/swiper.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
   
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="nav-menu">
        <div class="bg transition">
            <div class="container-fluid fixed">
                <div class="row">
                    <div class="col-md-4"><img src="img/logo-spaced.png" alt="logo" width="300px"  style="padding:20px 20px" 
                        class="responsive" /></div>
                    <div class="col-md-4">
                     
                    </div>
            
                    <div class="col-md-4"></div>
                </div>
            </div>
        </div>
    </div>
  
    <section class="slider d-flex align-items-center" style="background-image: url(images/slider.jpg);">
        
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12">
                    <div class="slider-title_box">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slider-content_wrap">
                                    <h1 id="view" >Discover great places  </h1>
                                    <h5>Let's uncover the best places to eat, drink, and shop nearest to you.</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-10">
                                <form action="resturants.php"  class="form-wrap mt-4" method="POST">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <input type="text" name="search" id="search" placeholder="What are your looking for?" class="btn-group1" autocomplete="off">
                                       <select name="location" id="location" onchange="locupdate(this.value)" class="btn-group2" placeholder="Select location" required="required">
                                        <option value="">Select location</option>
                                        <option value="Chennai">chennai</option>
                                        <option value="Banglore">Banglore</option>
                                        </select>
                                        <button type="submit" class="btn-form" ><span class="icon-magnifier search-icon"></span>SEARCH<i class="pe-7s-angle-right"></i></button>
                                    </div>
                                </form>
                              
                            </div>
                        </div>
                    </div>
                </div>
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
                            <li><a href="https://www.facebook.com/"><span class="ti-facebook"></span></a></li>
                            <li><a href="https://twitter.com/?lang=en"><span class="ti-twitter-alt"></span></a></li>
                            <li><a href="https://www.instagram.com/"><span class="ti-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>




    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>  

    <script>
$(document).ready(function(){
 
 $('#search').typeahead({
  source: function(query, result)
  {
   $.ajax({
    url:"fetch.php",
    method:"POST",
    data:{query:query},
    dataType:"json",
    success:function(data)
    {
     result($.map(data, function(item){
      return item;
     }));
    }
   })
  }
 });
 
});
</script>

<script>
function locupdate() {
    var x = document.getElementById("location").value;
    document.getElementById("view").innerHTML =  "Discover great places in "  + x;
}
</script>

    <script>
        $(window).scroll(function() {
            // 100 = The point you would like to fade the nav in.

            if ($(window).scrollTop() > 100) {

                $('.fixed').addClass('is-sticky');

            } else {

                $('.fixed').removeClass('is-sticky');

            };
        });
    </script>
</body>

</html>
