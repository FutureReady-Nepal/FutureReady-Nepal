@extends('frontend.layouts.main')
@section('main-container')
    <main>

        <div class="slider-area slider-height">
            <div class="slider-active">

                <div class="single-slider">
                    <div class="slider-cap-wrapper">
                        <div class="hero-caption">
                            <span>We are new but doing great</span>
                            <h1 data-animation="fadeInUp" data-delay=".2s">Beyond borders, beyond limits - study abroad with us.</h1>
                            <p data-animation="fadeInUp" data-delay=".6s">We're very excited to have you here!<br>We've shared all our services below.<br> We hope you enjoy our services.</p>
                            <a href="{{url('/services')}}" class="btn hero-btn" data-animation="fadeInUp" data-delay="1s">Explore Our Services.</a>
                        </div>
                        <div class="hero-img position-relative">
                            <img src="{{ url('img/frontpage.jpg') }}" alt="" data-animation="fadeInRight"
                                data-transition-duration="5s">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="services-area section-padding">
            <div class="container">

                <div class="row justify-content-between mb-55">
                    <div class="col-xl-5 col-lg-6 col-md-6">
                        <div class="section-tittle section-tittle3">
                            <h2>Services we provide</h2>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 col-md-6">
                        <div class="section-tittle section-tittle3">
                            <p>Achieve career success with our professional development services.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-cat mx-auto my-auto">
                            <div class="cat-icon">
                                <img src="assets/img/icon/services1.svg" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="{{url('/service1')}}">University Shortlisting Based On Your Profile</a></h5>
                                <p>Selecting the right universities is a very critical and tedious process. It can determine your total acceptance, scholarship, VISA approval chances, and many more. We'll be able to help you with university selection based on your profi le and course. This service saves precious time and gets you into the best university your profi le deserves. If you have a great profi le, you could also get a scholarship.</p>
                                <a href="{{url('/service1')}}" class="browse-btn">Know More.</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-cat mb-50">
                            <div class="cat-icon">
                                <img src="assets/img/icon/services2.svg" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="{{url('/service2')}}">Bachelor's Essay / Master's SOP Writing</a></h5>
                                <p>Writing a College Essay / SOP can seem like a daunting task, but it doesn't for us! We have a highly qualifi ed and dedicated team to write your College Essay / SOP / Personal Statement. Everyone has some kind of story or life experience, and we will help to convey your stories to your university admission counselor. The SOP is one of the essential parts of your application process because it helps the admissions committee know your interests and experiences. It can convert your normal admission to admission with a scholarship.</p>
                                <a href="{{url('/service2')}}" class="browse-btn">Know More.</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-cat mb-50">
                            <div class="cat-icon">
                                <img src="assets/img/icon/services3.svg" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="{{url('/service3')}}">Letter of Recommendation draft</a></h5>
                                <p>This document can get you good acceptance and scholarship; very few recommenders write LOR from scratch, and most of them ask you for a LOR draft. Here we will draft a unique LOR based on your relation with your recommender, and your professor or manager's perspective.</p>
                                <a href="{{url('/service3')}}" class="browse-btn">Know More.</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-cat mb-50">
                            <div class="cat-icon">
                                <img src="assets/img/icon/services3.svg" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="{{url('/service4')}}">Statement of Purpose/ Essay Review</a></h5>
                                <p>If you are looking into this service, then you are the one who has written their Essay / SOP. You must be thinking, What do we provide to people like you? Well, everyone thinks their written draft is best and correct, but you need a second perspective. So, here we come into the picture; we review your Essay/ SOP draft. What we do in the review process is explained below.</p>
                                <a href="{{url('/service4')}}" class="browse-btn">Know More.</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-cat mb-50">
                            <div class="cat-icon">
                                <img src="assets/img/icon/services3.svg" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="{{url('/service5')}}">F-1 VISA process help</a></h5>
                                <p>Congratulations! on your acceptance to your dream university. If you are looking into this service, you must have your i-20 document. After you receive your i-20 document, the most important and tricky part starts, i.e., applying for a VISA interview. We make this tricky part easy for you. We help in the whole VISA process from DS-160 filling to Interview Preparation.</p>
                                <a href="{{url('/service5')}}" class="browse-btn">Know More.</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-cat mb-50">
                            <div class="cat-icon">
                                <img src="assets/img/icon/services3.svg" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="{{url('/service6')}}">Complete Process help for Bachelor and Master</a></h5>
                                <p>This service is in high demand for those who have yet to learn how to start for USA application process. Here, we will take care of everything, and you need to fill out some questionnaire forms, and our team will do the rest.</p>
                                <a href="{{url('/service6')}}" class="browse-btn">Know More.</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="about-area">

            <div class="about-img">
            </div>

            <div class="about-details">
                <div class="right-caption">

                    <div class="section-tittle mb-50">
                        <h2>Our<br>Philosophy</h2>
                    </div>
                    <div class="about-more">
                        <p>We provide students with a once-in-a-lifetime opportunity to immerse themselves in a new culture, learn a new language, and gain a global perspective. We believe that studying abroad is not just about earning academic credits, but about personal growth and development. We strive to create personalized and meaningful experiences for each student, by providing comprehensive support and guidance throughout the entire process. </p>
                        <p class="pera-bottom">Our goal is to help students not only succeed academically, but also to become independent, confident, and culturally aware individuals.</p>
                        <div class="footer-tittles">
                            <p>CEO, Consulto</p>
                            <h2>Capcilena Hanry</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="pricing-card-area section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-7 col-md-10">
                        <div class="section-tittle section-tittle2  text-center mb-60">
                            <h2>Affordable pricing plan</h2>
                            <p>Content marketing is nothing but offering users value. It is not just about traffic minion
                                consectetur adipiscing elitd do eiusmod tempor incididun.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                        <div class="single-card text-center mb-30">
                            <div class="card-top">
                                <span>Basic Plan</span>
                            </div>
                            <div class="card-mid">
                                <h4><span>$</span> 700</h4>
                                <p>Content marketing is nothing but offering users value.</p>
                            </div>
                            <div class="card-bottom">
                                <ul>
                                    <li>Increase traffic 50%</li>
                                    <li>Social Media Marketing</li>
                                    <li>10 Free Optimization</li>
                                    <li> 24/7 support</li>
                                </ul>
                                <a href="#" class="btn get-btn">Get Started Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                        <div class="single-card text-center active mb-30">
                            <div class="card-top">
                                <span>Basic Plan</span>
                            </div>
                            <div class="card-mid">
                                <h4><span>$</span> 700</h4>
                                <p>Content marketing is nothing but offering users value.</p>
                            </div>
                            <div class="card-bottom">
                                <ul>
                                    <li>Increase traffic 50%</li>
                                    <li>Social Media Marketing</li>
                                    <li>10 Free Optimization</li>
                                    <li> 24/7 support</li>
                                </ul>
                                <a href="#" class="btn get-btn">Get Started Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                        <div class="single-card text-center mb-30">
                            <div class="card-top">
                                <span>Basic Plan</span>
                            </div>
                            <div class="card-mid">
                                <h4><span>$</span> 700</h4>
                                <p>Content marketing is nothing but offering users value.</p>
                            </div>
                            <div class="card-bottom">
                                <ul>
                                    <li>Increase traffic 50%</li>
                                    <li>Social Media Marketing</li>
                                    <li>10 Free Optimization</li>
                                    <li> 24/7 support</li>
                                </ul>
                                <a href="#" class="btn get-btn">Get Started Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="project-us pb-padding bottom-padding">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-6 col-lg-6 col-md-10">
                        <div class="project-caption">

                            <div class="section-tittle  mb-20">
                                <h2>Discover the features that set you Future Ready.</h2>
                            </div>

                            <div class="collapse-wrapper">
                                <div class="accordion" id="accordionExample">

                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h2 class="mb-0">
                                                <a href="#" class="btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapseTwo" aria-expanded="false"
                                                    aria-controls="collapseTwo">Personalized program matching:</a>
                                            </h2>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                We work closely with each student to understand their unique needs and goals, and match them with a program that is the perfect fit for them.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <a href="#" class="btn-link" data-toggle="collapse"
                                                    data-target="#collapseOne" aria-expanded="true"
                                                    aria-controls="collapseOne">Comprehensive Support:</a>
                                            </h2>
                                        </div>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                We provide comprehensive support throughout the entire process, from application and enrollment to arrival and adjustment, ensuring that students have everything they need to make the most of their study abroad experience.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <h2 class="mb-0">
                                                <a href="#" class="btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapseThree" aria-expanded="false"
                                                    aria-controls="collapseThree">Wide range of program options:</a>
                                            </h2>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                We offer a wide range of program options, including language immersion, internships, and volunteer opportunities, to ensure that students have the opportunity to gain a diverse and well-rounded experience.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="headingfouree">
                                            <h2 class="mb-0">
                                                <a href="#" class="btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapseFoure" aria-expanded="false"
                                                    aria-controls="collapseFoure">Follow-up support: </a>
                                            </h2>
                                        </div>
                                        <div id="collapseFoure" class="collapse" aria-labelledby="headingfouree"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                We offer follow-up support services to assist students with their integration and transition back home, making sure the experience continues to benefit them even after they return.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 col-md-10 col-sm-10">
                        <div class="project-right-cap">
                            <div class="project-right-img">
                                <img src="assets/img/gallery/about2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="testimonial-area section-padding section-img-bg"
            data-background="{{url('img/gallery/section-bg1.jpg')}}">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-xl-7 col-lg-8 col-md-11 ">
                        <div class="h1-testimonial-active dot-style">

                            <div class="single-testimonial position-relative">
                                <div class="testimonial-caption">
                                    <h3>"I had an amazing experience studying abroad with Future Ready Nepal.</h3>
                                    <p> The process was seamless from start to finish, and the staff was incredibly helpful and supportive throughout. I couldn't have asked for a better program or a better team to work with. I highly recommend Future Ready Nepal to anyone considering studying abroad."</p>
                                </div>

                                <div class="testimonial-founder d-flex align-items-center">
                                    <div class="founder-text">
                                        <p>- Robert Brown <span>CEO of Colorlib</span></p>
                                    </div>
                                </div>
                            </div>

                            <div class="single-testimonial position-relative">
                                <div class="testimonial-caption">
                                    <h3>"Studying abroad with Future Ready Nepal was an unforgettable experience. </h3>
                                    <p>Their assistance in finding the right program and culture that suits me was excellent. They were always available to answer any questions and concerns that I had throughout the process, and made sure I had everything I needed to make the most of my time abroad. I will always be grateful for their help."</p>
                                </div>

                                <div class="testimonial-founder d-flex align-items-center">
                                    <div class="founder-text">
                                        <p>- Robert Brown <span>CEO of Colorlib</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="single-testimonial position-relative">
                                <div class="testimonial-caption">
                                    <h3>"I can't say enough good things about Future Ready Nepal.</h3>
                                    <p> They truly went above and beyond to make sure my study abroad experience was everything I wanted it to be. From finding the perfect program to providing ongoing support, they were there for me every step of the way. I would recommend Future Ready Nepal to anyone without hesitation."</p>
                                </div>

                                <div class="testimonial-founder d-flex align-items-center">
                                    <div class="founder-text">
                                        <p>- Robert Brown <span>CEO of Colorlib</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="single-testimonial position-relative">
                                <div class="testimonial-caption">
                                    <h3>"I was a bit hesitant about studying abroad at first, </h3>
                                    <p>but Future Ready Nepal made the process so easy and stress-free. They helped me find the perfect program and provided me with all the information I needed to feel confident and prepared. I had the time of my life abroad and I know I wouldn't have had such a great experience without Future Ready Nepal."</p>
                                </div>

                                <div class="testimonial-founder d-flex align-items-center">
                                    <div class="founder-text">
                                        <p>- Robert Brown <span>CEO of Colorlib</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        {{-- <section class="home-blog-area section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10 col-sm-11">

                        <div class="section-tittle text-center mb-60">
                            <h2>Our latest blog</h2>
                        </div>
                    </div>
                </div>
                <div class="blog-active">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="properties">
                            <div class="properties__card">
                                <div class="properties__img">
                                    <a href="#"><img src="assets/img/gallery/blog1.jpg" alt=""></a>
                                    <div class="img-text">
                                        <span class="open">Urban</span>
                                    </div>
                                </div>
                                <div class="properties__caption">
                                    <h3><a href="#">Starts the automated process.</a></h3>
                                    <p>The automated process starts as soon as your clothes go into the machine.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="properties">
                            <div class="properties__card">
                                <div class="properties__img">
                                    <a href="#"><img src="assets/img/gallery/blog2.jpg" alt=""></a>
                                    <div class="img-text">
                                        <span class="open">Urban</span>
                                    </div>
                                </div>
                                <div class="properties__caption">
                                    <h3><a href="#">Starts the automated process.</a></h3>
                                    <p>The automated process starts as soon as your clothes go into the machine.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="properties">
                            <div class="properties__card">
                                <div class="properties__img">
                                    <a href="#"><img src="assets/img/gallery/blog3.jpg" alt=""></a>
                                    <div class="img-text">
                                        <span class="open">Urban</span>
                                    </div>
                                </div>
                                <div class="properties__caption">
                                    <h3><a href="#">Starts the automated process.</a></h3>
                                    <p>The automated process starts as soon as your clothes go into the machine.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="properties">
                            <div class="properties__card">
                                <div class="properties__img">
                                    <a href="#"><img src="assets/img/gallery/blog2.jpg" alt=""></a>
                                    <div class="img-text">
                                        <span class="open">Urban</span>
                                    </div>
                                </div>
                                <div class="properties__caption">
                                    <h3><a href="#">Starts the automated process.</a></h3>
                                    <p>The automated process starts as soon as your clothes go into the machine.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

    </main>
@endsection
