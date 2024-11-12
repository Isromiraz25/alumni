@extends('admin.master.index')

@section('content')

<br>
<h1>Data Youtube</h1>
<a href="{{ route('admin.youtube.create') }}" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i>Tambah ID Youtube</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">IDyoutube</th>
        <th scope="col">Deskripsi</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @php
        $no = 1;
        @endphp
        @foreach ($youtube as $index => $item)
        <tr>
            <th scope="row">{{ $index + $youtube->firstitem() }}</th>
            <th scope="col">{{ $item->idyoutube }}</th>
            <th scope="col">{{ $item->deskripsi }}</th>
            
            <th>
                <a href="/edityoutube/{{ $item->id }}">
                    <button type="submit" class="btn btn-primary btn-sm" onclick="return confirm('Are you sure you want to Edit this item?')">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                    </button>
                </a>
                <a href="deleteyoutube/{{ $item->id }}">
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to Delete this item?')">
                    <i class="fa fa-trash" aria-hidden="true"></i>delete
                </button>
                </a>
            </th>
          </tr>
        @endforeach
    </tbody>
</table>
{{-- {{ $youtube->links() }} --}}

@endsection
