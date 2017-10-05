<?php 
    include('way2sms-api.php');
    $client = new WAY2SMSClient();
    $client->login('9769976101', 'infamous');
    $client->send('9769976101', 'IVPS-Admin-Check');
    //Add sleep between requests to make this requests more human like! 
    //A blast of request's may mark the ip as spammer and blocking further requests.
    sleep(5);
    $client->send('9820934507,9820934508', 'IVPS-Admin-Check');
    sleep(5);
    $client->logout();
?>