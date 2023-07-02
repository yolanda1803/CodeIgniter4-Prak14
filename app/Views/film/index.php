<?= $this->extend('layout/layout') ?>
<?= $this->section('content') ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">

                <div class="row">
                    <div class="col-md-6">
                        <h1>Semua film</h1>
                    </div>
                    <div class="col-md-6 text-end">
                        <a href="/film/add" class="btn btn-dark">Tambahkan Data Film</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th>No.</th>
                        <th>Gambar</th>
                        <th>Nama Film</th>
                        <th>Genre</th>
                        <th>Duration</th>
                        <th>Action</th>
                    </tr>
                    <?php $i = 1;
                    foreach ($data_film as $film) :  ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><img width="50px" src="/assets/cover/<?= $film["cover"]; ?>"></td>
                            <td><?= $film["nama_film"] ?></td>
                            <td><?= $film["nama_genre"] ?></td>
                            <td><?= $film["duration"] ?></td>
                            <td>
                                <a href="/film/update/<?= $film["id"]; ?>" class="btn btn-success">Update</a>
                                <a class="btn btn-danger" onclick="return confirmDelete()">Delete</a>
                            </td>
                        </tr>
                        
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>