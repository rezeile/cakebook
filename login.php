<?php
function authenticateUser($username, $password) {
  // try to loging to the DP, error out if not possible
  print "Haha I know your Username: ".$username."\n";
  print "and Password: ".$password;
}
authenticateUser($_POST["username"],$_POST["password"]);
?>
