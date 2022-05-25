@extends('layouts/login')

@section('title')
Forgot Password
@endsection

@section('content') 
<main class="form-signin">

  @if(session()->has('message'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('message') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif

  <form action="{{ route('forget.password.post') }}" method="POST">
    @csrf
    <img class="mb-4" src="img/admin_raasaa.png" alt="" width="202" height="107">
    <h1 class="h3 mb-3 fw-normal">Forgot Password</h1>

    <div class="form-floating mb-3">
      <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
      <label for="floatingInput">Email address</label>
      @error('email')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Send Email</button>
  </form>

  <small>Need account? Contact "it@kebunraya.id"</small>
  <p class="mt-5 mb-3 text-muted">&copy; AMNV x KARUNONIH</p>
</main>  

