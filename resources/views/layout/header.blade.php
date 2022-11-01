<nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
        <a class="navbar-brand mt-3 mb-3 " href="#" style="font-size:20pt">LOGO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    @if ($menu == 'home')
                        <a class="nav-link active" aria-current="page" style="font-size:15pt" href="/">Home</a>
                    @else
                        <a class="nav-link inactive" style="font-size:15pt"href="/">Home</a>
                    @endif

                    @if ($menu == 'about')
                        <a class="nav-link active" aria-current="page" style="font-size:15pt" href="/about">About</a>
                    @else
                        <a class="nav-link inactive" style="font-size:15pt" href="/about">About</a>
                    @endif

                </div>
            </div>
        </div>
    </div>
</nav>
