<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SentraKuliner - Login </title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/logo/logo.png') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/signericafat.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/cerebrisans.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/elegant.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/linear-icon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/easyzoom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/customCss/login.css') }}">
    
</head>

<body>
    <div class="main-wrapper">
        <div class="login-register-area pt-115 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 ms-auto me-auto">
                        <div class="login-register-wrapper">
                            <div class="login-register-logo">
                                <img src="{{ asset('assets/images/logo/logo.png') }}" alt="logo">
                            </div>
                            <div class="login-register-tab-list nav">
                                <a class="{{ $errors->hasAny(['user-email', 'user-password', 'repassword', 'fullname', 'noHp', 'namaKantor']) ? '' : 'active' }}" data-bs-toggle="tab" href="#lg1">
                                    <h4> login </h4>
                                </a>
                                <a class="{{ $errors->hasAny(['user-email', 'user-password', 'repassword', 'fullname', 'noHp', 'namaKantor']) ? 'active' : '' }}" data-bs-toggle="tab" href="#lg2">
                                    <h4> register </h4>
                                </a>
                            </div>
                            <div class="tab-content">
                                <div id="lg1" class="tab-pane {{ $errors->hasAny(['user-email', 'user-password', 'repassword', 'fullname', 'noHp', 'namaKantor']) ? '' : 'active' }}">
                                    <div class="login-form-container">
                                        <div class="login-register-form">
                                            <form action="/auth/a8Bc7xZ2Yka8Bc7xZ2Ykkbc" method="post">
                                                @csrf
                                                <div class="error-messages mb-3">
                                                    @error('login')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <input type="text" name="user-name" placeholder="Username">
                                                <input type="password" name="user-password" placeholder="Password">
                                                <div class="button-box">
                                                    <div class="login-toggle-btn">
                                                        <input type="checkbox" id="rme" name="rme" value="1">
                                                        <label>Remember me</label>
                                                        <a href="#">Forgot Password?</a>
                                                    </div>
                                                    <button type="submit">Login</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div id="lg2" class="tab-pane {{ $errors->hasAny(['user-email', 'user-password', 'repassword', 'fullname', 'noHp', 'namaKantor']) ? 'active' : '' }}">
                                    <div class="login-form-container">
                                        <div class="login-register-form">
                                            <form action="/login" method="post">
                                                @csrf
                                                <div class="form-group">
                                                    @error('user-email')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                    <input name="user-email" placeholder="Email" type="email" class="form-control @error('user-email') is-invalid @enderror" value="{{ old('user-email') }}">
                                                </div>
                                                <div class="form-group">
                                                    @error('user-password')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                    <input type="password" name="user-password" placeholder="Password" class="form-control @error('user-password') is-invalid @enderror" required value="{{ old('user-password') }}">
                                                </div>
                                                <div class="form-group">
                                                    @error('repassword')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                    <input type="password" name="repassword" placeholder="Re-password" class="form-control @error('repassword') is-invalid @enderror" required value="{{ old('repassword') }}">
                                                </div>
                                                <div class="form-group">
                                                    @error('fullname')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                    <input type="text" name="fullname" placeholder="Full Name" class="form-control @error('fullname') is-invalid @enderror" required value="{{ old('fullname') }}">
                                                </div>
                                                <div class="form-group">
                                                    @error('noHp')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                    <input type="text" name="noHp" placeholder="Nomor Handphone" class="form-control @error('noHp') is-invalid @enderror" required value="{{ old('noHp') }}">
                                                </div>
                                                <div class="form-group">
                                                    @error('namaKantor')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                    <input type="text" name="namaKantor" placeholder="Nama Kantor" class="form-control @error('namaKantor') is-invalid @enderror" required value="{{ old('namaKantor') }}">
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="lantai">Lantai</label>
                                                            <div class="custom-dropdown-wrapper">
                                                                <select id="lantai" name="lantai" class="form-control custom-dropdown @error('lantai') is-invalid @enderror" required>
                                                                    <option value="LG" {{ old('lantai') == 'LG' ? 'selected' : '' }}>LG</option>
                                                                    <option value="G" {{ old('lantai') == 'G' ? 'selected' : '' }}>G</option>
                                                                    <option value="UG" {{ old('lantai') == 'UG' ? 'selected' : '' }}>UG</option>
                                                                    <?php for ($i = 1; $i <= 12; $i++): ?>
                                                                        <option value="<?= $i ?>" {{ old('lantai') == $i ? 'selected' : '' }}>
                                                                            @if ($i == 4)
                                                                                3a
                                                                            @else
                                                                                <?= $i ?>
                                                                            @endif
                                                                        </option>
                                                                    <?php endfor; ?>
                                                                </select>
                                                                @error('lantai')
                                                                    <div class="text-danger">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                            
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="nomorKantor">Nomor Kantor</label>
                                                            <input type="text" id="nomorKantor" name="nomorKantor" placeholder="Cth. 128-8a" class="form-control @error('nomor-kantor') is-invalid @enderror" required value="{{ old('nomor-kantor') }}">
                                                            @error('nomorKantor')
                                                                <div class="text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="button-box">
                                                    <button type="submit">Register</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- All JS is here
============================================ -->

    <script src="{{ asset('assets/js/vendor/modernizr-3.11.7.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-v3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-migrate-v3.3.2.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/slick.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.syotimer.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.instagramfeed.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/wow.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery-ui-touch-punch.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/sticky-sidebar.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/easyzoom.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/scrollup.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/ajax-mail.js') }}"></script>
    <script src="{{ asset('assets/js/customJs/login.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>