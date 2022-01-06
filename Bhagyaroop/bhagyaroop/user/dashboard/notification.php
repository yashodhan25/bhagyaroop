<?php
session_start();
ob_start();

error_reporting(0);

include './../../../dbconnection.php';

if(!(isset($_SESSION['user1']))){
    header("location:./../../login.php");
}

$email = $_SESSION['user1'];

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Welcome <?php echo $v4 ?></title>
        <link rel="icon" href="./../logo.png" type="image/x-icon">
        <link rel="stylesheet" href="./design.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="./bootstrap-select.css">
        <style>
        body{
            background-image: url('./../../back.jpeg');
        }
        </style>
    </head>

    <body>

        <?php
        include 'header2.php';
        ?>

        <div class="container">
            <div class="row">

                <div class="col-sm-12 col-md-12 col-lg-12">
                    
                </div>


            </div>
        </div>

        <br><br><br>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/js/bootstrap-select.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <script src="./custom.js"></script>

        <script>
        $(document).ready(function(){
        $('[data-toggle="modal"]').tooltip();   
        });
        </script>

        <script>
            var element = document.getElementById("active5");
            element.classList.add("active");
        </script>

    </body>
</html>

<?php
ob_end_flush();
?>