<?php
if (session_status() === PHP_SESSION_NONE){
    session_start();
}

    // https://www.w3schools.com/php/php_form_required.asp

    // function to validate the input in case of a hacking input
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = test_input($_POST["name-contact"]);
    $corporate = test_input($_POST["corporate"]);
    $email = test_input($_POST["email-contact"]);
    $message = test_input($_POST["message"]);

    $to = "xusrew.z@gmail.com"; // Replace with your email address
    $subject = "New Contact Form portfolio: $name / $corporate";
    $headers = "From: $email\r\n" .
               "Reply-To: $email\r\n" .
               "X-Mailer: PHP/" . phpversion();

    mail($to, $subject, $message, $headers);

    // Redirect to a thank you page or display a thank you message
    header("Location: index.php");
    exit();
}
?>
