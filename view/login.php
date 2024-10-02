<?php
include("../db/config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="../css/signup.css">
</head>
<body>

<div style="width: 50%; margin: auto">
    <form id="signup" name="login" method="post" action="../model/usercheck.php">
        <p><h4>User Email:</h4></p>
        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" placeholder="Enter your email" required>
        <p><h4>User Password:</h4></p>
        <input type="password" id="password" name="password" placeholder="Enter your password" required><br><br>
        <input type="submit" value="Login">
    </form>
</div>
</body>
</html>
