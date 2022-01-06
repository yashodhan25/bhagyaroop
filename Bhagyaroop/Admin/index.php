<!DOCTYPE html>
<html>
    <head>
        <title>Admin Login</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <link href='https://fonts.googleapis.com/css?family=Adamina' rel='stylesheet'>
        <link href="./css/custom.css" rel="stylesheet">
    </head>
    <body>
        <center>
            <div class="container">
                <div class="row">
                <div class="col-md-12">
                    <div class="form-content">
                        
                            <div class="head">
                                <span>Admin Log In</span>
                            </div>
                            <form action="./auth.php" method="POST">
                                <ul>
                                    <li><input type="text" name="username" placeholder="Username" required></li>
                                    <li><input type="password" name="password" placeholder="Password" required></li>
                                    <li><input type="submit" value="Log In"></li>
                                </ul>
                            </form>
                        
                    </div>
                </div>
                </div>
            </div>
        </center>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    </body>
</html>

<?php
if(isset($_GET['a'])){
    ?>
    <script>alert('Invalid Username OR Password')</script>
    <?php
}
?>