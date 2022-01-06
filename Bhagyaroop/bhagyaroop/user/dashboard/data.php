<?php

//Generate Token
include 'gettoken.php';

// Process

$gtzone = $_POST['gtzone'];
$btzone = $_POST['btzone'];

$gbdate = $_POST['girl_date'];
$bbdate = $_POST['boy_date'];

$boy_location = urlencode($_POST['b_location']);
$girl_location = urlencode($_POST['g_location']);

$url1 = "https://maps.googleapis.com/maps/api/geocode/json?address=$girl_location&key=AIzaSyCaUq5IndxjZNdgvbtyAOUHr1IakGUn6Aw";
$g_data = file_get_contents($url1);
$json_g_data = json_decode($g_data, true);
$semifinal_g_data = $json_g_data['results'][0];
$final_g_data = $semifinal_g_data['geometry'];
$g_lat = $final_g_data['location']['lat'];
$g_lng = $final_g_data['location']['lng'];

$url2 = "https://maps.googleapis.com/maps/api/geocode/json?address=$boy_location&key=AIzaSyCaUq5IndxjZNdgvbtyAOUHr1IakGUn6Aw";
$b_data = file_get_contents($url2);
$json_b_data = json_decode($b_data, true);
$semifinal_b_data = $json_b_data['results'][0];
$final_b_data = $semifinal_b_data['geometry'];
$b_lat = $final_b_data['location']['lat'];
$b_lng = $final_b_data['location']['lng'];

$girl_coordinates = urlencode($g_lat.",".$g_lng);
$boy_coordinates = urlencode($b_lat.",".$b_lng);
$girl_dob = urlencode($gbdate.':30'.$gtzone);
$boy_dob = urlencode($bbdate.':30'.$gtzone);


// Kundali Matching

$ch = curl_init();
$url = "https://api.prokerala.com/v2/astrology/kundli-matching?ayanamsa=5&girl_coordinates=$girl_coordinates&boy_coordinates=$boy_coordinates&girl_dob=$girl_dob&boy_dob=$boy_dob";
$header = array(
    "Authorization: Bearer $token"
);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
$responce = curl_exec($ch);
$json_data = json_decode($responce, true);
$kundali_data = $json_data['data'];

$girl_info = $kundali_data['girl_info'];
$g_varana = $girl_info['koot']['varna'];
$g_vasya = $girl_info['koot']['vasya'];
$g_tara = $girl_info['koot']['tara'];
$g_yoni = $girl_info['koot']['yoni'];
$g_gana = $girl_info['koot']['gana'];
$g_bhakoot = $girl_info['koot']['bhakoot'];
$g_nadi = $girl_info['koot']['nadi'];
$g_nakshatra = $girl_info['nakshatra']['name'];
$g_pada = $girl_info['nakshatra']['pada'];
$g_rashi = $girl_info['rasi']['name'];


$boy_info = $kundali_data['boy_info'];
$b_varana = $boy_info['koot']['varna'];
$b_vasya = $boy_info['koot']['vasya'];
$b_tara = $boy_info['koot']['tara'];
$b_yoni = $boy_info['koot']['yoni'];
$b_gana = $boy_info['koot']['gana'];
$b_bhakoot = $boy_info['koot']['bhakoot'];
$b_nadi = $boy_info['koot']['nadi'];
$b_nakshatra = $boy_info['nakshatra']['name'];
$b_pada = $boy_info['nakshatra']['pada'];
$b_rashi = $boy_info['rasi']['name'];


$message = $kundali_data['message']['description'];
$type = $kundali_data['message']['type'];
$guna_milan = $kundali_data['guna_milan']['total_points'];

// echo json_encode($kundali_data);

?>