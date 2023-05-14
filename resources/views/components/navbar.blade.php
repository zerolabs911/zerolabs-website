<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="" class="navbar-brand p-0">
        <h1 class="m-0"><i class="fa fa-search me-2"></i>Zero<span class="fs-5">Labs911</span></h1>
        <!-- <img src="img/logo.png" alt="Logo"> -->
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="/" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Homepage</a>
            <a href="/about-us" class="nav-item nav-link {{ Request::is('about-us') ? 'active' : '' }}">About Us</a>
            <a href="/our-services" class="nav-item nav-link {{ Request::is('our-services') ? 'active' : '' }}">Our
                Services</a>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu m-0">
                    <a href="team.html" class="dropdown-item">Article</a>
                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                </div>
            </div>
        </div>
        <button type="button" class="btn text-secondary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i
                class="fa fa-search"></i></button>
        <a href="/contact-us" class="btn btn-secondary text-light rounded-pill py-2 px-4 ms-3 {{ Request::is('contact-us') ? 'active' : '' }}">Contact Us</a>
    </div>
</nav>