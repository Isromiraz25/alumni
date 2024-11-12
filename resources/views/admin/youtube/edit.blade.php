<!-- resources/views/admin/master/create.blade.php -->

@extends('admin.master.index')

@section('content')
    <br>
    <h1>Edit Data IDYoutube</h1>
    <!-- Form tambah data alumni -->
    <form action="/updateyoutube/{{ $data->id }}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="card" style="width: 60rem;">
    <div class="card-body">
        <div class="mb-3">
            <label for="idyoutube">IDyoutube:</label>
            <input type="text" name="idyoutube" class="form-control" value="{{ $data->idyoutube }}" required>
        </div>
        </div>
        <div class="mb-3">
            <label for="eskripsi">Deskripsi:</label>
            <input type="text" name="deskripsi" class="form-control" value="{{ $data->deskripsi }}" required>
        </div>

    </div>
</div>
        <button type="submit" class="btn btn-success">submit</button>
    </form>
@endsection
