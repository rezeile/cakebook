<?php
function addNewUser($firstname,$lastname,$email,$username,$password1,$password2) {
  $conn = new mysqli("localhost", "eliezerabate", "password", "CakebookDB");
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $sql = "INSERT INTO Account (id,firstName,lastName,email,username,password)
  VALUES (NULL,'$firstname','$lastname','$email','$username', '$password1')";
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
}
addNewUser($_POST["firstname"],
           $_POST["lastname"],
           $_POST["email"],
           $_POST["username"],
           $_POST["password1"],
           $_POST["password2"]);
?>
