<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=., initial-scale=1.0">
    <title>Grade</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="inputNumber">
        <input type="submit">
    </form>
</body>
</html>
<?php
    if($_POST){
        $num = $_POST["inputNumber"];
        if ($num > 100){
            echo "Enter your Marks/Number";
        }elseif($num>=80){
            echo "You have got 'A+'.";
        }elseif($num>=70){
            echo "You have got 'A'.";
        }elseif($num>=60){
            echo "You have got 'A-'.";
        }elseif($num>=50){
            echo "You have got 'B'.";
        }elseif($num>=40){
            echo "You have got 'C'.";
        }elseif($num>=33){
            echo "You have got 'D'.";
        }elseif($num>=0){
            echo "You have got 'Fail'.";
        }elseif($num<=0){
            echo "Please Enter your Marks";
        }
    }
?>