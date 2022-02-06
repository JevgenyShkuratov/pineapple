<?php


$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
$connect = new mysqli('localhost', 'root', 'root', 'web_newsletter');
$connect->query("INSERT INTO `newsletter` (`email`) VALUES ('$email')");
$connect->close();

header('Location: ../desktop/success.php');





