<?= $this->extend('layout/layout') ?>

<?= $this->section('content') ?>
<h1>
    Data Film
</h1>
<div class="row">
    <?php foreach ($semuafilm as $film) : ?>
        <div class="col-md-3">
            <div class="card">
                <img src="/assets/cover/<?= $film["cover"] ?>" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"><?= $film["nama_film"] ?></h5>
                    <p class="card-text"><?= $film["nama_genre"] ?> || <?= $film["duration"] ?></p>
                    <a href="#" class="btn btn-info">Detail</a>
                    <a href="/film/update/<?= $film["id"]; ?>" class="btn btn-success">Update</a>
                    <a class="btn btn-danger" onclick="return confirmDelete()">Delete</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<!-- tambahkan dari sini  -->
<script>
    function confirmDelete() {
        swal({
                title: "Apakah Anda yakin?",
                text: "setelah dihapus! data anda akan benar-benar hilang!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {

                    window.location.href = "/film/destroy/<?= $film['id'] ?>";

                } else {
                    swal("Data tidak jadi dihapus!");
                }
            });
    }
</script>

<?= $this->endSection() ?>