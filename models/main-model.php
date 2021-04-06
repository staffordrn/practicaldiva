<?php
/*
 * Main Practical Diva Model
 */

 // Get and return a list of all artist id's
function get_artists() {
    $db = tpd_connect();
    $sql = 'SELECT * FROM artists ORDER BY artist_id ASC';
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $artist = $stmt->fetchAll();
    $stmt->closeCursor();
    return $artist;
}

//Get and return a list of services
function get_services() {
    $db = tpd_connect();
    $sql = 'SELECT * FROM services ORDER BY service_id ASC';
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $services = $stmt->fetchAll();
    $stmt->closeCursor();
    return $services ;
}

//Get and return a list of  client testimonials
function get_reviews() {
    $db = tpd_connect();
    $sql = 'SELECT * FROM reviews ORDER BY review_id ASC';
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $reviews = $stmt->fetchAll();
    $stmt->closeCursor();
    return $reviews ;
}

?>