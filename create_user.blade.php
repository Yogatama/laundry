@extends('layout.admin.v_template')

@section('title', 'Create User')
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
                        <h3 class="mb-0">Form User </h3>
                    </div>
                    <div class="col-4">
                        <a href="{{ route('user.index') }}" class="d-flex justify-content-end mb-0"> back </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('user.store') }}" method="post" >
                    @csrf
                    <h6 class="heading-small text-muted mb-4">User Information</h6>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label">Nama</label>
                                    <input id="nama" class="form-control" name="nama" placeholder="Nama" type="text" value="{{ old('nama') }}">
                                    <div class="text-danger">
                                        @error('nama')
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
                                    <label class="form-control-label">Email</label>
                                    <input id="email" class="form-control" name="email" placeholder="Email" type="email" value="{{ old('email') }}">
                                    <div class="text-danger">
                                        @error('email')
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
                                    <label class="form-control-label">Password</label>
                                    <input id="password" class="form-control" name="password" placeholder="Password" type="password" value="{{ old('password') }}">
                                    <div class="text-danger">
                                        @error('password')
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
                                    <label class="form-control-label">Alamat</label>
                                    <input id="address" class="form-control" name="address" placeholder="Alamat" type="text" value="{{ old('address') }}">
                                    <div class="text-danger">
                                        @error('address')
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
                                    <label class="form-control-label">Level</label>
                                    <select id='is_admin' name="is_admin" class="form-control">
                                        <option> Pilih Level </option>
                                        <option value="0">User</option>
                                        <option value="1">Administrator</option>
                                    </select>
                                    <div class="text-danger">
                                        @error('is_admin')
                                                {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-sm mt-5" type="submit"> Simpan </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

