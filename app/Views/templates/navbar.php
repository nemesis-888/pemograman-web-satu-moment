<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="/logo.jpg" alt="Logo" height="40">
            <h1>Satu Moment</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link <?= current_url() == site_url('/') ? 'active' : '' ?>" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= current_url() == site_url('/products') ? 'active' : '' ?>" href="/products">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= current_url() == site_url('/about') ? 'active' : '' ?>" href="/about">Tentang Kami</a>
                </li>
            </ul>
        </div>
    </div>
</nav>