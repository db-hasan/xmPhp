<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Largest Number</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Enter Your First Number:</label><br>
        <input type="text" name="num1"><br>
        <label for="">Enter Your First Number:</label><br>
        <input type="text" name="num2"><br>
        <label for="">Enter Your First Number:</label><br>
        <input type="text" name="num3"><br><br>
        <input type="submit"><br><br>
    </form>
</body>
</html>
<?php
    if($_POST){
        $num1=$_POST["num1"];
        $num2=$_POST["num2"];
        $num3=$_POST["num3"];
        if($num1>$num2 && $num1>$num3){
            echo "The Largest number is: $num1 <br>";
        }elseif($num2>$num1 && $num2>$num3){
            echo "The Largest number is: $num2 <br>";
        }else{
            echo "The Largest number is $num3 <br>";
        }
        if($num1<$num2 && $num1<$num3){
            echo "The smallest number is: $num1 <br>";
        }elseif($num2<$num1 && $num2<$num3){
            echo "The smallest number is: $num2 <br>";
        }else{
            echo "The smallest number is $num3 <br>";
        }
        $sum = $num1+$num2+$num3;
        echo "The Total is: $sum"; 
    }
?>