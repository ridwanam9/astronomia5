@extends('layouts.main')

@section('container')


<section class="masthead bg-primary text-white text-center" style="background-image: url('assets/assets/img/universe.jpg');
    height:cover; overflow:auto; background-repeat: no-repeat;
  background-attachment: fixed;">
    <div class="container d-flex align-items-center flex-column">

        <h1 class="masthead-heading text-uppercase mb-0">Register</h1>



    </div>

    <br>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-5">
            <main class="form-register w-100 m-auto">
                <form action="/register" method="post">
                    @csrf
                    <!-- <h1 class="h3 mb-3 fw-normal">Please Register</h1> -->

                    <div class="form-floating mb-3">
                        <input class="form-control rounded @error('name') is-invalid @enderror" type="text" name="name" placeholder="Nama" value="{{ old('name') }}" data-sb-validations="required" />
                        <label for="name">Nama Lengkap</label>
                        @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control rounded @error('email') is-invalid @enderror" type="text" name="email" placeholder="Email" value="{{ old('email') }}" data-sb-validations="required,email" />
                        <label for="email">Alamat Email</label>
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control rounded @error('handphone') is-invalid @enderror" type="text" name="handphone" placeholder="Handphone" value="{{ old('handphone') }}" data-sb-validations="required" />
                        <label for="phone">Nomor Handphone</label>
                        @error('handphone')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control rounded @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" value="{{ old('password') }}" data-sb-validations="required" />
                        <label for="password">Password</label>
                        @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Register</button>

                </form>
                <small class="d-block text-center mt-3">Already Registered? <a href="/login">Login</a></small>
            </main>
        </div>
    </div>
</section>




<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>



@endsection