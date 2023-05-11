<?php
    session_start();
    
    if (isset($_SESSION['token_key']) && isset($_SESSION['expiry_time'])) {
    $currentTime = time();
    $expirationTime = $_SESSION['expiry_time'];
    $remainingTime = $expirationTime - $currentTime;

	
    if ($remainingTime > 0) {
        echo "Session will expire in " . gmdate("H:i:s", $remainingTime);
        echo '<h5>You are logged in and your token key is:'.$_SESSION['token_key'].'</h5>';
        echo '<a href="logout.php">Logout</a>';
        die();
	} else {
        echo "<p>Session parameter has expired, please log in again.</p>";
    }
    
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Q Symfony Skeleton API - Login Page</title>
</head>
<body>
    <form action="login.php" method="POST">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <input type="submit" value="Login">
    </form>
</body>
</html>
