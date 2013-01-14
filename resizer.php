<?php
$output_width = $_GET['w'];
$output_height = $_GET['h'];
$img_array = getimagesize($_GET['img']);

if ($img_array[2]==IMAGETYPE_GIF){
      
       $type = "gif";
        $image = imagecreatefromgif($_GET['img']);
         function img($resized){
        	imagegif($resized);
        }
    }


else if ($img_array[2]==IMAGETYPE_JPEG){
       
        $type = "jpg";
        $image = imagecreatefromjpeg($_GET['img']);
         function img($resized){
        	imagejpeg($resized);
        }
    }

else if ($img_array[2]==IMAGETYPE_PNG){
       
       	$type = "png";
        $image = imagecreatefrompng($_GET['img']);
         function img($resized){
        	imagepng($resized);
        }
    }
else{
        die();}

$resized = imagecreatetruecolor($output_width, $output_height); //prepares empty image for iamgecopyresampled to fill.


imagecopyresampled($resized, $image, 0, 0, 0, 0, $output_width, $output_height, $img_array[0], $img_array[1]);

//sets header as image type
$header = 'Content-Type: image/'.$type;
header($header);

//displays image
img($resized);

//frees up memory
imagedestroy($image);
imagedestroy($resized);
?>