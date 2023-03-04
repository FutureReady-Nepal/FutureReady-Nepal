@extends('frontend.layouts.main')
@section('main-container')
    <main>

        <div class="slider-area hero-height2">
            <div class="slider-active">

                <div class="single-slider">
                    <div class="slider-cap-wrapper">
                        <div class="hero-caption">
                            <h1 data-animation="fadeInUp" data-delay=".2s">Service Details</h1>
                            <h3 data-animation="fadeInUp" data-delay=".6s">Bachelor's Essay / Master's SOP Writing</h3>
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
                            <h2>Bachelor's Essay / Master's Statement of Purpose Writing</h2>
                        </div>
                        <p class="mb-25">Writing a College Essay / Statement of Purpose can seem like a daunting task, but
                            it doesn't for us! We have a highly qualifi ed and dedicated team to write your College Essay /
                            Statement of Purpose / Personal Statement. Everyone has some kind of story or life experience,
                            and we will help to convey your stories to your university admission counselor. The Statement of
                            Purpose is one of the essential parts of your application process because it helps the
                            admissions committee know your interests and experiences. It can convert your normal admission
                            to admission with a scholarship.</p>
                        <h4 class="my-2">Features of this service:</h4>
                            <div class="conatainer">
                                <ul class="list mb-20">
                                    <li>We make sure to be clear and concise while writing your Essay and include facts and evidence
                                        to support your argument.</li>
                                    <li>Grammatical or Spelling errors free.</li>
                                    <li>Plagiarism free, 100% original content.</li>
                                    <li>One-time Customization as you need after we draft your Essay / Statement of Purpose.</li>
                                </ul>
                            </div>
                        <div class="project-us p-sm-2">
                            <div class="section-tittle3 my-2">
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
                                                After we receive the payment receipt, we will send you a questionnaire to
                                                know your story, experiences, academic history, etc. The questions will be
                                                very subjective, so you have to give a good amount of time to fi ll out
                                                those forms.
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
                                                Once you fill out those questionnaires, we will start working on your Essay
                                                / Statement of purpose.
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
                                                We draft your SOP / Essay from scratch, but we will consider your existing
                                                draft (if you have already written one)
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
