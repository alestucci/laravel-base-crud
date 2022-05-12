<header class="text-center my-5">
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="{{ route('comics.index') }}"
                class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <img src="https://www.dccomics.com/sites/all/themes/dc_comics_bp/logo.png" alt="DC Comics"
                    class="bi me-2" height="40">
            </a>

            <ul class="nav nav-pills">
                <li class="nav-item"><a href="{{ route('homePage') }}" class="nav-link active"
                        aria-current="page">Home</a></li>
                <li class="nav-item"><a href="{{ route('comics.index') }}" class="nav-link">Fumetti</a></li>
                <li class="nav-item"><a href="{{ route('comics.create') }}" class="nav-link">Nuovo</a></li>
                <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link">About</a></li>
            </ul>
        </header>
    </div>
</header>