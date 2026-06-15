<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
    <div class="container">

        <!-- LOGO / BRAND -->
        <a class="navbar-brand fw-bold" href="{{ route('homepage') }}">
            ArtSite
        </a>

        <!-- HAMBURGER -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- MENU -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('homepage') }}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact.us') }}">Contattaci</a>
                </li>

                <!-- DROPDOWN CON IMMAGINE -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle d-flex align-items-center"
                        href="#"
                        role="button"
                        data-bs-toggle="dropdown">

                        <img src="/media/LOGO.jpg"
                            class="rounded-circle me-2"
                            width="40"
                            height="40"
                            alt="logo">

                        Menu
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end text-center">

                        <li>
                            <a class="dropdown-item" href="#">Profilo</a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="#">I tuoi quadri</a>
                        </li>

                    
                    
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>