<!DOCTYPE HTML>
<html>
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>রেজিস্ট্রেশন</title>
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
<div class="container" style="margin-top:80px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card auth">
                <div class="card-header" style='font-size:35px;'><i class="fa-solid fa-user-plus"></i>&nbsp&nbspরেজিস্ট্রেশন</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end" style='font-size:20px;'>নাম</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end" style='font-size:20px;'>ই-মেইল</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end" style='font-size:20px;'>পাসওয়ার্ড নিশ্চিত করুন</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary auth-button" style='font-size:20px;'><i class="fa-solid fa-user-plus"></i>&nbsp
                                    রেজিস্ট্রেশন করুন
                                </button> <hr/><p style="color:red;">* পাসওয়ার্ড কমপক্ষে ৮ অক্ষর বিশিষ্ট হতে হবে।</p><p style="color:red;">* পাসওয়ার্ড অবশ্যই বর্ণ (A-Z)(a-z), সংখ্যা (0-9) ও বিশেষ ক্যারেক্টার (!,*,#,$,%,^) বিশিষ্ট হতে হবে।</p>
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
