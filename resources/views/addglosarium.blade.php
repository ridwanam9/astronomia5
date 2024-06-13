@extends('layouts.main')

@section('container1')

<section class="masthead bg-primary text-white text-center" style="background-image: url('assets/assets/img/universe.jpg'); height:cover; overflow:auto; background-repeat: no-repeat; background-attachment: fixed;">
    <div class="container d-flex align-items-center flex-column">
        <h1 class="masthead-heading text-uppercase mb-0">Tambah Glosarium</h1>
    </div>
</section>

<div class="divider-custom divider-light">
    <div class="divider-custom-line"></div>
</div>

<!-- Contact Section-->
<section class="page-section text-white" id="contact" style="height: cover;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">
                <form id="contactForm" method="POST" action="{{ route('glosarium.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-floating mb-3">
                        <input class="form-control rounded @error('title') is-invalid @enderror" type="text" name="title" placeholder="Title" value="{{ old('title') }}" />
                        <label for="title">Judul</label>
                        @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control rounded @error('gambar') is-invalid @enderror" type="file" name="gambar" placeholder="Gambar" />
                        <label for="gambar">Gambar</label>
                        @error('gambar')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control rounded @error('body') is-invalid @enderror" name="body" placeholder="Body" style="height: 20rem">{{ old('body') }}</textarea>
                        <label for="body">Body</label>
                        @error('body')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button class="btn btn-primary btn-xl" type="submit">Send</button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
