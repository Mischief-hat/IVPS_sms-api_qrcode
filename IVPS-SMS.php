<?php 
    include('way2sms-api.php');
    $client = new WAY2SMSClient();
    $client->login('9769976101', 'infamous');
    //Number to send SMS to 
    $no='9769976101';
    $client->send($no, 'IVPS-Admin-Check');
    //Add sleep between requests to make this requests more human like! 
    //A blast of request's may mark the ip as spammer and blocking further requests.
    sleep(5);
    //Same message for multiple numbers at once we can append a string with variables for that @blu-dragon
    // $client->send('9820934507,9820934508', 'IVPS-Admin-Check');
    sleep(5);
    $client->logout();
?>