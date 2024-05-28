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
                <form>

                    <!-- <h1 class="h3 mb-3 fw-normal">Please Register</h1> -->

                    <div class="form-floating">
                        <input type="text" class="form-control rounded-top" id="name" placeholder="name">
                        <label for="name">Nama</label>
                    </div>
                    <div class="form-floating">
                        <input type="email" class="form-control" id="email" placeholder="email">
                        <label for="email">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control rounded-bottom" id="password" placeholder="password">
                        <label for="password">Password</label>
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