@include('frontend.include.scripct')
@include('frontend.include.style')
@include('frontend.include.header')



<main>
    <div class="weekly3-news-area pt-80 pb-130">
        <div class="container">
            <div class="weekly3-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        
                        <h2 class="text-center mb-4">Teachers</h2>

                        <div class="slider-wrapper">
                            <!-- Slider -->
                            <div class="row">
                                @foreach ($linkguru as $item)
                                <div class="col-lg-2 mb-4">
                                    <div class="weekly3-single">
                                        <div class="card">
                                            <img src="{{ asset($item->photo) }}" class="card-img-top" alt="" width="600" height="100">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $item->name }}</h5>
                                            </div>
                                        </div>
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
</main>






@include('frontend.include.footer')
