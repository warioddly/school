<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use \App\Models\Documents;

class DocumentController extends Controller
{


    public function upload($file)
    {
        $fileName = $file->getClientOriginalName();
        $fileType = $file->getClientMimeType();
        $fileSize = $file->getSize();
        $fileExtension = $file->getClientOriginalExtension();

        $filePath = $file->store('documents');

        $document = new Documents(
            [
                'file_name' => $fileName,
                'type' => $fileType,
                'size' => $fileSize,
                'extension' => $fileExtension,
                'path' => $filePath
            ]
        );
       
        dd($document);
        return $filePath;
    }

}
