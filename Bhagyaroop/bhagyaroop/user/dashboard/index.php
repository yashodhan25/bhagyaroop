<?php
session_start();
ob_start();

include './../../../dbconnection.php';
include 'dataview.php';

if(!(isset($_SESSION['user1']))){
    header("location:./../../login.php");
}

$email = $_SESSION['user1'];

if($gender == 'male'){
    $requiredgender = 'female';
}else{
    $requiredgender = 'male';
}

if(!(isset($_GET['page']))){
    header('location:./?page=0');
}

$current_year=date("Y");

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
                <?php
                include 'filterForm.php';
                ?>

                <div class="col-sm-12 col-md-12 col-lg-9">

                    <div class="filterBlock">
                        <div class="row">

                            <?php
                            if(isset($_POST['filterData'])){
                                include 'basicFilter.php';
                                ?>
                                <div class="col-sm-12 col-md-12">
                                    <h2 style="font-size:22px; font-family: 'Adamina'; ">Filter Result : 
                                    <?php
                                    echo $resultFound;
                                    ?>
                                    </h2>
                                </div>
                                <?php
                                $PERSON_COUNT = 0;
                                for($y=0; $y<=$obtainRows; $y++){
                                    $obtainData = mysqli_fetch_assoc($obtain);

                                    if($obtainData !== null){

                                        $fullname = $obtainData['fullname']." ".$obtainData['mname']." ".$obtainData['lname'];
                                        $location = $obtainData['bcity'].", ".$obtainData['bcountry'];
                                        $education = $obtainData['education_level'];
                                        $personcast = $obtainData['caste'];
                                        $birth_year = $obtainData['birth_year'];
                                        $height_people = $obtainData['height'];
                                        $email_people = $obtainData['semail'];
                                        $person_dnd = $obtainData['dnd'];

                                        if($person_dnd == "Any" || strpos("$person_dnd", "$v45") !== false){
                                            $PERSON_COUNT+=1;

                                            // Get Profile ID
                                            $GetPIDQuery = "SELECT * FROM `users` WHERE `email`='$email_people' ";
                                            $GetPID = mysqli_query($con,$GetPIDQuery);
                                            $GetPIDRows = mysqli_num_rows($GetPID);
                                            for($q=1; $q<=$GetPIDRows; $q++){
                                                $GetPIDData = mysqli_fetch_assoc($GetPID);
                                                $PID = $GetPIDData['PID'];
                                            }
        
                                            // Get User Type
                                            $UserTypeQuery = "SELECT * FROM `usertype` WHERE `email`='$email_people' ";
                                            $UserType = mysqli_query($con,$UserTypeQuery);
                                            $UserTypeRows = mysqli_num_rows($UserType);
                                            for($t=1; $t<=$UserTypeRows; $t++){
                                                $UserTypeData = mysqli_fetch_assoc($UserType);
                                                $userType = $UserTypeData['type'];
                                            }
                                            // Profile Photo
                                            $viewPhoto3 = mysqli_query($con,"SELECT * FROM `profilepicture` WHERE `email` = '$email_people' ");
                                            $rowGet3 = mysqli_num_rows($viewPhoto3);
                                            for($mn=1; $mn<=$rowGet3; $mn++){
                                                $dataGet3 = mysqli_fetch_assoc($viewPhoto3);
                                                $profilepicture3 = $dataGet3['profilepicture'];
                                            }
                                            ?>
                                                <div class="col-sm-12 col-md-12 col-lg-6" id="dis_<?php echo $PERSON_COUNT; ?>">
                                                    <div class="filterProfile">
                                                        <table>
                                                            <tr>
                                                                <td>
                                                                    <div class="card">
                                                                        <?php
                                                                        if($profilepicture3 != ""){
                                                                            ?>
                                                                            <img src="./profile photo/<?php echo $profilepicture3 ?>">
                                                                            <?php
                                                                        }else{
                                                                            ?>
                                                                            <img src="./profile photo/sample.jpg">
                                                                            <?php
                                                                        }
                                                                        ?>
                                                                        <span><i class="fa fa-star checked"></i>&nbsp;&nbsp;<?php echo $userType; ?></span>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="profileData">
                                                                        <h4><?php echo $fullname ?></h4>
                                                                        <h5>Profile Id: <?php echo $PID ?></h5>
                                                                        <ul>
                                                                            <li><?php echo $location ?></li>
                                                                            <li><?php echo $education ?></li>
                                                                            <li>Age: <?php echo date("Y")-$birth_year ?> Years</li>
                                                                            <li>Height: <?php echo $height_people." cm, ".round($height_people/30.48,1)." ft" ?></li>
                                                                            <li>Caste: <?php echo $personcast ?></li>
                                                                        </ul>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr><td colspan="2" style="padding-top: 18px;text-align: center;"><a href="./profile.php?email=<?php echo $email_people; ?>">View Profile</a></td></tr>
                                                        </table>
                                                    </div>
                                                </div>

                                            <?php
                                        }

                                    }

                                }
                            }else{
                                /* ---------------------------------------------------------------------------------------------------------- */

                                // Query for Basic Search

                                $filterFoundRows = mysqli_num_rows(mysqli_query($con," SELECT * FROM `bhagyaroop_signup` WHERE `payment_status`='paid' AND `gender`='$requiredgender' AND `mar_stat` IN ('Never Married') " ));
                                $first = (8 * $_GET['page']);
                                $second = $first + 7;

                                $filterQuery = "SELECT * FROM `bhagyaroop_signup` 
                                                
                                                WHERE 
                                                
                                                `payment_status`='paid' 
                                                AND `gender`='$requiredgender' 
                                                AND `mar_stat` IN ('Never Married')
                                                AND `dnd` LIKE '%$v45%'
                                                
                                                LIMIT $first, 8 ";

                                $obtain = mysqli_query($con,$filterQuery);
                                $obtainRows = mysqli_num_rows($obtain);

                                if($obtainRows != 0){

                                    for($y=$first; $y<= $second; $y++){
                                        $obtainData = mysqli_fetch_assoc($obtain);

                                        if($obtainData !== null){
                                            $fullname = $obtainData['fullname']." ".$obtainData['mname']." ".$obtainData['lname'];
                                            $location = $obtainData['bcity'].", ".$obtainData['bcountry'];
                                            $education = $obtainData['education_level'];
                                            $personcast = $obtainData['caste'];
                                            $birth_year = $obtainData['birth_year'];
                                            $height_people = $obtainData['height'];
                                            $email_people = $obtainData['semail'];
                                            $person_dnd = $obtainData['dnd'];

                                            // Get Profile ID
                                            $GetPIDQuery = "SELECT * FROM `users` WHERE `email`='$email_people' ";
                                            $GetPID = mysqli_query($con,$GetPIDQuery);
                                            $GetPIDRows = mysqli_num_rows($GetPID);
                                            for($q=1; $q<=$GetPIDRows; $q++){
                                                $GetPIDData = mysqli_fetch_assoc($GetPID);
                                                $PID = $GetPIDData['PID'];
                                            }
                                            
                                            // Get User Type
                                            $UserTypeQuery = "SELECT * FROM `usertype` WHERE `email`='$email_people' ";
                                            $UserType = mysqli_query($con,$UserTypeQuery);
                                            $UserTypeRows = mysqli_num_rows($UserType);
                                            for($t=1; $t<=$UserTypeRows; $t++){
                                                $UserTypeData = mysqli_fetch_assoc($UserType);
                                                $userType = $UserTypeData['type'];
                                            }

                                            // Profile Photo
                                            $viewPhoto3 = mysqli_query($con,"SELECT * FROM `profilepicture` WHERE `email` = '$email_people' ");
                                            $rowGet3 = mysqli_num_rows($viewPhoto3);
                                            for($mn=1; $mn<=$rowGet3; $mn++){
                                                $dataGet3 = mysqli_fetch_assoc($viewPhoto3);
                                                $profilepicture3 = $dataGet3['profilepicture'];
                                            }

                                            ?>

                                            <div class="col-sm-12 col-md-12 col-lg-6">
                                                <div class="filterProfile">
                                                    <table>
                                                        <tr>
                                                            <td>
                                                                <div class="card">
                                                                    <?php
                                                                    if($profilepicture3 != ""){
                                                                        ?>
                                                                        <img src="./profile photo/<?php echo $profilepicture3 ?>">
                                                                        <?php
                                                                    }else{
                                                                        ?>
                                                                        <img src="./profile photo/sample.jpg">
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                    <span><i class="fa fa-star checked"></i>&nbsp;&nbsp;<?php echo $userType; ?></span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="profileData">
                                                                    <h4><?php echo $fullname ?></h4>
                                                                    <h5>Profile Id: <?php echo $PID ?></h5>
                                                                    <ul>
                                                                        <li><?php echo $location ?></li>
                                                                        <li><?php echo $education ?></li>
                                                                        <li>Age: <?php echo $current_year-$birth_year; ?> Years</li>
                                                                        <li>Height: <?php echo $height_people." cm, ".round($height_people/30.48,1)." ft" ?></li>
                                                                        <li>Caste: <?php echo $personcast ?></li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr><td colspan="2" style="padding-top: 18px;text-align: center;"><a href="./profile.php?email=<?php echo $email_people; ?>">View Profile</a></td></tr>
                                                    </table>
                                                </div>
                                            </div>

                                            <?php 
                                        }

                                    }   

                                }else{
                                    ?>
                                    <h2 style="font-size:18px; font-family: 'Adamina'; ">No People Found Related to Your Profile</h2>
                                    <?php
                                }

                                /* ---------------------------------------------------------------------------------------------------------- */
                            }
                            ?>

                        </div>
                    </div>

                    <?php
                    if(!(isset($_POST['AdvanceSearch'])) && !(isset($_POST['filterData'])) ){
                        ?>
                        <center>
                            <?php
                            if($filterFoundRows > 8){
                                $count = ($filterFoundRows/8);
                                $count = round($count);
                                ?>
                                <div class="pagination">
                                    <?php
                                    for($x = 0; $x < $count; $x++){
                                    ?>
                                    <a id="p<?php echo $x; ?>" href="./?page=<?php echo $x; ?>"><?php echo $x+1; ?></a>
                                    <?php
                                    }
                                    ?>
                                </div>
                                <?php   
                            }
                            ?>                            
                        </center>
                        <?php
                    }else{
                        if($resultFound > 2){
                            ?>
                            <center>
                                <div class="pagination">

                                
                                <?php
                                // Obtain Pagination
                                $ref = ($resultFound) / 2;
                                $ref = round($ref);
                                for($id = 1; $id <= $ref; $id++){
                                    ?>
                                    <a href="javascript:void(0);" id="act_<?php echo $id; ?>" onclick="display<?php echo $id ?>()">
                                    <?php echo $id; ?>
                                    </a>
                                    <?php
                                }
                                ?>
                                

                                <?php
                                for($fun = 1; $fun <= $ref; $fun++){
                                    ?>
                                    <script>
                                        function display<?php echo $fun ?>(){

                                            
                                            <?php
                                            // Show Active Route
                                            $refActiveRoute = $ref;       
                                            for($active=1; $active<=$refActiveRoute; $active++){
                                                if($fun == $active){
                                                    ?>
                                                    document.getElementById("act_<?php echo $active; ?>").style.background = "#BD442B";
                                                    document.getElementById("act_<?php echo $active; ?>").style.color = "white";
                                                    document.getElementById("act_<?php echo $active; ?>").style.textDecoration = "none";
                                                    <?php
                                                }else{
                                                    ?>
                                                    document.getElementById("act_<?php echo $active; ?>").style.background = "#751e1e";
                                                    <?php
                                                }
                                            }
                                            ?>

                                            <?php
                                            // Dynamic Pagination
                                            $refArray = array();
                                            for($result=1; $result<=($fun*2); $result++){
                                                array_push($refArray,"$result");
                                            }
                                            $refValue = $result-1;
                                            if($refValue>2){   
                                                $block = $refValue-2;
                                                for($dataDisplayNone=1;$dataDisplayNone<=($refValue-2) ; $dataDisplayNone++ ){
                                                    ?>
                                                    document.getElementById("dis_<?php echo $dataDisplayNone; ?>").style.display = "none";
                                                    <?php
                                                }
                                                for($dataDisplay=$block+1;$dataDisplay<=$refValue ; $dataDisplay++ ){
                                                    ?>
                                                    document.getElementById("dis_<?php echo $dataDisplay; ?>").style.display = "block";
                                                    <?php
                                                }
                                                for($dataDisplayNone=$refValue+1;$dataDisplayNone<=$resultFound ; $dataDisplayNone++ ){
                                                    ?>
                                                    document.getElementById("dis_<?php echo $dataDisplayNone; ?>").style.display = "none";
                                                    <?php
                                                }
                                            }else{
                                                for($dataDisplay=1;$dataDisplay<=$refValue ; $dataDisplay++ ){
                                                    ?>
                                                    document.getElementById("dis_<?php echo $dataDisplay; ?>").style.display = "block";
                                                    <?php
                                                }
                                                for($dataDisplayNone=3;$dataDisplayNone<=$resultFound ; $dataDisplayNone++ ){
                                                    ?>
                                                    document.getElementById("dis_<?php echo $dataDisplayNone; ?>").style.display = "none";
                                                    <?php
                                                }
                                            }
                                            ?>
                                            

                                            
                                        }
                                        document.getElementById("act_1").style.background = "#BD442B";
                                    </script>
                                    <?php
                                }
                                ?>
                                <?php
                                for($display=3; $display<=$resultFound; $display++ ){
                                    ?>
                                    <script>
                                        document.getElementById("dis_<?php echo $display; ?>").style.display = "none";
                                    </script>
                                    <?php
                                }
                                ?>
                                </div>
                            </center>
                            <?php
                        }
                    }
                    ?>

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
        var element = document.getElementById("p<?php echo $_GET['page'] ?>");
        element.style.background = "#BD442B"
        </script>

        <script>
            function myCustom(){
                var anyCheck = document.getElementById("anyCheck");
                var hiddenSometime = document.getElementById("hiddenSometime");

                if(anyCheck.checked == true){
                    hiddenSometime.style.display = "none";
                }else{
                    hiddenSometime.style.display = "block";
                }
            }
        </script>

        <script>
            document.getElementById('Advance_search').style.display = "none";
            function advance(){
                var status = document.getElementById('AdvanceSearch');
                if(status.checked == true){
                    document.getElementById('Advance_search').style.display = "block";
                }else{
                    document.getElementById('Advance_search').style.display = "none";
                }
            }
        </script>

        <script>
            var element = document.getElementById("active1");
            element.classList.add("active");
        </script>

        <script>
            function clearAll(){
                var url = "./";
                window.location = url;
            }
        </script>

    </body>
</html>

<?php
if(isset($_GET['responce'])){

    if($_GET['responce'] == 1){
        ?>
        <script>alert("Interest Accepted !");</script>
        <?php
    }else if($_GET['responce'] == 2){
        ?>
        <script>alert("Interest Declined !");</script>
        <?php
    }
    else if($_GET['responce'] == 3){
        ?>
        <script>alert("Interest Withdrawalled !");</script>
        <?php
    }
    else if($_GET['responce'] == 4){
        ?>
        <script>alert("Reminder Send !");</script>
        <?php
    }

}
if(isset($_GET['deleted'])){
    ?>
    <script>alert("Notification Removed !");</script>
    <?php
}

ob_end_flush();
?>