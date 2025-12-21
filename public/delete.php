<?php
include  "connect.php" ;
if(isset($_GET["id"])){
    $id = $_GET ["id"];
 $command = "DELETE from food where food_id = '$id'";
 if($connect->query($command)){
    header("location:allfoods.php");
 }
 else {
     header("location:allfoods.php");
 }  
}
?>