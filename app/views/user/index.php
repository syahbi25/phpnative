<div class="container mt-4">
    
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data User
            </button>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <form action="<?= BASEURL; ?>/user/search" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari user..." name="keyword" id="keyword" autocomplete="off">
                    <button class="btn btn-outline-primary" type="submit" id="tombolCari">Cari</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <h3>Daftar User</h3>
            
            <?php if(empty($data['users'])): ?>
                <div class="alert alert-info">Tidak ada data user.</div>
            <?php else: ?>
                <ul class="list-group">
                    <?php foreach( $data['users'] as $user ) : ?>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <strong><?= $user['nama']; ?></strong><br>
                                    <small class="text-muted"><?= $user['email']; ?> | <?= $user['telepon']; ?></small>
                                </div>
                                <div>
                                    <a href="<?= BASEURL; ?>/user/detail/<?= $user['id']; ?>" class="badge bg-primary text-decoration-none">detail</a>
                                    <a href="<?= BASEURL; ?>/user/update/<?= $user['id']; ?>" class="badge bg-warning text-decoration-none tampilModalUpdate" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $user['id']; ?>">update</a>
                                    <a href="<?= BASEURL; ?>/user/delete/<?= $user['id']; ?>" class="badge bg-danger text-decoration-none" onclick="return confirm('yakin?');">delete</a>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Tambah Data User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/user/add" method="post">
                    <input type="hidden" name="id" id="id">
                    
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                    <div class="mb-3">
                        <label for="telepon" class="form-label">Telepon</label>
                        <input type="text" class="form-control" id="telepon" name="telepon" required>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan Data</button>
                </form>
            </div>
        </div>
    </div>
</div>
