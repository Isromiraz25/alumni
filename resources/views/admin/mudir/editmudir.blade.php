<!-- resources/views/admin/master/create.blade.php -->

@extends('admin.master.index')

@section('content')
    <br>
    <h1>Edit Data Mudir</h1>
    <!-- Form tambah data alumni -->
    <form action="/updatemudir/{{ $data->id }}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="card" style="width: 60rem;">
    <div class="card-body">
        <div class="mb-3">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" class="form-control" value="{{ $data->nama }}" required>
        </div>
        </div>
        <div class="mb-3">
            <label for="tempat_lahir">Tempat_lahir:</label>
            <input type="text" name="tempat_lahir" class="form-control" value="{{ $data->tempat_lahir }}" required>
        </div>
        <div class="mb-3">
            <label for="tanggal_lahir">Tanggal_lahir:</label>
            <input type="date" name="tanggal_lahir" class="form-control" value="{{ $data->tanggal_lahir }}"required>
        </div>
        <div class="mb-3">
            <label for="wasiat">Wasiat:</label>
            <input type="text" name="wasiat" class="form-control" value="{{ $data->wasiat }}"required> </input>
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
