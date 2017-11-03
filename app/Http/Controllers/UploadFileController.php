<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UploadFileController extends Controller
{
    // Upload file function here
    public function index() {
        return view('uploadfile');
    }

    public function showUploadFile(Request $request) {
        $file = $request->file('image');
        // Display file name
        echo 'File name : '.$file->getClientOriginalName();
        echo '<br />';

        // Display file extension
        echo 'File extension : '.$file->getClientOriginalExtension();
        echo '<br />';

        // Display file real path
        echo 'File real path : '.$file->getRealPath();
        echo '<br />';

        // Display file size
        echo 'File size : '.$file->getSize();
        echo '<br />';

        // Display file mime type
        echo 'File mime type : '.$file->getMimeType();
        
        // Move uploaded file
        $destinationFile = 'uploads';
        $file->move($destinationFile, $file->getClientOriginalName());
    }
}
