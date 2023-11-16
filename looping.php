<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Looping</title>
</head>
<body>
<h1>Berlatih Looping</h1>
<?php
echo "<h3>Soal No 1 Looping I Love PHP</h3>";

/*
 Soal No 1
Looping I Love PHP
Lakukan Perulangan (boleh for/while/do while) sebanyak 20 iterasi. Looping terbagi menjadi dua: Looping yang pertama Ascending (meningkat)
dan Looping yang ke dua menurun (Descending).

looping pertama
2 - I Love PHP
4 - I Love PHP
6 - I Love PHP
8 - I Love PHP
10 - I Love PHP
12 - I Love PHP
14 - I Love PHP
16 - I Love PHP
18 - I Love PHP
20- I Love PHP
LOOPING KEDUA
20 - I Love PHP
18 - I Love PHP
16 - I Love PHP
14 - I Love PHP
12 - I Love PHP
10 - I Love PHP
8 - I Love PHP
6 - I Love PHP
4 - I Love PHP
2 - I Love PHP

*/
// Lakukan Looping Disini

for ($urut=1;$urut <=20;$urut++){
    echo "I LOVE PHP: $urut<br/>"; 
}


for ($urut=20;$urut >=1;$urut--){
    echo "I LOVE PHP: $urut<br/>"; 
}
?>






