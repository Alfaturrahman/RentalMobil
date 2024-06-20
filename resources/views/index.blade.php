@extends('layouts.master')

@section('title', 'Beranda')

@section('main')

<!-- home -->
<div class="home">
  <div class="home__bg"></div>

  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="home__content">
          <h1 class="home__title">Sewa Mobil, <br>Terpercaya Di Batam</h1>
          <p class="home__text">Tempat terbaik untuk menyewa mobil dengan cepat dan mudah.</p>

          <form class="home__search" action="{{ route('car.index') }}" method="get">
            <div class="home__group">
              <label for="marque">Merek</label>
              <input type="text" name="brand" id="marque" placeholder="Merek apa yang Anda cari?" required>
            </div>
            
            <div class="home__group">
              <label for="model">Model</label>
              <input type="text" name="model" id="model" placeholder="Model apa yang Anda inginkan?" required>
            </div>

            <div class="home__group">
              <label for="max_daily_rate">Harga Harian Maksimum</label>
              <input type="text" name="max_daily_rate" id="max_daily_rate" placeholder="Harga dalam Rupiah" required>
            </div>

            <button type="submit"><span>Cari</span></button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end home -->

<div class="container">
  <!-- cars -->
  <section class="perkenalan">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <div class="text-content">
            <h3 style="color: #ffc107; font-size: 25px">Rizky Rental Mang</h3>
            <h2>Rental Terpercaya di kota batam</h2>
            <p>Dengan Rizky Rental Mang, setiap perjalanan menjadi lebih mudah dan menyenangkan. Kami menawarkan berbagai pilihan mobil yang siap mengantar Anda ke mana saja, kapan saja, memastikan kenyamanan dan keselamatan Anda di setiap perjalanan. Jadi, tunggu apa lagi? Nyalakan mesin, dan biarkan petualangan Anda dimulai bersama kami!</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="image-content">
            <img src="{{ asset('img/rental-mobil-1.png') }}" alt="Gambar 1" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="fitur-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!-- Konten kiri -->
                <div class="konten-kiri">
                    <h3 class="highlighted-text">Mengapa Memilih Kami</h3>
                    <h2 class="main-title">Armada Mobil Yang Terawat</h2>
                    <p>Fleksibilitas, kualitas, dan kemudahan adalah prinsip-prinsip yang kami pegang teguh. Dengan Rizky Rental Mang, Anda dapat menjelajahi kota ini dengan percaya diri</p>
                    <button type="button" class="btn btn-primary" onclick="window.location='{{ route('login.show') }}'">Cari Mobil</button>
                </div>
            </div>
            <div class="col-md-6">
                <!-- Konten kanan -->
                <div class="content-right">
                    <div class="feature-card">
                        <div class="feature-content">
                            <h3 class="feature-title"><i class="fas fa-car"></i> Armada Kendaraan Berkualitas</h3>
                            <p>Kami memiliki beragam pilihan mobil dari berbagai merek dan tipe yang terawat dengan baik untuk memastikan kenyamanan dan keamanan perjalanan Anda.</p>
                        </div>
                    </div>
                    <div class="feature-card">
                        <div class="feature-content">
                            <h3 class="feature-title"><i class="fas fa-car"></i> Kemudahan Pemesanan</h3>
                            <p>Proses pemesanan yang mudah dan cepat baik secara online maupun langsung. Kami juga menyediakan layanan antar-jemput kendaraan untuk kenyamanan Anda.</p>
                        </div>
                    </div>
                    <div class="feature-card">
                        <div class="feature-content">
                            <h3 class="feature-title"><i class="fas fa-car"></i> Pelayanan Prima</h3>
                            <p>Tim kami selalu siap membantu Anda dengan pelayanan yang ramah dan profesional, mulai dari pemesanan hingga pengembalian kendaraan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

  <section class="gambar">
    <div style="container">
      <img src="{{ asset('img/banyak_mobil.png') }}" alt="Gambar 1">
    </div>
  </section>

  <section class-="keterangan">
    <div class="container" style="margin-bottom: 50px " >
      <div class="konten-keterangan" style="text-align: center" >
        <h2 style="color:#000;font-weight: bolder; font-size: 40px; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif ">Bagaimana kita menjadi <br> yang terbaik diantara yang lain?</h2>
        <p style="font-size: 20px;font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif ">Di Rizky Rental Mang, kami unggul dengan armada kendaraan berkualitas, layanan pelanggan yang ramah dan profesional, serta proses pemesanan yang mudah dan fleksibel. Harga kami kompetitif dan transparan, memastikan Anda mendapatkan nilai terbaik tanpa biaya tersembunyi. Keselamatan dan kenyamanan Anda adalah prioritas utama kami, dengan kendaraan yang selalu terawat dan dilengkapi fitur keamanan terbaru. Testimoni positif dari pelanggan menjadi bukti komitmen kami untuk memberikan pengalaman rental mobil terbaik.</p>
      </div>
    </div>
  </section>
  
  <section class="card-kelebihan">
    <div class="container">
      <div class="row" >
        <div class="card">
          <i class="fas fa-car"></i>
          <h2>Penawaran Terbaik</h2>
          <p>Kami memberikan tarif rental mobil yang kompetitif dengan pelayanan unggulan. Armada kami terdiri dari mobil-mobil yang selalu dirawat secara berkala dan diasuransikan, memastikan kondisi selalu prima untuk kenyamanan perjalanan Anda.</p>
        </div>
        <div class="card">
          <i class="fas fa-car"></i>
          <h2>Keluaran Terbaru</h2>
          <p>Jangan khawatir mengenai usia mobil! Armada rental kami terdiri dari mobil-mobil terbaru yang selalu dalam kondisi sangat baik, siap memberikan kenyamanan optimal selama perjalanan Anda.</p>
        </div>
        <div class="card">
          <i class="fas fa-car"></i>
          <h2>Pilihan Variatif</h2>
          <p>Kami menyediakan beragam pilihan mobil. Semua tersedia untuk berbagai keperluan Anda, baik untuk perjalanan bisnis maupun liburan keluarga.</p>
        </div>
      </div>
    </div>
  </section>
  
  <section class="card-syarat">
    <div class="container">
      <div class="column">
        <div class="column">
          <h5>Rizky Rental mang</h5>
          <h2>Tarif Rental Rizky Rental</h2>
          <h3>Mulai dari 300.000/hari. Dengan pilihan unit manual dan matic yang lengkap</h3>
        </div>
        <div class="row">
          <div class="card" >
          <h5>
            Syarat
          </h5>
          <h6>Alternatif 1 :</h6>
          <li>Jaminan motor dan STNK</li>
          <li>Untuk KTP dan SIM A itu difotokan dan dikirim melalui WA, pada saat serah terima kendaraan KTP dan SIM A tersebut dibawa untuk validasi</li>
          </div>
          <div class="card"><h5>
            Syarat
          </h5>
          <h6>Alternatif 2 :</h6>
          <li>Deposit uang minimal 2,5 Juta (akan dikembalikan saat mobil dikembalikan)</li>
          <li>Untuk KTP dan SIM A itu difotokan dan dikirim melalui WA, pada saat serah terima kendaraan KTP dan SIM A tersebut dibawa untuk validasi</li>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="row row--grid">
    <!-- title -->
    <div class="col-12">
      <div class="main__title main__title--first">
        <h2>Mobil Kami</h2>

        <a href="{{ route('car.index') }}" class="main__link">Lihat lebih banyak<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z" />
          </svg></a>
      </div>
    </div>
    <!-- end title -->
    @if (count($cars) == 0)
      <h2 style="color: gray; margin: auto">Kosong</h2>
    @endif

    @foreach ($cars as $car)
    <!-- car -->
    <div class="col-12 col-md-6 col-xl-4">
      <div class="car">
        <div class="splide splide--card car__slider">
          <div class="splide__arrows">
            <button class="splide__arrow splide__arrow--prev" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z"></path>
              </svg></button>
            <button class="splide__arrow splide__arrow--next" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z"></path>
              </svg></button>
          </div>

          <div class="splide__track">
            <ul class="splide__list">
              <li class="splide__slide">
                <img src="{{ Storage::url($car->image_url) }}" alt="">
              </li>
              @foreach ($car->secondaryImages as $image)
              <li class="splide__slide">
                <img src="{{ Storage::url($car->image_url) }}" alt="">
              </li>
              @endforeach
            </ul>
          </div>
        </div>
        <div class="car__title">
          <h3 class="car__name"><a href="car.html">{{ $car->brand.' '.$car->model }}</a></h3>
          <span class="car__year">{{ $car->make_year }}</span>
        </div>
        <ul class="car__list">
          <li>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <path d="M12.3,12.22A4.92,4.92,0,0,0,14,8.5a5,5,0,0,0-10,0,4.92,4.92,0,0,0,1.7,3.72A8,8,0,0,0,1,19.5a1,1,0,0,0,2,0,6,6,0,0,1,12,0,1,1,0,0,0,2,0A8,8,0,0,0,12.3,12.22ZM9,11.5a3,3,0,1,1,3-3A3,3,0,0,1,9,11.5Zm9.74.32A5,5,0,0,0,15,3.5a1,1,0,0,0,0,2,3,3,0,0,1,3,3,3,3,0,0,1-1.5,2.59,1,1,0,0,0-.5.84,1,1,0,0,0,.45.86l.39.26.13.07a7,7,0,0,1,4,6.38,1,1,0,0,0,2,0A9,9,0,0,0,18.74,11.82Z" />
            </svg>
            <span>{{ $car->passenger_capacity }} orang</span>
          </li>
          <li>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <path d="M20.54,6.29,19,4.75,17.59,3.34a1,1,0,0,0-1.42,1.42l1,1-.83,2.49a3,3,0,0,0,.73,3.07l2.95,3V19a1,1,0,0,1-2,0V17a3,3,0,0,0-3-3H14V5a3,3,0,0,0-3-3H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3h6a3,3,0,0,0,3-3V16h1a1,1,0,0,1,1,1v2a3,3,0,0,0,6,0V9.83A5,5,0,0,0,20.54,6.29ZM12,19a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V12h8Zm0-9H4V5A1,1,0,0,1,5,4h6a1,1,0,0,1,1,1Zm8,1.42-.46-.47a1,1,0,0,0-.71-.29h0a1,1,0,0,0-.7.3,1,1,0,0,0,0,1.41l.87.88v.71a3,3,0,0,0-.88-1.73A5,5,0,0,0,15,8.61l.51-1.54,3.1,3.1A3,3,0,0,1,20,11.38ZM8,8H6A1,1,0,0,0,6,10H8A1,1,0,0,0,8,8Zm0,4H6a1,1,0,0,0,0,2H8a1,1,0,0,0,0-2Zm4-4h2a1,1,0,0,0,0-2H12a1,1,0,0,0,0,2Zm0,4h2a1,1,0,0,0,0-2H12a1,1,0,0,0,0,2Zm8-2.29A1,1,0,1,0,19.71,13,1,1,0,0,0,20,11.71Z" />
            </svg>
            <span>{{ $car->number_of_doors }} pintu</span>
          </li>
          <li>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <path d="M12.82,8.34l.16,0A1,1,0,0,0,14,7.51a1,1,0,0,0-1.51-1.29L11.14,7.61,8.85,4.65a2,2,0,0,0-1.61-.79H4a2,2,0,0,0-2,2v8a2,2,0,0,0,2,2H6a2,2,0,0,0,2-2V10.09l2.57,3.42a1,1,0,0,0,.77.39h.06A1,1,0,0,0,12,12.93l.57-.88,1.14,1.14-2,3a1,1,0,0,0-.16.52v5a1,1,0,0,0,.78,1l.16,0a1,1,0,0,0,1-.84l.43-2.56a6,6,0,0,0,.11-1.12v-3l1.6-2.41a1,1,0,0,0-1.56-1.25ZM6,13H4V5H6ZM21.92,11l-2-6A3,3,0,0,0,17,3H15a1,1,0,0,0-1,1V13a3,3,0,0,0,3,3h1.5l.12,0a2.9,2.9,0,0,0,.88-.15A3,3,0,0,0,22,12.92,3.09,3.09,0,0,0,21.92,11ZM20,12a1,1,0,0,1-1,1H18a1,1,0,0,1-1-1V5h1a1,1,0,0,1,1,.68l2,6A1.08,1.08,0,0,1,20,12Z" />
            </svg>
            <span>{{ $car->mileage }} km</span>
          </li>
        </ul>
        <div class="car__footer">
          <span class="car__price">{{ number_format($car->daily_rate, 0, ',', '.') }}.000<sub>/ hari</sub></span>
          <button class="car__favorite" type="button">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <path d="M12,21a1,1,0,0,1-.63-.22c-.23-.18-5.76-4.48-8.35-9A5.88,5.88,0,0,1,2,8.5,6,6,0,0,1,12,4a6,6,0,0,1,10,4.5,5.88,5.88,0,0,1-.99,3.27c-2.6,4.54-8.13,8.84-8.35,9A1,1,0,0,1,12,21ZM12,6a4,4,0,0,0-4,4,3.89,3.89,0,0,0,.68,2.2c1.69,3,5.33,6.16,7.31,7.74,2-1.58,5.62-4.75,7.31-7.74A3.89,3.89,0,0,0,20,10a4,4,0,0,0-4-4A3.89,3.89,0,0,0,12,6Z" />
            </svg>
          </button>
        </div>
      </div>
    </div>
    <!-- end car -->
    @endforeach
  </section>
  
  
  <!-- end cars -->
</div>
@endsection




