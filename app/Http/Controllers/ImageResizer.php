<?php

namespace  App\Http\Controllers;

use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic;


class ImageResizer extends Controller
{
    public static function resizeImage($image, int $maxSize)
    {
        $image_width = getimagesize($image)[0];
        $image_height  = getimagesize($image)[1];
        $image_resize = ImageManagerStatic::make($image->getRealPath());


        if ($image_width > $maxSize || $image_height > $maxSize) {

            // resize based on orientation
            if ($image_width >   $image_height) {
                //for landscape image
                $image_resize->resize($maxSize, null, function ($constraint) {
                    $constraint->aspectRatio();
                });
            } else {
                //for vertical and square image
                $image_resize->resize(null, $maxSize, function ($constraint) {
                    $constraint->aspectRatio();
                });
            }
        }
        return $image_resize;
    }
}
