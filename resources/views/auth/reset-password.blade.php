<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Reset Password</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/fontawesome/css/all.min.css') }}">

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                @include('sweetalert::alert')
                <div class="row">
                    <div
                        class="col-12 col-sm-10 offset-sm-2 col-md-8 offset-md-3 col-lg-6 offset-lg-3 col-xl-5 offset-xl-4">
                        <div class="login-brand">
                            <img src="{{ asset('assets/img/logo.png') }}" alt="logo" width="100"
                                class="shadow-light rounded-circle">
                        </div>

                        <div class="card card-primary mx-auto">
                            <div class="card-header d-flex flex-column align-items-center">
                                <h3 class="font-weight-bold text-dark text-center">Atur Kata Sandi Baru.</h3>
                                <p class="text-muted text-center">Pastikan kata sandi baru Anda kuat dan mudah diingat.
                                </p>
                            </div>

                            <div class="card-body">
                                <form method="POST" action="{{ route('reset-passwordact', ['no_telfon' => $no_telfon]) }}"
                                    class="needs-validation">
                                    @csrf
                                    <div class="form-group">
                                        <label for="password">Password Baru</label>
                                        <input id="password" type="password" class="form-control pwstrength"
                                            data-indicator="pwindicator" name="password" tabindex="2" required>
                                        <div id="pwindicator" class="pwindicator">
                                            <div class="bar"></div>
                                            <div class="label"></div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password-confirm">Konfirmasi Password</label>
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" tabindex="2" required>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                            Reset Password
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('assets/modules/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/modules/popper.js') }}"></script>
    <script src="{{ asset('assets/modules/tooltip.js') }}"></script>
    <script src="{{ asset('assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('assets/modules/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/stisla.js') }}"></script>

    <!-- JS Libraies -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>
