@extends('layouts.main')

@section('container1')

<section class="masthead bg-primary text-white text-center" style="background-image: url('assets/assets/img/universe.jpg');
    height:cover; overflow:auto; background-repeat: no-repeat;
  background-attachment: fixed;">
    <div class="container d-flex align-items-center flex-column">

        <h1 class="masthead-heading text-uppercase mb-0">Selamat Datang di Tanya Kak Astro</h1>
        <br>
        <br>
        <p class="masthead-subheading font-weight-light mb-0">Kami Hanya Menjawab Pertanyaan terkait luar angkasa ya</p>
        <br>
        <br>
        <div class="text-left">
            <p class="masthead-subheading font-weight-light mb-0">Berikut Contoh Pertanyaan yang benar:</p>
            <p class="masthead-subheading font-weight-light mb-0">1. Mengapa Gerhana Bisa Terjadi</p>
            <p class="masthead-subheading font-weight-light mb-0">2. Ada Benda Langit Yang dikatagorikan oleh ahli
                astronom sebagai planet katai? apa itu planet katai dan apa yang membuat nya berbeda dengan planet biasa
            </p>
        </div>

    </div>

</section>


<div class="divider-custom divider-light">
    <div class="divider-custom-line"></div>
    <!-- <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div> -->
</div>

<!-- Contact Section-->
<section class="page-section text-white" id="contact" style="
    height: 90vh;">
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
                    action="{{ route('tanya.store') }}">
                    <!-- Name input-->
                    @csrf
                    <div class="form-floating mb-3">
                        <input class="form-control rounded" type="text" name="nama" placeholder="Nama"
                            data-sb-validations="required" />
                        <label for="name">Nama Lengkap</label>
                        <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                    </div>
                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control rounded" type="text" name="email" placeholder="Email"
                            data-sb-validations="required,email" />
                        <label for="email">Alamat Email</label>
                        <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                    </div>
                    <!-- Phone number input-->
                    <div class="form-floating mb-3">
                        <input class="form-control rounded" type="text" name="handphone" placeholder="Handphone"
                            data-sb-validations="required" />
                        <label for="phone">Nomor Handphone</label>
                        <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.
                        </div>
                    </div>
                    <!-- Message input-->
                    <div class="form-floating mb-3">
                        <textarea class="form-control rounded" type="text" name="judul" placeholder="Judul"
                            style="height: 10rem" data-sb-validations="required"></textarea>
                        <label for="message">Tuliskan Pertanyaan Anda</label>
                        <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a
                                href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage">
                        <div class="text-center text-danger mb-3">Error sending message!</div>
                    </div>
                    <!-- Submit Button-->
                    <button class="btn btn-primary btn-xl" type="submit">Send</button>
                </form>
            </div>
        </div>
    </div>
</section>


@endsection