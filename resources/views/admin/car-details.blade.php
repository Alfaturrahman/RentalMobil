@extends('admin.layouts.master')

@section('title', "Lihat {{ $car->model }}")

@section('main')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Detail tentang mobil</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Beranda</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.car.index') }}">Mobil</a></li>
            <li class="breadcrumb-item active">{{ $car->model.' '.$car->brand }}</li>
        </ol>
        <!-- <div class="card mb-4">
            <div class="card-body">
                Di sini Anda dapat melihat semua mobil di parkir kami.
            </div>
        </div>-->
        <div class="mb-4">
            <div class="card">
                <div class="card-header">
                    <h4>{{ $car->brand }} {{ $car->model }}</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ Storage::url($car->image_url) }}" class="img-fluid" alt="Gambar Utama Mobil">
                        </div>
                        <div class="col-md-6">
                            <ul class="list-group">
                                <li class="list-group-item"><strong>Tahun Pembuatan:</strong> {{ $car->make_year }}</li>
                                <li class="list-group-item"><strong>Jumlah Kursi:</strong> {{ $car->passenger_capacity }}</li>
                                <li class="list-group-item"><strong>Kilometer per Liter:</strong> {{ $car->kilometers_per_liter }}</li>
                                <li class="list-group-item"><strong>Jenis Bahan Bakar:</strong> {{ $car->fuel_type }}</li>
                                <li class="list-group-item"><strong>Jenis Transmisi:</strong> {{ $car->transmission_type }}</li>
                                <li class="list-group-item"><strong>Harga Sewa per Hari:</strong> {{ $car->daily_rate }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <h5>Gambar-gambar Sekunder:</h5>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($car->secondaryImages as $image)
                        <div class="col-md-4 mt-3">
                            <img src="{{ Storage::url($image->url) }}" class="img-fluid" alt="Gambar Sekunder Mobil">
                        </div>
                        @endforeach
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <div class="text-center">
                                <a type="button" class="btn btn-primary mr-2 disabled" href="{{ route('admin.car.edit', ['id' => $car->id]) }}">Edit</a>
                                <button type="button" class="btn btn-danger" onclick="if(confirm('Apakah Anda yakin ingin menghapus mobil ini?')) { document.getElementById('delete-form').submit(); }">Hapus</button>
                                <form id="delete-form" action="{{ route('admin.car.destroy', ['id' => $car->id]) }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>
@endsection
