<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/mdb.min.css')}}">
    <title>ODLS | Signup</title>
</head>
<body>
<section class="background-radial-gradient overflow-hidden">
    <style>
        .background-radial-gradient {
            background-color: hsl(218, 41%, 15%);
            background-image: radial-gradient(650px circle at 0% 0%,
            hsl(218, 41%, 35%) 15%,
            hsl(218, 41%, 30%) 35%,
            hsl(218, 41%, 20%) 75%,
            hsl(218, 41%, 19%) 80%,
            transparent 100%),
            radial-gradient(1250px circle at 100% 100%,
                hsl(218, 41%, 45%) 15%,
                hsl(218, 41%, 30%) 35%,
                hsl(218, 41%, 20%) 75%,
                hsl(218, 41%, 19%) 80%,
                transparent 100%);
        }

        #radius-shape-1 {
            height: 220px;
            width: 220px;
            top: -60px;
            left: -130px;
            background: radial-gradient(#44006b, #ad1fff);
            overflow: hidden;
        }

        #radius-shape-2 {
            border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
            bottom: -60px;
            right: -110px;
            width: 300px;
            height: 300px;
            background: radial-gradient(#44006b, #ad1fff);
            overflow: hidden;
        }

        .bg-glass {
            background-color: hsla(0, 0%, 100%, 0.9) !important;
            backdrop-filter: saturate(200%) blur(25px);
        }
    </style>

    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
        <div class="row gx-lg-5 align-items-center mb-5">
            <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                    Book Appointments & <br/>
                    <span style="color: hsl(218, 81%, 75%)">Get Reports</span>
                </h1>
                <h3 class="text-light">On door step.Every little feature is built to automate the system</h3>
            </div>

            <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                <div class="card bg-glass">
                    <div class="card-body px-4 py-5 px-md-5">
                        <form>
                            @csrf
                            <div class="form-outline mb-4 justify-content-center d-flex">
                                <input type="email" id="email" class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" required autocomplete="email"/>
                                <label class="form-label" for="form3Example3">Name</label>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-outline mb-4 justify-content-center d-flex">
                                <input type="email" id="email" class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" required autocomplete="email"/>
                                <label class="form-label" for="form3Example3">Email address</label>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-outline mb-4">
                                <input type="password" id="form3Example4" class="form-control"
                                       @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password" />
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label class="form-label" for="form3Example4">Password</label>
                            </div>
                            <div class="form-outline mb-4 justify-content-center d-flex">
                                <input type="email" id="email" class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" required autocomplete="email"/>
                                <label class="form-label" for="form3Example3">Phone Number</label>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="form-check d-flex justify-content-center mb-4">
                                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33"
                                       {{ old('remember') ? 'checked' : '' }} checked/>
                                <label class="form-check-label" for="form2Example33">
                                    Remember me
                                </label>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block mb-4">
                                Sign Up
                            </button>
                            {{--                            @if (Route::has('password.request'))--}}
                            {{--                                <a class="btn btn-link" href="{{ route('password.request') }}">--}}
                            {{--                                    {{ __('Forgot Your Password?') }}--}}
                            {{--                                </a>--}}
                            {{--                            @endif--}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
<script src="{{ asset('js/mdb.min.js') }}"></script>
</html>
