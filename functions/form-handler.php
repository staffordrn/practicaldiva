<?php

$errors = "";
$myemail = 'ohitsonlynada@yahoo.com';

if(empty($_POST['name1']) || empty($_POST['email1']) || empty($_POST['phone1']) || empty($_POST['text-area1'])) {
    $errors .= "\n Error: all fields are required";
}

$name = $_POST['name1'];
$email_address = $_POST['email1'];
$phone = ($_POST['phone1']);
$message = $_POST['text-area1'];

if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", $email_address)) {
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors)) {
    $to = $myemail;
    $email_subject = "Contact form submission: $name";
    $email_body = "You have received a new message. ".
    " Here are the details:\n Name: $name \n ".
    "Email: $email_address\n Message \n $message";
    $headers = "From: $myemail\n";
    $headers .= "Reply-To: $email_address";
    mail($to,$email_subject,$email_body,$headers);
    //redirect to the ‘thank you’ page
    header('Location: views/success.php');
}

?>