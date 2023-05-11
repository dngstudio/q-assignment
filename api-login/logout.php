<?php
session_start();
unset($_SESSION['token_key']);
header('Location: index.php');
exit();
?>
