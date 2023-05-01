<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="" name="text">
        <input type="submit">
    </form>
</body>
</html>
<?php
echo "<h2> 1++</h2>";
if($_POST){
    $inputText = $_POST["text"];
    for($row=1; $row<=5; $row++){
        for($col=1; $col<=$row ; $col++){
            echo $inputText;
        }
        echo"<br>";
    } 
} 
?>

<?php
echo "<h2> 1--</h2>";
if($_POST){
    $inputText = $_POST["text"];
    for($row=1; $row<=5; $row++){
        for($col=1; $col<=6-$row ; $col++){
            echo $inputText;
        }
        echo"<br>";
    } 
} 
?>
<?php
echo "<h2> Square </h2>";
if($_POST){
    $inputText = $_POST["text"];
    for($row=1; $row<=5; $row++){
        for($col=1; $col<=5 ; $col++){
            echo $inputText;
        }
        echo"<br>";
    } 
} 
?>

<?php
echo "<h2> Without input </h2>";
    for($row=1; $row<=5; $row++){
        for($col=1; $col<=$row; $col++){
            echo "$col";
        }
        echo "<br>";
    }
?>
<?php
    for($row=1; $row<=5; $row++){
        for($col=1; $col<=5-$row; $col++){
            echo "$col";
        }
        echo "<br>";
    }
?>
