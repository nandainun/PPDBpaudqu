<?php defined('BASEPATH') or die("ip anda sudah tercatat oleh sistem kami") ?>
<div class="section-header">

    <button type="button" class="btn btn-icon icon-left btn-primary" data-toggle="modal" data-target="#tambahdata">
        <i class="far fa-edit"></i> Tambah Data
    </button>

    <!-- Modal -->
    <div class="modal fade" id="tambahdata" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form id="form-tambah">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Data Kelas</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Kode Kelas</label>
                            <input type="text" name="id_jurusan" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label>Nama Kelas</label>
                            <input type="text" name="nama_jurusan" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label>Umur</label>
                            <input type="text" name="umur" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label>Jam Kelas</label>
                            <input type="text" name="jam_kelas" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label>Kelompok</label>
                            <input type="text" name="kelompok" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <input type="text" name="ket" class="form-control" required="">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Data jurusan</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="table-1">
                        <thead>
                            <tr>
                                <th class="text-center">
                                    No
                                </th>
                                <th>Nama Kelas</th>
                                <th>Umur</th>
                                <th>Jam Kelas</th>
                                <th>Kelompok</th>
                                <th>Keterangan</th>
                                <th>status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = mysqli_query($koneksi, "select * from jurusan");
                            $no = 0;
                            while ($jurusan = mysqli_fetch_array($query)) {
                                $no++;
                            ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $jurusan['nama_jurusan'] ?></td>
                                    <td><?= $jurusan['umur'] ?></td>
                                    <td><?= $jurusan['jam_kelas'] ?></td>
                                    <td><?= $jurusan['kelompok'] ?></td>
                                    <td><?= $jurusan['ket'] ?></td>
                                    <td>
                                        <?php if ($jurusan['status'] == 1) { ?>
                                            <span class="badge badge-success">Aktif</span>
                                        <?php } else { ?>
                                            <span class="badge badge-danger">Non Aktif</span>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <button data-id="<?= $jurusan['id_jurusan'] ?>" class="hapus btn btn-danger">Hapus</button>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-edit<?= $no ?>">
                                            Edit
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="modal-edit<?= $no ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <form id="form-edit<?= $no ?>">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Edit Data</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <input type="hidden" value="<?= $jurusan['id_jurusan'] ?>" name="id_jurusan" class="form-control" required="">
                                                            <div class="form-group">
                                                                <label>Nama Kelas</label>
                                                                <input type="text" name="nama" value="<?= $jurusan['nama_jurusan'] ?>" class="form-control" required="">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Umur</label>
                                                                <input type="text" name="umur" value="<?= $jurusan['umur'] ?>" class="form-control" required="">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Jam Kelas</label>
                                                                <input type="text" name="jam_kelas" value="<?= $jurusan['jam_kelas'] ?>" class="form-control" required="">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Kelompok</label>
                                                                <input type="text" name="kelompok" value="<?= $jurusan['kelompok'] ?>" class="form-control" required="">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Keterangan</label>
                                                                <input type="text" name="ket" value="<?= $jurusan['ket'] ?>" class="form-control" required="">
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="control-label">Status Kelas</div>
                                                                <label class="custom-switch mt-2">
                                                                    <input type="checkbox" name="status" class="custom-switch-input" value='1' <?php if ($jurusan['status'] == 1) {
                                                                                                                                                    echo "checked";
                                                                                                                                                } ?>>
                                                                    <span class="custom-switch-indicator"></span>
                                                                    <span class="custom-switch-description"> Pilih Status</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Save</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <script>
                                    $('#form-edit<?= $no ?>').submit(function(e) {
                                        e.preventDefault();
                                        $.ajax({
                                            type: 'POST',
                                            url: 'mod_jurusan/crud_jurusan.php?pg=ubah',
                                            data: $(this).serialize(),
                                            success: function(data) {

                                                iziToast.success({
                                                    title: 'OKee!',
                                                    message: 'Data Berhasil diubah',
                                                    position: 'topRight'
                                                });
                                                setTimeout(function() {
                                                    window.location.reload();
                                                }, 2000);
                                                $('#modal-edit<?= $no ?>').modal('hide');
                                                //$('#bodyreset').load(location.href + ' #bodyreset');
                                            }
                                        });
                                        return false;
                                    });
                                </script>
                            <?php }
                            ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('#form-tambah').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'mod_jurusan/crud_jurusan.php?pg=tambah',
            data: $(this).serialize(),
            success: function(data) {

                iziToast.success({
                    title: 'Mantap!',
                    message: 'Data Berhasil ditambahkan',
                    position: 'topRight'
                });
                setTimeout(function() {
                    window.location.reload();
                }, 2000);
                $('#tambahdata').modal('hide');
                //$('#bodyreset').load(location.href + ' #bodyreset');
            }
        });
        return false;
    });

    $('#table-1').on('click', '.hapus', function() {
        var id = $(this).data('id');
        console.log(id);
        swal({
            title: 'Are you sure?',
            text: 'Akan menghapus data ini!',
            icon: 'warning',
            buttons: true,
            dangerMode: true,
        }).then((result) => {
            if (result) {
                $.ajax({
                    url: 'mod_jurusan/crud_jurusan.php?pg=hapus',
                    method: "POST",
                    data: 'id_jurusan=' + id,
                    success: function(data) {
                        iziToast.error({
                            title: 'Horee!',
                            message: 'Data Berhasil dihapus',
                            position: 'topRight'
                        });
                        setTimeout(function() {
                            window.location.reload();
                        }, 2000);
                    }
                });
            }
        })

    });
</script>