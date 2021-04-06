<?php
/*
 * Artist Controller
 */

session_start();

require_once 'functions/connection.php';
require_once 'functions/functions.php';
require_once 'models/main-model.php'
require_once 'models/artists-model.php'

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
}

if(isset ($_COOKIE['firstname'])) {
    $cookieFirstname = filter_input(INPUT_COOKIE, 'firstname', FILTER_SANITIZE_STRING);
}

switch ($action) {
    case 'something':
        break;
    case 'template':
        include 'views/template.php';
        break;
     case 'login':
        include 'views/admin.php'; 
        break;
    default:
        include 'views/artists.php';


}
?>