@extends('layouts.auth.app')

@section('content')
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 w-100">
        <div class="position-relative z-index-5">
            <div class="row">
                <div class="col-xl-7 col-xxl-8">
                    <a href="index-2.html" class="text-nowrap logo-img d-block px-4 py-9 w-100">
                        <img style="height: 31px;" src="{{ asset('src/assets/logo/logo-dark.svg') }}" class="dark-logo" alt="Logo-Dark" />
                        <img style="height: 31px;" src="{{ asset('src/assets/logo/logo-light.svg') }}" class="light-logo" alt="Logo-light" />
                    </a>
                    <div class="d-none d-xl-flex align-items-center justify-content-center h-n80">
                        <img src="{{ asset('src/img/illustrations/login.svg') }}" alt="flexy-img" class="img-fluid" width="500">
                    </div>
                </div>
                <div class="col-xl-5 col-xxl-4">
                    <div class="authentication-login min-vh-100 bg-body row justify-content-center align-items-center p-4">
                        <div class="auth-max-width col-sm-8 col-md-6 col-xl-7 px-4">
                            <h2 class="mb-1 fs-7 fw-bolder">Selamat datang di Simonis</h2>
                            <p class="mb-7">Sistem Informasi Monitoring Nilai Siswa</p>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Username atau Email</label>
                                    <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" aria-describedby="emailHelp" placeholder="studentone atau student@mail.com">
                                    @error('username')
                                        <div class="fv-plugins-message-container invalid-feedback">
                                            <div data-field="username">{{ $message }}</div>
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;">
                                    @error('password')
                                        <div class="fv-plugins-message-container invalid-feedback">
                                            <div data-field="password">{{ $message }}</div>
                                        </div>
                                    @enderror
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <div class="form-check">
                                        <input class="form-check-input primary cursor-pointer" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label text-dark fs-3" for="flexCheckChecked"> Ingat perangkat ini </label>
                                    </div>
                                    <a class="text-primary fw-medium fs-3" href="authentication-forgot-password.html">Lupa Password?</a>
                                </div>
                                <button class="btn btn-primary w-100 py-8 mb-4 rounded-2">Masuk</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
