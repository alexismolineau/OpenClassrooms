<?php 
    header ('Content-type: img/png');
    $image = imagecreate(200,50);

    $orange = imagecolorallocate($image, 255, 128, 0);
    $bleu = imagecolorallocate($image, 0, 0, 255);
    $bleuclair = imagecolorallocate($image, 156, 227, 254);
    $noir = imagecolorallocate($image, 0, 0, 0);
    $blanc = imagecolorallocate($image, 255, 255, 255);

    imagestring($image, 5, 30, 20, 'Coucou les nazes', $noir);
    imagecolortransparent($image, $noir);

    imagepng($image);
?>
