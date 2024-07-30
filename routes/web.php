<?php

use App\Http\Controllers\FooterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

class Route2
{
  static function rewrite($lang_input)
  {

    $lang_data  = file_get_contents(public_path('/data/home.txt'));
    $lang_data = json_decode($lang_data, true);

    if (isset($lang_data[$lang_input])) return $lang_data[$lang_input];

    return 'en';
  }
}
Route::fallback(function () {
  return view('errors.404');
});
Route::group(['middleware' => 'locale'], function () {
  Route::post('/search', [SearchController::class, 'search'])->name('search');
  Route::post('/searchtitle', [SearchController::class, 'searchTitle'])->name('searchTitle');
  Route::post('/searchConvert', [SearchController::class, 'searchConvert'])->name('searchConvert');
  Route::post('/searchcheckTask', [SearchController::class, 'searchCheckTask'])->name('searchcheckTask');


  Route::get('/contactUs/{language?}', [FooterController::class, 'contactUs'])->name('contactUs');
  Route::get('/termService/{language?}', [FooterController::class, 'termService'])->name('termService');
  Route::get('/privatePolicy/{language?}', [FooterController::class, 'privatePolicy'])->name('privatePolicy');


  Route::get('/youtube-converter/{language?}', [HomeController::class, 'youtubeDowload'])->name('youtube');
  Route::get('/youtube-mp3/{language?}', [HomeController::class, 'youtubeDowloadMP3'])->name('youtubemp3');
  Route::get('/youtube-mp4/{language?}', [HomeController::class, 'youtubeDowloadMP4'])->name('youtubemp4');
  Route::get('/tiktok-downloader/{language?}', [HomeController::class, 'tiktokDowload'])->name('tiktok');
  Route::get('/facebook-downloader/{language?}', [HomeController::class, 'facebookDowload'])->name('facebook');
  Route::get('/instagram-downloader/{language?}', [HomeController::class, 'instagramDowload'])->name('instagram');
  Route::get('/twitter-downloader/{language?}', [HomeController::class, 'twitterDowload'])->name('twitter');
  Route::get('/soundcloud-downloader/{language?}', [HomeController::class, 'soundDowload'])->name('sound');
  Route::get('/vimeo-downloader/{language?}', [HomeController::class, 'vimeoDowload'])->name('vimeo');
  Route::get('/linkedin-downloader/{language?}', [HomeController::class, 'linkedinDowload'])->name('linkedin');
  Route::get('/9gag-downloader/{language?}', [HomeController::class, 'gagDowload'])->name('9gag');
  Route::get('/reddit-downloader/{language?}', [HomeController::class, 'redditDowload'])->name('reddit');
  Route::get('/dailymotion-downloader/{language?}', [HomeController::class, 'dailymotionDowload'])->name('dailymotion');
  Route::get('/pinterest-downloader/{language?}', [HomeController::class, 'pinterestDowload'])->name('pinterest');
  Route::get('/kwai-downloader/{language?}', [HomeController::class, 'kwaiDowload'])->name('kwai');
  Route::get('/likee-downloader/{language?}', [HomeController::class, 'likeeDowload'])->name('likee');
  Route::get('/vk-downloader/{language?}', [HomeController::class, 'vkDowload'])->name('vk');
  Route::get('/bili-downloader/{language?}', [HomeController::class, 'biliDowload'])->name('bili');




  Route::get('/{language?}', [HomeController::class, 'home'])->name('home');
});
