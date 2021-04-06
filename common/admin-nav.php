<nav class="navbar fixed-top navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <img src="/practicaldiva/images/tpd-logo.png" class="desktop-logo" alt="tpd-logo"/>
    <img src="/practicaldiva/images/tpd.svg" class="mobile-logo" alt="tpd-logo" width="30" height="30"/>
    <a class="navbar-brand" href="/practicaldiva/index.php">
      The Practical Diva</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                 <a class="nav-link active" aria-current="page" href="/practicaldiva/index.php">Home</a>
            </li>
            <?php 
                /* if(isset($cookieFirstname)){
                    echo '<span id="welcome" class="header-right">Welcome ' .  $cookieFirstname . '</span>';
                }  */
                if(isset($_SESSION['user_data']['user_first_name'])){
                    //echo '<a href="../accounts/index.php"><span id="welcome" class="header-right">Welcome ' .  $_SESSION['user_data']['user_first_name'] . '</span></a>';
                    echo '<li class="nav-item"><a class="nav-link" href="../accounts/index.php" id="logout">Welcome ' .  $_SESSION['user_data']['user_first_name'] . '</a></li>';
                } 
                if(isset($_SESSION['loggedin'])) {
                    //echo '<a href="/practicaldiva/accounts/index.php?action=logout" id="logout" class="header-right">Logout</a>';
                    echo '<li class="nav-item"><a class="nav-link" href="/practicaldiva/accounts/index.php?action=logout" id="logout">Logout</a></li>';
                } else {
                    echo '<li class="nav-item"><a class="nav-link" href="/practicaldiva/accounts/index.php?action=login id="login">My Account</a></li>';
                }
                ?>
            
        </ul>
  </div>
      
</nav>
