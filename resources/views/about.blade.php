@extends('layouts.master')

@section('title', 'tentang')

@section('main')
<div class="container">
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
</div>
@endsection