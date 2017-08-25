<?php
class GbGenerator
{
	public function generate($code){
		$image = imagecreatetruecolor(364,150);
		//RGB
		$backColor = imagecolorallocate($image, 255,224,221);
		$textColor = imagecolorallocate($image, 128,15,90);

		$fontFile = __DIR__.'../assets/FONT.TTF';
		$imBox = imagecreatefrompng('C:/OpenServer/domains/dzphp/assets/present.png');

		imagecopy($image,$imBox, 10, 10, 0, 0, 364, 150);
		imagepng($image);
		imagedestroy($image);
	}

}
?>