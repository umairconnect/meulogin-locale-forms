<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Beapartner;
use App\Http\Controllers\Contactform;
use App\Http\Controllers\Supportdata;

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

Route::redirect('/', '/en');

Route::group(['prefix'=>'{language}', 'where' => ['language' => '[a-zA-Z]{2}']], function() {

    Route::get('/', function () {
        return view('welcome');
    });
    // Route::get('/thankyou', function () {
    //     return view('thankyou');
    // });

    Route::view('/thankyou', 'thankyou')->name('thankyoupage');
    
    Route::view('/contact', 'contact')->name('contact');
    Route::post('/contactdata',[Contactform::class, 'addContact'])->name('contactdata');
    
    Route::view('/support', 'support')->name('support');
    Route::post('/supportdata',[Supportdata::class, 'addSupport'])->name('addSupport');
    
    Route::view('/bepartner', 'beapartner')->name('beapartner');  
    Route::post('/bepartner',[Beapartner::class, 'addPartner'])->name('beapartnersend');
    
    Route::view('/technical-partner', 'techpartner')->name('techpartner');
    Route::post('/technicalpartner',[Beapartner::class, 'addTechnical'])->name('techpartnersend');

});





