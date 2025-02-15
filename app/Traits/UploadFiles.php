<?php

namespace App\Traits;

trait UploadFiles
{
    public function upload($path, $file) {
        $fileName =  rand(0, 969696969) . time() . '.' .$file->getClientOriginalExtension();
        $file->move($path, $fileName);
        return $path . '/' .$fileName;
    }
}
