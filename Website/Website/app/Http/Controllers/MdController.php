<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class MdController extends Controller
{
    public function mdShow()
    {
        $contents = Storage::disk('local')->get('Mdfiles/11.md', 'Contents');
        //$contents = Storage::get('11.php');
        return Str::markdown($contents);


    }
    public function mdPrint()
    {
        Storage::disk('local')->put('example.txt', 'Contents');
    }
}
