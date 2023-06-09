<nav class="navbar navbar-expand-lg bg-danger navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="/"><i class="bi bi-house-door-fill"></i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link {{ $title === 'Hospital' ? 'active' : '' }}"
                    aria-current="page"href="/">Hospital</a>
                <a class="nav-link {{ $title === 'Patient' ? 'active' : '' }}" aria-current="page"
                    href="/patient">Patient</a>
            </div>
        </div>
    </div>
</nav>
