@extends('layout.app')
@section('content')
<!-- Banner Section-->
<header class="py-5 parallax ">
    <div class="container px-5 pb-5">
        <div class="row gx-5 align-items-center">
            <div class="col-xxl-5">
                <!-- Header text content-->
                <div class="text-center text-xxl-start">
                    <h1 class="display-3 fw-bolder"><span class="text-gradient d-inline">Hello, I am Alamgir</span></h1>
                    <div class="fs-3 fw-light  text-muted"><span class="text-gradient d-inline">Backend Developer</span></div>
                    <div class="fs-5 fw-light text-muted mb-5">PHP, Laravel, MySQL, JavaScript, BootStrap, CSS, HTML</div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- About Section-->
<section class="bg-light py-5 about">
    <div class="container px-5">
        <div class="col-12 text-center">
            <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">About Me</span></h2>
            <p class="lead fw-light mb-4">Web Design and Development Is My Passion</p>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-md-5 col-sm-12 my-5 text-start">
                <img src="{{ asset('img/Profile.jpg') }}" alt="">
            </div>
            <div class="col-md-5 col-sm-12 my-5">
                <p class="text-muted">I'm working with Web Design and Back End Web Development from 2018. I have 5 years of working experience with HTML, CSS, Object-Oriented PHP and MySQL. I am also experienced in JavaScript and Laravel framework.</p>
                <p class="text-muted">I always believe in fresh coding and clear communication. My client's satisfaction is the core target for me. I follow the best coding practice and always love to make optimized and secured code.</p>
                <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder mt-5 float-end" href="/about">More</a>
            </div>
        </div>
    </div>
</section>

<!-- Service Section-->
<section class="py-5" id="Service">
    <div class="container">
        <div class="col-12 text-center">
            <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">What Services I'm Providing</span></h2>
        </div>

        <div class="row justify-content-center my-5">
            <div class="col-md-5 col-lg-5 col-12 m-2">
                <div class="card">
                <div class="card-body">
                    <i class="fab fa-html5 bg-primary text-white p-2 mb-2 rounded fs-1"></i>
                    <h5 class="card-title">Figma To HTML5</h5>
                    <p class="card-text">If you need to convert an outstanding Figma design to your website, I can convert the design to a responsive html template for you</p>
                </div>
                </div>
            </div>

            <div class="col-md-5 col-lg-5 col-12 m-2">
                <div class="card">
                <div class="card-body">
                    <i class="fas fa-mobile bg-primary text-white p-2 mb-2 rounded fs-1"></i>
                    <h5 class="card-title">Responsive Web Design</h5>
                    <p class="card-text">If you are looking for a fully responsive, pixel perfect design, I can make a fully responsive site for any devices with better performance</p>
                </div>
                </div>
            </div>

            <div class="col-md-5 col-lg-5 col-12 m-2">
                <div class="card">
                <div class="card-body">
                    <i class="fab fa-php bg-primary text-white p-2 mb-2 rounded fs-1"></i>
                    <h5 class="card-title">Web Development With PHP</h5>
                    <p class="card-text">If you need to make any website dynamic or need web application with custom functionality, I will give your idea a reality</p>
                </div>
                </div>
            </div>

            <div class="col-md-5 col-lg-5 col-12 m-2">
                <div class="card">
                <div class="card-body">
                    <i class="fab fa-laravel bg-primary text-white p-2 mb-2 rounded fs-1"></i>
                    <h5 class="card-title">Web Development With Laravel</h5>
                    <p class="card-text">If you want a secured and robust website or web application with amazing custom functionality, I will implement it for you using Laravel framework</p>
                </div>
                </div>
            </div>
        </div>
      </div>
</section>

<!-- Project Section-->
<section class="py-5 portfolio">
    <div class="container">
        <div class="col-12 text-center">
            <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">My Portfolio</span></h2>
        </div>

        <div class="row justify-content-center my-5">
            <!-- Project Card 1-->
            <div class="col-md-4 col-lg-4 col-12">
                <a href="https://srsexpress.netlify.app/" target="_blank" class="text-decoration-none">
                <div class="card overflow-hidden shadow rounded-4 border-0">
                    <div class="overflow-hidden" style="height: 200px">
                        <img class="w-100" src="{{ asset('img/srs.PNG') }}" alt="..." />
                    </div>
                    <div class="card-body p-0">
                        <div class="p-5">
                            <h2 class="fw-bolder">SRS Express</h2>
                            <p>This is a Delivery service website made with Using HTML, CSS, JavaScript</p>
                        </div>
                    </div>
                </div>
                </a>
            </div>

            <!-- Project Card 2-->
            <div class="col-md-4 col-lg-4 col-12">
                <a href="https://swpneranwara.netlify.app/" target="_blank" class="text-decoration-none">
                <div class="card overflow-hidden shadow rounded-4 border-0">
                    <div class="overflow-hidden" style="height: 200px">
                        <img class="w-100" src="{{ asset('img/swp.PNG') }}" alt="..." />
                    </div>
                    <div class="card-body p-0">
                        <div class="p-5">
                            <h2 class="fw-bolder">SWPNER Anowara</h2>
                            <p>This is a dynamic Website for Swpner Anowra Foundation which built using HTML, CSS, JavaScript, PHP and MySQL which is completely made by me.</p>
                        </div>
                    </div>
                </div>
                </a>
            </div>

            <!-- Project Card 3-->
            <div class="col-md-4 col-lg-4 col-12">
                <a href="https://jskay.netlify.app/" target="_blank" class="text-decoration-none">
                    <div class="card overflow-hidden shadow rounded-4 border-0">
                        <div class="overflow-hidden" style="height: 200px">
                            <img class="w-100" src="{{ asset('img/portfolio.PNG') }}" alt="..." />
                        </div>
                        <div class="card-body p-0">
                            <div class="p-5">
                                <h2 class="fw-bolder">Portfolio Website</h2>
                                <p>This is a Portfolio Website made for me practice purpose.</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="text-center">
            <a class="btn btn-primary btn-lg px-5 py-3 fs-6 fw-bolder mt-2 m-auto" href="/project">All Portfolio</a>
        </div>
    </div>
</section>

<!-- Contact Section-->
<section class="py-5">
    <div class="container">
        <div class="col-12 text-center">
            <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">Feel free to Connect</span></h2>
        </div>

        <div class="row justify-content-center my-5">
            <div class="col-sm-12 col-md-6 col-lg-6 col-12">
                <form id="contactForm">
                    <!-- Name input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="name" type="text" placeholder="Enter your name..."/>
                        <label for="name">Full name</label>
                    </div>
                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="email" type="email" placeholder="name@example.com" />
                        <label for="email">Email address</label>
                    </div>

                    <!-- Message input-->
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem"></textarea>
                        <label for="message">Message</label>
                    </div>
                    <!-- Form Button-->
                    <div class="form-floating d-grid mb-3">
                        <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


@endsection