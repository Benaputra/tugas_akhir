<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.meta')
    <link rel="icon" href="../assets/images/default.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/default.png" type="image/x-icon">

    <title>@yield('title-browser', 'Tugas Akhir')</title>
    @include('layouts.css')
</head>

<body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
        <div class="theme-loader">
            <div class="loader-p"></div>
        </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <section>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <div class="container-fluid p-0">
            <div class="row m-0">
                <div class="col-12 p-0">
                    <div class="login-card">
                        <form class="theme-form login-form" method="POST" action="{{ route('register') }}">
                            @csrf
                            <h4>Create your account</h4>
                            <h6>Enter your personal details to create account</h6>
                            <div class="form-group">
                                <label>Nama</label>
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-text"><i
                                                class="icon-user"></i></span>
                                        <input class="form-control" type="text" required=""
                                            placeholder="Fist Name" name="name">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Alamat Email</label>
                                <div class="input-group"><span class="input-group-text"><i
                                            class="icon-email"></i></span>
                                    <input class="form-control" type="email" required=""
                                        placeholder="Test@gmail.com" name="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
                                    <input class="form-control" type="password" name="password" required=""
                                        placeholder="*********">
                                    <div class="show-hide"><span class="show"> </span></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Konfirmasi Password</label>
                                <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
                                    <input class="form-control" type="password" name="password_confirmation"
                                        required="" placeholder="*********">
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-block" style="width: 100%" type="submit">Buat
                                    Akun</button>
                            </div>
                        </form>
                        <p>Sudah punya akun ?<a class="ms-2" href="{{ route('login') }}">Masuk</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page-wrapper end-->
    @include('layouts.js')

</html>
