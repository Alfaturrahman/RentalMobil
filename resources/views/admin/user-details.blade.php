@extends('admin.layouts.master')

@section('title', "Lihat {{ $user->first_name.' '.$user->last_name }}")

@section('main')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Detail pengguna</h1>
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
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Nama Depan :</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $user->first_name }}
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Nama Belakang :</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $user->last_name }}
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Telepon :</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $user->phone }}
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Tanggal Lahir :</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $user->date_of_birth }}
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Email :</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $user->email }}
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Kata Sandi :</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $user->password }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-9 text-secondary">
                            <a type="button" class="btn btn-primary mr-2" href="{{ route('admin.user.edit', ['id' => $user->id]) }}">Ubah</a>
                            <button type="button" class="btn btn-danger" onclick="if(confirm('Apakah Anda yakin ingin menghapus pengguna ini?')) { document.getElementById('delete-form').submit(); }">Hapus</button>
                            <form id="delete-form" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
