<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="post">
    
Pelajaran apa yang mau anda cari dengan memasukkan nomor ruangan 
<br>
Pilihlah ruangan diantaranya(203/318/317/134)
<br>
Masukkan nomor ruangan yang anda cari
<input type="text" name="ruang">

<button type="submit" name="kirim">Kirim</button>
</form>

</body>
</html>

<?php


if(isset($_POST["kirim"])){
    $ruangan = $_POST["ruang"];

    if($ruangan == 203){
        echo "Ruangan produktif";
    } elseif($ruangan == 318){
        echo "Ruangan MTK";
    
    } elseif($ruangan == 317){
        echo "Ruangan B INDO";
    }
     elseif($ruangan == 134){
        echo "Ruangan B SUNDA";
    }
    else {
        echo "Ruangan yang anda cari tidak ada";
    }

}


?>











































<!-- 
// $url = '/about';

// switch ($url) {
//   case '/':
//     echo 'Selamat datang di dashboard.';
//     break;
//   case '/about':
//     echo 'Selamat datang di halaman about.';
//     break;
//   case '/contact':
//     echo 'Selamat datang di halaman kontak.';
//     break;
//   default:
//     echo 'Maaf halaman yang anda cari tidak ditemukan.';
// }

// echo '<br>'; -->
