<?php
function getProfilePage($firstname) {
return <<<HTML
  <html>
    <head>
      <title>Cakebook</title>
    </head>
    <body>
     <section>
       <form action="search.php" method="post">
        <label for="search">Search:</label>
        <input type="textarea" name="search" id="search">
        <input type="submit" value="search">
       </form>
       <ul>
         <li>{$firstname}</li>
         <li>Account</li>
         <li>Settings</li>
       </ul>
     </section>
     <main>
      <nav>
        <ul>
          <li>Friends</li>
          <li>Pages</li>
          <li>Events</li>
          <li>Groups</li>
          <li>Saved</li>
        </ul>
      </nav>
      <section>
        <form action="post.php" action="post">
          <label for="post">Create Post:</label> 
          <input type="textarea" name="post">
          <input type="submit" name="Post" value="Post">
        </form>
        <main id="feed">NewsFeed</main>
      </section>
     </main>
    </body>
  </html>
HTML;
}

function authenticateUser($username, $password) {
  $conn = new mysqli("localhost", "eliezerabate", "password", "CakebookDB");
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT firstName, username, password FROM Account WHERE username = '$username' AND password = '$password'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo getProfilePage($row["firstName"]); 
    }
  } else {
    echo $sql;
  }
  $conn->close();
}


authenticateUser($_POST["username"],$_POST["password"]);

?>
