<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "redaelkouri@gmail.com";
    $headers = "From: ". $mailFrom;
    $text = "You have received an email from" . $name  . ".\n\n" . $message;

    mail($name, $text, $message, $headers);
    header("Location: index.php?mailsent");
}