@extends('admin.master.index')

@section('content')
<br>
<h1>Data Alumni</h1>
<a href="{{ route('admin.alumni.create') }}" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Alumni</a>
@if(auth()->user()->role == 'admin')
<a href="{{ route('exportalumni') }}" class="btn btn-danger"><i class="fa fa-download" aria-hidden="true"></i> Download</a>
@endif
<table class="table" id="myTable">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Agama</th>
        <th scope="col">Jenis_kelamin</th>
        <th scope="col">Angkatan_id</th>
        <th scope="col">No_Tlp</th>
        <th scope="col">Tahun_lulus</th>
        <th scope="col">Alamat</th>
        <th scope="col">Photo</th>
        <th scope="col">Aksi</th> <!-- Always include the "Aksi" column in the header -->
      </tr>
    </thead>
    <tbody>
        @php
        $no = 1;
        @endphp
        @foreach ($alumnis as $item)
        <tr>
            <th scope="row">{{ $no++ }}</th>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->agama }}</td>
            <td>{{ $item->jenis_kelamin }}</td>
            <td>{{ $item->angkatan }} - {{ $item->nama_angkatan }}</td>
            <td>{{ $item->no_tlp }}</td>
            <td>{{ $item->tahun_lulus }}</td>
            <td>{{ $item->alamat }}</td>
            <td>
                <img src="{{ asset($item->photo) }}" alt="" style="width: 40px;">
            </td>
            <td>
                @if(auth()->user()->role == 'admin')
                <a href="{{ route('admin.alumni.editalumni',[$item->id]) }}">
                    <button type="submit" class="btn btn-primary btn-sm" onclick="return confirm('Are you sure you want to Edit this item?')">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                    </button>
                </a>
                <a href="deletealumni/{{ $item->id }}">
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?')">
                        <i class="fa fa-trash" aria-hidden="true"></i> Delete
                    </button>
                </a>
                @else
                <span>No action available</span> <!-- For non-admin users, show a placeholder -->
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{--  {{ $alumnis->links() }}  --}}
@endsection
