@extends('layouts.main')

@section('container1')
<!-- Masthead-->
<header class="masthead text-white text-center" style="background-image: url('assets/assets/img/observer.jpg');
    height:100vh; overflow:auto; background-repeat: no-repeat;
  background-attachment: fixed; background: rgba(0, 0, 0, 0.5);">
    <div class="container d-flex align-items-center flex-column">

        <!-- Masthead Heading-->
        <h1 class="masthead-heading text-uppercase mb-0">Profil Anda</h1>

        <br>
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if(session()->has('danger'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('danger') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <br>

        <div class="container">
            <div class="row">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{ route('profile.update') }}" method="POST">
                                @csrf
                                <div class="form-group row mb-3">
                                    <label for="username" class="col-4 col-form-label">User Name*</label>
                                    <div class="col-8">
                                        <input id="name" name="name" placeholder="name"
                                            class="form-control here @error('name') is-invalid @enderror" type="text"
                                            value="{{ old('name', $user->name) }}" data-sb-validations="required">
                                        @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label for="email" class="col-4 col-form-label">Email*</label>
                                    <div class="col-8">
                                        <input id="email" name="email" placeholder="Email"
                                            class="form-control here @error('email') is-invalid @enderror" type="text"
                                            value="{{ old('email', $user->email) }}"
                                            data-sb-validations="required,email">
                                        @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label for="handphone" class="col-4 col-form-label">Handphone*</label>
                                    <div class="col-8">
                                        <input id="handphone" name="handphone" placeholder="handphone"
                                            class="form-control here @error('handphone') is-invalid @enderror"
                                            type="text" value="{{ old('handphone', $user->handphone) }}"
                                            data-sb-validations="required">
                                        @error('handphone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label for="newpass" class="col-4 col-form-label">Password Baru (Kosongkan untuk
                                        memakai password yang sama)</label>
                                    <div class="col-8">
                                        <input id="password" name="password" placeholder="Password"
                                            class="form-control here @error('password') is-invalid @enderror" type="password">
                                        @error('password') 
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label for="newpass" class="col-4 col-form-label">Konfirmasi Password</label>
                                    <div class="col-8">
                                        <input id="password_confirmation" name="password_confirmation" placeholder="Password"
                                            class="form-control here @error('password_confirmation') is-invalid @enderror" type="password">
                                        @error('password_confirmation')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mt-4">
                                    <div class="offset-4 col-8">
                                        <button name="submit" type="submit" class="btn btn-primary">Update
                                            Profile</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <br>
    </div>
</header>

@endsection
