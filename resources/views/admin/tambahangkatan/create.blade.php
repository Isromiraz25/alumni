<!-- resources/views/admin/master/create.blade.php -->

@extends('admin.master.index')

@section('content')
    <br>
    <h1>Tambah Nama Angkatan</h1>

    <form action="{{ route('admin.tambahangkatan.store') }}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="card" style="width: 60rem;">
    <div class="card-body">
        <div class="mb-3">
            <label for="angkatan">Angkatan-Ke:</label>
            <input type="number" name="angkatan" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="nama_angkatan">Nama Angkatan:</label>
            <input type="text" name="nama_angkatan" class="form-control" required>
        </div>
    </div>
</div>
        <button type="submit" class="btn btn-success">Tambah</button>
    </form>

@endsection
