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

                    <div class="form-floating mb-3 text-black">
                        <input type="text" name="name" class="form-control rounded @error('name') is-invalid @enderror" id="name" placeholder="name" required>
                        <label for="name">Nama</label>
                        @error('name')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email"  name="email" class="form-control rounded @error('email') is-invalid @enderror" id="email" placeholder="email" required>
                        <label for="email">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password"  name="password" class="form-control rounded @error('password') is-invalid @enderror" id="password" placeholder="password" required>
                        <label for="password">Password</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
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