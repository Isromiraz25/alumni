@extends('admin.master.index')

@section('content')

<br>
    <h1>Tambah Informasi Bursa Kerja</h1>

    <form action="{{ route('admin.work.store') }}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="card" style="width: 60rem;">
    <div class="card-body">
        <div class="mb-3">
            <label for="posisi">Posisi:</label>
            <input type="text" name="posisi" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="pt">PT:</label>
            <input type="text" name="pt" class="form-control" required></input>
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
