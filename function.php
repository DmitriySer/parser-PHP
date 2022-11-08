<?php

function clearData($val){
    $val = strip_tags($val);
    $val = htmlspecialchars($val);
    $val = stripslashes($val);
    $val = trim($val);
    return $val;
}

function cheak($array, $connect)
{
    foreach ($array as $item);
    $item =  extract($item, EXTR_PREFIX_SAME, 'dat');
    $status = clearData($status);
    $number = clearData($number);
    $price = clearData($price);
    $link = clearData($link);
    $idLot = clearData($idLot);
    $date = preg_replace("/&#?[a-z0-9]{2,8};/i", " ", $date);
    $check = mysqli_query($connect, "SELECT * FROM `parserTab` WHERE `link` = '$link' and `idLot` = '$idLot'");
    if (mysqli_num_rows($check) > 0) {
        echo "Слот уже имеется " . 'Номер лота:' . $number . ' ссылка:' . $link . ' id:' . $idLot . ' дата:' . $date . ' статус:' . $status . ' сумма: ' . $price . "<br>";
    } else {
        echo "Слот обновлен " . 'Номер лота:' . $number . ' ссылка:' . $link . ' id:' . $idLot . ' дата:' . $date . ' статус:' . $status . ' сумма: ' . $price . "<br>";
        mysqli_query($connect, "INSERT INTO `parserTab` (`status`,`price`,`number`,`link`, `idLot`,`date`) VALUES ('$status' , '$price' , '$number', '$link ', '$idLot', '$date' )");
    }
}