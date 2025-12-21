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
      <nav class=' p-3 bg-black/40 text-white border-b-[1px] border-b-white'>
      <div class='flex justify-between'>
        <img src="../sharifi class diagram.png" alt="" class='h-12 w-12 rounded-full'>
        <ul class='flex flex-row gap-20 text-[20px] items-center'>
            <li><a href="home.php">Home</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="menu.php">Meun</a></li>
        </ul>
        <button class=' font-bold rounded-md px-6 text-[18px] bg-green-700 text-white '> <a href="insertAdmin.php">Login</a></button>
      </div>
     </nav>
     <!-- nav end -->
      <div class="h-[40%] w-full flex flex-col items-center justify-center">
            <?php 
            while($row = $allfood ->fetch_assoc()){
                ?>  
                 <img class="h-[30%] w-[50%]" src="./images/<?php echo $row ['imgurl'] ?>" alt="">
               <div class="h-[80%] w-full">
                 <div class="w-full flex gap-7 justify-center text-white">
                     <h1 class="text-green-700 text-2xl font-medium"><?php echo $row ['food_name'] ?></h1>
                     <h1 class="text-green-700 text-2xl font-medium"><?php echo $row ['price'] ?>AF</h1>
                </div>
                   <p class="w-[80%]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil repellat illum consectetur fugiat culpa commodi dolor vitae, pariatur sit, quam veniam totam. Excepturi eos sed, error commodi perferendis tenetur eveniet?Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo dignissimos iure beatae, mollitia quod quidem iusto laborum nam ipsa illo expedita quam facere minima ducimus, nostrum voluptate, consequatur qui rerum Lorem Lorem . Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita tempora nam ipsam omnis eius excepturi, vel sint tempore nostrum cumque aut vitae voluptates, nemo quia? Natus omnis at dignissimos eius!</p>
            
               </div>
             <?php } ?>
            </div>
       
</body>
</html>