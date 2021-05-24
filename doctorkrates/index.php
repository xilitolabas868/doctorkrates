<?php
$conn = mysqli_connect(
  '3.19.228.198',
  'xilitolabs868',
  '111111',
  'doctorkrates_proto');

$sql = "SELECT * FROM symptom_proto";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/dropdown.css">
    <script src="dropdown.js"></script>

    </script>
    <title>Doctorkrates</title>
  </head>
  <body>


    <h2>
      <?php
      if(isset($_GET['id'])) {
        echo $_GET['id'];
      } else {
        echo 'Select your main symptom!';
      }
      ?>
    </h2>
      <div class="dropdown">
        <button onclick="dropdownFunction()" class="dropbtn">Dropdown</button>
        <div id="ccDropdown" class="dropdown-content">
          <input type="text" placeholder="Seach your main symptom.." id="ccInput" onkeyup="dropdownFilterFunction()">
          <?php
            while($row = mysqli_fetch_array($result)) {
              $escaped_cc = htmlspecialchars($row['symptom_name']);
              echo '<a href = ./index.php?id='.$escaped_cc.'>'.$escaped_cc.'</a>';
            }
          ?>
      </div>
    </div>
    <a href="./ddx.php"><input type="button" name="next_page" value="Select!"></a>
  </body>
</html>
