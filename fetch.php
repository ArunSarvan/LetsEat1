<?php

$connect = mysqli_connect("localhost", "root", "", "resturants");
$request = mysqli_real_escape_string($connect, $_POST["query"]);
$query = "
 SELECT * FROM rdetails WHERE res_name LIKE '%".$request."%'
";

$result = mysqli_query($connect, $query);

$data = array();

if(mysqli_num_rows($result) > 0)
{
 while($row = mysqli_fetch_assoc($result))
 {
  $data[] = $row["res_name"];
 }
 echo json_encode($data);
}

?>
