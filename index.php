<?php

$mainImage = imagecreatefromjpeg('vader.jpg');   //apre immagine 3.jpg
$mainWidth = imagesx($mainImage); // trova la larghezza
$mainHeight = imagesy($mainImage); // trova l'altezza
$thumbWidth = intval($mainWidth / 4); // calcola la larghezza della thumbinals
$thumbHeight = intval($mainHeight / 4); // calcola l'altezza della thumbinals
$myThumbnail = imagecreatetruecolor($thumbWidth, $thumbHeight); // scala l'immagina
imagecopyresampled($myThumbnail, $mainImage, 0, 0, 0, 0, $thumbWidth, $thumbHeight, $mainWidth, $mainHeight); // copia l'immagine originale nell'immagine thumbinal
header("Content-type: image/jpeg"); // imposto l'header del file
imagejpeg($myThumbnail); // scrivo l'immagina
imagedestroy($myThumbnail); // distruggo l'immagine modificate
imagedestroy($mainImage); // distruggo l'immagine originale


