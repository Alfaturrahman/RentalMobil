@extends('admin.layouts.master')

@section('title', 'Kendaraan')

@section('main')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Daftar Kendaraan</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Beranda</a></li>
            <li class="breadcrumb-item active">Kendaraan</li>
        </ol>
        <!-- <div class="card mb-4">
            <div class="card-body">
                Di sini Anda dapat melihat semua mobil di parkir kami.
            </div>
        </div>-->
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <div class="mb-4">
            <div>
                <a class="btn btn-primary m-3" href="{{ route('admin.car.create') }}" role="button">Tambahkan</a>
            </div>
            <div table-responsive>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Model</th>
                            <th>Merek</th>
                            <th>Harga per Hari</th>
                            <th>Tersedia</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cars as $car)
                        <tr>
                            <td>{{ $car->id }}</td>
                            <td>{{ $car->model}}</td>
                            <td>{{ $car->brand }}</td>
                            <td>{{ $car->daily_rate }}</td>
                            <td>{{ $car->available ? 'Tersedia' : 'Tidak Tersedia' }}</td>
                            <td>
                                <div class="dropdown open">
                                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Opsi
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{ route('admin.car.show', ['id' => $car->id]) }}">Lihat</a></li>
                                        <li><a class="dropdown-item disabled" href="{{ route('admin.car.edit', ['id' => $car->id]) }}">Ubah</a></li>
                                        <li><button type="button" class="dropdown-item" onclick="if(confirm('Apakah Anda yakin ingin menghapus mobil ini?')) { document.getElementById('delete-form').submit(); }">Hapus</button>
                                            <form id="delete-form" action="{{ route('admin.car.destroy', ['id' => $car->id]) }}" method="POST" style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $cars->links() }}
            </div>
        </div>
    </div>
</main>
@endsection
