@extends('admin.layouts.master')

@section('title', 'Beranda')

@section('main')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Beranda</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Beranda</li>
        </ol>
        <div class="row">
            <div class="col-xl-4 col-md-6">
                <div class="card bg-light text-white mb-4">
                    <div class="card-body text-dark">Jumlah Mobil</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <p class="text-dark fs-4" href="#">{{ $carCount }}</p>
                        <div class="small"><i class="fas fa-car"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card bg-light text-white mb-4">
                    <div class="card-body text-dark">Jumlah Pengguna</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <p class="text-dark fs-4" href="#">{{ $userCount }}</p>
                        <div class="small"><i class="fas fa-users"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card bg-light text-white mb-4">
                    <div class="card-body text-dark">Jumlah Penyewaan yang Sedang Berlangsung</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <p class="text-dark fs-4" href="#">{{ $ongoingRentCount }}</p>
                        <div class="small"><i class="fas fa-hourglass-half"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
