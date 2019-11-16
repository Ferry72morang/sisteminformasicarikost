@extends('main')

@section('title','List input')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Input Data</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                        <li class="breadcrumb-item active">List Kost</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        @if ($message = session("info"))
            <div class="alert alert-success">
                <i class="fa fa-in fo-circle"></i> {{ $message }}
            </div>
        @endif
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title">List Kost</h3>
            </div>
            <div class="card-body">
                <div class="float-right mb-2">
                    <a href="{{ route("input.create") }}" class="btn btn-success">
                        <i class="fa fa-plus"></i> Tambah</a>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th> 
                            <th>Id kost</th>
                            <th>Alamat</th>
                            <th>Kode Pos</th>
                            <th>Klasifikasi Kost</th>
                            <th>Fasilitas Kamar</th>
                            <th>Ukuran Kamar</th>
                            <th>Luas Kamar</th>
                            <th>Id Pemilik</th>
                            <th>Harga Kost/bln</th>
                            <th>Gambar Kost</th>
                            <th colspan=2>Action</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $loop->iteration + (10*($data->currentPage()-1)) }}</td>
                                <td>{{ $item->idk }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->kdpos }}</td>
                                <td>{{ $item->klasifikasi }}</td>
                                <td>{{ $item->fasilitas }}</td>
                                <td>{{ $item->ukuran }}</td>
                                <td>{{ $item->luas }}</td>
                                <td><a href="#">{{ $item->idn }}</td>
                                <td>{{ $item->harga }}</td>
                                <td>{{ $item->gambar }}</td>
                                <td><a href="{{ route("input.show",[$item->id]) }}" class="btn btn-warning btn-block"><i class="fa fa-pencil-alt"></i> Rubah</a></td>
                                <td>
                                    <form action="{{ route("input.destroy",[$item->id]) }}"
                                        method="POST">
                                        @method("delete")
                                        @csrf
                                        <button type="submit"
                                            class="btn btn-danger btn-block">
                                            <i class="fa fa-trash"></i> Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="float-right mt-2">
                    {{ $data->links() }}
                </div>
            </div>
        </div>

    </section>
</div>
@endsection