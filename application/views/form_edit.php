<h1>EDIT DATA</h1>
<?php echo validation_errors(); ?>
<form action="<?php echo site_url('cnc/edit/'.$cnc->id_cnc); ?>" method="POST">
<input type="email"  name="email" value="<?php echo $cnc->email; ?>"><br>
<input type="text"  name="nama" value="<?php echo $cnc->nama; ?>"><br>
<input type="number"  name="no_hp" value="<?php echo $cnc->no_hp; ?>"><br>
<input type="text"  name="twitter" value="<?php echo $cnc->twitter; ?>"><br>
<input type="submit" value="Update">
<a href="<?php echo site_url('cnc'); ?>"><button type="button">KENSEL</button></a>
</form>