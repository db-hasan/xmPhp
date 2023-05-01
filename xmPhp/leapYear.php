<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LeapYear</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="num">
        <input type="submit">
    </form>
</body>
</html>
<?php
    if($_POST){
        $value = $_POST["num"];
        if($value % 4 == 0){
            echo "$value is a leap Year";
        }else{
            echo "$value is a not leap Year";
        }
    }
    
?>