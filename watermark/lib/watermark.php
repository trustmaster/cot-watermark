<?php
// Insert watermarks on the fly

// Requested file path
$path = $_GET['path'];
$realpath = realpath('../../../'.$path);

// Check path and extension
if (strpos($realpath, $_SERVER['DOCUMENT_ROOT']) === FALSE || !preg_match('#\.(gif|jpeg|jpg|png)$#i', $path))
{
	header('HTTP/1.1 403 Forbidden');
	echo '<h1>Forbidden</h1>';
	exit;
}

// Load the image
$image = imagecreatefromstring(file_get_contents($realpath));

$w = imagesx($image);
$h = imagesy($image);

// Load the watermark
$watermark = imagecreatefrompng('watermark.png');
$ww = imagesx($watermark);
$wh = imagesy($watermark);

// Insert watermark to the right bottom corner
imagecopy($image, $watermark, $w-$ww, $h-$wh, 0, 0, $ww, $wh);

// ... or to the image center
// imagecopy($image, $watermark, (($w/2)-($ww/2)), (($h/2)-($wh/2)), 0, 0, $ww, $wh);

// Send the image
header('Content-type: image/jpeg');
imagejpeg($image,null,95);
exit();
?>
