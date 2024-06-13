@extends('layouts.main')

@section('container1')

<section class="masthead text-white text-center" style="background-image: url('assets/assets/img/universe.jpg');
    height:cover; overflow:auto; background-repeat: no-repeat;
  background-attachment: fixed;">
    <div class="container d-flex align-items-center flex-column">
        <!-- Masthead Avatar Image-->
        {{-- <img class="masthead-avatar mb-5" src="assets/assets/img/avataaars.svg" alt="..." /> --}}
        <!-- Masthead Heading-->
        <h1 class="masthead-heading text-uppercase mb-0">Update kakastro</h1>


        <!-- Icon Divider-->

    </div>
</section>


<div class="divider-custom divider-light">
    <div class="divider-custom-line"></div>
    <!-- <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div> -->
</div>

<!-- Contact Section-->
<section class="page-section text-white" id="contact" style="
    height: cover; overflow: auto">
    <div class="container">
        <!-- Contact Section Form-->
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN" method="POST"
                    action="{{ route('kakastros.update', $kakastro->id) }}">
                    <!-- Name input-->
                    @csrf
                    @method('patch')
                    <div class="form-floating mb-3">
                        <input class="form-control rounded" type="text" name="title" placeholder="title"
                            data-sb-validations="required" value="{{ $kakastro->title }}" />
                        <label for="title">Judul</label>
                        <!-- <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div> -->
                    </div>
                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control rounded" type="file" name="gambar" placeholder="gambar"
                            data-sb-validations="required" value="{{ $kakastro->gambar }}" />
                        <label for="gambar">Gambar</label>
                        <!-- <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div> -->
                    </div>

                    <!-- Message input-->
                    <div class="form-floating mb-3">
                        <textarea class="form-control rounded" type="text" name="body" placeholder="body"
                            style="height: 20rem" data-sb-validations="required" value="{{ $kakastro->body }}"></textarea>
                        <label for="body">Body</label>
                        <!-- <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div> -->
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->

                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->

                    <!-- Submit Button-->
                    <button class="btn btn-primary btn-xl" type="submit">Send</button>
                    <a href="{{ route('kakastros.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection