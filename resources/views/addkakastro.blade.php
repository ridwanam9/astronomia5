@extends('layouts.main')

@section('container1')

<section class="masthead bg-primary text-white text-center" style="background-image: url('assets/assets/img/universe.jpg');
    height:cover; overflow:auto; background-repeat: no-repeat;
  background-attachment: fixed;">
    <div class="container d-flex align-items-center flex-column">

    <h1 class="masthead-heading text-uppercase mb-0">Tambah Kakastro</h1>
    </div>

</section>


<div class="divider-custom divider-light">
    <div class="divider-custom-line"></div>
    <!-- <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div> -->
</div>

<!-- Contact Section-->
<section class="page-section text-white" id="contact" style="
    height: cover">
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
                    action="{{ route('kakastro.store') }}">
                    <!-- Name input-->
                    @csrf
                    <div class="form-floating mb-3">
                        <input class="form-control rounded @error('title') is-invalid @enderror" type="text" name="title" placeholder="title" value="{{ old('title') }}" />
                        <label for="title">Judul</label>
                        @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control rounded @error('gambar') is-invalid @enderror" type="file" name="gambar" placeholder="gambar" value="{{ old('gambar') }}" />
                        <label for="gambar">Gambar</label>
                        @error('gambar')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                
                    <!-- Message input-->
                    <div class="form-floating mb-3">
                        <textarea class="form-control rounded @error('body') is-invalid @enderror" name="body" placeholder="body" style="height: 20rem">{{ old('body') }}</textarea>
                        <label for="body">Body</label>
                        @error('body')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
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
                </form>
            </div>
        </div>
    </div>
</section>


@endsection