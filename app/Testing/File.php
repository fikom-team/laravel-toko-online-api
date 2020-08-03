<?php

namespace App\Testing;


class File
{

    /**
     * Create Random Image With Color
     *
     * @hananloser
     *
     * @param $name
     * @param $width
     * @param $height
     * @param $color default value is null ,
     * @return Illuminate\Http\Testing\FileFactory
     */
    public static function image($name, $width = 10, $height = 10, $color = null)
    {
        return (new ImageGenerator)->image($name, $width, $height);
    }
}
