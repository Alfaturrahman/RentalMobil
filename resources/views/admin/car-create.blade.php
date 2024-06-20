@extends('admin.layouts.master')

@section('title', "Tambahkan Mobil")

@section('main')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tambahkan Mobil</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Beranda</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.car.index') }}">Mobil</a></li>
            <li class="breadcrumb-item active">Baru</li>
        </ol>
        <!-- <div class="card mb-4">
            <div class="card-body">
                Ici vous pouvez voir toute les voitures de notre parking.
            </div>
        </div>-->
        <div class="mb-4">
            @if ($errors->any())
            @foreach ($errors->all() as $error)
            <div class="alert alert-danger d-flex align-items-center" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                </svg>
                <div>
                    {{ $error }}
                </div>
            </div>
            @endforeach
            @endif
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.car.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="model" class="col-sm-3 my-2 col-form-label">Model :</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="model" name="model" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="brand" class="col-sm-3 my-2 col-form-label">Merek :</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="brand" name="brand" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="year" class="col-sm-3 my-2 col-form-label">Tahun Pembuatan:</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="year" name="make_year" min="1900" max="{{ date('Y') }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="seats" class="col-sm-3 my-2 col-form-label">Jumlah Kursi :</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="seats" name="passenger_capacity" min="1" max="50" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="km_per_litre" class="col-sm-3 my-2 col-form-label">Kilometer per liter :</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="km_per_litre" name="kilometers_per_liter" step="0.01" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fuel_type" class="col-sm-3 my-2 col-form-label">Jenis Bahan Bakar :</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="fuel_type" name="fuel_type" required>
                                    <option value="diesel">Diesel</option>
                                    <option value="hybride">Hybrid</option>
                                    <option value="essence">Bensin</option>
                                    <option value="électrique">Listrik</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="transmission_type" class="col-sm-3 my-2 col-form-label">Tipe transmisi :</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="transmission_type" name="transmission_type" required>
                                    <option value="Automatique">Automatis</option>
                                    <option value="Manuel">Manual</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="rental_price" class="col-sm-3 my-2 col-form-label">Harga Rental per hari :</label>

                            <div class="col-sm-9">
                                <input type="number" suff class="form-control" id="rental_price" name="daily_rate" step="0.01" required> Rupiah
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="main_image" class="col-sm-3 my-2 col-form-label">Gambar Pertama :</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control-file" id="main_image" name="main_image" accept="image/*" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="secondary_images" class="col-sm-3 my-2 col-form-label">Gambar Kedua (3 max) :</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control-file" id="secondary_images" name="secondary_images[]" accept="image/*" required multiple>
                            </div>
                        </div>
                        <div class="form-group row my-4">
                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection