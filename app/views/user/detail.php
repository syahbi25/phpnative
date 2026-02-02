<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4>Detail User</h4>
                </div>
                <div class="card-body">
                    <?php if($data['user']): ?>
                        <table class="table">
                            <tr>
                                <th width="30%">ID</th>
                                <td><?= $data['user']['id']; ?></td>
                            </tr>
                            <tr>
                                <th>Nama</th>
                                <td><?= $data['user']['nama']; ?></td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td><?= $data['user']['email']; ?></td>
                            </tr>
                            <tr>
                                <th>Telepon</th>
                                <td><?= $data['user']['telepon']; ?></td>
                            </tr>
                        </table>
                        <a href="<?= BASEURL; ?>/user" class="btn btn-primary">Kembali</a>
                    <?php else: ?>
                        <div class="alert alert-danger">Data tidak ditemukan!</div>
                        <a href="<?= BASEURL; ?>/user" class="btn btn-primary">Kembali</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
