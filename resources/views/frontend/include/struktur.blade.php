@include('frontend.include.scripct')
@include('frontend.include.style')
@include('frontend.include.header')

<div class="container">
    <h1>Struktur Organisasi I-KATA 2024</h1>

    <div class="organization-chart">
        <!-- Level 1: CEO -->
        <div class="level">
            <div class="position">
                <img src="{{ asset('assets/img/news/icon-fb.png') }}" alt="Foto Penasehat"
                    style="width: 30px; height: 30px; object-fit: cover; border-radius: 50%;"><br>
                Penasehat<br>
                <span style="font-weight: bold;">Mudir</span>
            </div>
        </div>
        <div class="level">
            <div class="position">
                <img src="{{ asset('assets/img/news/icon-fb.png') }}" alt="Foto Penasehat"
                    style="width: 30px; height: 30px; object-fit: cover; border-radius: 50%;"><br>
                Ketua<br>
                <span style="font-weight: bold;">Muhamad Isro</span>
            </div>
        </div>

        <!-- Level 2: Department Heads -->
        <div class="level">
            <div class="position">
                <img src="{{ asset('assets/img/news/icon-fb.png') }}" alt="Foto Penasehat"
                    style="width: 30px; height: 30px; object-fit: cover; border-radius: 50%;"><br>
                Ketua<br>
                <span style="font-weight: bold;">Muhamad Isro</span>
            </div>
            <div class="position">
                <img src="{{ asset('assets/img/news/icon-fb.png') }}" alt="Foto Penasehat"
                    style="width: 30px; height: 30px; object-fit: cover; border-radius: 50%;"><br>
                Ketua<br>
                <span style="font-weight: bold;">Muhamad Isro</span>
            </div>

        </div>

        <!-- Level 3: Team Leaders -->
        <div class="level">
            <div class="position">
                <img src="{{ asset('assets/img/news/icon-fb.png') }}" alt="Foto Penasehat"
                    style="width: 30px; height: 30px; object-fit: cover; border-radius: 50%;"><br>
                Ketua<br>
                <span style="font-weight: bold;">Muhamad Isro</span>
            </div><div class="position">
                <img src="{{ asset('assets/img/news/icon-fb.png') }}" alt="Foto Penasehat"
                    style="width: 30px; height: 30px; object-fit: cover; border-radius: 50%;"><br>
                Ketua<br>
                <span style="font-weight: bold;">Muhamad Isro</span>
            </div>
            <div class="position">
                <img src="{{ asset('assets/img/news/icon-fb.png') }}" alt="Foto Penasehat"
                    style="width: 30px; height: 30px; object-fit: cover; border-radius: 50%;"><br>
                Ketua<br>
                <span style="font-weight: bold;">Muhamad Isro</span>
            </div>
            <div class="position">
                <img src="{{ asset('assets/img/news/icon-fb.png') }}" alt="Foto Penasehat"
                    style="width: 30px; height: 30px; object-fit: cover; border-radius: 50%;"><br>
                Ketua<br>
                <span style="font-weight: bold;">Muhamad Isro</span>
            </div>
            <div class="position">
                <img src="{{ asset('assets/img/news/icon-fb.png') }}" alt="Foto Penasehat"
                    style="width: 30px; height: 30px; object-fit: cover; border-radius: 50%;"><br>
                Ketua<br>
                <span style="font-weight: bold;">Muhamad Isro</span>
            </div>
        </div>

        <!-- Level 4: Staff Members -->
        <div class="level">
            <div class="position">
                <img src="{{ asset('assets/img/news/icon-fb.png') }}" alt="Foto Penasehat"
                    style="width: 30px; height: 30px; object-fit: cover; border-radius: 50%;"><br>
                Ketua<br>
                <span style="font-weight: bold;">Muhamad Isro</span>
            </div>
            <div class="position">
                <img src="{{ asset('assets/img/news/icon-fb.png') }}" alt="Foto Penasehat"
                    style="width: 30px; height: 30px; object-fit: cover; border-radius: 50%;"><br>
                Ketua<br>
                <span style="font-weight: bold;">Muhamad Isro</span>
            </div>
            <div class="position">
                <img src="{{ asset('assets/img/news/icon-fb.png') }}" alt="Foto Penasehat"
                    style="width: 30px; height: 30px; object-fit: cover; border-radius: 50%;"><br>
                Ketua<br>
                <span style="font-weight: bold;">Muhamad Isro</span>
            </div>
        </div>
    </div>
</div>

@include('frontend.include.footer')
