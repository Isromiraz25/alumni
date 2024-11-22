@extends('admin.master.index')

@section('content')
<br>
<h1>Data Siswa Baru</h1>
<a href="{{ route('admin.struktur.create') }}" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Data</a>
<table class="table" id="struktur">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Jabatan</th>
        <th scope="col">Photo</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @php
        $no = 1;
        @endphp
        @foreach ($struktur as $index => $item)
        <tr>
            <th scope="row">{{ $index + $struktur->firstitem() }}</th>
            <th scope="col">{{ $item->name }}</th>
            <th scope="col">{{ $item->jabatan }}</th>
            <th>
                <img src="{{ asset($item->photo) }}" alt="" style="width: 40px;">
            </th>
            <th>
                @if(auth()->user()->role == 'admin')
                <a href="/editstruktur/{{ $item->id }}">
                    <button type="submit" class="btn btn-primary btn-sm" onclick="return confirm('Are you sure you want to Edit this item?')">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                    </button>
                </a>
                <a href="deletestruktur/{{ $item->id }}">
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?')">
                        <i class="fa fa-trash" aria-hidden="true"></i> Delete
                    </button>
                </a>
                @endif
            </th>
          </tr>
        @endforeach


    </tbody>
  </table>
  {{ $struktur->links() }}
@endsection
