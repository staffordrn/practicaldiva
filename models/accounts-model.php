<?php
/*
 * Accounts Model - sign up and sign in users
 */

 //Register a new user

 function reg_user($user_first_name, $user_last_name, $user_email, $user_password) {
   $db = tpd_connect();

   $sql = 'INSERT INTO users (user_first_name, user_last_name, user_email, user_password) 
      VALUES (:user_first_name, :user_last_name, :user_email, :user_password)';

   $stmt = $db->prepare($sql);

   $stmt->bindValue(':user_first_name', $user_first_name, PDO::PARAM_STR);
   $stmt->bindValue(':user_last_name', $user_last_name, PDO::PARAM_STR);
   $stmt->bindValue(':user_email', $user_email, PDO::PARAM_STR);
   $stmt->bindValue(':user_password', $user_password, PDO::PARAM_STR);

   $stmt->execute();

   $rowsChanged = $stmt->rowCount();
   $stmt->closeCursor();
   return $rowsChanged;
 }

 //Check for existing e-mail address
 function check_email_exists($user_email) {
   $db = tpd_connect();
   $sql = 'SELECT user_email FROM users WHERE user_email = :email'; 
   $stmt = $db->prepare($sql);
   $stmt->bindValue(':email', $user_email, PDO::PARAM_STR);
   $stmt->execute();
  
   $match_email = $stmt->fetch(PDO::FETCH_NUM);
   $stmt->closeCursor();
   if(empty($match_email)) {
      return 0;
   } else {
      return 1;
   }
 }

 //Get user data based on their email address
 function get_user($user_email) {
    $db = tpd_connect();
    $sql = 'SELECT user_id, user_first_name, user_last_name, user_email, user_password FROM users WHERE user_email = :user_email';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':user_email', $user_email, PDO::PARAM_STR);
    $stmt->execute();
    $user_data = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $user_data;
    exit;
}

//Get user data based on the user id
function get_user_by_id($userId) {
   $db = tpd_connect();
   $sql = 'SELECT user_id, user_first_name, user_last_name, user_email, user_password FROM users WHERE user_id = :user_id';
   $stmt = $db->prepare($sql);
   $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
   $stmt->execute();
   $userUpdateData = $stmt->fetch(PDO::FETCH_ASSOC);
   $stmt->closeCursor();
   return $userUpdateData;
   exit;
}
//Function for updating user data
function update_user($user_first_name, $user_last_name, $user_email, $user_id) {
   $db = tpd_connect();
   $sql = 'UPDATE users SET user_first_name = :user_first_name, user_last_name = :user_last_name, user_email = :user_email WHERE user_id = :user_id';
   $stmt = $db->prepare($sql);
   $stmt->bindValue(':user_first_name', $user_first_name, PDO::PARAM_STR);
   $stmt->bindValue(':user_last_name', $user_last_name, PDO::PARAM_STR);
   $stmt->bindValue(':user_email', $user_email, PDO::PARAM_STR);
   $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
   $stmt->execute();
   $rowsChanged = $stmt->rowCount();
   $stmt->closeCursor();
   return $rowsChanged;
}
//Function to update the user password
function update_password($user_password, $user_id) {
   $db = tpd_connect();
   $sql = 'UPDATE users SET user_password = :user_password WHERE user_id = :user_id';
   $stmt = $db->prepare($sql);
   $stmt->bindValue(':user_password', $user_password, PDO::PARAM_STR);
   $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
   $stmt->execute();
   $rowsChanged = $stmt->rowCount();
   $stmt->closeCursor();
   return $rowsChanged;
}