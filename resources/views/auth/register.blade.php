<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signup</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/mdb.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/background_image.css')}}">
</head>
<body>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="card">
                <div class="card-body py-5 px-md-5">
                    <div class="card-header h5 text-center fw-bold mb-4 fs-2 border-0">
                        <span style="color: hsl(218, 81%, 75%)">Signup</span>
                    </div>
                    <form method="POST" action="{{ route('register') }}" class="needs-validation" novalidate>
                        @csrf
                        <div class="form-outline mb-4">
                            <input name="name" value="{{ old('name') }}" type="text" id="name"
                                   class="form-control @error('name') is-invalid @enderror"
                                   required/>
                            @error('name')
                            @enderror
                            <label class="form-label" for="name">Name</label>
                            <p class="invalid-feedback">
                                Please enter the valid name!
                            </p>
                        </div>

                        <div class="form-outline mb-4 ">
                            <input type="text" id="phone"
                                   class="form-control @error('phone') is-invalid @enderror"
                                   name="phone" value="{{ old('phone') }}" required/>
                            <label class="form-label" for="form3Example3">Phone</label>
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="form-outline mb-4 ">
                            <input type="email" id="email"
                                   class="form-control @error('email') is-invalid @enderror"
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
                                   @error('password') is-invalid @enderror name="password" required
                                   autocomplete="current-password"/>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <label class="form-label" for="form3Example4">Password</label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="password" id="password_confirm" class="form-control"
                                   @error('password') is-invalid @enderror name="password_confirmation" required
                                   autocomplete="current-password"/>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <label class="form-label" for="form3Example4">Confirm Password</label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block mb-4">
                            Signup
                        </button>
                        <a type="button" href="{{route('home')}}" class="btn btn-outline-danger btn-block mb-2">
                            Cancel
                        </a>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
</body>
<script src="{{ asset('js/mdb.min.js') }}"></script>
<script type="text/javascript">
    (() => {
        'use strict';
        const forms = document.querySelectorAll('.needs-validation');
        Array.prototype.slice.call(forms).forEach((form) => {
            form.addEventListener('submit', (event) => {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    })();
</script>
</html>

