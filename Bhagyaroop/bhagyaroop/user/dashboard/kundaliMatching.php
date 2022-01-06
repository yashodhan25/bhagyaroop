<?php
session_start();
ob_start();
include './../../../dbconnection.php';
include 'dataview2.php';
include 'dataview.php';

$myDate = $my_v38."T".$my_v39;
$givenDate = $Given_v38."T".$Given_v39;

if(!(isset($_SESSION['user1']))){
    header("location:./../../login.php");
}

if(!(isset($_GET['email']))){
    header("location:./");
}

$obtainEmail = $_GET['email'];

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Kundali Matching</title>
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
        </style>
    </head>
    <body>
        <?php
        include 'header2.php';
        ?>

        <div class="container">
            <div class="row">

                <div class="col-sm-12 col-md-12 col-lg-3">

                <?php
                include 'sidemenu2.php';
                ?>
                    

                </div>
                
                <div class="col-sm-12 col-md-12 col-lg-9 main-content">
                <center>
                        <div class="kundali-form">

                            <div class="form-content" style="">
                                <div class="head">
                                    <span>Kundali Matching</span>
                                </div>
                                <form action="./result.php?email=<?php echo $obtainEmail; ?>" method="POST">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <br>
                                            <ul>
                                                <li><input type="text" value="<?php echo $my_full_name; ?>" disabled></li>
                                                <input type="hidden" name="name1" value="<?php echo $my_full_name ?>">
                                                <li>
                                                    <select name="gtzone">
                                                        <option value="-12:00">(UTC-12:00) International Date Line West</option>
                                                        <option value="-11:00">(UTC-11:00) Coordinated Universal Time-11</option>
                                                        <option value="-10:00">(UTC-10:00) Hawaii</option>
                                                        <option value="-09:00">(UTC-09:00) Alaska</option>
                                                        <option value="-08:00">(UTC-08:00) Baja California</option>
                                                        <option value="-08:00">(UTC-08:00) Pacific Time (US &amp; Canada)</option>
                                                        <option value="-07:00">(UTC-07:00) Arizona</option>
                                                        <option value="-07:00">(UTC-07:00) Chihuahua, La Paz, Mazatlan</option>
                                                        <option value="-07:00">(UTC-07:00) Mountain Time (US &amp; Canada)</option>
                                                        <option value="-06:00">(UTC-06:00) Central America</option>
                                                        <option value="-06:00">(UTC-06:00) Central Time (US &amp; Canada)</option>
                                                        <option value="-06:00">(UTC-06:00) Guadalajara, Mexico City, Monterrey</option>
                                                        <option value="-06:00">(UTC-06:00) Saskatchewan</option>
                                                        <option value="-05:00">(UTC-05:00) Bogota, Lima, Quito</option>
                                                        <option value="-05:00">(UTC-05:00) Eastern Time (US &amp; Canada)</option>
                                                        <option value="-05:00">(UTC-05:00) Indiana (East)</option>
                                                        <option value="-04:30">(UTC-04:30) Caracas</option>
                                                        <option value="-04:00">(UTC-04:00) Asuncion</option>
                                                        <option value="-04:00">(UTC-04:00) Atlantic Time (Canada)</option>
                                                        <option value="-04:00">(UTC-04:00) Cuiaba</option>
                                                        <option value="-04:00">(UTC-04:00) Georgetown, La Paz, Manaus, San Juan</option>
                                                        <option value="-04:00">(UTC-04:00) Santiago</option>
                                                        <option value="-03:30">(UTC-03:30) Newfoundland</option>
                                                        <option value="-03:00">(UTC-03:00) Brasilia</option>
                                                        <option value="-03:00">(UTC-03:00) Buenos Aires</option>
                                                        <option value="-03:00">(UTC-03:00) Cayenne, Fortaleza</option>
                                                        <option value="-03:00">(UTC-03:00) Greenland</option>
                                                        <option value="-03:00">(UTC-03:00) Montevideo</option>
                                                        <option value="-03:00">(UTC-03:00) Salvador</option>
                                                        <option value="-02:00">(UTC-02:00) Coordinated Universal Time-02</option>
                                                        <option value="-02:00">(UTC-02:00) Mid-Atlantic - Old</option>
                                                        <option value="-01:00">(UTC-01:00) Azores</option>
                                                        <option value="-01:00">(UTC-01:00) Cape Verde Is.</option>
                                                        <option value="+00:00">(UTC) Casablanca</option>
                                                        <option value="+00:00">(UTC) Coordinated Universal Time</option>
                                                        <option value="+00:00">(UTC) Dublin, Edinburgh, Lisbon, London</option>
                                                        <option value="+00:00">(UTC) Monrovia, Reykjavik</option>
                                                        <option value="+01:00">(UTC+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>
                                                        <option value="+01:00">(UTC+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</option>
                                                        <option value="+01:00">(UTC+01:00) Brussels, Copenhagen, Madrid, Paris</option>
                                                        <option value="+01:00">(UTC+01:00) Sarajevo, Skopje, Warsaw, Zagreb</option>
                                                        <option value="+01:00">(UTC+01:00) West Central Africa</option>
                                                        <option value="+01:00">(UTC+01:00) Windhoek</option>
                                                        <option value="+02:00">(UTC+02:00) Athens, Bucharest</option>
                                                        <option value="+02:00">(UTC+02:00) Beirut</option>
                                                        <option value="+02:00">(UTC+02:00) Cairo</option>
                                                        <option value="+02:00">(UTC+02:00) Damascus</option>
                                                        <option value="+02:00">(UTC+02:00) E. Europe</option>
                                                        <option value="+02:00">(UTC+02:00) Harare, Pretoria</option>
                                                        <option value="+02:00">(UTC+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius</option>
                                                        <option value="+02:00">(UTC+02:00) Istanbul</option>
                                                        <option value="+02:00">(UTC+02:00) Jerusalem</option>
                                                        <option value="+02:00">(UTC+02:00) Tripoli</option>
                                                        <option value="+03:00">(UTC+03:00) Amman</option>
                                                        <option value="+03:00">(UTC+03:00) Baghdad</option>
                                                        <option value="+03:00">(UTC+03:00) Kaliningrad, Minsk</option>
                                                        <option value="+03:00">(UTC+03:00) Kuwait, Riyadh</option>
                                                        <option value="+03:00">(UTC+03:00) Nairobi</option>
                                                        <option value="+03:30">(UTC+03:30) Tehran</option>
                                                        <option value="+04:00">(UTC+04:00) Abu Dhabi, Muscat</option>
                                                        <option value="+04:00">(UTC+04:00) Baku</option>
                                                        <option value="+04:00">(UTC+04:00) Moscow, St. Petersburg, Volgograd</option>
                                                        <option value="+04:00">(UTC+04:00) Port Louis</option>
                                                        <option value="+04:00">(UTC+04:00) Tbilisi</option>
                                                        <option value="+04:00">(UTC+04:00) Yerevan</option>
                                                        <option value="+04:30">(UTC+04:30) Kabul</option>
                                                        <option value="+05:00">(UTC+05:00) Ashgabat, Tashkent</option>
                                                        <option value="+05:00">(UTC+05:00) Islamabad, Karachi</option>
                                                        <option selected="selected" value="+05:30">(UTC+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>
                                                        <option value="+05:30">(UTC+05:30) Sri Jayawardenepura</option>
                                                        <option value="+05:45">(UTC+05:45) Kathmandu</option>
                                                        <option value="+06:00">(UTC+06:00) Astana</option>
                                                        <option value="+06:00">(UTC+06:00) Dhaka</option>
                                                        <option value="+06:00">(UTC+06:00) Ekaterinburg</option>
                                                        <option value="+06:30">(UTC+06:30) Yangon (Rangoon)</option>
                                                        <option value="+07:00">(UTC+07:00) Bangkok, Hanoi, Jakarta</option>
                                                        <option value="+07:00">(UTC+07:00) Novosibirsk</option>
                                                        <option value="+08:00">(UTC+08:00) Beijing, Chongqing, Hong Kong, Urumqi</option>
                                                        <option value="+08:00">(UTC+08:00) Krasnoyarsk</option>
                                                        <option value="+08:00">(UTC+08:00) Kuala Lumpur, Singapore</option>
                                                        <option value="+08:00">(UTC+08:00) Perth</option>
                                                        <option value="+08:00">(UTC+08:00) Taipei</option>
                                                        <option value="+08:00">(UTC+08:00) Ulaanbaatar</option>
                                                        <option value="+09:00">(UTC+09:00) Irkutsk</option>
                                                        <option value="+09:00">(UTC+09:00) Osaka, Sapporo, Tokyo</option>
                                                        <option value="+09:00">(UTC+09:00) Seoul</option>
                                                        <option value="+09:30">(UTC+09:30) Adelaide</option>
                                                        <option value="+09:30">(UTC+09:30) Darwin</option>
                                                        <option value="+10:00">(UTC+10:00) Brisbane</option>
                                                        <option value="+10:00">(UTC+10:00) Canberra, Melbourne, Sydney</option>
                                                        <option value="+10:00">(UTC+10:00) Guam, Port Moresby</option>
                                                        <option value="+10:00">(UTC+10:00) Hobart</option>
                                                        <option value="+10:00">(UTC+10:00) Yakutsk</option>
                                                        <option value="+11:00">(UTC+11:00) Solomon Is., New Caledonia</option>
                                                        <option value="+11:00">(UTC+11:00) Vladivostok</option>
                                                        <option value="+12:00">(UTC+12:00) Auckland, Wellington</option>
                                                        <option value="+12:00">(UTC+12:00) Coordinated Universal Time+12</option>
                                                        <option value="+12:00">(UTC+12:00) Fiji</option>
                                                        <option value="+12:00">(UTC+12:00) Magadan</option>
                                                        <option value="+12:00">(UTC+12:00) Petropavlovsk-Kamchatsky - Old</option>
                                                        <option value="+12:00">(UTC+13:00) Nuku'alofa</option>
                                                        <option value="+13:00">(UTC+13:00) Samoa</option>
                                                    </select>
                                                </li>
                                                <li><input type="text" name="g_location" id="glocation" placeholder="Enter Your Birth Location" required></li>
                                                <li><h2>Birth Date & Time</h2></li>
                                                <li>
                                                    <input type="datetime-local" name="girl_date1" value="<?php echo $myDate ?>" disabled>
                                                    <input type="hidden" name="girl_date" value="<?php echo $myDate ?>">
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <br>
                                            <ul>
                                                <li><input type="text" name="name2" value="<?php echo $given_full_name; ?>" disabled></li>
                                                <input type="hidden" name="name2" value="<?php echo $given_full_name ?>">
                                                <li>
                                                    <select name="btzone">
                                                        <option value="-12:00">(UTC-12:00) International Date Line West</option>
                                                        <option value="-11:00">(UTC-11:00) Coordinated Universal Time-11</option>
                                                        <option value="-10:00">(UTC-10:00) Hawaii</option>
                                                        <option value="-09:00">(UTC-09:00) Alaska</option>
                                                        <option value="-08:00">(UTC-08:00) Baja California</option>
                                                        <option value="-08:00">(UTC-08:00) Pacific Time (US &amp; Canada)</option>
                                                        <option value="-07:00">(UTC-07:00) Arizona</option>
                                                        <option value="-07:00">(UTC-07:00) Chihuahua, La Paz, Mazatlan</option>
                                                        <option value="-07:00">(UTC-07:00) Mountain Time (US &amp; Canada)</option>
                                                        <option value="-06:00">(UTC-06:00) Central America</option>
                                                        <option value="-06:00">(UTC-06:00) Central Time (US &amp; Canada)</option>
                                                        <option value="-06:00">(UTC-06:00) Guadalajara, Mexico City, Monterrey</option>
                                                        <option value="-06:00">(UTC-06:00) Saskatchewan</option>
                                                        <option value="-05:00">(UTC-05:00) Bogota, Lima, Quito</option>
                                                        <option value="-05:00">(UTC-05:00) Eastern Time (US &amp; Canada)</option>
                                                        <option value="-05:00">(UTC-05:00) Indiana (East)</option>
                                                        <option value="-04:30">(UTC-04:30) Caracas</option>
                                                        <option value="-04:00">(UTC-04:00) Asuncion</option>
                                                        <option value="-04:00">(UTC-04:00) Atlantic Time (Canada)</option>
                                                        <option value="-04:00">(UTC-04:00) Cuiaba</option>
                                                        <option value="-04:00">(UTC-04:00) Georgetown, La Paz, Manaus, San Juan</option>
                                                        <option value="-04:00">(UTC-04:00) Santiago</option>
                                                        <option value="-03:30">(UTC-03:30) Newfoundland</option>
                                                        <option value="-03:00">(UTC-03:00) Brasilia</option>
                                                        <option value="-03:00">(UTC-03:00) Buenos Aires</option>
                                                        <option value="-03:00">(UTC-03:00) Cayenne, Fortaleza</option>
                                                        <option value="-03:00">(UTC-03:00) Greenland</option>
                                                        <option value="-03:00">(UTC-03:00) Montevideo</option>
                                                        <option value="-03:00">(UTC-03:00) Salvador</option>
                                                        <option value="-02:00">(UTC-02:00) Coordinated Universal Time-02</option>
                                                        <option value="-02:00">(UTC-02:00) Mid-Atlantic - Old</option>
                                                        <option value="-01:00">(UTC-01:00) Azores</option>
                                                        <option value="-01:00">(UTC-01:00) Cape Verde Is.</option>
                                                        <option value="+00:00">(UTC) Casablanca</option>
                                                        <option value="+00:00">(UTC) Coordinated Universal Time</option>
                                                        <option value="+00:00">(UTC) Dublin, Edinburgh, Lisbon, London</option>
                                                        <option value="+00:00">(UTC) Monrovia, Reykjavik</option>
                                                        <option value="+01:00">(UTC+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>
                                                        <option value="+01:00">(UTC+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</option>
                                                        <option value="+01:00">(UTC+01:00) Brussels, Copenhagen, Madrid, Paris</option>
                                                        <option value="+01:00">(UTC+01:00) Sarajevo, Skopje, Warsaw, Zagreb</option>
                                                        <option value="+01:00">(UTC+01:00) West Central Africa</option>
                                                        <option value="+01:00">(UTC+01:00) Windhoek</option>
                                                        <option value="+02:00">(UTC+02:00) Athens, Bucharest</option>
                                                        <option value="+02:00">(UTC+02:00) Beirut</option>
                                                        <option value="+02:00">(UTC+02:00) Cairo</option>
                                                        <option value="+02:00">(UTC+02:00) Damascus</option>
                                                        <option value="+02:00">(UTC+02:00) E. Europe</option>
                                                        <option value="+02:00">(UTC+02:00) Harare, Pretoria</option>
                                                        <option value="+02:00">(UTC+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius</option>
                                                        <option value="+02:00">(UTC+02:00) Istanbul</option>
                                                        <option value="+02:00">(UTC+02:00) Jerusalem</option>
                                                        <option value="+02:00">(UTC+02:00) Tripoli</option>
                                                        <option value="+03:00">(UTC+03:00) Amman</option>
                                                        <option value="+03:00">(UTC+03:00) Baghdad</option>
                                                        <option value="+03:00">(UTC+03:00) Kaliningrad, Minsk</option>
                                                        <option value="+03:00">(UTC+03:00) Kuwait, Riyadh</option>
                                                        <option value="+03:00">(UTC+03:00) Nairobi</option>
                                                        <option value="+03:30">(UTC+03:30) Tehran</option>
                                                        <option value="+04:00">(UTC+04:00) Abu Dhabi, Muscat</option>
                                                        <option value="+04:00">(UTC+04:00) Baku</option>
                                                        <option value="+04:00">(UTC+04:00) Moscow, St. Petersburg, Volgograd</option>
                                                        <option value="+04:00">(UTC+04:00) Port Louis</option>
                                                        <option value="+04:00">(UTC+04:00) Tbilisi</option>
                                                        <option value="+04:00">(UTC+04:00) Yerevan</option>
                                                        <option value="+04:30">(UTC+04:30) Kabul</option>
                                                        <option value="+05:00">(UTC+05:00) Ashgabat, Tashkent</option>
                                                        <option value="+05:00">(UTC+05:00) Islamabad, Karachi</option>
                                                        <option selected="selected" value="+05:30">(UTC+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>
                                                        <option value="+05:30">(UTC+05:30) Sri Jayawardenepura</option>
                                                        <option value="+05:45">(UTC+05:45) Kathmandu</option>
                                                        <option value="+06:00">(UTC+06:00) Astana</option>
                                                        <option value="+06:00">(UTC+06:00) Dhaka</option>
                                                        <option value="+06:00">(UTC+06:00) Ekaterinburg</option>
                                                        <option value="+06:30">(UTC+06:30) Yangon (Rangoon)</option>
                                                        <option value="+07:00">(UTC+07:00) Bangkok, Hanoi, Jakarta</option>
                                                        <option value="+07:00">(UTC+07:00) Novosibirsk</option>
                                                        <option value="+08:00">(UTC+08:00) Beijing, Chongqing, Hong Kong, Urumqi</option>
                                                        <option value="+08:00">(UTC+08:00) Krasnoyarsk</option>
                                                        <option value="+08:00">(UTC+08:00) Kuala Lumpur, Singapore</option>
                                                        <option value="+08:00">(UTC+08:00) Perth</option>
                                                        <option value="+08:00">(UTC+08:00) Taipei</option>
                                                        <option value="+08:00">(UTC+08:00) Ulaanbaatar</option>
                                                        <option value="+09:00">(UTC+09:00) Irkutsk</option>
                                                        <option value="+09:00">(UTC+09:00) Osaka, Sapporo, Tokyo</option>
                                                        <option value="+09:00">(UTC+09:00) Seoul</option>
                                                        <option value="+09:30">(UTC+09:30) Adelaide</option>
                                                        <option value="+09:30">(UTC+09:30) Darwin</option>
                                                        <option value="+10:00">(UTC+10:00) Brisbane</option>
                                                        <option value="+10:00">(UTC+10:00) Canberra, Melbourne, Sydney</option>
                                                        <option value="+10:00">(UTC+10:00) Guam, Port Moresby</option>
                                                        <option value="+10:00">(UTC+10:00) Hobart</option>
                                                        <option value="+10:00">(UTC+10:00) Yakutsk</option>
                                                        <option value="+11:00">(UTC+11:00) Solomon Is., New Caledonia</option>
                                                        <option value="+11:00">(UTC+11:00) Vladivostok</option>
                                                        <option value="+12:00">(UTC+12:00) Auckland, Wellington</option>
                                                        <option value="+12:00">(UTC+12:00) Coordinated Universal Time+12</option>
                                                        <option value="+12:00">(UTC+12:00) Fiji</option>
                                                        <option value="+12:00">(UTC+12:00) Magadan</option>
                                                        <option value="+12:00">(UTC+12:00) Petropavlovsk-Kamchatsky - Old</option>
                                                        <option value="+12:00">(UTC+13:00) Nuku'alofa</option>
                                                        <option value="+13:00">(UTC+13:00) Samoa</option>
                                                    </select>
                                                </li>
                                                <li><input type="text" name="b_location" id="blocation" placeholder="Enter Your Birth Location" required></li>
                                                <li><h2>Birth Date & Time</h2></li>
                                                <li>
                                                    <input type="datetime-local" name="boy_date1" value="<?php echo $givenDate ?>" disabled>
                                                    <input type="hidden" name="boy_date" value="<?php echo $givenDate ?>">
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <ul>
                                                <li><input type="submit" value="See Details"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </form>    
                            </div>

                        </div>
                    </center>
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
        $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();   
        });
        </script>

        <script>
            var element = document.getElementById("act2");
            element.classList.add("activated");
        </script>

        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyCaUq5IndxjZNdgvbtyAOUHr1IakGUn6Aw"></script>

        <script type="text/javascript">
            google.maps.event.addDomListener(window, 'load', inialize);
            function inialize(){
                var autocomplete = new google.maps.places.Autocomplete(document.getElementById('blocation'));
            }
        </script>

        <script type="text/javascript">
            google.maps.event.addDomListener(window, 'load', inialize);
            function inialize(){
                var autocomplete = new google.maps.places.Autocomplete(document.getElementById('glocation'));
            }
        </script>

    </body>
</html>

<?php
ob_end_flush();
?>