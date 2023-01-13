<?php

namespace Modules\Documentation\Http\Controllers;


use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Documentation\Entities\ScanDirectory;

class ScanDirectoryController extends \App\Http\Controllers\Controller
{
    protected $data;
    public function __construct(ScanDirectory $scanDirectory)
    {
        $this->data = $scanDirectory->scanRecurse('storage/app/local/md');
    }
    public function showAll ()
    {
        return view('all', ['data' => $this->data]);
    }


}
