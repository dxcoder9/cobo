<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/asset/css/bootstrap.min.css">
</head>
<body>
	<?php if($this->session->flashdata('pesan')){echo $this->session->flashdata('pesan');} ?><br>
	<a href="<?php echo site_url('cnc/tambah'); ?>">

		<button class="btn btn-danger">TAMBAH</button></a>
	<table border=1>
		<tr>
			<th>No</th>
			<th>Email</th>
			<th>Nama</th>
			<th>No HP</th>
			<th>Twitter</th>
			<th>panel</th>
		</tr>
		<?php
		$no=1;
		foreach ($cnc as $row) { ?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $row->email ;?></td>
			<td><?php echo $row->nama ;?></td>
			<td><?php echo $row->no_hp ;?></td>
			<td><?php echo $row->twitter ;?></td>
			<td><a href="<?php echo site_url('cnc/delete/'.$row->id_cnc) ?>" onClick="return confirm('anda yakin?')">hapus</a>
				|<a href="<?php echo site_url('cnc/edit/'.$row->id_cnc); ?>">edit</a></td>
		</tr>	
		<?php $no++; } ?>	
	</table>
	<a href="<?php echo site_url('cnc/login');?>">LOGIN</a>
</body>

</html>