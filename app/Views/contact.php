<?= $this->extend('templates/main') ?>

<?= $this->section('content') ?>
<div class="container py-5">
    <h1 class="mb-4"><?= $title ?? 'Contact Us' ?></h1>

    <!-- Notifikasi Sukses/Error -->
    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success alert-dismissible fade show">
            <?= session()->getFlashdata('success') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('errors')): ?>
        <div class="alert alert-danger alert-dismissible fade show">
            <h5 class="alert-heading">Terjadi Kesalahan!</h5>
            <ul class="mb-0">
                <?php foreach (session()->getFlashdata('errors') as $error): ?>
                    <li><?= $error ?></li>
                <?php endforeach ?>
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    <?php endif; ?>

    <!-- Form Contact -->
    <div class="row">
        <div class="col-md-8 mx-auto">
            <?= form_open('contact/send', ['class' => 'needs-validation', 'novalidate' => '']) ?>
                <?= csrf_field() ?>

                <div class="mb-3">
                    <label for="name" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control <?= session('errors.name') ? 'is-invalid' : '' ?>" 
                           id="name" name="name" value="<?= old('name') ?>" required>
                    <div class="invalid-feedback">
                        <?= session('errors.name') ?? 'Harap isi nama Anda' ?>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control <?= session('errors.email') ? 'is-invalid' : '' ?>" 
                           id="email" name="email" value="<?= old('email') ?>" required>
                    <div class="invalid-feedback">
                        <?= session('errors.email') ?? 'Harap isi email yang valid' ?>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label">Pesan</label>
                    <textarea class="form-control <?= session('errors.message') ? 'is-invalid' : '' ?>" 
                              id="message" name="message" rows="5" required><?= old('message') ?></textarea>
                    <div class="invalid-feedback">
                        <?= session('errors.message') ?? 'Pesan minimal 10 karakter' ?>
                    </div>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-lg">
                        <i class="fas fa-paper-plane me-2"></i> Kirim Pesan
                    </button>
                </div>
            <?= form_close() ?>
        </div>
    </div>
</div>
<?= $this->endSection() ?>