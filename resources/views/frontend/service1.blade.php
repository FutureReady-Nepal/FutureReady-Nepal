@extends('frontend.layouts.main')
@section('main-container')
    <main>

        <div class="slider-area hero-height2">
            <div class="slider-active">

                <div class="single-slider">
                    <div class="slider-cap-wrapper">
                        <div class="hero-caption">
                            <h1 data-animation="fadeInUp" data-delay=".2s">Service Details</h1>
                            <h3 data-animation="fadeInUp" data-delay=".6s">University Shortlisting </h3>
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
                            <h2>University Shortlisting based on your profile</h2>
                        </div>
                        <p class="mb-25">Selecting the right universities is a very critical and tedious process. It can
                            determine your total acceptance, scholarship, VISA approval chances, and many more. We'll be
                            able to help you with university selection based on your profi le and course. This service saves
                            precious time and gets you into the best university your profi le deserves. If you have a great
                            profi le, you could also get a scholarship.</p>
                        <div class="project-us p-sm-2">
                            <div class="section-tittle3  mb-20">
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
                                                We provide comprehensive support throughout the entire process, from
                                                application
                                                and enrollment to arrival and adjustment, ensuring that students have
                                                everything
                                                they need to make the most of their study abroad experience.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <h2 class="mb-0">
                                                <a href="#" class="btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapseThree" aria-expanded="false"
                                                    aria-controls="collapseThree">Step Three:</a>
                                            </h2>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                We offer a wide range of program options, including language immersion,
                                                internships, and volunteer opportunities, to ensure that students have the
                                                opportunity to gain a diverse and well-rounded experience.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="headingfouree">
                                            <h2 class="mb-0">
                                                <a href="#" class="btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapseFoure" aria-expanded="false"
                                                    aria-controls="collapseFoure">Step Four: </a>
                                            </h2>
                                        </div>
                                        <div id="collapseFoure" class="collapse" aria-labelledby="headingfouree"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                We offer follow-up support services to assist students with their
                                                integration
                                                and transition back home, making sure the experience continues to benefit
                                                them
                                                even after they return.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingfive">
                                            <h2 class="mb-0">
                                                <a href="#" class="btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapseFive" aria-expanded="false"
                                                    aria-controls="collapseFive">Step Five: </a>
                                            </h2>
                                        </div>
                                        <div id="collapseFive" class="collapse" aria-labelledby="headingfive"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                We offer follow-up support services to assist students with their
                                                integration
                                                and transition back home, making sure the experience continues to benefit
                                                them
                                                even after they return.
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
