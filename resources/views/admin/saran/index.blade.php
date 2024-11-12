@extends('admin.master.index')

@section('content')

<br>
    <h2>Daftar Saran</h2>
    <div style="margin: 0 auto; max-width:800px; "></div>
    <a href="{{ route('admin.saran.create') }}" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Saran</a>
    <ul>
        @foreach($saran as $item)
            <li>{{ $item->nama_pengirim }}: {{ $item->isi_saran }}

                <form action="{{ route('admin.saran.deletesaran', $item->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('GET')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?')">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </button>
                </form>


            </li>
        @endforeach
    </ul>


@endsection
