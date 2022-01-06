<?php
session_start();
ob_start();
include './../../dbconnection.php';

include 'dataview.php';

if(!(isset($_SESSION['user1']))){
    header("location:./../login.php");
}

$profile_type = $v8;
$last_para = $v100;

$check = mysqli_query($con,"SELECT * FROM `usertype` WHERE `email` = '$email' ");
$found = mysqli_num_rows($view);

for($z=1; $z<=$found; $z++){
    $data = mysqli_fetch_assoc($check);    
    $profileStatus=$data['type'];
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <title>Document Uploads</title>

        <link rel="icon" href="./../logo.png" type="image/x-icon">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Amethysta' rel='stylesheet'>

        <link rel="stylesheet" href="customStyle.css">

        <link href="./../../assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="./../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="./../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="./../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="./../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
        <link href="./../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
        <link href="./../../assets/css/style.css" rel="stylesheet">

        <style>
            body  {
                background-image: url("myimg.jpeg");
                background-size: 100%;
            }
        </style>	
    </head>

    <body>

        <?php include "header1.php"; ?> 

        <!-- Registration Form -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <center>
                        <div class="myform">

                            <?php
                            if($last_para == ""){
                                ?>
                                <div class="alert alert-danger" role="alert">
                                <i class='fas fa-exclamation-triangle'></i>
                                &nbsp;&nbsp;
                                Please Complete All Fields of <strong>Registration</strong>
                                </div>
                                <?php
                            }else{
                                ?>
                                <p>You should have to submit following documents in PDF format only</p>
                                
                                <ol>
                                    <li>Educational Qualification Certificates ( Diploma Certificate /  Degree Certificate etc.)</li>
                                    <li>Identity Proof ( Adhar card / Pan card / Passport / Driving License etc. )</li>
                                    <li>Income Proof ( Salary Slip / Payment Slip /  Balance Sheet in case of Business etc. )</li>
                                    <li>Address Proof ( Utility bill like Electricity / Gas / Telephone / Passport / Driving license etc. )</li>
                                </ol>

                                <div class="form-cont">
                                    <br><label style="font-size: 22px;font-family: 'Amethysta';"><input type="checkbox" style="height: 22px;width: 22px;" onclick="verifyDoc()" id="tc" >&nbsp;&nbsp;Do you want to send above documents by email ?<label>
                                        
                                    <form action="upload.php" method="POST" enctype="multipart/form-data" name="myform" id="docForm1">
                                        OR
                                        <br>
                                        <label style="color:green;font-size:24px;">You may  upload the above documents here below <b>&#128071;</b></label>
                                        <ul>
                                            <li class="head1"><label>Payment Receipt *</label></li>
                                            <li><input type="file" name="fileToUpload11" accept=".pdf, .jpg, .jpeg, .png" required></li>
                                            <li class="head1"><label>Educational Qualification Certificate</label></li>
                                            <li><input type="file" name="fileToUpload1" accept=".pdf"></li>
                                            <li class="head1"><label>Identity Proof *</label></li>
                                            <li><input type="file" name="fileToUpload2" accept=".pdf, .jpg, .jpeg, .png " required></li>
                                            <li class="head1"><label>Income Proof </label></li>
                                            <li><input type="file" name="fileToUpload3" accept=".pdf"></li>
                                            <li class="head1"><label>Address Proof *</label></li>
                                            <li><input type="file" name="fileToUpload4" accept=".pdf" required></li>
                                            <li class="head1"><label>Kundali (Lagna Kundali Only)</label></li>
                                            <li><input type="file" name="fileToUpload5" accept=".pdf, .jpg, .jpeg, .png"></li>
                                            
                                            
                                            <?php
                                            if($profile_type == "Widow/Widower"){
                                                ?>
                                                <li class="head1"><label>Death Certificate *</label></li>
                                                <li><input type="file" name="fileToUpload9" accept=".pdf" required></li>
                                                <?php
                                            }
                                            if($profile_type == "Awating Divorce / Legally Separated" || $profile_type == "Divorced"){
                                                ?>
                                                <li class="head1"><label>Divorce Decree OR (Case Filling Paper In Case of Awating Divorce / Legally Separated) *</label></li>
                                                <li><input type="file" name="fileToUpload10" accept=".pdf" required></li>
                                                <?php
                                            }
                                            ?>

                                            <li class="head1"><label>Upload Your Photos (Photos should be clear, front facing with good background, full height cover) *</label></li>
                                            <div class="row">
                                                <div class="col-sm-12 col-md-12 col-lg-4"><li><input type="file" name="fileToUpload6" id="addreessProof1" accept=".jpg, .jpeg, .png" required></li></div>
                                                <div class="col-sm-12 col-md-12 col-lg-4"><li><input type="file" name="fileToUpload7" id="addreessProof2" accept=".jpg, .jpeg, .png"></li></div>
                                                <div class="col-sm-12 col-md-12 col-lg-4"><li><input type="file" name="fileToUpload8" id="addreessProof3" accept=".jpg, .jpeg, .png"></li></div>
                                                <?php
                                                if($profileStatus == "Gold"){
                                                    ?>
                                                    <div class="col-sm-12 col-md-12 col-lg-4"><li><input type="file" name="fileToUpload12" id="addreessProof4" accept=".jpg, .jpeg, .png" ></li></div>
                                                    <div class="col-sm-12 col-md-12 col-lg-4"><li><input type="file" name="fileToUpload13" id="addreessProof5" accept=".jpg, .jpeg, .png" ></li></div>
                                                    <?php
                                                }
                                                if($profileStatus == "Diamond"){
                                                    ?>
                                                    <div class="col-sm-12 col-md-12 col-lg-4"><li><input type="file" name="fileToUpload12" id="addreessProof4" accept=".jpg, .jpeg, .png" ></li></div>
                                                    <div class="col-sm-12 col-md-12 col-lg-4"><li><input type="file" name="fileToUpload13" id="addreessProof5" accept=".jpg, .jpeg, .png" ></li></div>
                                                    <div class="col-sm-12 col-md-12 col-lg-4"><li><input type="file" name="fileToUpload14" id="addreessProof6" accept=".jpg, .jpeg, .png" ></li></div>
                                                    <div class="col-sm-12 col-md-12 col-lg-4"><li><input type="file" name="fileToUpload15" id="addreessProof7" accept=".jpg, .jpeg, .png" ></li></div>
                                                    <?php
                                                }
                                                ?>
                                            </div>

                                            <li><input type="submit" value="Upload"></li>
                                        </ul>
                                    </form>

                                    <form action="./upload.php" method="POST" enctype="multipart/form-data" name="myform" id="docForm2">
                                        <label style="color:green;font-size:18px;">You can send documents to <b><i class="fa fa-envelope"></i>&nbsp;contact@bhagyaroop.com</b></label>
                                        <label style="color:red;font-size:18px;">You have to upload Payment Receipt and Photos here only</label>
                                        <ul>
                                            <li class="head1"><label>Payment Receipt *</label></li>
                                            <li><input type="file" name="fileToUpload11" accept=".pdf, .jpg, .jpeg, .png" required></li>
                                            <li class="head1"><label>Upload Your Photos (Photos should be clear, front facing with good background, full height cover) *</label></li>
                                            <li><input type="file" name="fileToUpload6" id="addreessProofEx1" accept=".jpg, .jpeg, .png" required></li>
                                            <li><input type="file" name="fileToUpload7" id="addreessProofEx2" accept=".jpg, .jpeg, .png" ></li>
                                            <li><input type="file" name="fileToUpload8" id="addreessProofEx3" accept=".jpg, .jpeg, .png" ></li>
                                            <?php
                                            if($profileStatus == "Gold"){
                                                ?>
                                                <li><input type="file" name="fileToUpload12" id="addreessProofEx4" accept=".jpg, .jpeg, .png" ></li>
                                                <li><input type="file" name="fileToUpload13" id="addreessProofEx5" accept=".jpg, .jpeg, .png" ></li>
                                                <?php
                                            }
                                            if($profileStatus == "Diamond"){
                                                ?>
                                                <li><input type="file" name="fileToUpload12" id="addreessProofEx4" accept=".jpg, .jpeg, .png" ></li>
                                                <li><input type="file" name="fileToUpload13" id="addreessProofEx5" accept=".jpg, .jpeg, .png" ></li>
                                                <li><input type="file" name="fileToUpload14" id="addreessProofEx6" accept=".jpg, .jpeg, .png" ></li>
                                                <li><input type="file" name="fileToUpload15" id="addreessProofEx7" accept=".jpg, .jpeg, .png" ></li>
                                                <?php
                                            }
                                            ?>
                                            <li><input type="submit" value="Upload"></li>
                                        </ul>
                                    </form>

                                </div>

                                <?php
                            }
                            ?>
                            
                        </div>
                    </center>
                </div>
            </div>
        </div>



        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        
        <script>
            $("#addreessProof1").change(function(){
                if(this.files[0].size > 2000000) 
                {
                    alert("File size must be less than 2 MB !");
                    $("#addreessProof1").val("");
                }
            });

            $("#addreessProof2").change(function(){
                if(this.files[0].size > 2000000) 
                {
                    alert("File size must be less than 2 MB !");
                    $("#addreessProof2").val("");
                }
            });

            $("#addreessProof3").change(function(){
                if(this.files[0].size > 2000000) 
                {
                    alert("File size must be less than 2 MB !");
                    $("#addreessProof3").val("");
                }
            });

            $("#addreessProof4").change(function(){
                if(this.files[0].size > 2000000) 
                {
                    alert("File size must be less than 2 MB !");
                    $("#addreessProof4").val("");
                }
            });

            $("#addreessProof5").change(function(){
                if(this.files[0].size > 2000000) 
                {
                    alert("File size must be less than 2 MB !");
                    $("#addreessProof5").val("");
                }
            });

            $("#addreessProof6").change(function(){
                if(this.files[0].size > 2000000) 
                {
                    alert("File size must be less than 2 MB !");
                    $("#addreessProof6").val("");
                }
            });

            $("#addreessProof7").change(function(){
                if(this.files[0].size > 2000000) 
                {
                    alert("File size must be less than 2 MB !");
                    $("#addreessProof7").val("");
                }
            });
        </script>

        <script>
            $("#addreessProofEx1").change(function(){
                if(this.files[0].size > 2000000) 
                {
                    alert("File size must be less than 2 MB !");
                    $("#addreessProofEx1").val("");
                }
            });

            $("#addreessProofEx2").change(function(){
                if(this.files[0].size > 2000000) 
                {
                    alert("File size must be less than 2 MB !");
                    $("#addreessProofEx2").val("");
                }
            });

            $("#addreessProofEx3").change(function(){
                if(this.files[0].size > 2000000) 
                {
                    alert("File size must be less than 2 MB !");
                    $("#addreessProofEx3").val("");
                }
            });

            $("#addreessProofEx4").change(function(){
                if(this.files[0].size > 2000000) 
                {
                    alert("File size must be less than 2 MB !");
                    $("#addreessProofEx4").val("");
                }
            });

            $("#addreessProofEx5").change(function(){
                if(this.files[0].size > 2000000) 
                {
                    alert("File size must be less than 2 MB !");
                    $("#addreessProofEx5").val("");
                }
            });

            $("#addreessProofEx6").change(function(){
                if(this.files[0].size > 2000000) 
                {
                    alert("File size must be less than 2 MB !");
                    $("#addreessProofEx6").val("");
                }
            });

            $("#addreessProofEx7").change(function(){
                if(this.files[0].size > 2000000) 
                {
                    alert("File size must be less than 2 MB !");
                    $("#addreessProofEx7").val("");
                }
            });
        </script>

        <script>
            document.getElementById('docForm2').style.display = "none";

            function verifyDoc(){
                var status = document.getElementById('tc');
                var form1 = document.getElementById('docForm1');
                var form2 = document.getElementById('docForm2');

                if( status.checked == true ){
                    form1.style.display = "none";
                    form2.style.display = "block";
                }else{
                    form1.style.display = "block";
                    form2.style.display = "none";
                }
            }
        </script>

        <!-- Template Main JS File -->
        <script src="./../../assets/js/main.js"></script>

        <script>
            var element = document.getElementById("active2");
            element.classList.add("activeLink");
        </script>

    </body>
</html>
<?php
if(isset($_GET['a'])){
    echo "<script> alert('Document Uploaded Successfully !'); </script>";
}
ob_end_flush();
?>