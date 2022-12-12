<?php ob_start();
require "../../config/database.php";
require "../../config/function.php";
require "../../config/functions.crud.php";
session_start();
if (!isset($_SESSION['id_user'])) {
	die('Anda tidak diijinkan mengakses langsung');
}


?>
<!DOCTYPE html>
<html>



<body onload="window.print();">
	<font face="arial">


		<!-- <table border='0' width='100%'> -->
		<img src="../../<?= $setting['kop'] ?>" width="100%" />

		<hr>

		<table style="width:100%">
			<tr>

				<td colspan='2' align='center'>

					<b>LAPORAN PENERIMAAN PESERTA DIDIK BARU</b>

				</td>

			</tr>
			<tr>
				<td colspan='2' align='center'>
					<b><?= $setting['nama_sekolah'] ?></b>
				</td>
			</tr>
			<tr>
				<td colspan='2' align='center'>
					<b>TAHUN PELAJARAN <?php echo date("Y"); ?> / <?php echo date('Y', mktime(0, 0, 0, date('n'), date('j'), date('y') + 1)); ?></b>
				</td>
			</tr>
		</table>
		<br>
		<table border='0' width='95%' align='center'>
			<tr height='30'>
				<td height='30' colspan='4' style='text-align: justify;'>Data Siswa Baru Tahun Pelajaran <b> <?php echo date("Y"); ?> / <?php echo date('Y', mktime(0, 0, 0, date('n'), date('j'), date('y') + 1)); ?></b> pada <b><?= $setting['nama_sekolah'] ?></b></td>
			</tr>
		</table>
		<br>
		<table width='100%' style="font-size:12px" border='1px' class="table table-sm table-bordered">
			<thead style="background-color:cornflowerblue;">
				<tr width='90%' class="text-center">
					<th class="text-center">
						No
					</th>
					<th>Nama Pendaftar</th>
					<th>Jenis Kelamin</th>
					<th>Kelas</th>
					<th>Status Penerimaan</th>

				</tr>
			</thead>

			<tbody>
				<?php
				$query = mysqli_query($koneksi, "select * from daftar ");
				$no = 0;
				while ($daftar = mysqli_fetch_array($query)) {
					$no++;
					$bayar = mysqli_fetch_array(mysqli_query($koneksi, "select sum(jumlah_bayar) as total from bayar where id_daftar='$daftar[id_daftar]' "));
				?>
					<tr>
						<td class="text-center"><?= $no; ?></td>
						<td><?= $daftar['nama'] ?></td>
						<td><?= ($daftar['jenkel'] == 'L') ? "Laki-Laki" : "Perempuan"; ?></td>
						<td>
							<?php
							$lahir    = new DateTime($daftar['tgl_lahir']);
							$today        = new DateTime();
							$umur = $today->diff($lahir);

							switch ($umur) {
								case ($umur->y == '3'):
									echo 'Play Grup';
									break;
								case ($umur->y == '4'):
									echo 'Kelas A';
									break;
								case ($umur->y == '5'):
									echo 'Kelas B';
									break;
								default:
									echo 'tidak ditemukan';
							}

							?>
						</td>
						<td>
							<?php if ($daftar['status'] == 1) { ?>
								<span class="badge badge-success">Diterima</span>
							<?php } elseif ($daftar['status'] == 2) { ?>
								<span class="badge badge-danger">Dicadangkan </span>
							<?php } else { ?>
								<span class="badge badge-warning">Diverifikasi</span>
							<?php } ?>
						</td>




					</tr>

				<?php }
				?>


			</tbody>



		</table>
		<br>
		<br>
		<br>
		<table width="100% " style="margin-left: 20px;margin-right:20px;font-size:12px">
			<tr>

				<td width="60% ">

					<p>Panitia PPDB</p>
					<br><br><br>
					......................
					<p></p>




				<td width="40%">
					______________, <?= date('d-M-Y ') ?>
					<p>Kepala <?= $setting['nama_sekolah'] ?></p>
					<br><br><br>
					<?= $setting['kepala'] ?>
					<p></p>

				</td>

			</tr>
		</table>


		<br><br><br><br><br>
		<table width='100%' height='30'>
			<tbody>
				<tr>
					<td width='25px' style='border:1px solid black'></td>
					<td width='5px'>&nbsp;</td>
					<td style='border:1px solid black;font-weight:bold;font-size:14px;text-align:center;'><?= $setting['nama_sekolah'] ?></td>
					<td width='5px'>&nbsp;</td>
					<td width='25px' style='border:1px solid black'></td>
				</tr>
			</tbody>
		</table>
</body>

</html>
</div>
</font>
<script>
	window.print();
</script>