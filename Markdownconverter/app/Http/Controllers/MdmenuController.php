<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MdmenuController extends Controller
{
    /**
     * getting all files from directory to array
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function getAllmd()
    {
        $data= Storage::allFiles('md');

            //compact('data'))->render();

        return view('allmd', compact('data'));
    }
}
