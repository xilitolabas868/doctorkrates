<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $conn = mysqli_connect(
      'localhost',
      'root',
      '111111',
      'doctorkrates');

    $sql = "SELECT * FROM symptom";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
      $i = 0;
      while($i < 5) {
        echo $row[2];
        $i = $i + 1;
        $row = mysqli_fetch_array($result);
        echo "<br>";
      }
    ?>
  </body>
</html>
