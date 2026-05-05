<?php 
include "connect.php";
if(isset($_GET['id'])){
    $id = $_GET["id"];
$dastor = "select * from food where food_id = '$id'";
$allfood = $connect->query($dastor);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../src/output.css">
</head>
<body>
      <?php
      include "navbar.php";
      ?>
     <!-- nav end -->
      <div class="h-[40%] w-full flex flex-col items-center justify-center">
            <?php 
            while($row = $allfood ->fetch_assoc()){
                ?>  
                <div class="w-full h-84 grid grid-cols-1 lg:grid-cols-5 gap-3 p-4 max-w-6xl mx-auto">
                    <div class="col-span-2 group h-full w-full overflow-hidden rounded-lg hover:shadow-green-700 hover:shadow-[0_0_3px]">
                        <div class="h-full">
                            <img class="h-full w-full object-cover group-hover:scale-110 transition-all duration-200" src="./images/<?php echo $row ['imgurl'] ?>" alt="">
                        </div>
                    </div>
               <div class="col-span-3 w-full">
                 <div class="w-full flex flex-col items-start gap-4 justify-center text-white">
                     <h1 class="text-green-700 text-2xl font-medium"><?php echo $row ['food_name'] ?></h1>
                     <h1 class="text-green-700 text-2xl font-medium"><?php echo $row ['price'] ?>AF</h1>
                </div>
                   <p class="w-[80%] text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil repellat illum consectetur fugiat culpa commodi dolor vitae, pariatur sit, quam veniam totam. Excepturi eos sed, error commodi perferendis tenetur eveniet?Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo dignissimos iure beatae, mollitia quod quidem iusto laborum nam ipsa illo expedita quam facere minima ducimus, nostrum voluptate, consequatur qui rerum Lorem Lorem . Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita tempora nam ipsam omnis eius excepturi, vel sint tempore nostrum cumque aut vitae voluptates, nemo quia? Natus omnis at dignissimos eius!</p>
            
               </div>
               </div>
             <?php } ?>
            </div>
      <?php
      include "footer.php";
      ?>
</body>
</html>