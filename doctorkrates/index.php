<?php
$conn = mysqli_connect(
  '3.19.228.198',
  'xilitolabs868',
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
        <button onclick="myFunction()" class="dropbtn">Dropdown</button>
        <div id="myDropdown" class="dropdown-content">
          <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
          <?php
            while($row = mysqli_fetch_array($result)) {
              $escaped_cc = htmlspecialchars($row['name_ENG']);
              echo '<a href = ./index.php?id='.$escaped_cc.'>'.$escaped_cc.'</a>';
            }
          ?>
        </div>
      </div>
      <a href="./ddx.php"><input type="button" name="next_page" value="Select!"></a>

    <script>
      var myArray = ["stone", "paper", "scissors"]
      function printnumbers() {
        document.querySelector('#result').textContent = <button> + myArray.join(', ') + </button>;
      }
    </script>

    <button onclick="printnumbers()">Print Numbers</button>
    <div id="result"></div>
  </body>
</html>
