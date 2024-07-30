@php

    $controller = request()->route()->controller;

@endphp
<section class="container pt-5">

    <h3 class="text-center">@lang('home.tools')</h3>
    <p class="text-center fw-semibold pb-5">@lang('home.tools_sub')</p>
    <div class="background-ca rounded">
        <div class="pt-4 pb-4 pe-3 ps-3">
            <div class="row row-cols-2 row-cols-lg-3 row-cols-xl-4 row-cols-sm-2 g-2 g-lg-4">
                <div class="col">

                    <div class="text-center">
                        <a href="{{ $controller->createUrl('youtube') }}" class="btn btn-white sty-btn">
                            <div class="row justify-content-center">
                                <div class="col-lg-11 d-flex pt-2 pb-2 justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('/image/ic-youtube.svg') }}" alt="">
                                        <span class="pe-2 ps-2 fw-bold text-uppercase"
                                            style="font-size: 12px;">Youtube</span>
                                    </div>
                                    <div>
                                        <img src="{{ asset('/image/Vector.svg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
                <div class="col">

                    <div class="text-center">
                        <a href="{{ $controller->createUrl('instagram') }}" class="btn btn-white sty-btn">
                            <div class="row justify-content-center">
                                <div class="col-lg-11 d-flex pt-2 pb-2 justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('/image/ic-instagram.svg') }}" alt="">
                                        <span class="pe-2 ps-2 fw-bold text-uppercase"
                                            style="font-size: 12px;">Instagram</span>
                                    </div>
                                    <div>
                                        <img src="{{ asset('/image/Vector.svg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
                <div class="col">

                    <div class="text-center">
                        <a href="{{ $controller->createUrl('facebook') }}" class="btn btn-white sty-btn">
                            <div class="row justify-content-center">
                                <div class="col-lg-11 d-flex pt-2 pb-2 justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('/image/ic-facebook.svg') }}" alt="">
                                        <span class="pe-2 ps-2 fw-bold text-uppercase"
                                            style="font-size: 12px;">Facebook</span>
                                    </div>
                                    <div>
                                        <img src="{{ asset('/image/Vector.svg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
                <div class="col">

                    <div class="text-center">
                        <a href="{{ $controller->createUrl('tiktok') }}" class="btn btn-white sty-btn">
                            <div class="row justify-content-center">
                                <div class="col-lg-11 d-flex pt-2 pb-2 justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('/image/ic-tiktok.svg') }}" alt="">
                                        <span class="pe-2 ps-2 fw-bold text-uppercase"
                                            style="font-size: 12px;">tiktok</span>
                                    </div>
                                    <div>
                                        <img src="{{ asset('/image/Vector.svg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
                <div class="col">

                    <div class="text-center">
                        <a href="{{ $controller->createUrl('twitter') }}" class="btn btn-white sty-btn">
                            <div class="row justify-content-center">
                                <div class="col-lg-11 d-flex pt-2 pb-2 justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('/image/ic-twinter.svg') }}" alt="">
                                        <span class="pe-2 ps-2 fw-bold text-uppercase"
                                            style="font-size: 12px;">twitter</span>
                                    </div>
                                    <div>
                                        <img src="{{ asset('/image/Vector.svg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
                <div class="col">

                    <div class="text-center">
                        <a href="{{ $controller->createUrl('sound') }}" class="btn btn-white sty-btn">
                            <div class="row justify-content-center">
                                <div class="col-lg-11 d-flex pt-2 pb-2 justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('/image/ic-soundCloud.svg') }}" alt="">
                                        <span class="pe-2 ps-2 fw-bold text-uppercase"
                                            style="font-size: 12px;">SoundCloud</span>
                                    </div>
                                    <div>
                                        <img src="{{ asset('/image/Vector.svg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
                <div class="col">

                    <div class="text-center">
                        <a href="{{ $controller->createUrl('vimeo') }}" class="btn btn-white sty-btn">
                            <div class="row justify-content-center">
                                <div class="col-lg-11 d-flex pt-2 pb-2 justify-content-between align-items-center">
                                    <div>
                                        <img src="{{ asset('/image/ic-vimeo.svg') }}" alt="">
                                        <span class="pe-2 ps-2 fw-bold text-uppercase"
                                            style="font-size: 12px;">Vimeo</span>
                                    </div>
                                    <div>
                                        <img src="{{ asset('/image/Vector.svg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
                <div class="col">

                    <div class="text-center">
                        <a href="{{ $controller->createUrl('linkedin') }}" class="btn btn-white sty-btn">
                            <div class="row justify-content-center">
                                <div class="col-lg-11 d-flex pt-2 pb-2 justify-content-between align-items-center">
                                    <div>
                                        <img src="{{ asset('/image/ic-linkedin.svg') }}" alt="">
                                        <span class="pe-2 ps-2 fw-bold text-uppercase"
                                            style="font-size: 12px;">Likedin</span>
                                    </div>
                                    <div>
                                        <img src="{{ asset('/image/Vector.svg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
                <div class="col">

                    <div class="text-center">
                        <a href="{{ $controller->createUrl('9gag') }}" class="btn btn-white sty-btn">
                            <div class="row justify-content-center">
                                <div class="col-lg-11 d-flex pt-2 pb-2 justify-content-between align-items-center">
                                    <div>
                                        <img src="{{ asset('/image/ic-9gag.svg') }}" alt="">
                                        <span class="pe-2 ps-2 fw-bold text-uppercase"
                                            style="font-size: 12px;">9Gag</span>
                                    </div>
                                    <div>
                                        <img src="{{ asset('/image/Vector.svg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
                <div class="col">

                    <div class="text-center">
                        <a href="{{ $controller->createUrl('reddit') }}" class="btn btn-white sty-btn">
                            <div class="row justify-content-center">
                                <div class="col-lg-11 d-flex pt-2 pb-2 justify-content-between align-items-center">
                                    <div>
                                        <img src="{{ asset('/image/ic-reddit.svg') }}" alt="">
                                        <span class="pe-2 ps-2 fw-bold text-uppercase"
                                            style="font-size: 12px;">Reddit</span>
                                    </div>
                                    <div>
                                        <img src="{{ asset('/image/Vector.svg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
                <div class="col">

                    <div class="text-center">
                        <a href="{{ $controller->createUrl('dailymotion') }}" class="btn btn-white sty-btn">
                            <div class="row justify-content-center">
                                <div class="col-lg-11 d-flex pt-2 pb-2 justify-content-between align-items-center">
                                    <div>
                                        <img src="{{ asset('/image/ic-dailymotion.svg') }}" alt="">
                                        <span class="pe-2 ps-2 fw-bold text-uppercase"
                                            style="font-size: 12px;">Dailymotion</span>
                                    </div>
                                    <div>
                                        <img src="{{ asset('/image/Vector.svg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>

                <div class="col">

                    <div class="text-center">
                        <a href="{{ $controller->createUrl('pinterest') }}" class="btn btn-white sty-btn">
                            <div class="row justify-content-center">
                                <div class="col-lg-11 d-flex pt-2 pb-2 justify-content-between align-items-center">
                                    <div>
                                        <img src="{{ asset('/image/ic-pinterest.svg') }}" alt="">
                                        <span class="pe-2 ps-2 fw-bold text-uppercase"
                                            style="font-size: 12px;">Pinterest</span>
                                    </div>
                                    <div>
                                        <img src="{{ asset('/image/Vector.svg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
                <div class="col">

                    <div class="text-center">
                        <a href="{{ $controller->createUrl('kwai') }}" class="btn btn-white sty-btn">
                            <div class="row justify-content-center">
                                <div class="col-lg-11 d-flex pt-2 pb-2 justify-content-between align-items-center">
                                    <div>
                                        <img src="{{ asset('/image/ic-kwai.svg') }}" alt="">
                                        <span class="pe-2 ps-2 fw-bold text-uppercase"
                                            style="font-size: 12px;">Kwai</span>
                                    </div>
                                    <div>
                                        <img src="{{ asset('/image/Vector.svg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
                <div class="col">

                    <div class="text-center">
                        <a href="{{ $controller->createUrl('likee') }}" class="btn btn-white sty-btn">
                            <div class="row justify-content-center">
                                <div class="col-lg-11 d-flex pt-2 pb-2 justify-content-between align-items-center">
                                    <div>
                                        <img src="{{ asset('/image/ic-likee.svg') }}" alt="">
                                        <span class="pe-2 ps-2 fw-bold text-uppercase"
                                            style="font-size: 12px;">Likee</span>
                                    </div>
                                    <div>
                                        <img src="{{ asset('/image/Vector.svg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>

                <div class="col">

                    <div class="text-center">
                        <a href="{{ $controller->createUrl('vk') }}" class="btn btn-white sty-btn">
                            <div class="row justify-content-center">
                                <div class="col-lg-11 d-flex pt-2 pb-2 justify-content-between align-items-center">
                                    <div>
                                        <img src="{{ asset('/image/ic-vk.svg') }}" alt="">
                                        <span class="pe-2 ps-2 fw-bold text-uppercase"
                                            style="font-size: 12px;">Vk</span>
                                    </div>
                                    <div>
                                        <img src="{{ asset('/image/Vector.svg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
                <div class="col">

                    <div class="text-center">
                        <a href="{{ $controller->createUrl('bili') }}" class="btn btn-white sty-btn">
                            <div class="row justify-content-center">
                                <div class="col-lg-11 d-flex pt-2 pb-2 justify-content-between align-items-center">
                                    <div>
                                        <img src="{{ asset('/image/ic-bili.svg') }}" alt="">
                                        <span class="pe-2 ps-2 fw-bold text-uppercase"
                                            style="font-size: 12px;">Bilibili</span>
                                    </div>
                                    <div>
                                        <img src="{{ asset('/image/Vector.svg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>





            </div>
        </div>
    </div>
</section>
