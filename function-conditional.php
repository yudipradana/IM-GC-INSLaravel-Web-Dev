<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Function</title>
</head>
<body>
<h1>Berlatih Function PHP</h1>
<?php
echo "<h3> Soal No 1 Greetings </h3>";

function salam ($waktu = "Datang", $nama ="Admin"){
    return "Halo $waktu, $nama!";
}

?>
<!DOCTYPE html>
<html>
<head>
    <tittle>latihan Function</tittle>
</head>
    <h1><?= salam("bagas,","Selamat Datang di Garuda Cyber Institute"); ?></h1>
    <h1><?= salam("wahyu,","Selamat Datang di Garuda Cyber Institute"); ?></h1>
    <h1><?= salam("pradana,","Selamat Datang di Garuda Cyber Institute"); ?></h1>
</body>
</html>






<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Reverse string</title>
</head>
<body>
<h1>Berlatih Reverse string</h1>
<?php
$str= "Abdul";
$revstr="";
$count=strlen($str)-1;
for ($i=$i=$count;$i>=0;$i--){
    $revstr.=$str[$i];
}
echo $revstr;
?>
function palindrome ($kata){
    if ($kata == balikkata ($kata)){
        echo $kata .  "TRUE <br>";
    }else
    echo $kata  .  "FALSE"<br>";
    }
}
palindrome("civic") ; // true
palindrome("nababan") ; // true
palindrome("jambaban"); // false
palindrome("racecar"); // true


