<?php
@system("rm -rf alliance_mall");
$biru="\033[1;34m";
$turkis="\033[1;36m";
$ijo="\033[92m";
$putih="\033[1;37m";
$pink="\033[1;35m";
$red="\033[1;31m";
$kuning="\033[1;33m";
$t = "\n";
$r = "\n\n";
require"config.php";
date_default_timezone_set('Asia/Jakarta');
$time = time();
@system('clear');

echo$ijo."menginstall Janda muda anak satu...".$putih."!".$t;
system('apt install toilet -y');
sleep(0);
@system('clear');

echo$turkis."[+] Silahkan Download Password Di Bawah \n";
echo$turkis."[+] https://bit.ly/3mDpIsT\n";
echo$r;
$pass=file_get_contents("https://pastebin.com/raw/UNNR7ktd");
$pasw=readline("\033[92m[?] Masukkan Password Script  => $hitam");
   if($pasw==$pass){
echo$turkis."[✓]Pasword Benar Cuk :v\n";

ob_start();
exec("https://www.youtube.com/channel/UCmYgwOqIVPUjj8Kmpf2WF8Q");
ob_end_clean();


 }
  elseif($pasw==""){
echo$red."[!]Paswordnya Di isi lah Cuk \n";
ob_start();
exec("termux-open-url https://wa.me/6282279312688");
ob_end_clean();
exit;
}
elseif($pasw!==$pass){
echo$red."[×]Pasword Salah Cuk :v \n";
echo$kuning."Izin Admin Terlebih Dahulu
";
echo$turkis."https://wa.me/6282279312688".$t;

ob_start();
exec("termux-open-url https://wa.me/6282279312688");
ob_end_clean();

exit;
}
@system("clear");

echo$kuning."  ≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈".$putih." Indonesia ".$kuning."≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈".$pink."
  ╔╦╗╔═╗╔═╗╔╦╗  ╔═╗╔╗ ╔═╗╔╗ ╦╦    ╔═╗╔═╗╔╦╗╔═╗╔╦╗".$putih."
   ║ ║╣ ╠═╣║║║  ╠═╣╠╩╗╠═╣╠╩╗║║    ║  ║ ║ ║║║╣  ║║".$ijo."
   ╩ ╚═╝╩ ╩╩ ╩  ╩ ╩╚═╝╩ ╩╚═╝╩╩═╝  ╚═╝╚═╝═╩╝╚═╝═╩╝".$t;
echo$pink." ÷  ".$ijo."Creator".$putih." : ".$kuning."Ṃนhค๓๓ค໓ khคiril".$pink."                       ÷".$t;
echo$pink." ÷  ".$ijo."YouTube".$putih." : ".$kuning."TEAM ABABIL CODED".$pink."                      ÷".$t;
echo$pink." ÷  ".$ijo."Support".$putih." : ".$kuning."Cocentz404".$putih." & ".$kuning."Aneuk Cabak".$putih." & ".$kuning."AkasakaId".$pink."   ÷".$t;
echo$pink." ÷  ".$ijo."Script".$putih."  : ".$kuning."Alliance Mall Automatis Order Barang".$pink."   ÷".$t;
echo$pink." ÷  ".$ijo."YouTube".$putih." : ".$kuning."Cocentz404".$putih." & ".$kuning."Aneuk Cabak".$pink."               ÷".$t;
echo$pink." ÷  ".$ijo."Version".$putih." : ".$kuning."v1.0".$pink."                                   ÷".$t;
echo$pink." ÷  ".$red."Server".$putih."  : ".$ijo."Online".$pink."                                 ÷".$t;
echo$pink." ÷ ".$turkis."        Block Reupload Other Than Indonesia".$pink."       ÷".$t;
echo$kuning." ≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈".$putih." Aceh Tamiang ".$kuning."≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈".$r;

echo$putih."[".$red."+".$putih."]".$putih." Indonesia/English".$t;
echo$putih."[".$red."+".$putih."]".$red." Ini Adalah Program".$putih." Ilegal.!!!".$t;
echo$putih."[".$red."+".$putih."]".$red." Semua Resiko Tan".$putih."ggung Penguna".$t;
echo$putih."[".$red."+".$putih."]".$red." This is an ill".$putih."egal program".$t;
echo$putih."[".$red."+".$putih."]".$red." All risks ar".$putih."e borne by the user".$t;
echo"$r";
echo$putih."[".$ijo."√".$putih."]".$biru." Starting Bot Alliance Mall";
$ar=0;$is=3;while($ar<$is){
sleep(1);
$ar++;
echo $putih.".";
}
sleep(1);
echo $putih."!".$r;
sleep(1);

function minTen($s, $m) {
    $m2 = "0".$m;
    if ($s != 0) {
        $s = $s-1;
        if ($s<10 OR $s == 0) {
            $s2 = "0".$s;
            $time = $m2.":".$s2."\r";
            return $time;
        } else {
            $time = $m2.":".$s."\r";
            return $time;
        }
    } else if ($s == 0) {
        $m = $m-1;
        $s = 59;
        $time = "0".$m.":".$s."\r";
        return $time;
    }
}
function plusTen($s, $m) {
    $m = $m;
    if ($s != 0) {
        $s = $s-1;
        if ($s<10 OR $s == 0) {
            $s2 = "0".$s;
            $time = $m.":".$s2."\r";
            return $time;
        } else {
            $time = $m.":".$s."\r";
            return $time;
        }
    } else if ($s == 0) {
        $m = $m-1;
        if ($m <= 9) {
            $s = 59;
            $time = "0".$m.":".$s."\r";
            return $time;
        } else {
            $s = 59;
            $time = $m.":".$s."\r";
            return $time;
        }
    }
}
function algoTime($s, $m) {
    if ($m < 10) {
                $time = minTen($s, $m);
                return $time;
        } else {
                $time = plusTen($s,$m);
                return $time;
        }
}
function timer($i) {
    global $merah;
    global $blue;
    global $color;
    if ($i > 0) {
        $s = $i%60;
        $m = floor($i/60);
        $time = algoTime($s, $m);
        echo "\033[92m[÷] Sedang Memesan Barang Mohon Tunggu $time";
        sleep(1);
        timer($i-1);
    }
}

While(True){
require"config.php";
	$body = "tel=$phone&pwd=$password&jizhu=1";
   $ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://vosxxjj.jahgd83gs-8xygx8d3xg.com/index/auth/do_login");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 10);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
$hs = Array();
$hs[] = "origin:https://vosxxjj.jahgd83gs-8xygx8d3xg.com";
$hs[] = "content-type:application/x-www-form-urlencoded; charset=UTF-8";
$hs[] = "Host:vosxxjj.jahgd83gs-8xygx8d3xg.com";
$hs[] = "user-agent:Mozilla/5.0 (Linux; Android 9; vivo 1904 Build/PPR1.180610.011; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/86.0.4240.110 Mobile Safari/537.36 Html5Plus/1.0";
$hs[] = "referer:https://vosxxjj.jahgd83gs-8xygx8d3xg.com/index/rot_order/index?type=4";
$hs[] = "cookie:__cfduid=d55e26423ded7dd4b5c45573d7edee5451604093528";
$hs[] = "cookie:bt_route=4d590e3de7e5e4c325a030644a79fc6a";
$hs[] = "cookie:x-api-key=4c25e533c1bb431791df8de2562a177e";
curl_setopt($ch, CURLOPT_HTTPHEADER, $hs);
$xcx0 = curl_exec($ch);
curl_close($ch);
$kinan0 = json_decode($xcx0, true);

echo$putih."[".$red."•".$putih."]".$ijo." Username".$putih." : ".$kuning.$kinan0["loginXyUser"]["username"];
echo$putih."   [".$red."•".$putih."]".$ijo." Balance".$putih." : ".$kuning."Rp".$kuning.$kinan0["loginXyUser"]["balance"].$r;
	
@system("rm -rf alliance_mall");

if ($kinan0["msg"] == "Akun tidak ada"){
 echo "\033[1;33m[•] Buat Akun Dulu Tod..!!\n";
 exit();
 }
 if ($kinan0["msg"] == "Masukkan nomor telepon Anda"){
 echo "\033[1;33m[•] Password Salah Anjing...!\n";
 exit();
 }


	
	

	$body = '';
   $ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://vosxxjj.jahgd83gs-8xygx8d3xg.com/index/rot_order/isubmit_order?cid=&m=0.7234053634559685");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 10);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
$hs = Array();
$hs[] = "origin:https://vosxxjj.jahgd83gs-8xygx8d3xg.com";
$hs[] = "content-type:application/x-www-form-urlencoded; charset=UTF-8";
$hs[] = "Host:vosxxjj.jahgd83gs-8xygx8d3xg.com";
$hs[] = "user-agent:Mozilla/5.0 (Linux; Android 9; vivo 1904 Build/PPR1.180610.011; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/86.0.4240.110 Mobile Safari/537.36 Html5Plus/1.0";
$hs[] = "referer:https://vosxxjj.jahgd83gs-8xygx8d3xg.com/index/rot_order/index?type=4";
$hs[] = "cookie:__cfduid=d55e26423ded7dd4b5c45573d7edee5451604093528";
$hs[] = "cookie:bt_route=4d590e3de7e5e4c325a030644a79fc6a";
$hs[] = "cookie:x-api-key=".$kinan0["x-api-key"];
curl_setopt($ch, CURLOPT_HTTPHEADER, $hs);
$xcx2 = curl_exec($ch);
curl_close($ch);
$kinan2 = json_decode($xcx2, true);


if ($kinan2["msg"] == "Pesanan belum selesai di akun ini, anda tidak dapat mengambil pesanan selanjutnya"){
 echo "\033[1;33m[•] Ada Pesanan Yang Belum Anda Konfirmasi...!\n";
 exit();
 }
 if ($kinan2["msg"] == "Jumlah transaksi hari ini telah mencapai batas atas!"){
 echo "\033[1;33m[•] Sudah Limit Bossku,Besok Lagi Ya...!\n";
 exit();
 }



   $ch = curl_init();
    $body2 = "id=".$kinan2["oid"];
		curl_setopt($ch, CURLOPT_URL, "https://vosxxjj.jahgd83gs-8xygx8d3xg.com/index/order/order_info");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 10);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $body2);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
$hs = Array();
$hs[] = "origin:https://vosxxjj.jahgd83gs-8xygx8d3xg.com";
$hs[] = "content-type:application/x-www-form-urlencoded; charset=UTF-8";
$hs[] = "Host:vosxxjj.jahgd83gs-8xygx8d3xg.com";
$hs[] = "user-agent:Mozilla/5.0 (Linux; Android 9; vivo 1904 Build/PPR1.180610.011; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/86.0.4240.110 Mobile Safari/537.36 Html5Plus/1.0";
$hs[] = "referer:https://vosxxjj.jahgd83gs-8xygx8d3xg.com/index/rot_order/index?type=4";
$hs[] = "cookie:__cfduid=d55e26423ded7dd4b5c45573d7edee5451604093528";
$hs[] = "cookie:bt_route=4d590e3de7e5e4c325a030644a79fc6a";
$hs[] = "cookie:x-api-key=".$kinan0["x-api-key"];
curl_setopt($ch, CURLOPT_HTTPHEADER, $hs);
$xcx = curl_exec($ch);
curl_close($ch);
$kinan = json_decode($xcx, true);





   $ch = curl_init();
    $body6 = "oid=".$kinan2["oid"];
		curl_setopt($ch, CURLOPT_URL, "https://vosxxjj.jahgd83gs-8xygx8d3xg.com/index/order/do_order");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 10);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $body6);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
$hs = Array();
$hs[] = "origin:https://vosxxjj.jahgd83gs-8xygx8d3xg.com";
$hs[] = "content-type:application/x-www-form-urlencoded; charset=UTF-8";
$hs[] = "Host:vosxxjj.jahgd83gs-8xygx8d3xg.com";
$hs[] = "user-agent:Mozilla/5.0 (Linux; Android 9; vivo 1904 Build/PPR1.180610.011; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/86.0.4240.110 Mobile Safari/537.36 Html5Plus/1.0";
$hs[] = "referer:https://vosxxjj.jahgd83gs-8xygx8d3xg.com/index/rot_order/index?type=4";
$hs[] = "cookie:__cfduid=d55e26423ded7dd4b5c45573d7edee5451604093528";
$hs[] = "cookie:bt_route=4d590e3de7e5e4c325a030644a79fc6a";
$hs[] = "cookie:x-api-key=".$kinan0["x-api-key"];
curl_setopt($ch, CURLOPT_HTTPHEADER, $hs);
$xcx1 = curl_exec($ch);
curl_close($ch);
$kinan1 = json_decode($xcx1, true);

@system("rm -rf alliance_mall");


   $ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://vosxxjj.jahgd83gs-8xygx8d3xg.com/index/index/home");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 10);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$hs = Array();
$hs[] = "origin:https://vosxxjj.jahgd83gs-8xygx8d3xg.com";
$hs[] = "content-type:application/x-www-form-urlencoded; charset=UTF-8";
$hs[] = "Host:vosxxjj.jahgd83gs-8xygx8d3xg.com";
$hs[] = "user-agent:Mozilla/5.0 (Linux; Android 9; vivo 1904 Build/PPR1.180610.011; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/86.0.4240.110 Mobile Safari/537.36 Html5Plus/1.0";
$hs[] = "referer:https://vosxxjj.jahgd83gs-8xygx8d3xg.com/index/index/home";
$hs[] = "cookie:__cfduid=d55e26423ded7dd4b5c45573d7edee5451604093528";
$hs[] = "cookie:bt_route=4d590e3de7e5e4c325a030644a79fc6a";
$hs[] = "cookie:x-api-key=".$kinan0["x-api-key"];
curl_setopt($ch, CURLOPT_HTTPHEADER, $hs);
$xcx3 = curl_exec($ch);
curl_close($ch);

@system("rm -rf alliance_mall");

$a = explode('<div data-v-eebac136="" class="p-1-c-1">',$xcx3);
$a1 = explode('</div>',$a[1]);
$a2 = $a1[0];
echo$putih."[".$red."•".$putih."]".$ijo." Balance Alliance mall".$putih." : ".$kuning.$a2.$t;

timer(15);

}

?>
