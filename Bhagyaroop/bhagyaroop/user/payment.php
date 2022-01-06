<?php
session_start();
ob_start();

include './../../dbconnection.php';

include 'dataview.php';
if(!(isset($_SESSION['user1']))){
    header("location:./../login.php");
}

$email = $_SESSION['user1'];
$plan = $_POST['type'];
$cost = $_POST['price'];

$update = "UPDATE `usertype` SET `type`='$plan' , `status`='' WHERE `email`='$email' ";
$run = mysqli_query($con,$update);
if($run){}else{echo "Error ! ".mysqli_error($con);}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <title>Payment</title>
        <link rel="stylesheet" href="customStyle.css">
        <link rel="stylesheet" href="topStatus.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Alatsi' rel='stylesheet'>
        <link rel="stylesheet" href="./bootstrap-select.css">

        <style>
            body  {
                background-image: url("myimg.jpeg");
                background-size: 100%;
                margin:0px;
                padding:0px;
            }
        </style>	
    </head>

    <body>
        <nav class="custom">
            <img src="./logo.png" height="80" width="300">
            <ul>
                <li><a href="./plan.php">Back</a></li>
                <li><a href="./">Go To Registration</a></li>
                <li><a href="./logout.php">Log Out</a></li>
            </ul>
        </nav>

        <div style="left:clear"></div>


        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <center>
                        <div class="payment">

                            <div style="width:90%;text-align:justify" class="alert alert-success" >
                                <strong>Note !</strong> Please go to registration and upload the payment receipt in upload documents. BhagayRoop will verify all documents and payment receipt then only your account will be activated within 1 or 2 days.
                            </div>
                            <?php 
                            $plan = $_POST['type'];
                            $cost = $_POST['price'];
                            ?>
                            <h2>Amount Payble : <span>&#8377; <?php echo $cost ?></span></h2><br>
                            <span class="pay"><input type="radio" onclick="fun1()" name="pay" checked>&nbsp;Pay by Using Google Pay</span><br>
                            <span class="pay"><input type="radio" onclick="fun2()" name="pay">&nbsp;Pay By Using Bank Details (Net Banking, NEFT etc.)</span>

                            <div class="gpay" id="gpay">
                                <br>
                                <img src="./gpay.png" width="100px" height="auto">
                                <br><br>
                                <img src="./QR.png" width="200px" height="auto"><br>
                                <span style="font-size:24px;font-weight:bold;">OR</span>
                                <br>
                                <span style="font-size:24px;font-weight:bold;">+919175447133</span>
                                <br><br>
                            </div>

                            <div class="bank" id="bank">

                                <table>
                                    <tr>
                                        <td>Bank Name&nbsp;&nbsp;</td>
                                        <td>:&nbsp;&nbsp;<b>Kotak Mahindra Bank</b></td>
                                    </tr>
                                    <tr>
                                        <td>Branch&nbsp;&nbsp;</td>
                                        <td>:&nbsp;&nbsp;<b>Pune Timber Market</b></td>
                                    </tr>
                                    <tr>
                                        <td>Account no&nbsp;&nbsp;</td>
                                        <td>:&nbsp;&nbsp;<b>1345509128</b></td>
                                    </tr>
                                    <tr>
                                        <td>IFSE code&nbsp;&nbsp;</td>
                                        <td>:&nbsp;&nbsp;<b>KKBK0001986</b></td>
                                    </tr>
                                </table>
                            </div>

                        </div>
                        <br><br><br>
                    </center>
                </div>
            </div>
        </div>
        

        

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        
        <script src="step.js"></script>
        <script src="hide.js"></script>
        <script src="save.js"></script>
        <script src="saveDefult.js"></script>
        <script src="validate.js"></script>
        <script>
            var comp1 = document.getElementById("gpay");
            var comp2 = document.getElementById("bank");
            var status = document.getElementById('p');
            comp2.style.display = "none";

            function fun2(){
                comp1.style.display = "none";
                comp2.style.display = "block";
            }
            function fun1(){
                comp2.style.display = "none";
                comp1.style.display = "block";
            }

        </script>

    </body>
</html>
<?php
if(isset($_GET['a'])){
    echo "<script> alert('Data Submitted Successfully !'); </script>";
}
ob_end_flush();
?>

