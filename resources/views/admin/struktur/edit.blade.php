<!-- resources/views/admin/master/create.blade.php -->

@extends('admin.master.index')

@section('content')
    <br>
    <h1>Edit Data I-KATA</h1>
    <!-- Form tambah data alumni -->
    <form action="/updatestruktur/{{ $data->id }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card" style="width: 60rem;">
            <div class="card-body">
                <div class="mb-3">
                    <label for="name">Nama:</label>
                    <input type="text" name="name" class="form-control" value="{{ $data->name }}" required>
                </div>



                <div class="mb-3">
                    <label for="jabatan" class="form-label">Jabatan:</label>
                    <select class="form-control" name="jabatan" aria-label="Default select example">
                        <option selected disabled>{{ $data->jabatan }}</option>
                        <option value="Penasehat">Penasehat</option>
                        <option value="Pembina">Pembina</option>
                        <option value="Ketua Umum">Ketua Umum</option>
                        <option value="Wakil Ketua">Wakil Ketua</option>
                        <option value="Sek bendahara"> Sek-Bendahara</option>
                        <option value="Pendidikan">Pendidikan</option>
                        <option value="Wirausaha">Wirausaha</option>
                        <option value="Datin">Datin</option>
                        <option value="Humas">Humas</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="photo">Photos:</label>
                    <input type="file" name="photo" class="form-control">
                    @if ($data->photo)
                        <img src="{{ asset($data->photo) }}" alt="" style="width: 200px">
                    @endif

                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success">submit</button>
    </form>
@endsection
