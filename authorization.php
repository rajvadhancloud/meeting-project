<?php

// getting access token

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
    CURLOPT_POSTFIELDS => 'client_id=1000.PNH4XD1HVG4FGE7VH7ZJY9BNC6X1DT&grant_type=refresh_token&client_secret=027e8898797be2b8c44d52d3b0bcb173ae0a618ce6&redirect_uri=https%3A%2F%2Fchatgpt.com%2F&refresh_token=1000.7558002421537d545a8e899d3cc5ced2.b552eb005e7cfcfe7b8c14025a0c5503',
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/x-www-form-urlencoded',
        'Cookie: _zcsr_tmp=7ee5bcd2-536f-4b89-8ec2-bc7de4a312ba; iamcsr=7ee5bcd2-536f-4b89-8ec2-bc7de4a312ba; zalb_6e73717622=dea4bb29906843a6fbdf3bd5c0e43d1d'
    ),
));

$response = curl_exec($curl);

curl_close($curl);

$responseArray = json_decode($response, true);

// Get the access token from the array
$accessToken = $responseArray['access_token'];

// Display the access token
// echo "Access Token: " . $accessToken;

// booking appointment

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $startDate = $_POST["startdate"];
    $endDate = $_POST["enddate"];
    echo $startDate . " " . $endDate;
    
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
        CURLOPT_POSTFIELDS => array('service_id' => '239309000000047036', 'staff_id' => '239309000000033020', 'resource_id' => '239309000000047002', 'from_time' => $startDate, 'to_time' => $endDate, 'timezone' => 'Asia/Calcutta', 'customer_details' => '{"name": "John", "email":"john1234567@zylker.com", "phone_number":"9876543201"}'),
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer ' . $accessToken,
            'Cookie: JSESSIONID=9DF2A57754CCCF7AB611E6D9EA92541D; ZCNEWUIPUBLICPORTAL=true; _zcsr_tmp=14067c2f-f77e-4f54-8ee6-08b285a53558; zalb_f8f5095899=adbcb3de29f2c64abb8f3ca36480e470; zccpn=14067c2f-f77e-4f54-8ee6-08b285a53558'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
}
