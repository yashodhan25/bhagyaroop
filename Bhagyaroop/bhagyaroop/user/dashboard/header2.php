<?php 

$SenderEmail = $_SESSION['user1'];

// Incoming
$findinterestquery = "SELECT * FROM `interest` WHERE `receiveremail` = '$SenderEmail' ORDER BY `serial` DESC ";
$findinterestqueryExecute = mysqli_query($con,$findinterestquery);
$findinterestRow = mysqli_num_rows($findinterestqueryExecute);


// Out Going
$findinterestquery1 = "SELECT * FROM `interest` WHERE `senderemail` = '$SenderEmail' ORDER BY `serial` DESC ";
$findinterestqueryExecute1 = mysqli_query($con,$findinterestquery1);
$findinterestRow1 = mysqli_num_rows($findinterestqueryExecute1);


// Notifications
$notificationQuery1 = "SELECT * FROM `notification` WHERE `senderemail` = '$SenderEmail' OR `remind` = '$SenderEmail' ";
$notificationQueryExecute1 = mysqli_query($con, $notificationQuery1);
$notificationRow1 = mysqli_num_rows($notificationQueryExecute1);

$count1 = 0;
$count2 = 0;
for($notification1=1; $notification1<=$notificationRow1; $notification1++){
    $notificationData1 = mysqli_fetch_assoc($notificationQueryExecute1);
    $notifySender1 = $notificationData1['receiveremail'];
    $notifyReceiver1 = $notificationData1['senderemail'];
    $notifyReminder1 = $notificationData1['remind'];
    $notificationStatus1 = $notificationData1['status'];
    $notificationViews = $notificationData1['views'];

    if($SenderEmail == $notifyReminder1 && $notificationViews == 'pending'){
        $count1+=1;
    }
    if($notificationStatus1 != 'reminder' && $notificationViews == 'pending'){
        $count2+=1;
    }

}
$totalCount = $count1+$count2;

// Who Viewed My Profile
$wvmpNotificationViews = mysqli_num_rows(mysqli_query($con,"SELECT * FROM `wvmp` WHERE `target`='$SenderEmail' "));
?>

<nav class="custom">
    <img src="./../../logo.png" height="80" width="300">
    <ul>
        <li id="active1"><a href="./" data-toggle="modal" title="Dashboard"><i style="font-size: 38px;" class="fa">&#xf015;</i></a></li>
        <li id="active2"><a href="javascript:void(0);" data-toggle="modal" data-target="#myModal" title="Incoming Interest" class="alertUpdate"><i style="font-size: 38px;" class="fa fa-arrow-alt-circle-down"></i><?php if($findinterestRow != 0){ ?><span><?php echo $findinterestRow; ?></span><?php } ?></a></li>
        <li id="active3"><a href="javascript:void(0);" data-toggle="modal" data-target="#myModal1" title="Sent Interest" class="alertUpdate"><i style="font-size: 38px;" class="fa fa-arrow-alt-circle-up"></i><?php if($findinterestRow1 != 0){ ?><span><?php echo $findinterestRow1; ?></span><?php } ?></a></li>
        <?php
        $checkEx = mysqli_query($con,"SELECT * FROM `usertype` WHERE `email` = '$SenderEmail' ");
        $foundEx = mysqli_num_rows($checkEx);
        
        for($zEx=1; $zEx<=$foundEx; $zEx++){
            $dataEx = mysqli_fetch_assoc($checkEx);    
            $profileStatusEx = $dataEx['type'];
            $planEx = $dataEx['type'];
        }
        
        if($planEx != 'Silver' ){
            ?>
            <li id="active4"><a href="javascript:void(0);" data-toggle="modal" data-target="#myModal2" title="Who Viewed My Profile" class="alertUpdate"><i style="font-size: 38px;" class="fa fa-eye"></i><?php if($wvmpNotificationViews != 0){ ?><span><?php echo $wvmpNotificationViews; ?></span><?php } ?></a></li>
            <?php
        }
        ?>
        <li id="active5"><a href="./?page=0&notify=0" data-toggle="modal" title="Notification" class="alertUpdate"><i style="font-size: 38px;" class="fa fa-bell"></i><?php if($totalCount != 0){ ?><span><?php echo $totalCount; ?></span><?php } ?></a></li>
        <li id="active6"><a href="./myprofile.php" data-toggle="modal" title="My Profile"><i style="font-size: 38px;" class="fa fa-user"></i></a></li>
    </ul>
    <a href="./logout.php" style="padding-top: -20px;"><button>Log Out</button></a>
</nav>

<!-- Incoming Interest -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
    <!-- Modal content-->
    <div class="modal-content">

        <div class="head" style="border-top-left-radius: 5px;border-top-right-radius: 5px;background: #751e1e;padding: 15px 15px 15px 15px;text-align:center;font-family: 'Adamina';font-size:22px" >
            <span style="color:white"><i class="fa fa-arrow-alt-circle-down"></i>&nbsp;&nbsp;Incoming Interest</span>
        </div>
        
        <div class="modal-body">
            <div class="incoming-interest">
                <?php
                for($interest=1; $interest<=$findinterestRow; $interest++){
                    $interstData = mysqli_fetch_assoc($findinterestqueryExecute);
                    $incomingEmail = $interstData['senderemail'];

                    $viewPhoto1 = mysqli_query($con,"SELECT * FROM `profilepicture` WHERE `email` = '$incomingEmail' ");
                    $rowGet1 = mysqli_num_rows($viewPhoto1);
                    for($i=1; $i<=$rowGet1; $i++){
                        $dataGet1 = mysqli_fetch_assoc($viewPhoto1);
                        $profilepicture1 = $dataGet1['profilepicture'];
                    }

                    $userData1 = mysqli_query($con,"SELECT * FROM `users` WHERE `email`='$incomingEmail' ");
                    $row1 = mysqli_num_rows($userData1);
                    for($ia=1; $ia<=$row1; $ia++){
                      $data1 = mysqli_fetch_assoc($userData1);
                      $name1 = $data1['full_name'];
                    }
                    ?>
                    <table>
                        <tr>
                            <td style="padding: 0px 0px 0px 40px;">
                                <?php
                                if($profilepicture1 != ""){
                                    ?>
                                    <img src="./profile photo/<?php echo $profilepicture1 ?>">
                                    <?php
                                }else{
                                    ?>
                                    <img src="./profile photo/sample.jpg">
                                    <?php
                                }
                                ?>
                            </td>
                            <td style="padding: 0px 40px 0px 0px;">
                                <ul>
                                    <li><h4><a href="./profile.php?email=<?php echo $incomingEmail; ?>"><?php echo $name1 ?></a></h4></li>
                                    <li>
                                        <table style="margin-top: 0px;">
                                            <tr>
                                                <td>
                                                    <form action="./accept.php" method="POST">
                                                        <input type="hidden" name="sender" value="<?php echo $incomingEmail; ?>">
                                                        <input type="hidden" name="receiver" value="<?php echo $SenderEmail; ?>">
                                                        <input type="hidden" name="status" value="accepted">
                                                        <button>Accept</button>
                                                    </form>
                                                </td>
                                                <td style="padding-left:10px;">
                                                    <form action="./decline.php" method="POST">
                                                        <input type="hidden" name="sender" value="<?php echo $incomingEmail; ?>">
                                                        <input type="hidden" name="receiver" value="<?php echo $SenderEmail; ?>">
                                                        <input type="hidden" name="status" value="decline">
                                                        <button>Decline</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        </table>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                    <?php
                }
                ?>
            </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>
    
    </div>
</div>

<!-- Sent Interest -->
<div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
    <!-- Modal content-->
    <div class="modal-content">

        <div class="head" style="border-top-left-radius: 5px;border-top-right-radius: 5px;background: #751e1e;padding: 15px 15px 15px 15px;text-align:center;font-family: 'Adamina';font-size:22px" >
            <span style="color:white"><i class="fa fa-arrow-alt-circle-up"></i>&nbsp;&nbsp;Sent Interest</span>
        </div>
        
        <div class="modal-body">
            <div class="incoming-interest">
                <?php
                for($interest1=1; $interest1<=$findinterestRow1; $interest1++){
                    $interstData1 = mysqli_fetch_assoc($findinterestqueryExecute1);
                    $incomingEmail1 = $interstData1['receiveremail'];

                    $viewPhoto2 = mysqli_query($con,"SELECT * FROM `profilepicture` WHERE `email` = '$incomingEmail1' ");
                    $rowGet2 = mysqli_num_rows($viewPhoto2);
                    for($ic=1; $ic<=$rowGet2; $ic++){
                        $dataGet2 = mysqli_fetch_assoc($viewPhoto2);
                        $profilepicture2 = $dataGet2['profilepicture'];
                    }

                    $userData2 = mysqli_query($con,"SELECT * FROM `users` WHERE `email`='$incomingEmail1' ");
                    $row2 = mysqli_num_rows($userData2);
                    for($ib=1; $ib<=$row2; $ib++){
                      $data2 = mysqli_fetch_assoc($userData2);
                      $name2 = $data2['full_name'];
                    }

                    ?>
                    <table>
                        <tr>
                            
                            <td style="padding: 0px 0px 0px 40px;">
                                <?php
                                if($profilepicture2 != ""){
                                    ?>
                                    <img src="./profile photo/<?php echo $profilepicture2 ?>">
                                    <?php
                                }else{
                                    ?>
                                    <img src="./profile photo/sample.jpg">
                                    <?php
                                }
                                ?>
                            </td>
                            
                            <td style="padding: 0px 40px 0px 0px;">
                                <ul>
                                    <li><h4><a href="./profile.php?email=<?php echo $incomingEmail1; ?>"><?php echo $name2; ?></a></h4></li>
                                    <li>
                                        <table style="margin-top: 0px;">
                                            <tr>
                                                <td>
                                                    <form action="./withdraw.php" method="POST">
                                                        <input type="hidden" name="sender" value="<?php echo $SenderEmail; ?>">
                                                        <input type="hidden" name="receiver" value="<?php echo $incomingEmail1; ?>">
                                                        <button>Withdraw</button>
                                                    </form>
                                                </td>
                                                <td style="padding-left:10px;">
                                                    <form action="./reminder.php" method="POST">
                                                        <input type="hidden" name="sender" value="<?php echo $SenderEmail; ?>">
                                                        <input type="hidden" name="receiver" value="<?php echo $incomingEmail1; ?>">
                                                        <input type="hidden" name="status" value="reminder">
                                                        <button>Reminder</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        </table>
                                    </li>
                                </ul>
                            </td>

                        </tr>
                    </table>
                    <?php
                }
                ?>
            </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>
    
    </div>
</div>


<!-- Who Viewed My Profile -->
<div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
    <!-- Modal content-->
    <div class="modal-content">

        <div class="head" style="border-top-left-radius: 5px;border-top-right-radius: 5px;background: #751e1e;padding: 15px 15px 15px 15px;text-align:center;font-family: 'Adamina';font-size:22px" >
            <span style="color:white"><i class="fa fa-eye"></i>&nbsp;&nbsp;Who Viewed My Profile</span>
        </div>
        
        <div class="modal-body">
            <div class="notification">
                <?php
                $wvmpReadQuery1 = "SELECT * FROM `wvmp` WHERE `target`='$SenderEmail' ORDER BY `serial` DESC ";
                $wvmpReadQueryExecute1 = mysqli_query($con, $wvmpReadQuery1);
                $wvmpRows1 = mysqli_num_rows($wvmpReadQueryExecute1);
                for($o=1; $o<=$wvmpRows1; $o++){
                    $peopleInfo = mysqli_fetch_assoc($wvmpReadQueryExecute1);
                    $peopleEmail = $peopleInfo['viewer'];
                    ?>
                        <table>
                            <tr>
                                <td style="padding: 8px 0px 8px 30px;">
                                    <?php
                                    $viewPhoto4 = mysqli_query($con,"SELECT * FROM `profilepicture` WHERE `email` = '$peopleEmail' ");
                                    $rowGet4 = mysqli_num_rows($viewPhoto4);
                                    for($ie=1; $ie<=$rowGet4; $ie++){
                                        $dataGet4 = mysqli_fetch_assoc($viewPhoto4);
                                        $profilepicture4 = $dataGet4['profilepicture'];
                                        
                                        if($profilepicture4 != ""){
                                            ?>
                                            <img src="./profile photo/<?php echo $profilepicture4 ?>">
                                            <?php
                                        }else{
                                            ?>
                                            <img src="./profile photo/sample.jpg">
                                            <?php
                                        }
                                    }
                                    ?>
                                </td>
                                <td><p>
                                    <?php 
                                    $userData3 = mysqli_query($con,"SELECT * FROM `users` WHERE `email`='$peopleEmail' ");
                                    $row3 = mysqli_num_rows($userData3);
                                    for($id=1; $id<=$row3; $id++){
                                        $data3 = mysqli_fetch_assoc($userData3);
                                        $name3 = $data3['full_name'];
                                        ?>
                                        <a href="profile.php?email=<?php echo $peopleEmail ?>"><?php echo $name3; ?></a>
                                        <?php
                                    }
                                    ?> 
                                    has been <b>viewed</b> your profile.
                                    </p>
                                </td>
                            </tr>
                        </table>
                    <?php
                }
                ?>
            </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>
    
    </div>
</div>


<!-- Notifications -->
<?php
if(isset($_GET['notify'])){
?>
    <div class="myModal" id="myModel">
        <div class="modal-dialog">
        
        <!-- Modal content-->
        <div class="modal-content">

            <div class="head" style="border-top-left-radius: 5px;border-top-right-radius: 5px;background: #751e1e;padding: 15px 15px 15px 15px;text-align:center;font-family: 'Adamina';font-size:22px" >
                <span style="color:white"><i class="fa fa-bell"></i>&nbsp;&nbsp;Notifications</span>
            </div>
            
            <div class="modal-body">
                <div class="notification">
                    <?php
                    // Notifications
                    $notificationQuery = "SELECT * FROM `notification` WHERE `senderemail` = '$SenderEmail' OR `remind` = '$SenderEmail' ORDER BY `serial` DESC ";
                    $notificationQueryExecute = mysqli_query($con, $notificationQuery);
                    $notificationRow = mysqli_num_rows($notificationQueryExecute);

                    for($notification=1; $notification<=$notificationRow; $notification++){
                        $notificationData = mysqli_fetch_assoc($notificationQueryExecute);
                        $notifySender = $notificationData['receiveremail'];
                        $notifyReceiver = $notificationData['senderemail'];
                        $notifyReminder = $notificationData['remind'];
                        $notificationStatus = $notificationData['status'];
                        $serial = $notificationData['serial'];

                        if($SenderEmail == $notifyReminder){
                            $clearViews = "UPDATE `notification` SET `views`='' WHERE `senderemail` = '$SenderEmail' OR `remind` = '$SenderEmail' ";
                            $clearViewsExecute = mysqli_query($con,$clearViews);
                            ?>
                            <table>
                                <tr>
                                    <td style="padding: 8px 0px 8px 30px;">
                                        <?php
                                        $viewPhoto4 = mysqli_query($con,"SELECT * FROM `profilepicture` WHERE `email` = '$notifyReceiver' ");
                                        $rowGet4 = mysqli_num_rows($viewPhoto4);
                                        for($ie=1; $ie<=$rowGet4; $ie++){
                                            $dataGet4 = mysqli_fetch_assoc($viewPhoto4);
                                            $profilepicture4 = $dataGet4['profilepicture'];
                                            
                                            if($profilepicture4 != ""){
                                                ?>
                                                <img src="./profile photo/<?php echo $profilepicture4 ?>">
                                                <?php
                                            }else{
                                                ?>
                                                <img src="./profile photo/sample.jpg">
                                                <?php
                                            }
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <p>
                                        <?php 
                                        $userData3 = mysqli_query($con,"SELECT * FROM `users` WHERE `email`='$notifyReceiver' ");
                                        $row3 = mysqli_num_rows($userData3);
                                        for($id=1; $id<=$row3; $id++){
                                            $data3 = mysqli_fetch_assoc($userData3);
                                            $name3 = $data3['full_name'];
                                            ?>
                                            <a href="profile.php?email=<?php echo $notifyReceiver ?>"><?php echo $name3; ?></a>
                                            <?php
                                        }
                                        ?> 
                                        is <b>waiting</b> your Interest Action
                                        </p>
                                    </td>
                                    <td>
                                        <td style="padding-right: 20px;">
                                            <form action="./remove.php" method="POST">
                                                <input type="hidden" name="event1" value="1">
                                                <input type="hidden" name="serial" value="<?php echo $serial; ?>">
                                                <input type="hidden" name="email1" value="<?php echo $notifyReceiver; ?>">
                                                <input type="hidden" name="email2" value="<?php echo $SenderEmail; ?>">
                                                <button><i class='fas fa-trash-alt'></i></button>
                                            </form>
                                        </td>
                                    </td>
                                </tr>
                            </table>
                            <?php
                        }
                        if($notificationStatus != 'reminder'){
                            $clearViews = "UPDATE `notification` SET `views`='' WHERE `senderemail` = '$SenderEmail' AND `remind` = '' ";
                            $clearViewsExecute = mysqli_query($con,$clearViews);
                            ?>
                            <table>
                                <tr>
                                    <td style="padding: 8px 0px 8px 30px;">
                                        <?php
                                        $viewPhoto4 = mysqli_query($con,"SELECT * FROM `profilepicture` WHERE `email` = '$notifySender' ");
                                        $rowGet4 = mysqli_num_rows($viewPhoto4);
                                        for($ie=1; $ie<=$rowGet4; $ie++){
                                            $dataGet4 = mysqli_fetch_assoc($viewPhoto4);
                                            $profilepicture4 = $dataGet4['profilepicture'];
                                            
                                            if($profilepicture4 != ""){
                                                ?>
                                                <img src="./profile photo/<?php echo $profilepicture4 ?>">
                                                <?php
                                            }else{
                                                ?>
                                                <img src="./profile photo/sample.jpg">
                                                <?php
                                            }
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <p>
                                            <?php  
                                            $userData3 = mysqli_query($con,"SELECT * FROM `users` WHERE `email`='$notifySender' ");
                                            $row3 = mysqli_num_rows($userData3);
                                            for($id=1; $id<=$row3; $id++){
                                                $data3 = mysqli_fetch_assoc($userData3);
                                                $name3 = $data3['full_name'];
                                                ?>
                                                <a href="profile.php?email=<?php echo $notifySender ?>"><?php echo $name3; ?></a>
                                                <?php
                                            }
                                            ?> 
                                            has been <b><?php echo $notificationStatus; ?></b> your Interest
                                        </p>
                                    </td>
                                    <td style="padding-right: 20px;">
                                        <form action="./remove.php" method="POST">
                                            <input type="hidden" name="event2" value="1">
                                            <input type="hidden" name="serial" value="<?php echo $serial; ?>">
                                            <input type="hidden" name="email1" value="<?php echo $SenderEmail; ?>">
                                            <input type="hidden" name="email2" value="<?php echo $notifySender; ?>"> 
                                            <button><i class='fas fa-trash-alt'></i></button>
                                        </form>
                                    </td>
                                </tr>
                            </table>
                            <?php
                        }

                    }
                    ?>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-default" onclick="myFun();">Close</button>
            </div>
        </div>
        
        </div>
    </div>
<?php
}
?>

<script>
function myFun(){
    document.getElementById("myModel").style.display = "none";
    var url = "./?page=0";
    window.location = url;
}
</script>