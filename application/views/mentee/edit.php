<?php $this->load->view("template/header");?>
<div class="row">
	<div class="col-lg-12">
	<h1 class="page-header">Edit Mentee</h1>
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
<form class="form-horizontal" method="POST" action="<?php echo base_url()?>mentee/edit/post/<?php echo $mentee->id?>">
	<fieldset>

		<!-- Text input-->
		<div class="form-group">
			<label class="col-md-4 control-label" for="fn">Nama</label>  
			<div class="col-md-4">
				<input name="name" type="text" placeholder="Nama Lengkap" class="form-control input-md" value="<?php echo $mentee->name?>" required="">

			</div>
		</div>

		<!-- Text input-->
		<div class="form-group">
			<label class="col-md-4 control-label" for="ln">Usia</label>  
			<div class="col-md-4">
				<input name="age" type="text" placeholder="age" class="form-control input-md" value="<?php echo $mentee->age?>" required="">

			</div>
		</div>

		<!-- Text input-->
		<div class="form-group">
			<label class="col-md-4 control-label" for="cmpny">Interest</label>  
			<div class="col-md-4">
				<input name="interest" type="text" placeholder="interest" class="form-control input-md" value="<?php echo $mentee->interest?>" required="">

			</div>
		</div>

		<!-- Text input-->
		<div class="form-group">
			<label class="col-md-4 control-label" for="email">Email</label>  
			<div class="col-md-4">
				<input id="email" name="email" type="text" placeholder="email" class="form-control input-md" value="<?php echo $mentee->email?>" required="">

			</div>
		</div>

		<!-- Text input-->
		<div class="form-group">
			<label class="col-md-4 control-label" for="add1">Nomor HP</label>  
			<div class="col-md-4">
				<input name="hp" type="text" placeholder="Nomor Handphone" class="form-control input-md" value="<?php echo $mentee->hp?>" required="">

			</div>
		</div>

		<!-- Text input-->
		<div class="form-group">
			<label class="col-md-4 control-label" >Alamat</label>  
			<div class="col-md-4">
				<textarea name="address" type="text" placeholder="" class="form-control input-md"><?php echo $mentee->address?> </textarea> 

			</div>
		</div>

		<!-- Text input-->
		<div class="form-group">
			<label class="col-md-4 control-label" for="city">Kegiatan</label>  
			<div class="col-md-4">
				<textarea name="activity" type="text" class="form-control input-md" required=""><?php echo $mentee->activity?></textarea>

			</div>
		</div>

		<!-- Text input-->
		<div class="form-group">
			<label class="col-md-4 control-label" for="zip">Facebook</label>  
			<div class="col-md-4">
				<input name="facebook" type="text" placeholder="https://www.facebook.com/username" class="form-control input-md" value="<?php echo $mentee->facebook?>" required="">

			</div>
		</div>

		<!-- Text input-->
		<div class="form-group">
			<label class="col-md-4 control-label" for="ctry">Quote</label>  
			<div class="col-md-4">
				<input name="quote" type="text" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit" class="form-control input-md" value="<?php echo $mentee->quote?>" required="">

			</div>
		</div>


		<!-- Select Basic -->
		<div class="form-group">
			<label class="col-md-4 control-label" for="selectbasic">Tingkat</label>
			<div class="col-md-4">
				<select id="selectbasic" name="grade" class="form-control input-md">
					<option <?php if($mentee->grade == 10) echo "selected" ?> value="10">10</option>
					<option <?php if($mentee->grade == 11) echo "selected" ?> value="11">11</option>
					<option <?php if($mentee->grade == 12) echo "selected" ?> value="12">12</option>
				</select>
			</div>
		</div>
		<!-- Multiple Radios (inline) -->
		<!-- Select Basic -->
		<div class="form-group">
			<label class="col-md-4 control-label" for="selectbasic">Program Studi</label>
			<div class="col-md-4">
				<select id="selectbasic" name="class_prefix" class="form-control input-md">
					<option <?php if($mentee->class_prefix == "iis") echo "selected" ?> value="iis">IIS</option>
					<option <?php if($mentee->class_prefix == "mia") echo "selected" ?> value="mia">MIA</option>
				</select>
			</div>
		</div>
		<!-- Text input-->
		<div class="form-group">
			<label class="col-md-4 control-label" for="phone">Kelas</label>  
			<div class="col-md-4">
				<input id="class" name="class" type="text" placeholder="3" class="form-control input-md" value="<?php echo $mentee->class?>" required="">

			</div>
		</div>
		<div class="form-group">
			<label class="col-md-4 control-label" for="phone">Tahun Ajaran</label>  
			<div class="col-md-4">
				<input id="class" name="school_year" type="text" placeholder="2016" class="form-control input-md" value="<?php echo $mentee->school_year?>" required="">

			</div>
		</div>

		<!-- Select Basic -->
		<div class="form-group">
			<label class="col-md-4 control-label" for="selectbasic">Grup Mentoring</label>
			<div class="col-md-4">
				<select id="selectbasic" name="id_mentor_group" class="form-control input-md">
					<option value="-1">Belum ada</option>
				</select>
			</div>
		</div>

		<!-- Button -->
		<div class="form-group">
			<label class="col-md-4 control-label" for="submit"></label>
			<div class="col-md-4">
				<button id="submit" class="btn btn-primary">Submit</button>
				<a href="<?php echo base_url()?>mentee"id="submit" class="btn btn-primary">Kembali</a>
			</div>
		</div>

	</fieldset>
</form>
<?php $this->load->view("template/footer");?>
