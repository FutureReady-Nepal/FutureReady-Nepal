@extends('frontend.layouts.main')
@section('main-container')
    <main>

        <div class="slider-area hero-height2">
            <div class="slider-active">

                <div class="single-slider">
                    <div class="slider-cap-wrapper">
                        <div class="hero-caption">
                            <h1 data-animation="fadeInUp" data-delay=".2s">Service Details</h1>
                            <h3 data-animation="fadeInUp" data-delay=".6s">F-1 Visa Process Help</h3>
                        </div>
                        <div class="hero-img hero-img2 position-relative">
                            <img src="assets/img/hero/hero3.jpg" alt="" data-animation="fadeInRight"
                                data-transition-duration="5s">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Details Start Here  -->
        <section class="services-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="section-tittle">
                            <h2>F-1 Visa Process Help.</h2>
                        </div>
                        <p class="mb-25">Congratulations! on your acceptance to your dream university. If you are looking into this service, you must have your i-20 document. After you receive your i-20 document, the most important and tricky part starts, i.e., applying for a VISA interview. We make this tricky part easy for you. We help in the whole VISA process from DS-160 filling to Interview Preparation.</p>
                        <h4 class="my-2">Features of this service:</h4>
                        <div class="container">
                            <ul class="list mb-20">
                                <li>DS-160 form filling.</li>
                                <li>CGI portal opening.</li>
                                <li>SEVIS I-901 receipt help.</li>
                                <li>Payment help of SEVIS ($350) and MRV fee ($150)</li>
                                <li>Most frequently asked questions preparation</li>
                                <li>VISA interview preparation</li>
                                <li>2 MOCK interview</li>
                                <li>We do not book VI slots, but we can guide you.</li>
                            </ul>
                        </div>
                        <div class="project-us p-sm-2">
                            <div class="section-tittle3  my-2">
                                <h4>If you choose this Service, here is how it will be delivered.</h4>
                            </div>

                            <div class="collapse-wrapper">
                                <div class="accordion" id="accordionExample">

                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h2 class="mb-0">
                                                <a href="#" class="btn-link " data-toggle="collapse"
                                                    data-target="#collapseTwo" aria-expanded="false"
                                                    aria-controls="collapseTwo">Step One:</a>
                                            </h2>
                                        </div>
                                        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                First of all, you need to share your
                                                email and service name
                                                with us on the chat. You will receive an email from our team for the payment
                                                option.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <a href="#" class="btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapseOne" aria-expanded="true"
                                                    aria-controls="collapseOne">Step Two:</a>
                                            </h2>
                                        </div>
                                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                After you share your fee receipt, we will start working on your service, and all the processes will be communicated through email.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-4">
                        @include('frontend.layouts.sidebar')
                    </div>
                </div>
            </div>
        </section>
        <!-- Services Details End Here  -->
    </main>
@endsection
