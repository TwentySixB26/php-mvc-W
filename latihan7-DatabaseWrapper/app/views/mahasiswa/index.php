<div class="container">
    <div class="row">
        <div class="col-6">
            <h3>Daftar mahasiswa</h3>
            <ul class="list-group">
                <?php foreach($data["mhs"] as $mhs) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <?php echo $mhs["nama"] ?>
                        <a href="<?php echo BOOTSRAP ?>/mahasiswa/detail/<?php echo $mhs['id'] ?>" class="badge bg-primary">Detail</a>
                    </li>
                <?php endforeach ;  ?>
            </ul>
            
            
        </div>
    </div>
</div>