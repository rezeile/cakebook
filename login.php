<?php
function authenticateUser($username, $password) {
  $conn = new mysqli("localhost", "eliezerabate", "password", "CakebookDB");
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT firstName, username, password FROM Account WHERE username = '$username' AND password = '$password'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "Welcome " . $row["firstName"] . "\n"; 
    }
  } else {
    echo $sql;
  }
  $conn->close();
}

authenticateUser($_POST["username"],$_POST["password"]);
?>
