<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(Request $request, string $hl_full = '')
    {
        $this->checkSupportLanguage($hl_full);
        $controller = request()->route()->controller;
        $this->metaTile = __('home.metatitle');
        $this->metaDescription = __('home.metadescription');
        $this->alternate = '<link rel="alternate" hreflang="x-default" href="' .  $this->createUrl('home', array('hl' => 'en')) . '" />';
        foreach ($this->supportedLanguages as $language) {
            if ($language == $this->hl) continue;

            $this->alternate .= '<link rel="alternate" hreflang="' . $language . '" href="' .  $this->createUrl('home', array('hl' => $language)) . '" />';
        }

        return view('main.index', ['hl' => $controller->rules['home']]);
    }
    public function youtubeDowload(Request $request, string $hl_full = ''){
    
        $language = app()->getLocale();
        $this->metaTile = __('youtube-downloader.metatitle');
        $this->metaDescription = __('youtube-downloader.metadescription');
        $this->checkSupportLanguage($hl_full);
        $controller = request()->route()->controller;
        $this->alternate = '<link rel="alternate" hreflang="x-default" href="' .  $this->createUrl('youtube', array('hl' => 'en')) . '" />';
        foreach ($this->supportedLanguages as $language) {
            if ($language == $this->hl) continue;

            $this->alternate .= '<link rel="alternate" hreflang="' . $language . '" href="' .  $this->createUrl('youtube', array('hl' => $language)) . '" />';
        }

        return view('youtube.index', ['hl' => $controller->rules['youtube']]);
       
    }
    public function youtubeDowloadMP3(Request $request, string $hl_full = ''){
    
        $language = app()->getLocale();
        $this->metaTile = __('youtube-mp3.metatitle');
        $this->metaDescription = __('youtube-mp3.metadescription');
        $this->checkSupportLanguage($hl_full);
        $controller = request()->route()->controller;
        $this->alternate = '<link rel="alternate" hreflang="x-default" href="' .  $this->createUrl('youtubemp3', array('hl' => 'en')) . '" />';
        foreach ($this->supportedLanguages as $language) {
            if ($language == $this->hl) continue;

            $this->alternate .= '<link rel="alternate" hreflang="' . $language . '" href="' .  $this->createUrl('youtubemp3', array('hl' => $language)) . '" />';
        }

        return view('youtubemp3.index', ['hl' => $controller->rules['youtubemp3']]);
       
    }
    public function youtubeDowloadMP4(Request $request, string $hl_full = ''){
    
        $language = app()->getLocale();
        $this->metaTile = __('youtube-mp4.metatitle');
        $this->metaDescription = __('youtube-mp4.metadescription');
        $this->checkSupportLanguage($hl_full);
        $controller = request()->route()->controller;
        $this->alternate = '<link rel="alternate" hreflang="x-default" href="' .  $this->createUrl('youtubemp4', array('hl' => 'en')) . '" />';
        foreach ($this->supportedLanguages as $language) {
            if ($language == $this->hl) continue;

            $this->alternate .= '<link rel="alternate" hreflang="' . $language . '" href="' .  $this->createUrl('youtubemp4', array('hl' => $language)) . '" />';
        }

        return view('youtubemp4.index', ['hl' => $controller->rules['youtubemp4']]);
       
    }
    public function tiktokDowload(Request $request, string $hl_full = ''){
    
        $language = app()->getLocale();
        $this->metaTile = __('tiktok.metatitle');
        $this->metaDescription = __('tiktok.metadescription');
        $this->checkSupportLanguage($hl_full);
        $controller = request()->route()->controller;
        $this->alternate = '<link rel="alternate" hreflang="x-default" href="' .  $this->createUrl('tiktok', array('hl' => 'en')) . '" />';
        foreach ($this->supportedLanguages as $language) {
            if ($language == $this->hl) continue;

            $this->alternate .= '<link rel="alternate" hreflang="' . $language . '" href="' .  $this->createUrl('tiktok', array('hl' => $language)) . '" />';
        }

        return view('tiktok.index', ['hl' => $controller->rules['tiktok']]);
       
    }
    public function facebookDowload(Request $request, string $hl_full = ''){
    
        $language = app()->getLocale();
        $this->metaTile = __('facebook.metatitle');
        $this->metaDescription = __('facebook.metadescription');
        $this->checkSupportLanguage($hl_full);
        $controller = request()->route()->controller;
        $this->alternate = '<link rel="alternate" hreflang="x-default" href="' .  $this->createUrl('facebook', array('hl' => 'en')) . '" />';
        foreach ($this->supportedLanguages as $language) {
            if ($language == $this->hl) continue;

            $this->alternate .= '<link rel="alternate" hreflang="' . $language . '" href="' .  $this->createUrl('facebook', array('hl' => $language)) . '" />';
        }

        return view('facebook.index', ['hl' => $controller->rules['facebook']]);
       
    }
    public function instagramDowload(Request $request, string $hl_full = ''){
    
        $language = app()->getLocale();
        $this->metaTile = __('instagram.metatitle');
        $this->metaDescription = __('instagram.metadescription');
        $this->checkSupportLanguage($hl_full);
        $controller = request()->route()->controller;
        $this->alternate = '<link rel="alternate" hreflang="x-default" href="' .  $this->createUrl('instagram', array('hl' => 'en')) . '" />';
        foreach ($this->supportedLanguages as $language) {
            if ($language == $this->hl) continue;

            $this->alternate .= '<link rel="alternate" hreflang="' . $language . '" href="' .  $this->createUrl('instagram', array('hl' => $language)) . '" />';
        }

        return view('instagram.index', ['hl' => $controller->rules['instagram']]);
       
    }
    public function twitterDowload(Request $request, string $hl_full = ''){
    
        $language = app()->getLocale();
        $this->metaTile = __('x.metatitle');
        $this->metaDescription = __('x.metadescription');
        $this->checkSupportLanguage($hl_full);
        $controller = request()->route()->controller;
        $this->alternate = '<link rel="alternate" hreflang="x-default" href="' .  $this->createUrl('twitter', array('hl' => 'en')) . '" />';
        foreach ($this->supportedLanguages as $language) {
            if ($language == $this->hl) continue;

            $this->alternate .= '<link rel="alternate" hreflang="' . $language . '" href="' .  $this->createUrl('twitter', array('hl' => $language)) . '" />';
        }

        return view('twitter.index', ['hl' => $controller->rules['twitter']]);
       
    }
    public function soundDowload(Request $request, string $hl_full = ''){
    
        $language = app()->getLocale();
        $this->metaTile = __('soundcloud.metatitle');
        $this->metaDescription = __('soundcloud.metadescription');
        $this->checkSupportLanguage($hl_full);
        $controller = request()->route()->controller;
        $this->alternate = '<link rel="alternate" hreflang="x-default" href="' .  $this->createUrl('sound', array('hl' => 'en')) . '" />';
        foreach ($this->supportedLanguages as $language) {
            if ($language == $this->hl) continue;

            $this->alternate .= '<link rel="alternate" hreflang="' . $language . '" href="' .  $this->createUrl('sound', array('hl' => $language)) . '" />';
        }

        return view('sound.index', ['hl' => $controller->rules['sound']]);
       
    }
    public function vimeoDowload(Request $request, string $hl_full = ''){
    
        $language = app()->getLocale();
        $this->metaTile = __('vimeo.metatitle');
        $this->metaDescription = __('vimeo.metadescription');
        $this->checkSupportLanguage($hl_full);
        $controller = request()->route()->controller;
        $this->alternate = '<link rel="alternate" hreflang="x-default" href="' .  $this->createUrl('vimeo', array('hl' => 'en')) . '" />';
        foreach ($this->supportedLanguages as $language) {
            if ($language == $this->hl) continue;

            $this->alternate .= '<link rel="alternate" hreflang="' . $language . '" href="' .  $this->createUrl('vimeo', array('hl' => $language)) . '" />';
        }

        return view('vimeo.index', ['hl' => $controller->rules['vimeo']]);
       
    }
    public function linkedinDowload(Request $request, string $hl_full = ''){
    
        $language = app()->getLocale();
        $this->metaTile = __('linkedin.metatitle');
        $this->metaDescription = __('linkedin.metadescription');
        $this->checkSupportLanguage($hl_full);
        $controller = request()->route()->controller;
        $this->alternate = '<link rel="alternate" hreflang="x-default" href="' .  $this->createUrl('linkedin', array('hl' => 'en')) . '" />';
        foreach ($this->supportedLanguages as $language) {
            if ($language == $this->hl) continue;

            $this->alternate .= '<link rel="alternate" hreflang="' . $language . '" href="' .  $this->createUrl('linkedin', array('hl' => $language)) . '" />';
        }

        return view('linkedin.index', ['hl' => $controller->rules['linkedin']]);
       
    }
    public function gagDowload(Request $request, string $hl_full = ''){
    
        $language = app()->getLocale();
        $this->metaTile = __('9gag.metatitle');
        $this->metaDescription = __('9gag.metadescription');
        $this->checkSupportLanguage($hl_full);
        $controller = request()->route()->controller;
        $this->alternate = '<link rel="alternate" hreflang="x-default" href="' .  $this->createUrl('9gag', array('hl' => 'en')) . '" />';
        foreach ($this->supportedLanguages as $language) {
            if ($language == $this->hl) continue;

            $this->alternate .= '<link rel="alternate" hreflang="' . $language . '" href="' .  $this->createUrl('9gag', array('hl' => $language)) . '" />';
        }

        return view('9gag.index', ['hl' => $controller->rules['9gag']]);
       
    }
    public function redditDowload(Request $request, string $hl_full = ''){
    
        $language = app()->getLocale();
        $this->metaTile = __('reddit.metatitle');
        $this->metaDescription = __('reddit.metadescription');
        $this->checkSupportLanguage($hl_full);
        $controller = request()->route()->controller;
        $this->alternate = '<link rel="alternate" hreflang="x-default" href="' .  $this->createUrl('reddit', array('hl' => 'en')) . '" />';
        foreach ($this->supportedLanguages as $language) {
            if ($language == $this->hl) continue;

            $this->alternate .= '<link rel="alternate" hreflang="' . $language . '" href="' .  $this->createUrl('reddit', array('hl' => $language)) . '" />';
        }

        return view('reddit.index', ['hl' => $controller->rules['reddit']]);
       
    }
    public function dailymotionDowload(Request $request, string $hl_full = ''){
    
        $language = app()->getLocale();
        $this->metaTile = __('dailymotion.metatitle');
        $this->metaDescription = __('dailymotion.metadescription');
        $this->checkSupportLanguage($hl_full);
        $controller = request()->route()->controller;
        $this->alternate = '<link rel="alternate" hreflang="x-default" href="' .  $this->createUrl('dailymotion', array('hl' => 'en')) . '" />';
        foreach ($this->supportedLanguages as $language) {
            if ($language == $this->hl) continue;

            $this->alternate .= '<link rel="alternate" hreflang="' . $language . '" href="' .  $this->createUrl('dailymotion', array('hl' => $language)) . '" />';
        }

        return view('dailymotion.index', ['hl' => $controller->rules['dailymotion']]);
       
    }
    public function pinterestDowload(Request $request, string $hl_full = ''){
    
        $language = app()->getLocale();
        $this->metaTile = __('pinterest.metatitle');
        $this->metaDescription = __('pinterest.metadescription');
        $this->checkSupportLanguage($hl_full);
        $controller = request()->route()->controller;
        $this->alternate = '<link rel="alternate" hreflang="x-default" href="' .  $this->createUrl('pinterest', array('hl' => 'en')) . '" />';
        foreach ($this->supportedLanguages as $language) {
            if ($language == $this->hl) continue;

            $this->alternate .= '<link rel="alternate" hreflang="' . $language . '" href="' .  $this->createUrl('pinterest', array('hl' => $language)) . '" />';
        }

        return view('pinterest.index', ['hl' => $controller->rules['pinterest']]);
       
    }
    public function kwaiDowload(Request $request, string $hl_full = ''){
    
        $language = app()->getLocale();
        $this->metaTile = __('kuaishou.metatitle');
        $this->metaDescription = __('kuaishou.metadescription');
        $this->checkSupportLanguage($hl_full);
        $controller = request()->route()->controller;
        $this->alternate = '<link rel="alternate" hreflang="x-default" href="' .  $this->createUrl('kwai', array('hl' => 'en')) . '" />';
        foreach ($this->supportedLanguages as $language) {
            if ($language == $this->hl) continue;

            $this->alternate .= '<link rel="alternate" hreflang="' . $language . '" href="' .  $this->createUrl('kwai', array('hl' => $language)) . '" />';
        }

        return view('kwai.index', ['hl' => $controller->rules['kwai']]);
       
    }
    public function likeeDowload(Request $request, string $hl_full = ''){
    
        $language = app()->getLocale();
        $this->metaTile = __('likee.metatitle');
        $this->metaDescription = __('likee.metadescription');
        $this->checkSupportLanguage($hl_full);
        $controller = request()->route()->controller;
        $this->alternate = '<link rel="alternate" hreflang="x-default" href="' .  $this->createUrl('likee', array('hl' => 'en')) . '" />';
        foreach ($this->supportedLanguages as $language) {
            if ($language == $this->hl) continue;

            $this->alternate .= '<link rel="alternate" hreflang="' . $language . '" href="' .  $this->createUrl('likee', array('hl' => $language)) . '" />';
        }

        return view('likee.index', ['hl' => $controller->rules['likee']]);
       
    }
    public function vkDowload(Request $request, string $hl_full = ''){
    
        $language = app()->getLocale();
        $this->metaTile = __('vk.metatitle');
        $this->metaDescription = __('vk.metadescription');
        $this->checkSupportLanguage($hl_full);
        $controller = request()->route()->controller;
        $this->alternate = '<link rel="alternate" hreflang="x-default" href="' .  $this->createUrl('vk', array('hl' => 'en')) . '" />';
        foreach ($this->supportedLanguages as $language) {
            if ($language == $this->hl) continue;

            $this->alternate .= '<link rel="alternate" hreflang="' . $language . '" href="' .  $this->createUrl('vk', array('hl' => $language)) . '" />';
        }

        return view('vk.index', ['hl' => $controller->rules['vk']]);
       
    }
    public function biliDowload(Request $request, string $hl_full = ''){
    
        $language = app()->getLocale();
        $this->metaTile = __('bilibili.metatitle');
        $this->metaDescription = __('bilibili.metadescription');
        $this->checkSupportLanguage($hl_full);
        $controller = request()->route()->controller;
        $this->alternate = '<link rel="alternate" hreflang="x-default" href="' .  $this->createUrl('bili', array('hl' => 'en')) . '" />';
        foreach ($this->supportedLanguages as $language) {
            if ($language == $this->hl) continue;

            $this->alternate .= '<link rel="alternate" hreflang="' . $language . '" href="' .  $this->createUrl('bili', array('hl' => $language)) . '" />';
        }

        return view('bili.index', ['hl' => $controller->rules['bili']]);
       
    }
}
