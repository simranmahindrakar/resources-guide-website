<?php
//Get the form fields, removes html tags and whitespace
$name = strip_tags(trim($_POST["name"]));
$name = str_replace(array("\r","\n"),array(" "," "),$name);
$email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
$message =  trim($_POST["message"]);

//check the data
if (empty($name) OR empty($message) OR !filter_var($email, FILTER_SANITIZE_EMAIL)) {
    header ("Location: http://theresourceguide.org/index.php?success=-1#form");
    exit;
}
//set recipient mail and subject of email
$recipient = "mail.theresourceguide@gmail.com";
$subject = "New message from $name";

//build the email content
$email_content = "Name: $name\n";
$email_content = "Email: $email\n\n";
$email_content = "Message: \n$message\n";

$email_headers = "From: $name <$email>";

//send the email
mail($recipient, $subject, $email_content, $email_headers);
    //redirect to main page with success code
    header("Location: http://theresourceguide.org/index.php?success=1#form");



?>