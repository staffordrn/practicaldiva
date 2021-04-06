<?php
/*
 * Forms Controller
 */

session_start();

require_once '../functions/connection.php';
require_once '../functions/functions.php';
require_once '../models/main-model.php';
require_once '../models/accounts-model.php';


$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
}

if(isset ($_COOKIE['firstname'])) {
    $cookieFirstname = filter_input(INPUT_COOKIE, 'firstname', FILTER_SANITIZE_STRING);
}

switch ($action) {
    /* case 'something':
        break;
    case 'template':
        include 'views/template.php';
        break; */
     /* case 'request':
        include 'views/admin.php';  */
    //break;
    case 'request' :
        $request_name = filter_input(INPUT_POST, 'request_name', FILTER_SANITIZE_STRING);
        $request_email = filter_input(INPUT_POST, 'request_email', FILTER_SANITIZE_EMAIL);
        $request_email = check_email($request_email);
        $request_phone = filter_input(INPUT_POST, 'request_phone', FILTER_SANITIZE_STRING);
        $request_text = filter_input(INPUT_POST, 'request_text', FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);

        // Run basic checks, return if errors
        $errors = "";
        $myemail = 'ohitsonlynada@yahoo.com';


        if(empty($request_name) || empty($request_email) || empty($request_phone) || empty($request_text)) {
            $errors = '<p class="notice">Oops! Please fill out the whole form!</p>';
            include '../views/form-error.php';
            exit;
        }

        if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", $request_email)) {
            $errors = 'Oops! Check your email address and try again!';
            include '../views/form-error.php';
            exit;
        }

        if( empty($errors)) {
            $to = $myemail;
            $email_subject = "Contact form submission: $request_name";
            $email_body = "You have received a new message. ".
            " Here are the details:\n Name: $request_name \n ".
            "Email: $request__email\n Phone: $request_phone \n ".
            "Message \n $request_text";
            $headers = "From: $myemail\n";
            $headers .= "Reply-To: $request_email";
            mail($to,$email_subject,$email_body,$headers);
            //redirect to the ‘thank you’ page
            header('Location: ../views/success.php');
        }
        exit;
    break;
    case 'quote' :
        $quote_name = filter_input(INPUT_POST, 'quote_name', FILTER_SANITIZE_STRING);
        $quote_email = filter_input(INPUT_POST, 'quote_email', FILTER_SANITIZE_EMAIL);
        $quote_email = check_email($quote_email);
        $quote_phone = filter_input(INPUT_POST, 'quote_phone', FILTER_SANITIZE_STRING);
        $quote_text = filter_input(INPUT_POST, 'quote_text', FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);

        // Run basic checks, return if errors
        $errors = "";
        $myemail = 'ohitsonlynada@yahoo.com';

        if(empty($quote_name) || empty($quote_email) || empty($quote_phone) || empty($quote_text)) {
            $errors = '<p class="notice">Oops! Please fill out the whole form!</p>';
            include '../views/form-error.php';
            exit;
        }

        if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", $quote_email)) {
            $errors = 'Oops! Check your email address and try again!';
            include '../views/form-error.php';
            exit;
        }

        if( empty($errors)) {
            $to = $myemail;
            $email_subject = "Contact form submission: $quote_name";
            $email_body = "You have received a new message. ".
            " Here are the details:\n Name: $quote_name \n ".
            "Email: $quote__email\n Phone: $quote_phone \n ".
            "Message \n $quote_text";
            $headers = "From: $myemail\n";
            $headers .= "Reply-To: $quote_email";
            mail($to,$email_subject,$email_body,$headers);
            //redirect to the ‘thank you’ page
            header('Location: ../views/success.php');
        }exit;
    break;
    case 'availability' :
        $availability_name = filter_input(INPUT_POST, 'availability_name', FILTER_SANITIZE_STRING);
        $availability_email = filter_input(INPUT_POST, 'availability_email', FILTER_SANITIZE_EMAIL);
        $availability_email = check_email($availability_email);
        $availability_phone = filter_input(INPUT_POST, 'availability_phone', FILTER_SANITIZE_STRING);
        $availability_date = filter_input(INPUT_POST, 'availability_date', FILTER_DEFAULT);

        // Run basic checks, return if errors
        $errors = "";
        $myemail = 'ohitsonlynada@yahoo.com';

        if(empty($availability_name) || empty($availability_email) || empty($availability_phone) || empty($availability_date)) {
            $errors = '<p class="notice">Oops! Please fill out the whole form!</p>';
            include '../views/form-error.php';
            exit;
        }

        if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", $availability_email)) {
            $errors = 'Oops! Check your email address and try again!';
            include '../views/form-error.php';
            exit;
        }

        if( empty($errors)) {
            $to = $myemail;
            $email_subject = "Contact form submission: $availability_name";
            $email_body = "You have received a new message. ".
            " Here are the details:\n Name: $availability_name \n ".
            "Email: $availability_email\n Phone: $availability_phone \n ".
            "Message \n $availability_date";
            $headers = "From: $myemail\n";
            $headers .= "Reply-To: $availability_email";
            mail($to,$email_subject,$email_body,$headers);

            //redirect to the ‘thank you’ page
            header('Location: ../views/success.php');
        }exit;
    break;     
    default:
        include '../views/home.php';
}
?>