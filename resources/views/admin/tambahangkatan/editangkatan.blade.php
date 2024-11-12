<!-- resources/views/admin/master/create.blade.php -->

@extends('admin.master.index')

@section('content')
    <br>
    <h1>Edit Angkatan</h1>

    <form action="/updateangkatan/{{ $data->id }}" method="post">
        @csrf
    <div class="card" style="width: 60rem;">
    <div class="card-body">
        <div class="mb-3">
            <label for="angkatan">Angkatan-Ke:</label>
            <input type="number" name="angkatan" class="form-control" value="{{ $data->angkatan }}" required>
        </div>
        <div class="mb-3">
            <label for="nama_angkatan">Nama_angkatan:</label>
            <input type="text" name="nama_angkatan" class="form-control" value="{{ $data->nama_angkatan }}" required>
        </div>
        {{--  <div class="mb-3">
            <label for="perushaan">Perusahaan:</label>
            <input type="text" name="perusahaan" class="form-control" value="{{ $data->perusahaan }}" required>
        </div>
        <div class="mb-3">
            <label for="photo">Photos:</label>
            <input type="file" name="photo" class="form-control" value="{{ $data->photo }}">
            <img src="{{ asset($data->photo) }}" alt="" style="width: 200px">
        </div>  --}}
    </div>
</div>
        <button type="submit" class="btn btn-success">submit</button>
    </form>
@endsection
