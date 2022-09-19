<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\QuizController;

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
    return view('welcome');
});

Route::middleware(['auth','verified'])->get('/panel', function () {
        return view('dashboard');
    })->name('dashboard');


    
// Yönetim paneli
route::group(['middleware' => ['auth','isAdmin'],'prefix'=>'admin'],function(){
// method ezme yöntemi çünkü list bladede silme butonu get olarak geliyor destroy metodu put  onu resource controller show metoduna yönlendiriryor onun için destroy metodunu tektrar yazıp üstte koyarak önce ona girmesini sagladık
//ayrıca ikinci parametre create işlemi gerçekleşinxce ikinci parametre string dönüyor onuda engellemek lazım yoksa destory algılıyor create blade gitmiyor destroy sadece id alsın olarak engelledik  
route::get('elma/{id}',[QuizController::class,'destroy'])->whereNumber('id')->name('elma.destroy');
    route::resource('elma',QuizController::class);
    
});

