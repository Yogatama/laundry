@extends('layout.admin.v_template')

@section('title', 'Edit Layanan')
@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">@yield('title')</h6>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid mt--6">
    <div class="col-xl-8 order-xl-1">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Form Layanan </h3>
                    </div>
                    <div class="col-4">
                        <a href="" class="d-flex justify-content-end mb-0"> back </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('data.layanan.update', $layanan->id) }}" method="post" >
                    @csrf
                    <h6 class="heading-small text-muted mb-4">Layanan Information</h6>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label">Nama</label>
                                    <input id="nama_layanan" class="form-control" name="nama_layanan" placeholder="Nama" type="text" value="{{ $layanan->nama_layanan }}">
                                    <div class="text-danger">
                                        @error('nama_layanan')
                                                {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label">Harga</label>
                                    <input id="harga" class="form-control" name="harga" placeholder="Harga" type="text" value="{{ $layanan->harga }}">
                                    <div class="text-danger">
                                        @error('harga')
                                                {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label">Estimasi</label>
                                    <input id="estimasi" class="form-control" name="estimasi" placeholder="Estimasi" type="text" value="{{ $layanan->estimasi }}">
                                    <div class="text-danger">
                                        @error('estimasi')
                                                {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-sm" type="submit"> Simpan </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>





@endsection

