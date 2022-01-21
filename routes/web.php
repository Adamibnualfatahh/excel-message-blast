<?php

use App\Models\Data;
use App\Models\User;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
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

Route::get('/', function () {
    $user = Data::all();
    return view('welcome',['user'=>$user]);
})->name('home');

Route::post('/', function () {
    Excel::import(new UsersImport, request()->file('file'));
   // return back();
     return redirect()->back()->withSuccess('Data Berhasil Ditambahkan');
    
});

Route::get('/hapus', 'App\Models\Data@delete');
Route::get('about',function(){
    return view('about');
});