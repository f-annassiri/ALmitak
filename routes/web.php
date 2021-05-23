<?php


use App\Http\Controllers\pdfController;
use Illuminate\Support\Facades\Route;
use Intervention\Image\ImageManagerStatic;
use Illuminate\Http\Request;
use Sabberworm\CSS\Property\Import;
use NunoMaduro\Collision\Adapters\Phpunit\State;

//require(base_path('/resources/functions/word2uni.php')); 

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

Route::get('/test', function () {
    return view('test');
});

Route::get('AboutUs', function () {
    return view('AboutUs');
});
/*
Route::post('pdf', function (Request $req){
    $name= $req->input('name');
    $city = $req->input('city');      
    return redirect('pdfGenerator');
});*/ 

Route::post('mitaki', function (Request $req ) {
    require(base_path('/resources/functions/I18N/Arabic.php'));
    $Arabic = new I18N_Arabic('Glyphs');
    $txt1=$req->input('name');
    $txt1 = $Arabic->utf8Glyphs($txt1);
    $txt2=$req->input('city'); 
    $txt2 = $Arabic->utf8Glyphs($txt2);
    $txt3=strval(rand());
    $img = Image::make('images/mitak1.jpg')
        ->fit(3508,2480);
    $img->text($txt1,1705,1845,function($font){
        $font->file(base_path('public/fonts/Amiri-Regular.ttf'));
        $font->size(80);
        $font->color('#000');
        $font->align('center');
        $font->valign('top');
    });
    $img->text($txt2,1705,2075,function($font){
        $font->file(base_path('public/fonts/Amiri-Regular.ttf'));
        $font->size(80);
        $font->color('#000');
        $font->align('center');
        $font->valign('top');
    });
    $img->text($txt3,600,2285,function($font){
        $font->file(base_path('public/fonts/Cairo-Regular.ttf'));
        $font->size(50);
        $font->color('#000');
        $font->align('right');
        $font->valign('top');
    });
    return $img->response('png');
});

//Route::post('send', 'pdfController@showmitak');
