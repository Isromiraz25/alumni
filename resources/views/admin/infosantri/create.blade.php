@extends('admin.master.index')

@section('content')

br>
    <h1>Tambah Informasi Santri</h1>

    <form action="{{ route('admin.infosantri.store') }}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="card" style="width: 60rem;">
    <div class="card-body">
        <div class="mb-3">
            <label for="judul">Judul:</label>
            <input type="text" name="judul" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="tanggal">Tanggal:</label>
            <input type="date" name="tanggal" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="deskripsi">Deskripsi:</label>
            <textarea type="text" name="deskripsi" class="form-control" required></textarea>
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
