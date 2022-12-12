<ul class="sidebar-menu">
	<li class="menu-header bg-warning"></li>

	<li><a class="nav-link" href="?pg=formulir"><i class="fas fa-indent"></i> <span>Formulir</span></a></li>
	<!-- <li><a class="nav-link" href="?pg=berkas"><i class="fas fa-upload    "></i> <span>Upload Berkas</span></a></li> -->
	<li><a class="nav-link" href="?pg=cetakkartu"><i class="fas fa-print"></i> <span>Cetak Kartu Pendaftaran</span></a></li>
	<?php if ($siswa['status'] == 1) { ?>
		<li><a class="nav-link" href="?pg=df_ulang"><i class="fas fa-address-card   "></i> <span>Konfirmasi Data</span><small class="label pull-right badge badge-danger">wajib</small></a></li>
	<?php } else { ?>

	<?php } ?>

	<?php if ($siswa['status'] == 1) { ?>
		<li><a class="nav-link" href="?pg=bayar"><i class="fas fa-funnel-dollar fa-fw"></i> <span>Pembayaran</span></a></li>
	<?php } else { ?>

	<?php } ?>
	<li><a class="nav-link" href="?pg=pengumuman"><i class="fas fa-bullhorn fa-fw"></i> <span>Pengumuman</span></a></li>
</ul>