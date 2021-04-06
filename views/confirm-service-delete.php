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
    
    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/practicaldiva/common/navigation.php'; ?>
    </header>
  
    <main class="title">
        <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <?php 
                        if (isset($message)) {
                            echo $message;
                        }
                        if(isset($_SESSION['message'])) {
                            echo $_SESSION['message'];
                        }
                    ?>
                    <form action="/practicaldiva/admin/index.php" id="delete_service" method="post">
                        
                        <h2>You are about to delete "<?php echo $service_data['service_name'] ?>" service.</h2>
                        <h2 class="warning">Do you really want to delete this service? The delete is permanent</h2>
                        <input type="submit" name="submit" class ="btn btn-primary btn-yellow" value="Yes, I'm sure">
                        <input type="hidden" name="action" value="delete_service">
                        <input type="hidden" name="service_id" value="<?php echo $service_id; ?>">

                        <a href="../admin/index.php"><button type="button" class ="btn btn-primary btn-yellow">No, Please go back</button></a>
                        
                    </form>
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