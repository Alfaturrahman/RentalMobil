@extends('layouts.base')

@section('title', 'Pendaftaran')

@section('body')
<!-- konten utama -->
<main class="main main--sign" data-bg="img/bg/bg.png">
    <!-- formulir pendaftaran -->
    <div class="sign">
        <div class="sign__content">
            <form action="{{ route('register.perform') }}" method="POST" class="sign__form">
                @csrf
                <a href="{{ route('home.index') }}" class="sign__logo">
                    <img src="{{ asset('img/rentallogo.png') }}" alt="" style="height: auto; width:150px">  
                </a>

                @if ($errors->has('first_name'))
                    <span class="text-danger text-center">{{ $errors->first('first_name') }}</span>
                @endif
                <div class="sign__group">
                    <input type="text" name="first_name" class="sign__input" placeholder="Nama depan">
                </div>
    
                @if ($errors->has('last_name'))
                    <span class="text-danger text-center">{{ $errors->first('last_name') }}</span>
                @endif
                <div class="sign__group">
                    <input type="text" name="last_name" class="sign__input" placeholder="Nama belakang">
                </div>
                
                @if ($errors->has('email'))
                    <span class="text-danger text-center">{{ $errors->first('email') }}</span>
                @endif
                <div class="sign__group">
                    <input type="email" name="email" class="sign__input" placeholder="Email">
                </div>

                @if ($errors->has('phone'))
                    <span class="text-danger text-center">{{ $errors->first('phone') }}</span>
                @endif
                <div class="sign__group">
                    <input type="tel" name="phone" class="sign__input" placeholder="Nomor Telepon">
                </div>

                @if ($errors->has('date_of_birth'))
                    <span class="text-danger text-center">{{ $errors->first('date_of_birth') }}</span>
                @endif
                <div class="sign__group">
                    <input type="date" name="date_of_birth" class="sign__input" placeholder="Tanggal lahir">
                </div>

                @if ($errors->has('password'))
                    <span class="text-danger text-center">{{ $errors->first('password') }}</span>
                @endif
                <div class="sign__group">
                    <input type="password" name="password" class="sign__input" placeholder="Kata Sandi">
                </div>


                <button class="sign__btn" type="submit"><span>Daftar</span></button>

                <span class="sign__text">Sudah punya akun? <a href="{{ route('login.show') }}">Masuk!</a></span>
            </form>
        </div>
    </div>
    <!-- end formulir pendaftaran -->
</main>
<!-- end konten utama -->
@endsection
