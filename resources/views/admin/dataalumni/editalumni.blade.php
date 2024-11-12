<!-- resources/views/admin/master/create.blade.php -->

@extends('admin.master.index')

@section('content')
    <br>
    <h1>Edit Data Alumni</h1>
    <!-- Form tambah data alumni -->
    <form action="/updatealumni/{{ $data->id }}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="card" style="width: 60rem;">
    <div class="card-body">
        <div class="mb-3">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" class="form-control" value="{{ $data->nama }}" required>
        </div>
        <div class="mb-3">
            <label for="agama">Agama:</label>
            {{--  <input type="text" name="agama" class="form-control" value="{{ $data->agama }}" required>  --}}
            <select class="form-control" name="agama" aria-label="Default select example">
                <option selected>{{ $data->agama }}</option>
                <option value="islam">Islam</option>
                <option value="kristen">Kristen</option>
                <option value="katolik">Katolik</option>
                <option value="hindu">Hindu</option>
                <option value="buddha">Buddha</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail" class="form-label">Jenis_kelamin:</label>
            <select class="form-control" name="jeniskelamin" aria-label="Default select example">
                <option selected>{{ $data->jenis_kelamin }}</option>
                <option value="laki_laki">Laki-Laki</option>
                <option value="peerempuan">Perempuan</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="angkatan_id">Angkatan_id:</label>
            <select class="form-control" name="angkatan_id" aria-label="Default select example">
                {{--  <option selected>{{ $data->angkatan }}</option>  --}}
                //untuk mengambil data dari angkatan
                @foreach ($angkatan as $item)
                <option value="{{ $item->id }}" @if($data->angkatan_id == $item->angkatan) selected @endif>{{ $item->angkatan .' - '.$item->nama_angkatan }}</option>
                @endforeach

            </select>
        </div>


        {{--  <div class="mb-3">
            <label for="angkatan">Nama Angkatan:</label>
            <select class="form-control" name="angkatan" aria-label="Default select example">

                @foreach ($angkatan as $item)
                <option value="{{ $item->nama_angkatan }}" @if($data->angkatanke == $item->angkatan) selected @endif>{{ $item->nama_angkatan }}</option>
                @endforeach

            </select>
        </div>  --}}

        </div>
        <div class="mb-3">
            <label for="notlp">No_Tlp:</label>
            <input type="number" name="no_tlp" class="form-control" value="{{ $data->no_tlp }}" required>
        </div>
        <div class="mb-3">
            <label for="tahun_lulus">Tahun Lulus:</label>
            <input type="date" name="tahun_lulus" class="form-control" value="{{ $data->tahun_lulus }}"required>
        </div>
        <div class="mb-3">
            <label for="alamat">Alamat:</label>
            <input type="text" name="alamat" class="form-control" value="{{ $data->alamat }}"required>
        </div>
        <div class="mb-3">
            <label for="photo">Photos:</label>
            <input type="file" name="photo" class="form-control">
            @if($data->photo)
            <img src="{{ asset($data->photo) }}" alt="" style="width: 200px">
            @endif

        </div>
    </div>
</div>
        <button type="submit" class="btn btn-success">submit</button>
    </form>
@endsection
