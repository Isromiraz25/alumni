<!-- resources/views/admin/master/create.blade.php -->

@extends('admin.master.index')

@section('content')
    <br>
    <h1>Tambah Data Mudir</h1>
    <!-- Form tambah data alumni -->
    <form action="{{ route('admin.mudir.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="card" style="width: 60rem;">
    <div class="card-body">
        <div class="mb-3">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="tempat_lahir">Temapat_lahir:</label>
            <input type="text" name="tempat_lahir" class="form-control" required>
        </div>
            
        <div class="mb-3">
            <label for="tanggal_lahir">Tanggal_lahir:</label>
            <input type="date" name="tanggal_lahir" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="wasiat">Wasiat:</label>
            <textarea type="text" name="wasiat" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label for="photo">Photo:</label>
            <input type="file" name="photo" class="form-control">
        </div>

    </div>

        <button type="submit" class="btn btn-success">Tambah</button>
    </form>
</div>
@endsection
