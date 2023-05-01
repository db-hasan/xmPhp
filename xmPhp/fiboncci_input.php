<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fibonacci Pattern</title>
</head>
<body>
<form method="post">
        <h2>Please Input a Number:</h2>
        <input type="number" name="num">
        <input type="submit" name="sub">
    </form>
</body>
</html>
<?php
  if ($_POST){
    $n1=0; $n2=1; $nextTerm;
    $num = $_POST["num"];
    echo "fibonacci Series: ";
        for ($i=0; $i<$num; $i++) {
            echo ("<br>".$n1);
            $nextTerm = $n1 + $n2;
            $n1 = $n2;
            $n2 = $nextTerm;
        }   
    }
?>