<?= $this->include('templates/header') ?>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1>Selamat Datang Di Website Kami, Satu Moment</h1>
                <p>Abadikan setiap moment dengan jasa yang profesional</p>
                <a href="/products" class="btn btn-primary"> Produk Kami</a>
            </div>
            <div class="col-md-6">
                <img src="/logo.jpg" alt="Hero Image" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<!-- Products Section -->
<section class="products-section py-5">
    <div class="container">
        <h2 class="text-center mb-5">Produk Unggulan Kami</h2>
        <div class="row">

            <!-- Tambahan produk khusus -->
            <div class="col-md-4 mb-4">
                <div class="card product-card">
                    <img src="/product/1.jpeg" class="card-img-top" alt="Model Photography">
                    <div class="card-body">
                        <h5 class="card-title">Kids Portrait Photography</h5>
                        <p class="card-text">Pemotretan anak dengan konsep natural dan ekspresi spontan. Cocok untuk keperluan keluarga, katalog sekolah, atau dokumentasi masa kecil yang berkesan.</p>
                    </div>
                </div>
            </div>
            <!-- Tambahan produk khusus -->
            <div class="col-md-4 mb-4">
                <div class="card product-card">
                    <img src="/product/2.jpeg" class="card-img-top" alt="Model Photography">
                    <div class="card-body">
                        <h5 class="card-title">Urban Architecture Photography</h5>
                        <p class="card-text">Pemotretan arsitektur kota dengan komposisi estetis dan profesional. Cocok untuk katalog properti, dokumentasi pembangunan, atau kebutuhan branding real estate.</p>
                    </div>
                </div>
            </div>
            <!-- Tambahan produk khusus -->
            <div class="col-md-4 mb-4">
                <div class="card product-card">
                    <img src="/product/3.jpeg" class="card-img-top" alt="Model Photography">
                    <div class="card-body">
                        <h5 class="card-title">Mood & Conceptual Photography</h5>
                        <p class="card-text">Menangkap ekspresi emosional dan suasana hati dalam frame visual yang kuat. Cocok untuk editorial, seni fotografi, dan branding penuh makna.</p>
                    </div>
                </div>
            </div>
            <!-- Tambahan produk khusus -->
            <div class="col-md-4 mb-4">
                <div class="card product-card">
                    <img src="/product/4.jpeg" class="card-img-top" alt="Model Photography">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text">Sesi pemotretan profesional dengan model untuk portfolio atau kebutuhan brand.</p>
                    </div>
                </div>
            </div>

    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials-section py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5">Ulasan</h2>
        <div class="row">
            <?php foreach ($testimonials as $testimonial): ?>
            <div class="col-md-4 mb-4">
                <div class="card testimonial-card">
                    <div class="card-body">
                        <div class="rating mb-3">
                            <?php for ($i = 0; $i < $testimonial['rating']; $i++): ?>
                                <i class="fas fa-star text-warning"></i>
                            <?php endfor; ?>
                        </div>
                        <p class="card-text">"<?= $testimonial['comment'] ?>"</p>
                        <h6 class="card-subtitle">- <?= $testimonial['name'] ?></h6>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?= $this->include('templates/footer') ?>