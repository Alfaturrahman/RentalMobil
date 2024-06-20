@extends('layouts.base')

@section('title', 'Masuk')

@section('body')
<!-- konten utama -->
<main class="main main--sign" data-bg="img/bg/bg.png">
    <!-- formulir pendaftaran -->
    <div class="sign">
        <div class="sign__content">
            <form action="{{ route('admin.login.perform') }}" method="POST" class="sign__form">
                @csrf
                <h2>Administrasi</h2>
                <a href="{{ route('home.index') }}" class="sign__logo">
                    <img src="{{ asset('img/rentallogo.png') }}" alt="" style="height: auto; width:150px">
                </a>

                @if ($errors->has('username'))
                    <span class="text-danger text-center">{{ $errors->first('username') }}</span>
                @endif
                <div class="sign__group">
                    <input type="text" name="username" class="sign__input" placeholder="Nama Administrator">
                </div>

                @if (isset ($errors) && count($errors) > 0 && !$errors->has('username'))
                    <span class="text-danger text-center">{{ "Kata sandi salah" }}</span>
                @endif
                <div class="sign__group">
                    <input type="password" name="password" class="sign__input" placeholder="Kata Sandi">
                </div>


                <button class="sign__btn" type="submit"><span>Masuk</span></button>

                <span class="sign__text">Belum punya akun? <a href="{{ route('admin.register.show') }}">Daftar!</a></span>
            </form>
        </div>
    </div>
    <!-- end formulir pendaftaran -->
</main>
<!-- end konten utama -->
@endsection
