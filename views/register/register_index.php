<form class="form-horizontal" enctype="multipart/form-data" action='' method="POST">
	<fieldset>
		<div id="legend">
			<legend class="">Register</legend>
		</div>
		<div class="control-group">
			<!-- Username -->
			<label class="control-label"  for="username">Username</label>
			<div class="controls">
				<input type="text" id="username" name="username" placeholder="" class="input-xlarge">
				<p class="help-block">Username can contain any letters or numbers, without spaces</p>
			</div>
		</div>
		<div class="control-group">
			<!-- E-mail -->
			<label class="control-label" for="email">E-mail</label>
			<div class="controls">
				<input type="text" id="email" name="email"  placeholder="" class="input-xlarge">
				<p class="help-block">Please provide your E-mail</p>
			</div>
		</div>
		<div class="control-group">
			<!-- Password-->
			<label class="control-label" for="password">Password</label>
			<div class="controls">
				<input type="password" id="password" name="password" placeholder="" class="input-xlarge">
				<p class="help-block">Password should be at least 4 characters</p>
			</div>
		</div>
		<div class="control-group">
			<!-- Password confirm-->
			<label class="control-label"  for="password_confirm">Password (Confirm)</label>
			<div class="controls">
				<input type="password" id="password_confirm" name="password_confirm" placeholder="" class="input-xlarge">
				<p class="help-block">Please confirm password</p>
			</div>
		</div>
		<div class="control-group">
<!--			Avatar-->
			<label class="control-label" for="avatar">Avatar</label>
			<div class="controls">
				<input type="file" name="file" id="file"><br>
				<p class="help-block">Avatar max dimensions are 100x100.</p>
			</div>
		</div>
		<br />
		<div class="control-group">
			<!-- Button -->
			<div class="controls">
				<button class="btn btn-success">Register</button>
			</div>
		</div>
		<br />
		<? if (isset($this->notification)) {
			echo $this->notification;}
		?>
	</fieldset>
</form>