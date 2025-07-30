    <nav class="navbar navbar-expand-lg navbar-bg-color">
        <div class="container">
            <a class="navbar-brand title" href="{{ route('books.index') }}">Bookeeper</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end text-uppercase" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('books.index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contattaci</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
