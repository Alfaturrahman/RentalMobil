@extends('layouts.master')

@section('title', 'Profil')

@section('main')

<div class="container">
  <div class="row row--grid">
    <!-- breadcrumb -->
    <div class="col-12">
      <ul class="breadcrumb">
        <li class="breadcrumb__item"><a href="{{ route('home.index') }}">Beranda</a></li>
        <li class="breadcrumb__item breadcrumb__item--active">Akun Saya</li>
      </ul>
    </div>
    <!-- end breadcrumb -->

    <!-- title -->
    <div class="col-12">
      <div class="main__title main__title--page">
        <h1>Akun Saya</h1>
      </div>
    </div>
    <!-- end title -->
  </div>

  <div class="row row--grid">
    <div class="col-12">
      <!-- konten tab -->
      <div class="tab-content">
        <div class="tab-pane fade  show active" id="tab-3" role="tabpanel">
          <div class="row row--grid">
            <!-- form detail -->
            <div class="col-12 col-lg-6">
              <form action="#" class="sign__form sign__form--profile">
                <div class="row">
                  <div class="col-12">
                    <h4 class="sign__title">Detail Profil</h4>
                  </div>

                  <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                    <div class="sign__group">
                      <label class="sign__label" for="firstname">Nama</label>
                      <input id="firstname" type="text" value="{{ auth()->user()->first_name }}" name="first_name" class="sign__input" placeholder="John">
                    </div>
                  </div>

                  <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                    <div class="sign__group">
                      <label class="sign__label" for="lastname">Nama Belakang</label>
                      <input id="lastname" type="text" value="{{ auth()->user()->last_name }}" name="last_name" class="sign__input" placeholder="Doe">
                    </div>
                  </div>

                  <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                    <div class="sign__group">
                      <label class="sign__label" for="email">Email</label>
                      <input id="email" type="email" value="{{ auth()->user()->email }}" name="email" class="sign__input" placeholder="email@email.com">
                    </div>
                  </div>

                  <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                    <div class="sign__group">
                      <label class="sign__label" for="dateOfBirth">Tanggal Lahir</label>
                      <input id="dateOfBirth" type="date" value="{{ auth()->user()->date_of_birth }}" name="date_of_birth" class="sign__input" placeholder="10/10/2010">
                    </div>
                  </div>

                  <div class="col-12">
                    <button class="sign__btn btn-muted" disabled="disabled" type="submit"><span>Simpan</span></button>
                  </div>
                </div>
              </form>
            </div>
            <!-- end form detail -->

            <!-- form kata sandi -->
            <div class="col-12 col-lg-6">
              <form action="#" class="sign__form sign__form--profile">
                <div class="row">
                  <div class="col-12">
                    <h4 class="sign__title">Ubah Kata Sandi</h4>
                  </div>

                  <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                    <div class="sign__group">
                      <label class="sign__label" for="oldpass">Kata Sandi Lama</label>
                      <input id="oldpass" type="password" name="oldpass" class="sign__input">
                    </div>
                  </div>

                  <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                    <div class="sign__group">
                      <label class="sign__label" for="newpass">Kata Sandi Baru</label>
                      <input id="newpass" type="password" name="newpass" class="sign__input">
                    </div>
                  </div>

                  <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                    <div class="sign__group">
                      <label class="sign__label" for="confirmpass">Konfirmasi Kata Sandi Baru</label>
                      <input id="confirmpass" type="password" name="confirmpass" class="sign__input">
                    </div>
                  </div>

                  <div class="col-12">
                    <button class="sign__btn btn-muted" disabled="disabled" type="submit"><span>Ubah</span></button>
                  </div>
                </div>
              </form>
            </div>
            <!-- end form kata sandi -->
          </div>
        </div>
      </div>
      <!-- end konten tab -->
    </div>
  </div>
</div>

@endsection
