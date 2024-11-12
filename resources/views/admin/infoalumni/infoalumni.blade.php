@extends('admin.master.index')

@section('content')

<br>
<h1>Data Informasi Alumni</h1>
<a href="{{ route('admin.infoalumni.create') }}" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i>Tambah Info Alumni</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Judul</th>
        <th scope="col">Tanggal</th>
        <th scope="col">Deskripsi</th>
        <th scope="col">Photo</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @php
        $no = 1;
        @endphp
        @foreach ($infoalumnis as $index => $item)
        <tr>
            <th scope="row">{{ $index + $infoalumnis->firstitem() }}</th>
            <th scope="col">{{ $item->judul }}</th>
            <th scope="col">{{ $item->tanggal }}</th>
            <th scope="col">{{ $item->deskripsi }}</th>
            <!-- <th scope="col">{{ $item->photo }}</th> -->
            <th>
                <img src="{{ asset($item->photo) }}" alt="" style="width: 40px;">
            </th>
            <th>
                <a href="/editinfoalumni/{{ $item->id }}">
                    <button type="submit" class="btn btn-primary btn-sm" onclick="return confirm('Are you sure you want to Edit this item?')">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                    </button>
                </a>
                <a href="deleteinfoalumni/{{ $item->id }}">
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to Delete this item?')">
                    <i class="fa fa-trash" aria-hidden="true"></i>delete
                </button>
                </a>
            </th>
          </tr>
        @endforeach


    </tbody>
  </table>
  {{ $infoalumnis->links() }}

@endsection
