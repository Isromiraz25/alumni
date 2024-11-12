@extends('admin.master.index')

@section('content')

<div style="margin: 0 auto; max-width:800px; "></div>
    <br>
    <h2>Tambah Saran</h2>
    <form action="{{ route('admin.saran.store') }}" method="POST">
        @csrf
        <div class="card" style="width: 60rem;">
            <div class="card-body">
        <div class="mb-3">
            <label for="nama_pengirim">Nama Pengirim:</label>
            <input type="text" name="nama_pengirim" class="form-label"   required>
        </div>
        <div class="mb-3">
            <label for="isi_saran">Isi Saran:</label>
            <textarea name="isi_saran" class="form-control" required></textarea>
        </div>
        </div>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>


@endsection
