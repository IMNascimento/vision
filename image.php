<?php

session_start();

$imagetoken = $_GET['token'];
$faces = $_SESSION['faces'][$imagetoken];
$image = imagecreatefromjpeg("guard/". $imagetoken . ".jpg");

foreach ($faces as $key => $face) {
    $face = json_decode($face);
    $faceColorR = $_SESSION['faces']['colors'][$key][0];
    $faceColorG = $_SESSION['faces']['colors'][$key][1];
    $faceColorB = $_SESSION['faces']['colors'][$key][2];

    foreach ($face as $part) {
        for ($i=0; $i < 5; $i++) {
            for ($j=0; $j < 5; $j++) {
                imagesetpixel($image, round($part->position->x), round($part->position->y), imagecolorallocate($image, $faceColorR, $faceColorG, $faceColorB));
                imagesetpixel($image, round($part->position->x - random_int(1, 5)) , round($part->position->y - random_int(1, 5)), imagecolorallocate($image, $faceColorR, $faceColorG, $faceColorB));
                imagesetpixel($image, round($part->position->x + random_int(1, 5)) , round($part->position->y + random_int(1, 5)), imagecolorallocate($image, $faceColorR, $faceColorG, $faceColorB));
                imagesetpixel($image, round($part->position->x + random_int(1, 5)) , round($part->position->y - random_int(1, 5)), imagecolorallocate($image, $faceColorR, $faceColorG, $faceColorB));
                imagesetpixel($image, round($part->position->x - random_int(1, 5)) , round($part->position->y + random_int(1, 5)), imagecolorallocate($image, $faceColorR, $faceColorG, $faceColorB));
                imagesetpixel($image, round($part->position->x - random_int(1, 5)) , round($part->position->y - random_int(1, 5)), imagecolorallocate($image, $faceColorR, $faceColorG, $faceColorB));
            }
        }
    }
}

header("Content-Type: image/png");
imagejpeg($image);
