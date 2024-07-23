<section class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 pt-5 d-flex flex-column align-items-center justify-content-center">
            <h2 class="text-center text-uppercase">@lang('home.h1')</h2>
            <h5 class="text-center pt-3">@lang('home.h1_sub')</h5>
            <div class="col-md-12">
                <div class="card p-3 border-0">
                    <div class="card-body">
                        <form class="input-group shadow mb-5 bg-body rounded search-form" id="form-search" method="GET"
                            role="search">
                            @csrf
                            <input type="search" class="form-control search-input rounded" name="query"
                                autocomplete="off" autocorrect="off" aria-label="Search"
                                placeholder="@lang('home.howto_step2')">
                            <button class="btn btn-danger rounded" id="btn-submit" type="button">@lang('main.start') <i
                                    class="bi bi-arrow-right"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="result-search" class="dowload">

    </div>
</section>
<!-- Modal -->

<div class="modal fade ppdowload" id="popupDowload" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background:#DF4952">
                <h5 class="modal-title text-white" id="exampleModalLabel">@lang('main.convert')</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="modal-body text-center model_co" id="model">


                </div>
            </div>

        </div>
    </div>
</div>

<style>
    .title {
        display: block;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        max-width: 100%;
        /* Optional: Limit the width if needed */
    }
</style>



<script>
    var base_url = '{{ URL::to('/') }}';
    console.log(base_url);
    var model_co = $('.model_co');
    var loadingHtml = `<div class="loading text-center mt-4">
					<div class="p-5"><span class="loader"></span> </div>
					<p class="mb-5">Please wait while the file is being prepared for downloading</p>
				</div>`;
             $(document).ready(function() {
        
            var titles = document.querySelectorAll('.title');

            titles.forEach(function(title) {
                if (title.offsetWidth < title.scrollWidth) {
                    title.classList.add('text-overflow');
                } else {
                    title.classList.remove('text-overflow');
                }
            });
     


        // Xử lý sự kiện submit form tìm kiếm
        $('.search-form').on('submit', function(event) {
            event.preventDefault();
            var videoUrl = $('.search-input').val().trim();

            var isUrl = isValidUrl(videoUrl);

            if (isUrl) {
                searchVideo(videoUrl);
            } else {
                searchVideoTitle(videoUrl);
            }
        });
        $('#btn-submit').on('click', function(event) {
            event.preventDefault();
            var videoUrl = $('.search-input').val().trim();

            var isUrl = isValidUrl(videoUrl);

            if (isUrl) {
                searchVideo(videoUrl);
            } else {
                searchVideoTitle(videoUrl);
            }
        });





        // Hàm tìm kiếm video
      

    });

    function searchVideo(videoUrl) {
            if (!videoUrl) {
                return false;
            }
            var loading = `<div class="d-flex justify-content-center">
                   <span class="loader"></span>
                </div>`;
            $('.dowload').html(loading);

            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: base_url + '/search',
                type: 'POST',
                dataType: 'json',
                data: {
                    _token: csrfToken,
                    query: encodeURIComponent(videoUrl)
                },
                success: function(response) {
                    console.log(response.data);
                    if (response.data) {
                        $('.dowload').empty();
                        var itemList = `
                            <h2 class="text-center pb-4">Kết quả tìm kiếm</h2>
                            <div class="row justify-content-center">
                                <div class="col-lg-9 pt-3 pb-5 rounded" style="background: #FFDFDF;">
                                    <div class="row">
                                        <div class="col-lg-5 text-center">
                                        <div>
                                            <img src="${response.data.thumbnail}" class="img-fluid h-100 rounded" alt="...">
                                            <h6 class="pt-2">${response.data.title}</h6>
                                        </div>
                                        </div>
                                        <div class="col-lg-7">

                                            <ul class="nav nav-tabs d-flex" id="myTab" role="tablist" style="border: none !important">
                                                <li class="nav-item nav-sear w-50" role="presentation">
                                                    <a class="nav-link btn-a active pt-3 pb-3 text-center text-white fw-bold" id="home-tab"
                                                        data-bs-toggle="tab" href="#home" role="tab" aria-controls="home"
                                                        aria-selected="true">Video <i class="ps-2 bi bi-camera-video"></i></a>
                                                </li>
                                                <li class="nav-item nav-sear pa-left w-50" role="presentation">
                                                    <a class="nav-link btn-a pt-3 pb-3 text-center text-white fw-bold" id="profile-tab"
                                                        data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                                                        aria-selected="false">Audio<i class="ps-2 bi bi-volume-up-fill"></i></a>
                                                </li>
                                            </ul>
                                            <div class="tab-content" id="myTabContent" style="border:none">
                                                <div class="tab-pane fade show active" id="home" role="tabpanel"
                                                    aria-labelledby="home-tab">
                                                    <table class="table table-hover text-center" style="--bs-table-bg:none">
                                                        <tbody id="video_tbody"></tbody>
                                                    
                                                    </table>
                                                </div>
                                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                                    <table class="table table-hover text-center" style="--bs-table-bg:none">
                                                    <tbody id="audio_tbody">
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `;
                        $('.dowload').append(itemList);
                        var video_tbody = $('#video_tbody')
                        var audio_tbody = $('#audio_tbody')
                        var convert_links = response.data.convert_links;


                        if (convert_links) {
                            var videos = convert_links.video;
                            var audios = convert_links.audio;
                            $.each(videos, function(index, video) {
                                var listItem = $('<tr>').html(`
                                <td class="text-left text-uppercase" style="width: 50%;">${video.format}</td>
                                <td style="width: 25%;"> ${video.quality}
                                </td>
                                <td style="width: 25%;" class="text-right"><button type="button"
                                        class="btn btn-danger convertBtn" data-bs-toggle="modal"
                                       data-bs-target="#popupDowload" data-vid="${response.data.vid}" data-key="${video.key}"  id="convertBtn" >
                                        Chuyển đổi</button>
                                </td>`);
                                video_tbody.append(listItem);
                            });
                            $.each(audios, function(index, audio) {
                                var listItem = $('<tr>').html(`
                                <td class="text-left audio_tbody text-uppercase" style="width: 50%;">${audio.format}</td>
                                <td style="width: 25%;"> ${audio.quality}
                                    </td>
                                <td style="width: 25%;" class="text-right"><button data-vid="${response.data.vid}"  data-key="${audio.key}"   data-bs-toggle="modal" data-bs-target="#popupDowload" type="button"
                                    class="btn btn-danger convertBtn">Chuyển đổi</button>
                                </td>`);
                                audio_tbody.append(listItem);
                            });
                        } else {
                            var links = response.data.links;
                            var links_video = links.video;
                            $.each(links_video, function(index, links_video) {
                                var listItem = $('<tr>').html(`
                            <td class="text-left text-uppercase" style="width: 50%;">${links_video.q_text}</td>
                            <td style="width: 25%;"> ${links_video.size}
                            </td>
                            <td style="width: 25%;" class="text-right">
                            <a type="button" href="${links_video.url}"
                                    class="btn btn-danger convertBtn text-white"  id="convertBtn" >
                                    Download</a>
                            </td>`);
                                video_tbody.append(listItem);
                            });
                        }

                    } else {
                        $('.dowload').html(
                            '<div class="container"><div class="alert alert-danger" role="alert">A simple danger alert—check it out!</div></div>'
                        );
                    }
                    $('.convertBtn').on('click', function(event) {
                        var vid = $(this).data('vid').trim();
                        var key = $(this).data('key').trim();

                        model_co.html(loadingHtml);
                        $.ajax({
                            url: base_url + '/searchConvert',
                            type: 'POST',
                            data: {
                                _token: csrfToken,
                                vid: vid,
                                key: key
                            },
                            success: function(response) {
                                console.log(response);
                                var b_id = response.b_id;

                                model_co.empty();
                                if (response.c_status == 'FAILED') {
                                    console.log('Nội dung lỗi');
                                    model_co.html(`<div>
							<img src="${base_url}/image/error.svg" class="mb-3">
							</div>
							Error: ${response.mess}`)
                                }
                                if (response.c_status == 'CONVERTED') {
                                    var btnshare = encodeURIComponent(base_url)
                                    var listmodel = $('<div>').html(`
							<h5>${response.title}</h5>
                                <div class="loading text-center mt-4">
                                    <div class="mb-4">
                                         <a href="${response.dlink}">
                                            <button type="button" class="btn btn-danger mr-2">
                                                Download
                                            </button>
                                        </a>
                                    </div>
                                </div>	
                            
							</div>`);
                                    model_co.append(listmodel);
                                }
                                if (response.c_status == 'CONVERTING') {
                                    checkConversionStatus(vid, b_id);
                                }
                            },
                            error: function(xhr, status, error) {
                                console.error('Error:', error);
                            }
                        });
                    });
                },

                error: function(xhr, status, error) {
                    console.error('Error:', error);
                    setTimeout(function() {
                        searchVideo(videoUrl);
                    }, 5000);
                }
            });
        }
    function isValidUrl(string) {
        try {
            new URL(string);
            return true;
        } catch (_) {
            return false;
        }
    }




    function searchVideoTitle() {

        var title = $('.search-input').val().trim();

        var dowload = $('.dowload');

        if (title === '') {
            return false;
        }

        var loading = `<div class="d-flex justify-content-center">
                   <span class="loader"></span>
                </div>`;
        dowload.html(loading);
        var csrfToken = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            url: base_url + '/searchtitle',
            type: 'POST',
            dataType: 'json',
            data: {
                _token: csrfToken,
                query: encodeURIComponent(title)
            },
            success: function(response) {
                var videos = response.videos;
                console.log(response);
                if (response) {
                    dowload.html(loading);
                    dowload.empty();
                    var contentvideo = `<div class="row">
                        
                        </div>`;
                    var $contentvideo = $(contentvideo); // Convert string to jQuery object

                    $.each(videos, function(index, video) {
                        var itemList = `
                    <div class="col-sm-6 col-md-4 col-xl-3 pt-3">
                        <div class="card text-center position-relative btn-transition p-3 height-destop background-ca">
                            <div class="icon-xl bg-body mx-auto rounded-circle mb-3">
                                <img src="https://i.ytimg.com/vi/${video.v}/0.jpg" alt="" class="img-fluid rounded-2">
                            </div>
                            <h6 class="mb-2 font-destop">
                               <a href="#" onclick="searchVideo('https://www.youtube.com/watch?v=${video.v}')" id="titleDownload" class="stretched-link title text-black">${video.t}</a>
                            </h6>
                        </div> 
                    </div>`;
                        $contentvideo.append(itemList);
                    });

                    dowload.append($contentvideo);
                } else {
                    dowload.html(loading);
                    dowload.empty();

                    var itemList = `<div class="container">
                <div class="col-xl-12 text-center">
                <div class="alert alert-danger" role="alert">
                Please enter video URL to search box.
                </div>
                </div>
            </div>`;
                    dowload.append(itemList);
                }
            },
            error: function(xhr, status, error) {
                console.error('Error:', error);
            }
        });
    }


    function checkConversionStatus(vid, b_id) {
        var csrfToken = $('meta[name="csrf-token"]').attr('content');
        var model_co = $('.model_co');

        // Hiển thị thanh loading
        var loadingHtml =
            `<div class="d-flex justify-content-center">
                   <span class="loader"></span>
                </div>`;
        model_co.html(loadingHtml);

        $.ajax({
            url: base_url + '/searchcheckTask',
            type: 'POST',
            data: {
                _token: csrfToken,
                vid: vid,
                b_id: b_id
            },
            timeout: 70000,
            success: function(response) {
                if (response.c_status == 'FAILED') {
                    model_co.html(`<div>
            <img src="${base_url}/image/error.svg" class="mb-3">
            </div>
            Error: ${response.mess}`)
                } else {
                    var btnshare = encodeURIComponent(base_url)
                    model_co.empty();
                    console.log(response);
                    var listmodel = $('<div>').html(`
            <h3>${response.title}</h3>
            <div class="loading text-center mt-4">
                <div class="mb-4">
                    <a href="${response.dlink}"  class="btn btn-danger mr-2">
                           Download</a>

                    </div>
                    
                </div>
            </div>`);
                    model_co.empty().append(listmodel);
                }

            },
            error: function(xhr, status, error) {
                checkConversionStatus(vid, b_id);
            }
        });
    }
</script>
