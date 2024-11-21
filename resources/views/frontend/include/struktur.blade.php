@include('frontend.include.scripct')
@include('frontend.include.style')
@include('frontend.include.header')

<div class="container">
    <div class="header d-flex align-items-center justify-content-center">
        <div class="logo me-2">
            <a href="#">
                <img src="{{ asset('assets/img/logo/logo_ikata.png') }}" aalt="" style="width: 50px; height: auto;">
            </a>
        </div>
        <h1>Struktur Organisasi I-KATA 2024</h1>
    </div>

    <div class="organization-chart">
        <!-- Level 1: Penasehat (CEO) -->
        @foreach ($penasehat as $item)
            <div class="level">
                <div class="position">
                    <img src="{{ asset($item->photo) }}" alt="Foto Penasehat"
                        style="width: 30px; height: 30px; object-fit: cover; border-radius: 50%;"><br>
                    {{ $item->jabatan }}<br>
                    <span style="font-weight: bold;">{{ $item->name }}</span>
                </div>
            </div>
        @endforeach


        @foreach ($pembina as $item)
            <div class="level">
                <div class="position">
                    <img src="{{ asset($item->photo) }}" alt="Foto Penasehat"
                        style="width: 30px; height: 30px; object-fit: cover; border-radius: 50%;"><br>
                    {{ $item->jabatan }}<br>
                    <span style="font-weight: bold;">{{ $item->name }}</span>
                </div>
            </div>
        @endforeach

        <!-- Level 2: Ketua -->
        <div class="level d-flex justify-content-center">
            @foreach ($ketuaumum as $leader)
                <div class="position me-4">
                    <img src="{{ asset($leader->photo) }}" alt="Foto Ketua"
                        style="width: 30px; height: 30px; object-fit: cover; border-radius: 50%;"><br>
                    {{ $leader->jabatan }}<br>
                    <span style="font-weight: bold;">{{ $leader->name }}</span>
                </div>
            @endforeach
        </div>

        <!-- Level 3: Sekretaris and Bendahara (Side by Side) -->
        <div class="level d-flex justify-content-center">
            <!-- Sekretaris -->
            @foreach ($wakilketua as $sek)
                <div class="position me-4">
                    <img src="{{ asset($sek->photo) }}" alt="Foto Sekretaris"
                        style="width: 30px; height: 30px; object-fit: cover; border-radius: 50%;"><br>
                    {{ $sek->jabatan }}<br>
                    <span style="font-weight: bold;">{{ $sek->name }}</span>
                </div>
            @endforeach

            <!-- Bendahara -->
            @foreach ($sekbendahara as $ben)
                <div class="position">
                    <img src="{{ asset($ben->photo) }}" alt="Foto Bendahara"
                        style="width: 30px; height: 30px; object-fit: cover; border-radius: 50%;"><br>
                    {{ $ben->jabatan }}<br>
                    <span style="font-weight: bold;">{{ $ben->name }}</span>
                </div>
            @endforeach
        </div>

        <!-- Level 4: Sekretaris Bidang and Ketua Bidang -->
        <div class="level d-flex justify-content-center flex-wrap">
            <!-- Sekretaris Bidang -->
            @foreach ($pendidikan as $sekbid)
                <div class="position me-3">
                    <img src="{{ asset($sekbid->photo) }}" alt="Foto Sekretaris Bidang"
                        style="width: 30px; height: 30px; object-fit: cover; border-radius: 50%;"><br>
                    {{ $sekbid->jabatan }}<br>
                    <span style="font-weight: bold;">{{ $sekbid->name }}</span>
                </div>
            @endforeach

            <!-- Ketua Bidang -->
            @foreach ($wirausaha as $ketuab)
                <div class="position me-3">
                    <img src="{{ asset($ketuab->photo) }}" alt="Foto Ketua Bidang"
                        style="width: 30px; height: 30px; object-fit: cover; border-radius: 50%;"><br>
                    {{ $ketuab->jabatan }}<br>
                    <span style="font-weight: bold;">{{ $ketuab->name }}</span>
                </div>
            @endforeach


            @foreach ($datin as $ketuab)
                <div class="position me-3">
                    <img src="{{ asset($ketuab->photo) }}" alt="Foto Ketua Bidang"
                        style="width: 30px; height: 30px; object-fit: cover; border-radius: 50%;"><br>
                    {{ $ketuab->jabatan }}<br>
                    <span style="font-weight: bold;">{{ $ketuab->name }}</span>
                </div>
            @endforeach



            @foreach ($humas as $ketuab)
                <div class="position me-3">
                    <img src="{{ asset($ketuab->photo) }}" alt="Foto Ketua Bidang"
                        style="width: 30px; height: 30px; object-fit: cover; border-radius: 50%;"><br>
                    {{ $ketuab->jabatan }}<br>
                    <span style="font-weight: bold;">{{ $ketuab->name }}</span>
                </div>
            @endforeach




        </div>
    </div>
</div>

@include('frontend.include.footer')
