<?php
/*
 * Admin Controller
 */

session_start();

require_once '../functions/connection.php';
require_once '../models/main-model.php';
require_once '../models/admin-model.php';
require_once '../functions/functions.php';
require_once '../models/accounts-model.php';


$services = get_services(); // get  info in an array from the database
$service_dropdown = service_dropdown($services); //run the display function to show the data 
$reviews = get_reviews(); // get  info in an array from the database
$review_dropdown = review_dropdown($reviews); //run the display function to show the data 

//Action Switch Statement
$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
}

switch ($action) {
    case 'add_review' :
        $review_name = filter_input(INPUT_POST, 'review_name', FILTER_SANITIZE_STRING);
        $review_source = filter_input(INPUT_POST, 'review_source', FILTER_SANITIZE_STRING);
        $review_comment = filter_input(INPUT_POST, 'review_comment', FILTER_SANITIZE_STRING);
        
        //if ($_SESSION['loggedin'] == 1) {
            $rev_insert_outcome = insert_review($review_name, $review_source, $review_comment);
            if($rev_insert_outcome === 1) {
                $_SESSION['message'] = "<h2 class=\"message\">Your review has been added!</h2>";
                header('Location: /practicaldiva/admin/');
                exit;
                

            } else {
                $message = "<h2 class=\"message\">Sorry, your review didn't post. Please try again.<h2p>";
                include '../views/admin.php';
                exit;
            }
        //}
    break;
    case 'confirm_delete_review':
        $review_id = filter_input(INPUT_POST, 'review_id', FILTER_SANITIZE_NUMBER_INT);
        $review_data = get_review_by_id($review_id);

        include '../views/confirm-review-delete.php';
    break;
    case 'delete_review': 
        $review_id = filter_input(INPUT_POST, 'review_id', FILTER_SANITIZE_NUMBER_INT);
        $rev_delete_outcome = delete_review($review_id);

        if($rev_delete_outcome === 1) {
            $_SESSION['message'] = "<h2 class=\"message\">Your review has been deleted.</h2>";
            header('Location: /practicaldiva/admin/');
            exit;
        } else {
            $_SESSION['message'] = "<h2 class=\"message\">Sorry, your review was not deleted. Please try again.</h2>";
            include '../views/admin.php';
            exit;
        }
    break;
    case 'add_service' :
        $service_name = filter_input(INPUT_POST, 'service_name', FILTER_SANITIZE_STRING);
        $service_desc = filter_input(INPUT_POST, 'service_desc', FILTER_SANITIZE_STRING);

        //if ($_SESSION['loggedin'] == 1) {
            $serv_insert_outcome = insert_service($service_name, $service_desc);
            if($serv_insert_outcome === 1) {
                $_SESSION['message'] = "<h2 class=\"message\">You've added a new service!</h2>";
                header('Location: /practicaldiva/admin/');
                exit;

            } else {
                $message = "<h2 class=\"message\">Sorry, your new service didn't post. Please try again.</h2>";
                include '../views/admin.php';
                exit;
            }
        //}
    break;
    case 'confirm_delete_service':
        $service_id = filter_input(INPUT_POST, 'service_id', FILTER_SANITIZE_NUMBER_INT);        
        $service_data = get_service_by_id($service_id);
        

        include '../views/confirm-service-delete.php';
    break;
    case 'delete_service': 
        $service_id = filter_input(INPUT_POST, 'service_id', FILTER_SANITIZE_NUMBER_INT);
        $serv_delete_outcome = delete_service($service_id);       

        if($serv_delete_outcome === 1) {
            $_SESSION['message'] = "<h2 class=\"message\">Your service has been deleted.</h2>";
            header('Location: /practicaldiva/admin/');
            exit;
        } else {
            $_SESSION['message'] = "<h2 class=\"message\">Sorry, your service was not deleted. Please try again.</h2>";
            include '../views/admin.php';
            exit;
        }
    break;
    default:
    if ($_SESSION['loggedin'] == 1) {
           include '../views/admin.php';
        exit;
    } else {
        include '../views/home.php';
    } 
    break;
}
?>