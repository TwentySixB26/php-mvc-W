<div class="container">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?php echo $data["mhs"]["nama"] ?></h5>
            <p class="card-text">
                <?php echo $data["mhs"]["nrp"] ?>
            </p>
            <p class="card-text">
            <?php echo $data["mhs"]["jurusan"] ?>
            </p>
            <a href="<?php echo BOOTSRAP  ?>/mahasiswa" class="card-link">Kembali</a>
        </div>
    </div>
</div>