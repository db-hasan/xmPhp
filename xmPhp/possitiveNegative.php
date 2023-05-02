<!DOCTYPE html>
<html>
<head>
  <title>Form Example</title>
</head>
<body>
  <form method="post">
    <label for="input">Enter data (separated by commas):</label><br>
    <input type="text" name="input" id="input">
    <br><br>
    <input type="submit" value="Submit">
  </form>
  <?php
  if ($_POST) {
      $data = explode(',', $_POST['input']);
      if(empty($_POST['input'])){
        echo "<p style='color:red;'> Enter data Like This example = 11,-10,0,88 </p>";
      } else {
        $positive = 0;
        $negative = 0;
        $zero = 0;
        $sum = 0;
            foreach ($data as $num) {
              if ($num > 0) {
                $positive++;
              } else if ($num < 0) {
                $negative++;
              } else {
                $zero++;
              }
              $sum += $num;
            }

            echo "Positive: " . $positive ."<br>" ;
            echo "Negative: " . $negative."<br>";
            echo "Zero: " . $zero ."<br>";
            echo "Sum: " . $sum ."<br>";
              
      }
    }

  ?>
</body>
</html>
