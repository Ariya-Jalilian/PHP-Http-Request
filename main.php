<?php 
//////////////////////// Get User Data ///////////////////////

    $MobileNumber = (int)readline('Enter Phone: '); 
    echo "Mobile= " , "$MobileNumber'\n";    

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

$url = "https://api.taaghche.com/v4/site/auth/login"; // Website Url

$curl = curl_init($url); // Curl For Req Url
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$headers = array(
   "Accept-Encoding: gzip, deflate, br",
   "Accept-Language: fa,en-US;q=0.9,en;q=0.8",
); // You Can See Default Headers Of Url In Network Tab In Inspect

curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
$data = '{"contact":"'.$MobileNumber.'","forceOtp":false}';

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

// only For Debug
// curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
// curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$res = curl_exec($curl);

// only For Debug
// echo $res;
?>
