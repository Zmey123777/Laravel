<?php

namespace Modules\Documentation\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class MdController extends \App\Http\Controllers\Controller
{
    // Getting the file from the storage
    protected string $filePath;
    public function __construct(Request $request)
    {
        $this->filePath = $request->all(['filePath'])['filePath'];
    }

    public function mdShow()
    {
        $contents = file_get_contents($this->filePath);
        //$contents = Storage::get('11.php');
        // return the file with Str helper to convert md to HTML
        return view('md',['content' => Str::markdown($contents)]);



    }
    //making file in storage
    public function mdPrint()
    {
        Storage::disk('local')->put('example.txt', 'Contents');
    }
}
