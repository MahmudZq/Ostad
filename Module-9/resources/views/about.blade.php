@extends('layouts.app')
@section('pagecontent')
            <!-- Projects Section-->
            <section class="py-5">
                <div class="container px-5 mb-5">
                    <div class="text-center mb-5">
                        <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">About Me</span></h1>
                    </div>
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-6 col-xl-9 col-xxl-8 col-md-6">
                            <div class="about-title">
                                <h2>Backend Developer</h2>
                            </div>
                            <div class="py-3 about-text">
                                <p>I'm working with Web Design and Back End Web Development from 2020. I have 3 years of working experience with HTML, CSS, Object-Oriented PHP and MySQL. I am also experienced in JavaScript and Laravel framework.</p>
                                
                                <p>I completed some projects like blog website, e-commerce website, and some beneficial web applications using the technologies mentioned.</p>
                                
                                <p>Completing these projects with efficient and secured code as well as productivity is a great pleasure to me. I always try to do something special with coding. Its a great joy to me. </p>

                                <p>I always believe in fresh coding and clear communication. My client's satisfaction is the core target for me. I follow the best coding practice and always love to make optimized and secured code.</p>
                            </div>
                            <a target="_blank" class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder mt-3" href="https://drive.google.com/file/d/1fhu8T2ZeWyZIHaQinActkTzC1WQse8JQ/view">Watch My Resume</a>
                        </div>

                        <div class="col-lg-6 col-xl-9 col-xxl-8 mt-5 col-md-6">
                            <!-- Experience Section-->
                            <section>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <h2 class="text-primary fw-bolder mb-0">Experience</h2>
                                </div>
    
                                <!-- Experience Card -->
                                <div class="card shadow border-0 rounded-4 mb-5">
                                    <div class="card-body p-5">
                                        <div class="row align-items-center gx-5">
                                            <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                                <div class="bg-light p-4 rounded-4">
                                                    <div class="text-primary fw-bolder mb-2">2022 - Present</div>
                                                    <div class="small fw-bolder">Freelance Web Developer</div>
                                                    <div class="small text-muted">Upwork</div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8"><div>I am working as a freelance web developer, specially backend developer in Upwork since February 2022</div></div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <!-- Education Section-->
                            <section>
                                <h2 class="text-secondary fw-bolder mb-4">Education</h2>
                                <!-- Education Card 1-->
    
                                <div class="card shadow border-0 rounded-4 mb-5">
                                    <div class="card-body p-5">
                                        <div class="row align-items-center gx-5">
                                            <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                                <div class="bg-light p-4 rounded-4">
                                                    <div class="text-secondary fw-bolder mb-2">2015 - 2017</div>
                                                    <div class="mb-2">
                                                        <div class="small fw-bolder">Chittagong Port Authority College</div>
                                                        <div class="small text-muted">Chittagong, Bangladesh</div>
                                                    </div>
                                                    <div class="fst-italic">
                                                        <div class="small text-muted">Department of Science</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8"><div>I completed my Heigher Secondary School study from Chittagong Port Authority College, Bangar, Chattogram, Bangladesh in 2017</div></div>
                                        </div>
                                    </div>
                                </div>
    
                                <!-- Education Card 2-->
                                <div class="card shadow border-0 rounded-4 mb-5">
                                    <div class="card-body p-5">
                                        <div class="row align-items-center gx-5">
                                            <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                                <div class="bg-light p-4 rounded-4">
                                                    <div class="text-secondary fw-bolder mb-2">2017 - 2022</div>
                                                    <div class="mb-2">
                                                        <div class="small fw-bolder">Southern University, Bangladesh</div>
                                                        <div class="small text-muted">Chittagong, Bangladesh</div>
                                                    </div>
                                                    <div class="fst-italic">
                                                        <div class="small text-muted">B.Sc in Computer Science & Information Technology</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8"><div>I completed my Bachelor of Science in Computer Science from Soutern University, Bangladesh in 2022</div></div>
                                        </div>
                                    </div>
                                </div>
    
                            </section>
                            <!-- Divider-->
                            <div class="pb-5"></div>
                            <!-- Skills Section-->
                            <section>
                                <!-- Skillset Card-->
                                <div class="card shadow border-0 rounded-4 mb-5">
                                    <div class="card-body p-5">
                                        <!-- Professional skills list-->
                                        <div class="mb-5">
                                            <div class="d-flex align-items-center mb-4">
                                                <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-tools"></i></div>
                                                <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Professional Skills</span></h3>
                                            </div>
                                            <div class="row row-cols-1 row-cols-md-3 mb-4">
                                                <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Web Design</div></div>
                                                <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Responsive Design</div></div>
                                                <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">PSD to HTML</div></div>
                                            </div>
                                            <div class="row row-cols-1 row-cols-md-3">
                                                <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Backend Web Development</div></div>
                                                <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Web Application Development</div></div>
                                            </div>
                                        </div>
                                        <!-- Languages list-->
                                        <div class="mb-0">
                                            <div class="d-flex align-items-center mb-4">
                                                <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-code-slash"></i></div>
                                                <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Languages</span></h3>
                                            </div>
                                            <div class="row row-cols-1 row-cols-md-3 mb-4">
                                                <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">HTML</div></div>
                                                <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">CSS</div></div>
                                                <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">JavaScript</div></div>
                                            </div>
                                            <div class="row row-cols-1 row-cols-md-3">
                                                <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">PHP</div></div>
                                                <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Bootstrap</div></div>
                                                <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Laravel</div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
@endsection