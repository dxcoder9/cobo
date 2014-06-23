<h1>TAMBAH DATA</h1>
<?php echo validation_errors(); ?>
<form action="<?php echo site_url('cnc/input'); ?>" method="POST">
<input type="email" placeholder="email" name="email"><br>
<input type="text" placeholder="nama" name="nama"><br>
<input type="number" placeholder="no hp" name="no_hp"><br>
<input type="text" placeholder="twitter" name="twitter"><br>
<input type="submit" value="submit">
<a href="<?php echo site_url('cnc'); ?>"><button type="button">KENSEL</button></a>
</form>