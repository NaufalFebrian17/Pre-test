<form method="post" action="" enctype="multipart/form-data">

    <d class="modal-body">
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">NIM</label>
            <input type="text" class="form-control" name="nim" placeholder="Masukkan NIM" required>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama" required>
        </div>
        </div>
        <div class="modal-footer">

            <input type="submit" value="simpan" name="simpan" class="btn btn-primary">
        </div>
</form>

<?php
if (isset($_POST['simpan'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    echo "Halo " . $nim . ", " . $nama;
    }
?>