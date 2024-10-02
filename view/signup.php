<?php
include("../db/config.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="../css/signup.css">
  </head>
  <body>
    <div class="container">
      <h2>Sign Up</h2>
      <form id="signup" method="post" action="../model/addcuinfo.php">
        <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
          <label for="confirm_password">Confirm Password:</label>
          <input type="password" id="confirm_password" name="confirm_password" required>
        </div>
        <div class="form-group">
          <label for="birthdate">Birth Date:</label>
          <input type="date" id="birthdate" name="birthdate">
        </div>
        <div class="form-group">
          <label for="country">Country:</label>
          <select id="country" name="country">
            <option value="BD">Bangladesh</option>
            <option value="USA">USA</option>
            <option value="Canada">Canada</option>
            <option value="UK">UK</option>
            <option value="Australia">Australia</option>
            <!-- Add more countries as needed -->
          </select>
        </div>
        <div class="form-group">
          <input type="submit" value="Sign Up">
        </div>
      </form>
    </div>
    <footer>
      <div>
        <a href="index.html" class="switch" target="blank">
          <b>Home Page</b>
        </a>
      </div>
    </footer>
  </body>
</html>
