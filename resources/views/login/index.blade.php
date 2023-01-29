@extends('layouts.main')

@section('dani')
<div class="row justify-content-center">
  <div class="col-lg-4">
    <main class="form-signin w-100 m-auto">
      <h1 class="h3 mb-3 fw-normal text-center">Login</h1>
  @if (session()->has('success'))
      <div class="alert alert-primary alert-dismissible fade show" role="alert">
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
              <input type="text" name="email" required autofocus value="{{ old('email') }}" class="form-control  @error('email') is-invalid @enderror" id="floatingInput" placeholder="Email">
              <label for="floatingInput">Email</label>
              <div class="invalid-feedback">
                @if ($errors->has('email'))
                      {{ $errors->first('email') }}
                      @else
                      Silahkan isi Email
                      @endif
              </div>
            </div>
        <div class="form-floating">
          <input type="password" name="password" required class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Password</label>
          <div class="invalid-feedback">
            Silahkan isi Password
          </div>
        </div>
    
        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        <small class="d-block text-center mt-2">Register Now <a href="/register">Register</a></small>
      </form>
    </main>
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
