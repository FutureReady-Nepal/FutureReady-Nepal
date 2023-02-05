@extends('frontend.layouts.main')
@section('main-container')
    <main>

        <div class="slider-area hero-height2">
            <div class="slider-active">

                <div class="single-slider">
                    <div class="slider-cap-wrapper">
                        <div class="hero-caption">
                            <h1 data-animation="fadeInUp" data-delay=".2s">Service Details</h1>
                            <h3 data-animation="fadeInUp" data-delay=".6s">SOP / Essay Review</h3>
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
                            <h2>Statement of purpose / Essay Review</h2>
                        </div>
                        <p class="mb-25">If you are looking into this service, then you are the one who has written their Essay / SOP. You must be thinking, What do we provide to people like you? Well, everyone thinks their written draft is best and correct, but you need a second perspective. So, here we come into the picture; we review your Essay/ SOP draft. What we do in the review process is explained below.</p>
                        <h4 class="my-2">Features of this service:</h4>
                        <div class="container">
                            <ul class="list">
                                <li>Grammatical or Spelling errors free.</li>
                                <li>We improve readability with perfect sentences.</li>
                                <li>Plagiarism free, 100% original content.</li>
                                <li>Vocabulary Correction.</li>
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
                                                Share the payment receipt and your SOP/Essay draft with the same email.
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
                                                Once you share your SOP/Essay draft, we will start reviewing the document.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-4">
                        <div class="blog_right_sidebar  mb-60">
                            <div class="single_sidebar_widget post_category_widget white-bg-2 border-radius-6 mb-60">
                                <div class="widget_title mb-25">
                                    <h4>Our Services</h4>
                                </div>
                                <ul class="list cat-list">
                                    <li><a href="{{url('/service1')}}">University
                                            Shortlisting</a></li>
                                    <li><a href="{{url('/service2')}}">Master's SOP
                                            Writing</a></li>
                                    <li><a href="{{url('/service3')}}">LOR Draft</a></li>
                                    <li><a href="{{url('/service4')}}">SOP Review</a></li>
                                    <li><a href="{{url('/service5')}}">F-1 Visa Process
                                            Help</a></li>
                                    <li><a href="{{url('/service6')}}">Complete Process
                                            Help</a></li>
                                </ul>
                            </div>
                            {{-- <div class="sidebar__widget white-bg-2 border-radius-6">
                                <div class="sidebar-title mb-25">
                                    <h4>Quick Contact</h4>
                                </div>
                                <div class="contact-form">
                                    <form action="#">
                                        <div class="bd-single__input mb-20">
                                            <input type="text" placeholder="Your Name">
                                        </div>
                                        <div class="bd-single__input mb-20">
                                            <input type="email" placeholder="Email Address">
                                        </div>
                                        <div class="bd-single__input mb-20">
                                            <textarea name="message" id="message" placeholder="Your Message"></textarea>
                                        </div>
                                        <div class="bd-single__input">
                                            <button type="submit" class="theme-btn">Make An Order</button>
                                        </div>
                                    </form>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services Details End Here  -->
    </main>
@endsection
