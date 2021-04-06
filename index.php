<?php
/*
 * Main Controller
 */

session_start();

require_once 'functions/connection.php';
require_once 'functions/functions.php';
require_once 'models/main-model.php';
require_once 'models/accounts-model.php';

$artist = get_artists(); // get artisdt info in an array from the database
$artist_display = artist_display($artist); //run the display function to show the data 

$services = get_services();
$service_display = service_display($services);

$reviews = get_reviews();
$review_display = review_display($reviews);

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
     case 'login':
        include 'views/admin.php'; 
    break;
    case 'Login' :
        $user_email = filter_input(INPUT_POST, 'user_email', FILTER_SANITIZE_EMAIL);
        $user_email = check_email($user_email);
        $user_password = filter_input(INPUT_POST, 'user_password', FILTER_SANITIZE_STRING);
        $password_check = check_password($user_password);

        // Run basic checks, return if errors
        if (empty($user_email) || empty($password_check)) {
            $message = '<p class="notice">Please provide a valid email address and password.</p>';
            include 'views/home.php';
            exit;
        }
        
        // Valid password exists, proceed with login process
        $user_data = get_user($user_email);
        // $hashCheck = password_verify($clientPassword, $user_data['clientPassword']);
        $hashCheck = password_verify($user_password, $user_data['user_password']);

        if(!$hashCheck) {
            $message = '<p class="notice">Please check your password and try again.</p>';
            include 'views/home.php';
            exit;
        }
        // Valid user exists, login
        $_SESSION['loggedin'] = TRUE;
        // Array_pop removes last element (password) from array
        array_pop($user_data);
        // Store array into the session
        $_SESSION['user_data'] = $user_data;
        //Delete $clientFirstname cooke
        setcookie('firstname', null, time() - 86400, '/');
        //Get client reviews
        $user_id = $_SESSION['user_data']['user_id'];
        $user_reviews = user_review($user_id);
        include '../views/admin.php';
        exit;
    break;
    case 'register' :
        $user_first_name = filter_input(INPUT_POST, 'user_first_name', FILTER_SANITIZE_STRING);
        $user_last_name  = filter_input(INPUT_POST, 'user_last_name', FILTER_SANITIZE_STRING);
        $user_email     = filter_input(INPUT_POST, 'user_email', FILTER_SANITIZE_EMAIL);
        $user_password  = filter_input(INPUT_POST, 'user_password', FILTER_SANITIZE_STRING);

        $user_email = check_email($user_email);
        $check_password = check_password($user_password);

        //check for existing email
        $existing_email = check_email_exists($user_email);
        if($existing_email == 1) {
            $message = '<p class="message">The e-mail address already exists. Do you want to login instead?</p>';
            include '../views/home.php';
            exit;
        }

        if(empty($user_first_name) || empty($user_last_name) || empty($user_email) || empty($check_password)) {
            $message = "<p class=\"message\">Please provide information for all empty form fields.</p>";
            include '../views/registration.php';
        }

        $hashed_password = password_hash($user_password, PASSWORD_DEFAULT);

        $reg_outcome = reg_user($user_first_name, $user_last_name, $user_email, $hashedPassword);

        if($regOutcome === 1) {
            setcookie('firstname', $user_first_name, strtotime('+1 year'), '/');
            // $message = "<p class=\"message\">Thanks for registering $user_first_name. Please use your email and password to login.</p>";
            $_SESSION['message'] = "<p class=\"message\">Thanks for registering $user_first_name. Please use your e-mail address and password to login.</p>";
            include '../views/home.php';
            header("Location: /practicaldiva/accounts/?action=login");
            exit;
        } else {
            $message = "<p class=\"message\">Sorry $user_first_name, but the registration failed. Please try again.</p>";
            include '../views/registration.php';
            exit;
        }
        break;
    case 'logout' :
        session_destroy();
        header("Location: /practicaldiva/index.php");
        exit;
    
    default:
        include 'views/home.php';
}
?>