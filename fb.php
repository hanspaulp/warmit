<?php 
   $url = "http://warmit.it";
   $request_url ="https://graph.facebook.com/comments/?ids=".$url;
    $requests = file_get_contents($request_url);
    $fb_response = json_decode($requests, true);
    print "<PRE>";
    foreach ($fb_response['http://warmit.it']['comments']['data']  as $data) {    
        echo 'From ID: ' . $data['from']['id'] . '<br />';
        echo 'From Name: ' . $data['from']['name'] . '<br />';
        echo 'Message: ' . $data['message'] . '<br />';
        echo 'Timestamp: ' . $data['created_time'] . '<br /><br />';
    }
    print "</PRE>";
?>

