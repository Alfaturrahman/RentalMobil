@extends('layouts.master')

@section('title', 'Kontak')

@section('main')

<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Hubungi Kami</h2>
                <!-- Form kontak bisa ditambahkan di sini -->
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Pesan</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                </form>
            </div>
            <div class="col-md-6">
                <div class="contact-info">
                    <h4>Terhubung Dengan Kami</h4>
                    <h1>Kami Siap Membantu Anda</h1>
                    <p>Kami siap membantu Anda dalam setiap kebutuhan perjalanan Anda. Jangan ragu untuk menghubungi kami, dan kami akan dengan senang hati membantu Anda menjadikan perjalanan Anda di Kota Batam menjadi pengalaman yang tak terlupakan.</p>
                    <p>Batam,Kota Batam . Batam Indonesia</p>
                    <p>+62 8782 255 3252 </p>
                    <p>087822553252</p>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection