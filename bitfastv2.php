<?php 
set_time_limit(0);
date_default_timezone_set('Asia/Jakarta');
error_reporting(0);
function get_between($string, $start, $end) {
    $string = " ".$string;
    $ini = strpos($string,$start);
    if ($ini == 0) return "";
    $ini += strlen($start);
    $len = strpos($string,$end,$ini) - $ini;
    return substr($string,$ini,$len);
}
function earn_bitfast($cok) {
  $no = array("1","2","3","4","5");
  foreach($no as $data1){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://allowweb.com/bitfast/index.php/balance/addPoint');
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_REFERER, 'https://allowweb.com/bitfast/index.php/dashboard');
	curl_setopt($ch, CURLOPT_COOKIEJAR, $cok); 
	curl_setopt($ch, CURLOPT_COOKIEFILE, $cok);
    $ua = array();
    $ua[] = "User-Agent: Mozilla/5.0 (Linux; Android 5.1; A1603 Build/LMY47I; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/43.0.2357.121 Mobile Safari/537.36";
    curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
    curl_setopt($ch, CURLOPT_POST, 1);
    $data["id"] = $data1;
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $result = curl_exec($ch);
    curl_close($ch);
    $json = json_decode($result, true);
    echo "Message : ".$json["message"]." | Ballance : ".$json["pointBalance"]."\n";
    sleep(90);
  }
}
function reset_button($cok) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://allowweb.com/bitfast/index.php/dashboard/getDesabledButtons');
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_REFERER, 'https://allowweb.com/bitfast/index.php/dashboard');
	curl_setopt($ch, CURLOPT_COOKIEJAR, $cok); 
	curl_setopt($ch, CURLOPT_COOKIEFILE, $cok);
    $headers = array();
    $headers[] = "X-Requested-With: XMLHttpRequest";
    $headers[] = "User-Agent: Mozilla/5.0 (Linux; Android 5.1; A1603 Build/LMY47I; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/43.0.2357.121 Mobile Safari/537.36";
    $headers[] = "Content-Type: application/x-www-form-urlencoded; charset=UTF-8";
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_POST, 1);
    $result = curl_exec($ch);
    curl_close($ch);
}
function login($email, $password) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://allowweb.com/bitfast/index.php/user/login');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "email={$email}&password={$password}");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
    $headers = array();
    $headers[] = 'Authority: allowweb.com';
    $headers[] = 'Pragma: no-cache';
    $headers[] = 'Cache-Control: no-cache';
    $headers[] = 'Origin: https://allowweb.com';
    $headers[] = 'Upgrade-Insecure-Requests: 1';
    $headers[] = 'Content-Type: application/x-www-form-urlencoded';
    $headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.103 Safari/537.36';
    $headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3';
    $headers[] = 'Referer: https://allowweb.com/bitfast/index.php/user';
	$headers[] = 'Accept: text/plain, */*; q=0.01';
    $headers[] = 'Accept-Language: en-US,en;q=0.9,id;q=0.8';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie-bitfast.txt');
	curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookie-bitfast.txt');
    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close ($ch);
    return $result;
}
print"\e[0;32m
     __ __  _____   ______  ____  _   _____________ _______     __ __ 
  __/ // /_/  _/ | / / __ \/ __ \/ | / / ____/ ___//  _/   | __/ // /_
 /_  _  __// //  |/ / / / / / / /  |/ / __/  \__ \ / // /| |/_  _  __/
/_  _  __// // /|  / /_/ / /_/ / /|  / /___ ___/ // // ___ /_  _  __/ 
 /_//_/ /___/_/ |_/_____/\____/_/ |_/_____//____/___/_/  |_|/_//_/    
                                                                      
 \e[0m\r\n";
print"\e[1;34m[#INFO]\e[0m \e[1;33mPembuat Cornelius Alfredo | Support By #SaveReceh Channel \e[0m\r\n";
print"\e[1;34m[#INFO]\e[0m \e[1;33mBot BitFast\e[0m\r\n";
print"\e[1;34m[#INFO]\e[0m \e[1;33mJangan Lupa Senyum Hari Ini\e[0m\r\n\r\n";
exec("termux-open-url https://t.me/joinchat/AAAAAFUgvj3E7Wy6S32uQg");
echo 'Masukkan Email : '; 
$email = trim(fgets(STDIN));
exec("termux-open-url https://www.youtube.com/channel/UC2dUZ1YCv2LeKWplJdlWS3w");
echo 'Masukkan Password : '; 
$password = trim(fgets(STDIN)); 
$login = login($email,$password);
$code = get_between($login,'<h2 class="signin-title-primary">Log in to continue.</h2>
<br />
<div class="alert alert-danger">
',' </div>');
if($code == "Username or password error"){
    exec("termux-open-url https://t.me/joinchat/AAAAAFUgvj3E7Wy6S32uQg");
    echo"\e[1;34m[#INFO]\e[0m \e[0;31mEmail/Password Salah Bosku\e[0m\r\n";
} else {
system("clear");
print"\e[1;34m[#INFO]\e[0m \e[1;33mPembuat Cornelius Alfredo | Support By #SaveReceh Channel \e[0m\r\n";
print"\e[1;34m[#INFO]\e[0m \e[1;33mBot BitFast\e[0m\r\n";
print"\e[1;34m[#INFO]\e[0m \e[1;33mJangan Lupa Senyum Hari Ini\e[0m\r\n\r\n";
echo"\e[1;36m[".date('G:i:s')."]\e[0m \e[0;31mLogin Berhasil . . .\e[0m\r\n";
$cookie = "cookie-bitfast.txt";
while(true){
    reset_button($cookie);
    earn_bitfast($cookie);
}
} ?>
