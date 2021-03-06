@extends('main')

@section('title','Form admin')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Data pemilik Kost</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route("admin.index") }}">List admin</a></li>
                        <li class="breadcrumb-item active">Form admin</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title">Form admin</h3>
            </div>
            <div class="card-body">
                <form action={{ isset($data)
                                    ?route("admin.update",[$data->id])
                                    :route("admin.store") }}
                    method="POST" autocomplete="off">
                    @csrf
                    @if (isset($data))
                        @method("PUT")
                    @endif
                    <div class="form-group">
                        <label for="idn">Id</label>
                        <input type="text"
                            class="form-control @error("idn") is-invalid @enderror"
                            name="idn" value={{ (isset($data)?$data->idn:old("idn")) }}>
                        @error("idn")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text"
                            class="form-control @error("nama") is-invalid @enderror"
                            name="nama" value={{ (isset($data)?$data->nama:old("nama")) }}>
                        @error("nama")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text"
                            class="form-control @error("alamat") is-invalid @enderror"
                            name="alamat" value={{ isset($data)?$data->alamat:old("alamat") }}>
                        @error("alamat")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        
                    </div>
                    <div class="form-group">
                        <label for="telepon">No telepon</label>
                        <input type="text"
                            class="form-control @error("telepon") is-invalid @enderror"
                            name="telepon" value={{ isset($data)?$data->telepon:old("telepon") }}>
                        @error("telepon")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                  
                    <div class="form-group float-right">
                        <button type="submit" class="btn btn-success">
                            <i class="fa fa-save"></i> Simpan
                        </button>
                        <a href="{{ route("admin.index") }}" class="btn btn-danger">
                            <i class="fa fa-arrow-left"></i> Batal
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection