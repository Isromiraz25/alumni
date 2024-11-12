@extends('admin.master.index')

@section('content')


<br>
    <h1>Edit Informasi Alumni</h1>

    <form action="/updateinfoalumni/{{ $data->id }}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="card" style="width: 60rem;">
    <div class="card-body">
        <div class="mb-3">
            <label for="judul">Judul:</label>
            <input type="text" name="judul" class="form-control" value="{{ $data->judul }}" required>
        </div>
        <div class="mb-3">
            <label for="tanggal">Tanggal:</label>
            <input type="date" name="tanggal" class="form-control" value="{{ $data->tanggal }}" required>
        </div>
        <div class="mb-3">
            <label for="deskripsi">Deskripisi:</label>
            <input type="text" name="deskripsi" class="form-control" value="{{ $data->deskripsi }}" required>
        </div>

        <div class="mb-3">
            <label for="photo">Photos:</label>
            <input type="file" name="photo" class="form-control">
            @if($data->photo)
            <img src="{{ asset($data->photo) }}" alt="" style="width: 200px">
            @endif

        </div>
    </div>
</div>
        <button type="submit" class="btn btn-success">submit</button>
    </form>


@endsection
