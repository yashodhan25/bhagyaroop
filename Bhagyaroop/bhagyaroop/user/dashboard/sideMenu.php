<?php
$viewPhoto = mysqli_query($con,"SELECT * FROM `profilepicture` WHERE `email` = '$myEmail' ");
$rowGet = mysqli_num_rows($viewPhoto);
for($i=1; $i<=$rowGet; $i++){
    $dataGet = mysqli_fetch_assoc($viewPhoto);
    $profilepicture = $dataGet['profilepicture'];
}


$check = mysqli_query($con,"SELECT * FROM `usertype` WHERE `email` = '$myEmail' ");
$found = mysqli_num_rows($view);

for($z=1; $z<=$found; $z++){
    $data = mysqli_fetch_assoc($check);    
    $profileStatus = $data['type'];
    $plan = $data['type'];
    $validityDate = $data['payDate'];
}

$validityYear = substr($validityDate, 0, 4);
$validityMonth = substr($validityDate, 5, 2);
$validityDay = substr($validityDate, 8, 2);
$planused = floor(date("m")-$validityMonth);

?>

<style>
    .peopleProfile progress{
        display:inline-block;
        height:20px;
        padding:25px 0 0 0;
        margin:0;
        background:none;
        border: 0;
        border-radius: 15px;
        text-align: left;
        position:relative;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 22px;
    }

    progress::-webkit-progress-bar {
        height:22px;
        width:100%;
        margin:0 auto;
        background-color: #ECF0F1;
        border-radius: 15px;
        box-shadow:0px 0px 6px #FDFEFE inset;
    }

    .peopleProfile progress::-webkit-progress-value {
        display:inline-block;
        height:22px;
        margin:0px 0px 30px 0;
        <?php
        if($planused >= 9){
            ?>
            background: #F9360A;
            <?php
        }
        if($planused >=5 && $planused < 9){
            ?>
            background: #EDF012;
            <?php
        }
        else{
            ?>
            background: #73C610;
            <?php
        }
        ?>
        border-radius: 15px;
    }
</style>

<div class="peopleProfile">
    <center>
        <progress id="file" value="<?php echo $planused; ?>" min="1" max="12"></progress>
        <h5>Your Plan Valid till 
            <?php
            echo $validityDay."-".$validityMonth."-".floor($validityYear+1);
            ?>
        </h5>
        <?php
        
        // Pop up
        if(floor($validityYear+1) == date("Y") ){
            if($planused > 10){
                ?>
                <script>alert("Your Plan Expiring Soon !");</script>
                <?php
            }
        }
        ?>
    </center>
</div>

<br>

<div class="peopleProfile">
    <center>
    <div class="plan">
        <?php
        if($profilepicture == ""){
            ?>
            <img src="./profile photo/sample.jpg">
            <?php
        }else{
            ?>
            <img src="./profile photo/<?php echo $profilepicture ?>">
            <?php
        }
        ?>
        <a href="./profilePicture.php"><button>Update Profile Picture</button></a>
    </div>
    </center>
</div>

<?php
if($plan != 'Silver'){
    ?>
    <div class="myActivity" style="margin-top: 20px;">
        <div class="filterHead"><span>Profile Settings</span></div>
        <ul class="actionMenu">
            <li><a href="./hsphoto.php" id="act1">Hide/Show Photos</a></li>
            <li><a href="./hscontact.php" id="act2">Hide/Show Contact Details</a></li>
        </ul>
    </div>
    <?php
}

?>

<div class="myActivity" style="margin-top: 20px;">
    <div class="filterHead"><span>Profile Action</span></div>
    <ul class="actionMenu">
        <li><a href="./myprofile.php" id="act3">Edit Profile</a></li>
        <li><a href="./photo.php" id="act10">Change/Upload Photos</a></li>
        <li><a href="./changepassword.php" id="act4">Change Password</a></li>
        <li><a href="./plan.php" id="act5">Change Plan</a></li>
        <li><a href="./changeAddress.php" id="act6">Update Address</a></li>
        <li><a href="./changeIncome.php" id="act7">Update Income</a></li>
        <li><a href="./changeEdulevel.php" id="act8">Update Educational Level</a></li>
        <li><a href="#" id="act9">Deactivate Account</a></li>
    </ul>
</div>