<?php
date_default_timezone_set("Asia/JAKARTA"); 

if(!empty($_GET['x'])){
    $status = $_GET['x'];
    } else {
    
    $kata = file("kata.txt");
    $isine = $kata[array_rand($kata)];
    $statuse= $isine; 
    
    }
    
    $string = $statuse;
    $result = preg_replace("/@/", "", $string);
    echo $result;

    $myfile = fopen("kataig.txt", "w") or die("Unable to open file!");
    $txt = ''.$result.'
    
    ------------
    #catatanhijrahid #literasi #literasi15detik
    #desmayquote #coretanaksaraku #desimayangsari
    #cintamurni #murnisetya_ #ummufatih #nasehatcinta
    #dakwahjomblo #cinta #deni_syahputra98
    #tausiyahcinta #hijrahcinta #hijrahsantun #tausiyahku
    #catatancintamuslimah #cintamulia #berusahabaik
    #beranihijrah #duniajilbab #indonesiatanpapacaran
    #cintadalamdiam #cintakarenaallah #beraniberhijrah
    #likeislamproject #hijrahsantun #selfreminder
    #ferryanugerahbinrahman';
    fwrite($myfile, $txt);
    fclose($myfile);

$teks = $result;
$background ='spongebob';
$url = 'https://koceng404.my.id';

$headers   = array();
$headers[] = "Accept-Encoding: UTF-8";
$headers[] = "Content-Type: application/x-www-form-urlencoded";
$headers[] = "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7";
$headers[] = "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:85.0) Gecko/20100101 Firefox/85.0";
$headers[] = "Cookie: PHPSESSID=2dd20f39fff319075df5c67ff1b38f76; timezone=Asia/Jakarta";

$post = 'text='.urlencode($teks).'&overlay=overlay4.png&background='.$background.'&size=50&font=Aaa_PoetsenOne-Regular.ttf';
$post      = yarzCurl($url, $post, false, $headers, true);

echo json_encode($post);

$dataku = $post;

function yarzCurl($url, $fields = false, $cookie = false, $httpheader = false, $encoding = false)

{
  

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    if ($fields !== false) {
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
    }
    if ($encoding !== false) {
        curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
    }
    if ($cookie !== false) {
        curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
        curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
    }
    if ($httpheader !== false) {
        curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader);
    }
    $response = curl_exec($ch);
    curl_close($ch);
    return $response;
}