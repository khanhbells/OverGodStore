<!-- <?php
header('Content-type: text/html; charset=utf-8');


function execPostRequest($url, $data)
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($data))
    );
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    //execute post
    $result = curl_exec($ch);
    //close connection
    curl_close($ch);
    echo($result);
    $jsonResult = json_decode($result, true);
    if ($jsonResult['payUrl'] != null)
        header('Location: ' . $jsonResult['payUrl']);
    return $result;
}

$endpoint = 'https://test-payment.momo.vn/v2/gateway/api/pos';
$accessKey = 'F8BBA842ECF85';
$secretKey = 'K951B6PE1waDMi640xX08PD3vg6EkVlz';
$orderInfo = 'pay with MoMo';
$partnerCode = 'MOMO';
$redirectUrl = "http://localhost:81/thuctapcsdl/index.php?quanly=thongtinthanhtoan";
$ipnUrl = "http://localhost:81/thuctapcsdl/index.php?quanly=thongtinthanhtoan";
$amount = '50000';
$orderId = time()."";
$requestId = time()."";
$extraData ='';
$partnerName = 'MoMo Payment';
$storeId = 'Test Store';
$paymentCode = 'L/U2a6KeeeBBU/pQAa+g8LilOVzWfvLf/P4XOnAQFmnkrKHICj51qrOTUQ+YrX8/Xs1YD4IOdyiGSkCfV6Je9PeRzl3sO+mDzXNG4enhigU3VGPFh67a37dSwItMJXRDuK64DCqv35YPQtiAOVVZV35/1XBw1rWopmRP03YMNgQWedGLHwmPSkRGoT6XtDSeypJtgbLZ5KIOJsdcynBdFEnHAuIjvo4stADmRL8GqdgsZ0jJCx/oq5JGr8wY+a4g9KolEOSTLBTih48RrGZq3LDBbT4QGBjtW+0W+/95n8W0Aot6kzdG4rWg1NB7EltY6/A8RWAHJav4kWQoFcxgfA==';
$orderGroupId ='';
$autoCapture =True;
$lang = 'vi';

    $requestId = time().'';
    $extraData = "";
    //before sign HMAC SHA256 signature
    $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&paymentCode=" . $paymentCode . "&requestId=" . $requestId;
    $signature = hash_hmac("sha256", $rawHash, $secretKey);
    $data = array(
        'partnerCode' => $partnerCode,
        'partnerName' => "Test",
        'storeId' => 'MomoTestStore',
        'requestId' => $requestId,
        'amount' => $amount,
        'orderId' => $orderId,
        'orderInfo' => $orderInfo,
        'ipnUrl' => $ipnUrl,
        'lang' => 'vi',
        'autoCapture' => $autoCapture,
        'extraData' => $extraData,
        'paymentCode' => $paymentCode,
        'orderGroupId' => $orderGroupId,
        'signature' => $signature);
    $result = execPostRequest($endpoint, json_encode($data));
    $jsonResult = json_decode($result, true);  // decode json

    //Just a example, please check more in there

    header('Location: ' . $jsonResult['payUrl']);

?> -->