<!-- resources/views/admin/master/create.blade.php -->

@extends('admin.master.index')

@section('content')
    <br>
    <h1>Tambah Data Alumni</h1>
    <!-- Form tambah data alumni -->
    <form action="{{ route('admin.alumni.store') }}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="card" style="width: 60rem;">
    <div class="card-body">
        <div class="mb-3">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="agama">Agama:</label>
            <select class="form-control" name="agama" aria-label="Default select example">
                <option selected> Select Agama</option>
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
                <option selected> Select jenis Kelamin</option>
                <option value="laki_laki">Laki-Laki</option>
                <option value="peerempuan">Perempuan</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="angkatan_id">Angkatan_id:</label>
            <select class="form-control" name="angkatan_id" aria-label="Default select example">
                <option selected>Select Angkatan_ke</option>
                //untuk mengambil data dari angkatan
                @foreach ($angkatan as $item)
                <option value="{{ $item->angkatan }}">{{ $item->angkatan }}</option>
                @endforeach

            </select>
        </div>

        <div class="mb-3">
            <label for="angkatan">Nama Angkatan:</label>
            <select class="form-control" name="angkatan" aria-label="Default select example">
                <option selected>Select Angkatan</option>
                //untuk mengambil data dari angkatan
                @foreach ($angkatan as $item)
                <option value="{{ $item->nama_angkatan }}">{{ $item->nama_angkatan }}</option>
                @endforeach

            </select>
        </div>
        <div class="mb-3">
            <label for="notlp">No_Tlp:</label>
            <input type="number" name="no_tlp" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="tahun_lulus">Tahun Lulus:</label>
            <input type="date" name="tahun_lulus" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="alamat">Alamat:</label>
            <input type="text" name="alamat" class="form-control" required>
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
