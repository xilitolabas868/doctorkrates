<?php
$conn = mysqli_connect(
  'localhost',
  'root',
  '111111',
  'doctorkrates');

$sql = "SELECT * FROM symptom";
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
    <ul>
      <?php
        while($row = mysqli_fetch_array($result)) {
          $escaped_cc = htmlspecialchars($row['name']);
          echo '<a href = ./index.php?id='.$escaped_cc.'>'.$escaped_cc.'</a><br>';
        }
      ?>
      <a href="./ddx.php"><input type="button" name="next_page" value="Select!"></a>
    </ul>
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
        <button onclick="myFunction()" class="dropbtn">Dropdown</button>
        <div id="ccDropdown" class="dropdown-content">
          <input type="text" placeholder="Seach your main symptom.." id="ccInput" onkeyup="filterFunction()">
<<<<<<< HEAD
          <a href="#Base">Base</a>
=======
          <a href="base">Base</a>
>>>>>>> 0793709782374f36bb0f4f3259b31608275ffc29

      </div>
    </div>
  </body>
</html>
