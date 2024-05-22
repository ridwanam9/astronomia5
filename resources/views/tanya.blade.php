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

<section class="container">
    <form style="width: 26rem;">
        <!-- Name input -->
        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label bg-primary rounded text-white" for="form4Example1">Name</label>
            <input type="text" id="form4Example1" class="form-control" />

        </div>

        <!-- Email input -->
        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label bg-primary rounded text-white" for="form4Example2">Email address</label>
            <input type="email" id="form4Example2" class="form-control" />

        </div>

        <!-- Message input -->
        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label bg-primary rounded text-white" for="form4Example3">Message</label>
            <textarea class="form-control" id="form4Example3" rows="4"></textarea>

        </div>

        <!-- Checkbox -->
        <div class="form-check d-flex justify-content-center mb-4">
            <input class="form-check-input me-2" type="checkbox" value="" id="form4Example4" checked />
            <label class="text-white masthead-subheading" for="form4Example4">
                Send me a copy of this message
            </label>
        </div>

        <!-- Submit button -->
        <button data-mdb-ripple-init type="button" class="btn btn-primary btn-block mb-4">Send</button>
    </form>
</section>

@endsection