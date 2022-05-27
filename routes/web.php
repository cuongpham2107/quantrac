<?php

use Illuminate\Support\Facades\Route;
use PhpMqtt\Client\Facades\MQTT;
//use Salman\Mqtt\MqttClass\Mqtt;
//use Mqtt;
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

Route::middleware('admin')->group(function () {
    Route::get('/send', function (){

        $mqtt = new Mqtt();
        $output = $mqtt->ConnectAndPublish('ebbc06a8-ae19-46d3-8662-c19268c68466/control', 'hello');

        if ($output === true)
        {
            return "published";
        }

        return "Failed";


//        MQTT::publish('ebbc06a8-ae19-46d3-8662-c19268c68466/control', 'Hello World!');
//        return "thành công";
    });
    Route::resource('customer', \App\Http\Controllers\CustomerController::class);
    Route::resource('station', \App\Http\Controllers\StationController::class);
    Route::resource('command', \App\Http\Controllers\CommandController::class);
    Route::resource('config', \App\Http\Controllers\ConfigController::class);
    Route::resource('media', \App\Http\Controllers\MediaController::class);
    Route::resource('log', \App\Http\Controllers\LogController::class);
});

Route::get('/mqtt/publish', '\App\Http\Controllers\MQTTController@SendMsgViaMqtt');
Route::get('/mqtt/publish/{topic}', '\App\Http\Controllers\MQTTController@SubscribetoTopic');



Route::middleware('auth')->group(function () {
    Route::get('/', [\App\Http\Controllers\IndexController::class,'index']);
    Route::get('/station-detail/{id}', [\App\Http\Controllers\IndexController::class,'show'])->name('show_station');
    Route::post('/station-update/{id}', [\App\Http\Controllers\IndexController::class,'updateStation'])->name('station_update');
    // Route::resource('/capture', \App\Http\Controllers\Api\CaptureController::class);
   
});

Route::get('camera/get-data-capture', [ \App\Http\Controllers\Api\CaptureController::class,'get_data_capture']);
Route::post('camera/capture', [ \App\Http\Controllers\Api\CaptureController::class,'capture']);

require __DIR__.'/auth.php';


