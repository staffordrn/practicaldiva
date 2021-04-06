<?php

//Email validation
function check_email($user_email) {
    $valid_email = filter_var($user_email, FILTER_VALIDATE_EMAIL);
    return $valid_email;    
}

//Password validation
function check_password($user_password) {
    $pattern = '/^(?=.*[[:digit:]])(?=.*[[:punct:]])(?=.*[A-Z])(?=.*[a-z])([^\s]){8,}$/';
    return preg_match($pattern, $user_password);
}
// artist display
function artist_display($artist) {
    $a = '<div class="row artist-display">';
    foreach ($artist as $artst) {
        $a .= '<div class="col d-flex justify-content-center">';
        $a .= '<a href="views/artists.php"><div class="card" style="width: 18rem;">';
        $a .= '<div class="card-body">';
        $a .= "<h5 class='card-title'>$artst[artist_first_name] $artst[artist_last_name]</h5>";
        $a .= "<img src='$artst[artist_img]' class='card-img-top' ; alt='Image of $artst[artist_first_name] $artst[artist_last_name]'>";
        $a .= '</div>'; 
        $a .= '</div>'; 
        $a .= '</div></a>'; 
    }
    $a .= '</div>';
    return $a; 
}
// services display
function service_display($services) {
    $s = '<div class="row services_display">';
    foreach ($services as $svcs) {
        $s .= '<div class="col d-flex justify-content-center">';
        $s .= '<div class="card" style="width: 18rem;">';
        $s .= "<div class='card-header'>$svcs[service_name]</div>";
        $s .= '<div class="card-body">';
        $s .= "<p class='card-text'>$svcs[service_desc]</p>";
        $s .= '</div>'; 
        $s .= '</div>'; 
        $s .= '</div>'; 
    }
    $s .= '</div>';
    return $s; 
}
// reviews display
function review_display($reviews) {
    //$r = '<div class="row reviews_display">';
    $r = '';
    foreach ($reviews as $rvws) {
        $r .= '<div class="col d-flex justify-content-center">';
        $r .= '<div class="card quote" style="width: 18rem;">';
        $r .= '<div class="card-body">';
        $r .= '<blockquote class="blockquote mb-0">';
        $r .= "<p>$rvws[review_comment]</p>";
        $r .= "<footer class='blockquote-footer'>$rvws[review_name]<cite title='Source Title'> -'$rvws[review_source]</cite></footer>";
        $r .= '</blockquote>';
        $r .= '</div>'; 
        $r .= '</div>'; 
        $r .= '</div>'; 
    }
    //$r .= '</div>';
    return $r; 
}
function service_dropdown($services) {
    $s_list = '<select name="service_id" id="service_id" class="form-select" aria-label="service_select">';
    $s_list .= "<option>Choose a Service</option>";
    foreach ($services as $svc) {
        $s_list .= "<option value='$svc[service_id]'>$svc[service_name]</option>";
    }   
    $s_list .= '</select>';
    return $s_list;
}
function review_dropdown($reviews) {
    $r_list = '<select name="review_id" id="review_id" class="form-select">';
    $r_list .= "<option>Choose a review</option>";
    foreach ($reviews as $rvw) {
     $r_list .= "<option value='$rvw[review_id]'>Review By $rvw[review_name]</option>";
    }
    $r_list .= '</select>';
    return $r_list;
}    
function get_artists_desc($artist) {
$ad = '<div class="row artist-display">';
    foreach ($artist as $art) {
        $ad .= '<div class="col d-flex justify-content-center">';
        $ad .= '<div class="card" style="width: 18rem;">';
        $ad .= '<div class="card-body">';
        $ad .= "<h5 class='card-title'>$art[artist_first_name] $art[artist_last_name]</h5>";
        $ad .= "<img src='$art[artist_img]' class='card-img-top' ; alt='Image of $art[artist_first_name] $art[artist_last_name]'>";
        $ad .= "<p>$art[artist_desc]</p>";
        $ad .= '</div>'; 
        $ad .= '</div>'; 
        $ad .= '</div>'; 
    }
    $ad .= '</div>';
    return $ad; 
}
/* //Navigation function
function navigation($classifications) {
    $navList = '<ul>';
    $navList .= "<li><a href='../index.php' title='View the PHP Motors home page'>Home</a></li>";
    foreach ($classifications as $classification) {
        $navList .= "<li><a href='/phpmotors/vehicles/?action=classification&classificationName=" .urlencode($classification['classificationName'])."' title='View our $classification[classificationName] lineup of vehicles'>$classification[classificationName]</a></li>";
    }
    $navList .= '</ul>';
    return $navList;
}
 */
//Dropdown list for car classifications
/* function buildClassificationList($classifications) {
    $classificationList = '<select name="classificationId" id="classificationList">';
    $classificationList .= "<option>Choose a Classification</option>";
    foreach ($classifications as $classification) {
        $classificationList .= "<option value='$classification[classificationId]'>$classification[classificationName]</option>";
    }
    $classificationList .= '</select>';
    return $classificationList;
}  */
//Function to build an unordered list of vehicles to display
/* function buildVehicleDisplay($vehicles){
    $dv = '<ul id="invDisplay">';
    foreach ($vehicles as $vehicle) {
        $dv .= '<li>';
        $dv .= "<a href='../vehicles/index.php?action=vehicle&invId=$vehicle[invId]'><img src='$vehicle[invThumbnail]' alt='Image of $vehicle[invMake] $vehicle[invModel] on phpmotors.com'></a>";
        $dv .= '<hr>';
        $dv .= "<a href='../vehicles/index.php?action=vehicle&invId=$vehicle[invId]'><h2>$vehicle[invMake] $vehicle[invModel]</h2></a>";
        $dv .= "<span class=\"price\">Price: \$" . number_format($vehicle['invPrice'], 0). "</span>";
        $dv .= '</li>';
    }
    $dv .= '</ul>';
    return $dv;
} */

function createForm($clientFirstname,  $clientLastname, $invId) {
    $screenName = substr($clientFirstname, 0, 1);
    $screenName .=$clientLastname;
    $form = '<form action="/phpmotors/reviews/index.php" id="addReview" method="post">';
    $form .= ' <header><h1>Add a Review</h1></header>';
    $form .= '<label for="screen-name">Screen Name</label>';
    $form .= ' <input type="text" name="screenName" id="screen-name" value="' .$screenName. '" readonly>';
    $form .= '<label for="review-text">Enter your review here</label>';
    $form .= '<textarea rows="5" id="review-text" name="reviewText" required></textarea>';
    $form .= '<input type="submit" name="submit" class ="button" value="Submit Your Review">';
    $form .= '<input type="hidden" name="action" value="addNewReview">';
    $form .= '<input type="hidden" name="invId" value="'.$invId.'">';
    $form .= '<input type="hidden" name="clientId" value="'.$_SESSION['clientData']['clientId'].'">';
    $form .= '</form>';
    return $form;
}
function reviewDisplay($invId) {
    $reviews = reviewByItem($invId);
    $rev = '';
    
    foreach ($reviews as $review) {
        $clientId = $review['clientId'];
        $name = getScreenName($clientId);
        $screenName = substr($name['clientFirstname'], 0, 1);
        $screenName .=$name['clientLastname'];
        $revDate = date('j F\, Y', strtotime($review['reviewDate']));
        $rev .= '<div class="review">';
        $rev .= '<span class="revInfo">On '. $revDate .', </span>';
        $rev .= '<span class="revInfo">'. $screenName .' says: </span>'; 
        $rev .= '<p class="reviewText">'.$review['reviewText']. '</p>';
        $rev .= '</div>';
    }
    return $rev;
}
function userReview($clientId) {
    $reviews = reviewByClient($clientId);
    $userRev = '';
    foreach ($reviews as $review) {
        $revDate = date('j F\, Y', strtotime($review['reviewDate']));
        $userRev .= '<div class="vehicleReview">';
        $userRev .= '<span class="revInfo">On '. $revDate .', </span>';
        $userRev .= '<span class="revInfo">You said: </span>'; 
        $userRev .= '<p class="reviewText">'.$review['reviewText']. '</p>';
        $userRev .= '<div class="reviewLinks">';
        $userRev .= '<a href="../reviews/index.php?action=editReview&reviewId='.$review['reviewId'].'" class="reviewButton">Edit Review</a>';
        $userRev .= '<a href="../reviews/index.php?action=confirmDelete&reviewId='.$review['reviewId'].'" class="reviewButton">Delete Review</a>';
        $userRev .= '</div>';
        $userRev .= '</div>';
    }
    return $userRev;
}

// Functions for working with images

// Function to edit the file name to indicate a thumbnail
// Adds "-tn" designation to file name
function makeThumbnailName($image) {
    $i = strrpos($image, '.');
    $image_name = substr($image, 0, $i);
    $ext = substr($image, $i);
    $image = $image_name . '-tn' . $ext;
    return $image;
   }

// Build images display for image management view
function buildImageDisplay($imageArray) {
    $id = '<ul id="image-display">';
    foreach ($imageArray as $image) {
     $id .= '<li>';
     $id .= "<img src='$image[imgPath]' title='$image[invMake] $image[invModel] image on PHP Motors.com' alt='$image[invMake] $image[invModel] image on PHP Motors.com'>";
     $id .= "<p><a href='/phpmotors/uploads?action=delete&imgId=$image[imgId]&filename=$image[imgName]' title='Delete the image'>Delete $image[imgName]</a></p>";
     $id .= '</li>';
   }
    $id .= '</ul>';
    return $id;
   }
// Build the vehicles select list
function buildVehiclesSelect($vehicles) {
    $prodList = '<select name="invId" id="invId">';
    $prodList .= "<option>Choose a Vehicle</option>";
    foreach ($vehicles as $vehicle) {
     $prodList .= "<option value='$vehicle[invId]'>$vehicle[invMake] $vehicle[invModel]</option>";
    }
    $prodList .= '</select>';
    return $prodList;
   }

// Handles the file upload process and returns the path
// The file path is stored into the database
function uploadFile($name) {
    // Gets the paths, full and local directory
    global $image_dir, $image_dir_path;
    if (isset($_FILES[$name])) {
     // Gets the actual file name
     $filename = $_FILES[$name]['name'];
     if (empty($filename)) {
      return;
     }
    // Get the file from the temp folder on the server
    $source = $_FILES[$name]['tmp_name'];
    // Sets the new path - images folder in this directory
    $target = $image_dir_path . '/' . $filename;
    // Moves the file to the target folder
    move_uploaded_file($source, $target);
    // Send file for further processing
    processImage($image_dir_path, $filename);
    // Sets the path for the image for Database storage
    $filepath = $image_dir . '/' . $filename;
    // Returns the path where the file is stored
    return $filepath;
    }
   }

