<?php

if(isset($_POST['submit'])){
       
    $score = $_POST['score'];
    $unit =  $_POST['unit'];
    
    if($score > 100){
        
        echo 'Out of range';
    
        
    }else if($score >= 70){
        
        $gp = $unit*5;
        echo ' Grade is A and Grade Point is ' . $gp; 
       
    }else if($score >=60){
          $gp = $unit*4;
        echo ' Grade is B and Grade Point is ' . $gp; 
        //Assignment output 
    }else if($score>=50){
        $gp = $unit*3;
        echo ' Grade is C and Grade Point is ' . $gp; 
    }else if($score>=45){
         $gp = $unit*2;
        echo ' Grade is D and Grade Point is ' . $gp; 
    }else if($score>=40){
        $gp = $unit*1;
        echo ' Grade is E and Grade Point is ' . $gp; 
    }else{
        $gp = $unit*0;
        echo ' Grade is A and Grade Point is ' . $gp; 
    }
    
}
// Unit is 1: A=5, B=4, C=3, D=2, E=1, F=0
 // unit*4
?>


<html>
<head>
    <title> Grade </title>
</head>
<body>
    
    <form action="gradenexted.php" method = "POST">
    
        <input type ="text" name ="score" placeholder="Enter Score" required>
        <select name ="unit">
            <option> Enter Course Unit</option>
            <option> 1 </option>
            <option> 2 </option>
            <option> 3 </option>
            <option> 4 </option>
            <option> 6 </option>
        </select>
        
        <input type ="submit" name ="submit" value="Process">
       
    
    </form>

</body>
</html>