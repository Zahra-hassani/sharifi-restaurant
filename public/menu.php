<?php 
session_start();
include "connect.php";
$dastor = "select * from food";
$allfood = $connect->query($dastor);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Menu</title>
    <!-- <link rel="stylesheet" href="../fontawesome-free-6.7.2-web/css/all.min.css"> -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../src/output.css">
</head>
<body>
       <?php 
       include "navbar.php";
       ?>
     <!-- nav end -->
      <!-- menu start -->
       <?php
      if($allfood->num_rows>0){
        ?>
        <div class="w-full h-fit bg-[url(../public/images/burger-with-melted-cheese.jpg.webp)]  bg-cover gap-4 grid grid-cols-4 items-center justify-around">
              <?php 
            while($row = $allfood ->fetch_assoc()){
                ?>    
        <div class="flex flex-col items-center justify-center h-fit w-[90%] rounded shadow p-4">
                 <img class="h-54 w-[80%] rounded" src="./images/<?php echo $row ['imgurl'] ?>" alt="">
                <div class="w-full flex gap-7 justify-around text-white">
                     <h1 class="text-green-700 text-2xl font-medium"><?php echo $row ['food_name'] ?></h1>
                     <h1 class="text-green-700 text-2xl font-medium"><?php echo $row ['price'] ?>AF</h1>
                </div>
                <button>
                <a class="text-2xl font-bold" href="more.php?id=<?php echo $row['food_id'] ?>">More</a>
                </button>
                 </div>
                <?php } ?>
             
              </div>
        <?php } ?>
        <!-- footer start -->
        <?php
        include "footer.php";
        ?>
</body>
</html>