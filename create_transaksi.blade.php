@extends('layout.admin.v_template')

@section('title', 'Create Transaksi')
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
                        <h3 class="mb-0">Form Transaksi </h3>
                    </div>
                    <div class="col-4">
                        <a href="{{ route('data.transaksi.index') }}" class="d-flex justify-content-end mb-0"> back </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('data.transaksi.store') }}" method="post">
                    @csrf
                    <h6 class="heading-small text-muted mb-4">Transaksi Information</h6>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label">Nama</label>
                                    {{-- <input id="nama" class="form-control" name="" placeholder="nama" type="text" value="{{ old('nama') }}">
                                    --}}
                                    <select id='nama' autocomplete="off" name="user_id" class="form-control">
                                        <option selected disabled> Pilih User </option>
                                        @foreach ($user as $data)
                                        <option value={{$data->id}}> {{$data->nama}} </option>

                                        @endforeach
                                    </select>
                                    <div class="text-danger">
                                        @error('user_id')
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
                                    <label class="form-control-label">Layanan</label>
                                    <select autocomplete="off" id='nama_layanan' name="layanan_id"
                                        class="form-control">
                                        <option selected disabled> Pilih Layanan </option>
                                        @foreach ($layanan as $data)
                                        <option value={{$data->id}}> {{$data->nama_layanan}} </option>

                                        @endforeach
                                    </select>
                                    <div class="text-danger">
                                        @error('layanan_id')
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
                                    <input autocomplete="off"  readonly id="harga" class="form-control" name="harga" placeholder="Harga"
                                        type="text" value="{{ old('harga') }}">
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
                                    <label class="form-control-label">Berat</label>
                                    <input autocomplete="off" id="berat" class="form-control" name="berat" placeholder="Berat" type="text"
                                        value="{{ old('berat') }}">
                                    <div class="text-danger">
                                        @error('berat')
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
                                    <label class="form-control-label">Total</label>
                                    <input autocomplete="off" readonly id="total" class="form-control" name="total" placeholder="Total" type="text"
                                        value="{{ old('total') }}">
                                    <div class="text-danger">
                                        @error('total')
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
                                    <label class="form-control-label">Keterangan</label>
                                    <input id="keterangan" class="form-control" name="keterangan"
                                        placeholder="Keterangan" type="text" value="{{ old('keterangan') }}">
                                    <div class="text-danger">
                                        @error('keterangan')
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
    // handle select 2
    $('#nama_layanan').select2();
    $('#nama').select2();
    //end  handle select 2

    //handle harga layanan
    $('#nama_layanan').change(function() {
        let nama = $('#nama_layanan').find(":selected").val();
        let jobs = {!! json_encode($layanan) !!}
        jobs.map((data, index) =>{
        if(data.id == nama){
            $('#harga').val(data.harga)
            }
        
        })
    })
    //end handle harga layanan

    //handle harga layanan
    $('#berat').change(function() {
        let berat = $('#berat').val()
        let harga = $('#harga').val()
        $('#total').val(berat*harga)
    })
    //end handle harga layanan

});
</script>
@endsection