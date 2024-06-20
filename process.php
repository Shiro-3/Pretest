<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $comment = htmlspecialchars($_POST['comment']);
    echo "Nama : $name \\nKomentar : $comment";
} else {
    echo "Invalid request";
}
?>
