<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    
    $to = "info@montogo.net";
    $subject = "free PDF request";
    $message = "Nom: " . $name . "\nEmail: " . $email;
    $headers = "From: " . $email;

    if(mail($to, $subject, $message, $headers)){
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
}
?>
