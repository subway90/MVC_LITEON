<?php

require 'vendor/autoload.php'; // Tải thư viện Google API

// Khởi tạo Google Client
$client = new Google_Client();
$client->setApplicationName('Google Sheets API PHP');
$client->setScopes(Google_Service_Sheets::SPREADSHEETS);
$client->setAuthConfig(SHEET_JSON_FILE);
$client->setAccessType('offline');
$service = new Google_Service_Sheets($client);

# [VARIABLE]
$data = []; // danh sách data sheet
$_SESSION['temp'] = [];

# [HANDLE]

// get input
if(isset($_POST['input_name']) && $_POST['input_name']) $input_name = mb_strtolower($_POST['input_name'],'UTF-8');
// toast error
else {
    toast_create('danger','VUI LÒNG NHẬP HỌ VÀ TÊN QUÝ KHÁCH / 請輸入您的姓名');
    route();
}

// save input
$_SESSION['temp']['input'] = $input_name;

// save time call API
$_SESSION['temp']['time'] = time();

// call API get data from GG Sheet
try {
    // query get
    $response = $service->spreadsheets_values->get(SHEET_ID, 'Info!A2:F');
    
    // get values
    $data = $response->getValues(); 

    // checks exist
    if (empty($data)) {
        toast_create('danger', 'Không có dữ liệu nào được tìm thấy. / 未找到任何數據。');
        route();
    }
} catch (Google_Service_Exception $e) {
    // error 429: too many request in time
    if ($e->getCode() == 429) {
        toast_create('danger', 'Vui lòng thử lại sau 1 phút / 請稍後再試一次，1分鐘後。');
        route();
    }
}

// handle check
foreach ($data as $row) {
    // find input
    if($input_name === mb_strtolower($row[0],'UTF-8')) {
        // save in session temp
        $_SESSION['temp']['result'] = $row;

        // find người ở cùng
        foreach ($data as $row_2) {
            // cùng phòng, khác tên
            if($row_2[4] === $_SESSION['temp']['result'][4] && $row_2[0] !== $_SESSION['temp']['result'][0])
            $_SESSION['temp']['roomate'][] = $row_2;
        }
        // kết thúc vòng lặp find input
        break;
    }
}

// route
if(empty($_SESSION['temp']['result'])) {
    toast_create('danger','Không tìm thấy thông tin người dùng / 找不到用戶信息。');
    route();
}else {
    route('result');
}