<head>
<title>Separate Positive &amp; Negative numbers in an Array in PHP</title>
</head>
<body>
    <form method="post">
        <input placeholder="12,-23,0" type="text" name="numbers">
        <input type="submit">
    </form>
</body>
</html>
<?php 
    if($_POST){
        $numbers = $_POST['numbers'];
        if($numbers != ''){
            $numArray = explode(',', $numbers);
            foreach($numArray as $num){
                if($num > 0){
                    $positive[] = $num;
                }if($num < 0){ 
                    $negative[] = $num;

                } if($num == 0){ 
                    $zero[] = $num;
                }
            }
            print "Positive Values: ". print_r($positive,true)."<br>";
            print "Negative Values: ". print_r($negative,true)."<br>";
            print "Zero Values: ". print_r($zero,true);
        }
    }
 
?>
