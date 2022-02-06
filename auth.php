<?php

$connect = new mysqli('localhost', 'root', 'root', 'web_newsletter');
$result = $connect->query("SELECT * FROM `newsletter`");
$connect->close();


if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . " email: " . $row["email"] . "<br>";
    }

} else {
    echo "result = 0";
}
