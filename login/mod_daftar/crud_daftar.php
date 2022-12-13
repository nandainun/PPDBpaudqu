<?php
require("../../config/database.php");
require("../../config/function.php");
require("../../config/functions.crud.php");
session_start();
if (!isset($_SESSION['id_user'])) {
    die('Anda tidak diijinkan mengakses langsung');
}
if ($pg == 'ubah') {
    $status = (isset($_POST['status'])) ? 1 : 0;
    $nama = str_replace("'", "`", $_POST['nama']);
    $data = [
        'nisn' => $_POST['nisn'],
        'nama' => ucwords(strtoupper($nama)),
        'asal_sekolah' => $_POST['asal'],
        'no_hp' => str_replace(" ", "", $_POST['nohp']),
        'status' => $status
    ];
    $id_daftar = $_POST['id_daftar'];
    update($koneksi, 'daftar', $data, ['id_daftar' => $id_daftar]);
}
if ($pg == 'tambah') {
    $query = "SELECT max(no_daftar) as maxKode FROM daftar";
    $hasil = mysqli_query($koneksi, $query);
    $data  = mysqli_fetch_array($hasil);
    $kodedaftar = $data['maxKode'];
    $noUrut = (int) substr($kodedaftar, 8, 3);
    $noUrut++;
    $char = "PPDB" . date('Y');
    $newID = $char . sprintf("%03s", $noUrut);
    $nama = str_replace("'", "`", $_POST['nama']);
    $sekolah = fetch($koneksi, 'sekolah', ['npsn' => $_POST['asal']]);
    $data = [
        'no_daftar' => $newID,
        'jenis' => $_POST['jenis'],
        'nisn' => $_POST['nisn'],
        'nama' => ucwords(strtolower($nama)),
        'npsn_asal' => $sekolah['npsn'],
        'asal_sekolah' => $sekolah['nama_sekolah'],
        'jurusan' => $_POST['jurusan'],
        'password' => $_POST['password'],
        'no_hp' => str_replace(" ", "", $_POST['nohp']),
        'foto' => 'default.png'

    ];
    $exec = insert($koneksi, 'daftar', $data);
    echo mysqli_error($koneksi);
}
if ($pg == 'hapus') {
    $id_daftar = $_POST['id_daftar'];
    delete($koneksi, 'daftar', ['id_daftar' => $id_daftar]);
}
//membatalkan proses daftar ulang
if ($pg == 'konfirmasi') {
    $$data = [];

    $exec = delete($koneksi, 'daftar', $data, ['id_daftar' => $id]);
    if ($exec) {
        $pesan = [
            'pesan' => 'Selamat.... Data Pendaftar Berhasil Dikosongkan'
        ];
        echo 'ok';
    } else {
        $pesan = [
            'pesan' => mysqli_error($koneksi)
        ];
        echo mysqli_error($koneksi);
    }
}
if ($pg == 'batal') {

    $data = [
        'status' => 0
    ];
    $where = [
        'id_daftar' => $_POST['id_daftar']
    ];
    update($koneksi, 'daftar', $data, $where);
    delete($koneksi, 'bayar', $where);
}
if ($pg == 'bataldf') {

    $data = [
        'konfirmasi' => 0
    ];
    $where = [
        'id_daftar' => $_POST['id_daftar']
    ];
    update($koneksi, 'daftar', $data, $where);
}
if ($pg == 'status') {
    $status = (isset($_POST['status'])) ? $_POST['status'] : 0;
    $nama = str_replace("'", "`", $_POST['nama']);
    $data = [
        'nisn' => $_POST['nisn'],
        'nama' => ucwords(strtoupper($nama)),
        'tempat_lahir' => $_POST['tempat_lahir'],
        'tgl_lahir' => $_POST['tgl_lahir'],
        'no_hp' => str_replace(" ", "", $_POST['no_hp']),
        'status' => $status
    ];
    $where = [
        'id_daftar' => $_POST['id_daftar']
    ];
    $id_daftar = $_POST['id_daftar'];
    update($koneksi, 'daftar', $data, $where);
}

if ($pg == 'simpandatadiri') {
    $status = (isset($_POST['status'])) ? 1 : 0;
    $data = [
        'nama'              => mysqli_escape_string($koneksi, $_POST['nama']),
        'tempat_lahir'      => mysqli_escape_string($koneksi, $_POST['tempat']),
        'tgl_lahir'         => mysqli_escape_string($koneksi, $_POST['tgl_lahir']),
        'jenkel'            => $_POST['jenkel'],
        'anak_ke'            => $_POST['anak_ke'],
        'bb'                => $_POST['bb'],
        'tt'                => $_POST['tt'],
        'bb_lahir'           => $_POST['bb_lahir'],
        'penyakit_sd'           => $_POST['penyakit_sd'],
        'penyakit_pd'           => $_POST['penyakit_pd'],
        'pantangan_makan'           => $_POST['pantangan_makan']

    ];
    $where = [
        'id_daftar' => $_POST['id_daftar']
    ];
    update($koneksi, 'daftar', $data, $where);
    echo mysqli_error($koneksi);

    echo "ok";
}


if ($pg == 'simpanalamat') {

    $data = [
        'alamat'            => mysqli_escape_string($koneksi, $_POST['alamat']),
        'rt'                => $_POST['rt'],
        'rw'                => $_POST['rw'],
        'kecamatan'         => mysqli_escape_string($koneksi, $_POST['kecamatan']),
        'kota'              => mysqli_escape_string($koneksi, $_POST['kota']),
        'provinsi'          => mysqli_escape_string($koneksi, $_POST['provinsi'])

    ];
    $where = [
        'id_daftar' => $_POST['id_daftar']
    ];
    update($koneksi, 'daftar', $data, $where);
    echo mysqli_error($koneksi);

    echo "ok";
}

if ($pg == 'simpanortu') {

    $data = [
        'nama_ayah'           => mysqli_escape_string($koneksi, $_POST['namaayah']),
        'tahun_ayah'         => mysqli_escape_string($koneksi, $_POST['tahunayah']),
        'tempat_lahir_ayah'  => $_POST['tempatlahirayah'],
        'pendidikan_ayah'     => $_POST['pendidikan_ayah'],
        'pekerjaan_ayah'      => $_POST['pekerjaan_ayah'],
        'no_hp_ayah'          => $_POST['nohpayah'],
        'nama_ibu'            => mysqli_escape_string($koneksi, $_POST['namaibu']),
        'tahun_ibu'          => mysqli_escape_string($koneksi, $_POST['tahunibu']),
        'tempat_lahir_ibu'  => $_POST['tempatlahiribu'],
        'pendidikan_ibu'      => $_POST['pendidikan_ibu'],
        'pekerjaan_ibu'       => $_POST['pekerjaan_ibu'],
        'no_hp_ibu'           => $_POST['nohpibu'],
        'nama_wali'           => mysqli_escape_string($koneksi, $_POST['namawali']),
        'tahun_wali'         => mysqli_escape_string($koneksi, $_POST['tahunwali']),
        'pendidikan_wali'     => $_POST['pendidikan_wali'],
        'pekerjaan_wali'      => $_POST['pekerjaan_wali'],
        'no_hp_wali'          => $_POST['nohpwali']
    ];
    $where = [
        'id_daftar' => $_POST['id_daftar']
    ];
    update($koneksi, 'daftar', $data, $where);
    echo mysqli_error($koneksi);

    echo "ok";
}
