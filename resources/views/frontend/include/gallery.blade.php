@include('frontend.include.scripct')
@include('frontend.include.style')
@include('frontend.include.header')

<main>

    <div class="weekly2-news-area pt-50 pb-30 gray-bg">
        <div class="container">
            <div class="weekly2-wrapper">
                <div class="row">
                    <!-- Banner -->
                    <div class="col-lg-3">
                        <div class="home-banner2 d-none d-lg-block">
                            <img src="assets/img/gallery/ikata.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="slider-wrapper">
                            <!-- section Tittle -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="small-tittle mb-30">
                                        <h4>GALLERY</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Slider -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="weekly2-news-active d-flex">


                                        @foreach ($linkgallery as $item )
                                        <div class="weekly2-single">
                                            <div class="weekly2-img">
                                                <img src="{{ asset($item->photo) }}" alt="" width="300" height="200">
                                            </div>
                                            <div class="weekly2-caption">
                                                <h1>{{ $item->judul }}</h1>
                                                <p>{{ $item->deskripsi }}</p>
                                            </div>
                                        </div>
                                        @endforeach


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


@include('frontend.include.footer')
