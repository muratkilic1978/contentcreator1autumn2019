<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Basic PHP</title>
</head>
<body>
   <!--- This is a HTML comment --->
   <?php 
        #echo "Basic PHP"; single comment
        //echo "Learning PHP"; single comment
        /* 
            $firstName = "Murat";
            $lastName = "Kilic";
        
        */    
   ?>

   <?php  
    #$t = date('H');
    $t = 3;
    #echo $t;
    
    if ($t >= 06 && $t < 12) {
        echo "<h2>Good morgning</h2>";
    } 
    elseif ($t >= 12 && $t < 18 ) {
        echo "<h2>Good afternoon</h2>";
    }
    elseif ($t >=18 && $t <= 23) {
        echo "<h2>Good evening</h2>";
    }
    else {
        echo "<h2>Good night</h2>";
    }
     
    
    $money = 100;
    $myPocket = 0;
    
    if ($myPocket == 0){
        echo "your are poor my friend";
    }
    
    $fruits = array('Kiwi', "Strawberry", "Blueberry", "Orange", "Apples", "Pineapples", "Grape", "Banana");
    
//    for ($i = 0; $i < 4; $i++){
//        echo "<h1>".$fruits[$i]."</h1>";
    
    foreach($fruits as $currentElement) {
        echo "<h1>".$currentElement."</h1>";
    }
        
        

    
   ?>
    
    
    
    
    
    
    
</body>
</html>