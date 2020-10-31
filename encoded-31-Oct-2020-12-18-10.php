<?php
$biru="\033[1;34m";
$turkis="\033[1;36m";
$ijo="\033[92m";
$putih="\033[1;37m";
$pink="\033[1;35m";
$red="\033[1;31m";
$kuning="\033[1;33m";
$t = "\n";
$r = "\n\n";
@system("clear");
echo$kuning."[•] Silahkan Subrek dulu ".$t;
echo$kuning."[•] Link Yt : https://www.youtube.com/channel/UCmYgwOqIVPUjj8Kmpf2WF8Q
ob_start();
exec("https://www.youtube.com/channel/UCmYgwOqIVPUjj8Kmpf2WF8Q");
ob_end_clean();
