@extends('layouts.master')

@section('title', 'Riwayat')

@section('main')

<div class="container">
  <div class="row row--grid">
    <!-- breadcrumb -->
    <div class="col-12">
      <ul class="breadcrumb">
        <li class="breadcrumb__item"><a href="{{ route('home.index') }}">Beranda</a></li>
        <li class="breadcrumb__item breadcrumb__item--active">Riwayat</li>
      </ul>
    </div>
    <!-- end breadcrumb -->

    <!-- title -->
    <div class="col-12">
      <div class="main__title main__title--page">
        <h1>Riwayat</h1>
      </div>
    </div>
    <!-- end title -->
  </div>

  <div class="row row--grid">
    <div class="col-12">
      <!-- content tabs -->
      <div class="tab-content">
        <div class="tab-pane fade show active" id="tab-1" role="tabpanel">
          <div class="row row--grid">
            <div class="col-12">
              <!-- cart -->
              <div class="cart">
                <div class="cart__table-wrap">
                  <div class="cart__table-scroll">
                    <table class="cart__table">
                      <thead>
                        <tr>
                          <th>Mobil</th>
                          <th></th>
                          <th>Tanggal Mulai</th>
                          <th>Tanggal Selesai</th>
                          <th>Status Pembayaran</th>
                          <th>Deskripsi</th>
                          <th>Metode Pembayaran</th>
                          <th>Total</th>
                          <th></th>
                        </tr>
                      </thead>

                      <tbody>
                        @foreach ($rents as $rent)
                        <tr>
                          <td>
                            <div class="cart__img">
                              <img src="{{ Storage::url($rent->image_url) }}" alt="">
                            </div>
                          </td>
                          <td><a href="{{ route('car.show', ['id' => $rent->id]) }}">{{ $rent->brand.' '.$rent->model }}</a></td>
                          <td>{{ $rent->start_date}}</td>
                          <td>{{ $rent->end_date}}</td>
                          <td>{{ $rent->payement_status}}</td>
                          <td>{{ $rent->description }}</td>
                          <td>{{ $rent->payement_method}}</td>
                          <td>{{ intval($rent->total_cost) }} Rupiah</td>
                          <td>
                            <a href="https://api.whatsapp.com/send?phone=+62 821-7083-4897&amp;text=Halo%2C%20saya%20tertarik%20untuk%20sewa%20mobil%20yang%20tersedia.%20Berikut%20detail%20pemesanan%3A%0A%0ANama%20Mobil%3A%20{{ $rent->brand }}%20{{ $rent->model }}%0ATanggal%20Mulai%3A%20{{ $rent->start_date }}%0ATanggal%20Selesai%3A%20{{ $rent->end_date }}%0ATotal%20Biaya%3A%20{{ intval($rent->total_cost) }}%20Rupiah%0A%0ASilakan%20konfirmasi%20pemesanan%20ini.%20Terima%20kasih." class="btn btn-primary">WhatsApp</a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- end cart -->
            </div>
          </div>

          
        </div>
      </div>
      <!-- end content tabs -->
    </div>
  </div>
</div>

@endsection
