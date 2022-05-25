@extends('layouts/login')

@section('title')
Masuk
@endsection

@section('content') 
<main class="form-signin">

  @if(session()->has('loginError'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('loginError') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif

  <form action="login" method="POST">
    @csrf
    <img class="mb-4" src="img/admin_raasaa.png" alt="" width="202" height="107">
    <h1 class="h3 mb-3 fw-normal">Please Login</h1>

    <div class="form-floating">
      <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
      <label for="floatingInput">Email address</label>
      @error('email')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
      <label for="floatingPassword">Password</label>
    </div>
    <small> <a href="{{ route('forget.password.get') }}">Forget Password?</a> </small>

    <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Login</button>
  </form>

  <small>Need account? Contact "it@kebunraya.id"</small>
  {{-- <small>Not have account? <a href="{{url ('signup')}}">Create account</a></small> --}}
  <p class="mt-5 mb-3 text-muted">&copy; AMNV x KARUNONIH</p>
</main>  

