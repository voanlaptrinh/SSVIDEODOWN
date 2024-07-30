
<header class="" style="background: #DF4952">
    <nav class="navbar navbar-expand-lg container pt-4 pb-4">
        <div class="container-fluid">
            <a href="/"> <img src="{{ asset('image/logo.png') }}" class="image-fuild" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse mobb" id="navbarSupportedContent">
                <ul class="navbar-nav {{ app()->isLocale('ar') ? 'me-auto' : 'ms-auto' }} mb-2 mb-lg-0">

                    <li class="nav-item dropdown pe-3">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-layout-wtf"></i>
                            All tool
                        </a>
                        <ul class="dropdown-menu show-tool {{ app()->isLocale('ar') ? 'shows-sa' : 'shows' }} ">
                            <div class="row pe-3 ps-3">
                                <div class="col-lg-6 col-xl-4 pt-3 text-start text-white mb-2">
                                    
                                    <a href="{{ $controller->createUrl('youtube') }}" class="dropdown-link my-2">
                                        <img class="" style="width:30px"
                                            src="{{ asset('/image/ic-youtube.svg') }}" alt="">
                                        <span class="ml-2"> @lang('youtube-downloader.h1')</span></a>
                                    </a>
                                </div>
                                <div class="col-lg-6 col-xl-4 pt-3 text-start text-white mb-2">
                                    <a href="{{ $controller->createUrl('youtubemp3') }}" class="dropdown-link my-2">
                                        <img class="" style="width:30px"
                                            src="{{ asset('/image/ic-youtube.svg') }}" alt="">
                                        <span class="ml-2"> @lang('youtube-mp3.h1')</span>
                                    </a>
                                </div>
                                <div class="col-lg-6 col-xl-4 pt-3 text-start text-white mb-2">

                                    <a href="{{ $controller->createUrl('youtubemp4') }}" class="dropdown-link my-2">
                                        <img class="" style="width:30px"
                                            src="{{ asset('/image/ic-youtube.svg') }}" alt="">
                                        <span class="ml-2"> @lang('youtube-mp4.h1')</span>
                                    </a>
                                </div>
                                <div class="col-lg-6 col-xl-4 pt-3 text-start text-white mb-2">

                                    <a href="{{ $controller->createUrl('instagram') }}" class="dropdown-link my-2">
                                        <img class="" style="width:30px"
                                            src="{{ asset('/image/ic-instagram.svg') }}" alt="">
                                        <span class="ml-2"> @lang('instagram.h1')</span>
                                    </a>
                                </div>
                                <div class="col-lg-6 col-xl-4 pt-3 text-start text-white mb-2">
                                    <a href="{{ $controller->createUrl('facebook') }}" class="dropdown-link my-2">
                                        <img class="" style="width:30px"
                                            src="{{ asset('/image/ic-facebook.svg') }}" alt="">
                                        <span class="ml-2"> @lang('facebook.h1')</span>
                                    </a>
                                </div>
                                <div class="col-lg-6 col-xl-4 pt-3 text-start text-white mb-2">
                                    <a href="{{ $controller->createUrl('tiktok') }}" class="dropdown-link my-2">
                                        <img class="" style="width:30px" src="{{ asset('/image/ic-tiktok.svg') }}"
                                            alt="">
                                        <span class="ml-2">@lang('tiktok.h1')</span>
                                    </a>
                                </div>
                                <div class="col-lg-6 col-xl-4 pt-3 text-start text-white mb-2">
                                    <a href="{{ $controller->createUrl('twitter') }}" class="dropdown-link my-2">
                                        <img class="" style="width:30px"
                                            src="{{ asset('/image/ic-twinter.svg') }}" alt="">
                                        <span class="ml-2"> @lang('x.h1')</span>
                                    </a>
                                </div>
                                <div class="col-lg-6 col-xl-4 pt-3 text-start text-white mb-2">
                                    <a href="{{ $controller->createUrl('sound') }}" class="dropdown-link my-2">
                                        <img class="" style="width:30px"
                                            src="{{ asset('/image/ic-soundCloud.svg') }}" alt="">
                                        <span class="ml-2"> @lang('soundcloud.h1')</span>
                                    </a>
                                </div>
                                <div class="col-lg-6 col-xl-4 pt-3 text-start text-white mb-2">
                                    <a href="{{ $controller->createUrl('vimeo') }}" class="dropdown-link my-2">
                                    <img class="" style="width:30px" src="{{ asset('/image/ic-vimeo.svg') }}"
                                        alt="">
                                        <span class="ml-2"> @lang('vimeo.h1')</span>
                                    </a>
                                </div>
                                <div class="col-lg-6 col-xl-4 pt-3 text-start text-white mb-2">
                                    <a href="{{ $controller->createUrl('linkedin') }}" class="dropdown-link my-2">
                                        <img class="" style="width:30px"
                                            src="{{ asset('/image/ic-linkedin.svg') }}" alt="">
                                        <span class="ml-2"> @lang('linkedin.h1')</span>
                                    </a>
                                </div>
                                <div class="col-lg-6 col-xl-4 pt-3 text-start text-white mb-2">
                                    <a href="{{ $controller->createUrl('9gag') }}" class="dropdown-link my-2">
                                        <img class="" style="width:30px"
                                            src="{{ asset('/image/ic-9gag.svg') }}" alt="">
                                        <span class="ml-2"> @lang('9gag.h1')</span>
                                    </a>
                                </div>
                                <div class="col-lg-6 col-xl-4 pt-3 text-start text-white mb-2">
                                    <a href="{{ $controller->createUrl('reddit') }}" class="dropdown-link my-2">
                                        <img class="" style="width:30px"
                                            src="{{ asset('/image/ic-reddit.svg') }}" alt="">
                                        <span class="ml-2"> @lang('reddit.h1')</span>

                                    </a>
                                </div>
                                <div class="col-lg-6 col-xl-4 pt-3 text-start text-white mb-2">
                                    <a href="{{ $controller->createUrl('dailymotion') }}">
                                        <img class="" style="width:30px"
                                            src="{{ asset('/image/ic-dailymotion.svg') }} " alt="dailymotion">
                                        <span class="ml-2">@lang('dailymotion.h1')</span></a>
                                    </a>
                                </div>
                                <div class="col-lg-6 col-xl-4 pt-3 text-start text-white mb-2">
                                    <a href="{{ $controller->createUrl('pinterest') }}" class="dropdown-link my-2">
                                        <img class="" style="width:30px"
                                            src="{{ asset('/image/ic-pinterest.svg') }}" alt="pinterest">
                                        <span class="ml-2"> @lang('pinterest.h1')</span></a>
                                </div>
                                <div class="col-lg-6 col-xl-4 pt-3 text-start text-white mb-2">
                                    <a href="{{ $controller->createUrl('kwai') }}" class="dropdown-link my-2">
                                        <img class="" style="width:30px"
                                            src="{{ asset('/image/ic-kwai.svg') }}" alt="pinterest">
                                        <span class="ml-2"> @lang('kuaishou.h1')</span>
                                    </a>
                                </div>
                                <div class="col-lg-6 col-xl-4 pt-3 text-start text-white mb-2">
                                    <a href="{{ $controller->createUrl('likee') }}" class="dropdown-link my-2">

                                        <img class="" style="width:30px"
                                            src="{{ asset('/image/ic-likee.svg') }}" alt="pinterest">
                                        <span class="ml-2">@lang('likee.h1')</span></a>
                                    </a>
                                </div>
                                <div class="col-lg-6 col-xl-4 pt-3 text-start text-white mb-2">
                                    <a href="{{ $controller->createUrl('vk') }}" class="dropdown-link my-2">
                                        <img class="" style="width:30px" src="{{ asset('/image/ic-vk.svg') }}"
                                            alt="pinterest">
                                        <span class="ml-2">@lang('vk.h1')</span>
                                    </a>
                                </div>
                                <div class="col-lg-6 col-xl-4 pt-3 text-start text-white mb-2">
                                    <a href="{{ $controller->createUrl('bili') }}" class="dropdown-link my-2">
                                        <img class="" style="width:30px"
                                            src="{{ asset('/image/ic-bili.svg') }}" alt="pinterest">
                                        <span class="ml-2">@lang('bilibili.h1')</span>
                                    </a>
                                </div>

                            </div>
                        </ul>
                    </li>




                    <?php if(isset($controller->supportedLanguages)){ ?>
                        <li class="nav-item dropdown ">
                            <a class="btn btn-light dropdown-toggle text-black drop-hover w-100 text-uppercase" href="#"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ app()->getLocale() }}
                            </a>
                            <ul class="dropdown-menu show-lang">
                                <?php foreach ($controller->supportedLanguages as $hl_code) {
                                    $hl_txt = @$controller::$fullLanguages[$hl_code];
                                    echo '<li> <a class="dropdown-item text-black" href="' . $controller->createUrl(Request::route()->getName(), ['hl' => $hl_code]) . '">' . $hl_txt . '</a></li>';
                                } ?>
                            </ul>
                        </li>
                    <?php } ?>

                </ul>
            </div>
        </div>
    </nav>



</header>
