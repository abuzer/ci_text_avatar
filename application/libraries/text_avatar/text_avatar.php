<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class text_avatar {
	public function __construct(){
		
	}

	public function center_text($string, $font_size, $image_width, $font ){
				$dimensions = imagettfbbox($font_size, 0, $font, $string);
				
				return ceil(($image_width - $dimensions[4]) / 2);				
	}


    public function avatar( $t, $h, $w, $font_size = 25)
    {	
		header('Content-Type: image/png');
		$font = realpath('assets/fonts/text_avatar/Capriola-Regular.ttf');
		// Set the content-type
		$height = $h;
		$width = $h;
		$text = $t;

		$text = strtoupper( substr($text, 0, 1) );
		// Create the image
		$im = imagecreatetruecolor($height, $width);

		// Create some colors
		$white = imagecolorallocate($im, rand(0,230), rand(0,230), rand(0,230));
		$textColor = imagecolorallocate($im, 255, 255, 255);
		imagefilledrectangle($im, 0, 0, $height, $width, $white);

		// The text to draw
		// Replace path by your own font path

		$y = imagesy($im) - $height/2 + 10 ;
		$x = $this->center_text( $text , $font_size, $width, $font);	
		// Add some shadow to the text
		imagettftext($im, $font_size, 0, $x, $y, $textColor, $font, $text);

		// Add the text
		//imagettftext($im, 20, 0, 100, 20, $black, $font, $text);

		// Using imagepng() results in clearer text compared with imagejpeg()
		imagepng($im); imagedestroy($im);     
	} 

}

/* End of file Someclass.php */