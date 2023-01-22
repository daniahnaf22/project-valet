@extends('layouts.main')
@section('dani')

<div class="text-center">
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <main class="form-signin w-100 m-auto">
                <h1 class="h3 mb-3 fw-normal">Please Login</h1>
                @if (session()->has('success'))
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    {{ session('success') }}
                  </div>    
                @endif
                @if (session()->has('loginError'))
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    {{ session('loginError') }}
                  </div>    
                @endif
                
                <form class="login-validation" action="/login" method="POST" novalidate>
                  @csrf
                    <div class="form-floating">
                        <input type="email" class="form-control" required autofocus value="{{ old('email') }}"
                            @error('email') is-invalid @enderror
                             name="email" id="floatingInput" placeholder="name@mail.com">
                        <label for="floatingInput">Email</label>
                        <div class="invalid-feedback">
                          @if ($errors->has('email'))
                            {{ $errors->first('email') }}
                          @else
                              Silahkan isi Email!
                          @endif
                        </div>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" required name="password" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                        <div class="invalid-feedback">
                            Silahkan isi password!
                        </div>
                    </div>
                  <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit" id="submit">Sign in</button>
                  <small class="mt-2">Register Now <a href="/register">Register</a></small>
                </form>
                
            </main>
        </div>
    </div>

</div>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.login-validation')

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