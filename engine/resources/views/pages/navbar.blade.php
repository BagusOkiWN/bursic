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
                        <li class="nav-item search-bar">
                            <form action="{{ route('cars') }}" method="GET" class="form-inline my-2 my-lg-0">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search by name" name="search" value="{{ request('search') }}">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                            </form>
                        </li>
                        <li class="nav-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="nav-item"><a href="{{ route('cars') }}">Cars</a></li>
                        <li class="nav-item dropdown">
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
                        <li class="nav-item"><a href="{{ route('contact') }}">Contact</a></li>

                        <!-- User Authentication Section -->
                        <li class="nav-item">
                            <div class="row">
                                @if(empty(auth()->user()->name))
                                <div class="col-lg-12 text-center">
                                    <a href="{{ route('auth') }}" class="btn btn-success">Masuk</a>
                                </div>
                                @endif

                                @if(!empty(auth()->user()->name))
                                <div class="col-lg-12 text-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            {{ auth()->user()->name }}
                                        </button>
                                        <div class="dropdown-menu">
                                            <a href="{{ route('form-mobil') }}" class="btn btn-danger">Jual Mobil</a>
                                            <a class="dropdown-item" href="{{ route('logout') }}">Log Out</a>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </li>

                    </ul>
                    <!-- ***** Menu End ***** -->

                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                </nav>
            </div>
        </div>
    </div>
</header>