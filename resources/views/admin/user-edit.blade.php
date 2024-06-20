@extends('admin.layouts.master')

@section('title', "Ubah {{ $user->first_name.' '.$user->last_name }}")

@section('main')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Ubah informasi pengguna</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Beranda</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.user.index') }}">Pengguna</a></li>
            <li class="breadcrumb-item active">{{ $user->first_name.' '.$user->last_name }}</li>
        </ol>
        <!-- <div class="card mb-4">
            <div class="card-body">
                Di sini Anda dapat melihat semua mobil di parkir kami.
            </div>
        </div>-->
        <div class="mb-4">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.user.update', ['id' => $user->id]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="first_name" class="col-sm-3 my-2 col-form-label">Nama Depan :</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $user->first_name }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="last_name" class="col-sm-3 my-2 col-form-label">Nama Belakang :</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $user->last_name }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-sm-3 my-2 col-form-label">Telepon :</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="phone" name="phone" value="{{ $user->phone }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date_of_birth" class="col-sm-3 my-2 col-form-label">Tanggal Lahir :</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" value="{{ $user->date_of_birth }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-3 my-2 col-form-label">Email :</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-sm-3 my-2 col-form-label">Kata Sandi :</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Biarkan kosong jika Anda tidak ingin mengubah kata sandi">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-9">
                                <button type="submit" class="btn btn-primary mr-2" disabled>Simpan</button>
                                <button type="button" class="btn btn-secondary" >Batal</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
