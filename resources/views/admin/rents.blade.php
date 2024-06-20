@extends('admin.layouts.master')

@section('title', 'Sewa')

@section('main')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Daftar Sewa</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Beranda</a></li>
            <li class="breadcrumb-item active">Sewa</li>
        </ol>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <div class="mb-4">
            <div>
                <a class="btn btn-primary m-3 disabled" href="{{ route('admin.rent.index') }}" role="button">Tambahkan</a>
            </div>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Mulai</th>
                            <th>Selesai</th>
                            <th>Total Biaya</th>
                            <th>Status Pembayaran</th>
                            <th>Metode Pembayaran</th>
                            <th>Deskrpisi</th>
                            <th>Opsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rents as $rent)
                        <tr>
                            <td>{{ $rent->id }}</td>
                            <td>{{ $rent->start_date }}</td>
                            <td>{{ $rent->end_date }}</td>
                            <td>{{ $rent->total_cost }} Rupiah</td>
                            <td>{{ $rent->payement_status }}</td>
                            <td>{{ $rent->payement_method }}</td>
                            <td>{{ $rent->description }}</td>
                            <td>
                                <div class="dropdown open">
                                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Opsi
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{ route('admin.rent.show', ['id' => $rent->id]) }}">Lihat</a></li>
                                        <li><a class="dropdown-item" href="{{ route('admin.rent.edit', ['id' => $rent->id]) }}">Ubah</a></li>
                                        <li>
                                            <button type="button" class="dropdown-item" onclick="event.preventDefault(); if(confirm('Apakah Anda yakin ingin menghapus sewa ini?')) { document.getElementById('delete-form-{{ $rent->id }}').submit(); }">Hapus</button>
                                            <form id="delete-form-{{ $rent->id }}" action="{{ route('admin.rent.destroy', ['id' => $rent->id]) }}" method="POST" style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm" onclick="toggleForm({{ $rent->id }})">Tambah Deskripsi</button>
                                <form id="description-form-{{ $rent->id }}" action="{{ route('admin.rent.update-description', ['id' => $rent->id]) }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('PATCH')
                                    <textarea id="description-textarea-{{ $rent->id }}" name="description" class="form-control" rows="3"></textarea>
                                </form>
                            </td>
                            
                            <td>
                                <form id="accept-form-{{ $rent->id }}" action="{{ route('admin.rent.update-status', ['id' => $rent->id, 'status' => 'Berhasil']) }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('PATCH')
                                    <input type="hidden" name="status" value="Berhasil">
                                    <input type="hidden" id="description-accept-{{ $rent->id }}" name="description" value="{{ $rent->description }}">
                                </form>
                                <form id="reject-form-{{ $rent->id }}" action="{{ route('admin.rent.update-status', ['id' => $rent->id, 'status' => 'Gagal']) }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('PATCH')
                                    <input type="hidden" name="status" value="Gagal">
                                    <input type="hidden" id="description-reject-{{ $rent->id }}" name="description" value="{{ $rent->description }}">
                                </form>
                                <button type="button" class="btn btn-success btn-sm" onclick="updateDescription({{ $rent->id }}, 'Berhasil')">Terima</button>
                                <button type="button" class="btn btn-danger btn-sm" onclick="updateDescription({{ $rent->id }}, 'Gagal')">Tolak</button>
                            </td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $rents->links() }}
            </div>
        </div>
    </div>
</main>
@endsection

<script>
    function updateDescription(rentId, status) {
        var textarea = document.getElementById('description-textarea-' + rentId);
        var formAccept = document.getElementById('accept-form-' + rentId);
        var formReject = document.getElementById('reject-form-' + rentId);
        var descriptionAccept = document.getElementById('description-accept-' + rentId);
        var descriptionReject = document.getElementById('description-reject-' + rentId);

        if (status === 'Berhasil') {
            descriptionAccept.value = textarea.value;
            formAccept.submit();
        } else if (status === 'Gagal') {
            descriptionReject.value = textarea.value;
            formReject.submit();
        }
    }

    function toggleForm(rentId) {
        var form = document.getElementById('description-form-' + rentId);
        if (form.style.display === 'none') {
            form.style.display = 'block';
        } else {
            form.style.display = 'none';
        }
    }

    function hideForm(rentId) {
        var form = document.getElementById('description-form-' + rentId);
        form.style.display = 'none';
    }
</script>