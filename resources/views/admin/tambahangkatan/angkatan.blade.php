@extends('admin.master.index')

@section('content')
<br>
<h1>Data Nama Angkatan</h1>
<a href="{{ route('admin.tambahangkatan.create') }}" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i>Tambah Angkatan</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Angkatan-Ke</th>
        <th scope="col">Nama Angkatan</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @php
        $no = 1;
        @endphp
        @foreach ($angkatan as $index => $item)
        <tr>
            <th scope="row">{{ $index + $angkatan->firstitem() }}</th>
            <th scope="col">{{ $item->angkatan }}</th>
            <th scope="col">{{ $item->nama_angkatan }}</th>
            <th>
                <a href="/editangkatan/{{ $item->id }}" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>edit</a>
                <a href="/deleteangkatan/{{ $item->id }}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i>delete</a>
            </th>
          </tr>
        @endforeach


    </tbody>
  </table>
  {{ $angkatan->links() }}
@endsection
