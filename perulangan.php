<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="get">
        Berapa Baju yang mau anda beli
        <input type="text" name ="baju">
        <button type="submit" name = "kirim">kirim</button>
    </form>

</body>
</html>



<?php

if(isset($_GET["kirim"])){

    $baju = $_GET["baju"];
    $a = 1;

    while($a <= $baju){
        echo "Baju ". $a;
        echo "<br>";
        $a++;
    }


}



?>