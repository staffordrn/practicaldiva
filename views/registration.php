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
    <title>The Practical Diva</title>
</head>

<body> 
    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/practicaldiva/common/admin-nav.php'; ?>
    </header>
        
        <main>
             <section class="title blue">
                <h1>Register Here</h1>
                <p>Please fill out all fields</p>
            </section>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col">

                            <?php 
                                if (isset($message)) {
                                    echo $message;
                            }
                            ?>
                            <form action="/practicaldiva/accounts/index.php" class="register-form" id="registration" method="post">
                                <header>
                                    
                                </header>
                                <div class="mb-3">
                                    <label for="first-name">First Name</label>
                                    <input type="text" name="user_first_name" class="form-control" id="first-name"<?php if(isset($user_first_name)){echo "value='$user_first_name'";}  ?> required>
                                </div>
                                <div class="mb-3">
                                    <label for="last-name">Last Name</label>
                                    <input type="text" name="user_last_name" class="form-control" id="last-name" <?php if(isset($user_last_name)){echo "value='$user_last_name'";}  ?> required>
                                </div>
                                <div class="mb-3">
                                    <label for="email">E-mail</label>
                                    <input type="email" name="user_email" class="form-control" id="email" <?php if(isset($user_email)){echo "value='$user_email'";}  ?> required>
                                </div>
                                <div class="mb-3">
                                    <li><label for="password">Password</label>
                                    <span class="pattern">Your password must have 8 characters and needs to include
                                    at least one uppercate character, <br>one lowercase character
                                    one number and one special character</span>
                                    <input type="password" name="user_password" class="form-control" id="password" <?php if(isset($user_password)){echo "value='$user_password'";}  ?> required pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
                                </div>
                                <input type="submit" name="submit" class ="btn btn-primary" value="Register">
                                <input type="hidden" name="action" value="register">

                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        
        <footer class="ftr">
        <?php include $_SERVER['DOCUMENT_ROOT'].'/practicaldiva/common/footer.php'; ?>
    </footer>
    </div>
</body>

</html>
<?php unset($_SESSION['message']); ?>