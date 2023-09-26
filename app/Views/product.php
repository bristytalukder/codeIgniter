<?= $this->extend('nav.php') ?>

<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-3">
            <?= $this->include('sidebar') ?>
        </div>
        <div class="col-9">
        <?= $this->include('slide') ?>
        </div>
    </div>
</div>
<?= $this->include('footer') ?>


<?= $this->endSection() ?>