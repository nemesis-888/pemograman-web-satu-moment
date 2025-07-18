<?= $this->include('templates/header', ['title' => 'Portfolio']) ?>

<h1>Our Portfolio</h1>
<p>Explore our collection of work across different photography genres.</p>

<div class="row mt-4">
    <?php for($i=1; $i<=6; $i++): ?>
    <div class="col-md-4 mb-4">
        <div class="card">
            <img src="/assets/images/portfolio<?= $i ?>.jpg" class="card-img-top" alt="Portfolio <?= $i ?>">
            <div class="card-body">
                <h5 class="card-title">Project <?= $i ?></h5>
                <p class="card-text">Sample description of the project.</p>
            </div>
        </div>
    </div>
    <?php endfor; ?>
</div>

<?= $this->include('templates/footer') ?>