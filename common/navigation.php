  <div class="container-fluid">
    <img src="/practicaldiva/images/tpd-logo.png" class="desktop-logo" alt="tpd-logo"/>
    <img src="/practicaldiva/images/tpd.svg" class="mobile-logo" alt="tpd-logo" width="30" height="30"/>
    <a class="navbar-brand" href="#">The Practical Diva</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="../practicaldiva/index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#diva">Meet the Diva</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#services">Our Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#clients">Our Clients</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#help">How can we help?</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#sm-jobs">Small Jobs</a>
        </li> -->
        <li class="nav-item">
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              Employee Login
            </button>
            <form method="post" action="/practicaldiva/accounts/" class="dropdown-menu p-4 dropdown-form">
              <div class="mb-3">
                <label for="user_email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="user_email" name="user_email" placeholder="email@example.com">
              </div>
              <div class="mb-3">
                <label for="exampleDropdownFormPassword2" class="form-label">Password</label>
                <input type="password" class="form-control" id="user_password" name="user_password" placeholder="Password">
              </div>
              <div class="mb-3">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="dropdownCheck2">
                  <label class="form-check-label" for="dropdownCheck2">
                    Remember me
                  </label>
                </div>
              </div>
              <div class="row buttons">
                <div class="col">
                  <input type="submit" name="submit" class="btn btn-primary" value="Sign In">
                  <input type="hidden" name="action" value="Login">
                </div>
                <div class="col">
                  <a href='/practicaldiva/accounts/index.php?action=registration' title='Create an account' class="btn btn-primary"  id="register-button">Create an account</a>
                </div>
              </div>
            </form> 
            </div>
        </li> 
        <li>
          <?php 
            if(isset($_SESSION['user_data']['user_first_name'])){
                echo '<li class="nav-item"><a class="nav-link" href="/practicaldiva/accounts/index.php" id="admin">Welcome ' .  $_SESSION['user_data']['user_first_name'] . '!</a></li>';
            } 
            if(isset($_SESSION['loggedin'])) {
                echo '<li class="nav-item"><a class="nav-link" href="/practicaldiva/accounts/index.php?action=logout" id="logout">Logout</a></li>';
            } 
          ?>
        </li>
      </ul>       
  </div> 
</div> 