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

$id=$_POST['id'];
$res=$_POST['res'];
 $name=$_POST['name'];
  $title=$_POST['title'];
   $review=$_POST['review'];
  $rate=$_POST['rate'];
   $query = "insert into review(`user_name`,`user_title`,`user_review`,`user_rate`,`resturant`,`id`) values('".$name."','".$title."','".$review."','".$rate."','".$res."','".$id."')";

  $result= $conn->query($query);
  
?>