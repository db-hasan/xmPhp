<!DOCTYPE html>
<html>
<head>
  <title>Form Example</title>
</head>
<body>
  <form method="post">
    <label for="input">Enter data (separated by commas):</label><br>
    <input type="text" name="input" placeholder="eg:20,50,10"><br><br>
    <input type="submit" value="Submit">
  </form>
  <?php
  if ($_POST) {
      $data = explode(',', $_POST['input']);
      if(empty($_POST['input'])){
        echo "<p style='color:red;'> Enter data Like This example = 11,-10,0,88 </p>";
      } else {
        $lg=$data[0];
        $sm=$data[0];
        $sum=0;

        for($i=0 ;$i< count($data); $i++){
            if ($lg<$data[$i]){
                $lg=$data[$i];
            } 
            if ($sm>$data[$i]){
                $sm=$data[$i];
            }
            $sum+=$data[$i];
        }
        echo($lg . " The largest Number <br>");
        echo($sm . " The Smallest Number <br>");
        echo($sum . " sum Number <br>");
      }
    }

  ?>
</body>
</html>
