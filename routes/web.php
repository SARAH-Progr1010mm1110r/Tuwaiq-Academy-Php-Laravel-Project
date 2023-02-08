<?php

use Illuminate\Support\Facades\Route;
// another way to use it
use App\Http\Controllers\PhoneAppController; 
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
/************************************************************************************* */

Route::get('/gitphonedata',[PhoneAppController::class,"GitPhoneData"])->name("getlist");

//checkout page
Route::get('/checkout/{id}',[PhoneAppController::class,"GitPhoneDataid"])->name("getlistid");

// page
Route::post('/getinvoice',[PhoneAppController::class,"Getinvoice"])->name("getinvoice");

/************************************************************************************* */


/************************************************************************************* */
// call the fuction welcome

Route::get('/getwelcome',[App\Http\Controllers\PhoneAppController::class,"GitWelcome"]);


/******************************* FINAL PROJECT ************************** */
Route::get('/', function () {
    return view('showphone');
})->name("showphone");

Route::get('/Products', function () {
    return view('showphone');
})->name("showphone");

Route::get('/Checkout', function () {
    return view('checkout');
})->name("checkout");


/************************************************************************************* */
Route::get('/', function () {
    return view('welcome');
})->name("welcome");

/************************************************************************************* */
Route::get('/twiq', function () {
    return view('twiq');
})->name("twiq");

/************************************************************************************* */

// 3- Create a route whose address is test. Once executed, it prints the word test

Route::get('/test', function () {
    return view('AssignmentOne.test');
});

/* 4- Create a route whose address is phone. Once executed, it calls a page 
containing the title "هلاً بكم في متجر التكنولوجيا الحديثة لبيع الهواتف".*/

Route::get('/phone', function () {
    return view('AssignmentOne.phone');
});

/* 5- Create a route called phonedisplay. When called, it displays a page called phonedetails, 
and sends a matrix containing the type of phone, price, color, and the matrix print on the page.*/

Route::get('/phonedisplay', function () {
    $PhoneDetails = ["PhoneType"=>"iPhone13 128GB",
                     "PhoneColor"=>"gray",
                     "PhonePrice"=>"3500 SAR"];
    return view('AssignmentOne.phonedisplay',$PhoneDetails);
});


/* 6- Create a Route called oldphone. When called, it calls a page called oldphone, taking 
into account the creation of this page inside a folder named old that contains the following sentence
Number of old phones = 254 phones*/

Route::get('/oldphone', function () {
    return view('AssignmentOne.oldphone.oldphone');
});

/* 7- Try including the bootstrap in one of the pages that you created, and try creating a 
row containing three columns. In the first column, write the phone number, in the second 
column - the type of phone, and in the third column - the price of the phone only #*/

Route::get('/withbootstrap', function () {
    return view('AssignmentOne.withbootstrap');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
