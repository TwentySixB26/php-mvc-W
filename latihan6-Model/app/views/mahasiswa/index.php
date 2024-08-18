<div class="container">
    <div class="row">
        <div class="col-6">
            <h3>Daftar mahasiswa</h3>
            <?php foreach($data["mhs"] as $mhs) : ?>
                <ul>
                    <li>nama : <?php echo $mhs["nama"] ?></li>
                    <li>email : <?php echo $mhs["email"] ?></li>
                    <li>nrp : <?php echo $mhs["nrp"] ?></li>
                    <li>jurusan  : <?php echo $mhs["jurusan"] ?></li>
                </ul>
            <?php endforeach ;  ?>
            
        </div>
    </div>
</div>