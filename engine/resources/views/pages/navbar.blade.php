<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{ route('home') }}" class="logo">Bur<em>Sic</em></a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('cars') }}">Cars</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">About</a>

                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('about') }}">About Us</a>
                                <!-- <a class="dropdown-item" href="{{ route('blog') }}">Blog</a> -->
                                <a class="dropdown-item" href="{{ route('team') }}">Team</a>
                                <a class="dropdown-item" href="{{ route('testimonials') }}">Testimonials</a>
                                <a class="dropdown-item" href="{{ route('faq') }}">FAQ</a>
                                <!-- <a class="dropdown-item" href="{{ route('terms') }}">Terms</a> -->
                            </div>
                        </li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>