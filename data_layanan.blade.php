@extends('layout.admin.v_template')

@section('title', 'Data Layanan')

@section('content')
<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">@yield('title')</h6>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <a href="{{ route('data.layanan.create') }}" class="btn btn-sm btn-neutral">Add</a>
                    <a href="#" class="btn btn-sm btn-neutral">Filters</a>
                </div>
                <div class="col-12 mt-3">
                    @if (session("success"))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    @endif
                    @if (session("error"))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('error')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page content -->
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
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort">No</th>
                                <th scope="col" class="sort">Nama</th>
                                <th scope="col" class="sort">Harga</th>
                                <th scope="col" class="sort">Estimasi</th>
                                <th scope="col" class="sort">action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($layanans as $index=>$layanan)
                            <tr>
                                <td class='text-center'> {{ $index+1 }} </td>
                                <td class='text-center'>{{ $layanan->nama_layanan }}</td>
                                <td class='text-center'>{{ $layanan->harga }}</td>
                                <td class='text-center'>{{ $layanan->estimasi }}</td>
                                <td class='text-center'>
                                    <a href="{{ route('data.layanan.detail', $layanan->id) }}">
                                        <i class="fas fa-eye fa-lg mr-2"></i>
                                    </a>
                                    <a href="{{ route('data.layanan.edit', $layanan->id) }}">
                                        <i class="fas fa-edit fa-lg mr-2"></i>
                                    </a>
                                    <a href="" data-toggle="modal" data-target="#delete{{$layanan->id}}">
                                        <i class="fas fa-trash fa-lg mr-2"></i>
                                    </a>
                                </td>
                            </tr>
                            @empty
                            <td colspan="5">Data tidak ada</td>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@foreach ($layanans as $index=>$layanan)
<div class="modal fade" id="delete{{$layanan->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-notification"
    aria-hidden="true">
    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
        <div class="modal-content bg-gradient-danger">
            <div class="modal-header">
                <h6 class="modal-title" id="modal-title-notification">{{ $layanan->nama_layanan }}</h6>
            </div>
            <div class="modal-body">
                <div class="py-3 text-center">
                    <h4 class="heading mt-4">Apakah anda ingin menghapus data ini?</h4>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link text-white" data-dismiss="modal">No</button>
                <a href="{{ route('data.layanan.delete', $layanan->id) }}" class="btn btn-link text-white ml-auto" >Yes</a>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection