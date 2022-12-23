<?php
require("../../config/database.php");
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data_PPDB.xls");
session_start();
if (!isset($_SESSION['id_user'])) {
    die('Anda tidak diijinkan mengakses langsung');
}
?>
<style>
    .str {
        mso-number-format: \@;
    }
</style>

<center>
    <h3>DATA SISWA </h3>
</center>
<table border="1">
    <thead>
        <tr>
            <th class="text-left">
                No
            </th>
            <th>No Daftar</th>
            <th>Kelas</th>
            <th>Username</th>
            <th>Nama Siswa</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Anak Ke</th>
            <th>Berat Badan</th>
            <th>Tinggi Badan</th>
            <th>Berat Badan Lahir</th>
            <th>Penyakit Sering Diderita</th>
            <th>Penyakit Pernah Diderita</th>
            <th>Pantangan Makan</th>
            <th>Alamat</th>
            <th>Kecamatan</th>
            <th>Kabupaten/kota</th>
            <th>Provinsi</th>
            <th>Nama Ayah</th>
            <th>Tanggal Lahir Ayah</th>
            <th>Pendidikan Ayah</th>
            <th>Pekerjaan Ayah</th>
            <th>No HP Ayah</th>
            <th>Nama Ibu</th>
            <th>Tanggal Lahir Ibu</th>
            <th>Pendidikan Ibu</th>
            <th>Pekerjaan Ibu</th>
            <th>No HP Ibu</th>

        </tr>
    </thead>
    <tbody>
        <?php
        $query = mysqli_query($koneksi, "select * from daftar");
        $no = 0;
        while ($siswa = mysqli_fetch_array($query)) {
            $no++;
        ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $siswa['no_daftar'] ?></td>
                <td><?= $siswa['jurusan'] ?></td>
                <td class="str"><?= $siswa['nisn'] ?></td>
                <td><?= $siswa['nama'] ?></td>
                <td><?= $siswa['tempat_lahir'] ?></td>
                <td class="str"><?= $siswa['tgl_lahir'] ?></td>
                <td><?= $siswa['jenkel'] ?></td>
                <td class="str"><?= $siswa['anak_ke'] ?></td>
                <td class="str"><?= $siswa['bb'] ?></td>
                <td class="str"><?= $siswa['tt'] ?></td>
                <td class="str"><?= $siswa['bb_lahir'] ?></td>
                <td class="str"><?= $siswa['penyakit_sd'] ?></td>
                <td class="str"><?= $siswa['penyakit_pd'] ?></td>
                <td class="str"><?= $siswa['pantangan_makan'] ?></td>
                <td><?= $siswa['alamat'] ?>,RT <?= $siswa['rt'] ?>, RW <?= $siswa['rw'] ?></td>
                <td><?= $siswa['kecamatan'] ?></td>
                <td><?= $siswa['kota'] ?></td>
                <td><?= $siswa['provinsi'] ?></td>
                <td><?= $siswa['nama_ayah'] ?></td>
                <td class="str"><?= $siswa['tahun_ayah'] ?></td>
                <td><?= $siswa['pendidikan_ayah'] ?></td>
                <td><?= $siswa['pekerjaan_ayah'] ?></td>
                <td class="str"><?= $siswa['no_hp_ayah'] ?></td>
                <td><?= $siswa['nama_ibu'] ?></td>
                <td class="str"><?= $siswa['tahun_ibu'] ?></td>
                <td><?= $siswa['pendidikan_ibu'] ?></td>
                <td><?= $siswa['pekerjaan_ibu'] ?></td>
                <td class="str"><?= $siswa['no_hp_ibu'] ?></td>


            </tr>

        <?php }
        ?>


    </tbody>
</table>