<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class MdController extends Controller
{
    // Getting the file from the storage
    public function mdShow()
    {
        $contents = Storage::disk('local')->get('md/11.md', 'Contents');
        //$contents = Storage::get('11.php');
       // return the file with Str helper to convert md to HTML
        return Str::markdown($contents);


    }
    //making file in storage
    public function mdPrint()
    {
        Storage::disk('local')->put('example.txt', 'Contents');
    }
}
