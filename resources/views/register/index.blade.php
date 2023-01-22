@extends('layouts.main')
@section('dani')
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <main class="form-register w-100 m-auto">

                <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>

                <form action="/register" method="POST" class="register-validation" novalidate>
                    @csrf
                    <div class="form-floating">
                        <input type="text" name="name" required autofocus value="{{ old('name') }}"
                        class="form-control @error('name') is-invalid @enderror" id="floatingInput" placeholder="name">
                        <label for="floatingInput">Name</label>
                        <div class="invalid-feedback">
                            @if ($errors->has('name'))
                                {{ $errors->first('name') }}
                            @else
                                Silahkan Isi Nama Lengkap
                            @endif
                            
                        </div>
                    </div>

                    <div class="form-floating">
                        <input type="text" name="username" required value="{{ old('username') }}"
                        class="form-control @error('username') is-invalid @enderror" id="floatingInput" placeholder="username">
                        <label for="floatingInput">Username</label>
                        <div class="invalid-feedback">
                            @if ($errors->has('username'))
                                {{ $errors->first('username') }}
                            @else
                                Silahkan Isi Username
                            @endif
                           
                        </div>
                    </div>
                    
                    <div class="form-floating">
                        <input type="email" name="email" required value="{{ old('email') }}"
                        class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="example@com">
                        <label for="floatingInput">Email</label>
                        <div class="invalid-feedback">
                            @if ($errors->has('email'))
                                {{ $errors->first('email') }}
                            @else
                                 Silahkan Isi Email
                            @endif
                        </div>
                    </div>

                    <div class="form-floating">
                        <input type="password" name="password" required 
                        class="form-control @error('password') is-invalid @enderror" id="floatingInput" placeholder="password">
                        <label for="floatingInput">Password</label>
                        
                        <div class="invalid-feedback">
                            @if ($errors->has('password'))
                                {{ $errors->first('password') }}
                            @else
                                Silahkan Isi Password
                            @endif
                            
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 mt-2">Register</button>

                </form>

                <small class="d-block text-center mt-2">Already Register? <a href="/login">Login</a></small>
            </main>
        </div>
    </div>

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.register-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
@endsection
