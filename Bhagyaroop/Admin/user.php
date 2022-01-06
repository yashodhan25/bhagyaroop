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
              <li class="active"><a href="./user.php">Users</a></li>
              <li class=""><a href="./action.php">User Activation</a></li>
              <li class=""><a href="./updateUser.php">Update User</a></li>
              <li class=""><a href="./block.php">Block User</a></li>
            </ul>

            <a href="logout.php"><button class="logout">Log Out</button></a>

          </div>
        </nav>

        <center>
          <div class="container">
            <div class="row">

              <div class="col-md-12 users">
                <table class="table">
                    <thead>
                      <tr>
                        <td>Sr. No</td>
                        <td>Name</td>
                        <td>Email ID</td>
                        <td>Gender</td>
                        <td>Mobile No</td>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $sr=0;
                      $userData = mysqli_query($con,"SELECT * FROM `users` ORDER BY `createDate` DESC ");
                      $row = mysqli_num_rows($userData);
                      for($x=1; $x<=$row; $x++){
                        $sr+=1;
                        $data1 = mysqli_fetch_assoc($userData);
                        $name = $data1['full_name'];
                        $email = $data1['email'];
                        $gender = $data1['gender'];
                        $mobile = $data1['mobile'];
                        $pid = $data1['PID'];
                        ?>
                        <tr>
                          <td><?php echo $sr ?></td>
                          <td><?php echo $name ?></td>
                          <td><?php echo $email ?></td>
                          <td><?php echo $gender ?></td>
                          <td><?php echo $mobile ?></td>
                        </tr>
                        <?php
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
        
    </body>
</html>


<?php
ob_end_flush();
?>