@extends('admin.master.index')

@section('content')
<br>
<h1>Data Informasi Bursakerja</h1>
<a href="{{ route('admin.work.create') }}" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i>Tambah Info Bursakerja</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Posisi</th>
        <th scope="col">PT</th>
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
        @foreach ($works as $index => $item)
        <tr>
            <th scope="row">{{ $index + $works->firstitem() }}</th>
            <th scope="col">{{ $item->posisi }}</th>
            <th scope="col">{{ $item->pt }}</th>
            <th scope="col">{{ $item->tanggal }}</th>
            <th scope="col">{{ $item->deskripsi }}</th>
            <!-- <th scope="col">{{ $item->photo }}</th> -->
            <th>
                <img src="{{ asset($item->photo) }}" alt="" style="width: 40px;">
            </th>
            <th>
                <a href="/editwork/{{ $item->id }}">
                    <button type="submit" class="btn btn-primary btn-sm" onclick="return confirm('Are you sure you want to Edit this item?')">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                    </button>
                </a>
                <a href="deletework/{{ $item->id }}">
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to Delete this item?')">
                    <i class="fa fa-trash" aria-hidden="true"></i>delete
                </button>
                </a>
            </th>
          </tr>
        @endforeach


    </tbody>
  </table>
  {{ $works->links() }}
@endsection
