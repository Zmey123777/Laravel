<?php

namespace Modules\Documentation\Entities;

use FilesystemIterator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use SplFileInfo;

class ScanDirectory extends Model
{
    use HasFactory;

    public function scanRecurse ($path): array
    {
        $realpath = base_path($path);
        $baseLevel = substr_count($realpath, '/');
        $dir = new RecursiveDirectoryIterator($realpath, FileSystemIterator::SKIP_DOTS);
        $files = new RecursiveIteratorIterator($dir, RecursiveIteratorIterator::SELF_FIRST);
        $data = [];
        foreach ($files as $f){
            /** @var SplFileInfo $f */
            $isDir = $f->isDir();
            $filePath = $f->getRealPath();
            $level = substr_count($filePath, '/') - $baseLevel;

            $data[] = [$filePath, $isDir, $level];
        }
        sort($data);
        //reset($data);
        return $data;
    }
}

