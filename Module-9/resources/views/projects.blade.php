@extends('layouts.app')
@section('pagecontent')
            <!-- Projects Section-->
            <section class="py-5">
                <div class="container px-5 mb-5">
                    <div class="text-center mb-5">
                        <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projects</span></h1>
                    </div>
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-11 col-xl-9 col-xxl-8">
                            <!-- Project Card 1-->
                            <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                <div class="card-body p-0">
                                    <img class="w-100" src="{{ asset('images/photogallery_with_multiple_theme.png') }}" alt="..." />
                                    <div class="p-5 w-75">
                                        <h2 class="fw-bolder">Multi-style Theme Photo Gallery</h2>
                                        <p>This is an online image gallery with multi-style theme. This web application was built using Object-oriented PHP and MySQL</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Project Card 2-->
                            <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                <div class="card-body p-0">
                                    <img class="w-100" src="{{ asset('images/houserental.png') }}" alt="..." />
                                    <div class="p-5 w-75">
                                        <h2 class="fw-bolder">House Rental System</h2>
                                        <p>This is a Online House Rental System built using HTML, CSS, JavaScript, PHP and MySQL which is completely made by me.</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Project Card 3-->
                            <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                <div class="card-body p-0">
                                    <img class="w-100" src="{{ asset('images/personal_portfolio.png') }}" alt="..." />
                                    <div class="p-5 w-75">
                                        <h2 class="fw-bolder">Personal Website</h2>
                                        <p>This is a Personal website made with HTML5, CSS3, PHP OOP PDO and MySQL. Stylish personal website with admin panel</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Project Card 4-->
                            <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                <div class="card-body p-0">
                                    <img class="w-100" src="{{ asset('images/ecommerce.png') }}" alt="..." />
                                    <div class="p-5 w-75">
                                        <h2 class="fw-bolder">Online Store BD</h2>
                                        <p>This is an E-commerce website made using  HTML, CSS, JavaScript, PHP and MySQL. Fully featured blog website with admin panel</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Project Card 5-->
                            <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                <div class="card-body p-0">
                                    <img class="w-100" src="{{ asset('images/blog.png') }}" alt="..." />
                                    <div class="p-5 w-75">
                                        <h2 class="fw-bolder">Technology Blog</h2>
                                        <p>This is a Technology Blog website made with Laravel. Fully featured blog website with admin panel</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Call to action section-->
            <section class="py-5 bg-gradient-primary-to-secondary text-white">
                <div class="container px-5 my-5">
                    <div class="text-center">
                        <h2 class="display-4 fw-bolder mb-4">Let's build something together</h2>
                        <a class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder" href="{{ url('Contact') }}">Contact me</a>
                    </div>
                </div>
            </section>
@endsection