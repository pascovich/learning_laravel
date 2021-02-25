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

Route::get('/', function () {
    $isweekend = date('N') >= 6;
    // dd($isweekend);
    return view('welcome',compact('isweekend','isweekend'));
});
Route::get('/help', function(){
    // $event = [
    //     'event1' => 'onclick',
    //     'event2' => 'mouseclick',
    //     'event3' => 'press',
    //     'event4' => 'double'
    // ];
    // return view('pages/help',$event);
    $event = [
        'onclick',
        'mouseclick',
        'press',
        'double'
    ];

    return view('pages/help',compact('event'));
});
