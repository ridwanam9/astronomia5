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
</div>

<!-- Contact Section-->
<section class="page-section text-white" id="contact" style="height: cover; overflow: auto">
    <div class="container">
        <!-- Contact Section Form-->
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">
                <form id="contactForm" method="POST" action="{{ route('tanya.store') }}">
                    @csrf
                    <!-- Name input-->
                    <!-- <div class="form-floating mb-3">
                        <input class="form-control rounded @error('nama') is-invalid @enderror" type="text" name="nama" placeholder="Nama" value="{{ old('nama') }}" data-sb-validations="required" />
                        <label for="name">Nama Lengkap</label>
                        @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div> -->
                    <!-- Email address input-->
                    <!-- <div class="form-floating mb-3">
                        <input class="form-control rounded @error('email') is-invalid @enderror" type="text" name="email" placeholder="Email" value="{{ old('email') }}" data-sb-validations="required,email" />
                        <label for="email">Alamat Email</label>
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div> -->
                    <!-- Phone number input-->
                    <!-- <div class="form-floating mb-3">
                        <input class="form-control rounded @error('handphone') is-invalid @enderror" type="text" name="handphone" placeholder="Handphone" value="{{ old('handphone') }}" data-sb-validations="required" />
                        <label for="phone">Nomor Handphone</label>
                        @error('handphone')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div> -->
                    <!-- Message input-->
                    <div class="form-floating mb-3">
                        <textarea class="form-control rounded @error('judul') is-invalid @enderror" name="judul" placeholder="Judul" style="height: 10rem" data-sb-validations="required">{{ old('judul') }}</textarea>
                        <label for="message">Tuliskan Pertanyaan Anda</label>
                        @error('judul')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- Submit success message-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
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
