<?php if(!isset($_SESSION['loggedin'])) {
    header("Location: /practicaldiva/");
    exit;
}
?>
<!DOCTYPE HTML>
<html lang="en-us">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/custom.css?ts=<?=time()?>" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"></script>
    <!-- Datepicker -->
    <link href='bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css' rel='stylesheet' type='text/css'>
    <script src='bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js' type='text/javascript'></script>
    <title>The Practical Diva</title>
</head>

<body> 
    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/practicaldiva/common/admin-nav.php'; ?>
    </header>
    
    <main> 
        <section class="title blue"> <!-- Title and banner image -->
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="greeting">Hello there <?php echo $_SESSION['user_data']['user_first_name']. " " . $_SESSION['user_data']['user_last_name']?>!</h1>
                        <?php 
                           if (isset($_SESSION['message'])) {
                                echo $_SESSION['message'];
                        }
                        if (isset($_SESSION['p_message'])) {
                            echo $_SESSION['p_message'];
                        } 
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <div class="yellow-bg">
        </div>
        <section>
            <div class="container mobile-forms">
                <div class="row">
                    <div class="col title">
                        <h2>Administrator Tools</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="accordion" id="accordionExample">
                            
                            <!-- accordion 1 -->
                            <div class="col">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            Add a Service
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">

                                            <form action="/practicaldiva/admin/index.php" id="add_service" method="post">
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" id="service_name" name="service_name" required placeholder="Service" size="10">
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" id="service-desc" name="service_desc" placeholder="Service Description">
                                                </div>
                                                <button type="submit" class="btn btn-primary">Add Service</button>
                                                <input type="hidden" name="action" value="add_service">
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- accordion 2 -->
                            <div class="col">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Delete a Service
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <form action="/practicaldiva/admin/index.php" id="delete_service" method="post">
                                                <div class="mb-3">
                                                    <h5>Select a Service to delete</h5>  
                                                    <div class="dropdown">
                                                            <?php
                                                                if(isset($service_dropdown)) {
                                                                    echo $service_dropdown;
                                                                }
                                                            ?>
                                                    </div>
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#delete_confirm_serv">
                                                    Delete
                                                    </button>
                                                </div>
                                                <!-- Confirm Delete Modal -->
                                                <div class="modal fade" id="delete_confirm_serv" tabindex="-1" role="dialog" aria-labelledby="serv_delete_confirm_modal" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="serv_delete_confirm_modal">Delete a Service</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Are you sure you want to delete this service?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Oops! No, please!</button>
                                                                <button type="submit" class="btn btn-primary">Yes, I"m sure</button>
                                                                <input type="hidden" name="action" value="delete_service">
                                                                <input type="hidden" name="service_id" value="<?php echo $service_id; ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>                            
                                </div>
                            </div>

                            <!-- accordion 3 -->
                            <div class="col">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Add a Review
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <form action="/practicaldiva/admin/index.php" id="add_review" method="post">
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" id="review_name" name="review_name" required placeholder="Name (First name, last initial)" size="10">
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" id="review_source" name="review_source" required placeholder="Source (yelp.com, homeadvisor, etc.)" size="10">
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" id="review_comment" name="review_comment" placeholder="Reviewer Comments">
                                                </div>
                                                <button type="submit" class="btn btn-primary">Add Review</button>
                                                <input type="hidden" name="action" value="add_review">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--accordion 4-->
                            <div class="col">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                            Delete a Review
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <form action="form-handler.php" method="post">
                                                <div class="mb-3">
                                                    <h5>Select a review to delete</h5>
                                                    <div class="dropdown">
                                                            <?php
                                                                if(isset($review_dropdown)) {
                                                                    echo $review_dropdown;
                                                                }
                                                            ?>
                                                    </div>
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#delete_confirm_rev">
                                                        Delete
                                                    </button>
                                                </div>
                                                <!-- Confirm Delete Modal -->
                                                <div class="modal fade" id="delete_confirm_rev" tabindex="-1" role="dialog" aria-labelledby="rev_delete_confirm_modal" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="rev_delete_confirm_modal">Delete a Review</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Are you sure you want to delete this review?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Oops! No, please!</button>
                                                                <button type="submit" class="btn btn-primary">Yes, I"m sure</button>
                                                                <input type="hidden" name="action" value="delete_review">
                                                                <input type="hidden" name="review_id" value="<?php echo $review_id; ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Edit Review</button>
                                                <input type="hidden" name="action" value="delete_review">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div> <!-- End of accordion -->
                    </div>
                </div>
            </div>  <!-- end mobile forms -->
            <div class="container desktop-forms">  
                <div class="row">                
                    <div class="col title">
                        <h2>Administrator Tools</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col"><!--form 1-->
                        <h3>Add a Service</h3>
                        <form action="/practicaldiva/admin/index.php" id="add_service" method="post">
                            <div class="mb-3">
                            <label for="service_name">Service Name</label>
                                <input type="text" class="form-control" id="service_name" name="service_name" required size="10">
                            </div>
                            <div class="mb-3">
                                <label for="service_desc">Service Description</label>
                                <input type="text" class="form-control" id="service-desc" name="service_desc" >
                            </div>
                            <button type="submit" class="btn btn-primary">Add Service</button>
                            <input type="hidden" name="action" value="add_service">
                        </form>
                    </div>
                    <div class="col"><!--form 2-->
                        <h3>Delete a Service</h3>
                        <form action="/practicaldiva/admin/index.php" id="dconfirm_delete_review" method="post">
                            <div class="col mb-3">
                                <h5>Select a Service to delete</h5>  
                                <div class="admin-dropdown">
                                        <?php
                                            if(isset($service_dropdown)) {
                                                echo $service_dropdown;
                                            } 
                                        ?>
                                </div>
                                <button type="submit" class="btn btn-primary">Delete</button>
                                <input type="hidden" name="action" value="confirm_delete_service">
                            </div>
                        </form>
                    </div>
                    <div class="col"><!--form 3-->
                        <h3>Add a Review</h3>
                        <form action="/practicaldiva/admin/index.php" id="add_review" method="post">
                            <div class="mb-3">
                                <label for="review_name">Reviewer <br> (First name, last initial)</label>
                                <input type="text" class="form-control" id="review_name" name="review_name" required size="10">
                            </div>
                            <div class="mb-3">
                                <label for="review_source">Source <br> (yelp.com, homeadvisor, etc.)</label>
                                <input type="text" class="form-control" id="review_source" name="review_source" required size="10">
                            </div>
                            <div class="mb-3">
                                <label for="review_comment">Reviewer Comments</label>
                                <input type="text" class="form-control" id="review_comment" name="review_comment" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Add Review</button>
                            <input type="hidden" name="action" value="add_review">
                        </form>
                    </div>
                    <div class="col"><!--form 4-->
                        <h3>Delete a Review</h3>
                        <form action="/practicaldiva/admin/index.php" method="post">
                            <div class="col mb-3">
                                <h5>Select a review to delete</h5>
                                <div class="admin-dropdown">
                                        <?php
                                            if(isset($review_dropdown)) {
                                                echo $review_dropdown;
                                            }
                                        ?>
                                </div>
                                <button type="submit" class="btn btn-primary">Delete</button>
                                <input type="hidden" name="action" value="confirm_delete_review">
                                
                            </div>
                            
                        </form>
                    </div>
                </div>                          
            </div> <!-- end desktop forms -->
        </section>
    </main>
        
    <footer class="ftr">
        <?php include $_SERVER['DOCUMENT_ROOT'].'/practicaldiva/common/footer.php'; ?>
    </footer>

</body>

</html>
<?php 
unset($_SESSION['message']); 
unset($_SESSION['p_message']); 
?>