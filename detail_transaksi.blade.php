@extends('layout.admin.v_template')

@section('title', 'Detail Transaksi')
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
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="mb-0">Tables</h3>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        @foreach ($transaksi as $data)
                            <tr>
                                <td scope="col">Nama</td>
                                <td scope="col">:</td>
                                <td scope="col">
                                    {{ $data->user->nama }} 
                                </td>
                            </tr>
                            <tr>
                                <td scope="col">Layanan</td>
                                <td scope="col">:</td>
                                <td scope="col">{{ $data->layanan->nama_layanan }}</td>
                            </tr>
                            <tr>
                                <td scope="col">Berat</td>
                                <td scope="col">:</td>
                                <td scope="col">{{ $data->berat }}</td>
                            </tr>
                            <tr>
                                <td scope="col>Harga</td>
                                <td scope="col>:</td>
                                <td scope="col">{{ $data->layanan->harga }}</td>
                            </tr>
                            <tr>
                                <td scope="col">Total</td>
                                <td scope="col>:</td>
                                <td scope="col">{{ $data->total }}</td>
                            </tr>
                            <tr>
                                <td scope="col>Keterangan</td>
                                <td scope="col">:</td>
                                <td scope="col">{{ $data->keterangan }}</td>
                            </tr>
                        @endforeach        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>   
@endsection