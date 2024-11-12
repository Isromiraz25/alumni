@include('frontend.include.scripct')
@include('frontend.include.style')
@include('frontend.include.header')

<div class="col-lg-3">
    @foreach ($linkyoutube as $item )
        
    <div class="single-video">
        <div class="video-wrapper">
            <iframe src="https://www.youtube.com/embed/{{$item->idyoutube}}?autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        <div class="video-intro">
            <h4>{{$item->deskripsi}}</h4>
        </div>
    </div>

    @endforeach
</div>

@include('frontend.include.footer')