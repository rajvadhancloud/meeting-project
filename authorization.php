<?php

session_start();

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://accounts.zoho.in/oauth/v2/token',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => 'client_id=1000.JDPY4GYR048YMLXJLBKOAONSR20SFB&grant_type=refresh_token&client_secret=1d63505fa3fc344729e45d5dd1cb4dea86a9f443be&redirect_uri=https%3A%2F%2Fchatgpt.com%2F&refresh_token=1000.190711086fa717f4cd5acfe8717a9d34.9aba92378a60e76f78408a70b5c74b93&scope=zohobookings.data.CREATE%20zohobookings.data.READ',
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/x-www-form-urlencoded',
        'Cookie: _zcsr_tmp=34a81d23-3725-4e34-a738-2d562a07399f; iamcsr=34a81d23-3725-4e34-a738-2d562a07399f; zalb_6e73717622=dea4bb29906843a6fbdf3bd5c0e43d1d'
    ),
));

$response = curl_exec($curl);

curl_close($curl);
// echo $response;


$responseArray = json_decode($response, true);

$accessToken = $responseArray['access_token'];

// echo $accessToken;


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $startDate = $_POST["startdate"];
    $endDate = $_POST["enddate"];



    $jayParsedAry1 = [
        "name" => $_SESSION['name'],
        "email" => $_SESSION['mail'],
        "phone_number" => $_SESSION['phone']
    ];

    if(strval($_SESSION["industry"])=="banking"){
        $staffId = "243788000000038022";
    }
    else if(strval($_SESSION["industry"])=="finance"){
        $staffId = "243788000000038022";
    }
    else if(strval($_SESSION["industry"])=="wealth"){
        $staffId = "243788000000035016";
    }
    else{
        $staffId = "243788000000035016";
    }

    // echo $startDate ." ".$endDate;

    $jayParsedAry2 = [
        "service_id" => "243788000000035054",
        "staff_id" => $staffId,
        "resource_id" => "243788000000035078",
        "from_time" => $startDate,
        "to_time" => $endDate,
        "timezone" => "Asia/Calcutta",
        "customer_details" => json_encode($jayParsedAry1)
    ];

    // echo "<pre>";
    // print_r($jayParsedAry2);


    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://www.zohoapis.in/bookings/v1/json/appointment',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => $jayParsedAry2,
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer ' . $accessToken,
            'Cookie: JSESSIONID=10BED64E0A965C1130BBDD0D98366B11; ZCNEWUIPUBLICPORTAL=true; _zcsr_tmp=f0513815-95a7-4e07-96a1-27dae628d0bd; zalb_f8f5095899=e7b85dcbca5e01412926c510aaf482b7; zccpn=f0513815-95a7-4e07-96a1-27dae628d0bd'
        ),
    ));

    $response = curl_exec($curl);
    echo $response;

    curl_close($curl);
    if ($response) {
        echo "<script>alert('meeting booked succesfully')</script>";
        // session_destroy();
    }
}
