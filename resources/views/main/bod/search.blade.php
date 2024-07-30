<section class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 pt-5 d-flex flex-column align-items-center justify-content-center">
            <h2 class="text-center text-uppercase">@lang('home.h1')</h2>
            <h5 class="text-center pt-3">@lang('home.h1_sub')</h5>
            <div class="col-md-12">
                <div class="card p-3 border-0">
                    <div class="card-body">
                        <form class="position-relative search-form shadow" method="GET" id="form-search">
                            @csrf
                            <input class="form-control pe-5 search-input" type="text" value="" name="search"
                                placeholder="@lang('home.howto_step2')" aria-label="Search" autocomplete="off">
                            <button
                                class=" pe-4 ps-4 position-absolute h-100 top-50 end-0 translate-middle-y border-0 text-primary-hover btn btn-danger"
                                type="button" id="btn-submit">
                                @lang('main.start') <i class="bi bi-arrow-right ps-2"></i></button>
                            </button>
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
