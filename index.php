<?php
$api_key = "your api keys goes here";
$to = "0593529475";
$msg = "Hello this is a message from Official hotboys";
$msg = urlencode($msg);
$sender_id = "put your sender name here";
$end_point = "https://apps.mnotify.net/smsapi?key=".$api_key."&to=".$to."&msg=".$msg."&sender_id=".$sender_id." ";

$response = file_get_contents($end_point);

if ($response == true) {
     echo "Message has been sent successfully";
} else {
    echo "Failed, Message could not sent".$response;
}
