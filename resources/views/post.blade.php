@extends('layouts.main')

@section('container')
<!-- Masthead-->
<header class="masthead text-white text-center" style="background-image: url('assets/assets/img/iss.jpeg');
    height: cover;  overflow: auto">
    <div class="container d-flex align-items-center flex-column">


        {{-- <!-- Masthead Avatar Image-->
            <img class="masthead-avatar mb-5" src="assets/assets/img/avataaars.svg" alt="..." /> --}}


        <!-- Masthead Heading-->
        <h1 class="masthead-heading text-uppercase mb-0"> Post</h1>

        {{-- <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div> --}}
        <br>
        <br>
        <!-- Masthead Subheading-->
        <!-- <p class="masthead-subheading font-weight-light mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi reiciendis assumenda, excepturi, recusandae quibusdam natus voluptatum nemo necessitatibus fugiat dicta ratione quas illum soluta. Quae, eligendi cupiditate consequatur ipsam unde ducimus iusto tempore cum sint perferendis! Cupiditate, quam dolores? Omnis accusamus et error. Est eaque assumenda porro cupiditate et! Eligendi voluptas nihil omnis ab? Blanditiis velit perspiciatis assumenda dolorem voluptatem! In adipisci nostrum possimus laudantium totam tenetur provident veniam minus officia. Iste iusto in voluptatibus dolor? Quae nam fuga ipsum nesciunt tenetur reiciendis, eum incidunt voluptas earum praesentium, hic perferendis quasi pariatur odio repellat exercitationem aperiam sit. Aliquam, iusto mollitia. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur architecto officia harum asperiores alias, molestiae aperiam quibusdam nemo dignissimos omnis! Quas saepe officia voluptates itaque esse numquam aut recusandae impedit voluptate aliquam excepturi illo, debitis reprehenderit similique expedita deleniti earum totam cumque facilis enim natus molestias amet sequi. Voluptatum enim vel, molestias, expedita, dolor mollitia quae maxime maiores adipisci non possimus praesentium est? Ratione quisquam iste at itaque, rerum excepturi ullam autem aut fuga, delectus vel in cupiditate inventore accusamus eligendi nobis recusandae tempora asperiores deserunt veritatis sint vero maxime facilis iure? Ducimus ab mollitia dolor, dicta nostrum neque exercitationem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos maxime eum iure magnam tenetur quo alias, expedita sequi beatae quidem reprehenderit labore cupiditate nostrum tempora perferendis ducimus obcaecati. Quod harum possimus officia nam, porro consequuntur necessitatibus quae repudiandae repellendus obcaecati et beatae eum autem ex repellat debitis aliquid cum aliquam dolorum blanditiis ut? Beatae unde eveniet natus rerum vitae inventore, exercitationem soluta vero atque laborum dolore maxime iste quibusdam iusto animi quidem laboriosam at necessitatibus, nesciunt suscipit. Facere doloremque velit mollitia veritatis possimus labore, unde numquam! Vitae quibusdam voluptate totam, culpa cum commodi explicabo odit nesciunt facilis suscipit iure temporibus?</p> -->
    </div>
</header>


<section class="page-section" style="background-image: url('assets/assets/img/universe.jpg');
    height: 90vh; ">
<div class="container mt-5">
        <div class="row">
            @foreach($tanyas as $tanya)
                <div class="col-md-4">
                    <div class="card mb-4 bg-primary text-white">
                        <div class="card-body">
                            <h5 class="card-title">{{ $tanya->judul }}</h5>
                            <p class="card-text">Penanya : {{ $tanya->nama }}</p>
                            <p class="card-text">Email : {{ $tanya->email }}</p>
                            <p class="card-text">No Handphone : {{ $tanya->handphone }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

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
                    action="{{ route('glosarium.store') }}">
                    <!-- Name input-->
                    @csrf
                    <div class="form-floating mb-3">
                        <input class="form-control rounded" type="text" name="title" placeholder="title"
                            data-sb-validations="required" />
                        <label for="title">Judul</label>
                        <!-- <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div> -->
                    </div>
                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control rounded" type="file" name="gambar" placeholder="gambar"
                            data-sb-validations="required,email" />
                        <label for="gambar">Gambar</label>
                        <!-- <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div> -->
                    </div>
                    <!-- Phone number input-->
                    <!-- <div class="form-floating mb-3">
                        <input class="form-control rounded" type="text" name="handphone" placeholder="Handphone"
                            data-sb-validations="required" />
                        <label for="phone">Phone number</label>
                        <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.
                        </div>
                    </div> -->
                    <!-- Message input-->
                    <div class="form-floating mb-3">
                        <textarea class="form-control rounded" type="text" name="body" placeholder="body"
                            style="height: 10rem" data-sb-validations="required"></textarea>
                        <label for="message">Body</label>
                        <!-- <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div> -->
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <!-- <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a
                                href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div> -->
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <!-- <div class="d-none" id="submitErrorMessage">
                        <div class="text-center text-danger mb-3">Error sending message!</div>
                    </div> -->
                    <!-- Submit Button-->
                    <button class="btn btn-primary btn-xl" type="submit">Send</button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection

