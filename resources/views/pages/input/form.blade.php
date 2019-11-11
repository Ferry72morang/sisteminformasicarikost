@extends('main')

@section('title','Form input')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6">
                    <h1>Data pemilik Kost</h1>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route("input.index") }}">List input</a></li>
                        <li class="breadcrumb-item active">Form input</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title">Form input</h3>
            </div>
            <div class="card-body">
                <form action={{ isset($data)
                                    ?route("input.update",[$data->id])
                                    :route("input.store") }} method="POST" autocomplete="off">
                    @csrf
                    @if (isset($data))
                    @method("PUT")
                    @endif
                    <div class="form-group">
                        <label for="idkost">Id Kost</label>
                        <input type="text" class="form-control @error(" idkost") is-invalid @enderror" name="idkost"
                            value={{ (isset($data)?$data->idkost:old("idkost")) }}>
                        @error("idkost")
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control @error(" alamat") is-invalid @enderror" name="alamat"
                            value={{ isset($data)?$data->alamat:old("alamat") }}>
                        @error("alamat")
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        <input type="text" class="form-control @error(" alamat") is-invalid @enderror" name="alamat"
                            value={{ isset($data)?$data->alamat:old("alamat") }}>
                        @error("alamat")
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        <input type="text" class="form-control @error(" alamat") is-invalid @enderror" name="alamat"
                            value={{ isset($data)?$data->alamat:old("alamat") }}>
                        @error("alamat")
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        <input type="text" class="form-control @error(" alamat") is-invalid @enderror" name="alamat"
                            value={{ isset($data)?$data->alamat:old("alamat") }}>
                        @error("alamat")
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="kodepos">Kode Pos</label>
                        <input type="text" class="form-control @error(" kodepos") is-invalid @enderror" name="kodepos"
                            value={{ isset($data)?$data->kodepos:old("kodepos") }}>
                        @error("kodepos")
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="klasifikasi">Klasifikasi Penghuni</label>
                        <select name="klasifikasi" class="form-control">
                            <option value="pria" {{ isset($data) && $data->klasifikasi=="pria"?"selected":'' }}>
                                Pria</option>
                            <option value="wanita" {{ isset($data) && $data->klasifikasi=="wanita"?"selected":'' }}>
                                Wanita</option>
                            <option value="campur" {{ isset($data) && $data->klasifikasi=="campur"?"selected":'' }}>
                                Campur</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="klasifikasi">Fasilitas Kamar</label>
                        <div  class="icheck-primary d-inline ml-2">
                            <input type="checkbox" value="" name="todo1" id="todoCheck1">
                            <label for="todoCheck1"></label>
                          </div>
                          <!-- todo text -->
                          <span class="text">AC</span>
                          <!-- Emphasis label -->
                         
                          <!-- General tools such as edit or delete-->
                          <div class="tools">
                            <i class="fas fa-edit"></i>
                            <i class="fas fa-trash-o"></i>
                          </div>
                        </li>
                        <li>
                          <span class="handle">
                            <i class="fas fa-ellipsis-v"></i>
                            <i class="fas fa-ellipsis-v"></i>
                          </span>
                          <div  class="icheck-primary d-inline ml-2">
                            <input type="checkbox" value="" name="todo2" id="todoCheck2" checked>
                            <label for="todoCheck2"></label>
                          </div>
                          <span class="text">Kamar mandi dalam</span>
                          
                          <div class="tools">
                            <i class="fas fa-edit"></i>
                            <i class="fas fa-trash-o"></i>
                          </div>
                        </li>
                        <li>
                          <span class="handle">
                            <i class="fas fa-ellipsis-v"></i>
                            <i class="fas fa-ellipsis-v"></i>
                          </span>
                          <div  class="icheck-primary d-inline ml-2">
                            <input type="checkbox" value="" name="todo3" id="todoCheck3">
                            <label for="todoCheck3"></label>
                          </div>
                          <span class="text">Meja belajar</span>
                        
                          <div class="tools">
                            <i class="fas fa-edit"></i>
                            <i class="fas fa-trash-o"></i>
                          </div>
                        </li>
                        <li>
                          <span class="handle">
                            <i class="fas fa-ellipsis-v"></i>
                            <i class="fas fa-ellipsis-v"></i>
                          </span>
                          <div  class="icheck-primary d-inline ml-2">
                            <input type="checkbox" value="" name="todo4" id="todoCheck4">
                            <label for="todoCheck4"></label>
                          </div>
                          <span class="text">Internet/wifi</span>
                          
                          <div class="tools">
                            <i class="fas fa-edit"></i>
                            <i class="fas fa-trash-o"></i>
                          </div>
                        </li>
                        <li>
                          <span class="handle">
                            <i class="fas fa-ellipsis-v"></i>
                            <i class="fas fa-ellipsis-v"></i>
                          </span>
                          <div  class="icheck-primary d-inline ml-2">
                            <input type="checkbox" value="" name="todo5" id="todoCheck5">
                            <label for="todoCheck5"></label>
                          </div>
                          <span class="text">Water heater</span>
                         
                          <div class="tools">
                            <i class="fas fa-edit"></i>
                            <i class="fas fa-trash-o"></i>
                          </div>
                        </li>
                        <li>
                          <span class="handle">
                            <i class="fas fa-ellipsis-v"></i>
                            <i class="fas fa-ellipsis-v"></i>
                          </span>
                          <div  class="icheck-primary d-inline ml-2">
                            <input type="checkbox" value="" name="todo6" id="todoCheck6">
                            <label for="todoCheck6"></label>
                          </div>
                          <span class="text">Kursi Belajar</span>
                        
                          <div class="tools">
                            <i class="fas fa-edit"></i>
                            <i class="fas fa-trash-o"></i>
                          </div>
                        </li>
                      </ul>
                    </div>
                   
                    <div class="form-group float-right">
                        <button type="submit" class="btn btn-success">
                            <i class="fa fa-save"></i> Simpan
                        </button>
                        <a href="{{ route("input.index") }}" class="btn btn-danger">
                            <i class="fa fa-arrow-left"></i> Batal
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
