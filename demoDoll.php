<?php

// create a 200*200 image
$img = imagecreate(700, 700);

// allocate some colors
$white = imagecolorallocate($img, 255, 255, 255);
$black = imagecolorallocate($img, 0, 0, 0);
$red   = imagecolorallocate($img, 255,   0,   0);
$green = imagecolorallocate($img,   0, 255,   0);
$blue  = imagecolorallocate($img,   0,   0, 255);

// draw the head
imagearc($img, 350, 200, 200, 200,  0, 360, $black);
// mouth
imagearc($img, 351, 200, 150, 150, 25, 155, $black);
// nose
imagearc($img, 350, 205, 40, 40, 25, 155, $black);
// left and then the right eye
imagearc($img,  305,  175,  50,  50,  0, 360, $black);
imagearc($img, 390,  175,  50,  50,  0, 360, $black);

// draw the body first left then right
imageline ($img ,300 , 285 , 230 , 500 , $black);
imageline ($img ,400 , 285 , 450 , 500 , $black);
// end the body
imageline ($img ,230 , 500 , 450 , 500 , $black);

// draw the ear , first left and then right
imagearc($img, 242, 190, 50, 50, 65, 300, $black);
imagearc($img, 450, 190, 50, 50, -100, 90, $black);


// left and then the right eye ball
imagefilledarc($img,  305,  175,  15,  15,  0, 360, $black , IMG_ARC_PIE);
imagefilledarc($img, 392,  175,  15,  15,  0, 360, $black , IMG_ARC_PIE);

// left and then the right leg
imageline ($img ,300 , 500 , 300 , 600 , $black); // 1st vertical line
imageline ($img ,310 , 500 , 310 , 610 , $black); // 2nd vertical line
imageline ($img ,300 , 600 , 285 , 600 , $black); // upper horizontal for left
imageline ($img ,310 , 610 , 280 , 610 , $black); // lower horizontal for left
imagearc($img, 275, 601, 20, 20, 65, 350, $black); // front round - join horizontal

imageline ($img ,370 , 500 , 370 , 600 , $black); // 1st vertical line
imageline ($img ,380 , 500 , 380 , 610 , $black); // 2nd vertical line
imageline ($img ,370 , 600 , 360 , 600 , $black); // upper horizontal for right
imageline ($img ,380 , 610 , 350 , 610 , $black); // lower horizontal for right
imagearc($img, 350, 601, 20, 20, 65, 350, $black); // front round - join horizontal

// left and then right hand
//imagearc($img, 202, 370, 300, 300, -100, -180, $black);
imagepolygon($img,array(
		295, 300,
        210, 350,
        230, 400,
		240,400,
		230,350,
		286,330
    ),6,$black);


imagepolygon($img,array(
		402, 300,
        485, 350,
        465, 400,
		455,400,
		475,350,
		410,330
		
    ),6,$black);

// draw hair
//imageline ($img ,310 , 111 , 308 , 100 , $black);
//imagearc($img, 310, 111, 60, 60, -90, 180, $black);
imagefilledarc($img, 400, 60, 150, 150, 70, 155, $black, IMG_ARC_PIE);
//imagearc($img, 390, 70, 150, 150, -60, 155, $black);

// output image in the browser
header("Content-type: image/png");
imagepng($img);

// free memory
imagedestroy($img);

?>
