<!-- resources/views/admin/master/create.blade.php -->

@extends('admin.master.index')

@section('content')
    <br>
    <h1>Tambah Data I-Kata</h1>
    <!-- Form tambah data alumni -->
    <form action="{{ route('admin.struktur.store') }}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="card" style="width: 60rem;">
    <div class="card-body">
        <div class="mb-3">
            <label for="name">Nama:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="jabatan" class="form-label">Jabatan:</label>
            <select class="form-control" name="jabatan" aria-label="Default select example">
                <option selected disabled>Pilih Jabatan</option>
                <option value="Penasehat">Penasehat</option>
                <option value="Pembina">Pembina</option>
                <option value="Ketua Umum">Ketua Umum</option>
                <option value="Wakil Ketua">Wakil Ketua</option>
                <option value="Sek Bendahara"> Sek-Bendahara</option>
                <option value="Pendidikan">Pendidikan</option>
                <option value="Wirausaha">Wirausaha</option>
                <option value="Datin">Datin</option>
                <option value="Humas">Humas</option>
            </select>
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
