@extends('layout.admin.v_template')

@section('title', 'Detail User')
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
                        <tr>
                            <th scope="col" width="30px">Nama</th>
                            <th scope="col" width="100px">:</th>
                            <th scope="col">{{$user->nama}}</th>
                        </tr>
                        <tr>
                            <th scope="col" width="30px">Email</th>
                            <th scope="col" width="100px">:</th>
                            <th scope="col">{{$user->email}}</th>
                        </tr>
                        <tr>
                            <th scope="col" width="30px">Password</th>
                            <th scope="col" width="100px">:</th>
                            <th scope="col">{{$user->password}}</th>
                        </tr>
                        <tr>
                            <th scope="col" width="30px">Alamat</th>
                            <th scope="col" width="100px">:</th>
                            <th scope="col">{{$user->address}}</th>
                        </tr>
                        <tr>
                            <th scope="col" width="30px">Level</th>
                            <th scope="col" width="100px">:</th>
                            <th scope="col">{{ $user->is_admin == 1? 'admin': 'user'}}</th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>   
@endsection