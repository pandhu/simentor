<?php $this->load->view("template/header");?>
<div class="row">
	<div class="col-lg-12">
	<h1 class="page-header">Edit Mentor</h1>
	</div>
	<!-- /.col-lg-12 -->
</div>
<?php 
	$alert = $this->session->flashdata('alert');
	if($alert):?>
<div class="alert alert-<?php echo $alert['type']?> alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong><?php echo $alert['message']?></strong>
</div>
<?php endif?>
<form class="form-horizontal" method="POST" action="<?php echo base_url()?>mentor/edit/post/<?php echo $mentor->id?>">
	<fieldset>

		<!-- Text input-->
		<div class="form-group">
			<label class="col-md-4 control-label" for="fn">Nama</label>  
			<div class="col-md-4">
				<input name="name" type="text" placeholder="Nama Lengkap" class="form-control input-md" value="<?php echo $mentor->name?>" required="">

			</div>
		</div>

		<!-- Text input-->
		<div class="form-group">
			<label class="col-md-4 control-label" for="ln">Usia</label>  
			<div class="col-md-4">
				<input name="age" type="text" placeholder="age" class="form-control input-md" value="<?php echo $mentor->age?>" required="">

			</div>
		</div>

		<!-- Text input-->
		<div class="form-group">
			<label class="col-md-4 control-label" for="cmpny">Interest</label>  
			<div class="col-md-4">
				<input name="interest" type="text" placeholder="interest" class="form-control input-md" value="<?php echo $mentor->interest?>" required="">

			</div>
		</div>

		<!-- Text input-->
		<div class="form-group">
			<label class="col-md-4 control-label" for="email">Email</label>  
			<div class="col-md-4">
				<input id="email" name="email" type="text" placeholder="email" class="form-control input-md" value="<?php echo $mentor->email?>" required="">

			</div>
		</div>

		<!-- Text input-->
		<div class="form-group">
			<label class="col-md-4 control-label" for="add1">Nomor HP</label>  
			<div class="col-md-4">
				<input name="hp" type="text" placeholder="Nomor Handphone" class="form-control input-md" value="<?php echo $mentor->hp?>" required="">

			</div>
		</div>

		<!-- Text input-->
		<div class="form-group">
			<label class="col-md-4 control-label" >Alamat</label>  
			<div class="col-md-4">
				<textarea name="address" type="text" placeholder="" class="form-control input-md"><?php echo $mentor->address?></textarea> 

			</div>
		</div>

		<!-- Text input-->
		<div class="form-group">
			<label class="col-md-4 control-label" for="city">Kegiatan</label>  
			<div class="col-md-4">
				<textarea name="activity" type="text" class="form-control input-md" required=""><?php echo $mentor->activity?></textarea>

			</div>
		</div>

		<!-- Text input-->
		<div class="form-group">
			<label class="col-md-4 control-label" for="zip">Facebook</label>  
			<div class="col-md-4">
				<input name="facebook" type="text" placeholder="https://www.facebook.com/username" class="form-control input-md" value="<?php echo $mentor->facebook?>" required="">

			</div>
		</div>

		<!-- Text input-->
		<div class="form-group">
			<label class="col-md-4 control-label" for="ctry">Quote</label>  
			<div class="col-md-4">
				<input name="quote" type="text" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit" class="form-control input-md" value="<?php echo $mentor->quote?>" required="">

			</div>
		</div>

		<!-- Button -->
		<div class="form-group">
			<label class="col-md-4 control-label" for="submit"></label>
			<div class="col-md-4">
				<button id="submit" class="btn btn-primary">Submit</button>
				<a href="<?php echo base_url()?>mentor" class="btn btn-default">Kembali</a>
			</div>
		</div>

	</fieldset>
</form>
<?php $this->load->view("template/footer");?>
