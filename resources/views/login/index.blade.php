@extends('layouts.main')

@section('container')


<section class="masthead bg-primary text-white text-center" style="background-image: url('assets/assets/img/universe.jpg');
    height:100vh; 
    overflow:auto; 
    background-repeat: no-repeat;
  background-attachment: fixed;">
    <div class="container d-flex align-items-center flex-column">

        <h1 class="masthead-heading text-uppercase mb-0">Login</h1>

    </div>

    @if(session()->has('success'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{session('success')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    <br>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-5">
            <main class="form-signin w-100 m-auto">
                <form>

                    <!-- <h1 class="h3 mb-3 fw-normal">Please sign in</h1> -->

                    <div class="form-floating mb-3">
                        <input type="email" class="form-control rounded" id="floatingInput"
                            placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control rounded" id="floatingPassword"
                            placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>

                    <div class="form-check text-start my-3">
                        <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Remember me
                        </label>
                    </div>
                    <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>

                </form>
                <small class="d-block text-center mt-3">Not Registered? <a href="/register">Register Now!</a></small>
            </main>
        </div>
    </div>

</section>

<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>



@endsection