<?php

namespace App\Traits;

//use http\Env\Request;
use Illuminate\Http\Request;

trait UploadImageTrait
{
    public function UploadImage($image,$folder){
        $file_extenstion = $image->getClientOriginalExtension();
        $file_name = time().'.'.$file_extenstion;
        $path = $folder;
        $image->move($path,$file_name);
        return $file_name;
    }
}
