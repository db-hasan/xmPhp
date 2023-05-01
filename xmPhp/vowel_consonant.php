<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vowel Consonant</title>
</head>
<body>
    <form action="" method="post">
        <input type=""name="text">
        <input type="submit">
    </form>
</body>
</html>
<?php
    if($_POST){
        $inputText = $_POST["text"];
        if (preg_match('/^[a-zA-Z]*$/i', $inputText)){
            $vowel = array("a","e","i","o","u","A","E","I","O","U");
            if(in_array($inputText,$vowel)){
                echo $inputText . " is a Vowel";
            }else{
                echo $inputText . " is a Consonant";
            }
        }else{
            echo "<p>Please input a single letter.</p>";
        }
    }
?>