@extends('admin.master.index')

@section('content')
<br>
<h1>Data Mudir</h1>
<a href="{{ route('admin.mudir.create') }}" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Data</a>
<table class="table" id="mudir">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Tempat_Lahir</th>
        <th scope="col">Tanggal_lahir</th>
        <th scope="col">Wasiat</th>
        <th scope="col">Photo</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @php
        $no = 1;
        @endphp
        @foreach ($mudir as $index => $item)
        <tr>
            <th scope="row">{{ $index + $mudir->firstitem() }}</th>
            <th scope="col">{{ $item->nama }}</th>
            <th scope="col">{{ $item->tempat_lahir }}</th>
            <th scope="col">{{ $item->tanggal_lahir }}</th>
            <th scope="col">{{ $item->wasiat }}</th>
            <!-- <th scope="col">{{ $item->photo }}</th> -->
            <th>
                <img src="{{ asset($item->photo) }}" alt="" style="width: 40px;">
            </th>
            <th>
                @if(auth()->user()->role == 'admin')
                <a href="/editmudir/{{ $item->id }}">
                    <button type="submit" class="btn btn-primary btn-sm" onclick="return confirm('Are you sure you want to Edit this item?')">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                    </button>
                </a>
                <a href="deletemudir/{{ $item->id }}">
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
  {{ $mudir->links() }}
@endsection
