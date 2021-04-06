<?php
/*
 * Admin Model
 */
 

// *** Review FUnctions ***

//Function to insert a review
function insert_review($review_name, $review_source, $review_comment) {
    $db = tpd_connect();
    $sql = 'INSERT INTO reviews (review_name, review_source, review_comment) 
    VALUES (:review_name, :review_source, :review_comment)';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':review_name', $review_name, PDO::PARAM_STR);
    $stmt->bindValue(':review_source', $review_source, PDO::PARAM_STR);
    $stmt->bindValue(':review_comment', $review_comment, PDO::PARAM_STR);
    $stmt->execute();
    $rowsChanged = $stmt->rowCount();
    $stmt->closeCursor();
    return $rowsChanged;
}
//Function to get a review by the id
function get_review_by_id($review_id) {
    $db = tpd_connect();
    $sql = 'SELECT review_name FROM reviews WHERE review_id = :review_id';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':review_id', $review_id, PDO::PARAM_INT);
    $stmt->execute();
    $review_data = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $review_data;
    exit;
}
//Function to delete a review
function delete_review($review_id) {
    $db = tpd_connect();
    $sql = 'DELETE FROM reviews WHERE review_id = :review_id';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':review_id', $review_id, PDO::PARAM_INT);
    $stmt->execute();
    $rowsChanged = $stmt->rowCount();
    $stmt->closeCursor();
    return $rowsChanged;
}

// *** Review FUnctions ***

//Function to insert a Service
function insert_service($service_name, $service_desc) {
    $db = tpd_connect();
    $sql = 'INSERT INTO services (service_name, service_desc) 
    VALUES (:service_name, :service_desc)';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':service_name', $service_name, PDO::PARAM_STR);
    $stmt->bindValue(':service_desc', $service_desc, PDO::PARAM_STR);
    $stmt->execute();
    $rowsChanged = $stmt->rowCount();
    $stmt->closeCursor();
    return $rowsChanged;
}
//Function to get a review by the id
function get_service_by_id($service_id) {
    $db = tpd_connect();
    $sql = 'SELECT service_name FROM services WHERE service_id = :service_id';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':service_id', $service_id, PDO::PARAM_INT);
    $stmt->execute();
    $service_data = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $service_data;
    exit;
}
//Function to delete a review
function delete_service($service_id) {
    $db = tpd_connect();
    $sql = 'DELETE FROM services WHERE service_id = :service_id';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':service_id', $service_id, PDO::PARAM_INT);
    $stmt->execute();
    $rowsChanged = $stmt->rowCount();
    $stmt->closeCursor();
    return $rowsChanged;
}
?>