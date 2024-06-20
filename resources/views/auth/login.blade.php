@extends('layouts.base')

@section('title', 'Masuk')

@section('body')
<!-- konten utama -->
<main class="main main--sign" data-bg="img/bg/bg.png">
    <!-- formulir login -->
    <div class="sign">
        <div class="sign__content">
            <form action="{{ route('login.perform') }}" method="POST" class="sign__form">
                @csrf
                <a href="{{ route('home.index') }}" class="sign__logo">
                    <img src="{{ asset('img/rentallogo.png') }}" alt="" style="height: auto; width:150px">
                </a>

                @if ($errors->has('email'))
                    <span class="text-danger text-center">{{ $errors->first('email') }}</span>
                @endif
                <div class="sign__group">
                    <input type="email" name="email" class="sign__input" placeholder="Email">
                </div>

                @if (isset ($errors) && count($errors) > 0 && !$errors->has('email'))
                    <span class="text-danger text-center">{{ "Kata sandi tidak valid" }}</span>
                @endif
                <div class="sign__group">
                    <input type="password" name="password" class="sign__input" placeholder="Kata Sandi">
                </div>


                <button class="sign__btn" type="submit"><span>Masuk</span></button>

                <span class="sign__text">Belum punya akun? <a href="{{ route('register.show') }}">Daftar!</a></span>
            </form>
        </div>
    </div>
    <!-- end formulir login -->
</main>
<!-- end konten utama -->
@endsection
