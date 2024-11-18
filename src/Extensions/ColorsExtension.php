<?php

namespace Xefi\Faker\EnGb\Extensions;

use Xefi\Faker\Extensions\ColorsExtension as BaseColorsExtension;

class ColorsExtension extends BaseColorsExtension
{
    public function getLocale(): string|null
    {
        return 'en_GB';
    }

    protected array $safeColorNames = [
        'Black', 'Brown', 'Green', 'Navy', 'Olive',
        'Purple', 'Teal', 'Lime', 'Blue', 'Silver',
        'Grey', 'Yellow', 'Fuchsia', 'Aqua', 'White',
    ];

    protected array $colorNames = [
        'Aqua', 'Aquamarine', 'Azure',
        'Beige', 'Brown', 'Coral', 'Green', 'Blue',
        'Fuchsia', 'Cyan', 'DarkBlue', 'DarkCyan', 'DarkGrey',
        'DarkGreen', 'DarkOrange', 'DarkRed', 'DarkViolet', 'DeepPink', 'DeepSkyBlue',
        'DimGrey', 'DodgerBlue', 'ForestGreen', 'Gold', 'Grey',
        'GreenYellow', 'Honeydew', 'HotPink', 'IndianRed', 'Indigo', 'Ivory', 'Khaki', 'Lavender',
        'LawnGreen', 'LemonChiffon', 'LightBlue', 'LightCoral', 'LightCyan',
        'LightGrey', 'LightGreen', 'LightPink', 'LightSalmon', 'LightSeaGreen', 'LightSkyBlue', 'LightYellow',
        'Lime', 'LimeGreen', 'Linen', 'Magenta', 'Maroon',
        'MediumAquamarine', 'MediumBlue', 'MediumOrchid', 'MediumPurple', 'MediumSeaGreen',
        'MediumSlateBlue', 'MediumSpringGreen', 'MediumTurquoise', 'MediumVioletRed', 'MidnightBlue',
        'MintCream', 'MistyRose', 'Moccasin', 'NavajoWhite', 'Navy',
        'Olive', 'OliveDrab', 'Orange', 'OrangeRed',
        'Orchid', 'PaleGreen', 'PaleTurquoise', 'PaleVioletRed', 'PapayaWhip',
        'PeachPuff', 'Peru', 'Pink', 'Plum', 'PowderBlue',
        'Purple', 'Red', 'RosyBrown', 'RoyalBlue', 'SaddleBrown',
        'Salmon', 'SandyBrown', 'SeaGreen', 'Seashell', 'Sienna',
        'Silver', 'SkyBlue', 'SlateBlue', 'SlateGrey', 'Snow',
        'SpringGreen', 'SteelBlue', 'Teal',
        'Thistle', 'Tomato', 'Violet', 'Wheat',
        'White', 'WhiteSmoke', 'Yellow',
    ];
}
