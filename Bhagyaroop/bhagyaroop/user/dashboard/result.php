<?php
session_start();
ob_start();
include './../../../dbconnection.php';
include 'data.php';

if(!(isset($_SESSION['user1']))){
    header("location:./../../login.php");
}

if(!(isset($_GET['email']))){
    header("location:./");
}

$obtainEmail = $_GET['email'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Results</title>
        <link rel="icon" href="./../logo.png" type="image/x-icon">
        <link rel="stylesheet" href="./design.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="./font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="./bootstrap-select.css">
        <style>
        body{
            background-image: url('./../../back.jpeg');
        }
        .checked {
            color: #F1C40F;
        }
        </style>
    </head>
    <body>
        <?php
        include 'header2.php';
        ?>

        <div class="container">
            <div class="row">

                <div class="col-sm-12 col-md-12 col-lg-3">

                <?php
                include 'sidemenu2.php';
                ?>
                    

                </div>
                
                <div class="col-sm-12 col-md-12 col-lg-9 main-content">
                    <center>
                    <div class="kundali-form">

                        <div class="form-content">
                            <!-- <div class="head">
                                <span>Result</span>
                            </div> -->
                            <div class="result">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <td>Perticulars</td>
                                            <td><?php echo $_POST['name2']; ?></td>
                                            <td><?php echo $_POST['name1']; ?></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="background:#A73922;padding:5px 10px 5px 10px;color: white;font-size: 16px;">Varna</td>
                                            <td style="background:#F4F6F6;padding:5px 10px 5px 10px;color: #273746;font-size: 16px;"><?php echo $b_varana ?></td>
                                            <td style="background:#F4F6F6;padding:5px 10px 5px 10px;color: #273746;font-size: 16px;"><?php echo $g_varana ?></td>
                                        </tr>
                                        <tr>
                                            <td style="background:#A73922;padding:5px 10px 5px 10px;color: white;font-size: 16px;">Vasya</td>
                                            <td style="background:#F4F6F6;padding:5px 10px 5px 10px;color: #273746;font-size: 16px;"><?php echo $b_vasya ?></td>
                                            <td style="background:#F4F6F6;padding:5px 10px 5px 10px;color: #273746;font-size: 16px;"><?php echo $g_vasya ?></td>
                                        </tr>
                                        <tr>
                                            <td style="background:#A73922;padding:5px 10px 5px 10px;color: white;font-size: 16px;">Tara</td>
                                            <td style="background:#F4F6F6;padding:5px 10px 5px 10px;color: #273746;font-size: 16px;"><?php echo $b_tara ?></td>
                                            <td style="background:#F4F6F6;padding:5px 10px 5px 10px;color: #273746;font-size: 16px;"><?php echo $g_tara ?></td>
                                        </tr>
                                        <tr>
                                            <td style="background:#A73922;padding:5px 10px 5px 10px;color: white;font-size: 16px;">Yoni</td>
                                            <td style="background:#F4F6F6;padding:5px 10px 5px 10px;color: #273746;font-size: 16px;"><?php echo $b_yoni ?></td>
                                            <td style="background:#F4F6F6;padding:5px 10px 5px 10px;color: #273746;font-size: 16px;"><?php echo $g_yoni ?></td>
                                        </tr>
                                        <tr>
                                            <td style="background:#A73922;padding:5px 10px 5px 10px;color: white;font-size: 16px;">Gana</td>
                                            <td style="background:#F4F6F6;padding:5px 10px 5px 10px;color: #273746;font-size: 16px;"><?php echo $b_gana ?></td>
                                            <td style="background:#F4F6F6;padding:5px 10px 5px 10px;color: #273746;font-size: 16px;"><?php echo $g_gana ?></td>
                                        </tr>
                                        <tr>
                                            <td style="background:#A73922;padding:5px 10px 5px 10px;color: white;font-size: 16px;">bhakoot</td>
                                            <td style="background:#F4F6F6;padding:5px 10px 5px 10px;color: #273746;font-size: 16px;"><?php echo $b_bhakoot ?></td>
                                            <td style="background:#F4F6F6;padding:5px 10px 5px 10px;color: #273746;font-size: 16px;"><?php echo $g_bhakoot ?></td>
                                        </tr>
                                        <tr>
                                            <td style="background:#A73922;padding:5px 10px 5px 10px;color: white;font-size: 16px;">Nadi</td>
                                            <td style="background:#F4F6F6;padding:5px 10px 5px 10px;color: #273746;font-size: 16px;"><?php echo $b_nadi ?></td>
                                            <td style="background:#F4F6F6;padding:5px 10px 5px 10px;color: #273746;font-size: 16px;"><?php echo $g_nadi ?></td>
                                        </tr>
                                        <tr>
                                            <td style="background:#A73922;padding:5px 10px 5px 10px;color: white;font-size: 16px;">Nakshatra</td>
                                            <td style="background:#F4F6F6;padding:5px 10px 5px 10px;color: #273746;font-size: 16px;"><?php echo $b_nakshatra ?></td>
                                            <td style="background:#F4F6F6;padding:5px 10px 5px 10px;color: #273746;font-size: 16px;"><?php echo $g_nakshatra ?></td>
                                        </tr>
                                        <tr>
                                            <td style="background:#A73922;padding:5px 10px 5px 10px;color: white;font-size: 16px;">pada</td>
                                            <td style="background:#F4F6F6;padding:5px 10px 5px 10px;color: #273746;font-size: 16px;"><?php echo $b_pada ?></td>
                                            <td style="background:#F4F6F6;padding:5px 10px 5px 10px;color: #273746;font-size: 16px;"><?php echo $g_pada ?></td>
                                        </tr>
                                        <tr>
                                            <td style="background:#A73922;padding:5px 10px 5px 10px;color: white;font-size: 16px;">Rashi</td>
                                            <td style="background:#F4F6F6;padding:5px 10px 5px 10px;color: #273746;font-size: 16px;"><?php echo $b_rashi ?></td>
                                            <td style="background:#F4F6F6;padding:5px 10px 5px 10px;color: #273746;font-size: 16px;"><?php echo $g_rashi ?></td>
                                        </tr>
                                        <tr>
                                            <td style="background:#A73922;padding:5px 10px 5px 10px;color: white;font-size: 16px;">Guna Millan</td>
                                            <td colspan="2" style="background:#F4F6F6;padding:5px 10px 5px 10px;color: #273746;font-size: 16px;"><b><?php echo $guna_milan ?> / 36</b></td>
                                        </tr>
                                        <tr>
                                            <td style="background:#A73922;padding:5px 10px 5px 10px;color: white;font-size: 16px;">Type</td>
                                            <td colspan="2" style="background:#F4F6F6;padding:5px 10px 5px 10px;color: #273746;font-size: 16px;"><b><?php echo $type ?></b></td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" style="background:#A73922;padding:5px 10px 5px 10px;color: white;font-size: 16px;">Message</td>
                                        </tr>
                                        <tr>    
                                            <td colspan="3" style="text-align:justify;padding:5px 10px 5px 10px;color: #273746;font-size: 16px;"><b><?php echo $message ?></b></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>   
                        </div>

                    </div>

                    <br>
                    <div class="alert alert-danger">
                        <strong><i class="fa fa-warning"></i></strong> Please note that, Kundali matching is a software-based facility. Bhagyaroop is not responsible for any inaccuracy in the results. Please consider consulting experts before taking any further decision based on Kundali matching.
                    </div>
                    </center>
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
        $('[data-toggle="tooltip"]').tooltip();   
        });
        </script>

        <script>
            var element = document.getElementById("act2");
            element.classList.add("activated");
        </script>

    </body>
</html>

<?php
ob_end_flush();
?>