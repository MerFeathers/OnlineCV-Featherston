<?php
if($_POST) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = 'mmfeatherston.campo@gmail.com';
    $subject = 'Nuevo mensaje de tu sitio web';
    $headers = "From: $email";
    mail($to, $subject, $message, $headers);
}
?>