<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header ">
            
            <div class="header-mid gray-bg">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-3 col-lg-3 col-md-3 d-none d-md-block">
                            <div class="logo">
                                <a href="index.html"><img src="{{ asset('assets/img/logo/logo_real.ico') }}" alt=""></a>
                            </div>
                            
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-9">
                            <div class="text">
                                <a href="index.html" class="navbar-brand" style="font-weight: bold; font-size: 24px; color: green;">خَيْرُ النَّاسِ أَنْفَعُهُمْ لِلنَّاسِ</a>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-8 col-lg-8 col-md-12 header-flex">
                            <!-- sticky -->
                            <div class="sticky-logo">
                                <a href="index.html"><img src="{{ asset('assets/img/logo/logo.png') }}" alt=""></a>
                            </div>
                            <!-- Main-menu -->
                            <div class="main-menu">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="/">Home</a></li>
                                        <li><a href="frontalumni">Alumni</a></li>
                                        <li><a href="frontgalerry">Gallery</a></li>
                                        <li><a href="frontguru">Teacher</a></li>

                                        <li>
                                            <a href=""  class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                Pages
                                            </a>
                                            <ul class="submenu">
                                                <li><a href="frontinformasi">News</a></li>
                                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#ppdbModal">Registration PPDB</a></li>
                                                <li><a href="frontsiswa">Data Student New</a></li>
                                                
                                            </ul>
                                            <li><a href="frontmisi">mission & vision</a></li>
                                        </li>
                                        

                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            
                                <!-- Heder social -->
                                {{-- <ul class="header-social">
                                    <li><a href="" data-bs-toggle="modal" data-bs-target="#loginModal"><i class="fas fa-sign-in-alt"></i> Login</a></li>
                                    <li><a href="" data-bs-toggle="modal" data-bs-target="#registerModal"><i class="fas fa-user-plus"></i> Reg</a></li>

                                </ul> --}}
                                <!-- Search Nav -->

                            
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-6">
                            <div class="mobile_menu d-md-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--  modal Guru  --}}




{{-- Add a button or link to trigger the modal --}}


{{--  ////////guru  --}}


{{--  modal regis PPDB  --}}
<div class="modal fade" id="ppdbModal" tabindex="-1" aria-labelledby="ppdbModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ppdbModalLabel">Registration Student</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="container mt-6">
                    <form action="{{route('siswa-store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                      <div class="form-group">
                        <label for="nama">Name:</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                      </div>

                      <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                      </div>

                      <div class="form-group">
                        <label for="alamat">Address:</label>
                        <textarea id="alamat" class="form-control" name="alamat" required></textarea>
                      </div>

                      <div class="form-group">
                        <label for="telepon">Telephone:</label>
                        <input type="tel" class="form-control" id="telepon" name="no_tlp" required>
                      </div>

                      <div class="form-group">
                        <label for="jenis_kelamin">Gender:</label>
                        <select id="jenis_kelamin" class="form-control" name="jenis_kelamin" required>
                          <option value="laki-laki">male</option>
                          <option value="perempuan">female</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="tempat_lahir">Place of birth:</label>
                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
                      </div>

                      <div class="form-group">
                        <label for="tanggal_lahir">date of birth:</label>
                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                      </div>

                      <div class="mb-4">
                        <label for="formFile" class="form-label">Ijazah</label>
                        <input class="form-control" name="ijazah" type="file" id="formFile">
                      </div>
                      <div class="mb-4">
                        <label for="formFile" class="form-label">Family card</label>
                        <input class="form-control" name="kk" type="file" id="formFile">
                      </div>
                      <div class="mb-4">
                        <label for="formFile" class="form-label">Photo</label>
                        <input class="form-control" name="photo" type="file" id="formFile">
                      </div>

                      <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
{{--  modal data PPDB  --}}


    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="loginModal">Login</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card">

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                    {{--  <a class="btn btn-warning mt-1" style="margin: 3px;" id="btn-register">
                                        Register
                                    </a>  --}}
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>


    <!-- Header End -->
</header>

  <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="registerModal">Login</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="card">

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
