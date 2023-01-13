<?php
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('documentation')->group(function() {
    Route::get('/', 'DocumentationController@index');
});
Route::get('/md','MdController@mdShow');
Route::get('/all','ScanDirectoryController@showAll');
Route::post('/md', 'MdController@mdShow');
