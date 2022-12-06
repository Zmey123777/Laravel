<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class MdController extends Controller
{
    /**
     * Getting the file from the storage
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function mdShow()
    {
        $body= Storage::disk('local')->get('md/11.md', 'Contents');
        //$contents = Storage::get('11.php');
       // return the file with Str helper to convert md to HTML
        return view('md')->with('body', $body);


    }

    /**
     * making file in storage
     * @return void
     */
    public function mdPrint()
    {
        Storage::disk('local')->put('example.txt', 'Contents');
    }
}
