<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css?ts=<?=time()?>" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"></script>
    <!-- Datepicker -->
    <link href='bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css' rel='stylesheet' type='text/css'>
    <script src='bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js' type='text/javascript'></script>
    <title>The Practical Diva</title>
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light">
        <?php include $_SERVER['DOCUMENT_ROOT'].'/practicaldiva/common/navigation.php'; ?>
    </nav>

    <main>

        <section class="title"> <!-- Title and banner image -->

            <div class="container">
                <div class="row">
                    <div class="col s-message">
                    <?php 
                           if (isset($_SESSION['message'])) {
                                echo $_SESSION['message'];
                        }
                    ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="container-fluid diva-img">
                            <img src="images/diva-face.svg" class="img-fluid diva-img" alt="the-practical-diva">  
                        </div>
                    </div>
                    <div class="col title">
                        <h1 class="display-2">Need a Handy{wo}man?</h1>
                        <p class="lead tagline">Let the Practical Diva give you a hand!</p>
                        <a href="#help" class="nav-link" ><button type="button" class="btn btn-primary btn-yellow top-help-btn-d">How can we help?</button></a>
                    </div>
                        
                </div>
                <div class="container help-btn">
                    <div class="row top-help-btn-m">
                        <div class="col d-flex justify-content-center">
                            <a href="#help" class="nav-link" ><button type="button" class="btn btn-primary btn-yellow">How can we help?</button></a>
                        </div>
                    </div>
                </div>
            </div>      

        </section> 

        <a name="diva"></a>
        <section>  <!-- Meet the Diva -->
            
            <div class="container-fluid">
                <div class="row">
                    <div class="col title">
                        <h2>Meet the Diva</h2>
                    </div>
                </div>
                <div class="row bio">
                    <div class="col-sm image-fluid">
                        <img src="images/taerra-head-shot-2-small.jpg">
                    </div>
                    <div class="col">
                        <p>The Practical Diva <i>(ˈpraktək(ə)l ˈdēvə /noun) </i> is an opera-singer who uses her skills as a handy[wo]man to fund her singing career.</p>
                        <p>Taerra Pence came to New York city to pursue her dream of being an opera singer. She struck out in search of jobs to support herself while she pursued her musical career. After struggling to find work in the more traditional places, Taerra turned to her experience with home repairs to make ends meet.</p>
                        <p>Growing up helping her dad on numerous remodeling projects, Taerra already had an impressive set of handy skills when she struck out on her own. She’s expanded on those skills by becoming a licensed contractor and has successfully turned an opportunity into a profitable business.</p>
                    </div>
                </div>
            </div>

        </section>
        
        <a name="services"></a>
        <section class="yellow">   <!-- Our Services -->
            <div class="yellow-bg">
            </div>
             <div class="container services">
                <div class="row">
                    <div class="col title">
                        <h2>Our Services</h2>
                    </div>
                </div>
                <?php
                    if(isset($service_display)) {
                        echo $service_display;
                    }
                ?>
                <!-- <div class="row">
                    <div class="col">
                        <h2>For smaller jobs, check out my handy artist friends</h2>
                        <a href="#sm-jobs">Small Jobs</a>
                    </div>
                </div> -->
                
            </div>

        </section>

        <div class="container callout-btn help-btn">
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <a href="#help" class="nav-link" ><button type="button" class="btn btn-primary btn-yellow">Schedule Today!</button></a>
                </div>
            </div>
        </div>

        <a name="clients"></a>

        <div class="container">
            <div class="row">
                <div class="col clients-d title">
                    <h2>Our Clients</h2>
                </div>
            </div>
        </div>
        
        
        <section class="blue">  <!-- Our Clients -->
            <div class="blue-bg">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col clients-m clients-tagline title">
                        <h2>Our clients love us!</h2>
                        <p>But you don't have to just take our word for it.</p>
                    </div>
                </div>
                <div class="row reviews_display">
                    
                        <?php
                            if(isset($review_display)) {
                                echo $review_display;
                            }
                        ?>
                    <div class="col clients-tagline-d clients-d">
                        <h2>Our clients love us!</h2>
                        <p>But you don't have to just take our word for it.</p>
                    </div>
                </div>
            </div>

        </section>

        <div class="container callout-btn help-btn">
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <a href="#help" class="nav-link" ><button type="button" class="btn btn-primary btn-yellow">Schedule Today!</button></a>
                </div>
            </div>
        </div>
        
        <a name="help"></a>
        <section class="yellow">  <!-- Forms  -->
            
            <div class="container mobile-forms"> <!-- Mobile Forms -->
                <div class="row">
                    <div class="col title">
                        <h2>How Can We Help?</h2>
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
                                            Need A job done?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <form action="/practicaldiva/forms/index.php" id="request-mobile" method="post">
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" id="request_name_mobile" name="request_name" required placeholder="Name" minlength="1" maxlength="12" size="12">
                                                </div>
                                                <div class="mb-3">
                                                    <input type="email" class="form-control" id="request_email_mobile" name="request_email" placeholder="Email">
                                                </div>
                                                <div class="mb-3">
                                                    <input type="tel" class="form-control" id="request_phone_mobile" name="request_phone" pattern="^\d{10}$" required placeholder="Phone Number">
                                                </div>
                                                <div class="mb-3">
                                                    <textarea class="form-control" id="request_text_mobile" name="request_text" rows="3" placeholder="What do you need help with?"></textarea>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Send Request</button>
                                                <input type="hidden" name="action" value="request">
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
                                            Need to check availability?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <form action="/practicaldiva/forms/index.php" method="post" id="availability-mobile">
                                                <div class="row">
                                                    <div class="col-sm">
                                                        <div class="mb-3">
                                                            <input type="text" class="form-control" id="availability_name_desktop" name="availability_name" required placeholder="Name" minlength="1" maxlength="12" size="12">
                                                        </div>
                                                        <div class="mb-3">
                                                            <input type="email" class="form-control" id="availability_email_desktop" name="availability_email" placeholder="Email">
                                                        </div>
                                                        <div class="mb-3">
                                                            <input type="tel" class="form-control" id="availability_phone_desktop" name="availability_phone"  pattern="^\d{10}$" required placeholder="Phone Number">
                                                        </div>
                                                        <div class="mb-3 form-control flex-column">
                                                            <label for="availability_date">Enter or select a date</label>
                                                            <input type="date" class="form-control date" id="availability_date_desktop" name="availability_date" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Check Availability</button>
                                                <input type="hidden" name="action" value="availability">
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
                                            Just need a quote?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <form action="/practicaldiva/forms/index.php" id="quote-mobile" method="post"> 
                                                <h4 class="form-title">Just need a quote?</h4>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" id="quote_name_mobile" name="quote_name" required placeholder="Name" minlength="1" maxlength="12" size="12">
                                                </div>
                                                <div class="mb-3">
                                                    <input type="email" class="form-control" id="quote_email_mobile" name="quote_email" placeholder="Email">
                                                </div>
                                                <div class="mb-3">
                                                    <input type="tel" class="form-control" id="quote_phone_mobile" name="quote_phone" pattern="^\d{10}$" required placeholder="Phone Number">
                                                </div>
                                                <div class="mb-3">
                                                    <textarea class="form-control" id="quote_text_mobile" name="quote_text" rows="3" placeholder="What do you need help with?"></textarea>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Get Quote</button>
                                                <input type="hidden" name="action" value="quote">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div> <!-- End of accordion -->

                    </div>
                </div>                           
            </div>
            <div class="yellow-bg">
            </div>
            <div class="container desktop-forms">  <!-- Desktop Forms -->
            <div class="row">
                    <div class="col title">
                        <h2>How Can We Help?</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col">    
                        <form action="/practicaldiva/forms/index.php" id="request-desktop" method="post">
                            <h4 class="form-title">Need a job done?</h4>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="request_name_desktop" name="request_name" required placeholder="Name" minlength="1" maxlength="12" size="12">
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" id="request_email_desktop" name="request_email" placeholder="Email">
                            </div>
                            <div class="mb-3">
                                <input type="tel" class="form-control" id="request_phone_desktop" name="request_phone" pattern="((\(\d{3}\) ?)|(\d{3}-))?\d{3}-\d{4}" required placeholder="Phone Number">
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" id="request_text_desktop" name="request_text" rows="3" placeholder="What do you need help with?"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Send Request</button>
                            <input type="hidden" name="action" value="request">
                        </form>
                    </div>
                    <div class="col">
                        <form action="/practicaldiva/forms/index.php" id="availability-desktop" method="post">  
                            <h4 class="form-title">Need to check availability?</h4>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="availability_name_desktop" name="availability_name" required placeholder="Name" minlength="1" maxlength="12" size="12">
                                    </div>
                                    <div class="mb-3">
                                        <input type="email" class="form-control" id="availability_email_desktop" name="availability_email" placeholder="Email">
                                    </div>
                                    <div class="mb-3">
                                        <input type="tel" class="form-control" id="availability_phone_desktop" name="availability_phone"  pattern="^\d{10}$" required placeholder="Phone Number">
                                    </div>
                                    <div class="mb-3 form-control flex-column">
                                        <label for="availability_date">Enter or select a date</label>
                                        <input type="date" class="form-control date" id="availability_date_desktop" name="availability_date" required>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Check Availability</button>
                            <input type="hidden" name="action" value="availability">
                        </form>
                    </div>
                    <div class="col">
                        <form action="/practicaldiva/forms/index.php" id="quote-desktop" method="post"> 
                            <h4 class="form-title">Just need a quote?</h4>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="quote_name_desktop" name="quote_name" required placeholder="Name" minlength="1" maxlength="12" size="12">
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" id="quote_email_desktop" name="quote_email" placeholder="Email">
                            </div>
                            <div class="mb-3">
                                <input type="tel" class="form-control" id="quote_phone_desktop" name="quote_phone" pattern="^\d{10}$" required placeholder="Phone Number">
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" id="quote_text_desktop" name="quote_text" rows="3" placeholder="What do you need help with?"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Get Quote</button>
                            <input type="hidden" name="action" value="quote">
                        </form>
                    </div>
                </div>
            </div> 
        </section>

        <!-- artists -->
        <!-- <a name="sm-jobs"></a>
        <section class="blue-bg"> 
        <div class="container">
            <div class="row">
                <div class="col title">
                    <h2 class="small-jobs">For smaller jobs, check out my handy artist friends</h2>
                    
                    <?php
                    /* if(isset($artist_display)) {
                        echo $artist_display;
                    } */
                    ?>
                <div>
            </div>
        </div> 
        </section>-->

        <section>
            <div class="container cta">
                <div class="row">
                    <div class="col">
                        <h3>Let The Practical Diva help you today!</h3>
                    </div>
                </div>
            </div> 
        </section>

    </main>

    <footer class="ftr">
        <?php include $_SERVER['DOCUMENT_ROOT'].'/practicaldiva/common/footer.php'; ?>
    </footer>
</body>
<?php unset($_SESSION['message']); ?>