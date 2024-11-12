<!-- resources/views/admin/master/create.blade.php -->

@extends('admin.master.index')

@section('content')
    <br>
    <h1>Tambah Data Guru</h1>
    <!-- Form tambah data alumni -->
    <form action="{{ route('admin.ust.store') }}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="card" style="width: 60rem;">
    <div class="card-body">
        <div class="mb-3">
            <label for="name">Nama:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="posisi">Posisi:</label>
            <input type="text" name="posisi" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis_kelamin:</label>
            <select class="form-control" name="jenis_kelamin" aria-label="Default select example">
                <option selected> Select jenis Kelamin</option>
                <option value="laki_laki">Laki-Laki</option>
                <option value="perempuan">Perempuan</option>
            </select>
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
            <label for="no_tlp">No_tlp:</label>
            <input type="number" name="no_tlp" class="form-control" required></input>
        </div>
        <div class="mb-3">
            <label for="alamat">Alamat:</label>
            <textarea type="text" name="alamat" class="form-control" required></textarea>
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
