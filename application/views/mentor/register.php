<?php $this->load->view("template/header");?>

<form class="form-horizontal" method="POST" action="<?php echo base_url()?>mentor/register/post">
	<fieldset>

		<!-- Form Name -->
		<legend>Register Mentor</legend>

		<!-- Text input-->
		<div class="form-group">
			<label class="col-md-4 control-label" for="fn">Nama</label>  
			<div class="col-md-4">
				<input name="name" type="text" placeholder="Nama Lengkap" class="form-control input-md" required="">

			</div>
		</div>

		<!-- Text input-->
		<div class="form-group">
			<label class="col-md-4 control-label" for="ln">Usia</label>  
			<div class="col-md-4">
				<input name="age" type="text" placeholder="age" class="form-control input-md" required="">

			</div>
		</div>

		<!-- Text input-->
		<div class="form-group">
			<label class="col-md-4 control-label" for="cmpny">Interest</label>  
			<div class="col-md-4">
				<input name="interest" type="text" placeholder="interest" class="form-control input-md" required="">

			</div>
		</div>

		<!-- Text input-->
		<div class="form-group">
			<label class="col-md-4 control-label" for="email">Email</label>  
			<div class="col-md-4">
				<input id="email" name="email" type="text" placeholder="email" class="form-control input-md" required="">

			</div>
		</div>

		<!-- Text input-->
		<div class="form-group">
			<label class="col-md-4 control-label" for="add1">Nomor HP</label>  
			<div class="col-md-4">
				<input name="hp" type="text" placeholder="Nomor Handphone" class="form-control input-md" required="">

			</div>
		</div>

		<!-- Text input-->
		<div class="form-group">
			<label class="col-md-4 control-label" >Alamat</label>  
			<div class="col-md-4">
				<textarea name="address" type="text" placeholder="" class="form-control input-md"> </textarea> 

			</div>
		</div>

		<!-- Text input-->
		<div class="form-group">
			<label class="col-md-4 control-label" for="city">Kegiatan</label>  
			<div class="col-md-4">
				<textarea name="activity" type="text" class="form-control input-md" required=""></textarea>

			</div>
		</div>

		<!-- Text input-->
		<div class="form-group">
			<label class="col-md-4 control-label" for="zip">Facebook</label>  
			<div class="col-md-4">
				<input name="facebook" type="text" placeholder="https://www.facebook.com/username" class="form-control input-md" required="">

			</div>
		</div>

		<!-- Text input-->
		<div class="form-group">
			<label class="col-md-4 control-label" for="ctry">Quote</label>  
			<div class="col-md-4">
				<input name="quote" type="text" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit" class="form-control input-md" required="">

			</div>
		</div>

		<!-- Button -->
		<div class="form-group">
			<label class="col-md-4 control-label" for="submit"></label>
			<div class="col-md-4">
				<button id="submit" class="btn btn-primary">Register</button>
			</div>
		</div>

	</fieldset>
</form>
<?php $this->load->view("template/footer");?>
