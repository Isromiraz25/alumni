@extends('admin.master.index')

@section('content')


<br>
    <h1>Tambah Data Galerry</h1>
    <!-- Form tambah data Galeery -->
    <form action="{{ route('admin.gallery.store') }}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="card" style="width: 60rem;">
    <div class="card-body">
        <div class="mb-3">
            <label for="nama">Judul:</label>
            <input type="text" name="judul" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="deskripsi">Deskripsi:</label>
            <input type="text" name="deskripsi" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="photo">Photo:</label>
            <input type="file" name="photo" class="form-control">
        </div>
    </div>
</div>
        <button type="submit" class="btn btn-success">Tambah</button>
    </form>


@endsection
