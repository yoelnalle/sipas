<form action="<?php echo base_url('index.php/administrator/update_user/'.$user->id_user) ?>" method="post">
	<input type="hidden" name="id_user" value="<?= $user->id_user ?>" required>
	<input type="hidden" name="level" value="<?= $user->level ?>" required>	
<!-- <?php if ($this->session->flashdata('pesan') !== null): ?>
	<div class="alert alert-info">
		<?= $this->session->flashdata('pesan') ?>
	</div> 
	<?php endif; ?> -->
	<div class="form-group">
		<label> nama:</label>
		<input type="text" name="nama" class="form-control" placeholder="nama" required
			value="<?= $user->nama ?>">
	</div>
	<div class="form-group">
		<label> username:</label>
		<input type="username" name="username" class="form-control" placeholder="username" required
			value="<?= $user->username ?>">
	</div>
	<div class="form-group">
		<label> password:</label>
		<input type="password" class="form-control" placeholder="********" disabled>
			<p class="text-muted">Password Dienkripsi!</p>
	</div>
	<div class="form-group">
		<label> ubah password:</label>
		<input type="password" name="password" class="form-control" placeholder="********" required>
			<p class="text-muted">Password Dienkripsi!</p>
	</div>
	<hr>
	<div class="form-group">
		<input onclick='return confirm("Yakin ingin mengubah data ini?")' type="submit" name="update" class="btn btn-primary" value="Save Change">
		
	</div>
</form>
