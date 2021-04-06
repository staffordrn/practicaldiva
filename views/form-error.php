<!DOCTYPE HTML>
<html lang="en-us">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/custom.css?ts=<?=time()?>" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"></script>
    <title>The Practical Diva</title>

</head>

<body> 
    
    <nav class="navbar fixed-top navbar-expand-lg navbar-light">
        <?php include $_SERVER['DOCUMENT_ROOT'].'/practicaldiva/common/secondary-nav.php'; ?>
    </nav>
    <main>
        <div class="container">
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <h1 class="notification">
                        <?php 
                        if (isset($errors)) {
                            echo $errors;
                        }
                        if (isset($message)) {
                            echo $message;
                        }

                        if (isset($_SESSION['message'])) {
                                echo $_SESSION['message'];
                        }
                        if (isset($_SESSION['p_message'])) {
                            echo $_SESSION['p_message'];
                        }
                        if (isset($_SESSION['errors'])) {
                            echo $_SESSION['errors'];
                        }
                        ?>
                                    
                    
                    
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <a href="../index.php" class="home-btn"><button type="button" class="btn btn-primary btn-yellow">Back to home</button></a>
                </div>
            </div>
        </div>       
    </main>
    <footer class="ftr">
        <?php include $_SERVER['DOCUMENT_ROOT'].'/practicaldiva/common/footer.php'; ?>
    </footer>
    </div>

</body>

</html>