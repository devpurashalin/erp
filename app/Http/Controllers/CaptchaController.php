<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaptchaController extends Controller
{
    //
    public function captcha()
    {

        $characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";

        function generateString($characters, $length)
        {
            $input_length = strlen($characters);
            $random_string = '';
            for ($i = 0; $i < $length; $i++) {
                $random_character = $characters[mt_rand(0, $input_length - 1)];
                $random_string .= $random_character;
            }

            return $random_string;
        }

        $image = imagecreatetruecolor(200, 50);
        imageantialias($image, true);
        $colors = [];

        $red = rand(125, 175);
        $green = rand(125, 175);
        $blue = rand(125, 175);

        for ($i = 0; $i < 5; $i++) {
            $colors[] = imagecolorallocate($image, $red - 20 * $i, $green - 20 * $i, $blue - 20 * $i);
        }

        imagefill($image, 0, 0, $colors[0]);

        for ($i = 0; $i < 10; $i++) {
            imagesetthickness($image, rand(2, 10));
            $rect_color = $colors[rand(1, 4)];
            imagerectangle($image, rand(-10, 190), rand(-10, 10), rand(-10, 190), rand(40, 60), $rect_color);
        }

        $black = imagecolorallocate($image, 0, 0, 0);
        $white = imagecolorallocate($image, 255, 255, 255);
        $textcolors = [$black, $white];
        $fonts = ['./font/Acme.ttf', './font/Ubuntu.ttf', './font/Merriweather.ttf'];

        // echo $fonts[array_rand($fonts)];

        // exit;

        $string_length = 6;
        $captcha_string = generateString($characters, $string_length);
        session()->put('captcha', $captcha_string . date('Y-m-d H:i:s'));
        for ($i = 0; $i < $string_length; $i++) {
            $letter_space = 170 / $string_length;
            $initial = 15;

            imagettftext($image, 20, rand(-15, 15), $initial + $i * $letter_space, rand(20, 40), $textcolors[rand(0, 1)], $fonts[array_rand($fonts)], $captcha_string[$i]);
        }

        header('Content-Type: image/png');
        imagepng($image);
        imagedestroy($image);
    }
}
