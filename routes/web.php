<?php

use Illuminate\Support\Facades\Route;
use PHPHtmlParser\Dom;
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
	// $dom = HtmlDomParser::str_get_html(file_get_contents("https://www.digikala.com/product/dkp-90825",0) );

$dom = new Dom;
$dom->loadStr(file_get_contents("https://www.digikala.com/product/dkp-90825",0));
$a = $dom->find('.c-product__title');
 return view('product');
    return $a->text;
});

Route::get('/product', 'ProductController@show');
