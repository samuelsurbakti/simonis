<?php

namespace App\Helpers;

class GeneralHelper {
    public static function generateDarkHexColor(): string
    {
        $maxComponentValue = 180;
        $minComponentValue = 50;

        $components = [
            mt_rand($minComponentValue, $maxComponentValue), // Red
            mt_rand($minComponentValue, $maxComponentValue), // Green
            mt_rand($minComponentValue, $maxComponentValue)  // Blue
        ];

        $dominantComponentIndex = mt_rand(0, 2);
        $components[$dominantComponentIndex] = mt_rand(
            min($maxComponentValue, $components[$dominantComponentIndex] + 40),
            $maxComponentValue
        );

        $red = max($minComponentValue, min($components[0], 255));
        $green = max($minComponentValue, min($components[1], 255));
        $blue = max($minComponentValue, min($components[2], 255));

        $hexRed = str_pad(dechex($red), 2, '0', STR_PAD_LEFT);
        $hexGreen = str_pad(dechex($green), 2, '0', STR_PAD_LEFT);
        $hexBlue = str_pad(dechex($blue), 2, '0', STR_PAD_LEFT);

        return "#" . $hexRed . $hexGreen . $hexBlue;
    }
}
