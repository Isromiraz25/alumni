@include('frontend.include.style')
@include('frontend.include.header')

<main>
    
    <section class="whats-news-area pt-50 pb-20 gray-bg">
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
                                                aria-selected="true">list</a>
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




                                            <div class="col-xl-6 col-lg-12">
                                                <div class="whats-news-single mb-40 mb-40">

                                                    <div class="whates-caption">
                                                        <div class="card border-primary mb-3" style="max-width: 18rem;">
                                                            <div class="card-header">Informasi</div>
                                                            <div class="card-body text-primary">
                                                                <p class="card-text">adalah pesan (ucapan atau ekspresi)
                                                                    atau kumpulan pesan yang terdiri dari order sekuens
                                                                    dari simbol, atau makna yang dapat ditafsirkan dari
                                                                    pesan atau kumpulan pesan. Informasi dapat direkam
                                                                    atau ditransmisikan. Hal ini dapat dicatat sebagai
                                                                    tanda-tanda, atau sebagai sinyal berdasarkan
                                                                    gelombang. Informasi adalah jenis acara yang
                                                                    mempengaruhi suatu negara dari sistem dinamis.
                                                                    Para konsep memiliki banyak arti lain dalam konteks
                                                                    yang berbeda</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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




                                    <!-- Card three -->
                                    <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                        aria-labelledby="nav-contact-tab">
                                        <br>
                                        @foreach ($infoalumni as $item)
                                            <div class="row row-cols-1 row-cols-md-2 g-4">
                                                <div class="col-5">
                                                    <div class="card">
                                                        <img src="{{ asset($item->photo) }}" class="card-img-top"
                                                            alt="..." idth="300" height="200">
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


                                                {{-- <div class="card mb-3">
                                            <img src="{{ asset($item->photo) }}" class="card-img-top" alt="..." width="200px" height="200px">
                                            <div class="card-body">
                                              <h5 class="card-title">{{ $item->judul }}</h5>
                                              <p class="card-text">{{ $item->deskripsi }}</p>
                                              <p class="card-text"><small class="text-body-secondary">{{ $item->tanggal }}</small></p>
                                            </div>
                                          </div> --}}
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
                        <!-- <form>
            <input class="/search" type="search" placeholder="Search Alumni">
            <button type="submit" class="button">
                <i class="fas fa-search"></i> Search
            </button>
         </form> -->
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
                                                class="btn-sx  btn-show-alumni"data-id="{{ $item->id }}"><i
                                                    class="fa fa-eye" aria-hidden="true"></i></th>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
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







                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>




</main>


@include('frontend.include.footer')
@include('frontend.include.scripct')
