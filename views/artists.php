<?php
require_once '../functions/connection.php';
require_once '../functions/functions.php';
require_once '../models/main-model.php';
$artist = get_artists();
$artist_display_desc = get_artists_desc($artist);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/custom.css?ts=<?=time()?>" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
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
        <section class="title">
            <div class="container">
                <div class="row"> <!--artist name title-->
                    <?php
                        if(isset($artist_display_desc)) {
                            echo $artist_display_desc;
                        }
                    ?>
                </div>
            </div>
        </section>
    </main>

    <footer class="ftr">
        <?php include $_SERVER['DOCUMENT_ROOT'].'/practicaldiva/common/footer.php'; ?>
    </footer>

</body>