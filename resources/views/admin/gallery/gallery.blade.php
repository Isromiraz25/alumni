@extends('admin.master.index')

@section('content')

<br>
<br>
<h1>Data Galerry</h1>
<a href="{{ route('admin.gallery.create') }}" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i>Tambah Galerry</a>
<table class="table" id="galerry"> 
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Judul</th>
        <th scope="col">Deskripsi</th>
        <th scope="col">photo</th>
        <th scope="col">Aksi</th>

      </tr>
    </thead>
    <tbody>
        @php
        $no = 1;
        @endphp
        @foreach ($gallerys as $index => $item)
        <tr>
            <th scope="row">{{ $index + $gallerys->firstitem() }}</th>
            <th scope="col">{{ $item->judul }}</th>
            <th scope="col">{{ $item->deskripsi }}</th>
            {{--  <th scope="col">{{ $item->foto }}</th>  --}}
            <th>
                <img src="{{ asset($item->photo) }}" alt="" style="width: 40px;">
            </th>
            <th>
                <a href="{{ route('admin.gallery.editgallery',[$item->id]) }}">
                    <button type="submit" class="btn btn-primary btn-sm" onclick="return confirm('Are you sure you want to Edit this item?')">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                    </button>
                </a>
                <a href="deletegallery/{{ $item->id }}">
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to Delete this item?')">
                        <i class="fa fa-trash" aria-hidden="true"></i> Delete
                    </button>
                </a>
            </th>
          </tr>
        @endforeach

    </tbody>
  </table>

  {{ $gallerys->links() }}

@endsection
