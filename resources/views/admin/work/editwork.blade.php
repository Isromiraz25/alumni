@extends('admin.master.index')

@section('content')
<br>
    <h1>Edit Informasi Bursa Kerja</h1>

    <form action="/updatework/{{ $data->id }}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="card" style="width: 60rem;">
    <div class="card-body">
        <div class="mb-3">
            <label for="posisi">Posisi:</label>
            <input type="text" name="posisi" class="form-control" value="{{ $data->posisi }}" required>
        </div>
        <div class="mb-3">
            <label for="pt">PT:</label>
            <input type="text" name="pt" class="form-control" value="{{ $data->pt }}" required>
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
