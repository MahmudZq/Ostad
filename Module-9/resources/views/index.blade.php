@extends('layouts.app')
@section('pagecontent')
<!-- Banner Section-->
<header class="py-5">
    <div class="container px-5 pb-5">
        <div class="row gx-5 align-items-center">
            <div class="col-xxl-5">
                <!-- Header text content-->
                <div class="text-center text-xxl-start">
                    <div class="badge bg-gradient-primary-to-secondary text-white mb-4"><div class="text-uppercase">Design &middot; Development</div></div>
                    <h1 class="display-3 fw-bolder"><span class="text-gradient d-inline">Hello, I am Munaim</span></h1>
                    <div class="fs-3 fw-light text-muted"><span class="text-gradient d-inline">Backend Developer</span></div>
                    <div class="fs-5 fw-light text-muted mb-5">PHP, Laravel, MySQL, JavaScript, BootStrap, CSS, HTML</div>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                        <a target="_blank" class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="https://drive.google.com/file/d/1fhu8T2ZeWyZIHaQinActkTzC1WQse8JQ/view">Resume</a>
                        <a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder" href={{ url('/Projects') }}>Projects</a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-7">
                <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                    <div class="profile">
                        <img class="profile-img" src="{{ asset('images/profile.png') }}" alt="profile" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- About Section-->
<section class="bg-light py-5">
    <div class="container px-5">
        <div class="col-12 text-center">
            <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">About Me</span></h2>
            <p class="lead fw-light mb-4">Web Design and Development Is My Passion</p>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-md-5 col-sm-12 my-5 text-start">
                <img src="{{ asset('images/profile.png') }}" alt="">
            </div>
            <div class="col-md-5 col-sm-12 my-5">
                <p class="text-muted">I'm working with Web Design and Back End Web Development from 2020. I have 3 years of working experience with HTML, CSS, Object-Oriented PHP and MySQL. I am also experienced in JavaScript and Laravel framework.</p>
                <p class="text-muted">I always believe in fresh coding and clear communication. My client's satisfaction is the core target for me. I follow the best coding practice and always love to make optimized and secured code.</p>
                <div class="d-flex fs-2 gap-4 mt-5">
                    <a class="text-gradient" href="https://linkedin.com/in/munaimpro" target="_blank"><i class="fab fa-linkedin"></i></a>
                    <a class="text-gradient" href="https://github.com/munaimpro" target="_blank"><i class="fab fa-github"></i></a>
                    <a class="text-gradient" href="https://instagram.com/munaimpro" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
                <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder mt-5 float-end" href={{ url('/About') }}>More</a>
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
<section class="py-5">
    <div class="container">
        <div class="col-12 text-center">
            <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">My Portfolio</span></h2>
        </div>

        <div class="row justify-content-center my-5">
            <!-- Project Card 1-->
            <div class="col-md-4 col-lg-4 col-12">
                <a href="https://munaimpro.github.io/bsc_house_rental/" target="_blank" class="text-decoration-none">
                <div class="card overflow-hidden shadow rounded-4 border-0">
                    <div class="overflow-hidden" style="height: 200px">
                        <img class="w-100" src="{{ asset('images/houserental.png') }}" alt="..." />
                    </div>
                    <div class="card-body p-0">
                        <div class="p-5">
                            <h2 class="fw-bolder">House Rental System</h2>
                            <p>This is a Online House Rental System built using HTML, CSS, JavaScript, PHP and MySQL which is completely made by me.</p>
                        </div>
                    </div>
                </div>
                </a>
            </div>

            <!-- Project Card 2-->
            <div class="col-md-4 col-lg-4 col-12">
                <a href="https://munaimpro.github.io/TechBlog/" target="_blank" class="text-decoration-none">
                <div class="card overflow-hidden shadow rounded-4 border-0">
                    <div class="overflow-hidden" style="height: 200px">
                        <img class="w-100" src="{{ asset('images/blog.png') }}" alt="..." />
                    </div>
                    <div class="card-body p-0">
                        <div class="p-5">
                            <h2 class="fw-bolder">Technology Blog</h2>
                            <p>This is a Technology Blog website made with Laravel. Fully featured blog website with admin panel</p>
                        </div>
                    </div>
                </div>
                </a>
            </div>

            <!-- Project Card 3-->
            <div class="col-md-4 col-lg-4 col-12">
                <a href="https://munaimpro.github.io/OnlineStoreBD/" target="_blank" class="text-decoration-none">
                    <div class="card overflow-hidden shadow rounded-4 border-0">
                        <div class="overflow-hidden" style="height: 200px">
                            <img class="w-100" src="{{ asset('images/ecommerce.png') }}" alt="..." />
                        </div>
                        <div class="card-body p-0">
                            <div class="p-5">
                                <h2 class="fw-bolder">Online Store BD</h2>
                                <p>This is an E-commerce website made using  HTML, CSS, JavaScript, PHP and MySQL. Fully featured blog website with admin panel</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="text-center">
            <a class="btn btn-primary btn-lg px-5 py-3 fs-6 fw-bolder mt-2 m-auto" href={{ url('/Projects') }}>All Portfolio</a>
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
                    <!-- Phone number input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890"/>
                        <label for="phone">Phone number</label>
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