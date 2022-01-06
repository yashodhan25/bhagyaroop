<?php
session_start();
ob_start();
include './../../../dbconnection.php';
include 'dataview.php';

if(!(isset($_SESSION['user1']))){
    header("location:./../../login.php");
}

if(!(isset($_POST['type']))){
    header("location:./plan.php");
}

$myEmail = $_SESSION['user1'];

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Premium Plan</title>
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
        .tested{
            color:#58EB09;
        }
        .cross{
            color:red;
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
                    <center>
                        <div class="payment">

                            <div style="width:90%;text-align:justify" class="alert alert-success" >
                                <strong>Note !</strong>&nbsp;Plan change in your account will be reflected within 1 or 2 days.
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
                                <img src="./../gpay.png" width="100px" height="auto">
                                <br><br>
                                <img src="./../QR.png" width="200px" height="auto"><br>
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

                            <div class="fileName">
                                <form action="" method="POST" enctype="multipart/form-data">
                                    <label class="custom-file-upload">
                                        <input type="hidden" name="paymentCost">
                                        <input type="hidden" name="price" value="<?php echo $cost; ?>">
                                        <input type="hidden" name="type" value="<?php echo $plan; ?>">
                                        <input class="file" type="file" id="addreessProof" name="receipt" accept=".pdf, .jpeg, .jpg, .png">
                                        Upload Payment Receipt
                                    </label><br>
                                    <span id="addreessProofName"></span><br>
                                    <input type="submit" value="Update">
                                </form>
                            </div>

                        </div>
                        <br><br>
                    </center>
                </div>
            </div>
        </div>

        <br><br>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/js/bootstrap-select.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <script src="./custom.js"></script>

        <script>
            var element = document.getElementById("active6");
            element.classList.add("active");
        </script>

        <script>
            $("#addreessProof").change(function(){
                $("#addreessProofName").text(this.files[0].name);
            });
        </script>

        <script>
        $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();   
        });
        </script>

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
if(isset($_POST['paymentCost'])){
    $paymentCost = $_POST['price'];
    $premiumPlan = $_POST['type'];
    $pfile_name = $_FILES['receipt']['name']; // get file name

    if($pfile_name == null){
        ?>
        <script>alert("Please Upload Payment Receipt !")</script>
        <?php
    }else{
        // Move to Folder
        $file_source_location = $_FILES['receipt']['tmp_name']; // get source path
        $file_target_location = "./../documents/$pfile_name"; // target location
        $move = move_uploaded_file($file_source_location,$file_target_location); //(temp folder,"Path");

        $updatePlan = "UPDATE `updated` SET `CP`='change',`PN`='$premiumPlan' WHERE `email`='$myEmail' ";
        $updatePlanExecute = mysqli_query($con, $updatePlan);

        $updateExistingFile = "UPDATE `upload` SET `file11`='$pfile_name' WHERE `semail`='$myEmail' "; 
        $updateExistingFileExecute = mysqli_query($con,$updateExistingFile);

        if($updatePlanExecute == true){
            ?>
            <script>
                alert("Status Updated Successfully !");
            </script>
            <?php
        }
    }
}
ob_end_flush();
?>