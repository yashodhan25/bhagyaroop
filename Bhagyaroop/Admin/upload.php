<?php
include './../dbconnection.php';
session_start();
include 'dataview.php';
ob_start();
if(!(isset($_SESSION['passAdmin']))){
  header("location:./");
}

$email = $_GET['email'];

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Upload Documents</title>
        <!-- CSS only -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link href='https://fonts.googleapis.com/css?family=Adamina' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="./css/custom.css" rel="stylesheet">
    </head>
    <body>

        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="#">Bhagyaroop Admin</a>
            </div>
            <ul class="nav navbar-nav">
              <li class="active"><a href="action.php">Users</a></li>
            </ul>

            <a href="logout.php"><button class="logout">Log Out</button></a>

          </div>
        </nav>

        <center>
          <div class="container">
            <div class="row">
              
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="action">
                  <div class="myForm">

                  <a href="./detail.php?email=<?php echo $email ?>" ><button>Back</button></a>
                      <div class="document">
                        <form action="success.php" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="email" value="<?php echo $email; ?>">
                            <ul>
                                <li class="head1"><label>Educational Qualification Certificate</label></li>
                                <li><input type="file" name="fileToUpload1" accept=".pdf"></li>
                                <li class="head1"><label>Identity Proof *</label></li>
                                <li><input type="file" name="fileToUpload2" accept=".pdf, .jpg, .jpeg, .png " required></li>
                                <li class="head1"><label>Income Proof </label></li>
                                <li><input type="file" name="fileToUpload3" accept=".pdf"></li>
                                <li class="head1"><label>Address Proof *</label></li>
                                <li><input type="file" name="fileToUpload4" accept=".pdf" required></li>
                                <?php
                                if($v8 == "Widow/Widower"){
                                  ?>
                                  <li class="head1"><label>Death Certificate *</label></li>
                                  <li><input type="file" name="fileToUpload5" accept=".pdf" required></li>
                                  <?php
                                }
                                if($v8 == "Awating Divorce / Legally Separated" || $v8 == "Divorced"){
                                    ?>
                                    <li class="head1"><label>Divorce Decree OR (Case Filling Paper In Case of Awating Divorce / Legally Separated) *</label></li>
                                    <li><input type="file" name="fileToUpload6" accept=".pdf" required></li>
                                    <?php
                                }
                                ?>
                                <li><input type="submit" value="Upload"></li>
                            </ul>
                        </form>
                      </div>

                  <div>
                </div>
                <br><br>
              </div>

            </div>
          </div>
        </center>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script>
          $(document).ready(function()
          {
              $("#statelist").keyup(function()
              {
              $.ajax({
                  type: "POST",
                  url: "./autocomplete-search.php",
                  data:'keyword='+$(this).val(),
                  success: function(data){
                  $("#suggesstion-box").show();
                  $("#suggesstion-box").html(data);
                  }
              });
              });
          });
          function selectState(val) 
          {
              $("#statelist").val(val);
              $("#suggesstion-box").hide();
          }
      </script>
      
      


        <script>
          function myFun(){
            document.getElementById("myModel").style.display = "none";
          }
        </script>

    </body>
</html>



<?php
if(isset($_GET['a'])){
    echo "<script> alert('Document Uploaded Successfully !'); </script>";
}
ob_end_flush();
?>