<!-- resources/views/admin/master/create.blade.php -->

@extends('admin.master.index')

@section('content')
    <br>
    <h1>Tambah Data IDyoutube</h1>
    <!-- Form tambah data alumni -->
<form action="{{ route('admin.youtube.store') }}" method="post" enctype="multipart/form-data">
        @csrf
<div class="card" style="width: 60rem;">
    <div class="card-body">
        <div class="mb-3">
            <label for="idyoutube">IDyoutube:</label>
            <input type="text" name="idyoutube" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="deskripsi">Deskripsi:</label>
            <input type="text" name="deskripsi" class="form-control" required>
        </div>
        
    </div>
        <button type="submit" class="btn btn-success">Tambah</button>
    </form>
</div>
@endsection
