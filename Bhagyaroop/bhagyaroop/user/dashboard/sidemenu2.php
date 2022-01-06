<?php

$myEmail = $_SESSION['user1'];

// Get User Type
$UserTypeQuery = "SELECT * FROM `usertype` WHERE `email`='$myEmail' ";
$UserType = mysqli_query($con,$UserTypeQuery);
$UserTypeRows = mysqli_num_rows($UserType);
for($t=1; $t<=$UserTypeRows; $t++){
    $UserTypeData = mysqli_fetch_assoc($UserType);
    $userType = $UserTypeData['type'];
}


// Get Basic Information
$filterQuery = "SELECT * FROM `bhagyaroop_signup` WHERE `semail`='$obtainEmail' ";
$obtain = mysqli_query($con,$filterQuery);
$obtainRows = mysqli_num_rows($obtain);

for($y=1; $y<=$obtainRows; $y++){
    $obtainData = mysqli_fetch_assoc($obtain);
    $fullname = $obtainData['fullname']." ".$obtainData['mname']." ".$obtainData['lname'];
    $location = $obtainData['bcity'].", ".$obtainData['bcountry'];
    $education = $obtainData['education_level'];
    $personcast = $obtainData['caste'];
    $birth_year = $obtainData['birth_year'];
    $height_people = $obtainData['height'];
    $email_people = $obtainData['semail'];
    $person_dnd = $obtainData['dnd'];
}

// Profile Photo
$viewPhoto = mysqli_query($con,"SELECT * FROM `profilepicture` WHERE `email` = '$email_people' ");
$rowGet = mysqli_num_rows($viewPhoto);
for($i=1; $i<=$rowGet; $i++){
    $dataGet = mysqli_fetch_assoc($viewPhoto);
    $profilepicture = $dataGet['profilepicture'];
}

// Get Document Verification Status
$DocumentVerificationQuery = "SELECT * FROM `verify` WHERE `email`='$obtainEmail' ";
$DocumentVerificationExecute = mysqli_query($con,$DocumentVerificationQuery);
$DocumentVerificationRows = mysqli_num_rows($DocumentVerificationExecute);

for($s=1; $s<=$DocumentVerificationRows; $s++){
    $documentData = mysqli_fetch_assoc($DocumentVerificationExecute);
    $educational_certificate = $documentData['file1'];
    $identity_proof = $documentData['file2'];
    $income_proof = $documentData['file3'];
    $address_proof = $documentData['file4'];
    $death_certificate = $documentData['file5'];
    $divorce_certificate = $documentData['file6'];
}

?>

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
        <span><i class="fa fa-star checked"></i>&nbsp;&nbsp;<?php echo $userType ?></span>
    </div>
    <h2 style="padding-left:8px;padding-right:8px;"><?php echo $fullname; ?></h2>
    <h3><b>Height : </b><?php echo $height_people." cm, ".round($height_people/30.48,1)." ft" ?></h3>
    <h3><b>Age : </b><?php echo date("Y")-$birth_year ?> Years</h3>
    <h3><b>Caste : </b><?php echo $personcast ?></h3>
    <h3><?php echo $location ?></h3>

    <?php
    $obtainedRows = "SELECT * FROM `interest` WHERE `senderemail`='$myEmail' AND `receiveremail`='$obtainEmail' ";
    $obtainedRowsExecute = mysqli_query($con, $obtainedRows);
    $finalRows = mysqli_num_rows($obtainedRowsExecute);

    $requestedobtainedRows = "SELECT * FROM `interest` WHERE `senderemail`='$obtainEmail' AND `receiveremail`='$myEmail' ";
    $requestedobtainedRowsExecute = mysqli_query($con, $requestedobtainedRows);
    $requestedfinalRows = mysqli_num_rows($requestedobtainedRowsExecute);

    $notifyobtainedRows = "SELECT * FROM `notification` WHERE `status`= 'accepted' AND `senderemail` IN ('$myEmail','$obtainEmail') AND `receiveremail` IN ('$myEmail','$obtainEmail') ";
    $notifyobtainedRowsExecute = mysqli_query($con, $notifyobtainedRows);
    $notifyfinalRows = mysqli_num_rows($notifyobtainedRowsExecute);

    if($notifyfinalRows != 0){
        ?>
        <label class="blocked">Accepted <i class="fa fa-check"></i></label>
        <?php
    }else{

        if($requestedfinalRows != 0){
            ?>
            <label class="blocked">Interest Requested</label>
            <?php
        }else{
            if($finalRows == 0){
                ?>
                <form action="./sender.php" method="POST">
                    <input type="hidden" name="sender" value="<?php echo $myEmail ?>">
                    <input type="hidden" name="receiver" value="<?php echo $obtainEmail ?>">
                    <button>Send Interest</button>
                </form>
                <?php
            }else{
                ?>
                <label class="blocked">Interest Sent <i class="fa fa-check"></i></label>
                <?php
            }
        }

    }

    ?>

    </center>
</div>

<div class="myActivity" style="margin-top: 20px;">
    <div class="filterHead"><span>Action</span></div>
    <ul class="actionMenu">
        <li><a href="./profile.php?email=<?php echo $email_people ?>" id="act0">Profile Details</a></li>
        <li><a href="./gallery.php?email=<?php echo $email_people ?>" id="act1">Photo Gallery</a></li>
        <?php
        if($userType != "Silver"){
            ?>
            <li><a href="./kundaliMatching.php?email=<?php echo $email_people ?>" id="act2">Kundali Matching</a></li>
            <?php
        }
        ?>
    </ul>
</div>

<div class="myActivity" style="margin-top: 20px;">
    <div class="filterHead"><span>Bhagyaroop Verified</span></div>
    <ul>
        <?php
        if($identity_proof == "done"){
            ?>
            <li><i class="fa fa-check" style="color: #FDFEFE;background: #73C610;border-radius: 50%;padding: 5px 5px 5px 5px;font-size: 12px;"></i>&nbsp;&nbsp;Identity Proof</li>
            <?php
        }else{
            ?>
            <li><i class="fa fa-close" style="color: #FDFEFE;background: red;border-radius: 50%;padding: 5px 7px 5px 7px;font-size: 12px;"></i>&nbsp;&nbsp;Identity Proof</li>
            <?php
        }
        if($address_proof == "done"){
            ?>
            <li><i class="fa fa-check" style="color: #FDFEFE;background: #73C610;border-radius: 50%;padding: 5px 5px 5px 5px;font-size: 12px;"></i>&nbsp;&nbsp;Address Certificate</li>
            <?php
        }else{
            ?>
            <li><i class="fa fa-close" style="color: #FDFEFE;background: red;border-radius: 50%;padding: 5px 7px 5px 7px;font-size: 12px;"></i>&nbsp;&nbsp;Address Certificate</li>
            <?php
        }
        if($income_proof == "done"){
            ?>
            <li><i class="fa fa-check" style="color: #FDFEFE;background: #73C610;border-radius: 50%;padding: 5px 5px 5px 5px;font-size: 12px;"></i>&nbsp;&nbsp;Income Certificate</li>
            <?php
        }else{
            ?>
            <li><i class="fa fa-close" style="color: #FDFEFE;background: red;border-radius: 50%;padding: 5px 7px 5px 7px;font-size: 12px;"></i>&nbsp;&nbsp;Income Certificate</li>
            <?php
        }
        if($educational_certificate == "done"){
            ?>
            <li><i class="fa fa-check" style="color: #FDFEFE;background: #73C610;border-radius: 50%;padding: 5px 5px 5px 5px;font-size: 12px;"></i>&nbsp;&nbsp;Qualification Certificate</li>
            <?php
        }else{
            ?>
            <li><i class="fa fa-close" style="color: #FDFEFE;background: red;border-radius: 50%;padding: 5px 7px 5px 7px;font-size: 12px;"></i>&nbsp;&nbsp;Qualification Certificate</li>
            <?php
        }
        ?>
    </ul>
</div>