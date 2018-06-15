<?php
/*
	-- Author:	John German
*/
session_start();
set_error_handler("Cowabunga", E_WARNING);
set_error_handler("Cowabunga", E_NOTICE);

$komarvoski = '1';

do {
	try 
	{
	  Jack_ISwear___();
	  $komarvoski = '';
	} catch (Exception $ex) {
		$komarvoski = '1';
	}
}
while ( $komarvoski != '' );

function Cowabunga($errno, $errstr) {
	Jack_ISwear___();
}

function Jack_ISwear___ () {
	$duke = imagecreatetruecolor(200,41) or die("cannot create canvas.");
	$mrRyan = imagecolorallocate($duke,255,0,0);
	$sally = imagecolorallocate($duke,0,255,0);
	$benAnderson = imagecolorallocate($duke,0,0,255);
	$andyDufresne = imagecolorallocate($duke,255,255,255);
	$mikeZavala = imagecolorallocate($duke,0,0,0);

	imagefill($duke, 0, 0, $andyDufresne);
	imagerectangle($duke, 1,1,199,40, $mikeZavala);

	$dutch = array($mrRyan,$sally,$benAnderson,$andyDufresne);

	for($i=1; $i<=341;$i++) {
	imagesetpixel($duke, mt_rand(2,199), mt_rand(2,40), $dutch[mt_rand(0,3)]);
	}

	for($i=1; $i<=6;$i++) {
	imageline($duke,  mt_rand(2,199), mt_rand(2,40),  mt_rand(2,199), mt_rand(2,40), $dutch[mt_rand(0,3)] );
	}

	$_SESSION['qekeruo'] = '';

	$chineseBoy = "aAb7BcCdDe6EfFgGhHiIj1JkK3LmMnNo2OpPq9QrRs4StTu5UvVwWx6XyYz8Z";
	$stanislasLeFort = 10;

	for($j=1; $j < 10; $j++) {
		$abrahamLincoln = $chineseBoy[mt_rand(0,61)];
		imagettftext ($duke, 20.41, mt_rand(-20,20), $stanislasLeFort, 30, $mikeZavala, "./Bilbo-Regular.otf", $abrahamLincoln);
		$stanislasLeFort += 20;
		$_SESSION['qekeruo'] = $_SESSION['qekeruo'] . $abrahamLincoln;
	}

	/*$first = $source[mt_rand(0,61)];
	$second = $source[mt_rand(0,61)];
	$third = $source[mt_rand(0,61)];
	$fourth = $source[mt_rand(0,61)];

	$_SESSION['ycode'] = $first.$second.$third.$fourth;

	imagettftext ($image, 20, mt_rand(-20,20), 10, 30, $black, "./Bilbo-Regular.otf", $first);
	imagettftext ($image, 20, mt_rand(-20,20), 30, 30, $black, "./Bilbo-Regular.otf", $second);
	imagettftext ($image, 20, mt_rand(-20,20), 50, 30, $black, "./Bilbo-Regular.otf", $third);
	imagettftext ($image, 20, mt_rand(-20,20), 70, 30, $black, "./Bilbo-Regular.otf", $fourth);*/

	header("content-type: image/png");
	imagepng($duke);
}
?>