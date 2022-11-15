<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="/">Kemobyte</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/" style="<?= urlIs('/') ? 'background:white;border-radius:50px;color:black' : ''; ?>">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/about" style="<?= urlIs('/about') ? 'background:white;border-radius:50px;color:black' : ''; ?>">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contact" style="<?= urlIs('/contact') ? 'background:white;border-radius:50px;color:black' : ''; ?>">Contact Us</a>
            </li>
        </ul>
    </div>
</nav>