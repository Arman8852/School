<!DOCTYPE HTML>
<html>
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>লগইন</title>
      <link rel="shortcut icon" href="favicon.ico">
      <!-- Bootstrap  -->
      <link rel="preload" href="/bootstrap/css/bootstrap.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
      <noscript><link rel="stylesheet" href="styles.css"></noscript>
      <!-- Style  -->
      <link rel="preload" href="/css/auth.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
      <noscript><link rel="stylesheet" href="styles.css"></noscript>
      <!-- Fontawesome  -->
      <link rel="preload" href="/fontawesome/css/all.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
      <noscript><link rel="stylesheet" href="styles.css"></noscript>
   </head>
   <body>
<div class="container " style="margin-top:150px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card auth">
                <div class="card-header" style='font-size:35px;'><i class="fa-solid fa-right-to-bracket"></i>&nbsp&nbspলগইন</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end label" style='font-size:20px;'>ই-মেইল</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end" style='font-size:20px;'>পাসওয়ার্ড</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!--<div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                       রিমেম্বার মি
                                    </label>
                                </div>
                            </div>
                        </div>-->

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary auth-button" style='font-size:20px; border: 1px solid black;'><i class="fa-solid fa-right-to-bracket"></i>&nbsp
                                    লগইন করুন
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
      <script src="/js/jquery.min.js"></script>
      <script src="/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/popper.min.js"></script>
   </body>
</html>

