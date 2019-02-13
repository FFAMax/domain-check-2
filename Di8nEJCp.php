<?php
function send_telegram($dst,$msg)
{
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/botXXX:YYYYY/sendMessage?chat_id=".get_telegram_id($dst)."&text=".urlencode($msg));
        curl_setopt($ch, CURLOPT_FAILONERROR, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_exec($ch);
        curl_close($ch);
}

function get_telegram_id($name){
    switch ($name) {
    case "NAME":
        $dst=IDIDIDID;
        break;
		...
    return $dst;
}

if(isset($argv[3])&&$argv[3]=="file"){
    $msg=file_get_contents($argv[2]);
    send_telegram($argv[1],$msg);
    exit;
}

if(isset($argv[2])){
    send_telegram($argv[1],$argv[2]);
}
?>