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
   
   $id=$_GET['id'];
   
    $query = "select * from rdetails where id='$id'";
   
    $result= $conn->query($query);

    if($result->num_rows!=0)
    {
   while($row = $result->fetch_assoc())  
   {
          $id=$row['id'];
          $city=$row['res_city'];
          $name=$row['res_name'];
         
   
   }
   }
   ?>

<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Colorlib">
    <meta name="description" content="#">
    <meta name="keywords" content="#">
   
    <link rel="shortcut icon" href="#">
   
    <title>Dine in</title>
   
    <link rel="stylesheet" href="css/bootstrap.min.css">
   
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet">
    
    <link rel="stylesheet" href="css/simple-line-icons.css">
    
    <link rel="stylesheet" href="css/themify-icons.css">
    
    <link rel="stylesheet" href="css/set1.css">
   
    <link rel="stylesheet" href="css/swiper.min.css">
    
    <link rel="stylesheet" href="css/magnific-popup.css">
   
    <link rel="stylesheet" href="css/style.css">
</head>
 
<body>
   
    <div class="dark-bg sticky-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
               <div class="col-md-4"><img src="img/logo-spaced.png" alt="logo" width="300px"  style="padding:20px 20px" 
                        class="responsive" /></div>
                    <div class="col-md-4">
                     
                    </div>
            
                    <div class="col-md-4"></div>
            </div>
        </div>
    </div>
</div>
   
    <div>
        
        <div class="swiper-container">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <a href="images/reserve-slide2.jpg" class="grid image-link">
                        <img src="images/reserve-slide2.jpg" class="img-fluid" alt="#">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="images/reserve-slide1.jpg" class="grid image-link">
                        <img src="images/reserve-slide1.jpg" class="img-fluid" alt="#">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="images/reserve-slide3.jpg" class="grid image-link">
                        <img src="images/reserve-slide3.jpg" class="img-fluid" alt="#">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="images/reserve-slide1.jpg" class="grid image-link">
                        <img src="images/reserve-slide1.jpg" class="img-fluid" alt="#">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="images/reserve-slide2.jpg" class="grid image-link">
                        <img src="images/reserve-slide2.jpg" class="img-fluid" alt="#">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="images/reserve-slide3.jpg" class="grid image-link">
                        <img src="images/reserve-slide3.jpg" class="img-fluid" alt="#">
                    </a>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination swiper-pagination-white"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next swiper-button-white"></div>
            <div class="swiper-button-prev swiper-button-white"></div>
        </div>
    </div>
    
    <section class="reserve-block">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                  
                    <h5><?php echo $name; ?></h5>
                    <p><span> <?php echo $city; ?> </span> </p>
                    <p class="reserve-description">Innovative cooking, paired with fine wines in a modern setting.</p>
                </div>
                
    <div class="col-md-8">
        <div class="col-md-9">
        <div class="well well-sm">
            <div class="text-right">
                <a class="btn btn-success btn-green" href="#reviews-anchor" id="open-review-box">Leave a Review</a>
            </div>
        
            <div class="row" id="post-review-box" style="display:none;">
              
                     
                        <div class="col-md-4 mt-4">
                            <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
                            <input type="hidden" name="resturant" id="resturant" value="<?php echo $name; ?>">
                        <input class="form-control" type="text" cols="50" id="new-name" name="new-name" placeholder="Name" rows="5"></input>
                        </div>
                        <div class="col-md-4 mt-4">
                        <input class="form-control" type="text" cols="50" id="new-title" name="new-title" placeholder="Title" rows="5"></input>
                         </div>
                         <div class="col-md-4 mt-4">
                         <input class="form-control" type="text" cols="50" id="new-rate" name="new-rate" placeholder="rating" rows="5"></input>
                          </div>
                          
                            <div class="col-md-12 mt-4">
                        <textarea class="form-control animated" cols="50" id="new-review" name="new-review" placeholder="Enter your review here..." rows="5"></textarea>
                    </div>
                       
                        <div class="col-md-2"></div>
                        <div class="col-md-2">
                        
                        </div>
                        <div class="col-md-8 mt-4">
                             <div class="text-right align-self-center">
                            <div class="stars starrr" data-rating="0">
                            </div>
                            
                             <a class="btn btn-danger btn-sm" href="#" id="close-review-box" style="display:none; margin-right: 10px;">
                            <span class="glyphicon glyphicon-remove"></span>Cancel</a>
                            <button class="btn btn-success btn-lg" onclick="return updatereview()" type="button" id="save" >Save</button>
                        </div>
                        </div>

                       
                    
            
            </div>
        </div>
        </div> 
         
        </div>


            </div>
        </div>
    </section>
    
    <section class="light-bg booking-details_wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12 responsive-wrap">
                    <div class="booking-checkbox_wrap">
                        <div class="booking-checkbox">
                            <p>Tasty Hand-Pulled Noodles is a 1950s style diner located in Madison, Wisconsin. Opened in 1946 by Mickey Weidman, and located just across the street from Camp Randall Stadium, it has become a popular game day tradition amongst
                                many Badger fans. The diner is well known for its breakfast selections, especially the Scrambler, which is a large mound of potatoes, eggs, cheese, gravy, and a patrons’ choice of other toppings.</p>
                            <p>Mickies has also been featured on “Todd’s Taste of the Town” during one of ESPN’s college football broadcasts. We are one of the best Chinese restaurants in the New York, New York area. We have been recognized for our outstanding
                                Chinese & Asian cuisine, excellent Chinese menu, and great restaurant specials. We are one of the best Chinese restaurants in the New York, New York area. We have been recognized for our outstanding Chinese & Asian cuisine,
                                excellent Chinese menu, and great restaurant specials.</p>
                            <hr>
                        </div>

                        <div class="row">

                        <div class="col-md-4">
                         <label class="custom-checkbox">
                        <span class="ti-check-box"></span>
                        <span class="custom-control-description">Bike Parking</span>
                        </label>
                        </div>

                       <div class="col-md-4">
                       <label class="custom-checkbox">
                       <span class="ti-check-box"></span>
                       <span class="custom-control-description">Wireless Internet  </span>
                       </label>
                       </div>

                       <div class="col-md-4">
                       <label class="custom-checkbox">
                       <span class="ti-check-box"></span>
                       <span class="custom-control-description">Smoking Allowed  </span>
                       </label>
                       </div>
                
                       <div class="col-md-4">
                       <label class="custom-checkbox">
                       <span class="ti-check-box"></span>
                       <span class="custom-control-description">Street Parking</span>
                       </label>
                       </div>
                            <div class="col-md-4">
                                <label class="custom-checkbox">
                   <span class="ti-check-box"></span>
                   <span class="custom-control-description">Special</span>
                 </label> </div>
                            <div class="col-md-4">
                                <label class="custom-checkbox">
                  <span class="ti-check-box"></span>
                  <span class="custom-control-description">Accepts Credit cards</span>
                </label>
                            </div>
                        </div>
                    </div>
                    <div class="booking-checkbox_wrap mt-4">
                        <h5>Reviews</h5>
                    </div>
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
                        $id=$_GET['id'];
                        $query = "select * from review where id='$id' ORDER BY r_in DESC";
                       
                        $result= $conn->query($query);
                        if($result->num_rows!=0)
                        {
                       while($row = $result->fetch_assoc())  
                       {
                        ?>

                    <div class="booking-checkbox_wrap">
                        <hr>
                        <div class="customer-review_wrap">
                            <div class="customer-img">
                                <img src="images/customer-img2.jpg" class="img-fluid" alt="#">
                                <p><?php echo $row['user_name']; ?></p>
                                
                            </div>
                            <div class="customer-content-wrap">
                                <div class="customer-content">
                                    <div class="customer-review">
                                        <h6><?php echo $row['user_title']; ?></h6>
                                       
                                        
                                    </div>
                                    <div class="customer-rating"><?php echo $row['user_rate']; ?></div>
                                </div>
                                <p class="customer-text"><?php echo $row['user_review']; ?>
                                </p>
                                
                                
                            </div>
                        </div>
                        <hr>
                       
                    </div>
                     <?php
                     }
                     }
                    ?>
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
                            <li><a href="#"><span class="ti-facebook"></span></a></li>
                            <li><a href="#"><span class="ti-twitter-alt"></span></a></li>
                            <li><a href="#"><span class="ti-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>



 <script type="text/javascript">

        function updatereview() {
            var id = document.getElementById("id").value;
            var res = document.getElementById("resturant").value;
            var name = document.getElementById("new-name").value;
            var title = document.getElementById("new-title").value;
            var review = document.getElementById("new-review").value;
            var rate = document.getElementById("new-rate").value;
            
            if (review == "") {
                alert("Please Fill Review");
            } else {

                $.ajax({
                    url: "post.php",
                    type: "POST",
                    data: {
                        id:id,
                        res:res,
                        name:name,
                        title:title,
                        review: review,
                        rate:rate,
                    },
                     success: function(response) {
                         window.location.href = "";
                     }
                });

            }
        }
    </script>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
   
    <script src="js/jquery.magnific-popup.js"></script>
    
    <script src="js/swiper.min.js"></script>



    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 3,
            slidesPerGroup: 3,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
    <script>
        if ($('.image-link').length) {
            $('.image-link').magnificPopup({
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        }
        if ($('.image-link2').length) {
            $('.image-link2').magnificPopup({
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        }
    </script>

    <script>
        (function(e){var t,o={className:"autosizejs",append:"",callback:!1,resizeDelay:10},i='<textarea tabindex="-1" style="position:absolute; top:-999px; left:0; right:auto; bottom:auto; border:0; padding: 0; -moz-box-sizing:content-box; -webkit-box-sizing:content-box; box-sizing:content-box; word-wrap:break-word; height:0 !important; min-height:0 !important; overflow:hidden; transition:none; -webkit-transition:none; -moz-transition:none;"/>',n=["fontFamily","fontSize","fontWeight","fontStyle","letterSpacing","textTransform","wordSpacing","textIndent"],s=e(i).data("autosize",!0)[0];s.style.lineHeight="99px","99px"===e(s).css("lineHeight")&&n.push("lineHeight"),s.style.lineHeight="",e.fn.autosize=function(i){return this.length?(i=e.extend({},o,i||{}),s.parentNode!==document.body&&e(document.body).append(s),this.each(function(){function o(){var t,o;"getComputedStyle"in window?(t=window.getComputedStyle(u,null),o=u.getBoundingClientRect().width,e.each(["paddingLeft","paddingRight","borderLeftWidth","borderRightWidth"],function(e,i){o-=parseInt(t[i],10)}),s.style.width=o+"px"):s.style.width=Math.max(p.width(),0)+"px"}function a(){var a={};if(t=u,s.className=i.className,d=parseInt(p.css("maxHeight"),10),e.each(n,function(e,t){a[t]=p.css(t)}),e(s).css(a),o(),window.chrome){var r=u.style.width;u.style.width="0px",u.offsetWidth,u.style.width=r}}function r(){var e,n;t!==u?a():o(),s.value=u.value+i.append,s.style.overflowY=u.style.overflowY,n=parseInt(u.style.height,10),s.scrollTop=0,s.scrollTop=9e4,e=s.scrollTop,d&&e>d?(u.style.overflowY="scroll",e=d):(u.style.overflowY="hidden",c>e&&(e=c)),e+=w,n!==e&&(u.style.height=e+"px",f&&i.callback.call(u,u))}function l(){clearTimeout(h),h=setTimeout(function(){var e=p.width();e!==g&&(g=e,r())},parseInt(i.resizeDelay,10))}var d,c,h,u=this,p=e(u),w=0,f=e.isFunction(i.callback),z={height:u.style.height,overflow:u.style.overflow,overflowY:u.style.overflowY,wordWrap:u.style.wordWrap,resize:u.style.resize},g=p.width();p.data("autosize")||(p.data("autosize",!0),("border-box"===p.css("box-sizing")||"border-box"===p.css("-moz-box-sizing")||"border-box"===p.css("-webkit-box-sizing"))&&(w=p.outerHeight()-p.height()),c=Math.max(parseInt(p.css("minHeight"),10)-w||0,p.height()),p.css({overflow:"hidden",overflowY:"hidden",wordWrap:"break-word",resize:"none"===p.css("resize")||"vertical"===p.css("resize")?"none":"horizontal"}),"onpropertychange"in u?"oninput"in u?p.on("input.autosize keyup.autosize",r):p.on("propertychange.autosize",function(){"value"===event.propertyName&&r()}):p.on("input.autosize",r),i.resizeDelay!==!1&&e(window).on("resize.autosize",l),p.on("autosize.resize",r),p.on("autosize.resizeIncludeStyle",function(){t=null,r()}),p.on("autosize.destroy",function(){t=null,clearTimeout(h),e(window).off("resize",l),p.off("autosize").off(".autosize").css(z).removeData("autosize")}),r())})):this}})(window.jQuery||window.$);

var __slice=[].slice;(function(e,t){var n;n=function(){function t(t,n){var r,i,s,o=this;this.options=e.extend({},this.defaults,n);this.$el=t;s=this.defaults;for(r in s){i=s[r];if(this.$el.data(r)!=null){this.options[r]=this.$el.data(r)}}this.createStars();this.syncRating();this.$el.on("mouseover.starrr","span",function(e){return o.syncRating(o.$el.find("span").index(e.currentTarget)+1)});this.$el.on("mouseout.starrr",function(){return o.syncRating()});this.$el.on("click.starrr","span",function(e){return o.setRating(o.$el.find("span").index(e.currentTarget)+1)});this.$el.on("starrr:change",this.options.change)}t.prototype.defaults={rating:void 0,numStars:5,change:function(e,t){}};t.prototype.createStars=function(){var e,t,n;n=[];for(e=1,t=this.options.numStars;1<=t?e<=t:e>=t;1<=t?e++:e--){n.push(this.$el.append("<span class='glyphicon .glyphicon-star-empty'></span>"))}return n};t.prototype.setRating=function(e){if(this.options.rating===e){e=void 0}this.options.rating=e;this.syncRating();return this.$el.trigger("starrr:change",e)};t.prototype.syncRating=function(e){var t,n,r,i;e||(e=this.options.rating);if(e){for(t=n=0,i=e-1;0<=i?n<=i:n>=i;t=0<=i?++n:--n){this.$el.find("span").eq(t).removeClass("glyphicon-star-empty").addClass("glyphicon-star")}}if(e&&e<5){for(t=r=e;e<=4?r<=4:r>=4;t=e<=4?++r:--r){this.$el.find("span").eq(t).removeClass("glyphicon-star").addClass("glyphicon-star-empty")}}if(!e){return this.$el.find("span").removeClass("glyphicon-star").addClass("glyphicon-star-empty")}};return t}();return e.fn.extend({starrr:function(){var t,r;r=arguments[0],t=2<=arguments.length?__slice.call(arguments,1):[];return this.each(function(){var i;i=e(this).data("star-rating");if(!i){e(this).data("star-rating",i=new n(e(this),r))}if(typeof r==="string"){return i[r].apply(i,t)}})}})})(window.jQuery,window);$(function(){return $(".starrr").starrr()})

$(function(){

  $('#new-review').autosize({append: "\n"});

  var reviewBox = $('#post-review-box');
  var newReview = $('#new-review');
  var openReviewBtn = $('#open-review-box');
  var closeReviewBtn = $('#close-review-box');
  var ratingsField = $('#ratings-hidden');

  openReviewBtn.click(function(e)
  {
    reviewBox.slideDown(400, function()
      {
        $('#new-review').trigger('autosize.resize');
        newReview.focus();
      });
    openReviewBtn.fadeOut(100);
    closeReviewBtn.show();
  });

  closeReviewBtn.click(function(e)
  {
    e.preventDefault();
    reviewBox.slideUp(300, function()
      {
        newReview.focus();
        openReviewBtn.fadeIn(200);
      });
    closeReviewBtn.hide();
    
  });

  $('.starrr').on('starrr:change', function(e, value){
    ratingsField.val(value);
  });
});
    </script>
</body>

</html>
