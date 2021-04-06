
<div class="container-fluid">
    <?php 
        if(isset($cookieFirstname)){
            echo '<li class="nav-item">Welcome ' .  $cookieFirstname . '</li>';
        } 
        if(isset($_SESSION['user_data']['user_first_name'])){
            //echo '<a href="../accounts/index.php"><span id="welcome" class="header-right">Welcome ' .  $_SESSION['user_data']['user_first_name'] . '</span></a>';
            echo '<li class="nav-item"><a class="nav-link" href="../accounts/index.php" id="logout">Welcome ' .  $_SESSION['user_data']['user_first_name'] . '</a></li>';
        } 
        if(isset($_SESSION['loggedin'])) {
            //echo '<a href="/practicaldiva/accounts/index.php?action=logout" id="logout" class="header-right">Logout</a>';
            echo '<li class="nav-item"><a class="nav-link" href="/practicaldiva/accounts/index.php?action=logout" id="logout">Logout</a></li>';
        } else {
            echo '<a href="/practicaldiva/accounts/index.php?action=login" id="logout" class="header-right">My Account</a>';
        }
    ?>
</div>

