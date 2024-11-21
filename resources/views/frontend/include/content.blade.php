<main>
    <!-- Trending Area Start -->
    {{--  <div class="trending-area fix pt-25 gray-bg">
        <div class="container">
            <div class="trending-main">
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Trending Top -->
                        <div class="slider-active">
                            <!-- Single -->
                            <div class="single-slider">
                                <div class="trending-top mb-30">
                                    <div class="trend-top-img">
                                        <img src="{{ asset('assets/img/trending/trending_top2.jpg') }}" alt="">
                                        <div class="trend-top-cap">
                                            <span class="bgr" data-animation="fadeInUp" data-delay=".2s" data-duration="1000ms">Business</span>
                                            <h2><a href="latest_news.html" data-animation="fadeInUp" data-delay=".4s" data-duration="1000ms">Anna Lora Stuns In White At Her Australian Premiere</a></h2>
                                            <p data-animation="fadeInUp" data-delay=".6s" data-duration="1000ms">by Alice cloe   -   Jun 19, 2020</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single -->
                            <div class="single-slider">
                                <div class="trending-top mb-30">
                                    <div class="trend-top-img">
                                        <img src="{{ asset('assets/img/trending/trending_top02.jpg') }}" alt="">
                                        <div class="trend-top-cap">
                                            <span class="bgr" data-animation="fadeInUp" data-delay=".2s" data-duration="1000ms">Business</span>
                                            <h2><a href="latest_news.html" data-animation="fadeInUp" data-delay=".4s" data-duration="1000ms">Anna Lora Stuns In White At Her Australian Premiere</a></h2>
                                            <p data-animation="fadeInUp" data-delay=".6s" data-duration="1000ms">by Alice cloe   -   Jun 19, 2020</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single -->
                            <div class="single-slider">
                                <div class="trending-top mb-30">
                                    <div class="trend-top-img">
                                        <img src="{{ asset('assets/img/trending/trending_top03.jpg') }}" alt="">
                                        <div class="trend-top-cap">
                                            <span class="bgr" data-animation="fadeInUp" data-delay=".2s" data-duration="1000ms">Business</span>
                                            <h2><a href="latest_news.html" data-animation="fadeInUp" data-delay=".4s" data-duration="1000ms">Anna Lora Stuns In White At Her Australian Premiere</a></h2>
                                            <p data-animation="fadeInUp" data-delay=".6s" data-duration="1000ms">by Alice cloe   -   Jun 19, 2020</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Right content -->
                    <div class="col-lg-4">
                            <!-- Trending Top -->
                        <div class="row">
                            <div class="col-lg-12 col-md-6 col-sm-6">
                                <div class="trending-top mb-30">
                                    <div class="trend-top-img">
                                        <img src="{{ asset('assets/img/trending/trending_top3.jpg') }}" alt="">
                                        <div class="trend-top-cap trend-top-cap2">
                                            <span class="bgb">FASHION</span>
                                            <h2><a href="latest_news.html">Secretart for Economic Air
                                                plane that looks like</a></h2>
                                            <p>by Alice cloe   -   Jun 19, 2020</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 col-sm-6">
                                <div class="trending-top mb-30">
                                    <div class="trend-top-img">
                                        <img src="{{ asset('assets/img/trending/trending_top4.jpg') }}" alt="">
                                        <div class="trend-top-cap trend-top-cap2">
                                            <span class="bgg">TECH </span>
                                            <h2><a href="latest_news.html">Secretart for Economic Air plane that looks like</a></h2>
                                            <p>by Alice cloe   -   Jun 19, 2020</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  --}}
    <!-- Trending Area End -->
    <!-- Whats New Start -->
    <section class="whats-news-area pt-50 pb-20 green-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="whats-news-wrapper">
                        <!-- Heading & Nav Button -->
                        <div class="row justify-content-between align-items-end mb-15">
                            <div class="col-xl-4">
                                <div class="section-tittle mb-30">
                                    <h3>Whats New</h3>
                                </div>
                            </div>
                            <div class="col-xl-8 col-md-9">
                                <div class="properties__button">
                                    <!--Nav Button  -->
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                                                href="#nav-home" role="tab" aria-controls="nav-home"
                                                aria-selected="true">Mudir</a>
                                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab"
                                                href="#nav-profile" role="tab" aria-controls="nav-profile"
                                                aria-selected="false">Info Bursa</a>
                                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                                                href="#nav-contact" role="tab" aria-controls="nav-contact"
                                                aria-selected="false">Info alumni</a>
                                            <a class="nav-item nav-link" id="nav-last-tab" data-toggle="tab"
                                                href="#nav-last" role="tab" aria-controls="nav-contact"
                                                aria-selected="false">Info santri</a>

                                        </div>
                                    </nav>
                                    <!--End Nav Button  -->
                                </div>
                            </div>
                        </div>
                        <!-- Tab content -->
                        <div class="row">
                            <div class="col-12">
                                <!-- Nav Card -->
                                <div class="tab-content" id="nav-tabContent">
                                    <!-- card one -->
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                        aria-labelledby="nav-home-tab">
                                        <div class="row">
                                            <!-- Left Details Caption -->

                                            @foreach ($datamudir as $item)
                                                <div class="col-xl-6 col-lg-12">
                                                    <div class="whats-news-single mb-40 mb-40">

                                                        <div class="whates-img">
                                                            <img src="{{ asset($item->photo) }}" alt=""
                                                                width="500" height="450">
                                                        </div>

                                                        <div class="whates-caption">
                                                            <h7>Pimpinan Ponpes Taffriijul ahkam - almunajat</h7>
                                                            <h4><a href="#">{{ $item->nama }}</a></h4>

                                                            {{ $item->tempat_lahir }}
                                                            {{ $item->tanggal_lahir }}
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Right single caption -->

                                                <div class="col-xl-6 col-lg-12">
                                                    <div class="whats-news-single mb-40 mb-40">

                                                        <div class="whates-caption">
                                                            <div class="card border-primary mb-3"
                                                                style="max-width: 18rem;">
                                                                <div class="card-header">Wasiat</div>
                                                                <div class="card-body text-primary">
                                                                    <p class="card-text">{{ $item->wasiat }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    {{-- benner --}}


                                    <!-- Card two -->
                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                        aria-labelledby="nav-profile-tab">
                                        <br>
                                        @foreach ($infobursa as $item)
                                            <div class="card mb-3 mx-auto" style="max-width: 600px;">
                                                <div class="row g-0">
                                                    <div class="col-md-4">
                                                        <img src="{{ asset($item->photo) }}"
                                                            class="img-fluid rounded-start" alt="...">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="card-body">
                                                            <h5 class="card-title">{{ $item->pt }}</h5>
                                                            <h5 class="card-title">{{ $item->posisi }}</h5>
                                                            <p class="card-text">{{ $item->deskripsi }}</p>
                                                            <p class="card-text"><small
                                                                    class="text-body-secondary">{{ $item->tanggal }}</small>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    {{--  <div class="row">  --}}

                                    <!-- Left Details Caption -->
                                    {{--  @foreach ($datawork as $item)
                                        <div class="col-xl-6">
                                            <div class="whats-news-single mb-40">
                                                <div class="whates-img">
                                                    <img src="{{ asset($item->photo) }}" alt="">
                                                </div>
                                                <div class="whates-caption">
                                                    <span class="colorb">{{ $item->pt }}</span>
                                                    <span class="colorb">{{ $item->posisi }}</span>
                                                    <p>{{ $item->deskripsi }}</p>
                                                    <p>{{ $item->tanggal }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-12">
                                            <div class="whats-news-single mb-40 mb-40">

                                                <div class="whates-caption">
                                                    <H1>Deskripsi</H1>
                                                    <span class="border">
                                                    <p>{{ $item->deskripsi }}</p>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach  --}}
                                    <!-- Right single caption -->


                                    {{--  <div class="col-xl-6 col-lg-12">
                                            <div class="row">  --}}
                                    <!-- single -->

                                    {{--  <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                    <div class="whats-right-single mb-20">
                                                        <div class="whats-right-img">
                                                            <img src="{{ asset($item->photo) }}" alt="">
                                                        </div>
                                                        <div class="whats-right-cap">
                                                            <span class="colorb">{{ $item->pt }}</span>
                                                            <span class="colorb">{{ $item->posisi }}</span>
                                                            <h4>{{ $item->deskripsi }}</h4>
                                                            <p>{{ $item->tanggal }}</p>
                                                        </div>

                                                    </div>
                                                </div>  --}}





                                    <!-- Card three -->


                                    {{-- infoalumni --}}




                                    <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                        aria-labelledby="nav-contact-tab">
                                        <br>
                                        @foreach ($infoalumni as $item)
                                            <div class="row row-cols-1 row-cols-md-2 g-4">
                                                <div class="col-5">
                                                    <div class="card">
                                                        <img src="{{ asset($item->photo) }}" class="card-img-top"
                                                            alt="" width="700" height="200">
                                                    </div>
                                                </div>

                                                <div class="col-xl-6 col-lg-12">
                                                    <div class="whats-news-single mb-40 mb-40">

                                                        <div class="whates-caption">

                                                            <div class="card border-primary mb-3"
                                                                style="max-width: 40rem;">
                                                                <div class="card-header">{{ $item->judul }}</div>
                                                                <div class="card-body text-primary">
                                                                    <h5 class="card-title">{{ $item->tanggal }}</h5>
                                                                    <p class="card-text">{{ $item->deskripsi }}</p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        @endforeach



                                    </div>
                                    <!-- card fure -->



                                    <div class="tab-pane fade" id="nav-last" role="tabpanel"
                                        aria-labelledby="nav-last-tab">
                                        <br>
                                        <div class="row">
                                            <!-- Left Details Caption -->

                                            @foreach ($infosantri as $item)
                                                <div class="card mb-3 mx-auto" style="max-width: 600px;">
                                                    <div class="row g-0">
                                                        <div class="col-md-4">
                                                            <img src="{{ asset($item->photo) }}"
                                                                class="img-fluid rounded-start" alt="...">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="card-body">
                                                                <h5 class="card-title">{{ $item->judul }}</h5>
                                                                <p class="card-text">{{ $item->deskripsi }}</p>
                                                                <p class="card-text"><small
                                                                        class="text-body-secondary">{{ $item->tanggal }}</small>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                            <!-- Right single caption -->

                                        </div>
                                    </div>
                                    <!-- card Five -->

                                </div>
                                <!-- End Nav Card -->
                            </div>
                        </div>
                    </div>
                    <!-- Banner -->
                    <div class="col-lg-3">
                        <div class="home-banner2 d-none d-lg-block">
                            <img src="assets/img/gallery/benner.jpg" alt=""
                                style="height: 100px; width: 450%; object-fit: cover;">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <!-- Flow Socail -->
                    <div class="single-follow mb-45">
                        <div class="single-box">
                            <div class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a
                                        href="https://www.facebook.com/people/Ponpes-Tafriijul-Ahkam/pfbid036wBQCAHzDsy5uNeXL83VsMi6DqEW2sKywW4ag7qZoidj3uvdyKQmjFcXA55tmow7l/"><img
                                            src="assets/img/news/icon-fb.png" alt=""></a>
                                </div>
                                <div class="follow-count">
                                    <span>Ponpes </span>
                                    <p>Tafriijul Ahkam</p>
                                </div>
                            </div>
                            <div class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a
                                        href="https://www.facebook.com/people/Ponpes-Tafriijul-Ahkam/pfbid036wBQCAHzDsy5uNeXL83VsMi6DqEW2sKywW4ag7qZoidj3uvdyKQmjFcXA55tmow7l/"><img
                                            src="assets/img/news/icon-tw.png" alt=""></a>
                                </div>
                                <div class="follow-count">
                                    <span>Ponpes </span>
                                    <p>Tafriijul Ahkam</p>
                                </div>
                            </div>
                            <div class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a
                                        href="https://www.instagram.com/p/CwG_Z1Wphp9/?igsh=MTV0NnVmMW1wcjlpdA%3D%3D&img_index=1"><img
                                            src="assets/img/news/icon-ins.png" alt=""></a>
                                </div>
                                <div class="follow-count">
                                    <span>@ikata_official</span>
                                </div>
                            </div>
                            <div class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="https://www.youtube.com/@mediatafriijulahkam8972"><img
                                            src="assets/img/news/icon-yo.png" alt=""></a>
                                </div>
                                <div class="follow-count">
                                    <span>Tafriijulahkam</span>
                                    <p>media</p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Most Recent Area -->
                    <div class="most-recent-area">
                        <h2>List of Alumnis</h2>
                        <div class="most-recent-single">
                            <table class="table" id="myTable">
                                <thead>
                                    <th class="text-info">no</th>
                                    <!-- <th class="text-info">id</th> -->
                                    <th class="text-info">Name_generation</th>
                                    <th class="text-info">Amount</th>
                                    <th class="text-info">Details</th>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($dataangkatan as $item)
                                        @php
                                            $total_angkatan = DB::table('alumnis')
                                                ->where('angkatan_id', $item->id)
                                                ->count();
                                        @endphp
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <!-- <th scope="row">{{ $item->angkatan }}</th> -->
                                            <th scope="row">{{ $item->nama_angkatan }} </th>
                                            <th scope="row">{{ $total_angkatan }}</th>
                                            <th scope="row"
                                                class="btn-sx btn-show-alumni"data-id="{{ $item->id }}"><i
                                                    class="fa fa-eye" aria-hidden="true"></i></th>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>

                        <div class="modal fade" id="showAllAlumni" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Data Alumni</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table show-table" id="myTable">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Religion</th>
                                                    <th scope="col">Gender</th>
                                                    <th scope="col">Graduation year</th>
                                                    <th scope="col">Photo</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>

                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <h2>List of New Students</h2>
                        <div class="table-container">
                            <div class="modal-body">
                                <table class="table show-table" id="idsiswa">
                                    <thead>
                                        <tr>
                                            <th class="text-info">No</th>
                                            <th class="text-info">Name</th>
                                            <th class="text-info">place of birth</th>
                                            <th class="text-info">Photo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1; @endphp
                                        @foreach ($datasiswa as $item)
                                            <tr>
                                                <th scope="row">{{ $no++ }}</th>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->tempat_lahir }}</td>
                                                <th>
                                                    <img src="{{ asset($item->photo) }}" alt=""
                                                        style="width: 40px;">
                                                </th>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>




    </section>
    <!-- Whats New End -->
    <!--   Weekly2-News start -->
    <div class="weekly2-news-area pt-50 pb-30 gray-bg">
        <div class="container">
            <div class="weekly2-wrapper">
                <div class="row">
                    <!-- Banner -->
                    <div class="col-lg-3">
                        @foreach ($datayoutube as $item)
                            <div class="single-video">
                                <div class="video-wrapper">
                                    <iframe src="https://www.youtube.com/embed/{{ $item->idyoutube }}"
                                        frameborder="0" allow="encrypted-media" allowfullscreen></iframe>
                                </div>
                                <div class="video-intro">
                                    <h4>{{ $item->deskripsi }}</h4>
                                </div>
                            </div>
                        @endforeach
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


                                        @foreach ($datagallery as $item)
                                            <div class="weekly2-single">
                                                <div class="weekly2-img">
                                                    <img src="{{ asset($item->photo) }}" alt=""
                                                        width="300" height="200">
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

    <!-- Start Video Area -->

    <!-- End Start Video area-->
    <!--   Weekly3-News start -->
    <div class="weekly3-news-area pt-80 pb-130">
        <div class="container">
            <div class="weekly3-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="section-title text-center">Alumni</h2> <!-- Added title here -->
                        <div class="slider-wrapper">
                            <!-- Slider -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="weekly3-news-active dot-style d-flex">
                                        @foreach ($dataalumni as $item)
                                            <div class="weekly3-single">
                                                <div class="weekly3-img">
                                                    <img src="{{ asset($item->photo) }}" alt=""
                                                        width="400" height="200" style="object-fit: cover;">
                                                </div>
                                                <div class="weekly3-caption">
                                                    <h4><a href="latest_news.html">name: {{ $item->nama }}</a></h4>
                                                    <p>angkatan_ke :{{ $item->angkatan_id }}</p>
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
