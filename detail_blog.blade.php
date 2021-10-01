@extends('layout.admin.v_template')

@section('title', 'Detail Blog')
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
        <div class="col-md-12">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="mb-0">Tables</h3>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        @foreach ($blog as $items)
                            <tr>
                                <td scope="col">Nama Blog</td>
                                <td scope="col">:</td>
                                <td scope="col">
                                    {{ $items->nama_parfum }} 
                                </td>
                            </tr>
                            <tr >
                                <td scope="col">Sinopsis</td>
                                <td scope="col">:</td>
                                <td class="text-warp">{{ $items->body }}</td>
                            </tr>
                            <tr>
                                <td scope="col">Autdor</td>
                                <td scope="col">:</td>
                                <td scope="col">{{ $items->first()->user->nama }}</td>
                            </tr>
                            <tr>
                                <td scope="col">Foto Blog</td>
                                <td scope="col">:</td>
                                <td scope="col"><img src="{{ url('assets/img/foto_blog',$items->foto_blog) }}"width="100px"></td>
                            </tr>
                            <tr>
                                <td scope="col">Created</td>
                                <td scope="col">:</td>
                                <td scope="col">{{ $items->created_at }}</td>
                            </tr>
                            <tr>
                                <td scope="col">Updated</td>
                                <td scope="col">:</td>
                                <td scope="col">{{ $items->updated_at }}</td>
                            </tr>
                        @endforeach        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>   
@endsection
