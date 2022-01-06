<?php
include './../dbconnection.php';
session_start();
ob_start();

if(!(isset($_SESSION['passAdmin']))){
  header("location:./");
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Action</title>
        <!-- CSS only -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link href='https://fonts.googleapis.com/css?family=Adamina' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="./css/custom.css" rel="stylesheet">
        <style>
          .tested{
                color:#58EB09;
            }
            .cross{
                color:red;
            }
        </style>
    </head>
    <body>

        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="#">Bhagyaroop Admin</a>
            </div>

            <ul class="nav navbar-nav">
              <li class=""><a href="./user.php">Users</a></li>
              <li class="active"><a href="./action.php">User Activation</a></li>
              <li class=""><a href="./updateUser.php">Update User</a></li>
              <li class=""><a href="./block.php">Block User</a></li>
            </ul>

            <a href="logout.php"><button class="logout">Log Out</button></a>

          </div>
        </nav>

        <center>
          <div class="container">
            <div class="row">
              
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <form class="example" action="./detail.php" method="GET">
                  <input type="text" placeholder="Search User By Name OR Profile ID" id="statelist" name="email" value="">
                  <button type="submit"><i class="fa fa-search"></i></button>
                </form>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              
              <div id="suggesstion-box"></div>
              <br>
              </div>

              <div class="col-md-12 users">
                <table class="table">
                  <thead>
                    <tr>
                      <td>Sr. No</td>
                      <td>Name</td>
                      <td>Email ID</td>
                      <td>Gender</td>
                      <td>Date of Registration</td>
                      <td>Document Sent On</td>
                      <td>Document Verification</td>
                      <td>Profile Id</td>
                      <td>Action</td>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    
                    $userData = mysqli_query($con,"SELECT * FROM `users` ORDER BY `createDate` DESC ");
                    $row = mysqli_num_rows($userData);
                    $sr=0;
                    for($i=1; $i<=$row; $i++){
                      $data = mysqli_fetch_assoc($userData);
                      $name = $data['full_name'];
                      $email = $data['email'];
                      $gender = $data['gender'];
                      $date = $data['createDate'];

                      
                      $view = mysqli_query($con,"SELECT * FROM `upload` WHERE `semail` = '$email' ");
                      $row1 = mysqli_num_rows($view);
                      for($x=1; $x<=$row1; $x++){
                        $data1 = mysqli_fetch_assoc($view);
                        $educational_qualification=$data1['file1'];
                        $payment=$data1['file11'];
                      }

                      if($payment == ''){
                      }else{
                        
                        if($educational_qualification == ''){
                          $sent = 'Email' ;
                        }else{
                          $sent = 'Website' ;
                        }


                        $check = mysqli_query($con,"SELECT * FROM `usertype` WHERE `email` = '$email' ");
                        $found = mysqli_num_rows($check);
                        for($z=1; $z<=$found; $z++){
                            $data = mysqli_fetch_assoc($check);    
                            $profileStatus = $data['type'];
                            $status = $data['status'];
                        }

                        $checkPID = mysqli_query($con,"SELECT * FROM `users` WHERE `email` = '$email' ");
                        $foundPid = mysqli_num_rows($checkPID);
                        for($q=1; $q<=$foundPid; $q++){
                          $dataP = mysqli_fetch_assoc($checkPID);    
                          $profileID = $dataP['PID'];
                        }
                        $sr+=1;
                        ?>
                        <tr id="<?php echo "display_".$sr; ?>">
                          <td><?php echo $sr ?></td>
                          <td><?php echo $name ?></td>
                          <td><?php echo $email ?></td>
                          <td><?php echo $gender ?></td>
                          <td><?php echo $date ?></td>
                          <td><?php echo $sent ?></td>
                          <td><?php if($status == 'paid' ){
                            ?>
                            <i class="fa fa-check tested"></i>
                            <?php
                          }else{
                            ?>
                            <i class="fa fa-close cross"></i>
                            <?php
                          } 
                          ?>
                          </td>
                          <td><?php if($profileID == '' ){
                            ?>
                            Pending
                            <?php
                          }else{
                            echo $profileID;
                          } 
                          ?>
                          </td>
                          <td><a href="detail.php?email=<?php echo $email; ?>"><button>View Details</button></a></td>
                        </tr>
                        <?php
                      }
                    }
                    ?>
                  </tbody>
                </table>
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
    </body>
</html>


<?php
ob_end_flush();
?>