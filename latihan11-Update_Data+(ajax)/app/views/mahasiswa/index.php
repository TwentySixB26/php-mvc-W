<div class="container mt-5">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash() ; ?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data
            </button>
            <br><br>

            <h3>Daftar mahasiswa</h3>
            <ul class="list-group">
                <?php foreach($data["mhs"] as $mhs) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <?php echo $mhs["nama"] ?>
                        <div>
                            <a href="<?php echo BOOTSRAP ?>Mahasiswa/detail/<?php echo $mhs['id'] ?>" class="badge bg-primary text-decoration-none">Detail</a>
                            <a href="<?php echo BOOTSRAP ?>Mahasiswa/ubah/<?php echo $mhs['id'] ?>" class="badge bg-success text-decoration-none tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?php echo $mhs['id'] ?>">Ubah</a>
                            <a href="<?php echo BOOTSRAP ?>Mahasiswa/hapus/<?php echo $mhs['id'] ?>" class="badge bg-danger text-decoration-none"  onclick="confirm ('Yakin?')">Hapus</a>
                        </div>
                    </li>
                <?php endforeach ;  ?>
            </ul>
            
            
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="<?php echo BOOTSRAP ?>Mahasiswa/tambah" method="post">
                <input type="hidden" name="id" id="id">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama : </label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="">
                </div>

                <div class="mb-3">
                    <label for="nrp" class="form-label">NRP : </label>
                    <input type="number" class="form-control" id="nrp" name="nrp" placeholder="">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email : </label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="">
                </div>

                <div class="mb-3">
                    <label for="jurusan" class="form-label">Jurusan : </label>

                    <select class="form-select" name="jurusan" id="jurusan" aria-label="Default select example">
                        <option value="Teknik informatika">Teknik informatika</option>
                        <option value="Teknik industri">Teknik industri</option>
                        <option value="Teknik sipil">Teknik sipil</option>
                    </select>
                </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
        </div>
    </div>
</div>