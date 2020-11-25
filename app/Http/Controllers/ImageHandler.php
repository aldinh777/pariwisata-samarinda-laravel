<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;

class ImageHandler
{
    /**
     * Uploads a new image.
     *
     * @param mixed $request
     * @author Niklas Fandrich
     * @return mixed
     */
    public static function upload(Controller $controller, Request $request, $prefix = '') {
      $controller->validate($request, [
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
      ]);

      return ImageHandler::storeImage($request, $prefix);
    }


    /**
     * Prepares a image for storing.
     *
     * @param mixed $request
     * @author Niklas Fandrich
     * @return bool
     */
    public static function storeImage($request, $prefix) {
      // Get file from request
      $file = $request->file('gambar');
      if ($file == null) {
        return '';
      }

      // Get filename with extension
      $filenameWithExt = $file->getClientOriginalName();

      // Get file path
      $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

      // Remove unwanted characters
      $filename = preg_replace("/[^A-Za-z0-9 ]/", '', $filename);
      $filename = preg_replace("/\s+/", '-', $filename);

      // Get the original image extension
      $extension = $file->getClientOriginalExtension();

      // Create unique file name
      $fileNameToStore = $filename.'_'.time().'.'.$extension;

      // Refer image to method resizeImage
      $save = ImageHandler::resizeImage($file, $fileNameToStore, $prefix);

      return "/storage/img{$prefix}/{$fileNameToStore}";
    }

    /**
     * Resizes a image using the InterventionImage package.
     *
     * @param object $file
     * @param string $fileNameToStore
     * @author Niklas Fandrich
     * @return bool
     */
    public static function resizeImage($file, $fileNameToStore, $prefix) {
      // Resize image
      $resize = Image::make($file)->resize(600, null, function ($constraint) {
        $constraint->aspectRatio();
      })->encode('jpg');

      // Create hash value
      $hash = md5($resize->__toString());

      // Prepare qualified image name
      $image = $hash."jpg";

      // Put image to storage
      $save = Storage::put("public/img{$prefix}/{$fileNameToStore}", $resize->__toString());

      if($save) {
        return true;
      }
      return false;
    }

}