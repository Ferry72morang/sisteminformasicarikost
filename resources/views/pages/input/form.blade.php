@extends('main')

@section('title','Form input')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Input Data Kost</h1></div>
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
                                    :route("input.store") }}
                    method="POST" autocomplete="off">
                    @csrf
                    @if (isset($data))
                        @method("PUT")
                    @endif
                    <div class="form-group">
                        <label for="idk">Id Kost</label>
                        <input type="text"
                            class="form-control @error("idk") is-invalid @enderror"
                            name="idk" value={{ (isset($data)?$data->idk:old("idk")) }}>
                        @error("idk")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <select name="alamat" class="form-control">
                            <option value="semuakota" >
                                Semua Kabupaten/kota</option>
                                <option value="nias" >
                                KABUPATEN NIAS</option>
                                <option value="madina" >
                                KABUPATEN MANDAILING NATAL</option>
                                <option value="madina" >
                                KABUPATEN TAPANULI SELATAN</option>
                                    <option value="madina" >
                                        KABUPATEN TAPANULI TENGAH</option>
                                        <option value="madina" >
                                            KABUPATEN TAPANULI UTARA</option>
                        </select>
                        <select name="alamat" class="form-control mt-2" >
                            <option value="kecamatan" >
                                Semua Kecamatan</option>
                            <option value="wanita" >
                                IDANO GAO</option>
                                <option value="campur" >
                                BAWOLATO</option>
                        </select>
                        <select name="alamat" class="form-control  mt-2">
                            <option value="kelurahan" >
                               Semua Kelurahan</option>
                            <option value="wanita" >
                                Sei Putih Timur</option>
                                <option value="campur" >
                                Sei Ular</option>
                        </select>
                    </div>
                   
                    <div class="form-group">
                        <label for="kdpos">Kode pos</label>
                        <input type="text"
                            class="form-control @error("kdpos") is-invalid @enderror"
                            name="kdpos" value={{ isset($data)?$data->kdpos:old("kdpos") }}>
                        @error("kdpos")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="klasifikasi">Klasifikasi</label>
                        <select name="klasifikasi" class="form-control">
                            <option value="pria" >
                                Pria</option>
                            <option value="wanita" >
                                Wanita</option>
                                <option value="campur" >
                                Campur</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="fasilitas">Fasilitas Kost</label>
                       <div class="form-group">
                        <ul>
                            <div  class="icheck-primary d-inline ml-2" >
                              <input type="checkbox" value="" name="todo4" id="todoCheck4">
                              <label for="todoCheck4"></label>
                            </div>
                            <span class="text ">AC</span>

                            <div  class="icheck-primary d-inline ml-2">
                                <input type="checkbox" value="" name="todo4" id="todoCheck5"  >
                                <label for="todoCheck5"></label>
                              </div>
                              <span class="text" >Internet/Wifi</span>
                                <div>
                              <div  class="icheck-primary d-inline ml-2">
                                <input type="checkbox" value="" name="todo4" id="todoCheck6">
                                <label for="todoCheck6"></label>
                              </div>
                              <span class="text">Lemari Pakaian</span>
                            </div>
                        </ul></div>
                        <div>
                        <ul>
                            <div  class="icheck-primary d-inline ml-2">
                              <input type="checkbox" value="" name="todo4" id="todoCheck4">
                              <label for="todoCheck4"></label>
                            </div>
                            <span class="text ">Kamar mandi dalam</span>

                            <div  class="icheck-primary d-inline ml-2">
                                <input type="checkbox" value="" name="todo4" id="todoCheck5">
                                <label for="todoCheck5"></label>
                              </div>
                              <span class="text">Water Heater</span>

                              <div  class="icheck-primary d-inline ml-2">
                                <input type="checkbox" value="" name="todo4" id="todoCheck6">
                                <label for="todoCheck6"></label>
                              </div>
                              <span class="text">Spring bed</span>
                        </ul></div>
                        <div>
                        <ul>
                            <div  class="icheck-primary d-inline ml-2">
                              <input type="checkbox" value="" name="todo4" id="todoCheck4">
                              <label for="todoCheck4"></label>
                            </div>
                            <span class="text ">Meja Belajar</span>

                            <div  class="icheck-primary d-inline ml-2">
                                <input type="checkbox" value="" name="todo4" id="todoCheck5">
                                <label for="todoCheck5"></label>
                              </div>
                              <span class="text">Kursi Belajar</span>

                              <div  class="icheck-primary d-inline ml-2">
                                <input type="checkbox" value="" name="todo4" id="todoCheck6">
                                <label for="todoCheck6"></label>
                              </div>
                              <span class="text">Sekamar berdua</span>
                        </ul></div>
                    </div>
                    <div class="form-group">
                        <label for="ukuran">Ukuran</label>
                        <input type="text"
                            class="form-control @error("ukuran") is-invalid @enderror"
                            name="ukuran" value={{ isset($data)?$data->ukuran:old("ukuran") }}>
                        @error("ukuran")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="luas">luas</label>
                        <input type="text"
                            class="form-control @error("luas") is-invalid @enderror"
                            name="luas" value={{ isset($data)?$data->luas:old("luas") }}>
                        @error("luas")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="idn">Id Pemilik</label>
                        <input type="text"
                            class="form-control @error("idn") is-invalid @enderror"
                            name="idn" value={{ isset($data)?$data->idn:old("idn") }}>
                        @error("idn")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga Kost/bln</label>
                        <input type="text"
                            class="form-control @error("harga") is-invalid @enderror"
                            name="harga" value={{ isset($data)?$data->harga:old("harga") }}>
                        @error("harga")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="gambar">Gambar Kost</label>
                        <input type="text"
                            class="form-control @error("gambar") is-invalid @enderror"
                            name="gambar" value={{ isset($data)?$data->gambar:old("gambar") }}>
                        @error("gambar")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
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