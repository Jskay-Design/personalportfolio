
@extends('layout.app')

@section('content')


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


@endsection
