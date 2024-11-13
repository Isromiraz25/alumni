<footer>
    <!-- Footer Start-->
    <div class="footer-main footer-bg">
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-8">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-30">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="index.html"><img src="assets/img/logo/logo_real.ico" alt=""></a>
                                </div>
                                {{-- <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p class="info1">i-kata is a forum where all alumni can exchange information as directed by the boarding school leadership.</p>
                                        <p class="info2">and to help run the Islamic boarding school program</p>
                                        <p class="info2">Phone: +95 (0) 123 456 789 Cell: +95 (0) 123 456 789</p>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-5 col-sm-7">
                       <!-- Pesan Button to Trigger Modal -->


<!-- Suggestion Modal -->
{{-- <div class="modal fade" id="suggestionModal" tabindex="-1" aria-labelledby="suggestionModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="suggestionModalLabel">Send a Suggestion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="#" method="POST">
                    @csrf
                    @foreach ($datasarans as $item )
                    <div class="form-group mb-3">
                        <label class="text-black" for="nama_pengirim">{{$item->nama_pengirim}}</label>
                        <input type="text" name="nama_pengirim" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label class="text-black" for="isi_saran">{{$item->isi_saran}}</label>
                        <textarea name="isi_saran" class="form-control" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-danger">Send</button>
                    @endforeach
                </form>
            </div>
        </div>
    </div>
</div> --}}




                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7">
                       <h5 class="text-white">create by Kosma</h5>
                       <p class="text-white">{{ \Carbon\Carbon::now()->format('F j, Y') }}</p>
                       {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#suggestionModal">
                        Pesan
                    </button> --}}
                    </div>
                </div>
               
            </div>
        </div>

    </div>

</footer>
