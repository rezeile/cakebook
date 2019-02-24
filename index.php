<html>
  <head>
    <title>Cakebook</title>
  </head>
  <body>
    <h1>Sign Up</h1>
    <form id="login" action="login.php" method="post">
      <div>
        <label for="name">Username:</label>
        <input type="text" name="username">
      </div>
      <div>
        <label for="password">Password:</label>
        <input type="password" name="password">
      </div>
      <div>
        <input type="submit" value="Login">
      </div>
    </form>
    <form id="signup" action="signup.php" method="post">
      <label for="signup">Not a member?</label>
      <input type="submit" name="signup" value="Signup">
    </form>
  </body>
</html>
