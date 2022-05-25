@extends('layouts/login')

@section('title')
Reset Password
@endsection

@section('content') 
<main class="form-signin">

  @if(session()->has('message'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('message') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif

  <form action="{{ route('reset.password.post') }}" method="POST">
    @csrf
    <img class="mb-4" src="{{ asset('img/admin_raasaa.png') }}" alt="" width="202" height="107">
    <h1 class="h3 mb-3 fw-normal">Reset Password</h1>

    <input type="hidden" name="token" value="{{ $token }}">

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
      <label for="floatingPassword">New Password</label>
    </div>

    <div class="form-floating">
      <input type="password" class="form-control" name="password_confirmation" id="password" placeholder="Password" required>
      <label for="floatingPassword">Confirm New Password</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Reset Password</button>
  </form>

  <small>Need account? Contact "it@kebunraya.id"</small>
  <p class="mt-5 mb-3 text-muted">&copy; AMNV x KARUNONIH</p>
</main>  

