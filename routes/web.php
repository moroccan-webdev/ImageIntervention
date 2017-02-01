<?php

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
/*
Route::post('upload' , function(\Illuminate\Http\Request $request){
  $img = Intervention\Image\Facades\Image::make($request->file('image'));
  //$img->resize(300, null, function($ratio){$ratio->aspectRatio();});
  //$img->crop(300, 300, 100, 100);
  $img->insert(public_path('images/watermark.png'),'center');
  //watermark
  //top-left(default),top,top-right,left,center,right,bottom-left,bottom-right,bottom
  $img->save(public_path('images/3.jpg')); //compression of the file to 50 per cent
});
*/

Route::post('upload' , function(\Illuminate\Http\Request $request){
  $img = Intervention\Image\Facades\Image::make($request->file('image'));
  //$img->brightness(40);
  //$img->contrast(50);
  //$img->invert();
  //$img->pixelate();
  //$img->greyscale();
  $img->colorize(100, -50, 30);
  $img->save(public_path('images/4.jpg')); //compression of the file to 50 per cent
});
